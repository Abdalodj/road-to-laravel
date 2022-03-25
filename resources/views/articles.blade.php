<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Articles</title>
</head>
<body>
  <h1>Liste des articles</h1>
  {{-- <h2>{{$posts[0]}}</h2>
  <h3>{{ $posts[1]  }}</h3> --}}
  @foreach ($posts as $post)
      @if (str_contains($post, '1er'))
          <h2>{{$post}}</h2>
      @else
          <h3>{{$post}}</h3>
      @endif
  @endforeach
</body>
</html>