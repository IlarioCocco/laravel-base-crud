@extends('layout.base')



@section('pageContent')

<h1 class="text-danger">{{$comic["title"]}}</h1>
<h4 class="font-weight-bold">prezzo{{$comic["price"]}}</h4>
<h5>{{$comic["type"]}}</h5>
<img src="{{$comic["thumb"]}}" alt="imagine album">
    
@endsection