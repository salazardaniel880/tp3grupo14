<?php

// app/Models/Book.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table='books';
    protected $fillable = [
        'type', 'category_id', 'title','image', 'original_title', 'publisher', 'publication_date', 'pages', 'country', 'author_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
