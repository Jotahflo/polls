<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/public/css/app.css">

    <title>Encuesta</title>
  </head>
  <body>
    <h1>Encuesta</h1>
    <p>Por favor, responda las siguientes preguntas:</p>
    <form method="post">
      <div class="form-group">
        <label for="textFullName">1. Ingrese su nombre</label>
        <input type="text" class="form-control" id="inputFullName" placeholder="Nombre...">
      </div>
      <div class="checkbox">
        <label for="textGender">2. Eliga su genero</label>
        <label>
          <input type="radio"> Hombre
        </label>
        <label>
          <input type="radio"> Mujer
        </label>
      </div>
      <div class="checkbox">
        <label for="textHobby">3. ¿Tiene algún hobby?</label>
        <label>
          <input type="radio"> Ninguno
        </label>
        <label>
          <input type="radio"> Deporte
        </label>
        <label>
          <input type="radio"> Musical
        </label>
        <label>
          <input type="radio"> Cocina
        </label>
        <label>
          <input type="radio"> Literario
        </label>
        <label>
          <input type="radio"> Manualidades
        </label>
        <label>
          <input type="radio"> Juegos
        </label>
        <label>
          <input type="radio"> Modelismo
        </label>
        <label>
          <input type="radio"> Baile
        </label>
        <label>
          <input type="radio"> Cine
        </label>
        <label>
          <input type="radio"> Otro
        </label>
      </div>
      <div class="form-group">
        <label for="textHowLongHobby">4. A su hobby, ¿cuánto tiempo le dedica al mes?</label>
        <input type="number" class="form-control" id="inputHowLongHobby" placeholder="Tiempo de hobby...">
      </div>
      <button type="submit" class="btn btn-default">Siguiente</button>
    </form>

    @foreach ($questions as $question)
    <p>{{ $question->title }}</p>
    <p>{{ $question->type_question }}</p>
    @endforeach
    <script src="/public/js/app.js"></script>
  </body>
</html>