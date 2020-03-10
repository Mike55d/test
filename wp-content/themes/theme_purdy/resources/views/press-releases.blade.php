{{--
  Template Name: Press Releases
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
    <section id="press-releases" class="section">
      <div class="container">
        <h2>{!! $page_fields->page_title !!}</h2>
        <p>{!! $page_fields->page_description !!}</p>
        <div id="ajax-load-more" class="card-container my-3"> 
          <?php echo do_shortcode('[ajax_load_more post_type="press_releases" posts_per_page="20" scroll_distance="-400" button_label="Cargar más" button_loading_label="Cargando"]') ?>
        </div>
      </div>
    </section>
@endsection
