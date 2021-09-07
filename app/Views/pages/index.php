<?php $this->extend('layout/default'); ?>

<?php $this->section('content'); ?>

    
    <section class="flexslider">
      <ul class="slides">
        <li style="background-image: url(/img/slider_1.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">We Create Interfaces</h1>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(/img/slider_2.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">We Design Powerful Experiences</h1>
                </div>
              </div>
            </div>
          </div>
          
        </li>
        <li style="background-image: url(/img/slider_3.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">We Bring Ideas To Life</h1>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>
    <section class="probootstrap-section probootstrap-bg-white probootstrap-zindex-above-showcase">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
            <h2>Our Services</h2>
          </div>
        </div>
        <!-- END row -->
        <div class="row probootstrap-gutter60">
          <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
            <div class="service hover_service text-center">
            <div>
              <a  href="home/auth1">
              <img id="author1" class="auryang" src="/img/aur_yang.jpg" alt="img crash">
              </a>
            </div>
              <div class="text">
                <h3>About Author yang</h3>
                <p>This is about my web page</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
            <div class="service hover_service text-center">
              <div class="icon"><i class="icon-presentation"></i></div>
              <div class="text">
                <h3>Business</h3>
                <p>This is a commodity platform being tested and our first construction</p>
              </div>
            </div>
          </div>

        <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
          <div class="service hover_service text-center">
          <div>
            <a  href="home/auth2">
            <img id="author2" class="aurde" src="/img/aur_kuan_de.jpg" alt="img crash">
            </a>
          </div>
            <div class="text">
              <h3>About Author kuan_de</h3>
              <p>This is about my web page</p>
            </div>
          </div>
        </div>
      </div>
  </section>

    <section class="probootstrap-section  probootstrap-bg-white">
      <div class="owl-carousel owl-work">
        <div class="item carouselfixed">
            <img src="/img/food1.jpg" alt="image crash">
        </div>
        <div class="item carouselfixed">
            <img src="/img/phone2.jpg" alt="image crash">
        </div>
        <div class="item carouselfixed">
            <img src="/img/food3.jpg" alt="image crash">
        </div>
        <div class="item carouselfixed">
            <img src="/img/juice4.jpg" alt="image crash">
        </div>
        <div class="item carouselfixed">
            <img src="/img/clothes5.jpg" alt="image crash">
        </div>
        <div class="item carouselfixed">
            <img src="/img/games.jpg" alt="image crash">
        </div>
      </div>
    </section>

<?php echo $this->include('component/testimonial'); ?>
    
<?php $this->endSection(); ?>