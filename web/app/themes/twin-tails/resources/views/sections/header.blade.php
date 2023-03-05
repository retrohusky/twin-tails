<header
  class="
  border-bottom-gradient
  border-b-15
  flex
  justify-center
  ">

  <div class="
  max-w-container
  flex
  justify-between
  items-center
  desktop:items-end
  pt-4
  desktop:p-0
  w-full
  gap-8
  mx-12
  ">
    <img class="hidden desktop:block" width="85" src="@asset('images/tamako-header.png')"
         alt="Tamako character standing">

    <div class="
    desktop:h-header-height
    flex
    gap-16
    desktop-lg:gap-36
    items-end
   ">


      <a class="
  text-gradient
  font-another-hand
  text-7xl
  desktop-lg:text-9xl
  "
         href="{{ home_url('/') }}">
        {!! $siteName !!}
      </a>

      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary mb-8" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!!
        wp_nav_menu(
          [
          'theme_location' => 'primary_navigation',
          'menu_class' => '
            font-jeju-gothic
            hidden
            desktop:flex
            desktop:gap-10
            desktop-lg:gap-20
            desktop:text-xl
            desktop-lg:text-3xl
            lowercase',
          'echo' => false,
          ])
            !!}
        </nav>
      @endif


    </div>

    <img class="hidden desktop:block"
         width="140"
         src="@asset('images/koharu-header.png')"
         alt="Koharu character standing">

    <div id="hamburger" class="desktop:hidden flex flex-col justify-around w-6 h-6 cursor-pointer">
      <div class="w-full h-1 bg-black"></div>
      <div class="w-full h-1 bg-black"></div>
      <div class="w-full h-1 bg-black"></div>
    </div>

    @if(has_nav_menu('primary_navigation'))

      <nav id="mobile-nav" class="
            hidden
            desktop:hidden
            fixed
            top-0
            left-0
            w-full
            h-screen
            bg-white
            font-jeju-gothic
            ">

        <div class="flex justify-end w-full mb-4 p-8">
          <button id="close-mobile-nav" class="text-black text-5xl">
            &times;
          </button>
        </div>
        {!!
        wp_nav_menu(
          [
          'theme_location' => 'primary_navigation',
          'menu_class' => '
            flex
            flex-col
            justify-center
            items-center
            gap-10
            lowercase
            text-3xl',
          'echo' => false,
          ])
            !!}
      </nav>
    @endif

  </div>


</header>
