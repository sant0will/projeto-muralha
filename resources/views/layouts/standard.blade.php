<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Muralha</title>  
  <link href="{{ asset('css/standard.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
  <header class="header">
    <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 ">
      <div class="row">
        <div class="col-md-4" id="navbarLeft">
          <a href="/home">
            <img src="https://image.flaticon.com/icons/svg/62/62666.svg" width="40">
            <span id="nomeSite">Muralha</span>
          </a>          
        </div>
        <div class="col-md-8" id="navbarRight">
          <ul class="navbar-nav" id="listaUser">
            <li class="nav-item dropdown  user-menu">
              <a href="http://example.com" id="navbarDropdownMenuLink">
                <img src="https://www.adjust.com/new-assets/images/site-images/interface/user.svg" class="user-image " alt="User Image" >
                <span class="hidden-xs" style="color: #e6f2ff;">{{ Auth::user()->name }}</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </naxv>
  </header>
  <div class="main">
    <aside>
    <div class="left w3-collapse w3-card w3-animate-left">
      <div class="item">
        <span class="fa fa-plus-square fafa fa-lg"></span><a href="/profile/create">Cadastro</a>
      </div>
      <div class="item">
        <span class="fa fa-calendar fafa fa-lg"></span><a href="#">Processos Seletivos</a>
      </div>
      <div class="item">
        <span class="fa fa-sign-out fafa fa-lg"></span><a href="#">Sair</a>
      </div>    
    </div>
  </aside>
</div>
@yield('content')
</body>
