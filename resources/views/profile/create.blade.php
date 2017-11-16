@extends('layouts.standard')
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <style>
    .othertop{margin-top:10px;}
    
  </style>

</head>
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <form class="form-horizontal">
          <div class="panel-heading">Cadastro</div>
          <div class="content"> 
            <fieldset>
              <div class="form-group">
                <label class="col-md-4 control-label" for="Name (Full name)">Nome Completo</label>  
                <div class="col-md-4">
                 <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-user">
                    </i>
                  </div>
                  <input id="Name (Full name)" name="nome" type="text" placeholder="Nome Completo" class="form-control input-md">
                </div>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Date Of Birth">Data de Nascimento</label>  
              <div class="col-md-4">
                <div class="input-group">
                 <div class="input-group-addon">
                   <i class="fa fa-birthday-cake"></i>
                 </div>
                 <input id="Date Of Birth" name="data_nascimento" type="text" placeholder="Data de Nascimento" class="form-control input-md">
               </div>


             </div>
           </div>


           <!-- Text input-->
           <div class="form-group">
            <label class="col-md-4 control-label" for="Father">Nome do Pai</label>  
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                <i class="fa fa-male" style="font-size: 20px;"></i>

              </div>
              <input id="Father" name="nome_pai" type="text" placeholder="Nome do Pai" class="form-control input-md">

            </div>

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Mother">Nome da Mãe</label>  
          <div class="col-md-4">
            <div class="input-group">
             <div class="input-group-addon">
              <i class="fa fa-female" style="font-size: 20px;"></i>

            </div>
            <input id="Mother" name="nome_mae" type="text" placeholder="Nome da Mãe" class="form-control input-md">

          </div>

        </div>
      </div>

      <!-- Multiple Radios (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Gender">Genêro</label>
        <div class="col-md-4"> 
          <label class="radio-inline" for="Gender-0">
            <input type="radio" name="Gender" id="Gender-0" value="1" checked="checked">
            Masculino
          </label> 
          <label class="radio-inline" for="Gender-1">
            <input type="radio" name="Gender" id="Gender-1" value="2">
            Feminino
          </label> 
          <label class="radio-inline" for="Gender-2">
            <input type="radio" name="Gender" id="Gender-2" value="3">
            Outro
          </label>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Mother">RG</label>  
        <div class="col-md-4">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-id-card-o" style="font-size: 20px;"></i>

          </div>
          <input id="Mother" name="rg" type="text" placeholder="RG" class="form-control input-md">

        </div>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Mother">Emissor RG</label>  
      <div class="col-md-4">
        <div class="input-group">
         <div class="input-group-addon">
          <i class="fa fa-id-card-o" style="font-size: 20px;"></i>

        </div>
        <input id="Mother" name="emissor_rg" type="text" placeholder="Emissor RG" class="form-control input-md">

      </div>

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="Mother">CPF</label>  
    <div class="col-md-4">
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-id-card" style="font-size: 20px;"></i>

      </div>
      <input id="Mother" name="cpf" type="text" placeholder="CPF" class="form-control input-md">

    </div>

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Mother">Passaporte</label>  
  <div class="col-md-4">
    <div class="input-group">
     <div class="input-group-addon">
      <i class="fa fa-book" style="font-size: 20px;"></i>

    </div>
    <input id="Mother" name="passporte" type="text" placeholder="Passaporte" class="form-control input-md">

  </div>

</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Endereço</label>  
  <div class="col-md-4  col-xs-4">
    <input id="Permanent Address" name="Rua" type="text" placeholder="Rua" class="form-control input-md ">
  </div>
  <div class="col-md-2 col-xs-4">
    <input id="Permanent Address" name="numero" type="text" placeholder="Numero" class="form-control input-md ">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Permanent Address"></label>  
  <div class="col-md-3  col-xs-4">
    <input id="Permanent Address" name="bairro" type="text" placeholder="Bairro" class="form-control input-md ">
  </div>
  <div class="col-md-3  col-xs-4">
    <input id="Permanent Address" name="cidade" type="text" placeholder="Cidade" class="form-control input-md ">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Permanent Address"></label>  
  <div class="col-md-3  col-xs-4">
    <input id="Permanent Address" name="cep" type="text" placeholder="CEP" class="form-control input-md ">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Permanent Address"></label>  
  <div class="col-md-3  col-xs-4">
    <input id="Permanent Address" name="estado" type="text" placeholder="Estado" class="form-control input-md ">
  </div>
  <div class="col-md-3  col-xs-4">
    <input id="Permanent Address" name="pais" type="text" placeholder="País" class="form-control input-md ">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Permanent Address"></label>  
  <div class="col-md-6  col-xs-4">
    <input id="Permanent Address" name="complemento" type="text" placeholder="Complemento" class="form-control input-md ">
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tipo_endereco"> Tipo de Endereço</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="tipo_endereco-0">
      <input type="radio" name="tipo_endereco" id="tipo_endereco-0" value="1" checked="checked">
      Residencial
    </label> 
    <label class="radio-inline" for="tipo_endereco-1">
      <input type="radio" name="tipo_endereco" id="tipo_endereco-1" value="2">
      Comercial
    </label> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Skills">Escolaridade</label>  
  <div class="col-md-4">
    <div class="input-group">
     <div class="input-group-addon">
       <i class="fa fa-graduation-cap"></i>

     </div>
     <input id="Skills" name="escolaridade" type="text" placeholder="Escolaridade" class="form-control input-md">
   </div>


 </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Phone number ">Numero de Telefone</label>  
  <div class="col-md-4">
    <div class="input-group">
     <div class="input-group-addon">
       <i class="fa fa-phone"></i>

     </div>
     <input id="Phone number " name="telefone" type="text" placeholder="Telefone Fixo" class="form-control input-md">

   </div>
   <div class="input-group othertop">
     <div class="input-group-addon">
       <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>

     </div>
     <input id="Phone number " name="celular" type="text" placeholder="Telefone Celular" class="form-control input-md">

   </div>

 </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label">Nessecidades Especiais</label>
  <div class="col-md-4"> 
    <label class="radio-inline">
      <input type="radio" name="ness" value="1" onchange="habilitar()">
      Sim
    </label>
  </div> 
  <div class="col-md-4"> 
    <label class="radio-inline">
    <input type="radio" name="ness" value="2"  checked="checked">
      Não
    </label> 
  </div>
</div>

<!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Mother"></label>  
        <div class="col-md-4">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-id-card-o" style="font-size: 20px;"></i>

          </div>
          <input id="ness" name="rg" type="text" placeholder="Descrição" class="form-control input-md" disabled>

        </div>

      </div>
    </div>



<!-- Submit form -->
<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
    <a href="#" class="btn btn-success"><span class="fa fa-check"></span> Enviar</a>
    <a href="#" class="btn btn-danger" value=""><span class="fa fa-times"></span> Cancelar</a>

  </div>
</div>

</fieldset>
</form>
</div>
</div>
<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
  function habilitar(){
    document.setElementById('ness').enabled = true;
  }
  
</script>
</div>
</div>
</div>
</div>
</div>
@endsection
