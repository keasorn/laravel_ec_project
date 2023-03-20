

@extends("front_end.layouts.main")

@section("map")
    Product Detail
@endsection
@section("main-content")
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    {{ $product->detail }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <img src="/images/{{ $product->image }}" width="500px">
                </div>
            </div>
        </div>
    </div>
    <form action="{{route("add_to_cart.store")}}" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <input type="hidden" class="form-control" id="product_id" name="product_id" value="{{$product->id}}">
            </div>
            <div class="form-group">
                <label for="amount">Discount Amount</label>
                <input type="number" class="form-control" id="amount" name="amount"
                       placeholder="Enter Amount">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <select name="color" id="color" class="form-control">
                    <option value="White" >White</option>
                    <option value="Black">Black</option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add To Card</button>
        </div>
    </form>
@endsection

