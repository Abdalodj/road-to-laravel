@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row gx-5 justify-content-lg-between">
            <div class="col-12 col-sm-10 col-md-7 col-lg-6">
                <div class="row justify-content-center justify-content-lg-around">
                    <img class="rounded" src="{{$post->image->path}}" alt="{{$post->title}}" width="300" height="400">
                    <h3 style="margin-bottom: 10px; color: #303030">{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <div class="inline">
                        <a href="{{ route('post.delete', ['id' => $post->id]) }}">
                            <button style="
                                        padding: 7px 30px;
                                        margin: 10px;
                                        background-color: #a83500;
                                        color: #f3f3f3;
                                        border-radius: 5px;
                                        border: 0px;
                                        box-shadow: 3px 3px 8px #b33300">
                                Supprimé
                            </button>
                        </a>
                        <a href="{{ route('post.update', ['id' => $post->id]) }}">
                            <button style="
                                        padding: 7px 30px;
                                        margin: 10px;
                                        background-color: #00a862;
                                        color: #f3f3f3;
                                        border-radius: 5px;
                                        border: 0px;
                                        box-shadow: 3px 3px 8px #40ad89">
                                Modifier
                            </button>
                        </a>
                    </div>
                </div>
                <hr>
                <h2 class="mt-4 mb-2">Commentaires</h2>
                <div class="border border-2 border-black rounded-2 px-4 py-1 overflow-auto" style="max-height: 500px">
                    @forelse ($post->comments as $comment)
                    <div class="my-3">
                        <h5><u><i>{{$comment->author}}</i></u></h5>
                        <p>{{$comment->content}}</p>
                        <hr>
                    </div>
                    @empty
                        <h4>Aucun commentaire</h4>
                    @endforelse
                </div>
            </div>
            <div class="mt-md-5 col-12 col-sm-10 col-md-4 col-lg-5">
                <form class="mt-3" action="{{ route('comment.store', $post->id) }}" method="post">
                    @csrf
                    <legend><u><strong>Ajouter un commentaire</strong></u></legend>
                    <div class="mb-2">
                        <label for="pseudo" class="form-label"><u>Pseudo</u></label>
                        <input type="text" class="form-control" id="pseudo" name="author">
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label"><u>Commentaire</u></label>
                        <textarea class="form-control" id="comment" rows="5" name="content" maxlength="500"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary px-4">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
    {{-- <div style="padding: 0px 20px">
        @if (!$err)
            <h3 style="margin-bottom: 10px; color: #303030">{{ $post->title }}</h3>
            <p style="width: 300px; word-break: break-all">{{ $post->content }}</p>
            <a href="{{ route('post.delete', ['id' => $post->id]) }}">
                <button 
                style="
                    padding: 7px 30px;
                    margin: 10px; 
                    background-color: #a83500; 
                    color: #f3f3f3; 
                    border-radius: 5px; 
                    border: 0px;
                    box-shadow: 3px 3px 8px #b33300">
                    Supprimé
            </button>
            </a>
            <a href="{{ route('post.update', ['id' => $post->id]) }}">
                <button 
                style="
                    padding: 7px 30px; 
                    margin: 10px;
                    background-color: #00a862; 
                    color: #f3f3f3; 
                    border-radius: 5px; 
                    border: 0px;
                    box-shadow: 3px 3px 8px #40ad89">
                    Modifier
            </button>
            </a>
        @else
            <h3>{{ $msg }}</h3>
        @endif
    </div> --}}
    <div class="container-fluid">

    </div>
@endsection
