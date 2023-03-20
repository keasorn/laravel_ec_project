@extends("back_end.layout.main")

@section("title")
    Coupon Edit
@endsection

@section("content")
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Coupon Edit FORM
    </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route("coupons.update",$coupon->id)}}" method="POST">
      @csrf
      @method('PUT')

        <div class="card-body">
            <div class="form-group">
                <label for="code">CODE</label>
                <input type="text" class="form-control" id="code" name="code"
                       placeholder="Enter Code" value="{{$coupon->code}}">
            </div>
            <div class="form-group">
                <label for="discount_amount">Discount Amount</label>
                <input type="number" class="form-control" id="discount_amount" name="discount_amount"
                       placeholder="Enter Amount" value="{{$coupon->discount_amount}}">
            </div>

            <div class="form-group">
                <label for="discount_type">Discount Amount</label>

                <select name="discount_type" id="discount_type" class="form-control">
                    <option value="Black Friday" {{$coupon->discount_type=='Black Friday'?'selected':''}}>Black Friday</option>
                    <option value="Anniversary" {{$coupon->discount_type=='Anniversary'?'selected':''}}>Anniversary</option>
                    <option value="Khmer New Year" {{$coupon->discount_type=='Khmer New Year'?'selected':''}}>Khmer New Year</option>
                </select>
            </div>

            <div class="form-group">
                <label for="expiration_date">Expiration Date</label>
                <input type="date" class="form-control" id="expiration_date" name="expiration_date"
                       placeholder="Enter Date" value="{{$coupon->expiration_date}}">
            </div>
        </div>

      <div class="card-footer">
        <a href="{{route("coupons.index")}}" class="btn btn-warning">BACK</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
@endsection
 