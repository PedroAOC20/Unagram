<?php

namespace App\Http\Controllers;


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

        // Salvar a imagem no armazenamento público
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('posts', 'public');
        }

        // Criar e salvar o post no banco de dados
        $post = new Post();
        $post->image = $path ?? null;
        $post->description = $request->description;
        $post->save();

        // Redirecionar com uma mensagem de sucesso
        return redirect()->route('feed')->with('success', 'Post criado com sucesso!');
    }
}
