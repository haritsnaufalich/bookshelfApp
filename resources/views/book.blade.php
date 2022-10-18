@extends('layouts.main')

@section('container')
  <h1 class="mb-3 font-bold text-lg">{{ $title }}</h1>
  <article class="flex flex-col md:flex-row gap-4">
    <div class="md:w-1/3">
      <img src="https://source.unsplash.com/1200x400?{{ $book->genre->name }}" alt="{{ $book->genre->name }}" class="rounded-md">
    </div>
    <div class="md:w-2/3">
      <p><a class="text-gray-800 underline font-medium" href="/authors/{{ $book->author->username }}">{{ $book->author->name }}</a> | <a class="text-gray-800 underline font-medium" href="/genres/{{ $book->genre->slug }}">{{ $book->genre->name }}</a></p>
      <p class="text-gray-800">{{ $book->description }}</p>
      <a href="/books" class="text-gray-800 underline font-medium">Back</a>
    </div>
  </article>
@endsection