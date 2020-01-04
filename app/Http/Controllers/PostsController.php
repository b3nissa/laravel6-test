<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    public function show($slug)
    {
        return view('post', [
            'post' =>  $post = Post::where('slug', $slug)->firstOrFail()
        ]);
    }


}
