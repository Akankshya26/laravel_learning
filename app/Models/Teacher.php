<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'first_name',
        'last_name',

    ];
    public $timestamps = 'false';
    public function subjects()
    {
        return $this->morphToMany(Subject::class, 'subjectable');
    }
}
