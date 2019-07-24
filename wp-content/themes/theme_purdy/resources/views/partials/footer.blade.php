<footer>
  <div class="content-info">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-4 block-menu hide-sm">
            <nav class="navbar navbar-light"> 
              <div class="navbar-collapse" id="navbarSupportedContent"> 
                  @if (has_nav_menu('footer_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'navbar-nav']) !!}
                  @endif
              </div> 
            </nav>
        </div>
                
        <div class="col-12 block-social hide-lg">
          @hasoption('navigation')
            @options('navigation')
            
              @hassub('direction')
                @options('direction')
                  <div class="block">
                    <h1 class="t-subtitle-2">@sub('title')</h1>
                    <p class="t-paragraph">@sub('description')</p>
                  </div>
                @endoptions
              @endsub               
              
              @hassub('waze')
                @options('waze') 
                <div class="block">
                  <a href="@sub('url')" target="_blank" class="social" > <i class="figure-waze"></i>  @sub('label')</a>
                </div>
                @endoptions
              @endsub

            @endoptions
          @endoption
        </div>

        <div class="col-12 col-sm-5 block-schedule"> 
            @hasoption('schedules')
              @options('schedules')

                @hassub('title')
                  <h1 class="t-subtitle-2">@sub('title')</h1>
                @endsub

                @hassub('shedule')
                  @options('shedule')
                    <div class="item">
                      <h1 class="t-paragraph">@sub('title')</h1>
                      <p class="t-paragraph">@sub('description')</p>
                    </div>
                  @endoptions
                @endsub

              @endoptions
            @endoption
        </div>

        <div class="col-12 col-sm-3 block-social">
            @hasoption('navigation')
              @options('navigation')
              
                @hassub('direction')
                  @options('direction')
                    <div class="block hide-sm">
                      <h1 class="t-subtitle-2">@sub('title')</h1>
                      <p class="t-paragraph">@sub('description')</p>
                    </div>
                  @endoptions
                @endsub

                @hassub('waze')
                  @options('waze') 
                  <div class="block hide-sm">
                    <a href="@sub('url')" target="_blank" class="social"> <i class="figure-waze"></i>  @sub('label')</a>
                  </div>
                  @endoptions
                @endsub
                
              @endoptions
            @endoption

            @hasoption('social')
              @options('social')

                <div class="block">
                  @hassub('title')
                    <h1 class="t-subtitle-2">@sub('title')</h1>
                  @endsub

                  <div class="icons">
                    @hassub('facebook')
                      @options('facebook') 
                        <a href="@sub('url')" target="_blank">
                          <i class="icon-circle green icon-facebook"></i>
                        </a>
                      @endoptions 
                    @endsub
    
                    @hassub('twitter')
                      @options('twitter') 
                        <a href="@sub('url')" target="_blank">
                            <i class="icon-circle green icon-twitter"></i> 
                        </a>
                      @endoptions
                    @endsub
                  </div>
                </div>

              @endoptions
            @endoption

            @if (has_nav_menu('second_footer_navigation'))
              <nav class="navbar navbar-light"> 
                <div class="navbar-collapse" id="navbarSupportedContent">  
                  {!! wp_nav_menu([
                    'theme_location' => 'second_footer_navigation', 
                    'menu_class' => 'navbar-nav',
                    'link_after' => '<i class="icon-arrow-right"></i>',
                  ]) !!}
                </div> 
              </nav>
            @endif

        </div>
      </div>
    </div>
  </div>
  <div class="content-brand">
    <div class="container">
      <div class="row">
        <div class="col-12 block-brand">
          @hasoption('logotype')
            <a class="navbar-brand" href="{{ home_url('/') }}">
              <img class="logotype" src="@option('logotype', 'url')" alt="{{ get_bloginfo('name', 'display') }}">
            </a>
          @endoption
        </div>
      </div>
    </div>
  </div>

  <!-- Background decorations -->
  <i class="icon-deco-waves"></i>
  <i class="icon-deco-triangle"></i>
  <i class="icon-deco-circle"></i>

</footer>
