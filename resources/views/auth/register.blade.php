@extends('frontend.layout.main')

@section('content')

    <!-- Register Content -->
    <section id="tf-register">
        <div class="gradient-grey"></div>
        <div class="overlay">
            <div class="container-register">
                <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
                    <div class="col-md-12 com-sm-12 col-xs-12 section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <a href="{{ route('home') }}" title="{{ __('Página principal') }}"><div class="logo-register"></div></a>
                        <h4>{{ __('Bem Vindo a ') }}<strong>{{ __('StayFit') }}</strong></h4>
                        <span>{{ __('Faça seu Cadastro!') }}</span>
                    </div><!-- /col-md-12 -->

                    <form action="{{ route('home') }}" method="POST" class="col-md-12 com-sm12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        @csrf
                        <div class="form-group-register form-checkbox">
                            <input type="checkbox" name="partner" id="partner" title="{{ __('Sou um Parceiro') }}" value="1">
                            <span>{{ __('Sou um Parceiro') }}</span>
                        </div><!-- /form-group-register -->
                        <div class="form-group-register">
                            <input type="text" name="name" id="name" class="form-register" placeholder="{{ __('Nome Completo') }}" title="{{ __('Digite seu Nome Completo') }}">
                        </div><!-- /form-group-register -->
                        <div class="form-group-register">
                            <input type="text" name="cpf" id="cpfCnpj" class="form-register" placeholder="{{ __('CPF') }}" title="{{ __('Digite seu CPF') }}">
                        </div><!-- /form-group-register -->
                        <div class="form-group-register">
                            <input type="password" name="password" class="form-register" placeholder="{{ __('Senha') }}" title="{{ __('Digite sua Senha')  }}">
                        </div><!-- /form-group-register -->
                        <div class="form-group-register">
                            <input type="password" name="repeatPassword" class="form-register" placeholder="{{ __('Confirmar Senha') }}" title="{{ __('Digite sua Senha novamente') }}">
                        </div><!-- /form-group-register -->
                        <button type="submit" class="btn btn-register" title="{{ __('Cadastrar') }}">{{ __('Cadastrar') }}</button>
                    </form><!-- /form -->

                    <div class="col-md-12 com-sm-12 col-xs-12 section-footer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <span><a href="{{ route('login') }}" title="{{ __('Fazer Login') }}"><strong>{{ __('Já sou cadastrado!') }}</strong></a></span>
                    </div><!-- /col-md-12 -->
                </div><!-- /col-md-4 -->
            </div><!-- /container-register -->

            @include('frontend.layout._mediaSocial')

        </div><!-- /overlay -->
    </section><!-- /tf-register -->

@endsection

@section('script')

    <script type="text/javascript" src="{{ asset('frontend/js/register.js') }}"></script>

@endsection