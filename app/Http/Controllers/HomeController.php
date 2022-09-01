<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductReview;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $Usercount=User::all()->count();
        $Productcount=Product::all()->count();
        $ProductReviewcount=ProductReview::all()->count();
        return view('home');
    }
}
