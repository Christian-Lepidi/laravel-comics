<header class="container">
 <div class="row">
  <div class="col-3"></div>
  <div class="col-6">
   <ul>
     <li>
      <a @class(['link','active'=> Route::currentRouteName()=='characters']) href="{{route('characters')}}">CHARACTERS</a>
     </li>
     <li>
      <a @class(['link','active'=> Route::currentRouteName()=='comics']) href="{{route('comics')}}">COMICS</a>
     </li>
     <li> 
      <a  @class(['link','active'=> Route::currentRouteName()=='movies']) href="{{route('movies')}}">MOVIES</a>
     </li>
     <li> 
      <a @class(['link','active'=> Route::currentRouteName()=='tv']) href="{{route('tv')}}">TV</a>
     </li>
     <li> 
      <a @class(['link','active'=> Route::currentRouteName()=='games']) href="{{route('games')}}">GAMES</a>
     </li>
     <li> 
     <a @class(['link','active'=> Route::currentRouteName()=='collectibles']) href="{{route('collectibles')}}">COLLECTIBLES</a>
     </li>
     <li> 
      <a @class(['link','active'=> Route::currentRouteName()=='videos']) href="{{route('videos')}}">VIDEOS</a>
     </li>
     <li> 
      <a @class(['link','active'=> Route::currentRouteName()=='fans']) href="{{route('fans')}}">FANS</a>
     </li>
     <li> 
      <a @class(['link','active'=> Route::currentRouteName()=='news']) href="{{route('news')}}">NEWS</a>
     </li>
     <li> 
      <a @class(['link','active'=> Route::currentRouteName()=='shop']) href="{{route('shop')}}">SHOP</a>
     </li> 
    </ul>
  </div> 
  <div class="col-3"></div>
 </div> 
</header>