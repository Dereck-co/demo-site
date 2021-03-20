
<?php 
  $user = new \App\Entities\User();
  $isLogin = $user->isLogin();

  if($isLogin){//如果登入
    $currentUser = ($isLogin) ? $user->getCurrentUser() : null; //抓實體session
    $partOfEmail = preg_replace('/(.+)@.+/', '$1' ,$currentUser->email); //取@前的字串
    
  }
?>

    <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" title="uiCookies:Stack">Stack</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home</a></li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
              <ul class="dropdown-menu">
                <li><a href="/home/about">About Us</a></li>
                <li><a href="/home/portfolio">Portfolio</a></li>
                <li><a href="/home/portfoliosingle">Portfolio Single</a></li>
                <!-- <li class="dropdown-submenu dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                  </ul>
                </li> -->
                <li><a href="/home/services">Services</a></li>
              </ul>
            </li>
            <li><a href="/home/contact">Contact</a></li>
<?php if(!$isLogin): ?>
            <li class="probootstra-cta-button"><a href="#" class="btn" data-toggle="modal" data-target="#loginModal">Log in</a></li>
            <li class="probootstra-cta-button last"><a href="#" class="btn btn-ghost" data-toggle="modal" data-target="#signupModal">Sign up</a></li>
<?php else: ?>
            <li class="loginName"><a><?php echo $partOfEmail?></a></li>
            <li class="probootstra-cta-button last"><a href="/home/logout" class="btn">Logout</a></li>
<?php endif ?>
          </ul>
        </div>
      </div>
    </nav>