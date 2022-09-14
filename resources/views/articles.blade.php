@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-auto">
                <h1>Liste des posts</h1>
                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                        <h4 style="margin: 20px">
                            <span style="color: black">{{ $post->id }}.</span>
                            <a style="color: #6d6d6d" href="{{ route('post.show', ['id' => $post->id]) }}">
                                {{ $post->title }}
                            </a>
                        </h4>
                    @endforeach
                @else
                    <h2>Vous n'avez crer aucun post</h2>
                @endif
            </div>
            <div class="col-auto">
                <h1>Liste des videos</h1>
                @if ($videos->count() > 0)
                    @foreach ($videos as $video)
                        <h4 style="margin: 20px">
                            <span style="color: black">{{ $video->id }}.</span>
                            <a style="color: #6d6d6d" href="{{ route('video.show', ['id' => $video->id]) }}">
                                {{ $video->title }}
                            </a>
                        </h4>
                    @endforeach
                @else
                    <h2>Vous n'avez crer aucun video</h2>
                @endif
            </div>
        </div>
    </div>
@endsection
