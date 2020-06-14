<header class="banner">
    <div class="headshot-container">
        <a href="{{ home_url('/') }}" class="img-link" id="headshot">
        </a>
    </div>
    <nav>
        @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
        <ul class="nav-links">
          <li class="index-link"><a href="./index.html">Home</a></li>
          <li class="index-link"><a href="./pages/projects.html" id="project-link">Projects</a></li>
          <li class="index-link"><a href="./pages/gigs.html" id="gigs-link">Gigs</a></li>
          <!-- <li class="index-link"><a href="./contact.html" id="contact-link">Contact</a></li> -->
        </ul>
    </nav>
</header>
