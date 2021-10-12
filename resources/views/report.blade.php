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
      <div class="row" style="padding-bottom: 1rem;">
        <div class="col-sm-8">
          <h1>Resultados Encuesta</h1>
        </div>
        <form id="poll" method="post" action="{{URL::to('/report')}}">
          {{ csrf_field() }}
          <div class="col-sm-2" style="margin-top: 22px;">
            <button type="submit" class="btn btn-success">Exportar Resultados</button>
          </div>
        </form>
        <div class="col-sm-2" style="margin-top: 22px;">
          <button type="submit" class="btn btn-primary" onclick="window.location='{{ url("/") }}'">Volver a la encuesta</button>
        </div>
      </div>
      <p>A continuacion, usted puede ver los resultados de quienes han respondido la encuesta.</p>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3" style="width:24vw">
            <canvas id="question1Chart"></canvas>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3" style="width:24vw">
            <canvas id="question2Chart"></canvas>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3" style="width:24vw">
            <canvas id="question3Chart"></canvas>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3" style="width:24vw">
            <canvas id="question4Chart"></canvas>
          </div>
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
    </div>
    <script>
      const labelsQuestion1Chart = {!! json_encode($labelsQuestion1Chart) !!};
      const dataQuestion1Chart = {!! json_encode($dataQuestion1Chart) !!};
      const labelsQuestion2Chart = {!! json_encode($labelsQuestion2Chart) !!};
      const dataQuestion2Chart = {!! json_encode($dataQuestion2Chart) !!};
      const labelsQuestion3Chart = {!! json_encode($labelsQuestion3Chart) !!};
      const dataQuestion3Chart = {!! json_encode($dataQuestion3Chart) !!};
      const labelsQuestion4Chart = {!! json_encode($labelsQuestion4Chart) !!};
      const dataQuestion4Chart = {!! json_encode($dataQuestion4Chart) !!};
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/question1Chart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/question2Chart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/question3Chart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/question4Chart.js') }}" type="text/javascript"></script>
  </body>
</html>