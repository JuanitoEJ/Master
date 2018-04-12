    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        @foreach($calltac as $calltac)

        <h3>{{ $calltac->titulo }}</h3>
        <p>{{ $calltac->description }}</p>
        @endforeach
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section><!-- #call-to-action -->



