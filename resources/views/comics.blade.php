@extends('layouts.app')

@section('title', 'DComics')

@section('content')
  <div class="container">
    <h1>Current Series</h1>
    <ul>
      @foreach ($comics as $comic)
        <li>{{ $comic['title'] }}</li>
      @endforeach
    </ul>
  </div>
@endsection
