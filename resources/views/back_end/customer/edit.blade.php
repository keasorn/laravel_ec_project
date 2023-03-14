@extends("back_end.layout.main")

@section("title")
    Product Category
@endsection

@section("content")
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Customer Edit FORM
    </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route("customer.update",$customer->id)}}" method="POST">
      @csrf
      @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                       placeholder="Enter name" value="{{$customer->name}}">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select type="text" class="form-control" id="gender" name="gender" >
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tel">Phone</label>
                <input type="tel" class="form-control" id="tel" name="tel"
                       placeholder="Enter name" value="{{$customer->tel}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
        <a href="{{route("customer.index")}}" class="btn btn-warning">BACK</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
@endsection
 