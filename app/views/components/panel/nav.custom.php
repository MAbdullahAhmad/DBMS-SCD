
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur"
  data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <?php
        if (isset($breadcrumb) && is_array($breadcrumb) && !empty($breadcrumb)){
          ?>
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <?php foreach ($breadcrumbs as $crumb): ?>
                <li class="breadcrumb-item text-sm<?= $crumb['active'] ? ' text-dark active' : '' ?>"<?= $crumb['active'] ? ' aria-current="page"' : '' ?>>
                  <?php if ($crumb['active']): ?>
                    <?= htmlspecialchars($crumb['label']) ?>
                  <?php else: ?>
                    <a class="opacity-5 text-dark" href="<?= htmlspecialchars($crumb['url']) ?>">
                      <?= htmlspecialchars($crumb['label']) ?>
                    </a>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ol>
          <?php
        }
      ?>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
      <ul class="navbar-nav d-flex align-items-center  justify-content-end">
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
            <i class="material-symbols-rounded">account_circle</i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->