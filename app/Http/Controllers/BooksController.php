<?php

namespace App\Http\Controllers;

use App\Book;

class BooksController extends Controller
{
    /**
     * Show all books
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $books = Book::all();

        return view('index', compact('books'));
    }

    /**
     * Show one book
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('show', compact('book'));
    }
}
