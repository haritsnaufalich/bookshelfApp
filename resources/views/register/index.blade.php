@extends('layouts.main')

@section('container')

  <div class="flex flex-col items-center justify-center px-6 pt-16 mx-auto">
    <div class="w-full rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-800">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-xl dark:text-gray-200">REGISTER</h1>
        <form class="space-y-4 md:space-y-6" action="#">
          <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Full Name</label>
            <input type="text" name="name" id="name" class="sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-800" placeholder="" required="">
          </div>
          <div>
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Username</label>
            <input type="text" name="username" id="username" class="sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-800" placeholder="" required="">
          </div>
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-200">Email</label>
            <input type="text" name="email" id="email" placeholder="" class="sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-800" required="">
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-200">Password</label>
            <input type="password" name="password" id="password" placeholder="" class="mb-6 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-800" required="">
          </div>
          <button type="submit" class="w-full text-gray-200 font-semibold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:focus:ring-gray-800">Register</button>
          <p class="text-sm font-normal dark:text-gray-200">Already Have an Account? <a href="/login" class="font-medium text-gray-200 hover:underline dark:text-gray-200">Login</a></p>
        </form>
      </div>
    </div>
  </div>

@endsection