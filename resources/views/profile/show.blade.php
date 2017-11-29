
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><h3 align="center">Seja bem Vindo {{ Auth::user()->name }}!</h3>
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
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <div class="x_content">          
                          <dl class="dl-horizontal">
                            <dt>ID</dt>
                            <dd> {{$profile->id}}</dd>
                            <dt>Nome</dt>
                            <dd> {{$profile->nome}}</dd> 
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="/profiles" class="btn btn-primary">Voltar</a>
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
