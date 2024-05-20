@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
   <div class="jumbotron">

   </div>
   <div>
    @foreach ($comics as $comic)
    <li>{{$comic['title']}}</li>
    @endforeach
   </div>
</main>

@endsection