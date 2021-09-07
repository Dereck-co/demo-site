
<?php $this->extend('layout/default'); ?>

<?php $this->section('head'); ?>

<?php $this->endSection(); ?>

<?php $this->section('content'); ?>

    <section class="flexslider">
      <ul class="slides">
        
        <li style="background-image: url(/img/slider_2.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">About Us</h1>
                  <p class="probootstrap-subheading">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>
  <?
    $i = 0;
    $i++;
    echo $i;
  ?>

    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2>關於我們</h2>
          </div>
        </div>
      
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
            <a href="#" class="probootstrap-team">
              <img src="/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded">
              <div class="probootstrap-team-info">
                <h3>關於梓陽<span class="position">Co-Founder / Tech</span></h3>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
            <a href="#" class="probootstrap-team">
              <img src="/img/person_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded">
              <div class="probootstrap-team-info">
                <h3>關於冠德<span class="position">Co-Founder / Creative</span></h3>
              </div>
            </a>
          </div>
        

        </div>
      </div>
    </section>
<?php $this->endSection(); ?>