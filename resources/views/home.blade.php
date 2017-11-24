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

                    <!--Nome-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Já Completou seu Cadastro? </label>  
                        <div class="col-md-7">
                        <a href="profile/create" class="btn btn-success">Cadastro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
