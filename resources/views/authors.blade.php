@extends('layouts.main')

@section('container')
  @foreach ($authors as $author)
  <ul>
    <li>
      <h2><a class="font-bold text-gray-800" href="/authors/{{ $author->usernae }}">{{ $author->name }}</a></h2>
    </li>
  </ul>
  @endforeach
@endsection