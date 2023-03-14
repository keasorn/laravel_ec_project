@extends("back_end.layout.main")

@section("title")
    Product Category
@endsection

@section("content")
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Product Category Create FORM
    </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route("product_category.store")}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name"
          placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug"
            placeholder="Enter slug">
        </div>
        <div class="form-group">
            <label for="parent">Parent</label>
            <input type="text" class="form-control" id="parent" name="parent"
            placeholder="Enter parent">
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
 