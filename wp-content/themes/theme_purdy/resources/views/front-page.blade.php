{{--
  Template Name: Front Page
--}}


@extends('layouts.app')

@section('content')
  <div class="page-home">
    <div class="hero" id="top" style="background-image:url('/wp-content/themes/theme_purdy/img/hero-desktop.png');">
      <h1 class="text-white">Grupo <br><strong>Purdy Motor</strong></h1>
      <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
    </div>
    <section id="services">
      <div class="container">
        <h3 class="text-red">01</h3>
        <h1>Servicios</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
        <div class="f-center my-3"> 
            @foreach($services_loop as $services_item)
              <div class="card card-link">
                  <div class="card-icon">
                    <i class="icn icn-3 icn-tag"></i>
                  </div>
                  <div class="card-content">
                    <h3>{!! $services_item['title'] !!}</h3>
                    <p>{!! $services_item['content'] !!}</p>
                    <a href="" class="button button-arrow">Ver más <i class="icn icn-1 icn-chevron"></i></a>
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
              <h1 class="text-white">Responsabilidad Social</h1>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
          </div>
          <div class="class-md-6">
            <h2 class="text-white">Video goes hered</h2>
          </div>
        </div>
        <div class="social-slider">
          @foreach($social_axis_loop as $social_item)
          <div class="card card-social">
            <h4 class="text-white">{!! $social_item['title'] !!}</h4>
            <p class="text-white">{!! $social_item['content'] !!}</p>
            <a href="" class="button button-arrow text-white">Ver más <i class="icn icn-1 icn-chevron"></i></a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <section id="people">
        <div class="container">
          <h3 class="text-red">03</h3>
          <h1>Gente Purdy</h1>
        
        <div class="row">
          <div class="col-md-6">
              <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
          </div>
          <div class="class-md-6">
            <h2>pic goes here</h2>
          </div>
        </div>
      </div>
    </section>   
    <section id="locations">
        <div class="container">
            <h3 class="text-red">04</h3>
            <h1>Donde nos encontramos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
            
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
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
                  <h1 class="text-white">Contáctanos</h1>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
              </div>
              <div class="class-md-6">
                <h2 class="text-white">Form goes here</h2>
              </div>
            </div>
          </div>
    </section>   
    <h1>H1 style</h1>
    <h2>H2 style</h2> 
    <h3>H3 style</h3> 
    <h4>H4 style</h4> 
    <h5>H2 style</h5> 
    <p>Simple paragraph</p>
    <a href="" class="button button-primary">Button primary</a>
    <br>
    <a href="" class="button button-arrow">Ver más <i class="icn icn-1 icn-chevron"></i></a>
  </div>
@endsection
