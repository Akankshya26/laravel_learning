<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Subjectable;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function show_student()
    {
        $student = Subject::with('students')->get()->toArray();
        dd($student);
    }
    public function show_teacher()
    {
        $teacher = Subject::with('tecahers')->get()->toArray();
        dd($teacher);
    }
    public function add_subject()
    {
        $stud = Student::find(1);
        $subject = new Subject();
        $subject->name = 'English';
        $subject->save();

        dd($subject->toArray());
        // $sub = Subject::findOrFail(3);

        $sub1 = $stud->subjects()->save($subject);
    }
    public function show_subject()
    {
        $subject = Subject::findOrFail(7);
        dd($subject);
    }
}
