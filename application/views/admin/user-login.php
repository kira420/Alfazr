<?php $this->load->view('admin/components/page_head'); ?>
<body class="cyan">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <div id="login-page" class="row">
      <div class="col s12 z-depth-4 card-panel">
        <form class="login-form">
          <div class="row">
            <div class="input-field col s12 center">
              <img src="../../images/logo/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
              <p class="center login-form-text">Material Design Admin Template</p>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">person_outline</i>
              <input id="username" type="text">
              <label for="username" class="center-align">Username</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input id="password" type="password">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m12 l12 ml-2 mt-3">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <a href="index.html" class="btn waves-effect waves-light col s12">Login</a>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
            </div>
          </div>
        </form>
      </div>
    </div>
<?php $this->load->view('admin/components/page_tail'); ?>