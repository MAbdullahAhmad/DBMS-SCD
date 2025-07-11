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

    <section class="pt-3 pb-4" id="count-stats">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 mx-auto py-3">
            <div class="row">
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-dark"><span id="state1" countTo="70">0</span>+</h1>
                  <h5 class="mt-3">Coded Elements</h5>
                  <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards, you are
                    covered</p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-dark"> <span id="state2" countTo="15">0</span>+</h1>
                  <h5 class="mt-3">Design Blocks</h5>
                  <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity
                  </p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-dark" id="state3" countTo="4">0</h1>
                  <h5 class="mt-3">Pages</h5>
                  <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made pages for your
                    website</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="my-5 py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
            <div class="rotating-card-container">
              <div class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">
                <div class="front front-background"
                  style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                  <div class="card-body py-7 text-center">
                    <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                    <h3 class="text-white">Feel the <br /> Material Kit</h3>
                    <p class="text-white opacity-8">All the Bootstrap components that you need in a development have
                      been re-design with the new look.</p>
                  </div>
                </div>
                <div class="back back-background"
                  style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                  <div class="card-body pt-7 text-center">
                    <h3 class="text-white">Discover More</h3>
                    <p class="text-white opacity-8"> You will save a lot of time going from prototyping to
                      full-functional code because all elements are implemented.</p>
                    <a href=".//sections/page-sections/hero-sections.html" target="_blank"
                      class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 ms-auto">
            <div class="row justify-content-start">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-symbols-rounded text-gradient text-success text-3xl">content_copy</i>
                  <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
                  <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything
                    inside our documentation.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-symbols-rounded text-gradient text-success text-3xl">flip_to_front</i>
                  <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
                  <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass variables and
                    mixins.</p>
                </div>
              </div>
            </div>
            <div class="row justify-content-start mt-5">
              <div class="col-md-6 mt-3">
                <i class="material-symbols-rounded text-gradient text-success text-3xl">price_change</i>
                <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
                <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start
                  with our Design System.</p>
              </div>
              <div class="col-md-6 mt-3">
                <div class="info">
                  <i class="material-symbols-rounded text-gradient text-success text-3xl">devices</i>
                  <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
                  <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given
                    resolution.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="my-5 py-5">
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-6">
              <span class="badge bg-success mb-3">Infinite combinations</span>
              <h2 class="text-dark mb-0">Huge collection of sections</h2>
              <p class="lead">We have created multiple options for you to put together and customise into pixel perfect
                pages. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Elements</h3>
              <h6 class="text-secondary font-weight-normal pe-3">70+ carefully crafted small elements that come with
                multiple colors and shapes. These are only a few of them.</h6>
            </div>
          </div>

          <div class="col-lg-9">
            <div class="row mt-3">
              <!-- Buttons color -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Buttons color</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-btn-color"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-btn-color" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-btn-color">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-3 mt-3">
  <div class="col-12 mx-auto">
    
    <button type="button" class="btn btn-primary w-auto me-1 mb-0">Primary</button>
    
    <button type="button" class="btn btn-secondary w-auto me-1 mb-0">Secondary</button>
    
    <button type="button" class="btn btn-info w-auto me-1 mb-0">Info</button>
    
    <button type="button" class="btn btn-success w-auto me-1 mb-0">Success</button>
    
    <button type="button" class="btn btn-warning w-auto me-1 mb-0">Warning</button>
    
    <button type="button" class="btn btn-danger w-auto me-1 mb-0">Danger</button>
    
    <button type="button" class="btn btn-light w-auto me-1 mb-0">Light</button>
    
    <button type="button" class="btn btn-dark w-auto me-1 mb-0">Dark</button>
    
    <button type="button" class="btn btn-white w-auto me-1 mb-0">White</button>
    
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-btn-color">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-12 mx-auto"</span><span class="nt">&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-light w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-dark w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-white w-auto me-1 mb-0"</span><span class="nt">&gt;</span>White<span class="nt">&lt;/button&gt;</span>
    
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Buttons gradient -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Buttons gradient</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab"
                                href="#preview-btn-gradient" role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-btn-gradient"
                                role="tab" aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-btn-gradient">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-3 mt-3">
  <div class="col-12 mx-auto">
    
    <button type="button" class="btn bg-gradient-primary w-auto me-1 mb-0">Primary</button>
    
    <button type="button" class="btn bg-gradient-secondary w-auto me-1 mb-0">Secondary</button>
    
    <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0">Info</button>
    
    <button type="button" class="btn bg-gradient-success w-auto me-1 mb-0">Success</button>
    
    <button type="button" class="btn bg-gradient-warning w-auto me-1 mb-0">Warning</button>
    
    <button type="button" class="btn bg-gradient-danger w-auto me-1 mb-0">Danger</button>
    
    <button type="button" class="btn bg-gradient-light w-auto me-1 mb-0">Light</button>
    
    <button type="button" class="btn bg-gradient-dark w-auto me-1 mb-0">Dark</button>
    
    <button type="button" class="btn bg-gradient-white w-auto me-1 mb-0">White</button>
    
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-btn-gradient">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-12 mx-auto"</span><span class="nt">&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-primary w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-secondary w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-info w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-success w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-warning w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-danger w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-light w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-dark w-auto me-1 mb-0"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-white w-auto me-1 mb-0"</span><span class="nt">&gt;</span>White<span class="nt">&lt;/button&gt;</span>
    
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Buttons outline -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Buttons outline</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-btn-outline"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-btn-outline"
                                role="tab" aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-btn-outline">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-3 mt-3">
  <div class="col-12 mx-auto">
    
    <button type="button" class="btn btn-outline-primary mb-0">Primary</button>
    
    <button type="button" class="btn btn-outline-secondary mb-0">Secondary</button>
    
    <button type="button" class="btn btn-outline-info mb-0">Info</button>
    
    <button type="button" class="btn btn-outline-success mb-0">Success</button>
    
    <button type="button" class="btn btn-outline-warning mb-0">Warning</button>
    
    <button type="button" class="btn btn-outline-danger mb-0">Danger</button>
    
    <button type="button" class="btn btn-outline-light mb-0">Light</button>
    
    <button type="button" class="btn btn-outline-dark mb-0">Dark</button>
    
    <button type="button" class="btn btn-outline-white mb-0">White</button>
    
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-btn-outline">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-12 mx-auto"</span><span class="nt">&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-primary mb-0"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-secondary mb-0"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-info mb-0"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-success mb-0"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-warning mb-0"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-danger mb-0"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-light mb-0"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-dark mb-0"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/button&gt;</span>
    
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-white mb-0"</span><span class="nt">&gt;</span>White<span class="nt">&lt;/button&gt;</span>
    
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Buttons sizes -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Buttons sizes</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-btn-size"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-btn-size" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-btn-size">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-2 mt-3">
  <div class="col-12 mx-auto">
    <button type="button" class="btn bg-gradient-dark btn-sm me-2">Small</button>
    <button type="button" class="btn bg-gradient-dark w-auto me-2">Default</button>
    <button type="button" class="btn bg-gradient-dark btn-lg">Large</button>
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-btn-size">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-2 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-12 mx-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-dark btn-sm me-2"</span><span class="nt">&gt;</span>Small<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-dark w-auto me-2"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-dark btn-lg"</span><span class="nt">&gt;</span>Large<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Buttons icons -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Buttons icons</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-btn-icon"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-btn-icon" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-btn-icon">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <!-- Material Icons -->
          
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-2 mt-3">
  <div class="col-12 mx-auto">
    <button class="btn bg-gradient-dark btn-icon btn-sm" type="button">
      <div class="d-flex align-items-center">
        <i class="material-symbols-rounded me-2" aria-hidden="true">favorite</i>
        Small
      </div>
    </button>

    <button class="btn bg-gradient-dark btn-icon" type="button">
      <div class="d-flex align-items-center">
        <i class="material-symbols-rounded me-2" aria-hidden="true">favorite</i>
        Default
      </div>
    </button>

    <button class="btn bg-gradient-dark btn-icon btn-lg" type="button">
      <div class="d-flex align-items-center">
        <i class="material-symbols-rounded me-2" aria-hidden="true">favorite</i>
        Large
      </div>
    </button>
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-btn-icon">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-2 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-12 mx-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn bg-gradient-dark btn-icon btn-sm"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded me-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>favorite<span class="nt">&lt;/i&gt;</span>
        Small
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/button&gt;</span>

    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn bg-gradient-dark btn-icon"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded me-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>favorite<span class="nt">&lt;/i&gt;</span>
        Default
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/button&gt;</span>

    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn bg-gradient-dark btn-icon btn-lg"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded me-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>favorite<span class="nt">&lt;/i&gt;</span>
        Large
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Checkbox -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Checkbox</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-check"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-check" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-check">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-2 mt-3">
  <div class="col-3 mx-auto text-start">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Default checkbox
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
      <label class="form-check-label" for="flexCheckChecked">
        Checked checkbox
      </label>
    </div>
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-check">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard"><i
                            class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-2 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-3 mx-auto text-start"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">id=</span><span class="s">"flexCheckDefault"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"flexCheckDefault"</span><span class="nt">&gt;</span>
        Default checkbox
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">id=</span><span class="s">"flexCheckChecked"</span> <span class="na">checked</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"flexCheckChecked"</span><span class="nt">&gt;</span>
        Checked checkbox
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Radios -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Radios</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-radio"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-radio" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-radio">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-2 mt-3">
  <div class="col-3 mx-auto text-start">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
        Default radio
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
      <label class="form-check-label" for="flexRadioDefault2">
        Default checked radio
      </label>
    </div>
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-radio">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard"><i
                            class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-2 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-3 mx-auto text-start"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"flexRadioDefault"</span> <span class="na">id=</span><span class="s">"flexRadioDefault1"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"flexRadioDefault1"</span><span class="nt">&gt;</span>
        Default radio
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"flexRadioDefault"</span> <span class="na">id=</span><span class="s">"flexRadioDefault2"</span> <span class="na">checked</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"flexRadioDefault2"</span><span class="nt">&gt;</span>
        Default checked radio
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Switch simple -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Toggle</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-toggle"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-toggle" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-toggle">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="container py-3 mt-3">
  <div class="row">
    <div class="col-4 mx-auto">
      <div class="form-check form-switch ps-0">
        <input class="form-check-input ms-auto mt-1" type="checkbox" id="flexSwitchCheckDefault">
        <label class="form-check-label ms-2" for="flexSwitchCheckDefault">Remember me</label>
      </div>
    </div>
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-toggle">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard"><i
                            class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4 mx-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-switch ps-0"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input ms-auto mt-1"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"flexSwitchCheckDefault"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label ms-2"</span> <span class="na">for=</span><span class="s">"flexSwitchCheckDefault"</span><span class="nt">&gt;</span>Remember me<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Badges -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Badges</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-badges"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-badges" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-badges">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="container">
  <div class="row text-center py-3 mt-3">
    <div class="col-12">
      <span class="badge bg-gradient-dark">Primary</span>
      <span class="badge bg-gradient-secondary">Secondary</span>
      <span class="badge bg-gradient-success">Success</span>
      <span class="badge bg-gradient-danger">Danger</span>
      <span class="badge bg-gradient-warning">Warning</span>
      <span class="badge bg-gradient-info">Info</span>
      <span class="badge bg-gradient-light text-dark">Light</span>
      <span class="badge bg-gradient-dark">Dark</span>
    </div>
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-badges">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-12"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge bg-gradient-dark"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge bg-gradient-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge bg-gradient-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge bg-gradient-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge bg-gradient-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge bg-gradient-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge bg-gradient-light text-dark"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge bg-gradient-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Avatars -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Avatars</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-avatar"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-avatar" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-avatar">
                      <iframe width="100%" height="150px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-3 mt-3">
  <div class="col-12">
    <div class="avatar-group">
      <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
        <img alt="Image placeholder" src="/static/lib/material-kit/img/team-1.jpg">
      </a>
      <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
        <img alt="Image placeholder" src="/static/lib/material-kit/img/team-2.jpg">
      </a>
      <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
        <img alt="Image placeholder" src="/static/lib/material-kit/img/team-3.jpg">
      </a>
      <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
        <img alt="Image placeholder" src="/static/lib/material-kit/img/team-4.jpg">
      </a>
    </div>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          <script src="https://demos.creative-tim.com/material-kit/assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-avatar">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-12"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"avatar-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"avatar avatar-lg rounded-circle"</span> <span class="na">data-bs-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-bs-placement=</span><span class="s">"bottom"</span> <span class="na">title=</span><span class="s">"Ryan Tompson"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">alt=</span><span class="s">"Image placeholder"</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/team-1.jpg"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"avatar avatar-lg rounded-circle"</span> <span class="na">data-bs-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-bs-placement=</span><span class="s">"bottom"</span> <span class="na">title=</span><span class="s">"Romina Hadid"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">alt=</span><span class="s">"Image placeholder"</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/team-2.jpg"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"avatar avatar-lg rounded-circle"</span> <span class="na">data-bs-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-bs-placement=</span><span class="s">"bottom"</span> <span class="na">title=</span><span class="s">"Alexander Smith"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">alt=</span><span class="s">"Image placeholder"</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/team-3.jpg"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"avatar avatar-lg rounded-circle"</span> <span class="na">data-bs-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-bs-placement=</span><span class="s">"bottom"</span> <span class="na">title=</span><span class="s">"Jessica Doe"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">alt=</span><span class="s">"Image placeholder"</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/team-4.jpg"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Avatar sizes -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Avatar sizes</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-avatar-size"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-avatar-size"
                                role="tab" aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-avatar-size">
                      <iframe width="100%" height="150px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-3 mt-3">
  <div class="col-12">
    <a href="javascript:;" class="avatar avatar-xs rounded-circle">
      <img alt="Image placeholder" src="/static/lib/material-kit/img/team-4.jpg">
    </a>
    <a href="javascript:;" class="avatar avatar-sm rounded-circle">
      <img alt="Image placeholder" src="/static/lib/material-kit/img/team-4.jpg">
    </a>
    <a href="javascript:;" class="avatar rounded-circle">
      <img alt="Image placeholder" src="/static/lib/material-kit/img/team-4.jpg">
    </a>
    <a href="javascript:;" class="avatar avatar-lg rounded-circle">
      <img alt="Image placeholder" src="/static/lib/material-kit/img/team-4.jpg">
    </a>
    <a href="javascript:;" class="avatar avatar-xl rounded-circle">
      <img alt="Image placeholder" src="/static/lib/material-kit/img/team-4.jpg">
    </a>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          <script src="https://demos.creative-tim.com/material-kit/assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-avatar-size">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-12"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"avatar avatar-xs rounded-circle"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">alt=</span><span class="s">"Image placeholder"</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/team-4.jpg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"avatar avatar-sm rounded-circle"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">alt=</span><span class="s">"Image placeholder"</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/team-4.jpg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"avatar rounded-circle"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">alt=</span><span class="s">"Image placeholder"</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/team-4.jpg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"avatar avatar-lg rounded-circle"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">alt=</span><span class="s">"Image placeholder"</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/team-4.jpg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"avatar avatar-xl rounded-circle"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">alt=</span><span class="s">"Image placeholder"</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/team-4.jpg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Breadcrumbs -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Breadcrumbs</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-breadcrumbs"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-breadcrumbs"
                                role="tab" aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-breadcrumbs">
                      <iframe width="100%" height="200px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="container py-2 mt-2">
  <div class="row">
    <div class="col-8 mx-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Portfolio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Articles</li>
        </ol>
      </nav>
    </div>

  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-breadcrumbs">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard"><i
                            class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container py-2 mt-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-8 mx-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;/ol&gt;</span>
      <span class="nt">&lt;/nav&gt;</span>
      <span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Portfolio<span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;/ol&gt;</span>
      <span class="nt">&lt;/nav&gt;</span>
      <span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>Portfolio<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Articles<span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;/ol&gt;</span>
      <span class="nt">&lt;/nav&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Progress bars -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Progress bars</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-progress"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-progress" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-progress">
                      <iframe width="100%" height="200px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="container">
  <div class="row py-3 mt-4">
    <div class="col-8 mx-auto">
      <div class="progress mb-3">
        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-progress">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3 mt-4"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-8 mx-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress mb-3"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-primary"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress mb-3"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-secondary"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress mb-3"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress mb-3"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress mb-3"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress mb-3"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress mb-3"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-dark"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row pt-lg-6">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Typography</h3>
              <h6 class="text-secondary font-weight-normal pe-3">6+ elements that you need for text manipulation and
                insertion</h6>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row mt-3">
              <!-- Typography -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Font Family Serif</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-typo"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-typo" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-typo">
                      <iframe width="100%" height="400px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          
<div class="container-fluid text-sans-serif">
  <div class="row py-3 align-items-center">
    <div class="col-sm-3">
      <small class="text-uppercase font-weight-bold">Heading 1</small>
    </div>

    <div class="col-sm-9">
      <h1 class="mb-0">H1 Material Kit</h1>
    </div>
  </div>

  <div class="row py-3 align-items-center">
    <div class="col-sm-3">
      <small class="text-uppercase font-weight-bold">Heading 2</small>
    </div>

    <div class="col-sm-9">
      <h2 class="mb-0">H2 Material Kit</h2>
    </div>
  </div>

  <div class="row py-3 align-items-center">
    <div class="col-sm-3">
      <small class="text-uppercase font-weight-bold">Heading 3</small>
    </div>

    <div class="col-sm-9">
      <h3 class="mb-0">H3 Material Kit</h3>
    </div>
  </div>

  <div class="row py-3 align-items-center">
    <div class="col-sm-3">
      <small class="text-uppercase font-weight-bold">Heading 4</small>
    </div>

    <div class="col-sm-9">
      <h4 class="mb-0">H4 Material Kit</h4>
    </div>
  </div>

  <div class="row py-3 align-items-center">
    <div class="col-sm-3">
      <small class="text-uppercase font-weight-bold">Heading 5</small>
    </div>

    <div class="col-sm-9">
      <h5 class="mb-0">H5 Material Kit</h5>
    </div>
  </div>

  <div class="row py-3 align-items-center">
    <div class="col-sm-3">
      <small class="text-uppercase font-weight-bold">Heading 6</small>
    </div>

    <div class="col-sm-9">
      <h6 class="mb-0">H6 Material Kit</h6>
    </div>
  </div>

  <div class="row py-3 align-items-center">
    <div class="col-sm-3">
      <small class="text-uppercase font-weight-bold">Paragraph</small>
    </div>

    <div class="col-sm-9">
      <p class="mb-0">
        I will be the leader of a company that ends up being worth
        billions of dollars, because I got the answers. I understand
        culture. I am the nucleus. I think that&#39;s a responsibility that I
        have, to push possibilities, to show people, this is the level
        that things could be at.
      </p>
    </div>
  </div>

  <div class="row py-3 align-items-center">
    <div class="col-sm-3">
      <small class="text-uppercase font-weight-bold">Lead text</small>
    </div>

    <div class="col-sm-9">
      <p class="lead mb-0">
        I will be the leader of a company that ends up being worth
        billions of dollars, because I got the answers. I understand
        culture. I am the nucleus. I think that&#39;s a responsibility that I
        have, to push possibilities, to show people, this is the level
        that things could be at.
      </p>
    </div>
  </div>

  <div class="row py-3 align-items-center">
    <div class="col-sm-3">
      <small class="text-uppercase font-weight-bold">Small</small>
    </div>

    <div class="col-sm-9">
      <p class="text-sm mb-0">
        I will be the leader of a company that ends up being worth
        billions of dollars, because I got the answers. I understand
        culture. I am the nucleus. I think that&#39;s a responsibility that I
        have, to push possibilities, to show people, this is the level
        that things could be at.
      </p>
    </div>
  </div>

  <div class="row py-3 align-items-center">
    <div class="col-sm-3">
      <small class="text-uppercase font-weight-bold">Tiny</small>
    </div>

    <div class="col-sm-9">
      <p class="text-xs mb-0">
        I will be the leader of a company that ends up being worth
        billions of dollars, because I got the answers. I understand
        culture. I am the nucleus. I think that&#39;s a responsibility that I
        have, to push possibilities, to show people, this is the level
        that things could be at.
      </p>
    </div>
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-typo">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard"><i
                            class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid text-sans-serif"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3 align-items-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-uppercase font-weight-bold"</span><span class="nt">&gt;</span>Heading 1<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>H1 Material Kit<span class="nt">&lt;/h1&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3 align-items-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-uppercase font-weight-bold"</span><span class="nt">&gt;</span>Heading 2<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>H2 Material Kit<span class="nt">&lt;/h2&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3 align-items-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-uppercase font-weight-bold"</span><span class="nt">&gt;</span>Heading 3<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>H3 Material Kit<span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3 align-items-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-uppercase font-weight-bold"</span><span class="nt">&gt;</span>Heading 4<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>H4 Material Kit<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3 align-items-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-uppercase font-weight-bold"</span><span class="nt">&gt;</span>Heading 5<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>H5 Material Kit<span class="nt">&lt;/h5&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3 align-items-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-uppercase font-weight-bold"</span><span class="nt">&gt;</span>Heading 6<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>H6 Material Kit<span class="nt">&lt;/h6&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3 align-items-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-uppercase font-weight-bold"</span><span class="nt">&gt;</span>Paragraph<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>
        I will be the leader of a company that ends up being worth
        billions of dollars, because I got the answers. I understand
        culture. I am the nucleus. I think that<span class="ni">&amp;#39;</span>s a responsibility that I
        have, to push possibilities, to show people, this is the level
        that things could be at.
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3 align-items-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-uppercase font-weight-bold"</span><span class="nt">&gt;</span>Lead text<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead mb-0"</span><span class="nt">&gt;</span>
        I will be the leader of a company that ends up being worth
        billions of dollars, because I got the answers. I understand
        culture. I am the nucleus. I think that<span class="ni">&amp;#39;</span>s a responsibility that I
        have, to push possibilities, to show people, this is the level
        that things could be at.
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3 align-items-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-uppercase font-weight-bold"</span><span class="nt">&gt;</span>Small<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-sm mb-0"</span><span class="nt">&gt;</span>
        I will be the leader of a company that ends up being worth
        billions of dollars, because I got the answers. I understand
        culture. I am the nucleus. I think that<span class="ni">&amp;#39;</span>s a responsibility that I
        have, to push possibilities, to show people, this is the level
        that things could be at.
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3 align-items-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-uppercase font-weight-bold"</span><span class="nt">&gt;</span>Tiny<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-xs mb-0"</span><span class="nt">&gt;</span>
        I will be the leader of a company that ends up being worth
        billions of dollars, because I got the answers. I understand
        culture. I am the nucleus. I think that<span class="ni">&amp;#39;</span>s a responsibility that I
        have, to push possibilities, to show people, this is the level
        that things could be at.
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row pt-lg-6">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Attention Catchers</h3>
              <h6 class="text-secondary font-weight-normal pe-3">4+ Fully coded components that popup from different
                places of the screen</h6>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row mt-3">
              <!-- Alerts -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Alerts</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-alert"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-alert" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-alert">
                      <iframe width="100%" height="200px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="container">
  <div class="row py-3">
    <div class="alert alert-primary text-white font-weight-bold" role="alert">
      A simple primary alert—check it out!
    </div>
    <div class="alert alert-secondary text-white font-weight-bold" role="alert">
      A simple secondary alert—check it out!
    </div>
    <div class="alert alert-success text-white font-weight-bold" role="alert">
      A simple success alert—check it out!
    </div>
    <div class="alert alert-danger text-white font-weight-bold" role="alert">
      A simple danger alert—check it out!
    </div>
    <div class="alert alert-warning text-white font-weight-bold" role="alert">
      A simple warning alert—check it out!
    </div>
    <div class="alert alert-info text-white font-weight-bold" role="alert">
      A simple info alert—check it out!
    </div>
    <div class="alert alert-light text-white font-weight-bold" role="alert">
      A simple light alert—check it out!
    </div>
    <div class="alert alert-dark text-white font-weight-bold" role="alert">
      A simple dark alert—check it out!
    </div>
  </div>
</div>

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-alert">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard"><i
                            class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary text-white font-weight-bold"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
      A simple primary alert—check it out!
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-secondary text-white font-weight-bold"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
      A simple secondary alert—check it out!
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success text-white font-weight-bold"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
      A simple success alert—check it out!
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger text-white font-weight-bold"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
      A simple danger alert—check it out!
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning text-white font-weight-bold"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
      A simple warning alert—check it out!
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info text-white font-weight-bold"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
      A simple info alert—check it out!
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-light text-white font-weight-bold"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
      A simple light alert—check it out!
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-dark text-white font-weight-bold"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
      A simple dark alert—check it out!
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Tooltips -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Tooltips</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-tooltip"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-tooltip" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-tooltip">
                      <iframe width="100%" height="200px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="container">
  <div class="row py-5 mt-3 text-center">
    <div>
      <button type="button" class="btn bg-gradient-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
        Tooltip on top
      </button>
      <button type="button" class="btn bg-gradient-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
        Tooltip on right
      </button>
      <button type="button" class="btn bg-gradient-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
        Tooltip on bottom
      </button>
      <button type="button" class="btn bg-gradient-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
        Tooltip on left
      </button>
    </div>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll(&#39;[data-bs-toggle="tooltip"]&#39;))
          var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
          })</script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-tooltip">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-5 mt-3 text-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-secondary"</span> <span class="na">data-bs-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-bs-placement=</span><span class="s">"top"</span> <span class="na">title=</span><span class="s">"Tooltip on top"</span><span class="nt">&gt;</span>
        Tooltip on top
      <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-secondary"</span> <span class="na">data-bs-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-bs-placement=</span><span class="s">"right"</span> <span class="na">title=</span><span class="s">"Tooltip on right"</span><span class="nt">&gt;</span>
        Tooltip on right
      <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-secondary"</span> <span class="na">data-bs-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-bs-placement=</span><span class="s">"bottom"</span> <span class="na">title=</span><span class="s">"Tooltip on bottom"</span><span class="nt">&gt;</span>
        Tooltip on bottom
      <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-secondary"</span> <span class="na">data-bs-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-bs-placement=</span><span class="s">"left"</span> <span class="na">title=</span><span class="s">"Tooltip on left"</span><span class="nt">&gt;</span>
        Tooltip on left
      <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>


  <span class="c">&lt;!-- initialization script --&gt;</span>
  <span class="nt">&lt;script&gt;</span>
    <span class="kd">var</span> <span class="nx">tooltipTriggerList</span> <span class="o">=</span> <span class="p">[].</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="dl">'</span><span class="s1">[data-bs-toggle="tooltip"]</span><span class="dl">'</span><span class="p">))</span>
    <span class="kd">var</span> <span class="nx">tooltipList</span> <span class="o">=</span> <span class="nx">tooltipTriggerList</span><span class="p">.</span><span class="nx">map</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">tooltipTriggerEl</span><span class="p">)</span> <span class="p">{</span>
      <span class="k">return</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Tooltip</span><span class="p">(</span><span class="nx">tooltipTriggerEl</span><span class="p">)</span>
    <span class="p">})</span>
  <span class="nt">&lt;/script&gt;</span>
  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Popovers -->
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Popovers</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-popover"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-popover" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-popover">
                      <iframe width="100%" height="300px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="container">
  <div class="row py-7 mt-2 text-center">
    <div>
      <button type="button" class="btn bg-gradient-secondary mb-0" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="That’s the main thing people are controlled by! Thoughts- their perception of themselves!">
        Popover on top
      </button>

      <button type="button" class="btn bg-gradient-secondary mb-0" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="We’re not always in the position that we want to be at.">
        Popover on right
      </button>

      <button type="button" class="btn bg-gradient-secondary mb-0" data-bs-container="body" title="Popover with title" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="A lot of people don’t appreciate the moment until it’s passed.">
        Popover on bottom
      </button>

      <button type="button" class="btn bg-gradient-secondary mb-0" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="It really matters and then like it really doesn’t matter. What matters is the people who are sparked by it.">
        Popover on left
      </button>
    </div>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          <script>var popoverTriggerList = [].slice.call(document.querySelectorAll(&#39;[data-bs-toggle="popover"]&#39;))
          var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
          })</script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-popover">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-7 mt-2 text-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-secondary mb-0"</span> <span class="na">data-bs-container=</span><span class="s">"body"</span> <span class="na">data-bs-toggle=</span><span class="s">"popover"</span> <span class="na">data-bs-placement=</span><span class="s">"top"</span> <span class="na">data-bs-content=</span><span class="s">"That’s the main thing people are controlled by! Thoughts- their perception of themselves!"</span><span class="nt">&gt;</span>
        Popover on top
      <span class="nt">&lt;/button&gt;</span>

      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-secondary mb-0"</span> <span class="na">data-bs-container=</span><span class="s">"body"</span> <span class="na">data-bs-toggle=</span><span class="s">"popover"</span> <span class="na">data-bs-placement=</span><span class="s">"right"</span> <span class="na">data-bs-content=</span><span class="s">"We’re not always in the position that we want to be at."</span><span class="nt">&gt;</span>
        Popover on right
      <span class="nt">&lt;/button&gt;</span>

      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-secondary mb-0"</span> <span class="na">data-bs-container=</span><span class="s">"body"</span> <span class="na">title=</span><span class="s">"Popover with title"</span> <span class="na">data-bs-toggle=</span><span class="s">"popover"</span> <span class="na">data-bs-placement=</span><span class="s">"bottom"</span> <span class="na">data-bs-content=</span><span class="s">"A lot of people don’t appreciate the moment until it’s passed."</span><span class="nt">&gt;</span>
        Popover on bottom
      <span class="nt">&lt;/button&gt;</span>

      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-secondary mb-0"</span> <span class="na">data-bs-container=</span><span class="s">"body"</span> <span class="na">data-bs-toggle=</span><span class="s">"popover"</span> <span class="na">data-bs-placement=</span><span class="s">"left"</span> <span class="na">data-bs-content=</span><span class="s">"It really matters and then like it really doesn’t matter. What matters is the people who are sparked by it."</span><span class="nt">&gt;</span>
        Popover on left
      <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- initialization script --&gt;</span>
  <span class="nt">&lt;script&gt;</span>
    <span class="kd">var</span> <span class="nx">popoverTriggerList</span> <span class="o">=</span> <span class="p">[].</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="dl">'</span><span class="s1">[data-bs-toggle="popover"]</span><span class="dl">'</span><span class="p">))</span>
    <span class="kd">var</span> <span class="nx">popoverList</span> <span class="o">=</span> <span class="nx">popoverTriggerList</span><span class="p">.</span><span class="nx">map</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">popoverTriggerEl</span><span class="p">)</span> <span class="p">{</span>
      <span class="k">return</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Popover</span><span class="p">(</span><span class="nx">popoverTriggerEl</span><span class="p">)</span>
    <span class="p">})</span>
  <span class="nt">&lt;/script&gt;</span>
  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Modal -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Modal</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-modal"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-modal" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-modal">
                      <iframe width="100%" height="300px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="container py-7">
  <div class="row mt-3">
    <div class="col-sm-4 col-6 mx-auto">
      <!-- Button trigger modal -->
      <button type="button" class="btn bg-gradient-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Your modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Society has put up so many boundaries, so many limitations on what’s right and wrong that it’s almost impossible to get a pure thought out.
              <br><br>
              It’s like a little kid, a little boy, looking at colors, and no one told him what colors are good, before somebody tells you you shouldn’t like pink because that’s for girls, or you’d instantly become a gay two-year-old.
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn bg-gradient-dark" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn bg-gradient-dark">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-modal">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard"><i
                            class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container py-7"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row mt-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-4 col-6 mx-auto"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Button trigger modal --&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-dark"</span> <span class="na">data-bs-toggle=</span><span class="s">"modal"</span> <span class="na">data-bs-target=</span><span class="s">"#exampleModal"</span><span class="nt">&gt;</span>
        Launch demo modal
      <span class="nt">&lt;/button&gt;</span>

      <span class="c">&lt;!-- Modal --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">id=</span><span class="s">"exampleModal"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">aria-labelledby=</span><span class="s">"exampleModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"modal-title"</span> <span class="na">id=</span><span class="s">"exampleModalLabel"</span><span class="nt">&gt;</span>Your modal title<span class="nt">&lt;/h5&gt;</span>
              <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn-close"</span> <span class="na">data-bs-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;&lt;/button&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
              Society has put up so many boundaries, so many limitations on what’s right and wrong that it’s almost impossible to get a pure thought out.
              <span class="nt">&lt;br&gt;&lt;br&gt;</span>
              It’s like a little kid, a little boy, looking at colors, and no one told him what colors are good, before somebody tells you you shouldn’t like pink because that’s for girls, or you’d instantly become a gay two-year-old.
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer justify-content-between"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-dark"</span> <span class="na">data-bs-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
              <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-dark"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Datepicker -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Datepicker</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-datepicker"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-datepicker" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-datepicker">
                      <iframe width="100%" height="300px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <!--  Datepicker -->
<div class="row py-3">
  <div class="col-md-6 mx-auto">
    <div class="row">
      <div class="col-lg-6 mx-auto col-md-8 col-sm-5">
        <div class="input-group input-group-static">
          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
          <input class="form-control datepicker" placeholder="Please select date" type="text" >
        </div>
      </div>
    </div>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/plugins/flatpickr.min.js"></script>
          <script src="https://demos.creative-tim.com/material-kit/assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
          <script>
            if (document.querySelector(".datepicker")) {
              flatpickr(".datepicker", {});
            }
          </script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-datepicker">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="c">&lt;!--  Datepicker --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row py-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6 mx-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6 mx-auto col-md-8 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-static"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-text"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-calendar"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control datepicker"</span> <span class="na">placeholder=</span><span class="s">"Please select date"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- initialization script --&gt;</span>
<span class="nt">&lt;script&gt;</span>
  <span class="k">if</span> <span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.datepicker</span><span class="dl">"</span><span class="p">))</span> <span class="p">{</span>
     <span class="nx">flatpickr</span><span class="p">(</span><span class="dl">"</span><span class="s2">.datepicker</span><span class="dl">"</span><span class="p">,</span> <span class="p">{});</span>
  <span class="p">}</span>
<span class="nt">&lt;/script&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row pt-lg-6">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Navigation</h3>
              <h6 class="text-secondary font-weight-normal pe-3">6+ components that will help go through the pages</h6>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row mt-3">
              <!-- Navbar light -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Navbar light</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-nav-light"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-nav-light" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-nav-light">
                      <iframe width="100%" height="300px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <!-- Navbar Light -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
  <div class="container">
    <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/presentation" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      Material Kit 3
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
      <ul class="navbar-nav navbar-nav-hover w-100">
        <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-5">
          <a class="nav-link ps-2 cursor-pointer d-flex align-items-center" id="dropdownMenuPages1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">dashboard</i>
            Pages
            <img src="/static/lib/material-kit/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages1">
            <div class="d-none d-lg-block">
  <a href="javascript:;" class="dropdown-item border-radius-md">
    About Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Contact Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Author
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Sign In
  </a>
</div>

<div class="d-lg-none">
  <a href="javascript:;" class="dropdown-item border-radius-md">
    About Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Contact Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Author
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Sign In
  </a>
</div>

          </div>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">view_day</i>
            Sections
            <img src="/static/lib/material-kit/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
            <div class="d-none d-lg-block">
  <li class="nav-item dropdown dropdown-hover dropdown-subitem">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
        </div>
        <div class="w-100 d-flex align-items-center justify-content-between">
          <div>
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
            <span class="text-sm">See all 109 sections</span>
          </div>

          <img src="/static/lib/material-kit/img/down-arrow.svg" alt="down-arrow" class="arrow">
        </div>
      </div>
    </a>
    <div class="dropdown-menu mt-0 py-3 px-2 mt-3" aria-labelledby="pageSections">
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Page Headers
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Features
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Pricing
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        FAQ
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Blog Posts
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Testimonials
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Teams
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Stats
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Call to Actions
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Logo Areas
      </a>
    </div>
  </li>
</div>

<div class="row d-lg-none">
  <div class="col-md-12">
    <div class="d-flex mb-2">
      <div class="icon h-10 me-3 d-flex mt-1">
        <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
      </div>
      <div class="w-100 d-flex align-items-center justify-content-between">
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
        </div>
      </div>
    </div>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Page Headers
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Features
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Pricing
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      FAQ
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Blog Posts
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Testimonials
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Teams
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Stats
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Call to Actions
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Applications
    </a>
  </div>
</div>

          </ul>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">article</i>
            Docs
            <img src="/static/lib/material-kit/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
            <div class="d-none d-lg-block">
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>spaceship</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(4.000000, 301.000000)">
                              <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                              <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                              <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                              <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g id="document" transform="translate(154.000000, 300.000000)">
                              <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                              <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
          <span class="text-sm">See our colors, icons and typography</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>box-3d-50</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
          <span class="text-sm">Explore our collection of fully designed components</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>switches</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(154.000000, 149.000000)">
                              <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                              <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
          <span class="text-sm">Check how you can integrate our plugins</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>settings</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(304.000000, 151.000000)">
                              <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                              <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                              <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
          <span class="text-sm">For those who want flexibility, use our utility classes</span>
        </div>
      </div>
    </a>
  </li>
</div>

<div class="row d-lg-none">
  <div class="col-md-12 g-0">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>spaceship</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(4.000000, 301.000000)">
                      <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                      <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                      <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                      <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(154.000000, 300.000000)">
                      <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                      <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
          <span class="text-sm">See our colors, icons and typography</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>box-3d-50</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
          <span class="text-sm">Explore our collection of fully designed components</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>switches</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(154.000000, 149.000000)">
                              <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                              <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
          <span class="text-sm">Check how you can integrate our plugins</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>settings</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(304.000000, 151.000000)">
                              <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                              <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                              <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>
  </div>
</div>

          </ul>
        </li>
        <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0">
          <a href="https://www.creative-tim.com/product/material-kit-pro" class="btn btn-sm  bg-gradient-dark  mb-0 me-1 mt-2 mt-md-0">Upgrade to Pro</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-nav-light">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard"><i
                            class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="c">&lt;!-- Navbar Light --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-white py-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"https://demos.creative-tim.com/material-kit/presentation"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">title=</span><span class="s">"Designed and Coded by Creative Tim"</span> <span class="na">data-placement=</span><span class="s">"bottom"</span> <span class="na">target=</span><span class="s">"_blank"</span><span class="nt">&gt;</span>
      Material Kit 3
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler shadow-none ms-2"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-bs-toggle=</span><span class="s">"collapse"</span> <span class="na">data-bs-target=</span><span class="s">"#navigation"</span> <span class="na">aria-controls=</span><span class="s">"navigation"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon mt-2"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar1"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar2"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar3"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5"</span> <span class="na">id=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav navbar-nav-hover w-100"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2 ms-lg-5"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 cursor-pointer d-flex align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuPages1"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>dashboard<span class="nt">&lt;/i&gt;</span>
            Pages
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-dark.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuPages1"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    About Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Contact Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Author
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Sign In
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    About Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Contact Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Author
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Sign In
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/li&gt;</span>

        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 d-flex cursor-pointer align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuBlocks"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>view_day<span class="nt">&lt;/i&gt;</span>
            Sections
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-dark.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuBlocks"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover dropdown-subitem"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"./presentation.html"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ni ni-single-copy-04 text-gradient text-primary"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100 d-flex align-items-center justify-content-between"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div&gt;</span>
            <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Page Sections<span class="nt">&lt;/h6&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See all 109 sections<span class="nt">&lt;/span&gt;</span>
          <span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu mt-0 py-3 px-2 mt-3"</span> <span class="na">aria-labelledby=</span><span class="s">"pageSections"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Page Headers
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Features
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Pricing
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        FAQ
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Blog Posts
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Testimonials
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Teams
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Stats
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Call to Actions
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Logo Areas
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-12"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex mb-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ni ni-single-copy-04 text-gradient text-primary"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100 d-flex align-items-center justify-content-between"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Page Sections<span class="nt">&lt;/h6&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Page Headers
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Features
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Pricing
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      FAQ
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Blog Posts
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Testimonials
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Teams
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Stats
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Call to Actions
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Applications
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>

        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 d-flex cursor-pointer align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuDocs"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>article<span class="nt">&lt;/i&gt;</span>
            Docs
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-dark.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuDocs"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>spaceship<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1720.000000, -592.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(4.000000, 301.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Getting Started<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>document<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -591.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">id=</span><span class="s">"document"</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 300.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"</span> <span class="na">opacity=</span><span class="s">"0.603585379"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Foundation<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See our colors, icons and typography<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 42 42"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>box-3d-50<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2319.000000, -291.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">id=</span><span class="s">"box-3d-50"</span> <span class="na">transform=</span><span class="s">"translate(603.000000, 0.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Components<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Explore our collection of fully designed components<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>switches<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -440.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 149.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"</span> <span class="na">opacity=</span><span class="s">"0.6"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Plugins<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Check how you can integrate our plugins<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>settings<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2020.000000, -442.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(304.000000, 151.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;polygon</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span> <span class="na">points=</span><span class="s">"18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"</span><span class="nt">&gt;&lt;/polygon&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Utility Classes<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>For those who want flexibility, use our utility classes<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-12 g-0"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>spaceship<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1720.000000, -592.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(4.000000, 301.000000)"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                    <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
                <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
            <span class="nt">&lt;/svg&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Getting Started<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;title&gt;</span>document<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -591.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 300.000000)"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"</span> <span class="na">opacity=</span><span class="s">"0.603585379"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                    <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
                <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
            <span class="nt">&lt;/svg&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Foundation<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See our colors, icons and typography<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 42 42"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>box-3d-50<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2319.000000, -291.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(603.000000, 0.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Components<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Explore our collection of fully designed components<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>switches<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -440.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 149.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"</span> <span class="na">opacity=</span><span class="s">"0.6"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Plugins<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Check how you can integrate our plugins<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>settings<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2020.000000, -442.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(304.000000, 151.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;polygon</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span> <span class="na">points=</span><span class="s">"18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"</span><span class="nt">&gt;&lt;/polygon&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Utility Classes<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"https://www.creative-tim.com/product/material-kit-pro"</span> <span class="na">class=</span><span class="s">"btn btn-sm  bg-gradient-dark  mb-0 me-1 mt-2 mt-md-0"</span><span class="nt">&gt;</span>Upgrade to Pro<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span>
<span class="c">&lt;!-- End Navbar --&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Navbar dark -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Navbar dark</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-nav-dark"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-nav-dark" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-nav-dark">
                      <iframe width="100%" height="300px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <!-- Navbar Dark -->
<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark z-index-3 py-3">
  <div class="container">
    <a class="navbar-brand text-white" href="https://demos.creative-tim.com/material-kit/presentation" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      Material Kit 3
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
      <ul class="navbar-nav navbar-nav-hover mx-auto">
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages0" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">dashboard</i>
            Pages
            <img src="/static/lib/material-kit/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <div class="dropdown-menu dropdown-menu-animation dropdown-xl p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages0">
            <div class="d-none d-lg-block">
  <a href="javascript:;" class="dropdown-item border-radius-md">
    About Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Contact Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Author
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Sign In
  </a>
</div>

<div class="d-lg-none">
  <a href="javascript:;" class="dropdown-item border-radius-md">
    About Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Contact Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Author
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Sign In
  </a>
</div>

          </div>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">view_day</i>
            Sections
            <img src="/static/lib/material-kit/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <ul class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
            <div class="d-none d-lg-block">
  <li class="nav-item dropdown dropdown-hover dropdown-subitem">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
        </div>
        <div class="w-100 d-flex align-items-center justify-content-between">
          <div>
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
            <span class="text-sm">See all 109 sections</span>
          </div>

          <img src="/static/lib/material-kit/img/down-arrow.svg" alt="down-arrow" class="arrow">
        </div>
      </div>
    </a>
    <div class="dropdown-menu mt-0 py-3 px-2 mt-3" aria-labelledby="pageSections">
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Page Headers
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Features
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Pricing
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        FAQ
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Blog Posts
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Testimonials
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Teams
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Stats
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Call to Actions
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Logo Areas
      </a>
    </div>
  </li>
</div>

<div class="row d-lg-none">
  <div class="col-md-12">
    <div class="d-flex mb-2">
      <div class="icon h-10 me-3 d-flex mt-1">
        <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
      </div>
      <div class="w-100 d-flex align-items-center justify-content-between">
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
        </div>
      </div>
    </div>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Page Headers
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Features
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Pricing
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      FAQ
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Blog Posts
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Testimonials
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Teams
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Stats
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Call to Actions
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Applications
    </a>
  </div>
</div>

          </ul>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">article</i>
            Docs
            <img src="/static/lib/material-kit/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <ul class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
            <div class="d-none d-lg-block">
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>spaceship</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(4.000000, 301.000000)">
                              <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                              <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                              <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                              <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g id="document" transform="translate(154.000000, 300.000000)">
                              <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                              <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
          <span class="text-sm">See our colors, icons and typography</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>box-3d-50</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
          <span class="text-sm">Explore our collection of fully designed components</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>switches</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(154.000000, 149.000000)">
                              <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                              <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
          <span class="text-sm">Check how you can integrate our plugins</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>settings</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(304.000000, 151.000000)">
                              <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                              <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                              <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
          <span class="text-sm">For those who want flexibility, use our utility classes</span>
        </div>
      </div>
    </a>
  </li>
</div>

<div class="row d-lg-none">
  <div class="col-md-12 g-0">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>spaceship</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(4.000000, 301.000000)">
                      <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                      <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                      <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                      <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(154.000000, 300.000000)">
                      <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                      <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
          <span class="text-sm">See our colors, icons and typography</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>box-3d-50</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
          <span class="text-sm">Explore our collection of fully designed components</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>switches</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(154.000000, 149.000000)">
                              <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                              <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
          <span class="text-sm">Check how you can integrate our plugins</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>settings</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(304.000000, 151.000000)">
                              <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                              <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                              <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>
  </div>
</div>

          </ul>
        </li>
        <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0">
          <a href="https://www.creative-tim.com/product/material-kit-pro" class="btn btn-sm  bg-gradient-dark  mb-0 me-1 mt-2 mt-md-0">Upgrade to Pro</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-nav-dark">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard"><i
                            class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="c">&lt;!-- Navbar Dark --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-dark bg-gradient-dark z-index-3 py-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand text-white"</span> <span class="na">href=</span><span class="s">"https://demos.creative-tim.com/material-kit/presentation"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">title=</span><span class="s">"Designed and Coded by Creative Tim"</span> <span class="na">data-placement=</span><span class="s">"bottom"</span> <span class="na">target=</span><span class="s">"_blank"</span><span class="nt">&gt;</span>
      Material Kit 3
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler shadow-none ms-2"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-bs-toggle=</span><span class="s">"collapse"</span> <span class="na">data-bs-target=</span><span class="s">"#navigation"</span> <span class="na">aria-controls=</span><span class="s">"navigation"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon mt-2"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar1"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar2"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar3"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0"</span> <span class="na">id=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav navbar-nav-hover mx-auto"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 d-flex cursor-pointer align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuPages0"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>dashboard<span class="nt">&lt;/i&gt;</span>
            Pages
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-white.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation dropdown-xl p-3 border-radius-xl mt-0 mt-lg-3"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuPages0"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    About Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Contact Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Author
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Sign In
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    About Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Contact Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Author
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Sign In
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/li&gt;</span>

        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 d-flex cursor-pointer align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuBlocks"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>view_day<span class="nt">&lt;/i&gt;</span>
            Sections
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-white.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuBlocks"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover dropdown-subitem"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"./presentation.html"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ni ni-single-copy-04 text-gradient text-primary"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100 d-flex align-items-center justify-content-between"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div&gt;</span>
            <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Page Sections<span class="nt">&lt;/h6&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See all 109 sections<span class="nt">&lt;/span&gt;</span>
          <span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu mt-0 py-3 px-2 mt-3"</span> <span class="na">aria-labelledby=</span><span class="s">"pageSections"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Page Headers
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Features
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Pricing
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        FAQ
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Blog Posts
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Testimonials
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Teams
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Stats
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Call to Actions
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Logo Areas
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-12"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex mb-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ni ni-single-copy-04 text-gradient text-primary"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100 d-flex align-items-center justify-content-between"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Page Sections<span class="nt">&lt;/h6&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Page Headers
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Features
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Pricing
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      FAQ
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Blog Posts
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Testimonials
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Teams
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Stats
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Call to Actions
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Applications
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>

        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 d-flex cursor-pointer align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuDocs"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>article<span class="nt">&lt;/i&gt;</span>
            Docs
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-white.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuDocs"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>spaceship<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1720.000000, -592.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(4.000000, 301.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Getting Started<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>document<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -591.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">id=</span><span class="s">"document"</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 300.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"</span> <span class="na">opacity=</span><span class="s">"0.603585379"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Foundation<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See our colors, icons and typography<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 42 42"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>box-3d-50<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2319.000000, -291.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">id=</span><span class="s">"box-3d-50"</span> <span class="na">transform=</span><span class="s">"translate(603.000000, 0.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Components<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Explore our collection of fully designed components<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>switches<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -440.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 149.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"</span> <span class="na">opacity=</span><span class="s">"0.6"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Plugins<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Check how you can integrate our plugins<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>settings<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2020.000000, -442.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(304.000000, 151.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;polygon</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span> <span class="na">points=</span><span class="s">"18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"</span><span class="nt">&gt;&lt;/polygon&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Utility Classes<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>For those who want flexibility, use our utility classes<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-12 g-0"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>spaceship<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1720.000000, -592.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(4.000000, 301.000000)"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                    <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
                <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
            <span class="nt">&lt;/svg&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Getting Started<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;title&gt;</span>document<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -591.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 300.000000)"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"</span> <span class="na">opacity=</span><span class="s">"0.603585379"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                    <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
                <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
            <span class="nt">&lt;/svg&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Foundation<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See our colors, icons and typography<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 42 42"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>box-3d-50<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2319.000000, -291.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(603.000000, 0.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Components<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Explore our collection of fully designed components<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>switches<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -440.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 149.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"</span> <span class="na">opacity=</span><span class="s">"0.6"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Plugins<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Check how you can integrate our plugins<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>settings<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2020.000000, -442.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(304.000000, 151.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;polygon</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span> <span class="na">points=</span><span class="s">"18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"</span><span class="nt">&gt;&lt;/polygon&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Utility Classes<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"https://www.creative-tim.com/product/material-kit-pro"</span> <span class="na">class=</span><span class="s">"btn btn-sm  bg-gradient-dark  mb-0 me-1 mt-2 mt-md-0"</span><span class="nt">&gt;</span>Upgrade to Pro<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span>
<span class="c">&lt;!-- End Navbar --&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Navbar blur -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Navbar blur</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-nav-blur"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-nav-blur" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-nav-blur">
                      <iframe width="100%" height="300px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="bg-gradient-dark" style="height: 100vh !important;">
            <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="https://demos.creative-tim.com/material-kit/presentation" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      Material Kit 3
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">dashboard</i>
            Pages
            <img src="/static/lib/material-kit/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto">
          </a>
          <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
            <div class="d-none d-lg-block">
  <a href="javascript:;" class="dropdown-item border-radius-md">
    About Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Contact Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Author
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Sign In
  </a>
</div>

<div class="d-lg-none">
  <a href="javascript:;" class="dropdown-item border-radius-md">
    About Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Contact Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Author
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Sign In
  </a>
</div>

          </div>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">view_day</i>
            Sections
            <img src="/static/lib/material-kit/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto">
          </a>
          <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
            <div class="d-none d-lg-block">
  <li class="nav-item dropdown dropdown-hover dropdown-subitem">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
        </div>
        <div class="w-100 d-flex align-items-center justify-content-between">
          <div>
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
            <span class="text-sm">See all 109 sections</span>
          </div>

          <img src="/static/lib/material-kit/img/down-arrow.svg" alt="down-arrow" class="arrow">
        </div>
      </div>
    </a>
    <div class="dropdown-menu mt-0 py-3 px-2 mt-3" aria-labelledby="pageSections">
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Page Headers
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Features
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Pricing
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        FAQ
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Blog Posts
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Testimonials
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Teams
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Stats
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Call to Actions
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Logo Areas
      </a>
    </div>
  </li>
</div>

<div class="row d-lg-none">
  <div class="col-md-12">
    <div class="d-flex mb-2">
      <div class="icon h-10 me-3 d-flex mt-1">
        <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
      </div>
      <div class="w-100 d-flex align-items-center justify-content-between">
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
        </div>
      </div>
    </div>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Page Headers
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Features
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Pricing
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      FAQ
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Blog Posts
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Testimonials
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Teams
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Stats
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Call to Actions
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Applications
    </a>
  </div>
</div>

          </ul>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">article</i>
            Docs
            <img src="/static/lib/material-kit/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto">
          </a>
          <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
            <div class="d-none d-lg-block">
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>spaceship</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(4.000000, 301.000000)">
                              <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                              <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                              <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                              <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g id="document" transform="translate(154.000000, 300.000000)">
                              <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                              <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
          <span class="text-sm">See our colors, icons and typography</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>box-3d-50</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
          <span class="text-sm">Explore our collection of fully designed components</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>switches</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(154.000000, 149.000000)">
                              <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                              <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
          <span class="text-sm">Check how you can integrate our plugins</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>settings</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(304.000000, 151.000000)">
                              <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                              <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                              <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
          <span class="text-sm">For those who want flexibility, use our utility classes</span>
        </div>
      </div>
    </a>
  </li>
</div>

<div class="row d-lg-none">
  <div class="col-md-12 g-0">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>spaceship</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(4.000000, 301.000000)">
                      <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                      <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                      <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                      <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(154.000000, 300.000000)">
                      <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                      <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
          <span class="text-sm">See our colors, icons and typography</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>box-3d-50</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
          <span class="text-sm">Explore our collection of fully designed components</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>switches</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(154.000000, 149.000000)">
                              <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                              <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
          <span class="text-sm">Check how you can integrate our plugins</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>settings</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(304.000000, 151.000000)">
                              <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                              <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                              <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>
  </div>
</div>

          </ul>
        </li>
        <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0">
          <a href="https://www.creative-tim.com/product/material-kit-pro" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Upgrade to Pro</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div></div></div>

          </div>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-nav-blur">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard"><i
                            class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="c">&lt;!-- Navbar --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container position-sticky z-index-sticky top-0"</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">"col-12"</span><span class="nt">&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand font-weight-bolder ms-sm-3"</span> <span class="na">href=</span><span class="s">"https://demos.creative-tim.com/material-kit/presentation"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">title=</span><span class="s">"Designed and Coded by Creative Tim"</span> <span class="na">data-placement=</span><span class="s">"bottom"</span> <span class="na">target=</span><span class="s">"_blank"</span><span class="nt">&gt;</span>
      Material Kit 3
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler shadow-none ms-2"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-bs-toggle=</span><span class="s">"collapse"</span> <span class="na">data-bs-target=</span><span class="s">"#navigation"</span> <span class="na">aria-controls=</span><span class="s">"navigation"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon mt-2"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar1"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar2"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar3"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse pt-3 pb-2 py-lg-0"</span> <span class="na">id=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 d-flex cursor-pointer align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuPages"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>dashboard<span class="nt">&lt;/i&gt;</span>
            Pages
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-dark.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuPages"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    About Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Contact Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Author
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Sign In
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    About Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Contact Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Author
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Sign In
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/li&gt;</span>

        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 d-flex cursor-pointer align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuBlocks"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>view_day<span class="nt">&lt;/i&gt;</span>
            Sections
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-dark.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuBlocks"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover dropdown-subitem"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"./presentation.html"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ni ni-single-copy-04 text-gradient text-primary"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100 d-flex align-items-center justify-content-between"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div&gt;</span>
            <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Page Sections<span class="nt">&lt;/h6&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See all 109 sections<span class="nt">&lt;/span&gt;</span>
          <span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu mt-0 py-3 px-2 mt-3"</span> <span class="na">aria-labelledby=</span><span class="s">"pageSections"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Page Headers
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Features
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Pricing
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        FAQ
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Blog Posts
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Testimonials
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Teams
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Stats
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Call to Actions
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Logo Areas
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-12"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex mb-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ni ni-single-copy-04 text-gradient text-primary"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100 d-flex align-items-center justify-content-between"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Page Sections<span class="nt">&lt;/h6&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Page Headers
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Features
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Pricing
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      FAQ
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Blog Posts
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Testimonials
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Teams
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Stats
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Call to Actions
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Applications
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>

        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 d-flex cursor-pointer align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuDocs"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>article<span class="nt">&lt;/i&gt;</span>
            Docs
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-dark.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuDocs"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>spaceship<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1720.000000, -592.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(4.000000, 301.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Getting Started<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>document<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -591.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">id=</span><span class="s">"document"</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 300.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"</span> <span class="na">opacity=</span><span class="s">"0.603585379"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Foundation<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See our colors, icons and typography<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 42 42"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>box-3d-50<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2319.000000, -291.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">id=</span><span class="s">"box-3d-50"</span> <span class="na">transform=</span><span class="s">"translate(603.000000, 0.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Components<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Explore our collection of fully designed components<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>switches<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -440.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 149.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"</span> <span class="na">opacity=</span><span class="s">"0.6"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Plugins<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Check how you can integrate our plugins<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>settings<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2020.000000, -442.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(304.000000, 151.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;polygon</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span> <span class="na">points=</span><span class="s">"18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"</span><span class="nt">&gt;&lt;/polygon&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Utility Classes<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>For those who want flexibility, use our utility classes<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-12 g-0"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>spaceship<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1720.000000, -592.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(4.000000, 301.000000)"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                    <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
                <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
            <span class="nt">&lt;/svg&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Getting Started<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;title&gt;</span>document<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -591.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 300.000000)"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"</span> <span class="na">opacity=</span><span class="s">"0.603585379"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                    <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
                <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
            <span class="nt">&lt;/svg&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Foundation<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See our colors, icons and typography<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 42 42"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>box-3d-50<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2319.000000, -291.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(603.000000, 0.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Components<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Explore our collection of fully designed components<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>switches<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -440.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 149.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"</span> <span class="na">opacity=</span><span class="s">"0.6"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Plugins<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Check how you can integrate our plugins<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>settings<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2020.000000, -442.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(304.000000, 151.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;polygon</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span> <span class="na">points=</span><span class="s">"18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"</span><span class="nt">&gt;&lt;/polygon&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Utility Classes<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item ms-lg-auto my-auto ms-3 ms-lg-0"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"https://www.creative-tim.com/product/material-kit-pro"</span> <span class="na">class=</span><span class="s">"btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0"</span><span class="nt">&gt;</span>Upgrade to Pro<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span>
<span class="c">&lt;!-- End Navbar --&gt;</span>
<span class="nt">&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Navbar transparent -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Navbar transparent</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab"
                                href="#preview-nav-transparent" role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-nav-transparent"
                                role="tab" aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-nav-transparent">
                      <iframe width="100%" height="300px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="w-100" style="height: 100vh !important; background-image:url(/static/lib/material-kit/img/examples/blog-9-4.jpg);background-size:cover;">
            <span class="mask bg-gradient-dark"></span>
            <!-- Navbar Transparent -->
<nav
  class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
  <div class="container">
    <a class="navbar-brand  text-white " href="https://demos.creative-tim.com/material-kit/presentation" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      Material Kit 3
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
      <ul class="navbar-nav navbar-nav-hover w-100">
        <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages2" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">dashboard</i>
            Pages
            <img src="/static/lib/material-kit/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-block d-none">
            <img src="/static/lib/material-kit/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-none d-block">
          </a>
          <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages2">
            <div class="d-none d-lg-block">
  <a href="javascript:;" class="dropdown-item border-radius-md">
    About Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Contact Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Author
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Sign In
  </a>
</div>

<div class="d-lg-none">
  <a href="javascript:;" class="dropdown-item border-radius-md">
    About Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Contact Us
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Author
  </a>
  <a href="javascript:;" class="dropdown-item border-radius-md">
    Sign In
  </a>
</div>

          </div>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">view_day</i>
            Sections
            <img src="/static/lib/material-kit/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-block d-none">
            <img src="/static/lib/material-kit/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-none d-block">
          </a>
          <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
            <div class="d-none d-lg-block">
  <li class="nav-item dropdown dropdown-hover dropdown-subitem">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
        </div>
        <div class="w-100 d-flex align-items-center justify-content-between">
          <div>
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
            <span class="text-sm">See all 109 sections</span>
          </div>

          <img src="/static/lib/material-kit/img/down-arrow.svg" alt="down-arrow" class="arrow">
        </div>
      </div>
    </a>
    <div class="dropdown-menu mt-0 py-3 px-2 mt-3" aria-labelledby="pageSections">
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Page Headers
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Features
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Pricing
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        FAQ
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Blog Posts
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Testimonials
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Teams
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Stats
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Call to Actions
      </a>
      <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
        Logo Areas
      </a>
    </div>
  </li>
</div>

<div class="row d-lg-none">
  <div class="col-md-12">
    <div class="d-flex mb-2">
      <div class="icon h-10 me-3 d-flex mt-1">
        <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
      </div>
      <div class="w-100 d-flex align-items-center justify-content-between">
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
        </div>
      </div>
    </div>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Page Headers
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Features
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Pricing
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      FAQ
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Blog Posts
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Testimonials
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Teams
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Stats
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Call to Actions
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
      Applications
    </a>
  </div>
</div>

          </ul>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded opacity-6 me-2 text-md">article</i>
            Docs
            <img src="/static/lib/material-kit/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-block d-none">
            <img src="/static/lib/material-kit/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-none d-block">
          </a>
          <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
            <div class="d-none d-lg-block">
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>spaceship</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(4.000000, 301.000000)">
                              <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                              <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                              <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                              <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g id="document" transform="translate(154.000000, 300.000000)">
                              <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                              <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
          <span class="text-sm">See our colors, icons and typography</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>box-3d-50</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
          <span class="text-sm">Explore our collection of fully designed components</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>switches</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(154.000000, 149.000000)">
                              <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                              <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
          <span class="text-sm">Check how you can integrate our plugins</span>
        </div>
      </div>
    </a>
  </li>
  <li class="nav-item ">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>settings</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(304.000000, 151.000000)">
                              <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                              <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                              <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
          <span class="text-sm">For those who want flexibility, use our utility classes</span>
        </div>
      </div>
    </a>
  </li>
</div>

<div class="row d-lg-none">
  <div class="col-md-12 g-0">
    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>spaceship</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(4.000000, 301.000000)">
                      <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                      <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                      <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                      <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(154.000000, 300.000000)">
                      <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                      <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
          <span class="text-sm">See our colors, icons and typography</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>box-3d-50</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
          <span class="text-sm">Explore our collection of fully designed components</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>switches</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(154.000000, 149.000000)">
                              <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                              <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
          <span class="text-sm">Check how you can integrate our plugins</span>
        </div>
      </div>
    </a>

    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
      <div class="d-flex">
        <div class="icon h-10 me-3 d-flex mt-1">
          <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>settings</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(304.000000, 151.000000)">
                              <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                              <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                              <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>
        <div>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </div>
      </div>
    </a>
  </div>
</div>

          </ul>
        </li>
        <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0">
          <a href="https://www.creative-tim.com/product/material-kit-pro" class="btn btn-sm  bg-gradient-dark  btn-round mb-0 me-1 mt-2 mt-md-0">Upgrade to Pro</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

          </div>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-nav-transparent">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard"><i
                            class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="c">&lt;!-- Navbar Transparent --&gt;</span>
<span class="nt">&lt;nav</span>
  <span class="na">class=</span><span class="s">"navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand  text-white "</span> <span class="na">href=</span><span class="s">"https://demos.creative-tim.com/material-kit/presentation"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">title=</span><span class="s">"Designed and Coded by Creative Tim"</span> <span class="na">data-placement=</span><span class="s">"bottom"</span> <span class="na">target=</span><span class="s">"_blank"</span><span class="nt">&gt;</span>
      Material Kit 3
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler shadow-none ms-2"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-bs-toggle=</span><span class="s">"collapse"</span> <span class="na">data-bs-target=</span><span class="s">"#navigation"</span> <span class="na">aria-controls=</span><span class="s">"navigation"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon mt-2"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar1"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar2"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar3"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5"</span> <span class="na">id=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav navbar-nav-hover w-100"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2 ms-lg-6"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 d-flex cursor-pointer align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuPages2"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>dashboard<span class="nt">&lt;/i&gt;</span>
            Pages
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-white.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2 d-lg-block d-none"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-dark.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2 d-lg-none d-block"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuPages2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    About Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Contact Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Author
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Sign In
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    About Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Contact Us
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Author
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"dropdown-item border-radius-md"</span><span class="nt">&gt;</span>
    Sign In
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/li&gt;</span>

        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 d-flex cursor-pointer align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuBlocks"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>view_day<span class="nt">&lt;/i&gt;</span>
            Sections
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-white.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2 d-lg-block d-none"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-dark.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2 d-lg-none d-block"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuBlocks"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover dropdown-subitem"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"./presentation.html"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ni ni-single-copy-04 text-gradient text-primary"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100 d-flex align-items-center justify-content-between"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div&gt;</span>
            <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Page Sections<span class="nt">&lt;/h6&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See all 109 sections<span class="nt">&lt;/span&gt;</span>
          <span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu mt-0 py-3 px-2 mt-3"</span> <span class="na">aria-labelledby=</span><span class="s">"pageSections"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Page Headers
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Features
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Pricing
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        FAQ
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Blog Posts
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Testimonials
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Teams
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Stats
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Call to Actions
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
        Logo Areas
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-12"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex mb-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ni ni-single-copy-04 text-gradient text-primary"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100 d-flex align-items-center justify-content-between"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Page Sections<span class="nt">&lt;/h6&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Page Headers
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Features
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Pricing
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      FAQ
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Blog Posts
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Testimonials
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Teams
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Stats
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Call to Actions
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item ps-3 border-radius-md mb-1"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      Applications
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>

        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown dropdown-hover mx-2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ps-2 d-flex cursor-pointer align-items-center"</span> <span class="na">id=</span><span class="s">"dropdownMenuDocs"</span> <span class="na">data-bs-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-symbols-rounded opacity-6 me-2 text-md"</span><span class="nt">&gt;</span>article<span class="nt">&lt;/i&gt;</span>
            Docs
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-white.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2 d-lg-block d-none"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/lib/material-kit/img/down-arrow-dark.svg"</span> <span class="na">alt=</span><span class="s">"down-arrow"</span> <span class="na">class=</span><span class="s">"arrow ms-auto ms-md-2 d-lg-none d-block"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuDocs"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-none d-lg-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>spaceship<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1720.000000, -592.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(4.000000, 301.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Getting Started<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>document<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -591.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">id=</span><span class="s">"document"</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 300.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"</span> <span class="na">opacity=</span><span class="s">"0.603585379"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Foundation<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See our colors, icons and typography<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 42 42"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>box-3d-50<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2319.000000, -291.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">id=</span><span class="s">"box-3d-50"</span> <span class="na">transform=</span><span class="s">"translate(603.000000, 0.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Components<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Explore our collection of fully designed components<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>switches<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -440.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 149.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"</span> <span class="na">opacity=</span><span class="s">"0.6"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Plugins<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Check how you can integrate our plugins<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>settings<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2020.000000, -442.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(304.000000, 151.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;polygon</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span> <span class="na">points=</span><span class="s">"18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"</span><span class="nt">&gt;&lt;/polygon&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Utility Classes<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>For those who want flexibility, use our utility classes<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row d-lg-none"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-12 g-0"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>spaceship<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1720.000000, -592.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(4.000000, 301.000000)"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"</span> <span class="na">opacity=</span><span class="s">"0.598539807"</span><span class="nt">&gt;&lt;/path&gt;</span>
                    <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
                <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
            <span class="nt">&lt;/svg&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Getting Started<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;title&gt;</span>document<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -591.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 300.000000)"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"</span> <span class="na">opacity=</span><span class="s">"0.603585379"</span><span class="nt">&gt;&lt;/path&gt;</span>
                      <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                    <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
                <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
            <span class="nt">&lt;/svg&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Foundation<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>See our colors, icons and typography<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 42 42"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>box-3d-50<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2319.000000, -291.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(603.000000, 0.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"</span> <span class="na">opacity=</span><span class="s">"0.7"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Components<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Explore our collection of fully designed components<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 44"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>switches<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-1870.000000, -440.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(154.000000, 149.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"</span> <span class="na">opacity=</span><span class="s">"0.6"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Plugins<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>Check how you can integrate our plugins<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item py-2 ps-3 border-radius-md"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon h-10 me-3 d-flex mt-1"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;svg</span> <span class="na">class=</span><span class="s">"text-secondary"</span> <span class="na">width=</span><span class="s">"16px"</span> <span class="na">height=</span><span class="s">"16px"</span> <span class="na">viewBox=</span><span class="s">"0 0 40 40"</span> <span class="na">version=</span><span class="s">"1.1"</span> <span class="na">xmlns=</span><span class="s">"http://www.w3.org/2000/svg"</span> <span class="na">xmlns:xlink=</span><span class="s">"http://www.w3.org/1999/xlink"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;title&gt;</span>settings<span class="nt">&lt;/title&gt;</span>
              <span class="nt">&lt;g</span> <span class="na">stroke=</span><span class="s">"none"</span> <span class="na">stroke-width=</span><span class="s">"1"</span> <span class="na">fill=</span><span class="s">"none"</span> <span class="na">fill-rule=</span><span class="s">"evenodd"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(-2020.000000, -442.000000)"</span> <span class="na">fill=</span><span class="s">"#FFFFFF"</span> <span class="na">fill-rule=</span><span class="s">"nonzero"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(1716.000000, 291.000000)"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;g</span> <span class="na">transform=</span><span class="s">"translate(304.000000, 151.000000)"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;polygon</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span> <span class="na">points=</span><span class="s">"18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"</span><span class="nt">&gt;&lt;/polygon&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"</span> <span class="na">opacity=</span><span class="s">"0.596981957"</span><span class="nt">&gt;&lt;/path&gt;</span>
                              <span class="nt">&lt;path</span> <span class="na">class=</span><span class="s">"color-background"</span> <span class="na">d=</span><span class="s">"M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"</span><span class="nt">&gt;&lt;/path&gt;</span>
                          <span class="nt">&lt;/g&gt;</span>
                      <span class="nt">&lt;/g&gt;</span>
                  <span class="nt">&lt;/g&gt;</span>
              <span class="nt">&lt;/g&gt;</span>
          <span class="nt">&lt;/svg&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div&gt;</span>
          <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"</span><span class="nt">&gt;</span>Utility Classes<span class="nt">&lt;/h6&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-sm"</span><span class="nt">&gt;</span>All about overview, quick start, license and contents<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

          <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"https://www.creative-tim.com/product/material-kit-pro"</span> <span class="na">class=</span><span class="s">"btn btn-sm  bg-gradient-dark  btn-round mb-0 me-1 mt-2 mt-md-0"</span><span class="nt">&gt;</span>Upgrade to Pro<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span>
<span class="c">&lt;!-- End Navbar --&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Nav Tabs -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Tabs Simple</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-tabs-simple"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-tabs-simple"
                                role="tab" aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-tabs-simple">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-3 mt-3">
  <div class="col-4 mx-auto">
    <div class="nav-wrapper position-relative end-0">
      <ul class="nav nav-pills nav-fill p-1" role="tablist">
        <li class="nav-item">
          <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#profile-tabs-simple" role="tab" aria-controls="profile" aria-selected="true">
            My Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dashboard-tabs-simple" role="tab" aria-controls="dashboard" aria-selected="false">
            Dashboard
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          <script src="https://demos.creative-tim.com/material-kit/assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-tabs-simple">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4 mx-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-wrapper position-relative end-0"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-fill p-1"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link mb-0 px-0 py-1 active"</span> <span class="na">data-bs-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#profile-tabs-simple"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"profile"</span> <span class="na">aria-selected=</span><span class="s">"true"</span><span class="nt">&gt;</span>
            My Profile
          <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link mb-0 px-0 py-1"</span> <span class="na">data-bs-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#dashboard-tabs-simple"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"dashboard"</span> <span class="na">aria-selected=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            Dashboard
          <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Pagination -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Pagination</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-tabs-simple"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-tabs-simple"
                                role="tab" aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-tabs-simple">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-2">
  <div class="col-4 mx-auto">
    <ul class="pagination pagination-primary m-4">
      <li class="page-item">
        <a class="page-link" href="javascript:;" aria-label="Previous">
          <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
        </a>
      </li>
      <li class="page-item active">
        <a class="page-link" href="javascript:;">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="javascript:;">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="javascript:;">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="javascript:;">4</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="javascript:;">5</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="javascript:;" aria-label="Next">
          <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
        </a>
      </li>
    </ul>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>'></iframe>
                    </div>
                    <div class="tab-pane" id="code-tabs-simple">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4 mx-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-primary m-4"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-angle-double-left"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>5<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">aria-label=</span><span class="s">"Next"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-angle-double-right"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row pt-lg-6">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Input Areas</h3>
              <h6 class="text-secondary font-weight-normal pe-3">6+ elements that you need for text manipulation and
                insertion</h6>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row mt-3">
              <div class="col-12">
                <!-- Input simple -->
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Input dynamic</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-inputs-1"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-inputs-1" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-inputs-1">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-3 mt-3">
  <div class="col-4 mx-auto">
    <div class="input-group input-group-dynamic">
      <label class="form-label">Regular</label>
      <input type="text" class="form-control" >
    </div>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          <script src="https://demos.creative-tim.com/material-kit/assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
        '></iframe>
                    </div>
                    <div class="tab-pane" id="code-inputs-1">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4 mx-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-dynamic"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Regular<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- input static -->
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Input static</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab"
                                href="#preview-input-icon-label" role="tab" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-input-icon-label"
                                role="tab" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-input-icon-label">
                      <iframe class="w-100" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-3 mt-3">
  <div class="col-4 mx-auto">
    <div class="input-group input-group-static">
      <label>First Name</label>
      <input class="form-control" placeholder="eg. Kurt Shelby" type="text" >
    </div>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          <script src="https://demos.creative-tim.com/material-kit/assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-input-icon-label">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          href="javascript:;"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4 mx-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-static"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>First Name<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"eg. Kurt Shelby"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- input outline -->
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Input outline</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab"
                                href="#preview-input-icon-label" role="tab" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-input-icon-label"
                                role="tab" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-input-icon-label">
                      <iframe class="w-100" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-3 mt-3">
  <div class="col-4 mx-auto">
    <div class="input-group input-group-outline mb-4">
      <label class="form-label">Outline</label>
      <input class="form-control" type="text" >
    </div>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          <script src="https://demos.creative-tim.com/material-kit/assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-input-icon-label">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          href="javascript:;"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4 mx-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-outline mb-4"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Outline<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Input with icon -->
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Input with icon</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-inputs-2"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-inputs-2" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-inputs-2">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-2 mt-3">
  <div class="col-4 mx-auto">
    <div class="input-group input-group-dynamic mb-4">
      <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
      <input class="form-control" placeholder="Search" type="text" >
    </div>
  </div>
</div>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          <script src="https://demos.creative-tim.com/material-kit/assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
        '></iframe>
                    </div>
                    <div class="tab-pane" id="code-inputs-2">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-2 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4 mx-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-dynamic mb-4"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-text"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-search"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Input disabled -->
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Input disabled</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-inputs-4"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-inputs-4" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-inputs-4">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-3 mt-3">
  <div class="col-4 mx-auto">
    <input type="text" placeholder="Disabled" class="form-control" disabled>
  </div>
</div>

        '></iframe>
                    </div>
                    <div class="tab-pane" id="code-inputs-4">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4 mx-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Input validation -->
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Inputs validation</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-inputs-3"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-inputs-3" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-inputs-3">
                      <iframe width="100%" height="100px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <div class="row text-center py-3 mt-3">
  <div class="col-4 ms-auto">
    <input type="text" placeholder="Success" class="form-control is-valid" >
  </div>
  <div class="col-4 me-auto">
    <input type="text" placeholder="Error" class="form-control is-invalid" >
  </div>
</div>

        '></iframe>
                    </div>
                    <div class="tab-pane" id="code-inputs-3">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row text-center py-3 mt-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4 ms-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Success"</span> <span class="na">class=</span><span class="s">"form-control is-valid"</span> <span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4 me-auto"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Error"</span> <span class="na">class=</span><span class="s">"form-control is-invalid"</span> <span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Form simple -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Form simple</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab"
                                href="#preview-forms-simple" role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-forms-simple"
                                role="tab" aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-forms-simple">
                      <iframe width="100%" height="600px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <section>
  <div class="container py-4">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center">Contact us</h3>
        <form role="form" id="contact-form" method="post" autocomplete="off">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <label class="form-label">First Name</label>
                  <input class="form-control" aria-label="First Name..." type="text" >
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <div class="input-group input-group-dynamic">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" placeholder="" aria-label="Last Name..." >
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group input-group-dynamic">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="input-group mb-4 input-group-static">
              <label>Your message</label>
              <textarea name="message" class="form-control" id="message" rows="4"></textarea>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-check form-switch mb-4 d-flex align-items-center">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                  <label class="form-check-label ms-3 mb-0" for="flexSwitchCheckDefault">I agree to the <a href="javascript:;" class="text-dark"><u>Terms and Conditions</u></a>.</label>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

          <script src="/static/lib/material-kit/js/core/popper.min.js" type="text/javascript"></script>
          <script src="/static/lib/material-kit/js/core/bootstrap.min.js" type="text/javascript"></script>
          <script src="https://demos.creative-tim.com/material-kit/assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-forms-simple">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="nt">&lt;section&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container py-4"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-7 mx-auto d-flex justify-content-center flex-column"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>Contact us<span class="nt">&lt;/h3&gt;</span>
        <span class="nt">&lt;form</span> <span class="na">role=</span><span class="s">"form"</span> <span class="na">id=</span><span class="s">"contact-form"</span> <span class="na">method=</span><span class="s">"post"</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-dynamic mb-4"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>First Name<span class="nt">&lt;/label&gt;</span>
                  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"First Name..."</span> <span class="na">type=</span><span class="s">"text"</span> <span class="nt">&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6 ps-2"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-dynamic"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Last Name<span class="nt">&lt;/label&gt;</span>
                  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">""</span> <span class="na">aria-label=</span><span class="s">"Last Name..."</span> <span class="nt">&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"mb-4"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-dynamic"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Email Address<span class="nt">&lt;/label&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group mb-4 input-group-static"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;label&gt;</span>Your message<span class="nt">&lt;/label&gt;</span>
              <span class="nt">&lt;textarea</span> <span class="na">name=</span><span class="s">"message"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"message"</span> <span class="na">rows=</span><span class="s">"4"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-12"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-switch mb-4 d-flex align-items-center"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"flexSwitchCheckDefault"</span> <span class="na">checked=</span><span class="s">""</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label ms-3 mb-0"</span> <span class="na">for=</span><span class="s">"flexSwitchCheckDefault"</span><span class="nt">&gt;</span>I agree to the <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"text-dark"</span><span class="nt">&gt;&lt;u&gt;</span>Terms and Conditions<span class="nt">&lt;/u&gt;&lt;/a&gt;</span>.<span class="nt">&lt;/label&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-12"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn bg-gradient-dark w-100"</span><span class="nt">&gt;</span>Send Message<span class="nt">&lt;/button&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/form&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/section&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Design Blocks</h3>
              <h6 class="text-secondary font-weight-normal pe-3">A selection of page sections that fit perfectly in any
                combination</h6>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row mt-3">
              <!-- Header -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Header</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-header-1"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-header-1" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-header-1">
                      <iframe width="100%" height="600px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <!-- -------- START HEADER 1 w/ text and image on right ------- -->
<header>
  <div class="page-header min-vh-100" style="background-image: url(&#39;https://images.unsplash.com/photo-1520769945061-0a448c463865?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80&#39;);" loading="lazy">
    <span class="mask bg-gradient-dark opacity-5"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
          <h1 class="text-white font-weight-black mb-4">Material Kit</h1>
          <p class="text-white opacity-8 lead pe-5 me-5">The time is now for it be okay to be great. People in this world shun people for being nice. </p>
          <div class="buttons">
            <button type="button" class="btn btn-white mt-4">Get Started</button>
            <button type="button" class="btn text-white shadow-none mt-4">Read more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- -------- END HEADER 1 w/ text and image on right ------- -->

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-header-1">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="c">&lt;!-- -------- START HEADER 1 w/ text and image on right ------- --&gt;</span>
<span class="nt">&lt;header&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"page-header min-vh-100"</span> <span class="na">style=</span><span class="s">"background-image: url(&amp;#39;https://images.unsplash.com/photo-1520769945061-0a448c463865?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&amp;#39;);"</span> <span class="na">loading=</span><span class="s">"lazy"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"mask bg-gradient-dark opacity-5"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6 col-md-7 d-flex justify-content-center flex-column"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"text-white font-weight-black mb-4"</span><span class="nt">&gt;</span>Material Kit<span class="nt">&lt;/h1&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-white opacity-8 lead pe-5 me-5"</span><span class="nt">&gt;</span>The time is now for it be okay to be great. People in this world shun people for being nice. <span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"buttons"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-white mt-4"</span><span class="nt">&gt;</span>Get Started<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn text-white shadow-none mt-4"</span><span class="nt">&gt;</span>Read more<span class="nt">&lt;/button&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/header&gt;</span>
<span class="c">&lt;!-- -------- END HEADER 1 w/ text and image on right ------- --&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <!-- Features -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                      <div class="col-lg-3 me-auto">
                        <p class="lead text-dark pt-1 mb-0">Features</p>
                      </div>
                      <div class="col-lg-3">
                        <div class="nav-wrapper position-relative end-0">
                          <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-features-1"
                                role="tab" aria-controls="preview" aria-selected="true">
                                <i class="fas fa-desktop text-sm me-2"></i> Preview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-features-1" role="tab"
                                aria-controls="code" aria-selected="false">
                                <i class="fas fa-code text-sm me-2"></i> Code
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-features-1">
                      <iframe width="100%" height="600px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" /><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.1.0" rel="stylesheet" />
          <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
<div class="container">
  <div class="row">
    <div class="col-lg-6 my-auto">
      <h3 class="mt-5 mt-lg-0">Read More About Us</h3>
      <p class="pe-5">Pain is what we go through as we become older. We get insulted by others, lose trust for those others. We get back stabbed by friends. It becomes harder for us to give others a hand.</p>
      <a href="javascript:;" class="text-primary icon-move-right">More about us
        <i class="fas fa-arrow-right text-sm ms-1"></i>
      </a>
    </div>
    <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-dark shadow-dark text-center">
          <i class="fas fa-ship opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">It becomes harder for us to give others a hand. <br> We get our heart broken by people we love.</p>
        </div>
      </div>

      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-dark shadow-dark text-center">
          <i class="fas fa-handshake opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">As we live, our hearts turn colder. <br>Cause pain is what we go through as we become older.</p>
        </div>
      </div>
      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-dark shadow-dark text-center">
          <i class="fas fa-hourglass opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">When we lose family over time. <br> What else could rust the heart more over time? Blackgold.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

          '></iframe>
                    </div>
                    <div class="tab-pane" id="code-features-1">
                      <div class="position-relative p-4 pb-2">
                        <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3" onclick="copyCode(this);"
                          type="button"><i class="fas fa-copy text-sm me-1"></i> Copy</a>
                        <figure class="highlight">
                          <pre><code class="language-html" data-lang="html">  <span class="c">&lt;!-- -------- START Features w/ icons and text on left &amp; gradient title and text on right -------- --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6 my-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"mt-5 mt-lg-0"</span><span class="nt">&gt;</span>Read More About Us<span class="nt">&lt;/h3&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"pe-5"</span><span class="nt">&gt;</span>Pain is what we go through as we become older. We get insulted by others, lose trust for those others. We get back stabbed by friends. It becomes harder for us to give others a hand.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">class=</span><span class="s">"text-primary icon-move-right"</span><span class="nt">&gt;</span>More about us
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-arrow-right text-sm ms-1"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-3 info-horizontal"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon icon-shape  bg-gradient-dark shadow-dark text-center"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-ship opacity-10"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"description ps-3"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>It becomes harder for us to give others a hand. <span class="nt">&lt;br&gt;</span> We get our heart broken by people we love.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-3 info-horizontal"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon icon-shape  bg-gradient-dark shadow-dark text-center"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-handshake opacity-10"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"description ps-3"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>As we live, our hearts turn colder. <span class="nt">&lt;br&gt;</span>Cause pain is what we go through as we become older.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-3 info-horizontal"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon icon-shape  bg-gradient-dark shadow-dark text-center"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-hourglass opacity-10"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"description ps-3"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>When we lose family over time. <span class="nt">&lt;br&gt;</span> What else could rust the heart more over time? Blackgold.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- -------- END Features w/ icons and text on left &amp; gradient title and text on right -------- --&gt;</span>

  </code></pre>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="row text-center my-sm-5 mt-5">
            <div class="col-lg-6 mx-auto">
              <span class="badge bg-success mb-3">Boost creativity</span>
              <h2 class="">With our coded pages</h2>
              <p class="lead">The easiest way to get started is to use one of our <br /> pre-built example pages. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-8">
            <div class="row mt-4">
              <div class="col-md-6">
                <a href="./pages/about-us.html">
                  <div class="card move-on-hover">
                    <img class="w-100"
                      src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/about-us.jpg"
                      alt="aboutus">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">About Us Page</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-6 mt-md-0 mt-5">
                <a href="./pages/contact-us.html">
                  <div class="card move-on-hover">
                    <img class="w-100"
                      src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/contact-us.jpg"
                      alt="contacus">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Contact Us Page</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-6 mt-md-3 mt-6">
                <a href="./pages/sign-in.html">
                  <div class="card move-on-hover">
                    <img class="w-100"
                      src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/sign-in.jpg"
                      alt="signin">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Sign In Page</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-6 mt-md-3 mt-6">
                <a href="./pages/author.html">
                  <div class="card move-on-hover">
                    <img class="w-100"
                      src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/author.jpg"
                      alt="author">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Author Page</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mx-auto mt-md-0 mt-5">
            <div class="position-sticky" style="top:100px !important">
              <h4 class="">Presentation Pages for Company, Sign In Page, Author and Contact</h4>
              <h6 class="text-secondary font-weight-normal">These is just a small selection of the multiple
                possibitilies you have. Focus on the business, not on the design.</h6>
            </div>
          </div>
        </div>
    </section>


    <!-- -------- START Content Presentation Docs ------- -->
    <div class="container mt-sm-5">
      <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl"
        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desktop.jpg');"
        loading="lazy">
        <span class="mask bg-gradient-dark"></span>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 ms-lg-5">
              <h4 class="text-white">Built by developers</h4>
              <h1 class="text-white">Complex Documentation</h1>
              <p class="lead text-white opacity-8">From colors, cards, typography to complex elements, you will find the
                full documentation. Play with the utility classes and you will create unlimited combinations for our
                components.</p>
              <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit"
                class="text-white icon-move-right">
                Read docs
                <i class="fas fa-arrow-right text-sm ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="info-horizontal bg-gradient-dark border-radius-xl d-block d-md-flex p-4">
            <i class="material-symbols-rounded text-white text-3xl">flag</i>
            <div class="ps-0 ps-md-3 mt-3 mt-md-0">
              <h5 class="text-white">Getting Started</h5>
              <p class="text-white">Check the possible ways of working with our product and the necessary files for
                building your own project.</p>
              <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit"
                class="text-white icon-move-right">
                Let's start
                <i class="fas fa-arrow-right text-sm ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
          <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100">
            <i class="material-symbols-rounded text-gradient text-primary text-3xl">precision_manufacturing</i>
            <div class="ps-0 ps-md-3 mt-3 mt-md-0">
              <h5>Plugins</h5>
              <p>Get inspiration and have an overview about the plugins that we used to create the Material Kit.</p>
              <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit"
                class="text-primary icon-move-right">
                Read more
                <i class="fas fa-arrow-right text-sm ms-1"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mt-lg-0 mt-4">
          <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
            <i class="material-symbols-rounded text-gradient text-primary text-3xl">receipt_long</i>
            <div class="ps-0 ps-md-3 mt-3 mt-md-0">
              <h5>Utility Classes</h5>
              <p>Material Kit is giving you a lot of pre-made elements. For those who want flexibility, we included many
                utility classes.</p>
              <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit"
                class="text-primary icon-move-right">
                Read more
                <i class="fas fa-arrow-right text-sm ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -------- END Content Presentation Docs ------- -->


    <section class="py-7">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto text-center">
            <h2 class="mb-0 font-weight-bolder">Trusted by over</h2>
            <h2 class="text-gradient font-weight-bolder text-success mb-3">2,603,000+ web developers</h2>
            <p class="lead">Many Fortune 500 companies, startups, universities and governmental institutions love
              Creative Tim's products. </p>
          </div>
        </div>
        <div class="row mt-6">
          <div class="col-lg-4 col-md-8">
            <div class="card card-plain">
              <div class="card-body">
                <div class="author">
                  <div class="name">
                    <h6 class="mb-0 font-weight-bolder">Nick Willever</h6>
                    <div class="stats">
                      <i class="far fa-clock"></i> 1 day ago
                    </div>
                  </div>
                </div>
                <p class="mt-4">"This is an excellent product, the documentation is excellent and helped me get things
                  done more efficiently."</p>
                <div class="rating mt-3">
                  <i class="fas fa-star text-success"></i>
                  <i class="fas fa-star text-success"></i>
                  <i class="fas fa-star text-success"></i>
                  <i class="fas fa-star text-success"></i>
                  <i class="fas fa-star text-success"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8 ms-md-auto">
            <div class="card bg-dark">
              <div class="card-body">
                <div class="author align-items-center">
                  <div class="name">
                    <h6 class="text-white mb-0 font-weight-bolder">Shailesh Kushwaha</h6>
                    <div class="stats text-white">
                      <i class="far fa-clock"></i> 1 week ago
                    </div>
                  </div>
                </div>
                <p class="mt-4 text-white">"I found solution to all my design needs from Creative Tim. I use them as a
                  freelancer in my hobby projects for fun! And its really affordable, very humble guys !!!"</p>
                <div class="rating mt-3">
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8">
            <div class="card card-plain">
              <div class="card-body">
                <div class="author">
                  <div class="name">
                    <h6 class="mb-0 font-weight-bolder">Samuel Kamuli</h6>
                    <div class="stats">
                      <i class="far fa-clock"></i> 3 weeks ago
                    </div>
                  </div>
                </div>
                <p class="mt-4">"Great product. Helped me cut the time to set up a site. I used the components within
                  instead of starting from scratch. I highly recommend for developers who want to spend more time on the
                  backend!."</p>
                <div class="rating mt-3">
                  <i class="fas fa-star text-success"></i>
                  <i class="fas fa-star text-success"></i>
                  <i class="fas fa-star text-success"></i>
                  <i class="fas fa-star text-success"></i>
                  <i class="fas fa-star text-success"></i>
                </div>
              </div>
            </div>
          </div>

        </div>
        <hr class="horizontal dark my-5">
        <div class="row">
          <div class="col-lg-2 col-md-4 col-6 ms-auto">
            <img class="w-100 opacity-6" src="/static/lib/material-kit/img/logos/gray-logos/logo-apple.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <img class="w-100 opacity-6" src="/static/lib/material-kit/img/logos/gray-logos/logo-facebook.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <img class="w-100 opacity-6" src="/static/lib/material-kit/img/logos/gray-logos/logo-nasa.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
            <img class="w-100 opacity-6" src="/static/lib/material-kit/img/logos/gray-logos/logo-vodafone.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6 me-md-auto mx-md-0 mx-auto">
            <img class="w-100 opacity-6" src="/static/lib/material-kit/img/logos/gray-logos/logo-digitalocean.svg" alt="Logo">
          </div>
        </div>
      </div>
    </section>


    <section class="py-sm-7" id="download-soft-ui">
      <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
        <img src="/static/lib/material-kit/img/shapes/waves-white.svg" alt="pattern-lines"
          class="position-absolute start-0 top-md-0 w-100 opacity-2">
        <div class="container py-7 postion-relative z-index-2 position-relative">
          <div class="row">
            <div class="col-md-7 mx-auto text-center">
              <h3 class="h4 text-white mb-0">Do you love this awesome</h3>
              <h3 class="text-white">UI Kit for Bootstrap 5?</h3>
              <p class="text-white mb-5">Cause if you do, it can be yours for FREE. Hit the button below to navigate to
                Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap
                project a new look!</p>
              <a href="https://www.creative-tim.com/product/material-kit"
                class="btn btn-success btn-lg mb-3 mb-sm-0">Download HTML</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-6 mx-auto">
            <div class="text-center">
              <h3 class="mt-5 mb-4">Available on these technologies</h3>
              <div class="row justify-content-center">
                <div class="col-lg-2 col-4">
                  <a href="https://www.creative-tim.com/product/soft-ui-design-system" target="_blank">
                    <img
                      src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/bootstrap5.jpg"
                      class="img-fluid" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      title="Bootstrap 5 - Most popular front-end component library">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href="javascript:;">
                    <img
                      src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/icon-tailwind.jpg"
                      class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      title="Comming soon">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href="javascript:;">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg"
                      class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      title="Comming soon">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href="javascript:;">
                    <img
                      src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg"
                      class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      title="Comming soon">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href="javascript:;">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg"
                      class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      title="Comming soon">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href="javascript:;" target="_blank">
                    <img
                      src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg"
                      class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      title="Comming soon">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-12 my-auto">
            <h3 class="text-gradient text-dark mb-0">You liked it and</h3>
            <h3>Want more?</h3>
            <p class="pe-md-5 mb-4">
              Most complex and innovative Design System Made by <a href="https://creative-tim.com/"
                target="_blank">Creative Tim </a> . Check our latest Premium Bootstrap 5 UI Kit.

              Designed for those who like bold elements and beautiful websites. Made of hundred of elements, designed
              blocks and fully coded pages, Material Kit is ready to help you create stunning websites and webapps.
            </p>
            <div class="github-buttons">
              <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2" target="_blank"
                class="btn bg-gradient-dark mb-5 mb-sm-0">Upgrade to Pro</a>
              <div class="github-button">
                <span></span>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-12 my-auto">
            <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2">
              <img class="w-100 border-radius-lg shadow-lg"
                src="https://s3.amazonaws.com/creativetim_bucket/products/46/original/material-kit-pro.jpg?1632843641"
                alt="Product Image">
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 ms-auto">
            <h4 class="mb-1">Thank you for your support!</h4>
            <p class="lead mb-0">We deliver the best web products</p>
          </div>
          <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
            <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Kit%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-kit"
              class="btn btn-twitter mb-0 me-2" target="_blank">
              <i class="fab fa-twitter me-1"></i> Tweet
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-kit"
              class="btn btn-facebook mb-0 me-2" target="_blank">
              <i class="fab fa-facebook-square me-1"></i> Share
            </a>
            <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-kit"
              class="btn btn-pinterest mb-0 me-2" target="_blank">
              <i class="fab fa-pinterest me-1"></i> Pin it
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

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