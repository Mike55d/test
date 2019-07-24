@extends('layouts.app')

@section('content')

  @posts
  <div class="content-page-online t-page">
    <div class="container">
      <div class="row content-title">
        <div class="col-12">
          <h1 class="t-title">@field('title')</h1>
        </div>
      </div>
      <div class="row content-items"> 
        @fields('online_categories')
          <div class="col-12 col-sm-4 block-item">
            <div class="item">
              <div class="title">
                <h2 class="t-subtitle light">@sub('title')</h2>  
              </div>
              <div class="description">
                <div class="t-content">@sub('description')</div>
              </div>
              @group('link')
                @hassub('page')
                  <div class="button"> 
                    <a href="@sub('page')" class="btn btn-secondary">@sub('label')</a>
                  </div>
                @endsub
              @endgroup
            </div>
          </div>
        @endfields
      </div>
    </div>
  </div>
  @endposts

@endsection