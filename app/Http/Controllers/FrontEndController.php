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
    function result(Request $request)
    {
        $products = Product::where("cat_id",$request->id)->paginate(4);

        $data = array(
            'products' =>$products,
            'title'=>"PRODUCT ALL"
        );

        return view('front_end.result')->with($data);
    }
    function productDetail(Request $request)
    {
        $product = Product::where("id",$request->pro_id)->first();
        $data = array(
            'product' =>$product,
        );
        return view('front_end.product_detail')->with($data);
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


}
