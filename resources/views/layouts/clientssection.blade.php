    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>NUESTROS CLIENTES</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          @foreach( $client as $photo )
            <img src="{{ $photo->file }}" alt="">
          @endforeach
        </div>

      </div>
    </section><!-- #clients -->