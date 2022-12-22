<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index()
    // {
    //     echo "hiiiiii";
    // }
    //     public function getdata($id)
    //     {
    //         return "id is :" . $id;
    //     }
    //     public function getname($name)
    //     {
    //         return view('hello', compact('name'));
    //     }

    public function checkAge($age)
    {
        if ($age >= 18) {
            return view('welcome', compact('age'));
        } else {
            return "not eligible";
        }
    }
}
