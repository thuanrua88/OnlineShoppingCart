<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('category:id,c_name');

        if ($request->name) $products -> where('pro_name','like','%'.$request->name.'%');
        if ($request->cate) $products->where('pro_category_id',$request->cate);

        $products = $products -> orderByDesc('id') -> paginate(10);

        $categories = $this->getCategories();

        $viewData = [
            'products' => $products,
            'categories' =>$categories
        ];
        return view('admin::product.index',$viewData);
    }

    public function create()
    {
        $categories = $this->getCategories();
        return view('admin::product.create',compact('categories'));
    }

    public function store(RequestProduct $requestProduct)
    {
        $this->insertOrUpdate($requestProduct);
        return redirect()->back();
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = $this->getCategories();
        return view('admin::product.update',compact('product','categories'));
    }

    public function update(RequestProduct $requestProduct,$id)
    {
        $this->insertOrUpdate($requestProduct,$id);
        return redirect()->back();
    }

    public function getCategories()
    {
        return Category::all();
    }

    public function insertOrUpdate($requestProduct,$id='')
    {
        $product = new Product();

        if ($id) $product = Product::find($id);

        $product -> pro_name= $requestProduct -> pro_name;
        $product -> pro_slug = str_slug($requestProduct -> pro_name);
        $product -> pro_category_id = $requestProduct -> pro_category_id;
        $product -> pro_price = $requestProduct -> pro_price;
        $product -> pro_sale = $requestProduct -> pro_sale;
        $product -> pro_description = $requestProduct -> pro_description;
        $product -> pro_content = $requestProduct -> pro_content;
        $product -> pro_title_seo = $requestProduct -> pro_title_seo ? $requestProduct -> pro_title_seo : $requestProduct -> pro_name;
        $product -> pro_description_seo = $requestProduct -> pro_description_seo ? $requestProduct -> pro_description_seo : $requestProduct -> pro_name;

        $product -> save();
    }

    public function action($action,$id)
    {
        if ($action)
        {
            $product = Product::find($id);
            switch ($action)
            {
                case 'delete';
                    $product->delete();
                    break;

                case 'active';
                    $product->pro_active = $product->pro_active ? 0 : 1;
                    $product->save();
                    break;

                case 'hot';
                    $product->pro_hot = $product->pro_hot ? 0 : 1;
                    $product->save();
                    break;
            }
        }
        return redirect()->back();
    }
}
