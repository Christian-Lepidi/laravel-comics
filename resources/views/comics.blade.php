@extends('layout.app')

@section('main-content')
<div class="main-section">
 @foreach ($comics as $comic)
 <div class="box">
   <img src="{{$comic['thumb']}}" class="thumb" alt=""> 
   <h4>{{$comic['series']}}</h4>
 </div>
 @endforeach
 <div class="more-cont">
  <a href="#" class="more">LOAD MORE</a>
 </div> 
</div>
<div class="shop-section"></div>
     
 
@endsection

