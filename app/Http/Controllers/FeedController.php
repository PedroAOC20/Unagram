<?php

namespace App\Http\Controllers;


class FeedController extends Controller
{


    public function index(){
        $posts = [
            [
                'user' => [
                    'username' => 'igorulian',
                    'name' => 'Igor Ulian',
                    'picture' => 'https://avatars.githubusercontent.com/u/48739190?v=4',
                ],
                'imageUrl' => 'https://picsum.photos/652/407',
                'likes' => 10,
            ],
            [
                'user' => [
                    'username' => 'fernandoplay',
                    'name' => 'Fernando Yudi',
                    'picture' => 'https://avatars.githubusercontent.com/u/164583213?v=4',
                ],
                'imageUrl' => 'https://picsum.photos/652/407',
                'likes' => 5,
            ],
            [
                'user' => [
                    'username' => 'pedroaoc',
                    'name' => 'Pedro AOC',
                    'picture' => 'https://avatars.githubusercontent.com/u/161269373?v=4',
                ],
                'imageUrl' => 'https://picsum.photos/652/407',
                'likes' => 5,
            ],
        ];

        // Passando os posts para a view
        return view('feed', ['posts' => $posts]);
    }
}
