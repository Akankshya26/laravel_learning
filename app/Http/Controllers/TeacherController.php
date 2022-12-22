<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function add_teacher()
    {
        $teacher = new Teacher();
        $teacher->first_name = 'Vivek';
        $teacher->last_name = 'Dave';
        $teacher->save();


        // $sub = Subject::findOrFail(3);
        $sub = new Subject(['name' => 'php']);
        $sub1 = $teacher->subjects()->save($sub);
    }
}
