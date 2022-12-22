<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];

    public function comments()
    {
        //one to many
        //return $this->morphMany(Comment::class, 'commentable');
        return $this->morphOne(Comment::class, 'commentable');
    }
}
