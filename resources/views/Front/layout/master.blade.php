
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> @yield('title')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/css/LineIcons.3.0.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/css/animate.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/css/tiny-slider.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/css/glightbox.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/css/main.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/css/css_form.css')}}" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
       .hidden {
        display: none;
    }
  </style>
    @yield('css')


</head>

<body>
   
    <!-- Preloader -->
    <div class="preloader">
      <div class="preloader-inner">
          <div class="preloader-icon">
              <span></span>
              <span></span>
          </div>
      </div>
  </div>
  <!-- /End Preloader -->

  <!-- Start Header Area -->
  <header class="header navbar-area">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12">
                  <div class="nav-inner">
                      <!-- Start Navbar -->
                      <nav class="navbar navbar-expand-lg">
                          <a class="navbar-brand" href="index.html">
                              <img src=" {{URL::asset('assets/images/logo/logo.svg')}}" alt="Logo">
                          </a>
                          <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                              aria-expanded="false" aria-label="Toggle navigation">
                              <span class="toggler-icon"></span>
                              <span class="toggler-icon"></span>
                              <span class="toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                              <ul id="nav" class="navbar-nav ms-auto">
                                  <li class="nav-item">
                                      <a href="{{ route('home') }}" class="{{ (Route::currentRouteName() == 'home') ? 'active' : '' }}" aria-label="Toggle navigation">Home</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                          data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                          aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                      <ul class="sub-menu collapse" id="submenu-1-1">
                                          <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                          <li class="nav-item"><a href="gallery.html">Gallery</a></li>
                                          <li class="nav-item"><a href="pricing.html">Pricing</a></li>
                                          <li class="nav-item"><a href="sponsors.html">Sponsors</a></li>
                                          <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                                          <li class="nav-item"><a href="404.html">404 Error</a></li>
                                      </ul>
                                  </li>
                                  
                                    <li class="nav-item">

                                      <a href="{{ route('events') }}" class="{{ (Route::currentRouteName() == 'events') ? 'active' : '' }}" aria-label="Toggle navigation">Events</a>
                                  </li>
                                    <li class="nav-item">

                                      <a href="{{ route('my_resrvation') }}" class="{{ (Route::currentRouteName() == 'my_resrvation') ? 'active' : '' }}" aria-label="Toggle navigation">My resrvation</a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="speakers.html" aria-label="Toggle navigation">Speakers</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                          data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                          aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                      <ul class="sub-menu collapse" id="submenu-1-2">
                                          <li class="nav-item"><a href="blog-grid.html">Blog Grid</a>
                                          </li>
                                          <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                      </ul>
                                  </li>
                                  <li class="nav-item">
                                      <a href="contact.html" aria-label="Toggle navigation">Contact</a>
                                  </li>
                              </ul>
                          </div> <!-- navbar collapse -->
                          <div class="button">
                           @guest
                           <a href="{{ route('login') }}" class="btn">Login<i class="fa-solid fa-arrow-right-to-bracket"></i></a>     
                           @endguest
                           @auth
                       
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                          <a class="btn" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              <i class="lni lni-exit me-2"></i> Sign Out
                          </a>

                           @endauth
                          </div>
                      </nav>
                      <!-- End Navbar -->
                  </div>
              </div>
          </div> <!-- row -->
      </div> <!-- container -->
  </header>
  <!-- End Header Area -->
  @if ($message = session('flash_message_True'))
                            
    <script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    
        Toast.fire({
            icon: 'success',
            title: '{{ $message }}'
        })
    </script>
    @endif
  @if ($message = session('flash_message_false'))
                            
    <script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    
        Toast.fire({
            icon: 'error',
            title: '{{ $message }}'
        })
    </script>
    @endif

@yield('contant')
  
    


    <!-- Start Footer Area -->
    <footer class="footer">
      <!-- Start Footer Top -->
      <div class="footer-top">
          <div class="container">
              <div class="inner-content">
                  <div class="row">
                      <div class="col-lg-4 col-md-6 col-12">
                          <!-- Single Widget -->
                          <div class="single-footer f-about">
                              <div class="logo">
                                  <a href="index.html">
                                      <img src="{{URL::asset('assets/images/logo/dark-logo.svg')}}" alt="#">
                                  </a>
                              </div>
                              <p>A business conference organize by EventGrids In. World’s most influential media,
                                  entertainment & technology.</p>
                              <span class="social-title">
                                  Follow Us On:
                              </span>
                              <ul class="social">
                                  <li>
                                      <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                                  </li>
                                  <li>
                                      <a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a>
                                  </li>
                                  <li>
                                      <a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a>
                                  </li>
                                  <li>
                                      <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                  </li>
                              </ul>
                          </div>
                          <!-- End Single Widget -->
                      </div>
                      <div class="col-lg-2 col-md-6 col-12">
                          <!-- Single Widget -->
                          <div class="single-footer f-link">
                              <h3>Quick Links</h3>
                              <ul>
                                  <li><a href="javascript:void(0)">Get Direction</a></li>
                                  <li><a href="javascript:void(0)">Sponsor</a></li>
                                  <li><a href="javascript:void(0)">What We Offer</a></li>
                                  <li><a href="javascript:void(0)">Ricent Projects</a></li>
                                  <li><a href="javascript:void(0)">Insights</a></li>
                              </ul>
                          </div>
                          <!-- End Single Widget -->
                      </div>
                      <div class="col-lg-2 col-md-6 col-12">
                          <!-- Single Widget -->
                          <div class="single-footer f-link">
                              <h3>Know More</h3>
                              <ul>
                                  <li><a href="javascript:void(0)">About Us</a></li>
                                  <li><a href="javascript:void(0)">Our Pricing</a></li>
                                  <li><a href="javascript:void(0)">Faq</a></li>
                                  <li><a href="javascript:void(0)">Guides</a></li>
                                  <li><a href="javascript:void(0)">Contact Us</a></li>
                              </ul>
                          </div>
                          <!-- End Single Widget -->
                      </div>
                      <div class="col-lg-4 col-md-6 col-12">
                          <!-- Single Widget -->
                          <div class="single-footer newsletter">
                              <h3>Subscribe to our newsletter</h3>
                              <form action="#" method="get" target="_blank" class="newsletter-form">
                                  <input name="name" placeholder="Your Name*" required="required" type="text">
                                  <input name="email" placeholder="Email address*" required="required" type="email">
                                  <div class="button">
                                      <button class="btn">Subscribe
                                      </button>
                                  </div>
                              </form>
                          </div>
                          <!-- End Single Widget -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--/ End Footer Top -->
      <!-- Start Copyright Area -->
      <div class="copyright">
          <div class="container">
              <div class="inner-content">
                  <div class="row">
                      <div class="col-12">
                          <p class="copyright-text">Designed and Developed by <a href="https://graygrids.com/"
                                  rel="nofollow" target="_blank">GrayGrids</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Copyright Area -->
  </footer>
  <!--/ End Footer Area -->

  <!-- ========================= scroll-top ========================= -->
  <a href="#" class="scroll-top">
      <i class="lni lni-chevron-up"></i>
  </a>

   <!-- ========================= JS here ========================= -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

   <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
   <script src="{{ URL::asset('assets/js/jquery-3.7.1.min.js') }}"></script>
   <script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
   <script src="{{ URL::asset('assets/js/tiny-slider.js') }}"></script>
   <script src="{{ URL::asset('assets/js/glightbox.min.js') }}"></script>
   <script src="{{ URL::asset('assets/js/count-up.min.js') }}"></script>
   <script src="{{ URL::asset('assets/js/main.js') }}"></script>
   
   <script src="https://kit.fontawesome.com/e9ea9ee727.js" crossorigin="anonymous"></script>
        @yield('js')
   <script>
       //========= glightbox
       GLightbox({
           'href': 'https://www.youtube.com/watch?v=Gxw45q3Ga3k',
           'type': 'video',
           'source': 'youtube', //vimeo, youtube or local
           'width': 900,
           'autoplayVideos': true,
       });

       //========= testimonial 
       tns({
           container: '.testimonial-slider',
           items: 3,
           slideBy: 'page',
           autoplay: false,
           mouseDrag: true,
           gutter: 0,
           nav: true,
           controls: false,
           controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
           responsive: {
               0: {
                   items: 1,
               },
               540: {
                   items: 1,
               },
               768: {
                   items: 2,
               },
               992: {
                   items: 2,
               },
               1170: {
                   items: 3,
               }
           }
       });
   </script>
   {{-- <script>
       const finaleDate = new Date({{ $event->Date_start}}).getTime();

       const timer = () => {
           const now = new Date().getTime();
           let diff = finaleDate - now;
           if (diff < 0) {
               document.querySelector('.alert').style.display = 'block';
               document.querySelector('.container').style.display = 'none';
           }

           let days = Math.floor(diff / (1000 * 60 * 60 * 24));
           let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
           let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
           let seconds = Math.floor(diff % (1000 * 60) / 1000);

           days <= 99 ? days = `0${days}` : days;
           days <= 9 ? days = `00${days}` : days;
           hours <= 9 ? hours = `0${hours}` : hours;
           minutes <= 9 ? minutes = `0${minutes}` : minutes;
           seconds <= 9 ? seconds = `0${seconds}` : seconds;

           document.querySelector('#days').textContent = days;
           document.querySelector('#hours').textContent = hours;
           document.querySelector('#minutes').textContent = minutes;
           document.querySelector('#seconds').textContent = seconds;

       }
       timer();
       setInterval(timer, 1000);
   </script> --}}
</body>

</html>