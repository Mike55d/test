@php  
  //Template Name: Online 
@endphp
@extends('layouts.app')

@section('content')
  @posts
    <div class="page-online t-page">
      <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="t-title">@title</h1> 
              <h3>Página en desarrollo.</h3> 
              @hasfield('url_service')
                {{--
                  wp_http_validate_url(@field('url_service');
                  esc_url
                --}}
                <iframe src="@field('url_service')" frameborder="0" width="100%" height="500px"></iframe> 
              @endfield
            </div>
          </div>

      </div>
    </div>
  @endposts

@endsection
