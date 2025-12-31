<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="front-pages">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Credit Sales | by MRPsistemas</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="../../assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page-landing.css" />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/front-config.js"></script>
  </head>

  <body>
    <script src="../../assets/vendor/js/dropdown-hover.js"></script>
    <script src="../../assets/vendor/js/mega-dropdown.js"></script>

    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
      <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
          <!-- Menu logo wrapper: Start -->
          <div class="navbar-brand app-brand demo d-flex py-0 me-4">
            <!-- Mobile menu toggle: Start-->
            <button
              class="navbar-toggler border-0 px-0 me-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="tf-icons bx bx-menu bx-sm align-middle"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="landing-page.html" class="app-brand-link">
              <img src="../../assets/img/branding/logo-credit-sales-232.png" alt="Credit Sales Logo">
              <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Credit Sales</span>
            </a>
          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
              class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="tf-icons bx bx-x bx-sm"></i>
            </button>
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link fw-medium" aria-current="page" href="#landingHero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="#landingFeatures">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="#landingTeam">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="#landingFAQ">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="#landingContact">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="../vertical-menu-template/index.html" target="_blank">Admin</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <i class="bx bx-sm"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                    <span class="align-middle"><i class="bx bx-sun me-2"></i>Claro</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                    <span class="align-middle"><i class="bx bx-moon me-2"></i>Oscuro</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                    <span class="align-middle"><i class="bx bx-desktop me-2"></i>Sistema</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- navbar button: Start -->
            <li>
              <a href="{{ route('login') }}" class="btn btn-warning">
                <i class='bx  bxs-user'></i> 
                <span class="d-none d-md-block">Ingresar</span>
              </a>
              <a href="{{ route('register') }}" class="btn btn-success">
                <i class='bx  bxs-edit'></i> 
                <span class="d-none d-md-block">Registrarse</span>
              </a>
            </li>
            <!-- navbar button: End -->
          </ul>
          <!-- Toolbar: End -->
        </div>
      </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->

    <div data-bs-spy="scroll" class="scrollspy-example">
      <!-- Hero: Start -->
      <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
          <div class="container">
            <div class="hero-text-box text-center">
              <h1 class="text-primary hero-title display-4 fw-bold">Un panel de control para gestionar todos tus negocios</h1>
              <h2 class="hero-sub-title h6 mb-4 pb-1">
                App lista y fácil de usar<br class="d-none d-lg-block" />
                para confiabilidad y personalización.
              </h2>
              <div class="landing-hero-btn d-inline-block position-relative">
                <span class="hero-btn-item position-absolute d-none d-md-flex text-heading"
                  >Unirse a la comunidad
                  <img
                    src="../../assets/img/front-pages/icons/Join-community-arrow.png"
                    alt="Join community arrow"
                    class="scaleX-n1-rtl"
                /></span>
                <a href="#landingPricing" class="btn btn-primary">Obtenga acceso</a>
              </div>
            </div>
            <div id="heroDashboardAnimation" class="hero-animation-img mt-5">
              <a href="../vertical-menu-template/app-ecommerce-dashboard.html" target="_blank">
                <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                  <img
                    src="../../assets/img/front-pages/landing-page/credirsales-dashboard-light.png"
                    alt="hero dashboard"
                    class="animation-img"
                    data-app-light-img="front-pages/landing-page/credirsales-dashboard-light.png"
                    data-app-dark-img="front-pages/landing-page/credirsales-dashboard-dark.png" />
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="landing-hero-blank"></div>
      </section>
      <!-- Hero: End -->

      <!-- Useful features: Start -->
      <section id="landingFeatures" class="section-py landing-features">
        <div class="container">
          <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary">Características útiles</span>
          </div>
          <h3 class="text-center mb-1">
            <span class="section-title">Todo lo que necesitas</span> para comenzar tu próximo negocio
          </h3>
          <p class="text-center mb-3 mb-md-5 pb-3">
            Not just a set of tools, the package includes ready-to-deploy conceptual application.
          </p>
          <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="../../assets/img/front-pages/icons/laptop.png" alt="laptop charging" />
              </div>
              <h5 class="mb-3">Quality Code</h5>
              <p class="features-icon-description">
                Code structure that all developers will easily understand and fall in love with.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="../../assets/img/front-pages/icons/rocket.png" alt="transition up" />
              </div>
              <h5 class="mb-3">Continuous Updates</h5>
              <p class="features-icon-description">
                Free updates for the next 12 months, including new demos and features.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="../../assets/img/front-pages/icons/paper.png" alt="edit" />
              </div>
              <h5 class="mb-3">Stater-Kit</h5>
              <p class="features-icon-description">
                Start your project quickly without having to remove unnecessary features.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="../../assets/img/front-pages/icons/check.png" alt="3d select solid" />
              </div>
              <h5 class="mb-3">API Ready</h5>
              <p class="features-icon-description">
                Just change the endpoint and see your own data loaded within seconds.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="../../assets/img/front-pages/icons/user.png" alt="lifebelt" />
              </div>
              <h5 class="mb-3">Excellent Support</h5>
              <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="../../assets/img/front-pages/icons/keyboard.png" alt="google docs" />
              </div>
              <h5 class="mb-3">Well Documented</h5>
              <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Useful features: End -->

      <!-- Real customers reviews: Start -->
      <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
        <!-- What people say slider: Start -->
        <div class="container">
          <div class="row align-items-center gx-0 gy-4 g-lg-5">
            <div class="col-md-6 col-lg-5 col-xl-3">
              <div class="mb-3 pb-1">
                <span class="badge bg-label-primary">Real Customers Reviews</span>
              </div>
              <h3 class="mb-1"><span class="section-title">What people say</span></h3>
              <p class="mb-3 mb-md-5">
                See what our customers have to<br class="d-none d-xl-block" />
                say about their experience.
              </p>
              <div class="landing-reviews-btns d-flex align-items-center gap-3">
                <button id="reviews-previous-btn" class="btn btn-label-primary reviews-btn" type="button">
                  <i class="bx bx-chevron-left bx-sm"></i>
                </button>
                <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn" type="button">
                  <i class="bx bx-chevron-right bx-sm"></i>
                </button>
              </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-9">
              <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
                <div class="swiper" id="swiper-reviews">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-1.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “Frest is hands down the most useful front end Bootstrap theme I've ever used. I can't wait
                            to use it again for my next project.”
                          </p>
                          <div class="text-warning mb-3">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Cecilia Payne</h6>
                              <p class="small text-muted mb-0">CEO of Airbnb</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-2.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “I've never used a theme as versatile and flexible as Frest. It's my go to for building
                            dashboard sites on almost any project.”
                          </p>
                          <div class="text-warning mb-3">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Eugenia Moore</h6>
                              <p class="small text-muted mb-0">Founder of Hubspot</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-3.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            This template is really clean & well documented. The docs are really easy to understand and
                            it's always easy to find a screenshot from their website.
                          </p>
                          <div class="text-warning mb-3">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Curtis Fletcher</h6>
                              <p class="small text-muted mb-0">Design Lead at Dribbble</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-4.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            All the requirements for developers have been taken into consideration, so I’m able to build
                            any interface I want.
                          </p>
                          <div class="text-warning mb-3">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bx-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Sara Smith</h6>
                              <p class="small text-muted mb-0">Founder of Continental</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-5.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “I've never used a theme as versatile and flexible as Frest. It's my go to for building
                            dashboard sites on almost any project.”
                          </p>
                          <div class="text-warning mb-3">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Eugenia Moore</h6>
                              <p class="small text-muted mb-0">Founder of Hubspot</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-6.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nemo mollitia, ad eum
                            officia numquam nostrum repellendus consequuntur!
                          </p>
                          <div class="text-warning mb-3">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bx-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Sara Smith</h6>
                              <p class="small text-muted mb-0">Founder of Continental</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- What people say slider: End -->
        <hr class="m-0" />
        <!-- Logo slider: Start -->
        <div class="container">
          <div class="swiper-logo-carousel py-4 my-lg-2">
            <div class="swiper" id="swiper-clients-logos">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_1-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_1-light.png"
                    data-app-dark-img="front-pages/branding/logo_1-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_2-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_2-light.png"
                    data-app-dark-img="front-pages/branding/logo_2-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_3-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_3-light.png"
                    data-app-dark-img="front-pages/branding/logo_3-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_4-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_4-light.png"
                    data-app-dark-img="front-pages/branding/logo_4-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_5-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_5-light.png"
                    data-app-dark-img="front-pages/branding/logo_5-dark.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Logo slider: End -->
      </section>
      <!-- Real customers reviews: End -->

      <!-- Our great team: Start -->
      <section id="landingTeam" class="section-py landing-team">
        <div class="container">
          <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary">Our Great Team</span>
          </div>
          <h3 class="text-center mb-1"><span class="section-title">Supported</span> by Real People</h3>
          <p class="text-center mb-md-5 pb-3">Who is behind these great-looking interfaces?</p>
          <div class="row gy-5 mt-2">
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-primary position-relative team-image-box">
                  <img
                    src="../../assets/img/front-pages/landing-page/team-member-1.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl img-fluid"
                    alt="human image" />
                </div>
                <div class="card-body border border-label-primary border-top-0 text-center">
                  <h5 class="card-title mb-0">Sophie Gilbert</h5>
                  <p class="text-muted mb-0">Project Manager</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-info position-relative team-image-box">
                  <img
                    src="../../assets/img/front-pages/landing-page/team-member-2.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl img-fluid"
                    alt="human image" />
                </div>
                <div class="card-body border border-label-info border-top-0 text-center">
                  <h5 class="card-title mb-0">Paul Miles</h5>
                  <p class="text-muted mb-0">UI Designer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-danger position-relative team-image-box">
                  <img
                    src="../../assets/img/front-pages/landing-page/team-member-3.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl img-fluid"
                    alt="human image" />
                </div>
                <div class="card-body border border-label-danger border-top-0 text-center">
                  <h5 class="card-title mb-0">Nannie Ford</h5>
                  <p class="text-muted mb-0">Development Lead</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-success position-relative team-image-box">
                  <img
                    src="../../assets/img/front-pages/landing-page/team-member-4.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl img-fluid"
                    alt="human image" />
                </div>
                <div class="card-body border border-label-success border-top-0 text-center">
                  <h5 class="card-title mb-0">Chris Watkins</h5>
                  <p class="text-muted mb-0">Marketing Manager</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our great team: End -->

      <!-- Pricing plans: Start -->
      <section id="landingPricing" class="section-py bg-body landing-pricing">
        <div class="container">
          <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary">Planes de precios</span>
          </div>
          <h3 class="text-center mb-1"><span class="section-title">Planes de precios personalizados</span> diseñados para ti</h3>
          <p class="text-center mb-4 pb-3">
            Todos los planes incluyen más de 40 herramientas y funciones avanzadas para impulsar tu producto.<br />Elige el mejor plan que se ajuste a tus necesidades.
          </p>
          <div class="text-center mb-5">
            <div class="position-relative d-inline-block pt-3 pt-md-0">
              <label class="switch switch-primary me-0">
                <span class="switch-label">Pagar mensualmente</span>
                <input type="checkbox" class="switch-input price-duration-toggler" checked />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Pagar anual</span>
              </label>
              <div class="pricing-plans-item position-absolute d-flex">
                <img
                  src="../../assets/img/front-pages/icons/pricing-plans-arrow.png"
                  alt="pricing plans arrow"
                  class="scaleX-n1-rtl" />
                <span class="fw-medium mt-2 ms-1"> Ahorre un 25%</span>
              </div>
            </div>
          </div>
          <div class="row gy-4 pt-lg-3">
            <!-- Basic Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    <img
                      src="../../assets/img/front-pages/icons/paper-airplane.png"
                      alt="paper airplane icon"
                      class="mb-4 pb-2 scaleX-n1-rtl" />
                    <h4 class="mb-1">Basic</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h1 text-primary fw-bold mb-0">$65.0000</span>
                      <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$52.000</span>
                      <sub class="h6 text-muted mb-0 ms-1">/mes</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">$ 624.000 / año</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Timeline
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Basic search
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Live chat widget
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Email marketing
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Custom Forms
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Traffic analytics
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Basic Support
                      </h5>
                    </li>
                  </ul>
                  <div class="d-grid mt-4 pt-3">
                    <a href="payment-page.html" class="btn btn-label-primary">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Basic Plan: End -->

            <!-- Favourite Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card border border-primary shadow-lg">
                <div class="card-header">
                  <div class="text-center">
                    <img
                      src="../../assets/img/front-pages/icons/plane.png"
                      alt="plane icon"
                      class="mb-4 pb-2 scaleX-n1-rtl" />
                    <h4 class="mb-1">Standard</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h1 text-primary fw-bold mb-0">$85.000</span>
                      <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$68.000</span>
                      <sub class="h6 text-muted mb-0 ms-1">/mes</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">$ 816.000 / año</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Everything in basic
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Timeline with database
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Advanced search
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Marketing automation
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Advanced chatbot
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Campaign management
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Collaboration tools
                      </h5>
                    </li>
                  </ul>
                  <div class="d-grid mt-4 pt-3">
                    <a href="payment-page.html" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Favourite Plan: End -->

            <!-- Standard Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    <img
                      src="../../assets/img/front-pages/icons/shuttle-rocket.png"
                      alt="shuttle rocket icon"
                      class="mb-4 pb-2 scaleX-n1-rtl" />
                    <h4 class="mb-1">Enterprise</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h1 text-primary fw-bold mb-0">$120.0000</span>
                      <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$90.000</span>
                      <sub class="h6 text-muted mb-0 ms-1">/mes</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">$ 1.080.000 / año</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Everything in premium
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Timeline with database
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Fuzzy search
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        A/B testing sanbox
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Custom permissions
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Social media automation
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Sales automation tools
                      </h5>
                    </li>
                  </ul>
                  <div class="d-grid mt-4 pt-3">
                    <a href="payment-page.html" class="btn btn-label-primary">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Standard Plan: End -->
          </div>
        </div>
      </section>
      <!-- Pricing plans: End -->

      <!-- Fun facts: Start -->
      <section id="landingFunFacts" class="section-py landing-fun-facts">
        <div class="container">
          <div class="row gy-3">
            <div class="col-sm-6 col-lg-3">
              <div class="card border border-label-primary shadow-none">
                <div class="card-body text-center">
                  <img src="../../assets/img/front-pages/icons/laptop.png" alt="laptop" class="mb-2" />
                  <h5 class="h2 mb-1">7.1k+</h5>
                  <p class="fw-medium mb-0">
                    Support Tickets<br />
                    Resolved
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card border border-label-success shadow-none">
                <div class="card-body text-center">
                  <img src="../../assets/img/front-pages/icons/user-success.png" alt="laptop" class="mb-2" />
                  <h5 class="h2 mb-1">50k+</h5>
                  <p class="fw-medium mb-0">
                    Join creatives<br />
                    community
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card border border-label-info shadow-none">
                <div class="card-body text-center">
                  <img src="../../assets/img/front-pages/icons/diamond-info.png" alt="laptop" class="mb-2" />
                  <h5 class="h2 mb-1">4.8/5</h5>
                  <p class="fw-medium mb-0">
                    Highly Rated<br />
                    Products
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card border border-label-warning shadow-none">
                <div class="card-body text-center">
                  <img src="../../assets/img/front-pages/icons/check-warning.png" alt="laptop" class="mb-2" />
                  <h5 class="h2 mb-1">100%</h5>
                  <p class="fw-medium mb-0">
                    Money Back<br />
                    Guarantee
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Fun facts: End -->

      <!-- FAQ: Start -->
      <section id="landingFAQ" class="section-py bg-body landing-faq">
        <div class="container">
          <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary">FAQ</span>
          </div>
          <h3 class="text-center mb-1">Frequently asked <span class="section-title">questions</span></h3>
          <p class="text-center mb-5 pb-3">Browse through these FAQs to find answers to commonly asked questions.</p>
          <div class="row gy-5">
            <div class="col-lg-5">
              <div class="text-center">
                <img
                  src="../../assets/img/front-pages/landing-page/faq-boy-with-logos.png"
                  alt="faq boy with logos"
                  class="faq-image" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="accordion accordion-header-primary" id="accordionExample">
                <div class="card accordion-item active">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      type="button"
                      class="accordion-button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionOne"
                      aria-expanded="true"
                      aria-controls="accordionOne">
                      Do you charge for each upgrade?
                    </button>
                  </h2>

                  <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                      marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                      soufflé. Wafer gummi bears marshmallow pastry pie.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionTwo"
                      aria-expanded="false"
                      aria-controls="accordionTwo">
                      Do I need to purchase a license for each website?
                    </button>
                  </h2>
                  <div
                    id="accordionTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                      dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly
                      beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionThree"
                      aria-expanded="false"
                      aria-controls="accordionThree">
                      What is regular license?
                    </button>
                  </h2>
                  <div
                    id="accordionThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Regular license can be used for end products that do not charge users for access or service(access
                      is free and there will be no monthly subscription fee). Single regular license can be used for
                      single end product and end product can be used by you or your client. If you want to sell end
                      product to multiple clients then you will need to purchase separate license for each client. The
                      same rule applies if you want to use the same end product on multiple domains(unique setup). For
                      more info on regular license you can check official description.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFour"
                      aria-expanded="false"
                      aria-controls="accordionFour">
                      What is extended license?
                    </button>
                  </h2>
                  <div
                    id="accordionFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid quaerat possimus maxime!
                      Mollitia reprehenderit neque repellat delenibx delectus architecto dolorum maxime, blanditiis
                      earum ea, incidunt quam possimus cumque.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFive"
                      aria-expanded="false"
                      aria-controls="accordionFive">
                      Which license is applicable for SASS application?
                    </button>
                  </h2>
                  <div
                    id="accordionFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias exercitationem ab cum
                      nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia ipsam quasi
                      labore enim architecto non!
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ: End -->

      <!-- CTA: Start -->
      <section id="landingCTA" class="section-py landing-cta p-lg-0 pb-0">
        <div class="container">
          <div class="row align-items-center gy-5 gy-lg-0">
            <div class="col-lg-6 text-center text-lg-start">
              <h6 class="h2 text-primary fw-bold mb-1">Ready to Get Started?</h6>
              <p class="fw-medium mb-4">Start your project with a 14-day free trial</p>
              <a href="payment-page.html" class="btn btn-primary">Get Started</a>
            </div>
            <div class="col-lg-6 pt-lg-5 text-center text-lg-end">
              <img
                src="../../assets/img/front-pages/landing-page/cta-dashboard.png"
                alt="cta dashboard"
                class="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <!-- CTA: End -->

      <!-- Contact Us: Start -->
      <section id="landingContact" class="section-py bg-body landing-contact">
        <div class="container">
          <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary">Contactanos</span>
          </div>
          <h3 class="text-center mb-1"><span class="section-title">Vamos a trabajar</span> juntos</h3>
          <p class="text-center mb-4 mb-lg-5 pb-md-3">¿Tienes alguna pregunta o comentario? Escríbenos.</p>
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="contact-img-box position-relative border p-2 h-100">
                <img
                  src="../../assets/img/front-pages/landing-page/contact-customer-service.png"
                  alt="contact customer service"
                  class="contact-img w-100 scaleX-n1-rtl img-fluid" />
                <div class="pt-3 px-4 pb-1">
                  <div class="row gy-3 gx-md-4">
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="badge bg-label-primary rounded p-2 me-2"><i class="bx bx-envelope bx-sm"></i></div>
                        <div>
                          <p class="mb-0">Correo Electrónico</p>
                          <h6 class="mb-0">
                            <a href="mailto:support@gmail.com" class="text-heading">support@credit-sales.net</a>
                          </h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="badge bg-label-success rounded p-2 me-2">
                          <i class="bx bx-phone-call bx-sm"></i>
                        </div>
                        <div>
                          <p class="mb-0">Teléfono</p>
                          <h5 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+57 315 2579 805</a></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card">
                <div class="card-body">
                  <h4 class="mb-1">Enviar un mensaje</h4>
                  <p class="mb-4">
                    Si desea discutir cualquier tema relacionado con pagos, cuentas, licencias,<br
                      class="d-none d-lg-block" />
                    Si tiene alguna pregunta sobre asociaciones o si está considerando realizar una venta, está en el lugar correcto.
                  </p>
                  <form>
                    <div class="row g-4">
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-fullname">Nombre Completo</label>
                        <input type="text" class="form-control" id="contact-form-fullname" placeholder="john" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-email">Correo Electrónico</label>
                        <input
                          type="text"
                          id="contact-form-email"
                          class="form-control"
                          placeholder="johndoe@gmail.com" />
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="contact-form-message">Mensaje</label>
                        <textarea
                          id="contact-form-message"
                          class="form-control"
                          rows="9"
                          placeholder="Escribe un mensaje"></textarea>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Enviar consulta</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Us: End -->
    </div>

    <!-- / Sections:End -->

    <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text">
      <div class="footer-top">
        <div class="container">
          <div class="row gx-0 gy-4 g-md-5">
            <div class="col-lg-5">
              <a href="landing-page.html" class="app-brand-link mb-4">
                <img src="../../assets/img/branding/logo-credit-sales-264.png" alt="Credit Sales Logo">
                <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">Credit Sales</span>
              </a>
              <p class="footer-text footer-logo-description mb-4">
                La forma mas sencilla de controlar tus ventas.
              </p>
              <form class="footer-form">
                <label for="footer-email" class="small">Suscríbete al boletín informativo</label>
                <div class="d-flex mt-1">
                  <input
                    type="email"
                    class="form-control rounded-0 rounded-start-bottom rounded-start-top"
                    id="footer-email"
                    placeholder="Tu correo electrónico" />
                  <button
                    type="submit"
                    class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                    Suscribir
                  </button>
                </div>
              </form>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <h6 class="footer-title mb-4">Demos</h6>
              <ul class="list-unstyled mb-md-0">
                <li class="mb-3">
                  <a href="#" target="_blank" class="footer-link">Academico Plus</a>
                </li>
                <li class="mb-3">
                  <a href="#" target="_blank" class="footer-link">Sales Plus</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <h6 class="footer-title mb-4">Pages</h6>
              <ul class="list-unstyled mb-md-0">
                <li class="mb-3">
                  <a href="#" class="footer-link">Pricing</a>
                </li>
                <li class="mb-3">
                  <a href="#" class="footer-link"
                    >Payment<span class="badge rounded bg-primary ms-2 px-2">New</span></a
                  >
                </li>
                <li class="mb-3">
                  <a href="#" class="footer-link">Checkout</a>
                </li>
                <li class="mb-3">
                  <a href="#" class="footer-link">Help Center</a>
                </li>
                <li>
                  <a href="#" target="_blank" class="footer-link"
                    >Login/Register</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-4">
              <h6 class="footer-title mb-4">Descarga nuestra aplicación</h6>
              <a href="javascript:void(0);" class="d-block footer-link mb-3 pb-2"
                ><img src="../../assets/img/front-pages/landing-page/apple-icon.png" alt="apple icon"
              /></a>
              <a href="javascript:void(0);" class="d-block footer-link"
                ><img src="../../assets/img/front-pages/landing-page/google-play-icon.png" alt="google play icon"
              /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom py-3">
        <div
          class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
          <div class="mb-2 mb-md-0">
            <span class="footer-text"
              >©
              <script>
                document.write(new Date().getFullYear());
              </script>
            </span>
            <a href="https://mrpsistemas.com" target="_blank" class="fw-medium text-white footer-link">MRPsistemas,</a>
            <span class="footer-text"> Made with ❤️ for a better web by MHRP.</span>
          </div>
          <div>
            <a href="https://github.com/pixinvent" class="footer-link me-3" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/github-light.png"
                alt="github icon"
                data-app-light-img="front-pages/icons/github-light.png"
                data-app-dark-img="front-pages/icons/github-dark.png" />
            </a>
            <a href="https://www.facebook.com/pixinvents/" class="footer-link me-3" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/facebook-light.png"
                alt="facebook icon"
                data-app-light-img="front-pages/icons/facebook-light.png"
                data-app-dark-img="front-pages/icons/facebook-dark.png" />
            </a>
            <a href="https://twitter.com/pixinvents" class="footer-link me-3" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/twitter-light.png"
                alt="twitter icon"
                data-app-light-img="front-pages/icons/twitter-light.png"
                data-app-dark-img="front-pages/icons/twitter-dark.png" />
            </a>
            <a href="https://www.instagram.com/pixinvents/" class="footer-link" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/instagram-light.png"
                alt="google icon"
                data-app-light-img="front-pages/icons/instagram-light.png"
                data-app-dark-img="front-pages/icons/instagram-dark.png" />
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer: End -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/nouislider/nouislider.js"></script>
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/front-main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/front-page-landing.js"></script>
  </body>
</html>
