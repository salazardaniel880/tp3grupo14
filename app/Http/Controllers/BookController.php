<?php

// app/Http/Controllers/BookController.php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list()
    {
        $books = Book::all();
        return view('books.list', compact('books'));
    }

    public function showPosts($book_id)
    {
        $book = Book::findOrFail($book_id);
        $posts = Post::where('book_id', $book_id)->get();
        return view('books.show_posts', compact('book', 'posts'));
    }

    public function create()
    {
        $categoria=Category::all();
        $autores=Author::all();
        return view('books.create',compact('categoria','autores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string',
            'original_title' => 'nullable|string',
            'publisher' => 'required|string',
            'publication_date' => 'required|date',
            'pages' => 'required|integer',
            'country' => 'required|string',
            'author_id' => 'required|exists:authors,id',
        ]);

        Book::create($request->all());

        return redirect()->route('home');
    }
}
