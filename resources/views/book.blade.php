@extends('layouts.main')

@section('container')
  <h1 class="mb-3 font-bold text-lg">{{ $title }}</h1>
  <article>
    <h2 class="font-bold">{{ $book->title }}</h2>
    <p><a class="text-orange-600" href="/authors/{{ $book->author->username }}">{{ $book->author->name }}</a> | <a class="text-blue-800" href="/genres/{{ $book->genre->slug }}">{{ $book->genre->name }}</a></p>
    <p>{{ $book->description }}</p>
    <a href="/books" class="text-blue-800">Back</a>
  </article>
@endsection