<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('articles', compact('posts'));
    }

    public function show($id)
    {
        $error = false;
        try {
            /* $post = Post::findOrFail($id); */
            $post = Post::where('id', '=', $id)->firstOrFail();
            return view('article', [
                'post' => $post,
                'err' => $error
            ]);
        } catch (ModelNotFoundException $th) {
            $msg = 'Pas de titre avec l\'id: ' . $id;
            $error = true;
            return view('article', [
                'msg' => $msg,
                'err' => $error
            ]);
        }
    }

    public function contact()
    {
        return view('contact');
    }

    public function create()
    {
        return view('create-form', ['update' => false]);
    }
    public function toUpdate($id)
    {
        try {
            $post = Post::findOrFail($id);
            return view('create-form', [
                'post' => $post,
                'update' => true
            ]);
        } catch (ModelNotFoundException $th) {
            $msg = 'Pas de titre avec l\'id: ' . $id;
            $error = true;
            return view('article', [
                'msg' => $msg,
                'err' => $error
            ]);
        }
    }

    public function store(Request $req)
    {
        Post::create([
            'title' => $req->title,
            'content' => $req->content
        ]);
        return redirect()->route('welcome');
    }
    public function update($id, Request $req)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $req->title,
            'content' => $req->content
        ]);
        return redirect()->route('welcome');
    }

    public function delete($id)
    {
        $error = false;
        try {
            /* $post = Post::findOrFail($id); */
            Post::where('id', '=', $id)->firstOrFail()->delete();
            $posts = Post::all();
            return redirect()->route('welcome');
        } catch (ModelNotFoundException $th) {
            $msg = 'Pas de titre avec l\'id: ' . $id;
            $error = true;
            return view('article', [
                'msg' => $msg,
                'err' => $error
            ]);
        }
    }
}
