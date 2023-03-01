<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $crime_books = Book::where('category_2_id', 12)
            ->orderBy('publication_date', 'DESC')
            ->limit(5)
            ->with('authors') // model->Book.php -> method authors
            ->get();

        // $crime_books->load('authors');
        $crime_books->loadMissing([
            'authors',
            'publishers'
        ]);

        return view('index.index', compact('crime_books'));
    }
}
