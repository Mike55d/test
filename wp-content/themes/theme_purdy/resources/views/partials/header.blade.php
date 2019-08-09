<header class="main-header">
  <div class="f-center logo-container mx-1">
      <a class="logo" href="#top">Grupo Purdy Motor</a>
      <ul class="language-switcher d-md-none">
          <?php pll_the_languages();?>
        </ul>
  </div>
  <nav>
      <ul class="nav-list">
        <li class="nav-item active"><a href="#top">@php echo(pll__('Inicio')) @endphp</a></li>
        <li class="nav-item"><a href="#services">@php echo(pll__('Servicios')) @endphp</a></li>
        <li class="nav-item"><a href="#social">@php echo(pll__('Sostenibilidad')) @endphp</a></li>
        <li class="nav-item"><a href="#people">@php echo(pll__('Gente Purdy')) @endphp</a></li>
        <li class="nav-item"><a href="#locations">@php echo(pll__('Encontranos')) @endphp</a></li>
        <li class="nav-item"><a href="#contact">@php echo(pll__('Contáctanos')) @endphp</a></li>
      </ul>
  </nav>
  <ul class="language-switcher d-none d-md-block">
    <?php pll_the_languages();?>
  </ul>
</header>
