<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    public function index()
    {
        $most_like = Book::max('like');
        return view('home',[
            'highlight' => Book::where('like', $most_like)->first(),
            'latest' => Book::latest()->take(4)->get(),
            'books' => Book::all()
        ]);
    }

    public function show($idBook)
    {
        return view('detail',[
            'book' => Book::find($idBook)
        ]);
    }
}
