@extends('layouts.standard')

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

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

	<!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#pais").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#pais").val("Brasil");
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
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

						<!-- Administrador -->
						<div class="form-group">
							<label  class="col-md-4 control-label">Administrador</label>
							<div class="col-md-4"> 
								<label class="radio-inline">
									<input type="radio" id="adm" name="adm" value="1">
									Sim
								</label>
							</div> 
							<div class="col-md-4"> 
								<label class="radio-inline">
									<input type="radio" id="adm" name="adm" value="2" checked="checked">
									Não
								</label> 
							</div>
						</div>

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
							<label class="col-md-4 control-label" for="Date Of Birth">Data de Nascimento</label>  
							<div class="col-md-7">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-birthday-cake"></i>
									</div>
									<input id="Date Of Birth" name="data_nascimento" required="required" type="date" placeholder="Data de Nascimento" class="form-control input-md">
								</div>
							</div>
						</div>

						<!-- Nome Pai -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="Father">Nome do Pai</label>  
							<div class="col-md-7">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-male" style="font-size: 20px;"></i>
									</div>
									<input id="Father" name="nome_pai" type="text" required="required" placeholder="Nome do Pai" class="form-control input-md">
								</div>
							</div>
						</div>

						<!-- Nome mãe -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="Mother">Nome da Mãe</label>  
							<div class="col-md-7">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input id="Mother" name="nome_mae" type="text" required="required" placeholder="Nome da Mãe" class="form-control input-md">
								</div>
							</div>
						</div>

						<!-- Genero -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="Gender">Genêro</label>
							<div class="col-md-6"> 
								<label class="radio-inline" for="Gender-0">
									<input type="radio" name="sexo" id="Gender-0" value="1" checked="checked">
									Masculino
								</label> 
								<label class="radio-inline" for="Gender-1">
									<input type="radio" name="sexo" id="Gender-1" value="2">
									Feminino
								</label> 
								<label class="radio-inline" for="Gender-2">
									<input type="radio" name="sexo" id="Gender-2" value="3">
									Outro
								</label>
							</div>
						</div>

						<!-- RG -->
						<div class="form-group">
							<label class="col-md-4 control-label">RG</label>  
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-id-card-o" style="font-size: 20px;"></i>
									</div>
									<input name="rg" required="required" type="text" placeholder="RG" class="form-control input-md">
								</div>
							</div>
						</div>

						<!-- Emissor RG -->
						<div class="form-group">
							<label class="col-md-4 control-label">Emissor RG</label>  
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-id-card-o" style="font-size: 20px;"></i>
									</div>
									<input name="emissor_rg" required="required" type="text" placeholder="Emissor RG" class="form-control input-md">
								</div>
							</div>
						</div>

						<!-- CPF -->
						<div class="form-group">
							<label class="col-md-4 control-label">CPF</label>  
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-id-card" style="font-size: 20px;"></i>
									</div>
									<input name="cpf" required="required" type="text" placeholder="CPF" class="form-control input-md">
								</div>
							</div>
						</div>

						<!-- Passaporte -->
						<div class="form-group">
							<label class="col-md-4 control-label">Passaporte</label>  
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-book" style="font-size: 20px;"></i>
									</div>
									<input name="passaporte" type="text" placeholder="Passaporte" class="form-control input-md">
								</div>
							</div>
						</div>

						<!-- Endereço -->
						<form method="get" action=".">
							<div class="form-group">
								<label class="col-md-4 control-label col-xs-12" for="">Endereço</label>  
								<div class="col-md-3  col-xs-4">
									<input id="cep" name="cep" required="required" type="text" placeholder="CEP" 
									class="form-control input-md" maxlength="9" value="">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" for=""></label> 
								<div class="col-md-6  col-xs-4">
									<input id="rua" name="rua" required="required" type="text" placeholder="Rua" class="form-control input-md ">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" for=""></label>  
								<div class="col-md-3  col-xs-4">
									<input id="bairro" name="bairro" required="required" type="text" placeholder="Bairro" class="form-control input-md ">
								</div>
								<div class="col-md-3  col-xs-4">
									<input id="cidade" name="cidade" required="required" type="text" placeholder="Cidade" class="form-control input-md ">
								</div>
							</div>


							<div class="form-group">
								<label class="col-md-4 control-label" for=""></label>  
								<div class="col-md-3  col-xs-4">
									<input id="uf" name="estado" required="required" type="text" placeholder="Estado" class="form-control input-md ">
								</div>	
								<div class="col-md-3  col-xs-4">
									<input id="pais" name="pais" required="required" type="text" placeholder="País" class="form-control input-md ">
								</div>													
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" for=""></label>  							
								<div class="col-md-2 col-xs-4">
									<input name="numero" required="required" type="text" placeholder="Numero" class="form-control input-md ">
								</div>
								<div class="col-md-3  col-xs-4">
									<input name="naturalidade" required="required" type="text" placeholder="Onde Nasceu?" class="form-control input-md ">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" for=""></label>  
								<div class="col-md-6  col-xs-4">
									<input name="complemento" type="text" placeholder="Complemento" class="form-control input-md ">
								</div>
							</div>
						</form>
						<!-- Tipo Endereço -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="tipo_endereco"> Tipo de Endereço</label>
							<div class="col-md-4"> 
								<label class="radio-inline" for="tipo_endereco-0">
									<input type="radio" name="tipo" id="tipo_endereco-0" value="1" checked="checked">
									Residencial
								</label> 
								<label class="radio-inline" for="tipo_endereco-1">
									<input type="radio" name="tipo" id="tipo_endereco-1" value="2">
									Comercial
								</label> 
							</div>
						</div>

						<!-- Escolaridade -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="Skills">Escolaridade</label>  
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-graduation-cap"></i>
									</div>
									<input id="Skills" name="escolaridade" required="required" type="text" placeholder="Escolaridade" class="form-control input-md">
								</div>
							</div>
						</div>

						<!-- Telefones -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="Phone number ">Numero de Telefone</label>  
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-phone"></i>
									</div>
									<input id="Phone number " name="telefone" required="required" type="text" placeholder="Telefone Fixo" class="form-control input-md">
								</div>
								<div class="input-group othertop">
									<div class="input-group-addon">
										<i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>
									</div>
									<input id="Phone number " name="celular" required="required" type="text" placeholder="Telefone Celular" class="form-control input-md">
								</div>
							</div>
						</div>

						<!--Necessidades Especiais-->
						<hr />
						<h3>Necessidades Especiais</h3>
						@foreach($specialneeds as $specialneed)
						<div class="form-group">
							<div class="row">
								<div class="col-md-1">
								</div>
								<div class="col-md-4">
									<input type="checkbox" name="special_need_id[{{ $specialneed->id }}][id]" value="{{ $specialneed->id }}" />
									<label for="special_need_id[{{ $specialneed->id }}]">{{ $specialneed->descricao }}</label><br>
								</div>
								<div class="col-md-6 ">
									<input id="ness1" name="special_need_id[{{ $specialneed->id }}][observacao]" type="text" placeholder="Observação" class="form-control" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-1">
								</div>
								<div class="col-md-2"> 
									<label>Permanente</label>
								</div>
								<div class="col-md-4">
									<label class="radio-inline">
										<input id="ness2" type="radio" name="special_need_id[{{ $specialneed->id }}][permanente]" value="1">
										Sim
									</label>
								</div> 
								<div class="col-md-4"> 
									<label class="radio-inline">
										<input id="ness3" type="radio" name="special_need_id[{{ $specialneed->id }}][permanente]" value="0"  checked="checked">
										Não
									</label> 
								</div>
							</div>
						</div>

						<hr />
						@endforeach

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
