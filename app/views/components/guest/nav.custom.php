<?php

// use function Core\Util\url;

?>

<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 p-2 start-0 end-0 mx-4">
        <div class="container-fluid px-0">
          
          <!-- Logo -->
          <a class="navbar-brand font-weight-bolder ms-sm-3 text-sm"
            href="https://demos.creative-tim.com/material-kit/index" rel="tooltip"
            title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
            Salary Generator
          </a>

          <!-- Responsiveness -->
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>

          <!-- Links -->
          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
              <!-- GitHub -->
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="https://github.com/MAbdullahAhmad/DBMS-SCD"
                  target="_blank">
                  <i class="fa fa-github me-1"></i>
                  <p class="d-inline text-sm z-index-1 font-weight-semibold" data-bs-toggle="tooltip"
                    data-bs-placement="bottom" title="Star us on Github">GitHub</p>
                </a>
              </li>

              <!-- Login -->
              <li class="nav-item my-auto ms-3 ms-lg-0">
                <!-- Check if logged in -->
                 <?php
                  if(isset($is_logged_in) && $is_logged_in) {
                    ?>
                      <a href="{{ $home_url ?? '' }}" class="btn  bg-gradient-dark  mb-0 mt-2 mt-md-0">{{ $home_label ?? '' }}</a>
                      <?php
                  } else {
                    ?>
                      <a href="@route('test.id', 31)" class="btn  bg-gradient-dark  mb-0 mt-2 mt-md-0">Login</a>
                    <?php
                  }
                 ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>