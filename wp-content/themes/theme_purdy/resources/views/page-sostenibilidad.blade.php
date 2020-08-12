{{--
Template Name: Sostenibilidad
--}}

@extends('layouts.app')

@php global $post; @endphp 
@php 
  $certificationsFields = PageSostenibilidad::certificationsFields();
  $pageFields = PageSostenibilidad::pageFields();
  $documents = PageSostenibilidad::documents();
  $reports =  PageSostenibilidad::reports();
  $social_axis_loop =  PageSostenibilidad::SocialAxisLoop();
  $sustainability_section = PageSostenibilidad::sustainabilitySection();
@endphp

@section('content')
    <div class="page-sustainability">
        <div class="section introduction-section" id="introduction">
            <div class="container">
                <h3>{{ get_the_title() }}</h3>
                <h2>{{ $pageFields->page_title }}</h2>
                <div class="body-color">
                    {!! $pageFields->page_description !!}
                </div>
            </div>
        </div>
        <div class="page-video video-container">
            <a class="" href="#VideoModal" data-toggle="modal" data-target="#VideoModal">
                <img src="{!! $pageFields->page_video_thumbnail !!}" alt="Video thumbnail">
                <div class="play-btn"><i class="icn icn-2 icn-play"></i></div>
            </a>
        </div>
        

        <div class="section reports-section" id="reports">
            <div class="container">
                <div class="actual-report">
                    <h3>{{ $reports['report_title']}}</h3>
                    <div class="container-buttons">
                        <a class="button-primary button" href="{{ $reports['report_actual_link'] }}"> 
                            @php _e("Ver en línea") @endphp
                        </a>
                        <a class="button button-secondary" href="{{ $reports['report_actual_file'] }}"> 
                            @php _e("Descargar") @endphp
                        </a>
                    </div>
                    
                </div>
                <div class="others-reports">
                    <h3>{{ $reports['report_others_title']}}</h3>
                        <ul>
                        @foreach($reports['reports_others'] as $report)
                            <li><a class="button" href="{{ $report['report_file']}}">{{ $report['title'] }}</a></li>
                        @endforeach
                    </ul>
                    
                </div>
            </div>
        </div>

        <section class="bg-blue py-5 sustainability-section">
            <div class="container">
                <div class="row">
                <div class="col-md-5">
                    <h2 class="text-white">{!! $sustainability_section['section_title'] !!}</h2>
                    <div class="text-white description">
                        {!! $sustainability_section['section_description'] !!}
                    </div>
                </div>
                <div class="col-md-7">
                    <a class="video-container" href="#sustainabilityVideo" data-toggle="modal" data-target="#sustainabilityVideo">
                        <img class="w-100" src="{!! $sustainability_section['section_video_thumbnail'] !!}" alt="Video thumbnail">
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
                                    <div class="text-white">
                                        {!! $social_item['content'] !!}
                                        {!! $social_item['progress'] !!}
                                    </div>
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
                @foreach ($certificationsFields->certification_logos as $logo )
                    <li class="certification-item"><img alt="{!! $logo['certification_name'] !!}" src="{!! $logo['certification_logo'] !!}"></li>
                @endforeach
                </ul>  
            </div>
        </section>
    
        <section id="documents" class="section documents-section">
            <div class="container">
                <h3>@php _e("Documentos de Interés") @endphp</h3>
                <div class="accordion" id="accordion-locations">
                    @foreach($documents as $category)
                        @php $documentCategory = $category['document_category'] @endphp
                        <div class="card">
                            <div class="card-header">
                                <button class="button button-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapse{!! $loop->index !!}" aria-expanded="true" aria-controls="collapse{!! $loop->index !!}">
                                    <i class="icn icn-1 icn-plus"></i> {!! $documentCategory['category_name'] !!}
                                </button>
                            </div>
                            <div id="collapse{!! $loop->index !!}" class="collapse" aria-labelledby="heading{!! $loop->index !!}" data-parent="#accordion-locations">
                                <div class="collapsible__body" style="display: block;">
                                    <ul class="list--download">
                                        @foreach($documentCategory['documents'] as $document)
                                            <li>
                                                <a class="text-left" href="{{ $document['file'] }}">
                                                    <i class="icn icn-1 icn-download"></i> {{ $document['title'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> 
    </div>
    <div class="modal modal-video" tabindex="-1" role="dialog" id="VideoModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icn icn-1 icn-plus" aria-hidden="true"></i></button>
                <iframe id="ytplayer" type="text/html"
                src="https://www.youtube.com/embed/{!! $pageFields->page_video !!}?autoplay=0"
                frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <div class="modal modal-video" tabindex="-1" role="dialog" id="sustainabilityVideo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icn icn-1 icn-plus" aria-hidden="true"></i></button>
                <iframe id="ytplayer" type="text/html"
                src="https://www.youtube.com/embed/{!! $sustainability_section['section_video'] !!}?autoplay=0"
                frameborder="0"></iframe>
            </div>
        </div>
    </div>
@endsection
