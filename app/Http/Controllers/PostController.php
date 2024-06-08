<?php

// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create($book_id, $category_id)
    {
        $book = Book::findOrFail($book_id);
        $category = Category::findOrFail($category_id);
        return view('posts.create', compact('book', 'category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_title' => 'required|string',
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'book_id' => 'required|exists:books,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        Post::create([
            'post_title' => $request->post_title,
            'comment' => $request->comment,
            'rating' => $request->rating,
            'book_id' => $request->book_id,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('books.list')->with('success', 'Post creado exitosamente.');
    }
}
