@extends('layout.base')



@section('pageContent')
<h1>Comics Covers list</h1>

<table class="table" mt-3>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Imagine</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Data</th>
      <th scope="col">Tipo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($comics as $comic)
        <tr>
        <th scope="row">{{$comic["id"]}}</th>
        <td>{{$comic["title"]}}</td>
        <td>{{$comic["image"]}}</td>
        <td>{{$comic["price"]}}</td>
        <td>{{$comic["date"]}}</td>
        <td>{{$comic["type"]}}</td>
        <td><a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
        </tr>
    @endforeach
  </tbody>
</table>
    
@endsection