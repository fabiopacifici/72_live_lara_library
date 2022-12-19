<?php

namespace App\Http\Controllers\Guest;

use App\Models\Book;
use App\Http\Controllers\Controller;


class PageController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('welcome', compact('books'));
    }

    public function about()
    {
        return view('about');
    }
    public function contacts()
    {
        return view('contacts');
    }
}
