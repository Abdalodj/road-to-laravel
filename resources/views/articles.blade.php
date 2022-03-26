@extends('layouts.app')
@section('content')
    @for ($i = 0; $i < sizeof($posts); $i++)
        @if (str_contains($posts[$i], '1er'))
            <h2><a href="{{ route('posts', ['id' => $i + 1]) }}">{{ $posts[$i] }}</a></h2>
        @else
            <h3><a href="{{ route('posts', ['id' => $i + 1]) }}">{{ $posts[$i] }}</a></h3>
        @endif
    @endfor
@endsection
