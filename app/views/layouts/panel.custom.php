<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/static/lib/material-dashboard/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/static/lib/material-dashboard/img/favicon.png">
    <title>Panel | Salary Generator | @place('title')</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="/static/lib/material-dashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/static/lib/material-dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/static/lib/material-dashboard/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
  </head>

  <body class="g-sidenav-show  bg-gray-100">
    @include('components.panel.aside')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      @include('components.panel.nav')
      <div class="container-fluid py-2">
        @place('content')
        @include('components.panel.footer')
      </div>
    </main>

    <!--   Core JS Files   -->
    <script src="/static/lib/material-dashboard/js/core/popper.min.js"></script>
    <script src="/static/lib/material-dashboard/js/core/bootstrap.min.js"></script>
    <script src="/static/lib/material-dashboard/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/static/lib/material-dashboard/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/static/lib/material-dashboard/js/material-dashboard.min.js?v=3.2.0"></script>
  </body>

</html>