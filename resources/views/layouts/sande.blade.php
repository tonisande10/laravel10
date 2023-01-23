<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.1/jquery.min.js" integrity="sha512-BkBgWiL0N/EFIbLZYGTgbksKG5bS6PtwnWvVk3gccv+KhtK/4wkLxCRGh+kelKiXx7Ey4jfTabLg3AEIPC7ENA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="{{ asset('css/sande.css') }}" rel="stylesheet"> 
<link href="{{ asset('css/print1.css') }}" media="print" rel="stylesheet"> 
<script type="text/javascript" src="/cidades.js"></script>

	

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="/img/digital2.jpg" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/posts">Cadastro</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/pesquisar">Pesquisar</a>
          
    </li>
    <li class="nav-item">
      <a class="nav-link" disabled>Sair</a>
    </li>
  </ul>
</nav>

    @yield('content')
</body>

	
</html>