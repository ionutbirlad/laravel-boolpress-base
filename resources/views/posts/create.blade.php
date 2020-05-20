<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('posts.store')}}" method="post">
      @csrf
      @method('POST')

      <div class="">
        <label for="title">Titolo</label>
        <input type="text" placeholder="Inserisci i titolo" name="title">
      </div>

      <div>
        <label for="title">Testo</label>
        <textarea name="body" cols="30" rows="10" placeholder="Inserisci il testo"></textarea>
      </div>

      <div>
        <label for="title">Autore</label>
        <input type="text" placeholder="Inserisci il nome dell'autore" name="author">
      </div>

      <div>
        <label for="title">Location</label>
        <input type="text" placeholder="La tua posizione" name="location">
      </div>

      <div>
        <label for="title">Immagine</label>
        <input type="text" placeholder="Inserisci il path" name="img">
      </div>

      <div>
        <label for="not-published">Non Pubblicato</label>
        <input type="radio" id="not-published" name="published" value="0">
        <label for="published">Pubblicato</label>
        <input type="radio" id="published" name="published" value="1">
      </div>

      <div>
        <input type="submit" value="Salva">
      </div>

    </form>
  </body>
</html>
