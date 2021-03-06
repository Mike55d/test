{{--
  Template Name: Front Page
--}}


@extends('layouts.app')

@section('content')
  <div class="page-home">
    <section id="top" class="section">
      <div class="hero d-md-none" style="background-image:url('{!! $hero_fields->hero_mobile !!}');">
        {!! $hero_fields->hero_text !!}
      </div>
      <div class="hero d-none d-md-flex" style="background-image:url('{!! $hero_fields->hero_desktop !!}');">
        {!! $hero_fields->hero_text !!}
      </div>
    </section>
{{--    <section id="logos" class="section">--}}
{{--      <div class="container">--}}
{{--        <div class="card-container my-3">--}}

{{--          <ul class="nav nav-tabs" id="tab-card" role="tablist">--}}
{{--            @if($companies_fields)--}}
{{--              @foreach ($companies_fields->logos as $logo )--}}
{{--                <li class="nav-item {!! $loop->iteration == $loop->count ? '' : 'margin-nav-item' !!}" role="presentation">--}}
{{--                  <a class="nav-link {!! $loop->index == 0 ? 'active' : '' !!} card-logo" id="{!! $logo['logo']['title'] !!}-tab" data-toggle="tab" href="#{!! $logo['logo']['title'] !!}-content" role="tab" aria-controls="{!! $logo['logo']['title'] !!}" aria-selected="true"><img src="{!! $logo['logo']['url'] !!}" alt="{!! $logo['logo']['title'] !!}"></a>--}}
{{--                </li>--}}
{{--              @endforeach--}}
{{--            @endif--}}
{{--          </ul>--}}
{{--        </div>--}}

{{--        <div class="tab-content" id="tab-content-card">--}}
{{--          @if($companies_fields)--}}
{{--            @foreach ($companies_fields->logos as $logo )--}}
{{--              <div class="tab-pane fade {!! $loop->index == 0 ? 'show active' : '' !!}" id="{!! $logo['logo']['title'] !!}-content" role="tabpanel" aria-labelledby="{!! $logo['logo']['title'] !!}-tab">--}}
{{--                <p class="text-center description">{!! $logo['description'] !!}</p>--}}
{{--                <div class="row">--}}
{{--                  @if($logo['mark'])--}}
{{--                  @foreach ($logo['mark'] as $mark )--}}
{{--                    <div class="col-md-4 col-sm-6 card-logo text-center">--}}
{{--                      <a href="{!! $mark['url'] ? $mark['url'] : 'javascript:void(0)' !!}" target="{!! $mark['url'] ? '_blank' : '_self' !!}"><img src="{!! $mark['mark']['url'] !!}" alt="{!! $mark['mark']['title'] !!} Logo"></a>--}}
{{--                    </div>--}}
{{--                  @endforeach--}}
{{--                  @endif--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            @endforeach--}}
{{--          @endif--}}

{{--        </div>--}}
{{--      </div>--}}
{{--    </section>--}}

    <section id="logos" class="section">
      <div class="container">
        <div class="card-container my-3">
          <div class="card card-logo"><img src="/wp-content/themes/theme_purdy/img/purdy_logo.svg" alt="Purdy Logo"></div>
          <div class="card card-logo"><img src="/wp-content/themes/theme_purdy/img/logo_purdy_mobility.png" alt="Purdy Mobility Logo"></div>
          <div class="card card-logo"><img src="/wp-content/themes/theme_purdy/img/automotriz_logo.svg" alt="Automotriz Logo"></div>
        </div>
      </div>
    </section>
{{--    @if($social_fields->brands_logos_active)--}}
{{--      <section id="brands">--}}
{{--        <div class="container">--}}
{{--          <h3>Nuestras marcas</h3>--}}
{{--          <p>Seleccione la marca de su interés para accesar el sitio web correspondiente.</p>--}}
{{--          <ul class="brands-logos">--}}
{{--            @foreach ($social_fields->brands_logos as $brand )--}}
{{--              <li class="brand-item"><img alt="{!! $brand['brand_name'] !!}" src="{!! $brand['brand_logo'] !!}"></li>--}}
{{--            @endforeach--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--      </section>--}}
{{--    @endif--}}

    <section id="services" class="section">
      <div class="container">
        <h2><span class="text-red">01</span> {!! $services_fields->services_title !!}</h2>
        <p>{!! $services_fields->services_description !!}</p>
        <div class="card-container my-3">
            @foreach($services_loop as $services_item)
              <div class="card card-service">
                  <div class="card-icon">
                    <img src="{!! $services_item['icon'] !!}" aria-hidden="true">
                  </div>
                  <div class="card-content">
                    <h3>{!! $services_item['title'] !!}</h3>
                    <p>{!! $services_item['content'] !!}</p>
                    <a href="#" data-toggle="modal" data-target="#ServicesModal" class="button button-arrow idx" data-index="{!! $loop->index !!}">
                      @php _e("Ver más") @endphp
                      <i class="icn icn-1 icn-chevron"></i></a>
                  </div>
              </div>
            @endforeach

        </div>
      </div>
    </section>
    <div class="section" id="social">
    <section class="bg-blue py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <h2 class="text-white"><span class="text-red">02</span> {!! $social_fields->social_title !!}</h2>
              <p class="text-white">{!! $social_fields->social_description !!}</p>
               @if(get_locale() == "es_CR") <a class="button button-primary button-sustainability" href="/@php _e('Sostenibilidad') @endphp">@php _e('Ver más') @endphp</a> @endif
          </div>
          <div class="col-md-6">
            <a class="video-container" href="#VideoModal" data-toggle="modal" data-target="#VideoModal">
                <img class="w-100" src="{!! $social_fields->social_video_thumbnail !!}" alt="Video thumbnail">
                <div class="play-btn"><i class="icn icn-2 icn-play"></i></div>
            </a>
          </div>
        </div>
        <div class="social-slider">
            <div class="slider-multi">
                @foreach($social_axis_loop as $social_item)
                <div class="slider-item">
                    <div class="card card-social mb-2">
                        <div class="card-thumbnail">
                            {!! $social_item['thumbnail'] !!}
                        </div>
                        <h4 class="text-white my-3">{!! $social_item['title'] !!}</h4>
                        <p class="text-white">{!! strip_tags($social_item['content']) !!}</p>
                        <div class="collapse" id="social-collapse{!! $loop->index !!}">
                          <h5 class="text-white my-2">
                              @php _e("Objetivos") @endphp
                          </h5>
                          <ul class="text-white mb-5 list-goals">
                            @foreach ( $social_item['objectives'] as $o)
                              <li>{!! $o['objective'] !!}</li>
                            @endforeach
                          </ul>
                        </div>
                        <a data-toggle="collapse" href="#social-collapse{!! $loop->index !!}" role="button" aria-expanded="false" aria-controls="social-collapse{!! $loop->index !!}" class="button button-arrow text-white expand">
                          <span>@php _e("Ver más") @endphp</span>
                          <i class="icn icn-1 icn-chevron"></i></a>
                      </div>
                  </div>
                @endforeach
            </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h3>@php _e("Certificaciones") @endphp</h3>
        <ul class="certification-logos">
          @foreach ($social_fields->certification_logos as $logo )
            <li class="certification-item"><img alt="{!! $logo['certification_name'] !!}" src="{!! $logo['certification_logo'] !!}"></li>
          @endforeach
        </ul>
      </div>
    </section>
    </div>
    <section id="people" class="section">
        <div class="container">
          <h2><span class="text-red">03</span> {!! $people_fields->people_title !!}</h2>

        <div class="row">
          <div class="col-md-6">
              <p>{!! $people_fields->people_description !!}</p>
              <ul class="skills-list">
                @foreach ($people_fields->people_skills as $skill)
                    <li> <img src="{!! $skill['skill_icon'] !!}" aria-hidden="true">{!! $skill['skill_name'] !!}</li>
                @endforeach
              </ul>
          </div>
          <div class="col-md-6">
            <img class="w-100" src="{!! $people_fields->people_image !!}" alt="Photo of people standing up">
          </div>
        </div>
      </div>
    </section>
    <section id="locations" class="section">
        <div class="container">
            <h2><span class="text-red">04</span> {!! $locations_fields->locations_title !!}</h2>
            <p>{!! $locations_fields->locations_description !!}</p>

            <div class="accordion" id="accordion-locations">
                @foreach($locations_loop as $location)
                  <div class="card">
                      <div class="card-header" id="heading{!! $loop->index !!}">
                          <button class="button button-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapse{!! $loop->index !!}" aria-expanded="true" aria-controls="collapse{!! $loop->index !!}">
                              <i class="icn icn-1 icn-plus"></i> {!! $location['title'] !!}
                          </button>
                      </div>
                      <div id="collapse{!! $loop->index !!}" class="collapse" aria-labelledby="heading{!! $loop->index !!}" data-parent="#accordion-locations">
                        <div class="card-body">
                          <ul class="location-list">
                            <li><i class="icn icn-1 icn-phone"></i><strong>
                              @php _e("Contacto") @endphp
                              </strong><br>
                              @php _e("Teléfono") @endphp
                              {!! $location['phone'] !!}</li>
                            <li><i class="icn icn-1 icn-pin"></i><strong>
                                @php _e("Dirección") @endphp
                              </strong><br>
                              {!! $location['address'] !!}</li>
                            <li><i class="icn icn-1 icn-clock"></i><strong>
                                @php _e("Horario de Atención") @endphp
                              </strong>
                              <ul>
                                @foreach ($location['schedule'] as $sc)
                                  <li>{!!$sc['days']!!}: {!! $sc['hours'] !!}</li>
                                @endforeach
                              </ul>
                            </li>
                            <li><strong>
                              @php _e("Ir con") @endphp :
                              <br>
                              <a class="text-red" href="{!! $location['waze_link'] !!}" target="_blank"><i class="icn icn-1 icn-waze"></i> Waze</a> |
                              <a class="text-red" href="{!! $location['google_maps_link'] !!}" target="_blank"><i class="icn icn-1 icn-maps"></i> Google Maps</a></strong>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                @endforeach
              </div>
        </div>
    </section>
    <section id="contact" class="section bg-blue py-5">
      <div class="container">
          <div class="row">
            <div class="col-md-6">
                <h2 class="text-white"><span class="text-red">05</span> {!! $contact_fields->contact_title !!}</h2>
                <p class="text-white">{!! $contact_fields->contact_description !!}</p>
                <p class="text-white"><i class="icn icn-1 icn-phone-white"></i> @php _e("Teléfono") @endphp: <a class="text-white" href="tel:{!! $contact_fields->contact_phone !!}">{!! $contact_fields->contact_phone !!}</a></p>
                <p class="text-white"><i class="icn icn-1 icn-messenger"></i> Messenger: <a target="_blank" class="text-white" href="{!! $contact_fields->contact_messenger !!}">{!! $contact_fields->contact_messenger !!}</a></p>
            </div>
            <div class="col-md-6">
                <h3 class="text-white">
                  @php _e("Envíanos un mensaje") @endphp
                </h3>
                @shortcode( $contact_fields->contact_form )
            </div>
          </div>
        </div>
    </section>
  </div>

  <div class="modal modal-services" tabindex="-1" role="dialog" id="ServicesModal">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icn icn-1 icn-plus" aria-hidden="true"></i></button>
              <div id="services-carousel" class="slider-services">
                  @foreach($services_loop as $services_item)
                    <div class="slide">
                      <div class="modal-header">
                          <div class="f-center-left">
                            <img src="{!! $services_item['icon'] !!}" aria-hidden="true" class="m-1">
                            <h2 class="text-white m-2">{!! $services_item['title'] !!}</h2>
                          </div>
                          <p class="text-white">{!! strip_tags($services_item['content']) !!}</p>
                        </div>
                        <div class="modal-body">
                          <h4 class="text-white modal-title">{!! $services_item['stat_title'] !!}</h4>
                          <p class="text-white">{!! $services_item['stat_description'] !!}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
                <a class="prev" href="#" role="button" data-slide="prev">
                    <i class="icn icn-1 icn-chevron" aria-hidden="true"></i> {{ _e('Anterior') }}
                </a>
                <a class="next" href="#" role="button" data-slide="next">
                    {{ _e('Siguiente') }} <i class="icn icn-1 icn-chevron" aria-hidden="true"></i>
                </a>
          </div>
        </div>
  </div>
  <div class="modal modal-video" tabindex="-1" role="dialog" id="VideoModal">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icn icn-1 icn-plus" aria-hidden="true"></i></button>
              <iframe id="ytplayer" type="text/html"
              src="https://www.youtube.com/embed/{!! $social_fields->social_video !!}?autoplay=0"
              frameborder="0"></iframe>
          </div>
        </div>
  </div>
@endsection
