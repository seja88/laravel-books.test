<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::query()
            ->limit(20)
            ->get();
        // dd($authors);
        return view('authors.author_list', compact('authors'));
    }

    public function create()
    {
        $author = new Author();
        return view('authors.create', compact('author'))->name('authors.create');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:20'
        ]);
        $author = new Author();

        $author->name = $request->post('name');
        $author->save();

        session()->flash('success_message', 'New Author saved.');

        return redirect()->route('authors', $author->id);
    }

    public function edit($authorId)
    {
        $author = Author::findOrFail($authorId);

        return view('authors.form', compact('author'));
    }

    public function update(Request $request, $authorId)
    {
        $this->validate($request, [
            'name' => 'required|max:20'
        ]);

        $author = Author::findOrFail($authorId);
        $author->name = $request->post('name');
        $author->save();

        session()->flash('success_message', 'Author updated');

        return redirect()->route('authors.edit', $authorId);
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:20'
        ]);

        $authors = Author::query()
            ->where('name', 'like', '%' . $request->name . '%')
            ->get(['id', 'name']);
        return view('authors.author_list', compact('authors'));
    }

    public function detail($authorId)
    {
        $author = Author::findOrFail($authorId);
        $books = Book::query()
            ->where('id', $authorId)
            ->get();

        return view('authors.detail', compact('author', 'books'));
    }

    // public function boot(): void
    // {

    // }
}
