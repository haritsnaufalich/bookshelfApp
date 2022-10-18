@extends('layouts.main')

@section('container')
  @foreach ($genres as $genre)
  {{-- Create Responsive Tailwind Card Overlay --}}
  <div class="my-6 flex flex-col md:flex-row items-center md:items-start md:space-x-4 space-y-4 md:space-y-0">
    <div class="w-full md:w-1/3">
      <img src="https://source.unsplash.com/1600x900/?{{ $genre->name }}" alt="{{ $genre->name }}" class="rounded-lg shadow-lg">
    </div>
    <div class="w-full md:w-2/3">
      <h2 class="text-2xl font-bold text-gray-800">{{ $genre->name }}</h2>
      <a href="/genres/{{ $genre->slug }}" class="text-gray-800 underline">Read More</a>
    </div>
  </div>
  @endforeach
@endsection