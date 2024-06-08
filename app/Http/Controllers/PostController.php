<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends Controller
{
    use AuthorizesRequests;
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

    public function edit(Post $post)
    {

        $this->authorize('update', $post);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {

        $this->authorize('update', $post);

        $request->validate([
            'post_title' => 'required|string|max:255',
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $post->update($request->only('post_title', 'comment', 'rating'));

        return redirect()->route('books.show_posts', $post->book_id)->with('success', 'Post actualizado exitosamente.');
    }
}
