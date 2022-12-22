<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\contact;
use App\Models\Post1;


class TestController extends Controller
{
    public function index()
    {
        //one to one
        //     $contact = contact::with('user')->first();
        //     dd($contact->toArray());
        //one to  many
        $user = User::with(['contact', 'Post1s'])->find(2);
        dd($user);

        //
        // $post1 = post1::with('user')->first();
        // dd($post1->toArray());
    }
}
