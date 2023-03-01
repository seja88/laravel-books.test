<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function latest()
    {

        $books = Book::query()
            ->orderBy('publication_date', 'DESC')
            ->with('authors')
            ->limit(10)
            ->get();
        return $books;
    }

    public function show($book_id)
    {
        $book = Book::query()
            ->get($book_id);

        return $book;
    }
}
