@extends('layouts.app')

@section('content')
    @if (!$update)
      <form action="{{ route('post.store') }}" method="post" style="margin: 20px">
        @csrf
        <h2 style="margin-bottom: 20px">Nouveau Post</h2>
        <div style="margin-bottom: 10px">
          <label for="title">Titre: </label>
          <input type="text" name="title" id="title" maxlength="25" width="100px">
        </div>
        <div style="margin-bottom: 10px">
          <textarea name="content" id="content" cols="30" rows="5" placeholder="Description du post" maxlength="1000"></textarea>
        </div>
        <button type="submit">Enregistrer</button>
      </form>
    @else
      <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" style="margin: 20px">
        @csrf
        <h2 style="margin-bottom: 20px">Modifier Post</h2>
        <div style="margin-bottom: 10px">
          <label for="title">Titre: </label>
          <input type="text" name="title" id="title" maxlength="25" width="100px" value="{{$post->title}}">
        </div>
        <div style="margin-bottom: 10px">
          <textarea name="content" id="content" cols="30" rows="5" placeholder="Description du post" maxlength="1000">{{$post->content}}</textarea>
        </div>
        <button type="submit">Enregistrer</button>
      </form>
    @endif
@endsection
