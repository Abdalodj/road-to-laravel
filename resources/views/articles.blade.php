@extends('layouts.app')
@section('content')
    <h1>Liste des posts</h1>
    @if ($posts->count() > 0)
        @foreach ($posts as $post)
            <h2 style="margin: 20px">
                <span style="color: black">{{$post->id}}.</span> 
                <a style="color: #6d6d6d" href="{{ route('post.show', ['id' => $post->id]) }}">
                    {{ $post->title }}
                </a>
            </h2>
        @endforeach
    @else
        <h2>Vous n'avez crer aucun post</h2>
    @endif
@endsection
