<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $productHot = Product::where([
            'pro_hot' => Product::HOT_ON,
            'pro_active' => Product::STATUS_PUBLIC
        ])->limit(5)->get();

        $articleNews = Article::orderBy('id','DESC')->limit(6)->get();

        $viewData = [
            'productHot' => $productHot,
            'articleNews' => $articleNews
        ];

        return view('home.index',$viewData);
    }
}
