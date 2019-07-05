@extends('frontend.layout.main')

@section('content')

    <!-- Login Content -->
    <section id="tf-login">
        <div class="gradient-grey"></div>
        <div class="overlay">
            <div class="container-login">
                <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
                    <div class="col-md-12 com-sm-12 col-xs-12 section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <a href="{{ route('home') }}" title="{{ __('Página principal') }}"><div class="logo-login"></div></a>
                        <h4>{{ __('Bem Vindo a ') }}<strong>{{ __('StayFit') }}</strong></h4>
                        <span>{{ __('Faça seu login!') }}</span>
                    </div><!-- /col-md-12 -->

                    <form action="{{ route('login') }}" method="POST" class="col-md-12 com-sm12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        @csrf

                        <div class="form-group-register form-checkbox">
                            {{--<input type="checkbox" name="partner" id="partner" title="{{ __('Sou um Parceiro') }}" value="1">--}}
                            {{--<span>{{ __('Sou um Parceiro') }}</span>--}}
                        </div><!-- /form-group-register -->
                        <div class="form-group-login">
                            <input type="text" name="name" id="cpfCnpj" class="form-login" placeholder="{{ __('CPF') }}" title="{{ __('Digite seu Cpf') }}">
                        </div><!-- /form-group-login -->
                        <div class="form-group-login">
                            <input type="password" class="form-login" placeholder="{{ __('Senha') }}" title="{{ __('Digite sua Senha') }}">
                        </div><!-- /form-group-login -->
                        <button type="submit" class="btn btn-login" title="{{ __('Login') }}">{{ __('Login') }}</button>
                    </form><!-- /form -->

                    <div class="col-md-12 com-sm-12 col-xs-10 col-xs-push-1 section-footer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <span><a href="#" title="{{ __('Alterar Senha') }}">{{ __('Esqueceu sua senha?') }}</a> |
                            <a href="{{ route('register') }}" title="{{ __('Cadastre-se') }}"><strong>{{ __('Cadastre-se') }}</strong></a></span>
                    </div><!-- /col-md-12 -->
                </div><!-- /col-md-4 -->
            </div><!-- /container-login -->

            @include('frontend.layout._mediaSocial')

        </div><!-- /overlay -->
    </section><!-- /tf-login -->

@endsection

{{--@section('script')--}}

    {{--<script type="text/javascript" src="{{ asset('frontend/js/login.js') }}"></script>--}}

{{--@endsection--}}