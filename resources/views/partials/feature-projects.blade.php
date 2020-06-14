<section class="projects section-container" id="project-section">
    <h3 class="section-header project">Projects</h3>

    @if (have_rows('project'))

        @while (have_rows('project')) @php the_row() @endphp
            <h2 class="title">{!! get_sub_field('name') !!}</h2>
            <div class="container" id="music-test">
                <div class="img-container">
                    <a href="#" class="img-link" id="music-test-img">
                        <img src="{!! get_sub_field('featured_image') !!}" alt="">
                    </a>
                </div>
                <div class="project-info">
                    <div class="description">

                        {!! get_sub_field('description') !!}

                    </div>
                @if (have_rows('links'))

                    @while (have_rows('links')) @php the_row() @endphp
                        <a href="{!! get_sub_field('link') !!}" target="_blank"><i class="fab fa-github"></i>{!! get_sub_field('title') !!}</a>
                    @endwhile

                @endif
                </div>
            </div>
            <hr/>
        @endwhile
        
    @endif
</section>