@extends('layouts.standard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Seja bem Vindo {{ Auth::user()->name }}!</div>

                <div class="content"> 
                <h3>Gostaria de se cadastrar?</h3>
                <a href="/profile/create" class="btn btn-success">Cadastrar-se</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection