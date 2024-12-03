<?php

namespace App\Http\Controllers;

use App\Models\Post;

class FeedController extends Controller
{


    public function index(){
        $posts = Post::with('user')->get();

        // Passando os posts para a view
        return view('feed', ['posts' => $posts]);
    }
}
