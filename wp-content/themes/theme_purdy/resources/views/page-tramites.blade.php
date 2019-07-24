@extends('layouts.app')

@section('content')

@posts
<div class="page-documents t-page">
  <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="t-title">@title</h1>  
        </div>
      </div>

      <div class="row t-tab-vertical">
        @hasfield('procedures')
          <div class="col-3">
            {{-- TABS --}}
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              @php $counter = 0 @endphp
              @fields('procedures')
                <li class="nav-item">
                  <a class="nav-link {{ $counter == 0 ? 'active' : '' }}" id="pills-{{ $counter }}-tab" data-toggle='pill' href='#pills-{{ $counter }}' role="tab" aria-controls='pills-{{ $counter }}' aria-selected='{{ $counter == 0 ? 'true' : 'false' }}'>
                    @group('information')
                      @hassub('title_tab')
                          @sub('title_tab')
                      @endsub
                    @endgroup
                  </a>
                </li>
                @php $counter++ @endphp
              @endfields
            </ul>
          </div>
          
          <div class="col-9">
            {{-- CONTENT TABS --}}
            <div class="tab-content" id="pills-tabContent">
                @php $counter = 0 @endphp
                @fields('procedures')
                  <div class="tab-pane fade {{ $counter == 0 ? 'show active' : '' }}" id="pills-{{ $counter }}" role="tabpanel" aria-labelledby="pills-{{ $counter }}-tab">
                      @group('information')

                        @hassub('title')
                          <h1 class="t-subtitle-2">@sub('title')</h1>
                        @endsub

                        @hassub('description')
                          <p class="t-paragraph">@sub('description')</p>
                        @endsub

                      @endgroup

                      @php 
                        $procedures = get_field('procedures');
                        $list = $procedures[$counter]['list']
                      @endphp

                      @if(!empty($list))
                        <div class="list-procedures">
                          @foreach( $list as $item)
                            @php setup_postdata($GLOBALS['post'] =& $item) @endphp
                            <div class="item">
                              <div class="image">
                                <img src="" alt="">
                              </div>
                              <p class="txt-title">@title </p>
                            </div>
                          @endforeach
                          @php wp_reset_postdata(); @endphp
                        </div>
                      @endif

                  </div>
                  @php $counter++ @endphp
                @endfields
            </div>
          </div>
          @endfield
        </div>

      </div>
      
  </div>
</div>
@endposts

@endsection