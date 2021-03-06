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
				<form class="form-horizontal" method="POST" action="{{action('SelectiveProcessController@update', $id)}}">
					{{csrf_field()}}				
					<input name="_method" type="hidden" value="PATCH">
					<div class="panel-heading"><h3 align="center">Alteração de Processo Seletivo</h3></div>
					<fieldset>
						@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
						@endif

						<!--Nome-->
						<div class="form-group">
							<label class="col-md-4 control-label">Processo Seletivo</label>  
							<div class="col-md-7">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-users">
										</i>
									</div>
									<input id="nome" name="nome" required="required" type="text" placeholder="Nome do Processo" class="form-control input-md" value="{{$sp->nome}}">
								</div>
							</div>
						</div>

						<!--Descrição-->
						<div class="form-group">
							<label class="col-md-4 control-label">Descrição</label>  
							<div class="col-md-7">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-quote-right">
										</i>
									</div>
									<input id="descricao" name="descricao" required="required" type="text" placeholder="Descrição" class="form-control input-md" value="{{$sp->descricao}}">
								</div>
							</div>
						</div>

						<!-- Data -->
						<div class="form-group">
							<label class="col-md-4 control-label">Data de Inicio</label>  
							<div class="col-md-7">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar-check-o"></i>
									</div>
									<input  name="data_inicio" required="required" placeholder="Data de Inicio" class="form-control input-md" value="{{$sp->data_inicio}}">
								</div>
							</div>
						</div>

						<!-- Data -->
						<div class="form-group">
							<label class="col-md-4 control-label">Data de Fim</label>  
							<div class="col-md-7">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar-times-o "></i>
									</div>
									<input id="data_fim" name="data_fim" required="required" placeholder="Data do Fim" class="form-control input-md" value="{{$sp->data_fim}}">
								</div>
							</div>
						</div>

						<!-- Ativação -->
						<hr />
						<div class="form-group">
							<label class="col-md-4 control-label"> Ativar </label>	
							<div class="col-md-4">
								<label class="radio-inline">
									<input id="ness2" type="radio" name="ativacao" value="1" checked="checked">
									Sim
								</label>
							</div> 
							<div class="col-md-4"> 
								<label class="radio-inline">
									<input id="ness3" type="radio" name="ativacao" value="0">
									Não
								</label> 
							</div>							
						</div>
						<hr />

						<!-- Cursos -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Curso(s) </label><hr />	
							@foreach($courses as $course)
							<?php $selected = false; ?>

							@if ($sp->courses->contains('id', $course->id))
							<?php $selected = true; ?>
							@endif
							<div class="row">
								<div class="col-md-2 cursos"></div>
								<div class="col-md-5 cursos">											
									<label class="control-label" for="curso_{{ $course->id }}">{{$course->nome}}</label>
									<input type="checkbox" id="curso_{{$course->id}}" name="curso_id[{{ $course->id }}][id]" value="{{ $course->id }}" {{ ($selected) ? 'checked' : '' }}>
								</div>	
								<div class="col-md-2">
									<label class="control-label">Vagas</label>
								</div>
								<div class="col-md-2">
									<input id="nome" name="curso_id[{{ $course->id }}][vagas]"  placeholder="Nº"  type="text" class="form-control" value="{{ ($selected) ? $sp->courses->find($course->id)->pivot->vagas : '' }}">
								</div>
							</div>
							@endforeach							
						</div>

						<!-- Cotas -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Cota(s) </label><hr />		
							@foreach($quotas as $quota)
							<?php $selected = false; ?>

							@if ($sp->quotas->contains('id', $quota->id))
							<?php $selected = true; ?>
							@endif
							<div class="row">
								<div class="col-md-2 cursos"></div>
								<div class="col-md-5 cursos">											
									<label class="control-label" for="cota_{{ $quota->id }}">{{$quota->descricao}}</label>
									<input type="checkbox" id="cota_{{$quota->id}}" name="quota_id[{{ $quota->id }}][id]" value="{{ $quota->id }}" {{ ($selected) ? 'checked' : '' }}>
								</div>	
								<div class="col-md-2">
									<label class="control-label">Vagas</label>
								</div>
								<div class="col-md-2">
									<input id="nome" name="quota_id[{{ $quota->id }}][vagas]" type="text" placeholder="Nº" class="form-control"  value="{{ ($selected) ? $sp->quotas->find($quota->id)->pivot->vagas : '' }}">
								</div>
							</div>
							@endforeach							
						</div>

						<!-- Submit form -->
						<div class="form-group">
							<label class="col-md-4 control-label" ></label>  
							<div class="col-md-4">
								<button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Enviar</button>
								<a href="admin" class="btn btn-danger" value=""><span class="fa fa-times"></span> Cancelar</a>
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
		document.getElementById("ness").disabled = false;
		document.getElementById("ness1").disabled = false;
		document.getElementById("ness2").disabled = false;
		document.getElementById("ness3").disabled = false;
	}

	function desabilitar(){
		document.getElementById("ness").disabled = true;
		document.getElementById("ness1").disabled = true;
		document.getElementById("ness2").disabled = true;
		document.getElementById("ness3").disabled = true;
	}

</script>
@endsection
