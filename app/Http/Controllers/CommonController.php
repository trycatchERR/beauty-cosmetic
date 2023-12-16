<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function homeView()
    {
        $products = Product::limit(3)->get();
        return view('index', [
            'products' => $products
        ]);
    }

    public function aboutView()
    {
        return view('about');
    }

    public function contactView()
    {
        return view('contact');
    }
}
