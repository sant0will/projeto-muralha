@extends('layouts.standard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro</div>
                <div class="content"> 
                
                    <br />
                  @if(session()->has('message'))
                  <div class="alert alert-success">
                    {{ session()->get('message') }}
                  </div>
                  @endif
                  <form data-parsley-validate class="form-horizontal form-label-left" method="post" 
                  action="{{url('products')}}" >

                  {{csrf_field()}}
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="nome" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Valor <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="double" name="valor" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Categoria <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="categoria" class="form-control col-md-7 col-xs-12">
                        <?php foreach($categories as $category): ?>
                          <option value="<?= $category->id ?>"><?= $category->nome ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                  </div>                




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
