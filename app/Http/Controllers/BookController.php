<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    public function allBooks() {

        $title = '';
        if(request('genre')) {
            $genre = Genre::firstWhere('slug', request('genre'));
            $title = ' in ' . $genre->name;
        }

        if(request('author')) {
            $author = Author::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('books', [
            "title" => "All Books" .$title,
            "active" => "Books",
            "books" => Book::latest()->filter(request(['search', 'genre', 'author']))->paginate(8)->withQueryString()
        ]);
    }

    public function detailBook(Book $book) {

        return view('book', [
            "title" => "Detail Book : $book->title",
            "active" => "Books",
            "book" => $book
        ]);
    }
}
