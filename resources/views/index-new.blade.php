<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  Title -->
  <title>Modernize Landing Page</title>
  <!--  Favicon -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets\images/logos/favicon.ico') }}">
  <!--  Aos -->
  <link rel="stylesheet" href="{{ asset('assets\libs/aos/dist/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets\libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets\css/style.min.css') }}">
</head>

<body>
  <div class="page-wrapper p-0 overflow-hidden">
    <header class="header">
      <nav class="navbar navbar-expand-lg py-0">
        <div class="container">
          <a class="navbar-brand me-0 py-0" href="index.html">
            <img src="{{ asset('assets\images/logos/logo-dark.svg') }}" alt="img-fluid">
          </a>
          <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="ti ti-menu-2 fs-9"></i>
          </button>
          <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <i class="ti ti-menu-2 fs-9"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center mb-2 mb-lg-0 ms-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false" data-bs-auto-close="outside"> Demos <span class="d-flex align-items-center">
                    <i class="ti ti-chevron-down"></i>
                  </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-animate-up">
                  <li><a class="dropdown-item scroll-link" href="#bootstrap-demos">Bootstrap Demos</a></li>
                  <li><a class="dropdown-item scroll-link" href="#react-demos">React Demos</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../docs/index.html"
                  target="_blank">Documentation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://adminmart.com/support/"
                  target="_blank">Support</a>
              </li>
              <li class="nav-item ms-2">
                <a class="btn btn-primary fs-3 rounded btn-hover-shadow px-3 py-2"
                  href="../package/html/main/authentication-login.html">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="body-wrapper overflow-hidden">
      <section class="hero-section position-relative overflow-hidden mb-0 mb-lg-11">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-6">
              <div class="hero-content my-11 my-xl-0">
                <h6 class="d-flex align-items-center gap-2 fs-4 fw-semibold mb-3" data-aos="fade-up"
                  data-aos-delay="200" data-aos-duration="1000"><i class="ti ti-rocket text-secondary fs-6"></i>Kick
                  start your project with</h6>
                <h1 class="fw-bolder mb-8 fs-13" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">2 in
                  1<span class="text-primary"> Bootstrap & React MUI</span>
                  dashboard</h1>
                <div
                  class="position-relative d-flex align-items-center justify-content-center justify-content-sm-start gap-3 mb-4"
                  data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                  <button href="#bootstrap-demos" class="card p-4 justify-content-center scroll-link bg-white active">
                    <img src="{{ asset('assets\images/svgs/icon-bootstrap.svg') }}" alt="" class="mx-auto" width="30" height="30">
                    <span class="d-block mt-2 fw-bolder text-dark">Bootstrap</span>
                  </button>
                  <button href="#react-demos" class="card p-4 justify-content-center scroll-link bg-white">
                    <img src="{{ asset('assets\images/svgs/icon-reactjs.svg') }}" alt="" class="mx-auto" width="30" height="30">
                    <span class="d-block mt-2 fw-bolder text-dark">React</span>
                  </button>
                </div>
                <div class="d-sm-flex align-items-center gap-3 mb-4" data-aos="fade-up" data-aos-delay="800"
                  data-aos-duration="1000">
                  <a class="btn btn-primary btn-hover-shadow d-block mb-3 mb-sm-0 scroll-link"
                    href="#bootstrap-demos">Bootstrap
                    Demos</a>
                  <a class="btn btn-outline-primary d-block scroll-link" href="#react-demos">React Demos</a>
                </div>
                <div class="d-sm-flex align-items-center gap-3 mb-4" data-aos="fade-up" data-aos-delay="1000"
                  data-aos-duration="1000">
                  <div class="border border-dashed px-3 py-2 rounded text-center text-sm-start mb-3 mb-sm-0">
                    <h5 class="mb-1 fw-bolder">425+</h5>
                    <p class="mb-0">Page Templates</p>
                  </div>
                  <div class="border border-dashed px-3 py-2 rounded text-center text-sm-start mb-3 mb-sm-0">
                    <h5 class="mb-1 fw-bolder">150+</h5>
                    <p class="mb-0">UI Components</p>
                  </div>
                  <div class="border border-dashed px-3 py-2 rounded text-center text-sm-start">
                    <h5 class="mb-1 fw-bolder">2000+</h5>
                    <p class="mb-0">Font Icons</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 d-none d-xl-block">
              <div class="hero-img-slide position-relative bg-light-primary p-4 rounded">
                <div class="d-flex flex-row">
                  <div class="">
                    <div class="banner-img-1 slideup">
                      <img src="{{ asset('assets\images/hero-img/bannerimg1.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="banner-img-1 slideup">
                      <img src="{{ asset('assets\images/hero-img/bannerimg1.svg') }}" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="">
                    <div class="banner-img-2 slideDown">
                      <img src="{{ asset('assets\images/hero-img/bannerimg2.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="banner-img-2 slideDown">
                      <img src="{{ asset('assets\images/hero-img/bannerimg2.svg') }}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="production pb-10 pb-md-14 border-bottom" id="bootstrap-demos">
        <div class="container">
          <div class="p-3 text-center"><img src="./dist/images/svgs/icon-bootstrap.svg') }}" alt="" class="img-fluid"></div>
          <h2 class="text-center fs-9 fw-bolder">Bootstrap Demos</h2>
          <p class="mb-0 fs-5 text-center">Collection of live demos included with package.</p>
          <div class="domo-contect position-relative">
            <div class="demos-view mt-11 pt-lg-8">
              <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/demos/demo-main.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/main/index.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Main</h6>
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/demos/demo-dark.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/dark/index.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Dark</h6>
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/demos/demo-horizontal.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/horizontal/index.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Horizontal</h6>
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/demos/demo-minisidebar.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/minisidebar/index.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Minisidebar</h6>
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/demos/demo-rtl.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/rtl/index.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">RTL</h6>
                </div>
              </div>
            </div>
            <div class="demos-view mt-4">
              <div class="badge text-bg-primary text-center mb-8 fs-4 py-6 px-4 d-table mx-auto rounded-pill">Apps
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/app-calendar.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/main/app-calendar.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Calendar</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/app-chat.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/main/app-chat.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Chat</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/app-email.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/main/app-email.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Email</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/app-contact.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/main/app-contact2.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Contact</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/app-invoice.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/main/app-invoice.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Invoice</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/modernize-bt-app-contact-list.jpg') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="../package/html/main/app-contact.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Contact List</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/app-user-profile.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/main/page-user-profile.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">User Profile</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/modernize-vue-app-blog.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/main/blog-posts.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Blog</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/modernize-vue-app-blog-detail.jpg') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="../package/html/main/blog-detail.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Blog Detail</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/modernize-vue-app-shop.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/main/eco-shop.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">eCommerce Shop</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/app-ecommerce-detail.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/main/eco-shop-detail.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">eCommerce Detail</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="{{ asset('assets\images/apps/app-ecommerce-list.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="../package/html/main/eco-product-list.html"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">eCommerce List</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="production pb-10 pb-md-14 pt-4 pt-md-5" id="react-demos">
        <div class="container">
          <div class="p-3 text-center"><img src="{{ asset('assets\images/svgs/icon-reactjs.svg') }}" alt="" class="img-fluid"></div>
          <h2 class="text-center fs-9 fw-bolder">React Demos</h2>
          <p class="mb-0 fs-5 text-center">Collection of live demos included with package.</p>
          <div class="domo-contect position-relative">
            <div class="demos-view mt-11 pt-lg-8">
              <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/01/modern-dashboard-demo.png') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/dashboards/modern"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Main</h6>
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/01/dark-demo.png') }}" alt="" class="img-fluid">
                    <a target="_blank" href="https://modernize-react-dark.netlify.app/dashboards/ecommerce"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Dark</h6>
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/01/horizontal-demo.png') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="https://modernize-react-horizontal.netlify.app/dashboards/modern"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Horizontal</h6>
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/01/rtl-demo.png') }}" alt="" class="img-fluid">
                    <a target="_blank" href="https://modernize-react-rtl.netlify.app/dashboards/modern"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">RTL</h6>
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/01/login.png') }}" alt="" class="img-fluid">
                    <a target="_blank" href="https://modernize-react-firebase.netlify.app/auth/login"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Firebase</h6>
                </div>
              </div>
            </div>
            <div class="demos-view mt-4">
              <div class="badge text-bg-primary text-center mb-8 fs-4 py-6 px-4 d-table mx-auto rounded-pill">Apps
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/03/app-calendar-2.jpg') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/apps/calendar"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Calendar</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/03/app-chat.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/apps/chats"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Chat</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/03/app-contact.jpg') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/apps/contacts"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Contact</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/03/app-email-1.jpg') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/apps/email"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Email</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/03/app-note.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/apps/notes"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Notes</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/03/app-user-profile.jpg') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/user-profile"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">User Profile</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/03/app-blog.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/apps/blog/posts"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Blog</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/01/app-blog-detail.jpg') }}" alt=""
                      class="img-fluid">
                    <a target="_blank"
                      href="https://modernize-react.adminmart.com/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Blog Detail</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/03/app-ticket.jpg') }}" alt="" class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/apps/tickets"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">Ticket</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/03/app-ecommerce-shop.jpg') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/apps/ecommerce/shop"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">eCommerce Shop</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/01/app-ecommerce-detail.jpg') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/apps/ecommerce/detail/1"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">eCommerce Detail</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/03/app-ecommerce-checkout.jpg') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/apps/ecommerce/eco-checkout"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">eCommerce Checkout</h6>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                  <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                    <img src="https://adminmart.com/wp-content/uploads/2023/03/app-ecommerce-list.jpg') }}" alt=""
                      class="img-fluid">
                    <a target="_blank" href="https://modernize-react.adminmart.com/apps/ecommerce/eco-product-list"
                      class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                      Preview</a>
                  </div>
                  <h6 class="mb-0 text-center fs-3">eCommerce List</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="bg-light py-5 py-lg-10 py-xl-12">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
              <h2 class="fs-9 text-center mb-5 fw-bolder">Increase speed of your development and launch quickly
                with Modernize</h2>
            </div>
          </div>
          <div class="sliding-wrapper position-relative overflow-hidden">
            <div class="slide-background d-flex flex-row w-100">
              <div class="slide">
                <img src="{{ asset('assets\images/slider/slider-group.png') }}" alt="slide" height="100%">
              </div>
              <div class="slide">
                <img src="{{ asset('assets\images/slider/slider-group.png') }}" alt="slide" height="100%">
              </div>
              <div class="slide">
                <img src="{{ asset('assets\images/slider/slider-group.png') }}" alt="slide" height="100%">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="review-section pt-5 pt-lg-10 pt-xl-12 pb-8 pb-lg-9">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h2 class="fs-9 text-center mb-4 mb-lg-5 fw-bolder" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1000">Don’t just take our words for it, See what developers
                like you are saying</h2>
            </div>
          </div>
          <div class="review-slider" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-1.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me provide a clean
                      and sleek look to my dashboard and made it look exactly the way I wanted it to, mainly without
                      having.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-2.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and flexibility
                      much better than the other products available in the market. I strongly recommend the AdminMart to
                      other buyers.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-3.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                          <p class="mb-0 fw-normal">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although it is pretty
                      much complete, I suggest to improve a bit of documentation. Thanks & Highly recomended!</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-1.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me provide a clean
                      and sleek look to my dashboard and made it look exactly the way I wanted it to, mainly without
                      having.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-2.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and flexibility
                      much better than the other products available in the market. I strongly recommend the AdminMart to
                      other buyers.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-3.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                          <p class="mb-0 fw-normal">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although it is pretty
                      much complete, I suggest to improve a bit of documentation. Thanks & Highly recomended!</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-1.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me provide a clean
                      and sleek look to my dashboard and made it look exactly the way I wanted it to, mainly without
                      having.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-2.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and flexibility
                      much better than the other products available in the market. I strongly recommend the AdminMart to
                      other buyers.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-3.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                          <p class="mb-0 fw-normal">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although it is pretty
                      much complete, I suggest to improve a bit of documentation. Thanks & Highly recomended!</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-1.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me provide a clean
                      and sleek look to my dashboard and made it look exactly the way I wanted it to, mainly without
                      having.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-2.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and flexibility
                      much better than the other products available in the market. I strongly recommend the AdminMart to
                      other buyers.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-3.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                          <p class="mb-0 fw-normal">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although it is pretty
                      much complete, I suggest to improve a bit of documentation. Thanks & Highly recomended!</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-1.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me provide a clean
                      and sleek look to my dashboard and made it look exactly the way I wanted it to, mainly without
                      having.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-2.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and flexibility
                      much better than the other products available in the market. I strongly recommend the AdminMart to
                      other buyers.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-3.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                          <p class="mb-0 fw-normal">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although it is pretty
                      much complete, I suggest to improve a bit of documentation. Thanks & Highly recomended!</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-1.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped me provide a clean
                      and sleek look to my dashboard and made it look exactly the way I wanted it to, mainly without
                      having.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-2.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                          <p class="mb-0 text-dark">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">The quality of design is excellent, customizability and flexibility
                      much better than the other products available in the market. I strongly recommend the AdminMart to
                      other buyers.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets\images/profile/user-3.jpg') }}" alt=""
                          class="w-auto me-3 rounded-circle" width="40" height="40">
                        <div>
                          <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                          <p class="mb-0 fw-normal">Features avaibility</p>
                        </div>
                      </div>
                      <div>
                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="{{ asset('assets\images/svgs/icon-star.svg') }}" alt="" class="img-fluid">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date. Although it is pretty
                      much complete, I suggest to improve a bit of documentation. Thanks & Highly recomended!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="features-section py-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="text-center" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <small class="text-primary fw-bold mb-2 d-block fs-3">ALMOST COVERED EVERYTHING</small>
                <h2 class="fs-9 text-center mb-4 mb-lg-9 fw-bolder">Other Amazing Features & Flexibility Provided</h2>
              </div>
            </div>
          </div>
          <div class="demo-app-tabs">
            <nav>
              <div class="nav nav-tabs position-relative justify-content-center mb-5" id="nav-tab" role="tablist">
                <button class="nav-link p-3 me-2 active" id="nav-bootstrap-features-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-bootstrap-features" type="button" role="tab"
                  aria-controls="nav-bootstrap-features" aria-selected="true"><img
                    src="./dist/images/svgs/icon-bootstrap.svg') }}" alt="" class="img-fluid"><span
                    class="d-block mt-2 fw-bold">Bootstrap</span></button>
                <button class="nav-link p-3 me-2" id="nav-react-features-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-react-features" type="button" role="tab" aria-controls="nav-react-features"
                  aria-selected="false"><img src="./dist/images/svgs/icon-reactjs.svg') }}" alt="" class="img-fluid"><span
                    class="d-block mt-2 fw-bold">React</span></button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-bootstrap-features" role="tabpanel"
                aria-labelledby="nav-bootstrap-features-tab" tabindex="0">
                <div class="row">
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-wand text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">6 Theme Colors</h5>
                      <p class="mb-0 text-dark">We have included 6 pre-defined Theme Colors with Elegant Admin.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-layout-sidebar text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Dark & Light Sidebar</h5>
                      <p class="mb-0 text-dark">Included Dark and Light Sidebar for getting desire look and feel.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-archive text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">425+ Page Templates</h5>
                      <p class="mb-0 text-dark">Yes, we have 5 demos & 79+ Pages per demo to make it easier.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-adjustments text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">150+ UI Components</h5>
                      <p class="mb-0 text-dark">Almost 150+ UI Components being given with Modernize Admin Pack.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-tag text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Bootstrap 5x</h5>
                      <p class="mb-0 text-dark">Its been made with Bootstrap 5 and full responsive layout.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-diamond text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">2000+ Font Icons</h5>
                      <p class="mb-0 text-dark">Lots of Icon Fonts are included here in the package of Elegant Admin.
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-device-desktop text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Fully Responsive</h5>
                      <p class="mb-0 text-dark">All the layout of Modernize Admin is Fully Responsive and widely tested.
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-database text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">SassBase CSS</h5>
                      <p class="mb-0 text-dark">Our Css is written Sass Base to make your life easier.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-arrows-shuffle text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Easy to Customize</h5>
                      <p class="mb-0 text-dark">Customization will be easy as we understand your pain.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-chart-pie text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Lots of Chart Options</h5>
                      <p class="mb-0 text-dark">You name it and we have it, Yes lots of variations for Charts.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-layers-intersect text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Lots of Table Examples</h5>
                      <p class="mb-0 text-dark">Data Tables are initial requirement and we added them.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-refresh text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Regular Updates</h5>
                      <p class="mb-0 text-dark">We are constantly updating our pack with new features.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-book text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Detailed Documentation</h5>
                      <p class="mb-0 text-dark">We have made detailed documentation, so it will easy to use.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-calendar text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Calendar Design</h5>
                      <p class="mb-0 text-dark">Calendar is available with our package & in nice design.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-brand-wechat text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Dedicated Support</h5>
                      <p class="mb-0 text-dark">We believe in supreme support is key and we offer that.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-react-features" role="tabpanel"
                aria-labelledby="nav-react-features-tab" tabindex="0">
                <div class="row">
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-wand text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">6 Theme Colors</h5>
                      <p class="mb-0 text-dark">We have included 6 pre-defined Theme Colors with Elegant Admin.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-shield-lock text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">JWT + Firebase Auth</h5>
                      <p class="mb-0 text-dark">It is JSON Object is used to securely transfer information over the web.
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-archive text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">50+ Page Templates</h5>
                      <p class="mb-0 text-dark">Yes, we have 5 demos & 50+ Pages per demo to make it easier.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-adjustments text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">45+ UI Components</h5>
                      <p class="mb-0 text-dark">Almost 45+ UI Components being given with Modernize Admin Pack.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-tag text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Material Ui</h5>
                      <p class="mb-0 text-dark">Its been made with Material Ui and full responsive layout.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-diamond text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">3400+ Font Icons</h5>
                      <p class="mb-0 text-dark">Lots of Icon Fonts are included here in the package of Elegant Admin.
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-database text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Axios</h5>
                      <p class="mb-0 text-dark">Axios is a promise-based HTTP Client for node.js and the browser.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-language text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">i18 React</h5>
                      <p class="mb-0 text-dark">react-i18 is a powerful internationalization framework for React.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-building-carousel text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Slick Carousel</h5>
                      <p class="mb-0 text-dark">The Last React Carousel You will Ever Need!</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-arrows-shuffle text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Easy to Customize</h5>
                      <p class="mb-0 text-dark">Customization will be easy as we understand your pain.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-chart-pie text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Lots of Chart Options</h5>
                      <p class="mb-0 text-dark">You name it and we have it, Yes lots of variations for Charts.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-layers-intersect text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Lots of Table Examples</h5>
                      <p class="mb-0 text-dark">Data Tables are initial requirement and we added them.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-refresh text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Regular Updates</h5>
                      <p class="mb-0 text-dark">We are constantly updating our pack with new features.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-book text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Detailed Documentation</h5>
                      <p class="mb-0 text-dark">We have made detailed documentation, so it will easy to use.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-calendar text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Calendar Design</h5>
                      <p class="mb-0 text-dark">Calendar is available with our package & in nice design.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                      <i class="d-block ti ti-messages text-primary fs-10"></i>
                      <h5 class="fs-5 fw-semibold mt-8">Dedicated Support</h5>
                      <p class="mb-0 text-dark">We believe in supreme support is key and we offer that.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-8 pt-md-5 pb-5 pb-lg-10 pb-xl-12">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="card c2a-box" data-aos="fade-up" data-aos-delay="1600" data-aos-duration="1000">
                <div class="card-body text-center p-4 pt-8">
                  <h3 class="fs-7 fw-semibold pt-6">Haven't found an answer to your question?</h3>
                  <p class="mb-8 pb-2 text-dark">Connect with us either on discord or email us</p>
                  <div class="d-sm-flex align-items-center justify-content-center gap-3 mb-4">
                    <a href="https://discord.com/invite/eMzE8F6Wqs" target="_blank"
                      class="btn btn-primary d-block mb-3 mb-sm-0 btn-hover-shadow" type="button">Ask on Discord</a>
                    <a href="https://adminmart.com/support" target="_blank" class="btn btn-outline-secondary d-block"
                      type="button">Submit Ticket</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-primary pt-5 pt-xl-9 pb-8">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-7 col-xl-5 pt-lg-5 mb-5 mb-lg-0">
              <h2 class="fs-12 text-white text-center text-lg-start fw-bolder mb-8">Build your app with our highly
                customizable Bootstrap & React based Dashboard</h2>
              <div class="d-sm-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                <a href="../package/html/main/authentication-login.html"
                  class="btn bg-white text-primary fw-semibold d-block mb-3 mb-sm-0 btn-hover-shadow">Login</a>
                <a href="../package/html/main/authentication-register.html"
                  class="btn border-white text-white fw-semibold btn-hover-white d-block">Register</a>
              </div>
            </div>
            <div class="col-lg-5 col-xl-5">
              <div class="text-center text-lg-end">
                <img src="{{ asset('assets\images/backgrounds/business-woman-checking-her-mail.png') }}" alt=""
                  class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="footer-part pt-8 pb-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="text-center">
              <a href="index-new.html">
                <img src="{{ asset('assets\images/logos/favicon.ico')}}" alt="" class="img-fluid pb-3">
              </a>
              <p class="mb-0 text-dark">All rights reserved by Modernize. Designed & Developed by <a
                  class="text-dark text-hover-primary border-bottom border-primary"
                  href="https://adminmart.com/">AdminMart.</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="offcanvas offcanvas-start modernize-lp-offcanvas" tabindex="-1" id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header p-4">
        <img src="{{ asset('assets\images/logos/logo-dark.svg') }}" alt="" class="img-fluid" width="150">
      </div>
      <div class="offcanvas-body p-4">
        <ul class="navbar-nav justify-content-end flex-grow-1">
          <li class="nav-item dropdown">
            <a class="nav-link fs-3 text-dark dropdown-toggle d-flex align-items-center justify-content-between" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-auto-close="outside"> Demos <span class="d-flex align-items-center">
                <i class="ti ti-chevron-down"></i>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-animate-up ps-2">
              <li><a class="dropdown-item scroll-link" href="#bootstrap-demos">Bootstrap Demos</a></li>
              <li><a class="dropdown-item scroll-link" href="#react-demos">React Demos</a></li>
            </ul>
          </li>
          <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark" aria-current="page" href="../docs/index.html">Documentation</a>
          </li>
          <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark" href="#">Pages</a>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <a href="../package/html/main/authentication-login.html" class="btn btn-primary w-100 py-2">Login</a>
        </form>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets\libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets\libs/aos/dist/aos.js') }}"></script>
  <script src="{{ asset('assets\libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets\libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets\js/custom.js') }}"></script>
  <script>
    // change URL Js
    $(function () {
      let currentURL =
        window.location != window.parent.location
          ? document.referrer
          : document.location.href;
      if (currentURL == "https://themeforest.net/") {
        $("a.download-link").attr(
          "href",
          "#"
        );
      } else {
        $("a.download-link").attr(
          "href",
          "https://adminmart.com/product/modernize-react-mui-dashboard-template/"
        );
      }
    });
  </script>
</body>

</html>
