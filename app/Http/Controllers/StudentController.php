<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Subjectable;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function add_student()
    {
        $student = new Student();
        $student->first_name = 'Rakhee';
        $student->last_name = 'singh';
        $student->save();

        // $sub = Subject::findOrFail(1);
        $sub = new Subject(['name' => 'maths']);

        $sub = $student->subjects()->save($sub);
    }
}
