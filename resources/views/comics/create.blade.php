@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Inserisci un nuovo fumetto</h1>

            <form class="text-bg-primary rounded-top p-3" action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="m-2">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                @error('title')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror

                <div class="m-2">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="5" name="description" value="{{ old('description') }}"></textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror

                <div class="m-2">
                    <label for="thumb" class="form-label">Copertina</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
                </div>
                @error('thumb')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror
                
                <div class="m-2">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                </div>
                @error('price')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror

                <div class="m-2">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
                </div>
                @error('series')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror


                <div class="m-2">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                </div>
                @error('sale_date')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror
                                
                <div class="m-2">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-select" id="type" name="type">
                        <option {{ old('type') === '' ? 'selected' : '' }} value="">Scegli un'opzione</option>
                        <option {{ old('type') === 'comic book' ? 'selected' : '' }} value="comic book">comic book</option>
                        <option {{ old('type') === 'graphic novel' ? 'selected' : '' }} value="graphic novel">graphic novel</option>
                      </select>
                </div>


                <div class="p-2">
                    <button type="submit" class="btn btn-light">Invia</button>
                </div>
            </form>
        </div>
    </section>
@endsection