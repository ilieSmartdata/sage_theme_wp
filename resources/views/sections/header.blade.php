<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  <?php
  $custom_logo_id = get_theme_mod( 'site_logo' );

    $menu = wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'menu_class' => 'menu text-xl text-center items-center gap-x-5 pt-4 md:gap-x-4 lg:text-lg lg:flex  lg:pt-0',
        'container' => false,
        'echo' => false,
    ]);
  ?>

  <nav class="nav-primary lg:px-16 px-6 bg-white shadow-md flex flex-wrap items-center lg:py-0 py-2" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">

    <div class="flex-1 flex justify-between items-center">{{$custom_logo_id}}</div>

    <label for="menu-toggle" class="cursor-pointer lg:hidden block">
      <svg
        class="fill-current text-gray-900"
        xmlns="http://www.w3.org/2000/svg"
        width="20"
        height="20"
        viewBox="0 0 20 20"
      >
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />


  @if ($menu)
      <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
        <nav>
      {!! $menu !!}
        </nav>
      </div>
  @endif

  </nav>

{{--  @if (has_nav_menu('primary_navigation'))--}}
{{--    <nav class="nav-primary lg:px-16 px-6 bg-white shadow-md flex flex-wrap items-center lg:py-0 py-2" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">--}}
{{--      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}--}}
{{--        <div class="flex-1 flex justify-between items-center">--}}
{{--          <a href="/" class="flex text-lg font-semibold">--}}
{{--            <img--}}
{{--              src={{$custom_logo_id}}--}}
{{--              class="p-2"--}}
{{--              alt="test logo"--}}
{{--            />--}}
{{--          </a>--}}
{{--        </div>--}}
{{--        <label for="menu-toggle" class="cursor-pointer lg:hidden block">--}}
{{--          <svg--}}
{{--            class="fill-current text-gray-900"--}}
{{--            xmlns="http://www.w3.org/2000/svg"--}}
{{--            width="20"--}}
{{--            height="20"--}}
{{--            viewBox="0 0 20 20"--}}
{{--          >--}}
{{--            <title>menu</title>--}}
{{--            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>--}}
{{--          </svg>--}}
{{--        </label>--}}
{{--        <input class="hidden" type="checkbox" id="menu-toggle" />--}}
{{--        <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">--}}
{{--          <nav>--}}
{{--            <ul class="text-xl text-center items-center gap-x-5 pt-4 md:gap-x-4 lg:text-lg lg:flex  lg:pt-0">--}}
{{--              <li class="py-2 lg:py-0 ">--}}
{{--                <a--}}
{{--                  class="text-red-600 hover:pb-4 hover:border-b-4 hover:border-yellow-400"--}}
{{--                  href="#"--}}
{{--                >--}}
{{--                  Blog--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="py-2 lg:py-0 ">--}}
{{--                <a--}}
{{--                  class="text-red-600 hover:pb-4 hover:border-b-4 hover:border-yellow-400"--}}
{{--                  href="#"--}}
{{--                >--}}
{{--                  Projects--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="py-2 lg:py-0 ">--}}
{{--                <a--}}
{{--                  class="text-red-600 hover:pb-4 hover:border-b-4 hover:border-yellow-400"--}}
{{--                  href="#"--}}
{{--                >--}}
{{--                  Apps--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="py-2 lg:py-0 ">--}}
{{--                <a--}}
{{--                  class="text-red-600 hover:pb-4 hover:border-b-4 hover:border-yellow-400"--}}
{{--                  href="#"--}}
{{--                >--}}
{{--                  Designs--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="py-2 lg:py-0 ">--}}
{{--                <a--}}
{{--                  class="text-red-600 hover:pb-4 hover:border-b-4 hover:border-yellow-400"--}}
{{--                  href="#"--}}
{{--                >--}}
{{--                  My Journey--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="py-2 lg:py-0 ">--}}
{{--                <a--}}
{{--                  class="text-red-600 hover:pb-4 hover:border-b-4 hover:border-yellow-400"--}}
{{--                  href="#"--}}
{{--                >--}}
{{--                  About--}}
{{--                </a>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--          </nav>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--  @endif--}}

</header>
