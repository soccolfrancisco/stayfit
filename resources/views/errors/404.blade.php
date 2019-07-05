@extends('frontend.layout.main')

@section('menu')

    <!-- Menu Content -->
    <div id="tf-menu">
        <section class="navigation">
            <header class="container-menu">
                <div class="header-content">
                    <a href="{{ route('home') }}" title="Página principal">
                        <div class="logo-menu"></div>
                    </a><!-- /a -->
                    <div class="header-nav">
                        <nav>
                            <ul class="member-actions">
                                <li><a href="{{ route('home') }}">Inicio</a></li>
                                <li><a href="{{ route('partner') }}">A StayFit</a></li>
                                <li><a href="{{ route('register') }}">Cadastre-se</a></li>
                                <li><a href="{{ route('login') }}">Entrar</a></li>
                            </ul>
                        </nav>
                    </div><!-- /header-nav -->
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div><!-- /navicon -->
                </div><!-- /header-content -->
            </header><!-- /container-menu -->
        </section><!-- /navigation -->
    </div><!-- /tf-menu -->

@endsection

@section('content')
    
    <!-- Error Content -->
    <section id="tf-error">
        <div class="gradient-green"></div>
        <div class="overlay">
            <a href="{{ route('home') }}" title="Voltar para página principal">
            <div class="container-error">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-error"></div>
                </div><!-- /col-md-6 -->
            </div><!-- /content-error -->
            </a><!-- /a -->
        </div><!-- /overlay -->

        <!-- Slant Footer -->
        <section>
            <div class="slant-footer"></div>
        </section>
    </section><!-- /tf-error -->

@endsection
