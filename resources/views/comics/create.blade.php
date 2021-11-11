@extends('layout.base')
@section('pageContent')

<h1 class="text-danger">Inserisci un Fumetto</h1>

<form action="{{route("comics.store")}}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il Titolo">
    </div>

    <div class="form-group">
        <label for="thumb">Imagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Cerca una Copertina">
    </div>

    {{-- <form>
        <div class="form-group">
            <label for="thumb"></label>
            <input class="btn btn-success" type="file" class="form-control-file" id="thumb">
        </div>
    </form> --}}


    <div class="form-group">
        <label for="price">Prezzo fumetto</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Prezzo">
    </div>

    <div class="form-group">
        <label for="date">Data di uscita</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>

    <div class="form-group">
        <label for="type">Genere Comics</label>
        <input type="type" class="form-control" id="type" name="type" placeholder="Cerca per Genere">
    </div>

    <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>

        
    @endsection