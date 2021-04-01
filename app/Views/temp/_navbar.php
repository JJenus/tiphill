<!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="<?= base_url() ?>" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
              TIPS HILL 
            </a>
            <a href="<?= route_to('logout') ?>" class="btn btn-sm  bg-gradient-dark  btn-round mb-0 ms-auto d-lg-none d-block">logout</a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0" id="navigation">
              <ul class="navbar-nav navbar-nav-hover mx-auto">
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                    Pages
                    <img src="<?php if(isset($dir)){echo $dir;} ?>assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
                  </a>
                  <div class="dropdown-menu dropdown-menu-animation dropdown-xl p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                    <div class="">
                      <a href="<?php echo base_url()?>/admin/subscribe" class="dropdown-item border-radius-md">
                        Asssign ticket
                      </a>
                      <a href="<?php echo base_url()?>/admin/users" class="dropdown-item border-radius-md">
                        Users
                      </a>
                      <a href="<?php echo base_url() ?>/admin/create_ticket" class="dropdown-item border-radius-md">
                        Create ticket
                      </a>
                    </div>
                  </div>
                </li>
                
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                    Account
                    <img src="<?php if(isset($dir)){echo $dir;} ?>assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="<?= route_to('logout')?>" class="btn btn-sm  bg-gradient-dark  btn-round mb-0 me-1" >Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>