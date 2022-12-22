<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjectable extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'commentable_id',
        'commentable_type',
    ];
    public $timestamps = 'false';
    public function subjectable()
    {
        return $this->morphTo();
    }
}
