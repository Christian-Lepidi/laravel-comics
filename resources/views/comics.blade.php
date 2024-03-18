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
<div class="shop-section">
    <div class="click-shop">
     <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" class="shop-img" alt="">
     <span class="shop-text">DIGITAL COMICS</span>
    </div>
    <div class="click-shop">
     <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" class="shop-img" alt="">
     <span class="shop-text">DC MERCHANDISE</span>
    </div>
    <div class="click-shop">
     <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" class="shop-img" alt="">
     <span class="shop-text">SUBSCRIPTION</span>
    </div>
    <div class="click-shop">
     <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" class="shop-img" alt="">
     <span class="shop-text">COMIC SHOP LOCATOR</span>
    </div>
    <div class="click-shop">
     <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" class="shop-img" alt="">
     <span class="shop-text">DC POWER VISA</span>
    </div>
</div>
     
 
@endsection

