@extends("back_end.layout.main")

@section("title")
    Product Category
@endsection

@section("content")
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Product Category Edit FORM
    </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route("product_category.update",$productCategory->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name"
          placeholder="Enter name" value="{{$productCategory->name}}">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug"
            placeholder="Enter slug" value="{{$productCategory->slug}}">
        </div>
        <div class="form-group">
            <label for="parent">Parent</label>
            <input type="text" class="form-control" id="parent" name="parent"
            placeholder="Enter parent" value="{{$productCategory->parent}}">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <a href="{{route("product_category.index")}}" class="btn btn-warning">BACK</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
@endsection
 