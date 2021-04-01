<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<style >
  section{
    padding-top : 120px;
  }
</style>
<body class="sign-up-illustration">
  <!-- Navbar -->
  <?= view('temp/_navbar') ?> 
  <section>
    <div class="page-header section-height-100">
      <div class="container">
        <div class="row">
          
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Sign Up</h4>
                <p class="mb-0">Enter your username, email and password to register</p>
              </div>
              <div class="card-body pb-3">
                <?= view('temp/_message_block') ?>
                
                <form role="form" action="<?= route_to('attemptRegister') ?>" method="post">
                  <?= csrf_field() ?>
                        
                  <label>Username</label>
                  <div class="mb-3">
                    <input value="<?= old('username') ?>" name="username"  type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?> " placeholder="Name" aria-label="Name" aria-describedby="name-addon">
                  </div>
                  <label>Email</label>
                  <div class="mb-3">
                    <input value="<?= old('email') ?>" name="email"  type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <label>Password</label>
                  <div class="mb-3">
                    <input value="<?= old('password') ?>" name="password"  type="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                  </div>
                  <label>Confirm password</label>
                  <div class="mb-3">
                    <input name="pass_confirm"  type="password" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                  </div>
                  <div class="form-check form-check-info text-left">
                    <input value="<?= old('pass_confirm') ?>" required name="terms"  class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree the <a href="<?= route_to('terms') ?>" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Sign up</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-sm-4 px-1">
                <p class="mb-4 mx-auto">
                  Already have an account?
                  <a href="<?= route_to('login') ?>" class="text-primary text-gradient font-weight-bold">Sign in</a>
                </p>
              </div>
            </div>
          </div>
          
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="../../assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2" src="../../assets/img/illustrations/rocket-white.png">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder">Your journey starts here</h4>
              <p class="text-white">Just as it takes a company to sustain a product, it takes a community to sustain a protocol.</p>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </section>
  <?= $this->endSection() ?> 