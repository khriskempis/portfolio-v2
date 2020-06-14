<!doctype html>
<html {!! get_language_attributes() !!}>


  @include('partials.head')

  <body {!! body_class() !!} >

    @php 
        do_action('get_header') 
    @endphp

    @include('partials.header')

    <div class="wrap container" role="document">

      <div class="content">

        <main class="main">

          @yield('content')

        </main>

        @if (App\display_sidebar())

          <aside class="sidebar">

            @include('partials.sidebar')

          </aside>

        @endif
        
      </div>

    </div>

    @php 
        do_action('get_footer') 
    @endphp
    
    @include('partials.footer')

    @php wp_footer() @endphp
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>

  </body>

</html>
