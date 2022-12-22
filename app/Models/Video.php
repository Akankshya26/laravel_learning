<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',

    ];
    // public $timestamps = 'false';

    public function comments()
    {
        //one to many
        //return $this->morphMany(Comment::class, 'commentable');
        return $this->morphOne(Comment::class, 'commentable');
    }
}
