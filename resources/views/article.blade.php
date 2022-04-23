@extends('layouts.app')
@section('content')
    <div style="padding: 0px 20px">
        @if (!$err)
            <h1 style="margin-bottom: 10px; color: #303030">{{ $post->title }}</h1>
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
    </div>
@endsection
