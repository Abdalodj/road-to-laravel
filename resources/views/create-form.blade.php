@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                @if (!$update)
                    <form action="{{ route('post.store') }}" method="post" style="margin: 20px">
                        @csrf
                        <legend style="margin-bottom: 20px"><u>Nouveau Post</u></legend>
                        <div class="mb-3" style="margin-bottom: 10px">
                            <label for="title" class="form-label">Titre: </label>
                            <input type="text" name="title" id="title" maxlength="25" width="100px" class="form-control">
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px">
                          <label for="content" class="form-label">Contenu: </label>
                            <textarea class="form-control" name="content" id="content" rows="5" placeholder="Description du post" maxlength="1000"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </form>
                @else
                    <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" style="margin: 20px">
                        @csrf
                        <legend style="margin-bottom: 20px"><u>Modifier Post</u></legend>
                        <div class="mb-3" style="margin-bottom: 10px">
                          <label for="title" class="form-label">Titre: </label>
                            <input class="form-control" type="text" name="title" id="title" maxlength="25" width="100px"
                                value="{{ $post->title }}">
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px">
                          <label for="content" class="form-label">Contenu: </label>
                            <textarea name="content" id="content" cols="30" rows="5" placeholder="Description du post"
                                maxlength="1000">{{ $post->content }}</textarea>
                        </div>
                        <button type="submit">Modifier</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
