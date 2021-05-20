<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

      body{
        text-align: center;
      }
    </style>
  </head>
  <body>

    <h3>Risultato ottenuto:</h3>

    {{-- stampo dati nestedset node_tree di idNode richiesto in form --}}
    <p>Level: {{$resultedLevel}}</p>
    <p>Left: {{$resultedLeft}}</p>
    <p>Right: {{$resultedRight}}</p>
    <p>Children count: {{$children_count/2}}</p>

    <hr>

    {{-- riporto in view elementi ottenuti da richiesta form --}}
    <p>Id node: {{$user-> idNode}}</p>
    <p>Node name: {{$user-> NodeName}}</p>
    <p>Language: {{$user-> language}}</p>

  </body>
</html>
