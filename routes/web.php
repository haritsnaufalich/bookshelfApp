<?php

use App\Models\Book;
use App\Models\Genre;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/authors', function () {
    return view('authors', [
        "title" => "Book Authors",
        "active" => "Authors",
        "authors" => Author::all()
    ]);
});

Route::get('/login', [LoginController::class, 'loginIndex'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'loginAuthenticate']);
Route::post('/logout', [LoginController::class, 'logoutIndex']);

Route::get('/register', [RegisterController::class, 'registerIndex'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'registerStore']);

Route::get('/dashboard', [DashboardController::class, 'dashboardIndex'])->middleware('auth');