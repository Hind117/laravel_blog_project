<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view(
            'posts.index',
            [
                'posts' => Post::take(5)->get()
            ]
        );
    }

    public function showPost(Post $post){
        return view(
            'posts.showPost',
            [
                'post' => $post
            ]
        );
    }
}
