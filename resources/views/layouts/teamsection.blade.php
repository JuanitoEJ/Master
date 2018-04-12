    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>EQUIPO</h3>
          <p>Contamos con un equipo de profesionales de renombre en el area legal</p>
        </div>

        <div class="row">
          @foreach($team as $equipo)

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{ $equipo->file }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{ $equipo->name }}</h4>
                  <span>{{ $equipo->position }}</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
         

        </div>

      </div>
    </section><!-- #team -->
