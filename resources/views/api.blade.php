<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h3>Risultato ottenuto:</h3>

    {{-- riporto in view elementi ottenuti da richiesta form --}}
    <p>Id node: {{$user-> idNode}}</p>
    <p>Node name: {{$user-> NodeName}}</p>
    <p>Language: {{$user-> language}}</p>

  </body>
</html>
