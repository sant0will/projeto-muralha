  <!DOCTYPE html>
  <html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://image.flaticon.com/icons/svg/62/62666.svg" type="image/jpg" sizes="16x16">
    <title>Muralha</title>  
    <link href="{{ asset('css/standard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <!--Menu Superior-->
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
                <img src="https://www.adjust.com/new-assets/images/site-images/interface/user.svg" class="user-image " alt="User Image" >
                <span class="hidden-xs" style="color: #e6f2ff;">{{ Auth::user()->name }}</span>
              </li>
            </ul>
          </div>
        </div>
      </naxv>
    </header>

    <!--Menu Lateral-->
    <div class="main"> 
      <aside>
        <div class="left w3-collapse w3-card w3-animate-left">

          <!--Verificação para obrigar a criação do perfil-->
          @if (Auth::user()->profile)
          <a href="{{action('ProfileController@show', Auth::user()->profile->id)}}" >
            <div class="item"">             
            <span class="fa fa-user-o fafa fa-lg"><label>Perfil</label></span>
            </div>            
          </a>
          @else
          <div class="item">             
            <span class="fa fa-user-o fafa fa-lg"></span><a href="/profile/create"><label>Perfil</label></a>
          </div>          
          @endif
          @if ((Auth::user()->profile) != null)
          
          <!-- Mostrando processo seletivo -->
          <a href="/selectiveprocess">
            <div class="item">
              <span class="fa fa-calendar fafa fa-lg"><label>Processos Seletivos</label></span>
            </div>
          </a>
          
          <!--Habilitar apenas para admins-->
          @if ((Auth::user()->profile->adm) == 1)
          <a href="/admin">
            <div class="item">
              <span class="fa fa-user-secret fafa fa-lg"><label>Administração</label></span>
            </div>
          </a>
          @endif   
          
          <!--Habilitar apenas para users-->
          @if ((Auth::user()->profile->adm) != 1)
          <a href="{{action('SubscriptionController@show', Auth::user()->profile->id)}}">
            <div class="item">
              <span class="fa fa-check-circle-o fafa fa-lg"><label>Inscrições</label></span>
            </div>
          </a>
          @endif
          @endif
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <div class="item">
            <span class="fa fa-sign-out fafa fa-lg"><label>Sair</label></span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>  
        </a> 
      </div> 
    </div>
  </aside>          
</div>
@yield('content')
</body>
