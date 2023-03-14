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

    function customer()
    {
        return view('front_end.shop');
    }
    function productList()
    {
        $products = Product::latest()->paginate(5);

        return view('front_end.product_list', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    function checkOut()
    {
        return view('front_end.checkout');
    }

    function addToCart()
    {
        return view('front_end.add_to_cart');
    }

    function productDetail()
    {
        return view('front_end.add_to_cart');
    }

}
