<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universite prive de fes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png"   href= "{{ url('image/logo_upf.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/movies"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
      <li class="nav-item active">
        <a class="nav-link" href="/home">Universite Prive De Fes</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/Inscription">Return</span></a>
      </li>
    </ul>
  </div>
</nav>
@yield('content')
</div>
</body>
</html>
