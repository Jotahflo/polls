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
      <h1>Resultados Encuesta</h1>
      <p>A continuacion, usted puede ver los resultados de quienes han respondido la encuesta.</p>
        <div class="row">
          
        </div>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Genero</th>
                <th>Hobby</th>
                <th>Horas Hobby</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($answersUsers as $answerUser)
                <tr>
                  @for ($i = 0; $i < count($answerUser); $i++)
                    @if ($i == 0)
                      <th scope="row">{{ $answerUser[$i] }}</th>
                    @else
                      @if($answerUser[$i] == "0")
                        <td>-</td>
                      @else
                        <td>{{ $answerUser[$i] }}</td>
                      @endif
                    @endif
                  @endfor
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="row">
          <form id="poll" method="post" action="{{URL::to('/report')}}">
            {{ csrf_field() }}
            <div class="col-xs-6">
              <button type="submit" class="btn btn-default">Exportar Resultados</button>
            </div>
          </form>
          <div class="col-xs-6">
            <button type="submit" class="btn btn-default" onclick="window.location='{{ url("/") }}'">Volver a la encuesta</button>
          </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
  </body>
</html>