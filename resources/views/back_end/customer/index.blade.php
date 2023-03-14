@extends("back_end.layout.main")

@section("title")
    Product Category
@endsection

@section("content")
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Customer List</h3>

          <div class="card-tools">
            <a href="{{route('customer.create')}}" class="btn btn-info">Create New</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Gender</th>
                <th style="width: 40px">Phone</th>
                <th style="width: 40px">action</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=1;?>
                @foreach ($result as $row )
              <tr>
                <td>{{$i++}}</td>
                <td>{{$row->name}}</td>
                <td>
                    {{$row->gender}}
                </td>
                <td><span class="badge bg-danger">{{$row->tel}}</span></td>
                <td>
                    <form action="{{ route('customer.destroy',$row->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('customer.show',$row->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('customer.edit',$row->id) }}">Edit</a>

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