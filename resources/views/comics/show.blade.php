@extends('layouts.app')

@section('content')

    <section>
        <div class="ms-container">
            <h1>{{ $comic -> title }}</h1>

            <div class="d-flex justify-content-end mt-5">
                <div class="col-2 d-flex justify-content-center p-0">
                    <a href="{{ route('comics.edit', ['comic'=> $comic->id])}}" class="btn btn-dark">Modifica fumetto</a>
                </div>
                <div class="col-2 d-flex justify-content-center p-0">
                    <form action="{{ route('comics.destroy', ['comic'=> $comic->id])}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger" type="submit">Elimina fumetto</button>
                        
                    </form>
                </div>
            </div>

        </div>
        
        <div class="ms-container text-bg-dark d-flex justify-content-center">            
            <div class="ms-img-container">
                <img src="{{ $comic -> thumb }}" class="card-img-top">
            </div>
        </div>
        <div class="d-flex flex-column align-items-center text-bg-primary">
            <div class="ms-container pt-3">
                <h5 class="card-title">{{ $comic -> series }}</h5>
                <h6 class="card-title">{{ $comic -> type }}</h6>
                <h6 class="card-title">{{ $comic -> sale_date }}</h6>
                <h6 class="card-title">{{ $comic -> price }}</h6>
                <p class="card-text">{{ $comic -> description }}</p>
            </div>
        </div>

    </section>
    
@endsection