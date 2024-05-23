@extends('layouts.app')

@section('content')

    <section>
        <div class="container">
            <h1>Comics</h1>

            <div class="row row-cols-3 row-cols-md-2 g-4">

                @foreach ($comics as $comic)
                <div class="col">
                  <div class="card text-bg-primary">
                    <img src="https://picsum.photos/200" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{ $comic -> title }}</h5>
                      <p class="card-text">{{ $comic -> description }}</p>
                    </div>
                    <a href="#" class="btn btn-light">Vedi comic</a>
                  </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    
@endsection