@extends('layout.base')
@section('pageContent')

<h1 class="text-danger">Modifica Fumetto: {{$comic["title"]}}</h1>

{{-- il form dev essere provvisto di action di spedizione verso store, metodo POST --}}
<form action="{{route("comics.store")}}" method="POST">

{{-- @csrf = token di inserimento dati personale, SICUREZZA --}}
    @csrf

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il Titolo">
    </div>

    <div class="form-group">
        <label for="thumb">Imagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Cerca una Copertina">
    </div>

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