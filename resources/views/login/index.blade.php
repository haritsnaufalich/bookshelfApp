@extends('layouts.main')

@section('container')

  <div class="flex flex-col items-center justify-center px-6 pt-32 mx-auto">
    @if(session()->has('success'))
      <div class="p-4 mb-4 -mt-12 text-sm text-green-800 bg-green-200 rounded-lg" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="w-full rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-800">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-xl text-gray-200">LOGIN</h1>
        <form class="space-y-4 md:space-y-6" action="#">
          <div>
            <label for="username" class="block mb-2 text-sm font-medium text-gray-200">Username</label>
            <input type="text" name="username" id="username" class="sm:text-sm rounded-lg block w-full p-2.5 bg-gray-300 border-2 border-gray-600 placeholder-gray-400 text-gray-800" placeholder="" required="">
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-200">Password</label>
            <input type="password" name="password" id="password" placeholder="" class="sm:text-sm rounded-lg block w-full p-2.5 bg-gray-300 border-2 border-gray-600 placeholder-gray-400 text-gray-800" required="">
          </div>
          <div class="flex items-center justify-between">
            <a href="#" class="text-sm font-medium hover:underline text-gray-200">Forgot Password?</a>
          </div>
          <button type="submit" class="w-full text-gray-200 font-semibold rounded-lg text-sm px-5 py-2.5 text-center border-2 border-gray-600 bg-gray-600 focus:ring-gray-800">Login</button>
          <p class="text-sm font-normal text-gray-200">Don’t Have an Account yet? <a href="/register" class="font-medium text-gray-200 hover:underline">Register</a></p>
        </form>
      </div>
    </div>
  </div>

@endsection