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
                      <h3 class="card-title">{{ $comic -> title }}</h3>
                      <h5 class="card-title">{{ $comic -> series }}</h5>
                      <h6 class="card-title">{{ $comic -> type }}</h6>
                      <h6 class="card-title">{{ $comic -> price }}</h6>
                    </div>
                    <div class="d-flex justify-content-center p-2">
                        <a href="{{ $comic -> id }}" class="btn btn-light">Vedi comic</a>
                    </div>
                  </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    
@endsection