<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        return view('post');
    }

    public function detail($id)
    {
        $post = Post::where('id', $id)->first();
        $data['post'] = $post;
        return view('post-detail', $data);
    }

    public function store(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'image' => 'required|image|max:2048',
            'description' => 'required|string|max:255',
        ]);
    
        $base64Image = null;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageContent = file_get_contents($image->getRealPath());
    
            $mimeType = $image->getMimeType();
            $base64Image = 'data:' . $mimeType . ';base64,' . base64_encode($imageContent);
        }
    
        $post = new Post();
        $post->user_id = 1;
        $post->image_base64 = $base64Image;
        $post->description = $request->description;
        $post->save();
    
        return redirect()->route('feed')->with('success', 'Post criado com sucesso!');
    }


    public function like($id) {
        $post = Post::findOrFail($id);

        $post->likes = $post->likes + 1;

        $post->save();
        return redirect()->route('feed')->with('success', 'Post curtido com sucesso!');;
    }
}