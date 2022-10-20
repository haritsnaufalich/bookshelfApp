@extends('layouts.main')

@section('container')

  <div class="flex flex-col items-center justify-center px-6 pt-16 mx-auto">
    <div class="w-full rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-800">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-xl text-gray-200">REGISTER</h1>
        <form class="space-y-4 md:space-y-6" action="/register" method="POST">
          @csrf
          <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-200">Full Name</label>
            <input type="text" name="name" id="name" class="sm:text-sm rounded-lg block w-full p-2.5 bg-gray-300 placeholder-gray-400 text-gray-800 @error('name') border-2 border-red-400 @enderror" placeholder="" required value="{{ old('name') }}">
            @error('name')
              <div class="text-red-400 text-transform: capitalize mt-1 text-sm">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <label for="username" class="block mb-2 text-sm font-medium text-gray-200">Username</label>
            <input type="text" name="username" id="username" class="sm:text-sm rounded-lg block w-full p-2.5 bg-gray-300 placeholder-gray-400 text-gray-800 @error('username') border-2 border-red-400 @enderror" placeholder="" required value="{{ old('username') }}">
            @error('username')
              <div class="text-red-400 text-transform: capitalize mt-1 text-sm">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-200">Email</label>
            <input type="text" name="email" id="email" placeholder="" required class="sm:text-sm rounded-lg block w-full p-2.5 bg-gray-300 placeholder-gray-400 text-gray-800 @error('name') border-2 border-red-400 @enderror" value="{{ old('email') }}">
            @error('email')
              <div class="text-red-400 text-transform: capitalize mt-1 text-sm">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-200">Password</label>
            <input type="password" name="password" id="password" placeholder="" required class="mb-6 sm:text-sm rounded-lg block w-full p-2.5 bg-gray-300 placeholder-gray-400 text-gray-800 @error('name') border-2 border-red-400 @enderror">
            @error('password')
              <div class="text-red-400 text-transform: capitalize -mt-5 text-sm">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="w-full text-gray-200 font-semibold rounded-lg text-sm px-5 py-2.5 text-center border-2 border-gray-600 bg-gray-600 focus:ring-gray-800">Register</button>
          <p class="text-sm font-normal text-gray-200">Already Have an Account? <a href="/login" class="font-medium text-gray-200 hover:underline">Login</a></p>
        </form>
      </div>
    </div>
  </div>

@endsection