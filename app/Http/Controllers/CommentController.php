<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(StoreCommentRequest $req, $id)
    {
        $error = false;
        try {
            
            $post = Post::find($id);
            $post->comments()->save(new Comment([
                'author' => $req->author,
                'content' => $req->content
            ]));
            $post->refresh();
            return view('article', [
                'post' => $post,
                'err' => $error
            ]);
        } catch (\Throwable $th) {
            $msg = 'Erreur impossible d\'ajouter un commentaire: ' . $id;
            $error = true;
            return view('article', [
                'msg' => $msg,
                'err' => $error
            ]);
        }
    }
}
