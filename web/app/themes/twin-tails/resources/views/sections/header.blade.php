<header
  class="
  border-bottom-gradient
  border-b-15
  flex
  justify-center
  ">

  <div class="
    max-w-container
    h-header-height
    flex
    gap-36
    items-end
   ">
    <a class="
  text-gradient
  brand
  font-another-hand
  text-9xl
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
        'menu_class' =>
          'flex
          gap-20
          font-jeju-gothic
          text-3xl
          lowercase',
        'echo' => false,
        ])
          !!}
      </nav>
    @endif
  </div>


</header>
