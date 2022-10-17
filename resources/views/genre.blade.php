@extends('layouts.main')

@section('container')
  @foreach ($books as $book)
    <article class="mb-8">
      <h2><a class="font-bold" href="/books/{{ $book->slug }}">{{ $book->title }}</a></h2>
      <p>{{ $book->author }}</p>
      <p>{{ $book->genre->name }}</p>
    </article>
  @endforeach
@endsection