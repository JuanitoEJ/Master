 <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators">
          @foreach( $carrousel as $photo )
              <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
          @endforeach
        </ol>

        <div class="carousel-inner" role="listbox">
        @foreach( $carrousel as $photo )
          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <div class="carousel-background"><img src="{{ $photo->file }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>{{ $photo->titulo }}</h2>
                 <p>{{ $photo->description }}</p>
                <a href="#featured-services" class="btn-get-started scrollto">Comenzar</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

 