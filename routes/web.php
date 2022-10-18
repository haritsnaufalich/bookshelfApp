<?php

use App\Models\Book;
use App\Models\Genre;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "About"
    ]);
});

Route::get('/books', [BookController::class, 'allBooks']);
Route::get('/books/{book:slug}', [BookController::class, 'detailBook']);

Route::get('/genres', function () {
    return view('genres', [
        "title" => "Book Genres",
        "active" => "Genres",
        "genres" => Genre::all()
    ]);
});
Route::get('/genres/{genre:slug}', function (Genre $genre) {
    return view('genre', [
        "title" => $genre->name,
        "books" => $genre->books,
        "genre" => $genre->name
    ]);
});

Route::get('/authors/{author:username}', function (Author $author) {
    return view('genre', [
        "title" => 'Author Books',
        "books" => $author->books
    ]);
});