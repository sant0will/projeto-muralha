@extends('layouts.standard')
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

  <style>
    .othertop{margin-top:10px;}
    .input-group-addon{width: 45px;}
  </style>

</head>
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <div class="panel panel-default">
        <form class="form-horizontal" method="post" action="{{url('profile')}}">
          {{csrf_field()}}
          <div class="panel-heading"><h3 align="center">Processos Seletivos Abertos</h3></div>
          <fieldset>
            @if(session()->has('message'))
            <div class="alert alert-success">
              {{ session()->get('message') }}
            </div>
            @endif

            <table class="table" style="margin-left: 1px;">
              <br>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Curso</th>
                <th>Data de Ínicio</th>
                <th>Data de Fim</th>
                <th>Acão</th>
              </tr>
              @foreach($selectiveprocess as $sp)
              <tr>
                <td> {{$sp->id}} </td>
                <td> {{$sp->descricao}} </td>
                <td>
                @foreach($sp->courses as $spc)
                 {{$spc->nome}}<br>
                @endforeach
                </td>
                <td> {{$sp->data_inicio}} </td>
                <td> {{$sp->data_fim}} </td>
                <td> <a href="/subscription/create" class="btn btn-success">Inscrever-se</a> </td>
              </tr>
              @endforeach
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection