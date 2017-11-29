@extends('layouts.standard')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="form-group"> 
            <div class="right_col" role="main">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Exibindo Profile</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="row">
                      @if(session()->has('message'))
                      <div class="alert alert-success">
                        {{ session()->get('message') }}
                      </div>
                      @endif
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <div class="x_content">          
                          <dl class="dl-horizontal">
                            <!-- Dados do Profile -->
                            <dt>ID</dt>
                            <dd> {{$profile->id}}</dd>
                            <dt>Nome</dt>
                            <dd> {{$profile->nome}}</dd> 
                            <dt>Data de Nascimento</dt>
                            <dd> {{$profile->data_nascimento}}</dd>
                            <dt>RG</dt>
                            <dd> {{$profile->rg}}</dd> 
                            <dt>CPF</dt>
                            <dd> {{$profile->cpf}}</dd>

                            <dt>Sexo</dt>
                            @if($profile->sexo == 1)
                            <dd> Masculino </dd> 
                            @elseif($profile->sexo == 1)
                            <dd> Feminino </dd> 
                            @else
                            <dd> Outro </dd> 
                            @endif

                            <dt>Nome do Pai</dt>
                            <dd> {{$profile->nome_pai}}</dd>
                            <dt>Nome da mãe</dt>
                            <dd> {{$profile->nome_mae}}</dd> 
                            <dt>Passaporte</dt>
                            <dd> {{$profile->passaporte}}</dd>
                            <dt>Naturalidade</dt>
                            <dd> {{$profile->naturalidade}}</dd> 
                            <dt>Telefone</dt>
                            <dd> {{$profile->telefone}}</dd>
                            <dt>Celular</dt>
                            <dd> {{$profile->celular}}</dd> 
                            <dt>Escolaridade</dt>
                            <dd> {{$profile->escolaridade}}</dd>
                            <!-- Dados do Endereço -->
                            <br>
                            <dt>Rua</dt>
                            <dd> {{$profile->address->rua}}</dd> 
                            <dt>Numero</dt>
                            <dd> {{$profile->address->numero}}</dd>
                            <dt>CEP</dt>
                            <dd> {{$profile->address->cep}}</dd> 
                            <dt>Bairro</dt>
                            <dd> {{$profile->address->bairro}}</dd> 
                            <dt>Complemento</dt>
                            <dd> {{$profile->address->complemento}}</dd>

                            <dt>Tipo</dt>
                            @if($profile->address->tipo)
                            <dd> Residencial </dd> 
                            @else
                            <dd> Comercial </dd> 
                            @endif

                            <dt>Cidade</dt>
                            <dd> {{$profile->address->cidade}}</dd> 
                            <dt>Estado</dt>
                            <dd> {{$profile->address->estado}}</dd>
                            <dt>País</dt>
                            <dd> {{$profile->address->pais}}</dd> 

                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                          <a href="/profile/{{Auth::user()->profile->id}}/edit" class="btn btn-primary">Editar</a>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="/home" class="btn btn-primary">Voltar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
