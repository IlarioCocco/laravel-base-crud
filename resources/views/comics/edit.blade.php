@extends('layout.base')
@section('pageContent')

<h1 class="text-danger">Modifica Fumetto: {{$comic["title"]}}</h1>

{{-- il form dev essere provvisto di action di spedizione verso store, metodo POST --}}
<form action="{{route("comics.update", $comic["id"])}}" method="POST">

{{-- @csrf = token di inserimento dati personale, SICUREZZA --}}
    @csrf
    @method("PUT")

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il Titolo" value="{{$comic["title"]}}">
    </div>

    <div class="form-group">
        <label for="thumb">Imagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Cerca una Copertina" value="{{$comic["thumb"]}}">
    </div>

    <div class="form-group">
        <label for="price">Prezzo fumetto</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Prezzo" value="{{$comic["price"]}}">
    </div>

    <div class="form-group">
        <label for="date">Data di uscita</label>
        <input type="date" class="form-control" id="date" name="date" value="{{$comic["date"]}}">
    </div>

    <div class="form-group">
        <label for="type">Genere Comics</label>
        <input type="type" class="form-control" id="type" name="type" placeholder="Cerca per Genere" value="{{$comic["type"]}}">
    </div>

    <button type="submit" class="btn btn-danger">Modifica</button>
    </form>

        
    @endsection