@extends("back_end.layout.main")

@section("title")
    Product Category
@endsection

@section("content")


    <table class="table table-bordered">
        <tr>
            <th>customer_name</th>
            <th>Tell</th>
            <th>address</th>
            <th>total_price</th>
            <th>total_product</th>
        </tr>
        @foreach ($orders as $row)
            <tr>
                <td>{{ $row->customer_name }}</td>
                <td>{{ $row->tell }}</td>
                <td>{{ $row->address }}</td>
                <td>{{ $row->total_price }}</td>
                <td>{{ $row->total_product }}</td>
            </tr>
        @endforeach
    </table>


@endsection