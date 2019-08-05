{{--
  Template Name: Front Page
--}}


@extends('layouts.app')

@section('content')
  <div class="page-home">
    <div class="hero d-md-none" id="top" style="background-image:url('{!! $hero_fields->hero_mobile !!}');">
      {!! $hero_fields->hero_text !!}
    </div>
    <div class="hero d-none d-md-flex" id="top" style="background-image:url('{!! $hero_fields->hero_desktop !!}');">
      {!! $hero_fields->hero_text !!}
    </div>
    <section id="services">
      <div class="container">
        <h3 class="text-red">01</h3>
        <h1>{!! $services_fields->services_title !!}</h1>
        <p>{!! $services_fields->services_description !!}</p>
        <div class="f-center my-3"> 
            @foreach($services_loop as $services_item)
              <div class="card card-link">
                  <div class="card-icon">
                    <i class="icn icn-3 icn-tag"></i>
                  </div>
                  <div class="card-content">
                    <h3>{!! $services_item['title'] !!}</h3>
                    <p>{!! $services_item['content'] !!}</p>
                    <button data-toggle="modal" data-target="#ServicesModal" class="button button-arrow">Ver más <i class="icn icn-1 icn-chevron"></i></button>
                  </div>
              </div>
            @endforeach
          
        </div>
      </div>
    </section>
    <section id="social" class="bg-dark py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <h3 class="text-red">02</h3>
              <h1 class="text-white">{!! $social_fields->social_title !!}</h1>
              <p class="text-white">{!! $social_fields->social_description !!}</p>
          </div>
          <div class="class-md-6">
            <a class="video-container" href="#modal-video" data-src="{!! $social_fields->social_video !!}">
                <img src="{!! $social_fields->social_video_thumbnail !!}" alt="Video thumbnail">
            </a>
          </div>
        </div>
        <div class="social-slider">
          @foreach($social_axis_loop as $social_item)
          <div class="card card-social">
            <h4 class="text-white">{!! $social_item['title'] !!}</h4>
            <p class="text-white">{!! $social_item['content'] !!}</p>
            <a data-toggle="collapse" href="#social-collapse{!! $loop->index !!}" role="button" aria-expanded="false" aria-controls="social-collapse{!! $loop->index !!}" class="button button-arrow text-white">Ver más <i class="icn icn-1 icn-chevron"></i></a>
            <div class="collapse" id="social-collapse{!! $loop->index !!}">
              <h5 class="text-white">Objetivos</h5>
              <ul class="text-white p-0">
                @foreach ( $social_item['objectives'] as $o)
                  <li>{!! $o['objective'] !!}</li>
                @endforeach
              </ul>
            </div>
          </div>
          @endforeach
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
            
            <div class="accordion row" id="accordion-locations">
                @foreach($locations_loop as $location)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" id="heading{!! $loop->index !!}">
                            <button class="button button-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapse{!! $loop->index !!}" aria-expanded="true" aria-controls="collapse{!! $loop->index !!}">
                                <i class="icn icn-1 icn-plus"></i> {!! $location['title'] !!}
                            </button>
                        </div>
                        <div id="collapse{!! $loop->index !!}" class="collapse" aria-labelledby="heading{!! $loop->index !!}" data-parent="#accordion-locations">
                          <div class="card-body">
                            <ul>
                              <li><strong>Teléfono</strong> {!! $location['phone'] !!}</li>
                              <li><strong>Dirección</strong> {!! $location['address'] !!}</li>
                              <li><strong>Horario de Atención</strong> 
                                <ul>
                                  @foreach ($location['schedule'] as $sc)
                                    <li><strong>{!!$sc['days']!!}:</strong> {!! $sc['hours'] !!}</li>
                                  @endforeach
                                </ul>
                              </li>
                              <li><strong>Waze</strong> {!! $location['waze_link'] !!}</li>
                              <li><strong>Google Maps</strong> {!! $location['google_maps_link'] !!}</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                </div>
                @endforeach
              </div>
        </div>
    </section>  
    <section id="contact" class="bg-dark">
        <div class="container">
            <div class="row">
              <div class="col-md-6">
                  <h3 class="text-red">05</h3>
                  <h1 class="text-white">{!! $contact_fields->contact_title !!}</h1>
                  <p class="text-white">{!! $contact_fields->contact_description !!}</p>
                  <p class="text-white"><strong>Teléfono:</strong> {!! $contact_fields->contact_phone !!}</p>
                  <p class="text-white"><strong>Messenger:</strong> {!! $contact_fields->contact_messenger !!}</p>
              </div>
              <div class="class-md-6">
                  @shortcode( $contact_fields->contact_form )
              </div>
            </div>
          </div>
    </section>   
  </div>

  <div class="modal modal-services" tabindex="-1" role="dialog" id="ServicesModal">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              @foreach($services_loop as $services_item)
              <div class="modal-header">
                  <h4 class="text-white"><i class="icn icn-1 icn-tag"></i> {!! $services_item['title'] !!}</h4>
                  <p class="text-white">{!! $services_item['content'] !!}</p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Save changes</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            @endforeach
          </div>
        </div>
  </div>
@endsection
