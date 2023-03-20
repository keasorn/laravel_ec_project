@extends("back_end.layout.main")

@section("title")
    Coupon Form Create
@endsection

@section("content")
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Coupon Form Create
    </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route("coupons.store")}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="code">CODE</label>
          <input type="text" class="form-control" id="code" name="code"
          placeholder="Enter Code">
        </div>
          <div class="form-group">
          <label for="discount_amount">Discount Amount</label>
          <input type="number" class="form-control" id="discount_amount" name="discount_amount"
          placeholder="Enter Amount">
        </div>

        <div class="form-group">
          <label for="discount_type">Discount Amount</label>

          <select name="discount_type" id="discount_type" class="form-control">
              <option value="Black Friday" >Black Friday</option>
              <option value="Anniversary">Anniversary</option>
              <option value="Khmer New Year">Khmer New Year</option>
          </select>
      </div>

          <div class="form-group">
              <label for="expiration_date">Expiration Date</label>
              <input type="date" class="form-control" id="expiration_date" name="expiration_date"
                     placeholder="Enter Date">
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <a href="{{route("product_category.index")}}" class="btn btn-warning">BACK</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
 