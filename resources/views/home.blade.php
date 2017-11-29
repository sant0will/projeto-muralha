@extends('layouts.standard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 align="center">Seja bem Vindo {{ Auth::user()->name }}!</h3>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <!-- Carousel Slider -->
                    <div id="carouselLogo" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="http://www.diariodoiguacu.com.br/static/img/noticias/capa-4-dicas-para-escolher-a-faculdade-certa-para-o-seu-futuro-35331.jpg" style="width: 80%; margin-left: 10%;">
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Slider -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
