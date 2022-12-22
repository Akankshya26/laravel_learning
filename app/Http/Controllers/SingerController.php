<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    public function add_singer()
    {
        $singer = new Singer();
        $singer->name = 'Aditya';
        $singer->save();

        $songids = [4, 5];
        $singer->songs()->attach($songids);
    }
    //get singer based on song id
    public function show_singer($id)
    {
        $singer = Song::find($id)->singers;
        return $singer;
    }
}
