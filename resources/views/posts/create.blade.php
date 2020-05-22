<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
        <form action="{{route('posts.store')}}" method="post">
          @csrf
          @method('POST')

          <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" placeholder="Inserisci i titolo" name="title">
          </div>

          <div class="form-group">
            <label for="title">Testo</label>
            <textarea name="body" cols="30" rows="10" placeholder="Inserisci il testo"></textarea>
          </div>

          <div class="form-group">
            <label for="title">Autore</label>
            <input type="text" placeholder="Inserisci il nome dell'autore" name="author">
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
  </body>
</html>
