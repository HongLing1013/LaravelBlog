<header class="l-header @isset($overlay) l-header_overlay @endisset">

  <div class="l-navbar l-navbar_expand @isset($overlay) l-navbar_t-dark-trans @else l-navbar_t-light @endisset js-navbar-sticky">
      <div class="container-fluid">
          <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

              <!--logo start-->
              <a href="/" class="logo-brand">
                  <img class="retina" @isset($overlay) src="/assets/img/logo-dark.png" @else src="/assets/img/logo.png" @endisset alt="Massive">
              </a>
              <!--logo end-->

              <!--mega menu start-->
              <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                  <li class="@if(request()->is('/')) active @endif">
                    <a href="/">Home</a>
                  </li>
                  <li class="@if(request()->is('about')) active @endif">
                    <a href="/about">About</a>
                  </li>
                  <li class="@if(request()->is('posts')) active @endif">
                    <a href="/posts">Blog</a>
                  </li>
                  <li class="@if(request()->is('contact')) active @endif">
                    <a href="/contact">Contact</a>
                  </li>
              </ul>
              <!--mega menu end-->

          </nav>
      </div>
  </div>

</header>
