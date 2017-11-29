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
					<!--Nome-->
					<div class="form-group">
						<label class="col-md-4 control-label">Cursos</label>  
						<div class="col-md-7">
							<a href="/course" class="btn btn-success"> Criar</a>
						</div>
					</div>
					<!--Nome-->
					<div class="form-group">
						<label class="col-md-4 control-label">Cotas</label>  
						<div class="col-md-7">
							<a href="quota" class="btn btn-success"> Criar</a>
						</div>
					</div>
					<!--Nome-->
					<div class="form-group">
						<label class="col-md-4 control-label">Processo Seletivo</label>  
						<div class="col-md-7">
							<a href="/selectiveprocess/create" class="btn btn-success"> Criar </a>
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
