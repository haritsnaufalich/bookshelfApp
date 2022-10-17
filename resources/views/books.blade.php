@extends('layouts.main')

@section('container')
  @foreach ($books as $book)
    <article class="mb-8">
      <h2 class="mb-2"><a class="font-bold" href="/books/{{ $book->slug }}">{{ $book->title }}</a></h2>
      {{-- <img class="rounded-md mb-2" src="img/001.jpg" width="186px" alt=""> --}}
      <p class="mb-2"><a class="text-orange-600" href="#">{{ $book->author->name }}</a> | <a class="text-blue-800" href="/genres/{{ $book->genre->slug }}">{{ $book->genre->name }}</a></p>
      <hr>
    </article>
  @endforeach
@endsection