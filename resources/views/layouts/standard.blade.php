<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Muralha</title>  
  <link href="{{ asset('css/standard.css') }}" rel="stylesheet">
</head>
<body>
  <header class="header">
    <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 ">
      <a class="navbar-brand p-0 mr-5" href="/home"><img src="https://image.flaticon.com/icons/svg/62/62666.svg " width="40" style="padding-right: 15px;">Muralha</a>
      <div class="float-left"> <a href="#" class="button-left"></a> </div>
      <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown  user-menu">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="https://www.adjust.com/new-assets/images/site-images/interface/user.svg" class="user-image" alt="User Image" >
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="main">
    <aside>
     <div class="left">
      <div class="item">
        <span class="glyphicon glyphicon-plus"><a href="#">Cadastro</a></span>
      </div>
      <div class="item active">
        <span class="glyphicon glyphicon-th-list"></span>
      </div>
      <div class="item">
        <span class="glyphicon glyphicon-log-out"></span>
      </div>
      <div class="item">
        <span class="glyphicon glyphicon-log-in"></span>
      </div> 
      <div class="item">
        <span class="glyphicon glyphicon-random"></span>
      </div>
      <div class="item">
        <span class="glyphicon glyphicon-remove"></span>
      </div>    
    </div>
  </aside>
</div>
</body>
