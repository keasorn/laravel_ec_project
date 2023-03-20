<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddToCartRequest;
use App\Http\Requests\UpdateAddToCartRequest;
use App\Models\AddToCart;

class AddToCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAddToCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddToCartRequest $request)
    {
        $model = new AddToCart();
        $model->amount = $request->amount;
        $model->color = $request->color;
        $model->product_id = $request->product_id;
        $insert = $model->save();
        if( $insert){
            return  redirect()->route("check_out.create","check_id=". $insert);
        }else{
            return  "fale";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddToCart  $addToCart
     * @return \Illuminate\Http\Response
     */
    public function show(AddToCart $addToCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddToCart  $addToCart
     * @return \Illuminate\Http\Response
     */
    public function edit(AddToCart $addToCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAddToCartRequest  $request
     * @param  \App\Models\AddToCart  $addToCart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddToCartRequest $request, AddToCart $addToCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddToCart  $addToCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddToCart $addToCart)
    {
        //
    }
}
