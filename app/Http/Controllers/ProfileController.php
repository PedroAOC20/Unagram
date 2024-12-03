<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
        $profile = User::where('id', $id)->first();

        $data['profile'] = $profile;

        return view('profile',  $data);
    }
}