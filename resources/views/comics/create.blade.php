@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Inserisci un nuovo fumetto</h1>

            <form class="text-bg-primary rounded-top" action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="m-2">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="m-2">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                </div>

                <div class="m-2">
                    <label for="thumb" class="form-label">Copertina</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                
                <div class="m-2">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>

                <div class="m-2">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>

                <div class="m-2">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                                
                <div class="m-2">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-select" id="type" name="type">
                        <option value="" selected>Scegli un'opzione</option>
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                      </select>
                </div>
                <div class="p-2">
                    <button type="submit" class="btn btn-light">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection