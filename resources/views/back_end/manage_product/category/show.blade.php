@extends("back_end.layout.main")

@section("title")
    Product Category
@endsection

@section("content")
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Product Category Detial
      </h3> 
    </div>
    <div class="card-body">
      <h1>Name :{{$productCategory->name}}</h1>

      <h1>Slug :{{$productCategory->slug}}</h1>
      <h1>Parent :{{$productCategory->parent}}</h1>
    </div>


    <div class="card-footer">
      <a href="{{route("product_category.index")}}" class="btn btn-warning">BACK</a>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div> 
  </div>
@endsection
 