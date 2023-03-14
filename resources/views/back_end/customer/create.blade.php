@extends("back_end.layout.main")

@section("title")
    Customer
@endsection

@section("content")
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Customer Create FORM
    </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route("customer.store")}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name"
          placeholder="Enter name">
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
                     placeholder="Enter name">
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
 