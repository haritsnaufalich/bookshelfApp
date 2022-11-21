@extends('layouts.main')

@section('container')

  <h1 class="mb-5 font-bold text-xl text-gray-800">Genres</h1>

  @if(session()->has('success'))
    <div class="p-4 mb-[24px] -mt-[10px] text-sm text-green-800 bg-green-200 rounded-lg" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <a href="/dashboard/genres/create" class="bg-gray-800 hover:bg-gray-600 text-gray-200 py-2 px-4 rounded-md">Add Genre</a>
  <div class="mt-6 overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-400">
      <thead class="text-md uppercase bg-gray-600 text-gray-200">
        <tr>
          <th scope="col" class="py-4 px-6 text-center">
            #
          </th>
          <th scope="col" class="py-4 px-6 text-center">
            Genre Name
          </th>
          <th scope="col" class="py-4 px-6 text-center">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($genres as $genre)
          <tr class="border-b bg-gray-800 border-gray-600">
            <th scope="row" class="py-4 px-6 font-medium whitespace-nowrap text-gray-200 text-center">
              {{ $loop->iteration }}
            </th>
            <th class="py-4 px-6 text-gray-200">
              {{ $genre->name }}
            </th>
            <td class="py-4 px-6 justify-center flex">
              <span class="mx-1.5 font-medium text-green-400 hover:underline"><a href="/dashboard/genres/{{ $genre->slug }}"><i class="fa-regular fa-eye"></i></a></span>
              <span class="mx-1.5 font-medium text-orange-400 hover:underline"><a href="/dashboard/genres/{{ $genre->slug }}/edit"><i class="fa-solid fa-pen"></i></a></span>
              <form action="/dashboard/genres/{{ $genre->slug }}" method="POST">
                @method('delete')
                @csrf
                <button class="mx-1.5 font-medium text-red-600 hover:underline" onclick="return confirm('Are u Sure?')"><i class="fa-solid fa-trash-can"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection