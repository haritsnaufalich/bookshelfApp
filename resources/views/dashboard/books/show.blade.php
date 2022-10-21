@extends('layouts.main')

@section('container')
  <h1 class="mb-3 font-bold text-lg text-gray-800">{{ $books->title }}</h1>
  <article class="flex flex-col md:flex-row gap-4">
    <div class="md:w-1/3">
      <img src="https://source.unsplash.com/1600x900?{{ $books->genre->name }}" alt="{{ $books->genre->name }}" class="rounded-md">
    </div>
    <div class="md:w-2/3">
      <p><a class="text-gray-800 underline font-medium" href="/books?author={{ $books->author->username }}">{{ $books->author->name }}</a> | <a class="text-gray-800 underline font-medium" href="/books?genre={{ $books->genre->slug }}">{{ $books->genre->name }}</a></p>
      <p class="text-gray-800">{{ $books->description }}</p>
      <p><a href="/dashboard/books" class="text-gray-800 underline font-medium">Back to My Books</a> | <a href="/dashboard/books/{{ $books->slug }}/edit" class="text-gray-800 underline font-medium">Edit Book</a> | <a href="/dashboard/books/{{ $books->slug }}/delete" class="text-gray-800 underline font-medium">Delete Book</a></p>
    </div>
  </article>
@endsection