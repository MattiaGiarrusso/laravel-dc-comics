@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>Modifica un comics: {{ $pasta->title }}</h1>

        <form class="text-bg-primary rounded-top" action="{{ route('comics.update', ['comic'=> $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="m-2">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>

            <div class="m-2">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="5" name="description" >{{ $comic->description }}</textarea>
            </div>

            <div class="m-2">
                <label for="thumb" class="form-label">Copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            
            <div class="m-2">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>

            <div class="m-2">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>

            <div class="m-2">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
                            
            <div class="m-2">
                <label for="type" class="form-label">Tipo</label>
                <select class="form-select" id="type" name="type">
                    <option @selected($comic->type === "") value="">Scegli un'opzione</option>
                    <option value="comic book" {{ $comic->type === "comic book" ? 'selected': '' }} >comic book</option>
                    <option value="graphic novel" {{ $comic->type === "graphic novel" ? 'selected': '' }} >graphic novel</option>
                  </select>
            </div>
            <div class="p-2">
                <button type="submit" class="btn btn-light">Submit</button>
            </div>
        </form>
    </div>
</section>
    
@endsection