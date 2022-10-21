@extends('layouts.main')

@section('container')

  <h1 class="mb-3 font-bold text-xl text-gray-800">Welcome, {{ auth()->user()->name }}</h1>

@endsection