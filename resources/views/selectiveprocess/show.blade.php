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
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<form class="form-horizontal" method="post" action="{{url('subscription')}}">
					{{csrf_field()}}
					<div class="panel-heading"><h3 align="center">Inscrição </h3></div>
					<fieldset>
						@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
						@endif
						<dl class="dl-horizontal">
							<br>
							<dt>ID</dt>
							<dd> {{$sp->id}}</dd>
							<input  name="selectiveprocess" value="{{$sp->id}}" hidden>
							<dt>Nome</dt>
							<dd> {{$sp->descricao}}</dd>
							<dt>Data de Ínicio</dt>
							<dd> {{$sp->data_inicio}}</dd>
							<dt>Data de Fim</dt>
							<dd> {{$sp->data_fim}}</dd>
							<hr />
							<dd>Escolha o Curso</dd>
							@foreach($sp->courses as $course)
							<dd>
								<label for="curso_{{ $course->id }}">{{$course->nome}}</label>
								<input type="checkbox" id="curso_{{$course->id}}" name="curso_id[{{ $course->id }}][id]" value="{{ $course->id }}">
								<br>
							</dd>
							@endforeach
							<hr />
							<dd>Escolha a Cota</dd>
							@foreach($sp->quotas as $quota)
							<dd>
								<label class="control-label" for="cota_{{ $quota->id }}">{{$quota->descricao}}</label>
								<input type="checkbox" id="cota_{{$quota->id}}" name="quota_id[{{ $quota->id }}][id]" value="{{ $quota->id }}">
							</dd>
							@endforeach
							<hr />
						</dl>

						<!-- Isenção -->
						<div class="form-group">
							<label class="col-md-4 control-label">Gostaria de Pedir Isenção?</label>
							<div class="col-md-4"> 
								<label class="radio-inline">
									<input type="radio" value="1" name="isencao"onclick="habilitar()">
									Sim
								</label>
							</div> 
							<div class="col-md-4"> 
								<label class="radio-inline">
									<input type="radio" value="2" name="isencao" onclick="desabilitar()" checked>
									Não
								</label> 
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label"></label>  
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-commenting" style="font-size: 20px;"></i>
									</div>
									<input id="motivo" name="motivo" required="required" type="text" placeholder="Motivo" class="form-control input-md" disabled>
								</div>
							</div>
						</div>

						<!-- Submit form -->
						<div class="form-group">
							<label class="col-md-4 control-label" ></label>  
							<div class="col-md-4">
								<button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Enviar</button>
								<a href="/home" class="btn btn-danger" value=""><span class="fa fa-times"></span> Cancelar</a>
							</div>
						</div>

					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	function habilitar(){
		document.getElementById("motivo").disabled = false;
	}

	function desabilitar(){
		document.getElementById("motivo").disabled = true;
	}
	
</script>
@endsection
