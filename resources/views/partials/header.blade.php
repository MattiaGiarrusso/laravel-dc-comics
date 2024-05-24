<header class="ms-header-container">
    <div class="logo-header">
        <a class="logo-link" href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" >
        </a>
    </div>

    <nav>
        <ul class="header-links">
            <li>
                <a class="" href="">CHARACTERS</a>                    
            </li>
            <li>
                <a class="active" href="{{ route('comics.index') }}">COMICS</a>                    
            </li>
            <li>
                <a class="" href="">MOVIES</a>                    
            </li>
            <li>
                <a class="" href="">TV</a>                    
            </li>
            <li>
                <a class="" href="">GAMES</a>                    
            </li>
            <li>
                <a class="" href="">COLLECTIBLES</a>                    
            </li>
            <li>
                <a class="" href="">VIDEOS</a>                    
            </li>
            <li>
                <a class="" href="{{ route('comics.create') }}">CREATE COMICS</a>                    
            </li>
            <li>
                <a class="" href="">NEWS</a>
            </li>       
            <li>
                <a class="" href="">SHOP</a>                    
            </li>         
        </ul>
    </nav>
</header>