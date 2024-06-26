<nav class="container d-flex align-items-center justify-content-center">
    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo">
    <div>
        <ul class="d-flex align-items-center justify-content-center ">
            <li> <a class="{{ Route::currentRouteName() == 'character' ? 'active' : ''}}" href="{{route('character')}}">character</a> </li>
            <li> <a class="{{ Route::currentRouteName() == 'comics' ? 'active' : ''}}" href="{{route('comics')}}">comics</a> </li>
            <li> <a class="{{ Route::currentRouteName() == 'movies' ? 'active' : ''}}" href="{{route('movies')}}"> movies </a> </li>
            <li> <a class="{{ Route::currentRouteName() == 'tv' ? 'active' : ''}}" href="{{route('tv')}}">tv</a> </li>
            <li> <a class="{{ Route::currentRouteName() == 'games' ? 'active' : ''}}" href="{{route('games')}}">games</a> </li>
            <li> <a class="{{ Route::currentRouteName() == 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}">collectibles</a> </li>
            <li> <a class="{{ Route::currentRouteName() == 'videos' ? 'active' : ''}}" href="{{route('videos')}}">videos</a> </li>
            <li> <a class="{{ Route::currentRouteName() == 'fans' ? 'active' : ''}}" href="{{route('fans')}}">fans</a> </li>
            <li> <a class="{{ Route::currentRouteName() == 'news' ? 'active' : ''}}" href="{{route('news')}}">news</a> </li>
            <li> <a class="{{ Route::currentRouteName() == 'shop' ? 'active' : ''}}" href="{{route('shop')}}">shop</a></li>
        </ul>
    </div>
    <input type="text">
</nav>
