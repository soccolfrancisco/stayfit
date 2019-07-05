{!! Form::open(array('action' => 'FormsController@preRegistration', 'method' => 'GET')) !!}
{{ csrf_field() }}

<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
      {!! Form::label('nameCompany', 'Nome da empresa *') !!}
      {!! Form::text('nameCompany', null, array('class' => 'form-control', 'placeholder' => 'Nome da empresa', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-6 -->
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
      {!! Form::label('cnpj', 'CNPJ *') !!}
      {!! Form::text('cnpj', null, array('class' => 'form-control-cnpj', 'id' => 'cnpj', 'placeholder' => 'CNPJ', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-6 -->
</div><!-- /col-md-12 -->
<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
      {!! Form::label('nameOwner', 'Nome do proprietário *') !!}
      {!! Form::text('nameOwner', null, array('class' => 'form-control', 'placeholder' => 'Nome do proprietário', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-6 -->
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
      {!! Form::label('cpf', 'CPF *') !!}
      {!! Form::text('cpf', null, array('class' => 'form-control-cpf', 'id' => 'cpf', 'placeholder' => 'CPF', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-6 -->
</div><!-- /col-md-12 -->
<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
      {!! Form::label('email', 'Email *') !!}
      {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-6 -->
  <div class="col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
      {!! Form::label('phone', 'Telefone *') !!}
      {!! Form::text('phone', null, array('class' => 'form-control', 'placeholder' => 'Telefone', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-3 -->
  <div class="col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
      {!! Form::label('zipcode', 'CEP *') !!}
      {!! Form::text('zipcode', null, array('class' => 'form-control-zipcode', 'id' => 'cep', 'placeholder' => 'CEP', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-3 -->
</div><!-- /col-md-12 -->
<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
      {!! Form::label('street', 'Rua *') !!}
      {!! Form::text('street', null, array('class' => 'form-control', 'id' => 'street', 'placeholder' => 'Rua', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-6 -->
  <div class="col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
      {!! Form::label('number', 'Número *') !!}
      {!! Form::text('number', null, array('class' => 'form-control','id' => 'number', 'placeholder' => 'Número', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-3 -->
  <div class="col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
      {!! Form::label('district', 'Bairro *') !!}
      {!! Form::text('district', null, array('class' => 'form-control','id' => 'district', 'placeholder' => 'Bairro', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-3 -->
</div><!-- /col-md-12 -->
<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
  <div class="col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
      {!! Form::label('city', 'Cidade *') !!}
      {!! Form::text('city', null, array('class' => 'form-control','id' => 'city', 'placeholder' => 'Cidade', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-3 -->
  <div class="col-md-1 col-sm-1 col-xs-12">
    <div class="form-group">
      {!! Form::label('state', 'UF *') !!}
      {!! Form::text('state', null, array('class' => 'form-control','id' => 'state', 'placeholder' => 'UF', 'required' => 'required')) !!}
    </div><!-- /form-group -->
  </div><!-- /col-md-1 -->
  <div class="col-md-4 col-sm-4 col-xs-12 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
    {!! Form::label('empresa', 'Qual o perfil da sua empresa? *') !!}
    {!! Form::select('profile', array('' => 'Selecione o perfil de sua empresa', 'Academia' => 'Academia', 'Crossfit' => 'Crossfit',
        'Danca' => 'Dança', 'Esporte' => 'Esporte', 'Ginastica' => 'Ginástica', 'Hidroginástica' => 'Hidroginástica',
        'Luta' => 'Luta', 'StudioDePilates' => 'Studio de Pilates', 'Outros' => 'Outros', 'Yoga' => 'Yoga'),
        0,array('class' => 'form-control option', 'required' => 'required')) !!}
  </div><!-- /col-md-4 -->
  <div class="col-md-4 col-sm-4 col-xs-12 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
    {!! Form::label('empresa', 'Plano *') !!}
    {!! Form::select('profile', array('' => 'Selecione o plano', 'Mensal' => 'Mensal', 'Semestral' => 'Semestral',
      'Anual' => 'Anual'), 0,array('class' => 'form-control option', 'required' => 'required')) !!}
  </div><br/><!-- /col-md-4 -->
</div><!-- /col-md-12 -->
<button type="submit" class="btn btn-default wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">Enviar</button>
{!! Form::close() !!}
