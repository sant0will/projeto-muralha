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
				<div class="panel-heading"><h3 align="center">Criação de Conteúdo</h3></div>
				{{csrf_field()}}
				<div class="row">
					<div class="form-group">
						<a href="/course"> 
							<div class="col-md-5 adm" class="btn btn-success">
								Cursos <i class="fa fa-bookmark"></i>
							</div>
						</a>						
						<a href="/quota"> 
							<div class="col-md-5 adm" class="btn btn-success">
								Cotas <i class="fa fa-cc"></i>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="form-group">						
						<a href="/selectiveprocess/create"> 
							<div class="col-md-5 adm" class="btn btn-success">
								Processos Seletivos <i class="fa fa-users"></i>
							</div>
						</a>
						<a href="/specialneed"> 
							<div class="col-md-5 adm" class="btn btn-success">
								Necessidades Especiais <i class="fa fa-blind"></i>
							</div>
						</a>
					</div>
				</div>
				<hr/>
				<div class="row">
					<div class="form-group">						
						<a href="/selectiveprocess/create"> 
							<div class="col-md-5 adm" class="btn btn-success">
								Homologação<i class="fa fa-users"></i>
							</div>
						</a>
						<a href="/specialneed"> 
							<div class="col-md-5 adm" class="btn btn-success">
								outro <i class="fa fa-blind"></i>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
@endsection
