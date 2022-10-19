<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $with = [
        'author',
        'genre'
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            $query->where(fn ($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
            )
        );

        $query->when($filters['author'] ?? false, fn ($query, $author) =>
            $query->whereHas('author', fn ($query) =>
                $query->where('username', 'like', '%' . $author . '%')
            )
        );

        $query->when($filters['genre'] ?? false, fn ($query, $genre) =>
            $query->whereHas('genre', fn ($query) =>
                $query->where('name', 'like', '%' . $genre . '%')
                    ->orWhere('slug', 'like', '%' . $genre . '%')
            )
        );
    }

    public function genre () {
        return $this->belongsTo(Genre::class);
    }

    public function author () {
        return $this->belongsTo(Author::class);
    }
}
