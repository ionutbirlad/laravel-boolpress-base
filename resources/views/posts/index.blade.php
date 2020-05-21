<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="wrapper">
      <div class="head">
        <span>Titolo</span>
        <span>Autore</span>
        <span>Azioni</span>
      </div>
      @foreach ($posts as $post)
        <div class="post">
          <span>{{$post->title}}</span>
          <span>{{$post->author}}</span>
          <span><a href="{{route('posts.edit', $post)}}">Modifica</a></span>
          <span><a href="{{route('posts.show', $post)}}">Visualizza</a></span>
        </div>
      @endforeach
    </div>
  </body>
</html>
