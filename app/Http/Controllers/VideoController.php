<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function add_video()
    {
        $video = Video::create([
            'title' => 'dance',
        ]);
        dd($video->toArray);
        $comment = new Comment(['body' => 'nice']);
        $comment = $video->comments()->save($comment);
    }
    public function show_video()
    {
        $video = Video::with('comments')->get()->toArray();
        dd($video);
    }
}
