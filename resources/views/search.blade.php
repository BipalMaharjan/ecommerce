@extends('master')
@section('content')
<div class="custom-production">
<div class="col-sm-4">
  <a href="#">Filter</a>
</div>
<div class="col-sm-4">
<div class="trending-wrapper">
  <h4>Result for Product</h4> 
  @foreach($productions as $item)
  <a href="detail/{{$item['id']}}">
    <div class="searched-item ">
      <img class="trending-image" src="{{$item['gallery']}}"> 
      <div class="">  
        <h2>{{$item['name']}}</h2>
        <h5>{{$item['description']}}</h5>
      </div>
      </div>
  </a>
    </div>
    @endforeach
</div> 
</div>
@endsection