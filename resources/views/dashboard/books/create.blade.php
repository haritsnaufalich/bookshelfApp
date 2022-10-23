@extends('layouts.main')

@section('container')
  <div class="flex flex-col items-center justify-center px-6 pt-16 mx-auto">
    <div class="w-full rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-800">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-xl text-gray-200">ADD BOOKS</h1>
        <form class="space-y-4 md:space-y-6" action="/dashboard/books" method="POST">
          @csrf
          <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-200">Book Title</label>
            <input type="text" name="title" id="title" class="sm:text-sm rounded-lg block w-full p-2.5 bg-gray-300 placeholder-gray-400 text-gray-800 @error('title') border-2 border-red-400 @enderror" placeholder="" required value="{{ old('title') }}">
            @error('title')
              <div class="text-red-400 text-transform: capitalize mt-1 text-sm">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-200">Slug</label>
            <input type="text" name="slug" id="slug" class="sm:text-sm rounded-lg block w-full p-2.5 bg-gray-300 placeholder-gray-400 text-gray-800 @error('slug') border-2 border-red-400 @enderror" placeholder="" required value="{{ old('slug') }}">
            @error('slug')
              <div class="text-red-400 text-transform: capitalize mt-1 text-sm">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <label for="genre_id" class="block mb-2 text-sm font-medium text-gray-200">Genre</label>
            <select name="genre_id" id="genre_id" placeholder="" required class="sm:text-sm rounded-lg block w-full p-2.5 bg-gray-300 placeholder-gray-400 text-gray-800 @error('name') border-2 border-red-400 @enderror" value="{{ old('genre_id') }}">
              <option selected>Choose a Genre</option>
              @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
              @endforeach
            </select>
            @error('genre_id')
              <div class="text-red-400 text-transform: capitalize mt-1 text-sm">{{ $message }}</div>
            @enderror
          </div>
          {{-- Text Box --}}
          <div>
            <label for="description" class="block mb-2 text-sm font-medium text-gray-200">Description</label>
            <textarea name="description" id="description" class="mb-6 sm:text-sm rounded-lg block w-full p-2.5 bg-gray-300 placeholder-gray-400 text-gray-800 @error('description') border-2 border-red-400 @enderror" placeholder="" required value="{{ old('description') }}"></textarea>
            @error('description')
              <div class="text-red-400 text-transform: capitalize mt-1 text-sm">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="w-full text-gray-200 font-semibold rounded-lg text-sm px-5 py-2.5 text-center border-2 border-gray-600 bg-gray-600 focus:ring-gray-800">Register</button>
        </form>
      </div>
    </div>
  </div>
    
@endsection