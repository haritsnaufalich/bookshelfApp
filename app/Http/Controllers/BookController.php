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

    public function detailBook($slug) {
        return view('book', [
            "title" => "Detail",
            "active" => "Books",
            "book" => Book::find($slug)
        ]);
    }
}
