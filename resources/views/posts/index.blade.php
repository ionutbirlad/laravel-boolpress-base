@extends('layouts.layout')

@section('titolo')
  Archivio posts
@endsection

@section('main')
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
              <form action="{{route('posts.destroy', $post->id)}}" method="post">
              @method('DELETE')
              @csrf
              <button class="btn btn-primary" type="submit" name="button">elimina</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    {{-- PER NAVIGARE TRA LE PAGINE --}}
      {{$posts->links()}}
    {{-- PER NAVIGARE TRA LE PAGINE --}}

  </div>
@endsection
