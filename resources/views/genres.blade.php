@extends('layouts.main')

@section('container')
  <h1 class="-mb-3 font-bold text-xl">{{ $title }}</h1>
  @foreach ($genres as $genre)
  <div class="my-6 flex flex-col md:flex-row items-center md:items-start md:space-x-4 space-y-4 md:space-y-0">
    <div class="w-full md:w-1/3">
      <img src="https://source.unsplash.com/1600x900/?{{ $genre->name }}" alt="{{ $genre->name }}" class="rounded-lg shadow-lg">
    </div>
    <div class="w-full md:w-2/3">
      <h2 class="text-2xl font-bold text-gray-800">{{ $genre->name }}</h2>
      <a href="/books?genre={{ $genre->slug }}" class="text-gray-800 underline">Read More</a>
    </div>
  </div>
  @endforeach
@endsection