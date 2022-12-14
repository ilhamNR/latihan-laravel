<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Store;

class ProductController extends Controller
{

    //
    public function index()
    {
        $products = Product::all();
        $storename = Product::find(1)->storeid->name;
        return view('products.index', [ 'products' => $products, 'storename' =>$storename
        ]);
    }
    public function show($product)
    {
        return view('products.show', [

        ]);
    }
}
