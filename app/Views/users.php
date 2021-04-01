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
                <h4 class=""><?php echo $user->username?> </h4>
                <h5 class="font-size-xs font-weight-light">Alabama235@gmail.com</h5>
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
              <h5 class="mb-3">Available Tickets</h5>
              <div class="list-group list-group-flush" >
                <?php if (! empty($groups)) : ?>

                  <?php foreach ($groups as $group): ?>
            
                      <a  href="<?php echo base_url(). '/ticket/'. $group->name ?>" class="ticket btn btn-outline-secondary d-flex justify-content-between align-items-center ">
                        <?= esc($group->name) ?> 
                        <span class="badge badge-success badge-pill">
                          <?= esc($group->description) ?> 
                        </span>
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
              <h5 class="mb-3">Users and subscriptions </h5>
              <?= view('temp/_message_block') ?>
              <ul class="list-group list-group-flush" >
                <?php if (! empty($users)) : ?>

                  <?php foreach ($users as $data): ?>
            
                      <li class=" list-group-item mb-4 ">
                        <h5>
                          <?= esc($data->username) ?>
                        </h5>
                        <div class="pl-4">
                        <div class="list-group list-group-flush" >
                           <h6 class="text-center text-danger mt-4 mb-2">Expired</h6>  
                          <?php if (! empty($data->active['expired'])) : ?>
                            <?php foreach ($data->active['expired'] as $ticket): ?>
                              <a data-toggle="collapse" data-target="#<?php echo $ticket->ticket . $ticket->user_id ?>"  class="btn ticket btn-outline-info d-flex justify-content-between align-items-center ">
                                  <h6 class="h6 d-inline-block"> 
                                    <?= esc($ticket->ticket) ?> 
                                  </h6>
                                  <span class="badge badge-warning badge-pill">
                                    <?=  esc(date("d M, Y", strtotime($ticket->exp_date)) ) ?>
                                  </span>
                              </a>
                              <form class="p-2 mb-3 d-flex justify-content-between align-items-center "  id="" role="form" action="<?php echo base_url() ?>/deletesub" method="post">
                                  <?= csrf_field() ?> 
                                  <input class="d-none" type="text" name="user_id" value="<?= esc($ticket->user_id) ?>" >
                                  <input class="d-none" type="text" name="ticket" value="<?= esc($ticket->ticket) ?>" >
                                  
                                  <div class="form-check form-check-info text-left">
                                    <input value="<?= old('pass_confirm') ?>" required name="delete"  class="form-check-input" type="checkbox" id="flexCheckDefault" >
                                    <label class="form-check-label" for="flexCheckDefault">
                                      delete? 
                                    </label>
                                  </div>
                                  
                                  <div class="text-center"> 
                                      <button type="submit" class="btn btn-sm bg-gradient-danger w-100">
                                        Del
                                      </button>
                                  </div> 
                                </form>
                                
                              <form class="collapse" id="<?php echo $ticket->ticket . $ticket->user_id   ?>" role="form" action="<?php echo base_url() ?>/updatesub" method="post">
                                <?= csrf_field() ?> 
                                <input class="d-none" type="text" name="user_id" value="<?= esc($ticket->user_id) ?>" >
                                <input class="d-none" type="text" name="ticket" value="<?= esc($ticket->ticket) ?>" >
                                <input required name="date" class="form-control datepicker" placeholder="Please select date" type="text" onfocus="focused(this)" onfocusout="defocused(this)"> 
                                <div class="text-center"> 
                                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Update</button>
                                </div> 
                              </form>
                            <?php endforeach; ?>
                          <?php else : ?>
                              <h6 class="text-center">No Expired ticket </h6> 
                          <?php endif ?>
                          
                          <h6 class="text-center text-success mt-4 mb-2">Active</h6>  
                          <?php if (! empty($data->active['active'])) : ?>
                            <?php foreach ($data->active['active'] as $ticket): ?>
                             
                              <a type="button" aria-expanded="false" data-toggle="collapse" data-target="#<?php echo $ticket->ticket . $ticket->user_id ?>" class="btn ticket btn-outline-success d-flex justify-content-between align-items-center ">
                                  <h6 class="h6"> 
                                    <?= esc($ticket->ticket) ?> 
                                  </h6>
                                  <span class="badge badge-success badge-pill">
                                    <?=  esc(date("d M, Y", strtotime($ticket->exp_date)) ) ?>
                                  </span>
                              </a>
                              <form class="p-2 mb-3 d-flex justify-content-between align-items-center "  id="" role="form" action="<?php echo base_url() ?>/deletesub" method="post">
                                  <?= csrf_field() ?> 
                                  <input class="d-none" type="text" name="user_id" value="<?= esc($ticket->user_id) ?>" >
                                  <input class="d-none" type="text" name="ticket" value="<?= esc($ticket->ticket) ?>" >
                                  
                                  <div class="form-check form-check-info text-left">
                                    <input value="<?= old('pass_confirm') ?>" required name="delete"  class="form-check-input" type="checkbox" id="" >
                                    <label class="form-check-label" for="flexCheckDefault">
                                      delete? 
                                    </label>
                                  </div>
                                  
                                  <div class="text-center"> 
                                      <button type="submit" class="btn btn-sm bg-gradient-danger w-100">
                                        Del
                                      </button>
                                  </div> 
                                </form>
                                
                              <div class="my-3 collapse" id="<?php echo $ticket->ticket . $ticket->user_id  ?>" >
                              <form role="form" action="<?php echo base_url() ?>/updatesub" method="post">
                                <?= csrf_field() ?> 
                                <input class="d-none" type="text" name="user_id" value="<?= esc($ticket->user_id) ?>" >
                                <input class="d-none" type="text" name="ticket" value="<?= esc($ticket->ticket) ?>" >
                                <input required name="date" class="form-control datepicker" placeholder="Please select date" type="text" onfocus="focused(this)" onfocusout="defocused(this)"> 
                                <div class="text-center"> 
                                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Update</button>
                                </div> 
                              </form>
                              </div>
                              
                            <?php endforeach; ?>
                          <?php else : ?>
                              <h6 class="text-center">No Active ticket </h6> 
                          <?php endif ?> 
                       </div> 
                       </div>
                      </li> 
                       
                      
                  <?php endforeach; ?>
                <?php #else : ?>

                    <!-- <h3 class="text-center">No Expired ticket </h3> -->

                <?php endif ?> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
                         
  </section>
  <?= $this->endSection() ?> 
  
<?= $this->section('pageScripts') ?>

<script>
  $(function () {
    flatpickr(".datepicker", {
      dateFormat: "Y-m-d",
      defaultDate: "today" 
    });
    
    $('.ticket').click(function(){
      $($(this).data('target')).toggleClass('collapse')
    } );
    
    console.log('Response to....')
  });
</script>

<?= $this->endSection() ?>

