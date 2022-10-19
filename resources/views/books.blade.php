@extends('layouts.main')

@section('container')
  <h1 class="mb-3 font-bold text-xl">{{ $title }}</h1>

  <div class="flex flex-col md:flex-row items-center md:justify-between">
    <div class="w-full md:w-1/3 md:mb-0">
      <form action="/books" method="GET">
        @if (request('genre'))
          <input type="hidden" name="genre" value="{{ request('genre') }}">
        @endif
        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="relative shadow-sm">
          <input type="text" name="search" class="text-gray-800 w-full px-4 py-2 rounded-md" placeholder="Search..." value="{{ request('search') }}">
          <button type="submit" class="bg-gray-800 text-gray-200 rounded-md absolute top-0 right-0 px-4 py-2">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($books->count())
    <div class="max-w-full mt-4 bg-gray-800 rounded-xl overflow-hidden shadow-md">
      <img class="w-full max-h-[720px]" src="https://source.unsplash.com/1600x900/?{{ $books[0]->genre->name }}, books" alt="">
      <div class="px-6 py-4">
        <a href="/books/{{ $books[0]->slug }}"><div class="font-bold text-xl text-gray-200 mb-2">{{ $books[0]->title }}</div></a>
        <p class="text-gray-200 text-base">
          {{ $books[0]->description }}
        </p>
      </div>
      <div class="px-6 pb-2">
        <a href="/books?genre={{ $books[0]->genre->name }}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">#{{ $books[0]->genre->name }}</span></a>
        <a href="/books?author={{ $books[0]->author->username }}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">{{ $books[0]->author->name }}</span></a>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">{{ $books[0]->created_at->diffForHumans() }}</span>
      </div>
    </div>

    <div class="container">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 {{ $books->lastPage() == $books->currentPage() && $books->count() == 1 ? '' : 'mt-4' }}">
        @foreach ($books->skip(1) as $book)
          <div class="max-w-full bg-gray-800 rounded-xl overflow-hidden shadow-md">
            <img class="w-full max-h-[720px]" src="https://source.unsplash.com/1600x900/?{{ $book->genre->name }}, books" alt="">
            <div class="px-6 py-4">
              <a href="/books/{{ $book->slug }}"><div class="font-bold text-xl text-gray-200 mb-2">{{ $book->title }}</div></a>
              <p class="text-gray-200 text-base">
                {{ $book->description }}
              </p>
            </div>
            <div class="px-6 pb-2">
              <a href="/books?genre={{ $book->genre->name }}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">#{{ $book->genre->name }}</span></a>
              <a href="/books?author={{ $book->author->username }}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">{{ $book->author->name }}</span></a>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-800 mr-2 mb-2">{{ $book->created_at->diffForHumans() }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @else
    <p class="text-center text-gray-800 text-md font-bold my-4">No Books Found.</p>
  @endif

  <div class="flex justify-center mt-4">
    <div class="flex gap-4">
      @if ($books->onFirstPage())
        <span class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md">Previous</span>
      @else
        <a href="{{ $books->previousPageUrl() }}" class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md">Previous</a>
      @endif

      @if ($books->hasMorePages())
        <a href="{{ $books->nextPageUrl() }}" class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md">Next</a>
      @else
        <span class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md">Next</span>
      @endif
    </div>
  </div>

@endsection