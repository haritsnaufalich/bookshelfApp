@extends('layouts.main')

@section('container')
  <h1 class="mb-3 font-bold text-xl">{{ $title }}</h1>

  @if ($books->count())
    <div class="max-w-full bg-gray-800 rounded-xl overflow-hidden shadow-md">
      <img class="w-full max-h-[720px]" src="https://source.unsplash.com/1920x1080/?{{ $books[0]->genre->name }}, books" alt="">
      <div class="px-6 py-4">
        <a href="/books/{{ $books[0]->slug }}"><div class="font-bold text-xl text-gray-200 mb-2">{{ $books[0]->title }}</div></a>
        <p class="text-gray-200 text-base">
          {{ $books[0]->description }}
        </p>
      </div>
      <div class="px-6 pb-2">
        <a href="/genres/{{ $books[0]->genre->name }}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">#{{ $books[0]->genre->name }}</span></a>
        <a href="/authors/{{ $books[0]->author->username }}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">{{ $books[0]->author->name }}</span></a>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">{{ $books[0]->created_at->diffForHumans() }}</span>
      </div>
    </div>
  @else
    <p class="text-center text-gray-800 text-md font-bold">No Books Found.</p>
  @endif

  <div class="container">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-[1rem]">
      @foreach ($books->skip(1) as $book)
        <div class="max-w-full bg-gray-800 rounded-xl overflow-hidden shadow-md">
          <img class="w-full max-h-[720px]" src="https://source.unsplash.com/1920x1080/?{{ $book->genre->name }}, books" alt="">
          <div class="px-6 py-4">
            <a href="/books/{{ $book->slug }}"><div class="font-bold text-xl text-gray-200 mb-2">{{ $book->title }}</div></a>
            <p class="text-gray-200 text-base">
              {{ $book->description }}
            </p>
          </div>
          <div class="px-6 pb-2">
            <a href="/genres/{{ $book->genre->name }}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">#{{ $book->genre->name }}</span></a>
            <a href="/authors/{{ $book->author->username }}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">{{ $book->author->name }}</span></a>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">{{ $book->created_at->diffForHumans() }}</span>
          </div>
        </div>
      @endforeach
    </div>
  </div>

@endsection