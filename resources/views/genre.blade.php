@extends('layouts.main')

@section('container')
  @foreach ($books as $book)
    <article class="mb-8">
      <h2><a class="font-bold" href="/books/{{ $book->slug }}">{{ $book->title }}</a></h2>
      <p>{{ $book->author->name }}</p>
      <p class="mb-2">{{ $book->genre->name }}</p>
      <hr>
    </article>
  @endforeach
@endsection