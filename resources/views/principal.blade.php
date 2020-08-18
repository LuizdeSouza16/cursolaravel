<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Estoque</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Estoque</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="{{ action('ProdutoController@lista') }}">Listagem <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ action('ProdutoController@novo') }}"">Novo <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>


<body class="container-fluid">
   @yield('content')
</body>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</html>
