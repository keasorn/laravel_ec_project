@extends("front_end.layouts.main")

@section("map")
    Product Detail
@endsection
@section("main-content")
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Amout</th>
                    <th>Color</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;?>
                @foreach ($proAddInCart as $row )
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->product->name}}</td>
                        <td>{{$row->amount}}</td>
                        <td>{{$row->color}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <form action="{{route("check_out.store")}}" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                {{--            <input type="hidden" class="form-control" id="product_id" name="product_id" value="{{$product->id}}">--}}
            </div>
            <div class="form-group">
                <label for="total_price">Total product</label>
                <input type="number" class="form-control" id="total_product" name="total_product"
                       placeholder="Enter Amount">
            </div>
            <div class="form-group">
                <label for="total_price">Total Price</label>
                <input type="number" class="form-control" id="total_price" name="total_price"
                       placeholder="Enter Amount">
            </div>

            <div class="form-group">
                <label for="customer_name">Your Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name"
                       placeholder="Enter Amount">
            </div>
            <div class="form-group">
                <label for="tell">Tel</label>
                <input type="text" class="form-control" id="tell" name="tell"
                       placeholder="Enter Amount">
            </div>
            <div class="form-group">
                <label for="address">Adress</label>
                <input type="text" class="form-control" id="address" name="address"
                       placeholder="Enter Amount">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Order Now </button>
        </div>
    </form>
@endsection
