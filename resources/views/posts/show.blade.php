<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="card bg-dark text-white">
        <img src="{{$post->img}}" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->body}}</p>
          <p class="card-text">{{$post->location}}</p>
          <p class="card-text">{{$post->author}}</p>
        </div>
      </div>
    </div>
  </body>
</html>
