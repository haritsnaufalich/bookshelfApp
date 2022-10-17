@extends('layouts.main')

@section('container')
  <article>
    <h2 class="font-bold">{{ $book->title }}</h2>
    <p>{{ $book->author }} | <a class="text-blue-800" href="/genres/{{ $book->genre->slug }}">{{ $book->genre->name }}</a></p>
    <p>{{ $book->description }}</p>
    <a href="/books" class="text-blue-800">Back</a>
  </article>
@endsection