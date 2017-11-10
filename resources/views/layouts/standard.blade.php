<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Muralha</title>

  <!-- Styles -->
  <link href="{{ asset('css/standard.css') }}" rel="stylesheet">
</head>
        <!--===================
        Header
        =======================-->
        <header class="header">
          <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 ">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand p-0 mr-5" href="/home"><img src="https://image.flaticon.com/icons/svg/62/62666.svg " width="40" style="padding-right: 15px;">Muralha</a>
            <div class="float-left"> <a href="#" class="button-left"><span class="fa fa-fw fa-bars"></span></a> </div>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown  user-menu">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="https://www.adjust.com/new-assets/images/site-images/interface/user.svg" class="user-image" alt="User Image" >
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="main">
        <aside>
          <div class="sidebar left ">
            <div class="user-panel">
              <div class="pull-left image">
                <img src="https://openclipart.org/image/2400px/svg_to_png/250353/icon_user_whiteongrey.png" class="rounded-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
              </div>
            </div>
            <ul class="list-sidebar bg-defoult">
              <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Processos Seletivos </span></a>
              </li>
              <li> <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a> </li>
              <li> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span> <span class="fa fa-chevron-left pull-right"></span> </a>
                <ul class="sub-menu collapse" id="products">
                  <li class="active"><a href="#">CSS3 Animation</a></li>
                  <li><a href="#">General</a></li>
                  <li><a href="#">Buttons</a></li>
                  <li><a href="#">Tabs & Accordions</a></li>
                  <li><a href="#">Typography</a></li>
                  <li><a href="#">FontAwesome</a></li>
                  <li><a href="#">Slider</a></li>
                  <li><a href="#">Panels</a></li>
                  <li><a href="#">Widgets</a></li>
                  <li><a href="#">Bootstrap Model</a></li>
                </ul>
              </li>
              <li> <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a> </li>
              <li> <a href="#" data-toggle="collapse" data-target="#tables" class="collapsed active" ><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa fa-chevron-left pull-right"></span></a>
                <ul  class="sub-menu collapse" id="tables" >
                  <li><a href=""> Static Tables</a></li>
                  <li><a href=""> Data Tables</a></li>
                  <li><a href=""> Foo Tables</a></li>
                  <li><a href=""> jqGrid</a></li>
                </ul>
              </li>
              <li> <a href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active" ><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa fa-chevron-left pull-right"></span></a>
                <ul  class="sub-menu collapse" id="e-commerce" >
                  <li><a href=""> Products grid</a></li>
                  <li><a href=""> Products list</a></li>
                  <li><a href="">Product edit</a></li>
                  <li><a href=""> Product detail</a></li>
                  <li><a href="">Cart</a></li>
                  <li><a href=""> Orders</a></li>
                  <li><a href=""> Credit Card form</a> </li>
                </ul>
              </li>
              <li> <a href=""><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span> </a></li>
              <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
              <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
              <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
              <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
              <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
            </ul>
          </div>
        </aside>
      </div>
