<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <th scope="row">{{$post->id}}</th>
              <td>{{$post->title}}</td>
              <td>{{$post->author}}</td>
              <td><a class="btn btn-primary" href="{{route('posts.edit', $post)}}" role="button">Modifica</a></td>
              <td><a class="btn btn-primary" href="{{route('posts.show', $post)}}" role="button">Visualizza</a></td>
              <td>
                <form action="{{route('posts.destroy', $post)}}" method="post">
                @method('DELETE')
                @csrf
                <a type="submit" class="btn btn-primary" role="button">Elimina</a>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>
