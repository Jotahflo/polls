<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <title>Encuesta</title>
  </head>
  <body>
    <div class="container-fluid">
        <h1>Encuesta</h1>
        <p>Por favor, responda las siguientes preguntas.</p>
        <form id="poll" method="post" action="{{URL::to('/')}}">
          {{ csrf_field() }}
          
          @foreach ($questions as $question)
            <div id="question{{ $loop->iteration }}" class="row">
              <div class="form-group col-sm-12 col-md-12">
                <label for="{{ $question->type_question }}">{{ $question->title }}</label>
                @yield($question->type_question)
              </div>
            </div>
          @endforeach

          <div class="row">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary">Siguiente</button>
            </div>
          </div>
        </form>
        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <div class="alert alert-warning" style="margin-top: 1rem;" role="alert">{{ $error }}</div>
          @endforeach
        @endif
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      document.getElementById('question4').style.display = "none";
      document.getElementById('hrsHobby').value = 0;

      function onQuestion4(obj){   
        if (obj.checked){  
          document.getElementById('question4').style.display = "block";
          document.getElementById('hrsHobby').value = "";
        }   
      }

      function offQuestion4(obj){   
        if (obj.checked){  
          document.getElementById('question4').style.display = "none";
          document.getElementById('hrsHobby').value = 0;
        }   
      }
    </script>
  </body>
</html>