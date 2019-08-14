{{--
  Template Name: Front Page
--}}


@extends('layouts.app')

@section('content')
  <div class="page-home">
    <section id="top">
      <div class="hero d-md-none" style="background-image:url('{!! $hero_fields->hero_mobile !!}');">
        {!! $hero_fields->hero_text !!}
      </div>
      <div class="hero d-none d-md-flex" style="background-image:url('{!! $hero_fields->hero_desktop !!}');">
        {!! $hero_fields->hero_text !!}
      </div>
    </section>
    <section id="services">
      <div class="container">
        <h3 class="text-red">01</h3>
        <h1>{!! $services_fields->services_title !!}</h1>
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
                    <a href="#ServicesModal" data-toggle="modal" data-target="#ServicesModal" class="button button-arrow idx" data-index="{!! $loop->index !!}">
                      @php _e("Ver más") @endphp
                      <i class="icn icn-1 icn-chevron"></i></a>
                  </div>
              </div>
            @endforeach
          
        </div>
      </div>
    </section>
    <section id="social" class="bg-blue py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <h3 class="text-red">02</h3>
              <h1 class="text-white">{!! $social_fields->social_title !!}</h1>
              <p class="text-white">{!! $social_fields->social_description !!}</p>
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
                        {!! $social_item['thumbnail'] !!}
                        <h4 class="text-white my-3">{!! $social_item['title'] !!}</h4>
                        <p class="text-white">{!! strip_tags($social_item['content']) !!}</p>
                        <div class="collapse" id="social-collapse{!! $loop->index !!}">
                          <h5 class="text-white my-2">
                              @php _e("Objetivos") @endphp
                          </h5>
                          <ul class="text-white p-0 mb-5">
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
    <section id="people">
        <div class="container">
          <h3 class="text-red">03</h3>
          <h1>{!! $people_fields->people_title !!}</h1>
        
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
    <section id="locations">
        <div class="container">
            <h3 class="text-red">04</h3>
            <h1>{!! $locations_fields->locations_title !!}</h1>
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
    <section id="contact" class="bg-blue py-5 container">
        <div class="row">
          <div class="col-md-6">
              <h3 class="text-red">05</h3>
              <h1 class="text-white">{!! $contact_fields->contact_title !!}</h1>
              <p class="text-white">{!! $contact_fields->contact_description !!}</p>
              <p class="text-white"><i class="icn icn-1 icn-phone-white"></i> @php _e("Teléfono") @endphp: {!! $contact_fields->contact_phone !!}</p>
              <p class="text-white"><i class="icn icn-1 icn-messenger"></i> Messenger: {!! $contact_fields->contact_messenger !!}</p>
          </div>
          <div class="col-md-6">
              <h3 class="text-white">
                @php _e("Envíanos un mensaje") @endphp
              </h3>
              @shortcode( $contact_fields->contact_form )
          </div>
        </div>
    </section>   
  </div>

  <div class="modal modal-services" tabindex="-1" role="dialog" id="ServicesModal">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icn icn-1 icn-plus" aria-hidden="true"></i></button>
              <div id="services-carousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                      @foreach($services_loop as $services_item)
                      <div class="carousel-item @if ($loop->first) active @endif">
                        <div class="modal-header">
                            <div class="f-center-left">
                              <img src="{!! $services_item['icon'] !!}" aria-hidden="true" class="m-1">
                              <h2 class="text-white m-2">{!! $services_item['title'] !!}</h2>
                            </div>
                            <p class="text-white">{!! strip_tags($services_item['content']) !!}</p>
                          </div>
                          <div class="modal-body">
                            <h4 class="text-red">{!! $services_item['stat_number'] !!}</h4>
                            <h4 class="text-white">{!! $services_item['stat_title'] !!}</h4>
                            <p class="text-white">{!! $services_item['stat_description'] !!}</p>
                          </div>
                      </div>
                    @endforeach
                  </div>
                  <a class="carousel-control-prev" href="#services-carousel" role="button" data-slide="prev">
                    <span class="icn icn-1 icn-chevron" aria-hidden="true"></span> {{ _e('Anterior') }}
                  </a>
                  <a class="carousel-control-next" href="#services-carousel" role="button" data-slide="next">
                      {{ _e('Siguiente') }} <span class="icn icn-1 icn-chevron" aria-hidden="true"></span>
                  </a>
                </div>
              
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
