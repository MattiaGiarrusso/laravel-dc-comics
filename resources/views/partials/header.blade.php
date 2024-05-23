<header>
    <header class="container">
        <div>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
    
        <nav>
            <ul>
                {{-- @foreach ( $links as $link)
                <li>
                    @if ($link['active'])
                        <a class="active" >{{ $link['link'] }}</a>                    
                    @else
                        <a class="" >{{ $link['link'] }}</a> 
                    @endif
                </li>
                @endforeach --}}    
            </ul>
        </nav>
    </header>
</header>