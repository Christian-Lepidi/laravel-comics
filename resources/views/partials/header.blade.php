<header class="header-container">
 
  <div class="logo-container">
    <img src="{{Vite::asset('/resources/images/dc-logo.png')}}" class="logo" alt="">
  </div>
  <div class="link-container">
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
  <div class="search-bar-container">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form> 
  </div>
 </div> 
</header>
<section class="jumbotron">
  <img src="{{Vite::asset('/resources/images/jumbotron.jpg')}}" class="jumbo-img" alt="">
</section>

<style lang="scss" scoped>
  

  
</style>