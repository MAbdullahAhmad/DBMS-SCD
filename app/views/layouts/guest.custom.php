<!--
=========================================================
* Material Kit 3 - v3.1.0
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="/static/lib/material-kit/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/static/lib/material-kit/img/favicon.png">

  <title>Salary Generator | @place('title')</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />

  <!-- Nucleo Icons -->
  <link href="/static/lib/material-kit/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/static/lib/material-kit/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />

  <!-- CSS Files -->
  <link id="pagestyle" href="/static/lib/material-kit/css/material-kit.css?v=3.1.0" rel="stylesheet" />


</head>

<body class="index-page bg-gray-200">

  @include('components.guest.nav')
  @include('components.guest.landing')

  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    @include('components.guest.features')
    @include('components.guest.download-cattr')
    @include('components.guest.testimonials')
  </div>

  @include('components.guest.footer')

  <!-- Scripts -->
  <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
  <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="/static/lib/material-kit/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/static/lib/material-kit/js/plugins/countup.min.js"></script>
  <script src="/static/lib/material-kit/js/plugins/choices.min.js"></script>
  <script src="/static/lib/material-kit/js/plugins/prism.min.js"></script>
  <script src="/static/lib/material-kit/js/plugins/highlight.min.js"></script>
  <script src="/static/lib/material-kit/js/plugins/rellax.min.js"></script>
  <script src="/static/lib/material-kit/js/plugins/tilt.min.js"></script>
  <script src="/static/lib/material-kit/js/plugins/choices.min.js"></script>
  <script src="/static/lib/material-kit/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>

</body>

</html>