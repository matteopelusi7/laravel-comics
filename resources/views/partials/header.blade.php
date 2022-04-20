<header>

    <div class="container-header">

        <figure class="logo">
          <img src="../img/dc-logo.png" alt="">
        </figure>
        
        <nav>
          <ul class="list-nav">
            <li class="{{ Request::route()->getName() == 'comics.base' ? 'active' : '' }}">
                <a href="/">Characters</a>
            </li>
            <li class="{{ Request::route()->getName() == 'comics.index' ? 'active' : '' }}">
                <a href="{{ route('comics.index') }}">Comics</a>
            </li>
            <li>
                <a>Movies</a>
            </li>
            <li>
                <a>Tv</a>
            </li>
            <li>
                <a>Games</a>
            </li>
            <li>
                <a>Collectibles</a>
            </li>
            <li>
                <a>Videos</a>
            </li>
            <li>
                <a>Fans</a>
            </li>
            <li>
                <a>News</a>
            </li>
          </ul>
        </nav>
  
    </div>
    
</header>