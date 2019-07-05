<div class="map-filter-overlay"></div>

<div class="map-filter-wrapper wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="col-md-10 col-lg-10 col-xs-10">
        <div class="section-title"><br/>
            <h4>Escolha o que você deseja encontrar!</h4>
            <div class="line-blue-filter"><hr></div><br/>
        </div><!-- /section-title -->
        <h3>Desculpas, Estamos em processo de cadastramento!</h3>
        {{--<ul class="map-lister">--}}
            {{--<form action="{{ route('sendMap') }}" method="GET">--}}
            {{--@csrf--}}

            {{--@foreach($categories as $category)--}}
                {{--<li>--}}
                    {{--<div class="checkbox">--}}
                        {{--<label>--}}
                            {{--<input type="checkbox" name="{{ __($category[0]) }}" title="{{ __($category[0]) }}" class="flat" {{ $category[1] ? 'checked' : '' }}>--}}
                        {{--</label><!-- /label -->--}}
                        {{--<p title="{{ __($category[0]) }}"> {{ __($category[0]) }}</p>--}}
                    {{--</div><!-- /checkbox -->--}}
                {{--</li><!-- /li -->--}}
            {{--@endforeach--}}

                {{--<button type="submit" class="btn btn-default-menu-filter" title="{{ __('Encontrar') }}">{{ __('Encontrar') }}</button>--}}
            {{--</form>--}}
        {{--</ul><!-- /ul -->--}}
    </div><!-- /col-md-10 -->
    <div class="col-md-2 col-lg-2 col-xs-2">
        <div id="map-filter-access">
            <i class="fa fa-angle-double-right fa-4x"></i>
        </div>
    </div><!-- /col-md-2 -->
</div><!-- /side-menu-overlay -->