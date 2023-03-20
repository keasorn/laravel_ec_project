@extends("back_end.layout.main")

@section("title")
    Coupon Show
@endsection

@section("content")
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Coupon Detail
      </h3> 
    </div>
    <div class="card-body">
      <h1>Code :{{$coupon->code}}</h1>
      <h1>Discount amount :{{$coupon->discount_amount}}</h1>
      <h1>Discount type :{{$coupon->discount_type}}</h1>
      <h1>Expiration date :{{$coupon->expiration_date}}</h1>
    </div>


    <div class="card-footer">
      <a href="{{route("coupons.index")}}" class="btn btn-warning">BACK</a>
     </div>
  </div>
@endsection
 