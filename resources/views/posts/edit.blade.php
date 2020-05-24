@extends('layouts.layout')

@section('titolo')
  Modifica post numero {{$post->id}}
@endsection

@section('main')
  <div class="container">
  <form class="" action="{{route('posts.update', $post)}}" method="post">
      @csrf
      @method('PUT')

      <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" name="title" value="{{$post->title}}">
      </div>

      <div class="form-group">
          <label for="title">Testo</label>
          <textarea name="body" cols="30" rows="10" value="{{$post->body}}"></textarea>
      </div>

      <div class="form-group">
          <label for="title">Autore</label>
          <input type="text" name="author" value="{{$post->author}}">
      </div>

      <div class="form-group">
          <label for="title">Location</label>
          <input type="text" name="location" value="{{$post->location}}">
      </div>

      <div class="form-group">
          <label for="title">Immagine</label>
          <input type="text" name="img" value="{{$post->img}}">
      </div>

      <div class="form-group">
          <label for="not-published">Non Pubblicato</label>
          <input type="radio" id="not-published" name="published" value="0" {{($post->published == 0) ? 'checked' : ''}}>
          <label for="published">Pubblicato</label>
          <input type="radio" id="published" name="published" value="1" {{($post->published == 1) ? 'checked' : ''}}>
      </div>

      <div class="form-group">
          <input type="submit" value="Salva">
      </div>

    </form>
  </div>
@endsection
