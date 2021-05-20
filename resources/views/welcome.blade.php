<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style media="screen">
          .alert{
            color: red;
            text-align: center;
          }

          body{
            text-align: center;
          }
        </style>
    </head>
    <body>

      {{-- stampa in caso di errore compilazione form --}}
      @if ($errors->any())
      <div class="alert">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif

        {{-- creo form per richiedere dati backend --}}
      <form class="" action="{{route('index')}}" method="get">
        <label for="">Id node</label>
        <input type="text" name="idNode" value="">

        <label for="">lingua</label>
        <select class="" name="language">
          <option value="italiano">italiano</option>
          <option value="english">english</option>
        </select>

        <button type="submit">cerca</button>
      </form>

    </body>
</html>
