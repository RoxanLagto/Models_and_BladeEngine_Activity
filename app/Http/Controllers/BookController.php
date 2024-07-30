<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function books()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }
}
