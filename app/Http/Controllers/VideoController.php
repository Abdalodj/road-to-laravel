<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class VideoController extends Controller
{
  public function show($id)
  {
    $error = false;
    try {
      /* $post = Post::findOrFail($id); */
      $video = Video::where('id', '=', $id)->firstOrFail();
      return view('articleVideo', [
        'video' => $video,
        'err' => $error,
      ]);
    } catch (ModelNotFoundException $th) {
      $msg = 'Pas de titre avec l\'id: ' . $id;
      $error = true;
      return view('articleVideo', [
        'msg' => $msg,
        'err' => $error
      ]);
    }
  }

  public function store(Request $req)
  {
    $video = Video::create([
      'title' => $req->title,
      'url' => $req->url ?? 'https://cdn.pixabay.com/vimeo/689510466/Jellyfish%20-%20110877.mp4?width=1280&expiry=1663113908&hash=4afd6cbe59ffbec86dab309f7345cc08ae0585b4'
    ]);

    $video->tags()->attach(array_values($req->tags));
    return redirect()->route('welcome');
  }

  public function update($id, Request $req)
  {
    $video = Video::findOrFail($id);
    $video->update([
      'title' => $req->title,
      'url' => $req->url
    ]);
    return redirect()->route('welcome');
  }

  public function delete($id)
    {
        $error = false;
        try {
            Video::where('id', '=', $id)->firstOrFail()->delete();
            $videos = Video::all();
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
