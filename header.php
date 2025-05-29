<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arrox HTML Template">
    <!-- <title>Cruv Creative Agency & Portfolio HTML Template</title> -->

    <!-- Fav Icon -->
    <!-- <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png"> -->

    <!-- CSS Files -->
     <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-pro.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css"> -->

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>
    <div class="loader-wrap">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>

      <div class="loader-wrap-heading">
        <div class="load-text">
          <span>C</span>
          <span>r</span>
          <span>u</span>
          <span>v</span>
        </div>
      </div>
    </div>

    <!-- Sroll to top -->
    <div class="progress-wrap">
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
      </svg>
    </div>
    <!-- side toggle start -->
    <aside class="fix">
      <div class="side-info">
        <div class="side-info-content">
          <div class="offset-widget offset-header">
            <div class="offset-logo">
              <a href="index.html">
                <img
                  src="assets/img/logo/logo-black.png"
                  class="normal-logo"
                  alt="Site Logo"
               >
              </a>
            </div>
            <button id="side-info-close" class="side-info-close">x</button>
          </div>
          <div class="mobile-menu d-xl-none fix"></div>
          <div class="offset-button"></div>
          <div class="offset-widget-box">
            <h2 class="title">Contact US</h2>
            <div class="contact-meta">
              <div class="contact-item">
                <span class="icon"
                  ><i class="fa-solid fa-location-dot"></i
                ></span>
                <span class="text">3891 Ranchview Dr. Richardson</span>
              </div>
              <div class="contact-item">
                <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                <span class="text"
                  ><a href="mailto:hello@cruvagency.com"
                    >hello@cruvagency.com</a
                  ></span
                >
              </div>
              <div class="contact-item">
                <span class="icon"><i class="fa-solid fa-phone"></i></span>
                <span class="text"
                  ><a href="tel:(505)555-0125">(505) 555-0125</a></span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <div class="offcanvas-overlay"></div>
    <!-- side toggle end -->

    <!-- Header area start -->
    <header class="header-area">
      <div class="header-main">
        <div class="container">
          <div class="header-area__inner">
            <div class="header__logo">
              <a href="index.html">
                <img
                  src="assets/img/logo/Logo.png"
                  class="normal-logo"
                  alt="Site Logo"
               >
              </a>
            </div>
            <div class="header__nav">
              <nav class="main-menu">
                <ul>
                  <li class="menu-item-has-children">
                    <a href="#">Home</a>
                    <ul class="dp-menu">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="index-2.html">Home-2</a></li>
                    </ul>
                  </li>
                  <li><a href="about.html">About</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Services</a>
                    <ul class="dp-menu">
                      <li><a href="services.html">Services</a></li>
                      <li>
                        <a href="services-details.html">Service Details</a>
                      </li>
                    </ul>
                  </li>

                  <li class="menu-item-has-children">
                    <a href="#">Portfolio</a>
                    <ul class="dp-menu">
                      <li><a href="portfolio-grid.html">Portfolio Grid</a></li>
                      <li><a href="portfolio-list.html">Portfolio List</a></li>
                      <li>
                        <a href="portfolio-details.html">Portfolio Details</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="dp-menu">
                      <li><a href="team.html">Team Page</a></li>
                      <li><a href="pricing.html">Pricing Page</a></li>
                      <li><a href="faq.html">Faq</a></li>
                      <li><a href="404.html">404 Page</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="dp-menu">
                      <li><a href="blog-grid.html">Blog grid</a></li>
                      <li><a href="blog-list.html">Blog list</a></li>
                      <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a href="contact-us.html">Contact</a></li>
                </ul>
              </nav>
              <div class="header__navicon">
                <button class="side-toggle">
                  <span class="bar-icon">
                    <span></span>
                    <span></span>
                  </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header area end -->