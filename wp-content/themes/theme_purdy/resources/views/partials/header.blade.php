<header class="main-header">
  <div class="f-center logo-container mx-1">
      <a class="logo" href="#top">Grupo Purdy Motor</a>
     <div class="language-switcher d-md-none">
        <ul class="lang-toggle">
          <?php pll_the_languages();?>
        </ul>
        <ul class="lang-list">
          <?php pll_the_languages();?>
        </ul>
  </div>
  </div>
  <nav>
      @php global $wp_query; @endphp
      @php $pagename = $wp_query->queried_object->post_name; @endphp
      <ul class="nav-list">
        <li class="nav-item @if(preg_match('/front-page*/', $pagename)) active @endif"><a href="<?php echo get_navlink_href('#top'); ?>"> @php _e('Inicio') @endphp</a></li>
        <li class="nav-item"><a href="<?php echo get_navlink_href('#services'); ?>"> @php _e('Servicios') @endphp</a></li>
        <!-- Show on spanish -->
        @if(get_locale() == "es_CR") 
          <li class="nav-item @if($pagename == "sostenibilidad" || $pagename == "sustainability") active @endif"><a href="/@php _e('Sostenibilidad') @endphp">@php _e('Sostenibilidad') @endphp</a></li> 
        @endif
        <li class="nav-item"><a href="<?php echo get_navlink_href('#people'); ?>">@php _e('Gente Purdy') @endphp</a></li>
        <li class="nav-item"><a href="<?php echo get_navlink_href('#locations'); ?>">@php _e('Encontranos') @endphp</a></li>
        <li class="nav-item"><a href="<?php echo get_navlink_href('#contact'); ?>">@php _e('Contáctanos') @endphp</a></li>
      </ul>
  </nav>
  <div class="language-switcher d-none d-md-block">
    <ul class="lang-toggle">
      <?php pll_the_languages();?>
    </ul>
    <ul class="lang-list">
      <?php pll_the_languages();?>
    </ul>
  </div>
</header>
