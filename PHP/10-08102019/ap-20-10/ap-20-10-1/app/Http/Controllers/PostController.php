<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function pos()
    {
        $posts = Post::get();
        return view('posts',['posts'=>$posts]);
    }
}
