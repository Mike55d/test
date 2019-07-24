<header class="main-header banner">
  <div class="content-brand">
    <div class="container">
      <div class="row">
        <div class="col-12 block">
          @hasoption('logotype')
            <div class="block-brand">
              <a class="navbar-brand" href="{{ home_url('/') }}">
                <img class="logotype" src="@option('logotype', 'url')" alt="{{ get_bloginfo('name', 'display') }}">
              </a>
            </div>
          @endoption

          <div class="block-accesibility"> 
            <div class="block-zoom">
              <button class="btn-large-letter">A <i class="icon-plus"></i></button>
              <button class="btn-small-letter">A <i class="icon-minus"></i></button>
            </div>

 
            {{-- @hasoption('help') --}}
              {{-- @options('help')
                <div class="block-help">
                  <button type="button" class="btn" data-toggle="tooltip" data-html="true" 
                    title="<em>@sub('title')</em> <p>@sub('description')</p>">
                    <i class="icon-info"></i>
                  </button>
                </div>
              @endoptions  --}}
            {{-- @endoption --}}
            
            {{-- <div class="block-search">
              <input type="text" placeholder="¿Qué estás buscando?">
            </div> --}}
  
            <div class="block-menu">
    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav mr-auto']) !!}
          @endif
        </div>
    
      </div>
  </nav>
</header>
