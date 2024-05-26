@extends('layouts.app')

@section('content')

    <section>
        <div class="container">
            <h1>{{ $comic -> title }}</h1>

            <a href="{{ route('comics.edit', ['comic'=> $comic->id])}}" class="btn btn-dark">Modifica fumetto</a>

            <div class="text-bg-primary">

                    <img src="https://picsum.photos/200" class="card-img-top">
                    <div class="container">
                      <h5 class="card-title">{{ $comic -> series }}</h5>
                      <h6 class="card-title">{{ $comic -> type }}</h6>
                      <h6 class="card-title">{{ $comic -> sale_date }}</h6>
                      <h6 class="card-title">{{ $comic -> price }}</h6>
                      <p class="card-text">{{ $comic -> description }}</p>
                    </div>

            </div>

        </div>
    </section>
    
@endsection