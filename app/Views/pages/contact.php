<?php $this->extend('layout/default'); ?>

<?php $this->section('head'); ?>

<?php $this->endSection(); ?>

<?php $this->section('content'); ?>

<?php 
  $user = new \App\Entities\User();
  $isLogin = $user->isLogin();

  if($isLogin){//如果登入
    $currentUser = ($isLogin) ? $user->getCurrentUser() : null; //抓實體session
    $partOfEmail = preg_replace('/(.+)@.+/', '$1' ,$currentUser->email); //取@前的字串
    
  }
?>

    <section class="flexslider">
      <ul class="slides">
        
        <li style="background-image: url(/img/slider_3.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">Get In Touch</h1>
                  <p class="probootstrap-subheading">Let's have a chat</p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-5 probootstrap-animate" data-animate-effect="fadeIn">
            <h2>Drop us a line</h2>
            <form id="contactForm" method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="username">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Submit Form">
              </div>
            </form>
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate" data-animate-effect="fadeIn">
            <h2>Get in touch</h2>
            <p>If there has any question, please contact me right away. Thanks.</p>
            
            <h4>KUAN_TE</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-email"></i><span>a0920210341@gmail.com</span></li>
              <li><i class="icon-phone"></i><span>0920210341</span></li>
            </ul>
            
            <h4>ZIYANG XU</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-email"></i><span>d1064241037@gm.lhu.edu.tw</span></li>
              <li><i class="icon-phone"></i><span>0920662385</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <script>
        // loginForm.addEventListener('submit', function(event) {
        //     console.log('on submit!!');

        //     event.preventDefault();
        // });



        contactForm.onsubmit = function(event) {

            let form = event.target;
            let formData = new FormData(form);
            let postData = Object.fromEntries(formData);
            console.log('form', form);
            console.log('postData', postData);

            fetch('/home/toContact', {
                body: JSON.stringify(postData),
                cache: 'no-cache',
                method: 'POST',
                headers: {
                    'content-type': 'application/json ',
                    "X-Requested-With": "XMLHttpRequest"
                },
            }).then(response => response.json()).then(doResultContant);
            event.preventDefault();
        }
        function doResultContant(res) {
            console.log('doResult:', res);
            if(res.result){
              location.reload();
              alert("我們已收到您的留言"));
            }else{
              let msg = Object.values(res.errMsg).join('\n');
              alert(msg);
            }
        }
    </script>

<?php $this->endSection(); ?>