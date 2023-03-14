@extends("back_end.layout.main")

@section("title")
    customer
@endsection

@section("content")
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">customer Detail
      </h3> 
    </div>
    <div class="card-body">
      <h1>Name :{{$customer->name}}</h1>

      <h1>Slug :{{$customer->gender}}</h1>
      <h1>Parent :{{$customer->tel}}</h1>
    </div>


    <div class="card-footer">
      <a href="{{route("customer.index")}}" class="btn btn-warning">BACK</a>
     </div>
  </div>
@endsection
 