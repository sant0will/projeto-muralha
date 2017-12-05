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
				{{csrf_field()}}
				<div class="panel-heading"><h3 align="center">Suas Inscrição(ões) </h3></div>
				@if(session()->has('message'))
				<div class="alert alert-success">
					{{ session()->get('message') }}
				</div>
				@endif
				<dl class="dl-horizontal">
					<br>
					<!-- Foreach para Mostrar os dados das Inscrições-->
					@foreach( $profile->subscriptions as $subs)
					<dt>ID da Inscrição</dt>
					<dd> {{$subs->id}}</dd>

					<!--Mostrando Descricao do Processo Seletivo-->
					@foreach($selectiveprocess as $sp)
					@if(($subs->processo_seletivo_id) == ($sp->id))
					<dt>Descricao</dt>
					<dd> {{$sp->descricao}}</dd>
					@endif
					@endforeach

					<!--Mostrando Nome do curso-->
					@foreach($courses as $c)
					@if(($subs->curso_id) == ($c->id))
					<dt>Nome do Curso</dt>
					<dd> {{$c->nome}}</dd>
					@endif
					@endforeach

					<!--Mostrando a Cota-->
					@foreach($quotas as $q)
					@if(($subs->cota_id) == ($q->id))
					<dt>Nome do Curso</dt>
					<dd> {{$q->descricao}}</dd>
					@endif
					@endforeach

					@foreach($isencao as $i)
					@if(($i->inscricao_id) == ($subs->id))
					<dt>Isenção - Motivo</dt>
					<dd>{{$i->motivo}}</dd>
						@if($i->homologacao == null)
							<dt>Homologação</dt>
							<dd>Sua Isenção ainda não foi Homologada</dd>
							@elseif($i->homologacao == 1)
							<dt>Homologação</dt>
							<dd>Sua Isenção foi Aprovada</dd>
							@else
							<dt>Homologação</dt>
							<dd>Sua Isenção foi rejeitada</dd>
						@endif
					@endif
					@endforeach

					<hr />
					@endforeach
				</dl>

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
