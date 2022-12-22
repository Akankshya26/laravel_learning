<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];
    public $timestamps = 'false';
    public function students()
    {
        return $this->morphedByMany(Student::class, 'subjectable');
    }
    public function tecahers()
    {
        return $this->morphedByMany(Teacher::class, 'subjectable');
    }
}
