{{--
  Template Name: Front Page
--}}


@extends('layouts.app')

@section('content')
  <div class="page-home">
    <div class="hero" id="top">
      <h1>Grupo <br><strong>Purdy Motor</strong></h1>
      <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
    </div>
    <section id="services">
      <div class="container">
        <h3 class="text-red">01</h3>
        <h1>Servicios</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
        <div class="f-center"> 
          
          <div class="card card-link">
              <div>
                <i class="icn icn-3 icn-tag"></i>
              </div>
              <div class="card-content">
                <h3>Ventas</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                <a href="" class="button button-arrow">Ver más <i class="icn icn-1 icn-chevron"></i></a>
              </div>
          </div>
        </div>
      </div>
    </section>
    <section id="social" class="bg-dark">
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
          <div class="card card-social">
            <p class="text-white">Holi</p>
          </div>
          <div class="card card-social">
            <p class="text-white">Holi</p>
          </div>
          <div class="card card-social">
            <p class="text-white">Holi</p>
          </div>
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
          <div class="row">
            <div class="col-md-6">
                <a>holi</a>
            </div>
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
