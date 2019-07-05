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
                                <li><a href="{{ asset('#tf-platform') }}" class="page-scroll">Sobre nós</a></li>
                                <li><a href="{{ asset('#tf-contact') }}" class="page-scroll">Contato</a></li>
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

  <!-- Partner Content -->
  <section id="tf-partner">
    <div class="gradient-green"></div>
    <div class="overlay">
      <div class="container-partner">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="section">
            <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Somos o que <strong>você</strong>
              <strong>procurava!</strong></h1><br/>
            <p class="slide-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Seja um Parceiro
              e garanta o sucesso e visibilidade do seu empreendimento.</p>
            <a href="{{ asset('#tf-platform') }}" class="btn btn-partner page-scroll wow fadeInLeft" title="Conheça-nos" data-wow-duration="1s"
               data-wow-delay="0.65s">Sobre nós</a>
          </div><!-- /section-title-->
        </div><!-- /col-md-6 -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="logo-partner wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s"></div>
        </div><!-- /col-md-6 -->
      </div><!-- /content-partner -->

      @include('frontend.layout._mediaSocial')

    </div><!-- /overlay -->
  </section><!-- /tf-partner -->

  <!-- Slant Footer -->
  <section>
    <div class="slant-footer"></div>
  </section>

  <!-- Platform Content -->
  <section id="tf-platform">
    <div class="container-platform">
      <div class="section-title">
        <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Sobre nós</h4>
        <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Conheça a plataforma  <strong>StayFit</strong></h2>
        <div class="line-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"><hr></div>
      </div><!-- /section-title -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <i class="fa fa-desktop fa-2x wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s"></i>
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <h4>A StayFit</h4>
            <p>A StayFit é uma plataforma online de buscas, através dela mantémos você sempre atualizado sobre qualquer empresa que lhe ofereça uma vida
              mais saudável.</p>
          </div><!--/wow -->
        </div><!-- /col-md-3 -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <i class="fa fa-cogs fa-2x wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s"></i>
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <h4>Como funciona</h4>
            <p>Através do mapa você tem acesso a todas as empresas ao seu redor, basta filtrar a melhor que lhe agrada e
              clicar no objeto que indica a posição para obter informações daquela empresa.</p>
          </div><!--/wow -->
        </div><!-- /col-md-3 -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <i class="fa fa fa-line-chart wow fadeIn"data-wow-duration="1s" data-wow-delay="0.8s"></i>
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <h4>Seja um Parceiro</h4>
            <p>Visibilidade e divulgação são estratégias essenciais para sua empresa, por isso na StayFit sua empresa
              ganha espaço para o público certo e no momento em que eles estão precisando do seu serviço ou produto.</p>
          </div><!--/wow -->
        </div><!-- /col-md-3 -->
      </div><!-- /row -->
    </div><!-- /container-platform -->
  </section><!-- /tf-platform -->

  <!-- Slant Header -->
  <section>
    <div class="slant-header"></div>
  </section>

  <!-- Contact Content-->
  <section id="tf-contact">
    <div class="gradient-black"></div>
    <div class="container-contact">
      <div class="section-title">
        <span class="fa fa-envelope fa-2x circle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"></span>
        <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Saiba mais</h4>
        <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Entre em <strong>Contato</strong></h2>
        <div class="line-dark wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"><hr></div>
        <div class="clearfix"></div>
      </div><!-- /section-title -->

      @include('frontend.form._contact')

    </div><!-- /container-contact -->
  </section><!-- /tf-contact -->

  <!-- Slant Footer -->
  <section>
    <div class="slant-footer"></div>
  </section>

@endsection

@include('frontend.layout._footer')

@section('script')

  <script>
      $(document).ready(function () {
          $('.btn-contact').click(function (e) {
              e.preventDefault();
              var nameUser = $('#name').val();
              var emailUser = $('#email').val();
              var messageUser = $('#message').val();

              if (!nameUser) {
                  $('#name').css('border', '1px solid #FF0000');
                  return;
              }
              $('#name').css('border', '1px solid #FFFFFF');

              if (!emailUser) {
                  $('#email').css('border', '1px solid #FF0000');
                  return;
              }
              $('#email').css('border', '1px solid #FFFFFF');

              if (!messageUser) {
                  $('#message').css('border', '1px solid #FF0000');
                  return;
              }
              $('#message').css('border', '1px solid #FFFFFF');

              $(this).attr('disabled','disabled');
              $('#name').val('Enviando...');
              $('#email').val('Enviando...');
              $('#message').val('Enviando...');

              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              $.ajax({
                  url: '{{ route('sendContact') }}',
                  method: 'GET',
                  data: { name: nameUser, email: emailUser, message: messageUser },
                  dataType: "JSON",
                  contentType: "application/json; charset=utf-8",
                  async: true,
                  success:function(result){
                      if (result.errors) {
                          console.log(result.errors);
                          $('#name').val(nameUser).css('border', '1px solid #FF0000');
                          $('#email').val(emailUser).css('border', '1px solid #FF0000');
                          $('#message').val(messageUser).css('border', '1px solid #FF0000');
                      } else {
                          console.log(result.errors);
                          $("#msg-contact").css('display', 'block');
                          $("#form-contact").css('display', 'none');
                      }
                  }
              });
          });

          $('#name').val('');
          $('#email').val('');
          $('#message').val('')
      });
  </script>

@endsection
