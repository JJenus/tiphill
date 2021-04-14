<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<body class="blog-author bg-gray-100">
<?=view('temp/_navbar')?>
<section class="py-sm-7 pt-5 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 mx-auto">
          <div class="row py-lg-7 pt-5">
            <div class="col-lg-3 col-md-5 position-relative my-auto">
              <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2" src="../assets/img/awesome.jpeg">
            </div>
            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
              <div class=" align-items-center mb-2">
                <h4 class=""><?php echo $user->username .' '. $user->id; ?> </h4>
                <h5 class="font-size-xs text-info font-weight-light">Welcome to tiphill, have fun. <?php echo $user->id ?></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Testimonials w/ user image & text & info -->
  <!-- START Blogs w/ 4 cards w/ image & text & link -->
  <section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="mb-3">Active Tickets</h5>
              <div class="list-group list-group-flush" >
                <?php if (! empty($tickets)) : ?>

                  <?php foreach ($tickets as $ticket): ?>
            
                      <a href="<?php echo base_url(). '/ticket/'.$ticket->ticket ?>" class=" btn btn-primary d-flex justify-content-between align-items-center ">
                        <?= esc($ticket->ticket) ?> 
                       <!-- <span class="badge badge-success badge-pill"><?= esc(date("d M, Y", strtotime($ticket->exp_date)) ) ?></span> -->
                      </a> 
                      
                  <?php endforeach; ?>
                <?php else : ?>

                    <h3 class="text-center">No active ticket </h3>

                <?php endif ?>
              
               
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3 ">
          <div class="card">
            <div class="card-body">
              <h5 class="mb-3">Expired Tickets</h5>
              <div class="list-group list-group-flush" >
                <?php if (! empty($expired)) : ?>

                  <?php foreach ($expired as $ticket): ?>
            
                      <a class=" btn btn-outline-danger d-flex justify-content-between align-items-center ">
                        <?= esc($ticket->ticket) ?> 
                        <!-- <span class="badge badge-success badge-pill"><?= esc(date("d M, Y", strtotime($ticket->exp_date)) ) ?></span> -->
                      </a> 
                      
                  <?php endforeach; ?>
                <?php else : ?>

                    <h3 class="text-center">No Expired ticket </h3>

                <?php endif ?> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?= $this->endSection() ?>
