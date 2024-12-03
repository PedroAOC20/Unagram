<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function show(){

        return view('post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'description' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('posts', 'public');
        }

        // Criar e salvar o post no banco de dados
        $post = new Post();
        $post->user_id = 1;
        $post->image_url = $path ?? null;
        $post->description = $request->description;
        $post->save();

        // Redirecionar com uma mensagem de sucesso
        return redirect()->route('feed')->with('success', 'Post criado com sucesso!');
    }
}
