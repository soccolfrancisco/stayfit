@extends('frontend.layout.main')

@section('geocode')

    <script src="{{ asset('frontend/js/geocode.js') }}"></script>

@endsection

@section('map')

    <script src="{{ asset('frontend/js/map.js') }}"></script>
    <script src="{{ asset('//maps.googleapis.com/maps/api/js?key=AIzaSyB9UZdfKd76etfKPWMvHKXXnjNL-Z708U8') }}"></script>

@endsection

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
                                <li><a href="{{ route('partner') }}">A StayFit</a></li>
                                <li><a href="{{ asset('#tf-map') }}" class="pa'ge-scroll">Mapa</a></li>
                                <li><a href="{{ asset('#tf-newsletter') }}" class="page-scroll">Newsletter</a></li>
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

    <!-- Home Content -->
    <section id="tf-home">
        <div class="gradient-green"></div>
        <div class="overlay">
            <div class="container-home">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="section">
                        <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Encontre o <strong>melhor</strong> perto de
                            <strong>você!</strong></h1>
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".55s"><br/>
                            Possibilitamos a você a busca por serviços fitness onde você estiver e na hora que precisar.</p>
                        <a href="{{ asset('#tf-map') }}" class="btn btn-home page-scroll wow fadeInLeft" title="Ir para o mapa" data-wow-duration="1s"
                           data-wow-delay="0.65s">Encontre</a>
                    </div><!-- /section-title-->
                </div><!-- /col-md-6 -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="logo-home wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s"></div>
                </div><!-- /col-md-6 -->
            </div><!-- /content-home -->

            @include('frontend.layout._mediaSocial')

        </div><!-- /overlay -->
    </section><!-- /tf-home -->

    <!-- Slant Footer -->
    <section>
        <div class="slant-footer"></div>
    </section>

    <!-- Map Content -->
    <section id="tf-map">
        <div class="container-mp">
            <div class="section-title">
                <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Mapa</h4>
                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    O que está <strong>procurando</strong>?</h2>
                <div class="line-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"><hr></div>
                {{--<a href="#" id="map-search-access" class="btn btn-default-filter">Search</a>--}}
            </div><!-- /section-title -->
            <div class="shadow-map wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">

                @include('frontend.form._mapFilter')

                @include('frontend.form._mapSearch')

                <div id="map" class="map"></div>

            </div><!-- /shadow-map -->
        </div><!-- container-map -->
    </section><!-- /tf-map -->

    <!-- Slant Header -->
    <section>
        <div class="slant-header"></div>
    </section>

    <!-- Newsletter Content-->
    <section id="tf-newsletter">
        <div class="gradient-black"></div>
        <div class="container-newsletter">
            <div class="section-title">
                <span class="fa fa-paper-plane fa-2x circle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"></span>
                <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Newsletter</h4>
                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Mantenha-se <strong>informado</strong></h2>
                <div class="line-dark wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s"><hr></div>
            </div>

            @include('frontend.form._newsletter')

        </div><!-- /container-newsletter -->
    </section><!-- /tf-newsletter -->

    <!-- Slant Footer -->
    <section>
        <div class="slant-footer"></div>
    </section>

@endsection

@include('frontend.layout._footer')

@section('script')
    <script>
        $(document).ready(function(){
            $('#btn-newsletter').click(function(e){
                e.preventDefault();
                var emailUser = $('#input-newsletter').val();

                if (!emailUser) {
                    $('#input-newsletter').css('border', '1px solid #FF0000');
                    return;
                }

                $(this).attr('disabled','disabled');
                $('#input-newsletter').val('Enviando...');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route('sendNewsletter') }}',
                    method: 'GET',
                    data: { email: emailUser },
                    dataType: "JSON",
                    contentType: "application/json; charset=utf-8",
                    async: true,
                    success:function(result){
                        if (result.errors) {
                            console.log(result.errors);
                            $('#input-newsletter').css('border', '1px solid #FF0000').val(emailUser);
                            $('#btn-newsletter').removeAttr('disabled','disabled');
                        } else {
                            console.log(result.errors);
                            $('#msg-newsletter').css('display', 'block');
                            $('#form-newsletter').css('display', 'none');
                        }
                    }
                });
            });

            $('#input-newsletter').val('');
        });
    </script>

@endsection