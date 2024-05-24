@extends('layouts.app')

@section('content')
    <section>

        <div class="hero">
            <div class="jumbo-container">
            </div>
        </div>

        <div class="series">

            <div class="title-series">
                <h3>COMICS CURRENT</h3>
            </div>

            <div class="comics-current">
                
                @foreach ($comics as $comic)
                <div class="comics-card">
                    <a class="uppercase" href="{{ route('comics.show', [$comic -> id]) }}">
                      
                      <div class="comic-container">
                        <img src="{{ $comic -> thumb }}" alt="">
                      </div>
                      
                      <figcaption>{{ $comic -> title }}</figcaption>
                      
                    </a>                
                </div>
                @endforeach

            </div>

            <div class="load-button">
                <button>LOAD MORE</button>
            </div>

        </div>

  </section>
@endsection