@extends('layouts.main')

@section('container')
  @foreach ($genres as $genre)
  <ul>
    <li>
      <h2><a class="font-bold text-blue-800" href="/genres/{{ $genre->slug }}">{{ $genre->name }}</a></h2>
    </li>
  </ul>
  @endforeach
@endsection