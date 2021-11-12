@extends('layout.base')



@section('pageContent')
<h1>Comics Covers list</h1>

<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Imagine</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Data</th>
      <th scope="col">Tipo</th>
      <th scope="col">Action - CR</th>
      <th scope="col">Action - U</th>
      <th scope="col">Action - D</th>
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
            <td>
              <a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
            </td> 
            <td>
              <a href="{{route("comics.edit", $comic["id"])}}"><button type="button" class="btn btn-success">Aggiorna</button></a>
            </td>
            <td>
              <form action="{{route("comics.destroy", $comic["id"])}}" method="POST"  onsubmit="return confirm('Vuoi veramente Cancellare il Comics?');">
                @csrf
                @method("DELETE")
                  <button type="submit" class="btn btn-danger" value="Elabora/Cancella" class="bottone-cancella" >Cancella</button>
              </form>
            </td>
          </tr>
    @endforeach
  </tbody>
</table>
    
@endsection
