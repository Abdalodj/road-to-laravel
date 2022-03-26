<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'Mon super 1er titre',
            'Mon super 2nd titre'
        ];
        /* $title = 'Mon super 1er titre';
        $title2 = 'Mon super 2nd titre'; */
        /* return view('articles')->with('title', $title); */
        /* return view('articles', compact('title', 'title2')); */
        /* return view('articles', [
            'title' => $title,
            'title2' => $title2
        ]); */
        return view('articles', compact('posts'));
    }

    public function show($id)
    {
        $posts = [
            1 => "Mon titre n°1",
            2 => "Mon titre n°2"
        ];
        $post = $posts[$id] ?? 'Pas de titre avec l\'id: ' . $id;
        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
