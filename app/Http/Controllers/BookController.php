<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function allBooks() {
        return view('books', [
        "title" => "Books",
            "active" => "Books",
            "books" => Book::all()
        ]);
    }

    public function detailBook(Book $book) {
        return view('book', [
            "title" => "Detail",
            "active" => "Books",
            "book" => $book
        ]);
    }

    // public function genreBooks($genre) {
    //     return view('books', [
    //         "title" => "Genre",
    //         "active" => "Books",
    //         "books" => Book::where('genre_id', $genre)->get()
    //     ]);
    // }
}
