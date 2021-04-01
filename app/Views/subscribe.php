<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<body class="sign-in-illustration">
  <?=view('temp/_navbar')?>
  
  <section>
    <div class="page-header section-height-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Subscribe to Ticket </h4>
                <p class="mb-0">Enter username and type</p>
              </div>
              <div class="card-body">
                
                <?= view('temp/_message_block') ?>
                
                <form role="form" action="<?= route_to('subscribe') ?>" method="post">
                  <?= csrf_field() ?>
                  
                  <div class="mb-3">
                    <input value="<?= old('username') ?>" name="username" type="text" class="form-control form-control-lg  <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="ticket username" aria-label="Email" aria-describedby="email-addon">
                    <div class="invalid-feedback">
      								<?= session('errors.username') ?>
      							</div> 
                  </div>
                  
                  <div class="mb-3">
                    <select class="form-select" multiple name="tickets[]">
                    <?php foreach ($groups as $group) {
                       echo '<option value="'.$group->name.'">'.$group->name.'</option>';
                    }?>
                      
                    </select>
                    <div class="invalid-feedback">
      								<?= session('errors.tickets') ?>
      							</div> 
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">subscribe</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                
                <p class="mb-4 text-sm mx-auto">
                  Create ticket?
                  <a href="<?= base_url() ?>/admin/create_ticket" class="text-primary text-gradient font-weight-bold">Asssign</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2" src="assets/img/illustrations/chat.png">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
              <p class="text-white">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?= $this->endSection() ?> 