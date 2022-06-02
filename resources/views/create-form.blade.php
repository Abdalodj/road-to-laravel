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
                            <input type="text" name="title" id="title" maxlength="25" width="100px" class="form-control" required>
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px">
                            <label for="image" class="form-label">Image Url: </label>
                            <input type="url" name="image" id="image" width="100px" class="form-control">
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px">
                          <label for="content" class="form-label">Contenu: </label>
                            <textarea class="form-control" name="content" id="content" rows="5" placeholder="Description du post" maxlength="1000" required></textarea>
                        </div>
                        <div class="row mb-3">
                            <p for="tag" class="h4">Tags :</p>
                            <div class="col">
                                @foreach ($tags as $tag)
                                    @if ($tag->id % 2 === 0)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$tag->id}}" id="flexCheckDefault" name="tags[]">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{$tag->name}}
                                        </label>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col">
                                @foreach ($tags as $tag)
                                    @if ($tag->id % 2 !== 0)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$tag->id}}" id="flexCheckDefault" name="tags[]">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{$tag->name}}
                                        </label>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
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
                            <label for="image" class="form-label">Image Url: </label>
                            <input type="url" name="image" id="image" width="100px" class="form-control" value="{{$post->image->path}}">
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px">
                          <label for="content" class="form-label">Contenu: </label>
                            <textarea class="form-control" name="content" id="content" cols="30" rows="5" placeholder="Description du post"
                                maxlength="1000">{{ $post->content }}</textarea>
                        </div>
                        <div class="row mb-3">
                            <p for="tag" class="h4">Tags :</p>
                            <div class="col">
                                @foreach ($tags as $tag)
                                    @if ($tag->id % 2 === 0)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$tag->id}}" id="flexCheckDefault" name="tags[]" {{in_array($tag->id, $post->pivot)}}>
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{$tag->name}}
                                        </label>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col">
                                @foreach ($tags as $tag)
                                    @if ($tag->id % 2 !== 0)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$tag->id}}" id="flexCheckDefault" name="tags[]">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{$tag->name}}
                                        </label>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Modifier</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
