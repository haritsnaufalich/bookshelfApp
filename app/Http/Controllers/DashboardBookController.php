<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DashboardBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.books.index', [
            "title" => "My Books",
            "active" => "My Books",
            "books" => Book::where('author_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.books.create', [
            "title" => "Add New Book",
            "active" => "My Books",
            "genres" => Genre::all(),
            "book" => new Book()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:books|max:255',
            'genre_id' => 'required',
            'description' => 'required'
        ]);

        $validatedData['author_id'] = auth()->user()->id;

        Book::create($validatedData);

        return redirect('/dashboard/books')->with('success', 'Book Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('dashboard.books.show', [
            "title" => "Book Detail",
            "active" => "My Books",
            "books" => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('dashboard.books.edit', [
            "title" => "Edit Book",
            "active" => "My Books",
            "genres" => Genre::all(),
            "book" => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $rulesUpdate = [
            'title' => 'required|max:255',      
            'genre_id' => 'required',
            'description' => 'required'
        ];

        if($request->slug != $book->slug) {
            $rulesUpdate['slug'] = 'required|unique:books';
        }

        $validatedData = $request->validate($rulesUpdate);
        
        $validatedData['author_id'] = auth()->user()->id;

        Book::where('id', $book->id)->update($validatedData);

        return redirect('/dashboard/books')->with('success', 'Book has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);

        return redirect('/dashboard/books')->with('success', 'Book has Been Deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Book::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
