<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_post()
    {
        $post = new Post();
        $post->title = 'cake';
        $post->save();

        $comment = new Comment(['body' => 'cake comment']);
        $comment = $post->comments()->save($comment);
    }
    public function show_post()
    {
        $post = Post::with('comments')->get()->toArray();;
        dd($post);
    }
}
