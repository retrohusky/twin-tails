<header class="tt-header">

  <div class="tt-wrapper tt-header__wrapper">

    <img class="tt-header__kitsune" width="85" src="@asset('images/tamako-header.png')"
         alt="Tamako character standing">

    <div class="tt-menu">


      <a class="h1 tt-menu__logo"
         href="{{ home_url('/') }}">
        {!! $siteName !!}
      </a>

      <button class="tt-dark-mode" id="tt-darkmode-toggle">

      </button>

      @if (has_nav_menu('primary_navigation'))
        <nav class="tt-menu__nav" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!!
        wp_nav_menu(
          [
          'theme_location' => 'primary_navigation',
          'menu_class' => 'tt-menu__ul',
          'echo' => false,
          'depth' => 2,
          ])
            !!}
        </nav>
      @endif


    </div>

    <img class="tt-header__kitsune"
         width="140"
         src="@asset('images/koharu-header.png')"
         alt="Koharu character standing">

    <div id="tt-header__hamburger" class="tt-header__hamburger">
      <div></div>
      <div></div>
      <div></div>
    </div>

  </div>


</header>
