<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_name' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
        ]);

        $book = Book::create([
            'book_name' => $request->book_name,
            'author_name' => $request->author_name,
        ]);

        return redirect()->route('books.show', $book->id);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }
}
