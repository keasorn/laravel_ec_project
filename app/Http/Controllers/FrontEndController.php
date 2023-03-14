<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    function shop()
    {
        $products = Product::get();

        $data = array(
            'products' =>$products,
            'title'=>"PRODUCT ALL"
        );

        return view('front_end.shop')->with($data);
    }
    function home(){
        return view('front_end.home');
    }
}
