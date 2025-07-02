<!-- Sidebar -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand px-4 py-3 m-0" href="/" target="_blank">
      <img src="/static/lib/material-dashboard/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
      <span class="ms-1 text-sm text-dark">Salary Generator</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0 mb-2">

  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <?php if (isset($nav) && is_array($nav)): ?>
        <?php foreach ($nav as $item): ?>
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?= route($item['route']) ?>">
              <i class="material-symbols-rounded opacity-5"><?= $item['icon'] ?></i>
              <span class="nav-link-text ms-1"><?= $item['label'] ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>

      <li class="nav-item mt-3">
        <a class="btn btn-sm bg-gradient-dark w-100" href="@route('auth.logout')">Logout</a>
      </li>
    </ul>
  </div>
</aside>
