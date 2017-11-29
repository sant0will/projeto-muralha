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
				<form class="form-horizontal" method="post" action="{{url('profile')}}">
					{{csrf_field()}}
					<div class="panel-heading"><h3 align="center">Cadastro de Usuário</h3></div>
					<fieldset>
						@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
						@endif

						<!--Nome-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="Name (Full name)">Nome Completo</label>  
							<div class="col-md-7">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user">
										</i>
									</div>
									<input id="Name (Full name)" name="nome" required="required" type="text" placeholder="Nome Completo" class="form-control input-md">
								</div>
							</div>
						</div>

						<!-- Data -->
						<div class="form-group">
							<label class="col-md-4 control-label">Data de Inicio</label>  
							<div class="col-md-7">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-birthday-cake"></i>
									</div>
									<input  name="data_inicio" required="required" placeholder="Data de Inicio" class="form-control input-md">
								</div>
								<script>
									$(document).ready(function(){
									var date_input=$('input[name="data_inicio"]'); //our date input has the name "date"
									var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
									date_input.datepicker({
										format: 'yyyy-mm-dd',
										container: container,
										todayHighlight: true,
										autoclose: true,
									})
								})
							</script>
						</div>
					</div>

					<!-- Data -->
					<div class="form-group">
						<label class="col-md-4 control-label">Data de Fim</label>  
						<div class="col-md-7">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-birthday-cake"></i>
								</div>
								<input id="data_fim" name="data_fim" required="required" placeholder="Data do Fim" class="form-control input-md">
							</div>
							<script>
								$(document).ready(function(){
									var date_input=$('input[name="data_fim"]'); //our date input has the name "date"
									var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
									date_input.datepicker({
										format: 'yyyy-mm-dd',
										container: container,
										todayHighlight: true,
										autoclose: true,
									})
								})
							</script>
						</div>
					</div>

					

					

					<!-- Cursos -->
					<div class="form-group">
						<label class="col-md-4 control-label"> Curso </label>  
						<div class="col-md-4">
							<select name="cursos" class="form-control col-md-7 col-xs-12">
							</select>
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
