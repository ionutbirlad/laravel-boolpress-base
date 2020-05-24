@extends('layouts.layout')

@section('titolo')
  Creazione post
@endsection

@section('main')
  <div class="container">
  <div class="row">
      <div class="col-12">
          <form action="{{route('posts.store')}}" method="post">
              @csrf
              @method('POST')

              <div class="form-group">
                  <label for="title">Titolo</label>
                  <input type="text" placeholder="Inserisci i titolo" name="title">
                  @error('title')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label for="title">Testo</label>
                  <textarea name="body" cols="30" rows="10" placeholder="Inserisci il testo"></textarea>
                  @error('body')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label for="title">Autore</label>
                  <input type="text" placeholder="Inserisci il nome dell'autore" name="author">
                  @error('author')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label for="title">Location</label>
                  <input type="text" placeholder="La tua posizione" name="location">
              </div>

              <div class="form-group">
                  <label for="title">Immagine</label>
                  <input type="text" placeholder="Inserisci il path" name="img">
              </div>

              <div class="form-group">
                  <label for="not-published">Non Pubblicato</label>
                  <input type="radio" id="not-published" name="published" value="0">
                  <label for="published">Pubblicato</label>
                  <input type="radio" id="published" name="published" value="1">
              </div>

              <div class="form-group">
                  <input type="submit" value="Salva">
              </div>
          </form>
        </div>
      </div>
  </div>
@endsection
