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
				<form class="form-horizontal" method="post" action="{{url('specialneed')}}">
					{{csrf_field()}}
					<div class="panel-heading"><h3 align="center">Cadastro de Necessidades Especiais</h3></div>
					<fieldset>
						@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
						@endif

						<!--Nome-->
						<div class="form-group">
							<label class="col-md-4 control-label">Necessidades Especiais</label>  
							<div class="col-md-7">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-blind">
										</i>
									</div>
									<input id="nome" name="descricao" required="required" type="text" placeholder="Nome da Necessidade" class="form-control input-md">
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
@endsection
