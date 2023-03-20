@extends("back_end.layout.main")

@section("title")
    Product Coupons
@endsection

@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Product Coupon</h3>

            <div class="card-tools">
                <a href="{{route('coupons.create')}}" class="btn btn-info">Create New</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Code</th>
                    <th>Discount Amount</th>
                    <th >Discount Type</th>
                    <th>Expiration Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;?>
                @foreach ($coupons as $row )
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->code}}</td>
                        <td>{{$row->discount_amount}}</td>
                        <td>{{$row->discount_type}}</td>
                        <td>{{$row->expiration_date}}</td>
                        <td width="300">
                            <form action="{{ route('coupons.destroy',$row->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('coupons.show',$row->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('coupons.edit',$row->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection


@section("footer")
    <h1>FOOTER</h1>
@endsection