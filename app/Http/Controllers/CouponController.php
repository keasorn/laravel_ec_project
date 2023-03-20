<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use App\Models\Coupon;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'coupons'=>Coupon::get()
        );
        return view("back_end.manage_product.coupon.index")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.manage_product.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCouponRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouponRequest $request)
    {
        $model = new Coupon();
        $model->code = $request->code;
        $model->discount_amount = $request->discount_amount;
        $model->discount_type = $request->discount_type;
        $model->expiration_date = $request->expiration_date;
        if($model->save()){
            return redirect()->route("coupons.index");
        }else{
            return "insert to db false";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        $data = array(
            'coupon'=> $coupon
        );
        return view('back_end.manage_product.coupon.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        $data = array(
            'coupon'=> $coupon
        );
        return view('back_end.manage_product.coupon.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCouponRequest  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouponRequest $request, Coupon $coupon)
    {
        $model = $coupon;
        $model->code = $request->code;
        $model->discount_amount = $request->discount_amount;
        $model->discount_type = $request->discount_type;
        $model->expiration_date = $request->expiration_date;
        if ($model->update()) {
            return redirect()->route('coupons.index');
        } else {
            return 'insert to db false';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        if($coupon->delete()){
            return redirect()->route('coupons.index');
        } else {
            return 'delete from db false';
        }
    }
}
