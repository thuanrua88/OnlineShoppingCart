<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function addProduct(Request $request,$id)
    {
        $product = Product::select('pro_name','id','pro_price','pro_sale','pro_avatar')->find($id);

        if (!$product) return redirect('/');

        \Cart::add(['id' => $id,
            'name' => $product->pro_name,
            'quantity' => 1,
            'price' => $product->pro_price,
            'attributes' => array(
                'avatar' => $product->pro_avatar
            )
        ]);

        return redirect()->back();
    }

    public function getListShoppingCart()
    {
        $products = \Cart::getContent();
        return view('shopping.index',compact('products'));
    }
}
