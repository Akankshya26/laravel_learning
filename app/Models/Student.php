<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',

    ];
    public $timestamps = 'false';
    public function subjects()
    {
        return $this->morphToMany(Subject::class, 'subjectable');
    }
}
