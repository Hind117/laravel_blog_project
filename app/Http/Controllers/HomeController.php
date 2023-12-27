<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $latestPosts = Cache::remember('latestPosts', now()->addDay(), function(){Post::Published()->latest('published_at')->take(9)->get();});



        return view('welcome', [
            'latestPosts' => $latestPosts

        ]);
    }
}
