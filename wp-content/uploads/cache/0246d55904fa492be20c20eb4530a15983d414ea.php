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
      <?php global $wp_query; ?>
      <?php $pagename = $wp_query->queried_object->post_name; ?>
      <ul class="nav-list">
        <li class="nav-item <?php if(preg_match('/front-page*/', $pagename)): ?> active <?php endif; ?>"><a href="<?php echo get_navlink_href('#top'); ?>"> <?php _e('Inicio') ?></a></li>
        <li class="nav-item"><a href="<?php echo get_navlink_href('#services'); ?>"> <?php _e('Servicios') ?></a></li>
        <!-- Show on spanish -->
        <?php if(get_locale() == "es_CR"): ?> 
          <li class="nav-item <?php if($pagename == "sostenibilidad" || $pagename == "sustainability"): ?> active <?php endif; ?>"><a href="/<?php _e('Sostenibilidad') ?>"><?php _e('Sostenibilidad') ?></a></li> 
        <?php endif; ?>
        <li class="nav-item"><a href="<?php echo get_navlink_href('#people'); ?>"><?php _e('Gente Purdy') ?></a></li>
        <li class="nav-item"><a href="<?php echo get_navlink_href('#locations'); ?>"><?php _e('Encontranos') ?></a></li>
        <li class="nav-item"><a href="<?php echo get_navlink_href('#contact'); ?>"><?php _e('Contáctanos') ?></a></li>
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
