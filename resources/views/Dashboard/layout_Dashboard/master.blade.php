
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="Dashboard/assets/images/favicon.svg" type="image/x-icon" />
  <title>Blank Page | PlainAdmin Demo</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="{{ URL::asset('Dashboard/assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('Dashboard/assets/css/lineicons.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('Dashboard/assets/css/quill/bubble.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('Dashboard/assets/css/quill/snow.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('Dashboard/assets/css/fullcalendar.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('Dashboard/assets/css/morris.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('Dashboard/assets/css/datatable.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('Dashboard/assets/css/main.css') }}" />
  @yield('css')

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>
  <!-- ======== Preloader =========== -->
  <div id="preloader">
    <div class="spinner"></div>
  </div>
  <!-- ======== Preloader =========== -->

  <!-- ======== sidebar-nav start =========== -->
  <aside class="sidebar-nav-wrapper">
    <div class=" d-flex  justify-content-center mb-5">
      <a href="index.html">
        <img src=" {{ URL::asset('Dashboard/assets/images/logo/logo.svg') }}" alt="logo" />
      </a>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li class="nav-item {{ (Route::currentRouteName() == 'Dashboard') ? 'active' : '' }}">
          <a href="{{ route('Dashboard_admin') }}">
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.33334 3.35442C3.33334 2.4223 4.07954 1.66666 5.00001 1.66666H15C15.9205 1.66666 16.6667 2.4223 16.6667 3.35442V16.8565C16.6667 17.5519 15.8827 17.9489 15.3333 17.5317L13.8333 16.3924C13.537 16.1673 13.1297 16.1673 12.8333 16.3924L10.5 18.1646C10.2037 18.3896 9.79634 18.3896 9.50001 18.1646L7.16668 16.3924C6.87038 16.1673 6.46298 16.1673 6.16668 16.3924L4.66668 17.5317C4.11731 17.9489 3.33334 17.5519 3.33334 16.8565V3.35442ZM4.79168 5.04218C4.79168 5.39173 5.0715 5.6751 5.41668 5.6751H10C10.3452 5.6751 10.625 5.39173 10.625 5.04218C10.625 4.69264 10.3452 4.40927 10 4.40927H5.41668C5.0715 4.40927 4.79168 4.69264 4.79168 5.04218ZM5.41668 7.7848C5.0715 7.7848 4.79168 8.06817 4.79168 8.41774C4.79168 8.76724 5.0715 9.05066 5.41668 9.05066H10C10.3452 9.05066 10.625 8.76724 10.625 8.41774C10.625 8.06817 10.3452 7.7848 10 7.7848H5.41668ZM4.79168 11.7932C4.79168 12.1428 5.0715 12.4262 5.41668 12.4262H10C10.3452 12.4262 10.625 12.1428 10.625 11.7932C10.625 11.4437 10.3452 11.1603 10 11.1603H5.41668C5.0715 11.1603 4.79168 11.4437 4.79168 11.7932ZM13.3333 4.40927C12.9882 4.40927 12.7083 4.69264 12.7083 5.04218C12.7083 5.39173 12.9882 5.6751 13.3333 5.6751H14.5833C14.9285 5.6751 15.2083 5.39173 15.2083 5.04218C15.2083 4.69264 14.9285 4.40927 14.5833 4.40927H13.3333ZM12.7083 8.41774C12.7083 8.76724 12.9882 9.05066 13.3333 9.05066H14.5833C14.9285 9.05066 15.2083 8.76724 15.2083 8.41774C15.2083 8.06817 14.9285 7.7848 14.5833 7.7848H13.3333C12.9882 7.7848 12.7083 8.06817 12.7083 8.41774ZM13.3333 11.1603C12.9882 11.1603 12.7083 11.4437 12.7083 11.7932C12.7083 12.1428 12.9882 12.4262 13.3333 12.4262H14.5833C14.9285 12.4262 15.2083 12.1428 15.2083 11.7932C15.2083 11.4437 14.9285 11.1603 14.5833 11.1603H13.3333Z" />
              </svg>
            </span>
            <span class="text">Dashboard admin</span>
          </a>
        </li>
        <li class="nav-item {{ (Route::currentRouteName() == 'Dashboard') ? 'active' : '' }}">
          <a href="{{ route('Dashboard_Organisateur') }}">
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.33334 3.35442C3.33334 2.4223 4.07954 1.66666 5.00001 1.66666H15C15.9205 1.66666 16.6667 2.4223 16.6667 3.35442V16.8565C16.6667 17.5519 15.8827 17.9489 15.3333 17.5317L13.8333 16.3924C13.537 16.1673 13.1297 16.1673 12.8333 16.3924L10.5 18.1646C10.2037 18.3896 9.79634 18.3896 9.50001 18.1646L7.16668 16.3924C6.87038 16.1673 6.46298 16.1673 6.16668 16.3924L4.66668 17.5317C4.11731 17.9489 3.33334 17.5519 3.33334 16.8565V3.35442ZM4.79168 5.04218C4.79168 5.39173 5.0715 5.6751 5.41668 5.6751H10C10.3452 5.6751 10.625 5.39173 10.625 5.04218C10.625 4.69264 10.3452 4.40927 10 4.40927H5.41668C5.0715 4.40927 4.79168 4.69264 4.79168 5.04218ZM5.41668 7.7848C5.0715 7.7848 4.79168 8.06817 4.79168 8.41774C4.79168 8.76724 5.0715 9.05066 5.41668 9.05066H10C10.3452 9.05066 10.625 8.76724 10.625 8.41774C10.625 8.06817 10.3452 7.7848 10 7.7848H5.41668ZM4.79168 11.7932C4.79168 12.1428 5.0715 12.4262 5.41668 12.4262H10C10.3452 12.4262 10.625 12.1428 10.625 11.7932C10.625 11.4437 10.3452 11.1603 10 11.1603H5.41668C5.0715 11.1603 4.79168 11.4437 4.79168 11.7932ZM13.3333 4.40927C12.9882 4.40927 12.7083 4.69264 12.7083 5.04218C12.7083 5.39173 12.9882 5.6751 13.3333 5.6751H14.5833C14.9285 5.6751 15.2083 5.39173 15.2083 5.04218C15.2083 4.69264 14.9285 4.40927 14.5833 4.40927H13.3333ZM12.7083 8.41774C12.7083 8.76724 12.9882 9.05066 13.3333 9.05066H14.5833C14.9285 9.05066 15.2083 8.76724 15.2083 8.41774C15.2083 8.06817 14.9285 7.7848 14.5833 7.7848H13.3333C12.9882 7.7848 12.7083 8.06817 12.7083 8.41774ZM13.3333 11.1603C12.9882 11.1603 12.7083 11.4437 12.7083 11.7932C12.7083 12.1428 12.9882 12.4262 13.3333 12.4262H14.5833C14.9285 12.4262 15.2083 12.1428 15.2083 11.7932C15.2083 11.4437 14.9285 11.1603 14.5833 11.1603H13.3333Z" />
              </svg>
            </span>
            <span class="text">Dashboard Organisateur</span>
          </a>
        </li>

        <li class="nav-item {{ (Route::currentRouteName() == 'form_Add_Category') ? 'active' : '' }}">
          {{-- @can('role-list') --}}
          <a  href="{{ route('form_Add_Category') }}">
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M18.3333 15C18.3333 15.9205 17.5872 16.6667 16.6667 16.6667H3.33332C2.41285 16.6667 1.66666 15.9205 1.66666 15V4.99999C1.66666 4.07952 2.41285 3.33333 3.33332 3.33333H7.64296C8.085 3.33333 8.50891 3.50892 8.82149 3.82149L10.3452 5.34517C10.6577 5.65774 11.0817 5.83333 11.5237 5.83333H16.6667C17.5872 5.83333 18.3333 6.57952 18.3333 7.49999V15Z" />
                <path
                  d="M16.4583 4.58333L16.0637 3.79399C15.9225 3.51166 15.6339 3.33333 15.3183 3.33333H10.1011L11.2291 4.46129C11.3072 4.53943 11.4132 4.58333 11.5237 4.58333H16.4583Z" />
              </svg>
            </span>
            <span class="text ">
             Add Categorys <span class="pro-badge ">Pro</span>
            </span>
          </a>
          {{-- @endcan --}}
        </li>
        <li class="nav-item {{ (Route::currentRouteName() == 'form_Add_Events') ? 'active' : '' }}">
          {{-- @can('role-list') --}}
          <a href="{{ route('form_Add_Events') }}">
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M18.3333 15C18.3333 15.9205 17.5872 16.6667 16.6667 16.6667H3.33332C2.41285 16.6667 1.66666 15.9205 1.66666 15V4.99999C1.66666 4.07952 2.41285 3.33333 3.33332 3.33333H7.64296C8.085 3.33333 8.50891 3.50892 8.82149 3.82149L10.3452 5.34517C10.6577 5.65774 11.0817 5.83333 11.5237 5.83333H16.6667C17.5872 5.83333 18.3333 6.57952 18.3333 7.49999V15Z" />
                <path
                  d="M16.4583 4.58333L16.0637 3.79399C15.9225 3.51166 15.6339 3.33333 15.3183 3.33333H10.1011L11.2291 4.46129C11.3072 4.53943 11.4132 4.58333 11.5237 4.58333H16.4583Z" />
              </svg>
            </span>
            <span class="text">
             Add Events <span class="pro-badge">Pro</span>
            </span>
          </a>
          {{-- @endcan --}}
        </li>
        <li class="nav-item {{ (Route::currentRouteName() == 'List_reservations') ? 'active' : '' }}">
          {{-- @can('role-list') --}}
          <a href="{{ route('List_reservations') }}">
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M18.3333 15C18.3333 15.9205 17.5872 16.6667 16.6667 16.6667H3.33332C2.41285 16.6667 1.66666 15.9205 1.66666 15V4.99999C1.66666 4.07952 2.41285 3.33333 3.33332 3.33333H7.64296C8.085 3.33333 8.50891 3.50892 8.82149 3.82149L10.3452 5.34517C10.6577 5.65774 11.0817 5.83333 11.5237 5.83333H16.6667C17.5872 5.83333 18.3333 6.57952 18.3333 7.49999V15Z" />
                <path
                  d="M16.4583 4.58333L16.0637 3.79399C15.9225 3.51166 15.6339 3.33333 15.3183 3.33333H10.1011L11.2291 4.46129C11.3072 4.53943 11.4132 4.58333 11.5237 4.58333H16.4583Z" />
              </svg>
            </span>
            <span class="text">
             Reservations <span class="pro-badge">Pro</span>
            </span>
          </a>
          {{-- @endcan --}}
        </li>
        <li class="nav-item {{ (Route::currentRouteName() == 'List_Users') ? 'active' : '' }}">
          {{-- @can('role-list') --}}
          <a href="{{ route('List_Users') }}">
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M18.3333 15C18.3333 15.9205 17.5872 16.6667 16.6667 16.6667H3.33332C2.41285 16.6667 1.66666 15.9205 1.66666 15V4.99999C1.66666 4.07952 2.41285 3.33333 3.33332 3.33333H7.64296C8.085 3.33333 8.50891 3.50892 8.82149 3.82149L10.3452 5.34517C10.6577 5.65774 11.0817 5.83333 11.5237 5.83333H16.6667C17.5872 5.83333 18.3333 6.57952 18.3333 7.49999V15Z" />
                <path
                  d="M16.4583 4.58333L16.0637 3.79399C15.9225 3.51166 15.6339 3.33333 15.3183 3.33333H10.1011L11.2291 4.46129C11.3072 4.53943 11.4132 4.58333 11.5237 4.58333H16.4583Z" />
              </svg>
            </span>
            <span class="text">
              List Users <span class="pro-badge">Pro</span>
            </span>
          </a>
          {{-- @endcan --}}
        </li>
        <li class="nav-item {{ (Route::currentRouteName() == 'List_evenements') ? 'active' : '' }}">
          {{-- @can('role-list') --}}
          <a href="{{ route('List_evenements') }}">
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M18.3333 15C18.3333 15.9205 17.5872 16.6667 16.6667 16.6667H3.33332C2.41285 16.6667 1.66666 15.9205 1.66666 15V4.99999C1.66666 4.07952 2.41285 3.33333 3.33332 3.33333H7.64296C8.085 3.33333 8.50891 3.50892 8.82149 3.82149L10.3452 5.34517C10.6577 5.65774 11.0817 5.83333 11.5237 5.83333H16.6667C17.5872 5.83333 18.3333 6.57952 18.3333 7.49999V15Z" />
                <path
                  d="M16.4583 4.58333L16.0637 3.79399C15.9225 3.51166 15.6339 3.33333 15.3183 3.33333H10.1011L11.2291 4.46129C11.3072 4.53943 11.4132 4.58333 11.5237 4.58333H16.4583Z" />
              </svg>
            </span>
            <span class="text">
              List Evenements <span class="pro-badge">Pro</span>
            </span>
          </a>
          {{-- @endcan --}}
        </li>
     
   
  
      </ul>
    </nav>
    {{-- <div class="promo-box">
      <div class="promo-icon">
        <img class="mx-auto" src=" {{ URL::asset('Dashboard/assets/images/logo/logo-icon-big.svg') }}" alt="Logo">
      </div>
      <h3>Upgrade to PRO</h3>
      <p>Improve your development process and start doing more with PlainAdmin PRO!</p>
      <a href="https://plainadmin.com/pro" target="_blank" rel="nofollow" class="main-btn primary-btn btn-hover">
        Upgrade to PRO
      </a>
    </div> --}}
  </aside>
  <div class="overlay"></div>
  <!-- ======== sidebar-nav end =========== -->

  <!-- ======== main-wrapper start =========== -->
  <main class="main-wrapper">
    <!-- ========== header start ========== -->
    <header class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-6">
            <div class="header-left d-flex align-items-center">
              <div class="menu-toggle-btn mr-15">
                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                  <i class="lni lni-chevron-left me-2"></i> Menu
                </button>
              </div>
              <div class="header-search d-none d-md-flex">
                <form action="#">
                  <input type="text" placeholder="Search..." />
                  <button><i class="lni lni-search-alt"></i></button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-6">
            <div class="header-right">
              <!-- notification start -->
              <div class="notification-box ml-15 d-none d-md-flex">
                <button class="dropdown-toggle" type="button" id="notification" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M11 20.1667C9.88317 20.1667 8.88718 19.63 8.23901 18.7917H13.761C13.113 19.63 12.1169 20.1667 11 20.1667Z"
                      fill="" />
                    <path
                      d="M10.1157 2.74999C10.1157 2.24374 10.5117 1.83333 11 1.83333C11.4883 1.83333 11.8842 2.24374 11.8842 2.74999V2.82604C14.3932 3.26245 16.3051 5.52474 16.3051 8.24999V14.287C16.3051 14.5301 16.3982 14.7633 16.564 14.9352L18.2029 16.6342C18.4814 16.9229 18.2842 17.4167 17.8903 17.4167H4.10961C3.71574 17.4167 3.5185 16.9229 3.797 16.6342L5.43589 14.9352C5.6017 14.7633 5.69485 14.5301 5.69485 14.287V8.24999C5.69485 5.52474 7.60672 3.26245 10.1157 2.82604V2.74999Z"
                      fill="" />
                  </svg>
                  <span></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notification">
                  <li>
                    <a href="#0">
                      <div class="image">
                        <img src="{{ URL::asset('Dashboard/assets/images/lead/lead-6.png') }}" alt="" />
                      </div>
                      <div class="content">
                        <h6>
                          John Doe
                          <span class="text-regular">
                            comment on a product.
                          </span>
                        </h6>
                        <p>
                          Lorem ipsum dolor sit amet, consect etur adipiscing
                          elit Vivamus tortor.
                        </p>
                        <span>10 mins ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#0">
                      <div class="image">
                        <img src="{{ URL::asset('Dashboard/assets/images/lead/lead-1.png') }}" alt="" />
                      </div>
                      <div class="content">
                        <h6>
                          Jonathon
                          <span class="text-regular">
                            like on a product.
                          </span>
                        </h6>
                        <p>
                          Lorem ipsum dolor sit amet, consect etur adipiscing
                          elit Vivamus tortor.
                        </p>
                        <span>10 mins ago</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- notification end -->
              <!-- message start -->
              <div class="header-message-box ml-15 d-none d-md-flex">
                <button class="dropdown-toggle" type="button" id="message" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.74866 5.97421C7.91444 5.96367 8.08162 5.95833 8.25005 5.95833C12.5532 5.95833 16.0417 9.4468 16.0417 13.75C16.0417 13.9184 16.0364 14.0856 16.0259 14.2514C16.3246 14.138 16.6127 14.003 16.8883 13.8482L19.2306 14.629C19.7858 14.8141 20.3141 14.2858 20.129 13.7306L19.3482 11.3882C19.8694 10.4604 20.1667 9.38996 20.1667 8.25C20.1667 4.70617 17.2939 1.83333 13.75 1.83333C11.0077 1.83333 8.66702 3.55376 7.74866 5.97421Z"
                      fill="" />
                    <path
                      d="M14.6667 13.75C14.6667 17.2938 11.7939 20.1667 8.25004 20.1667C7.11011 20.1667 6.03962 19.8694 5.11182 19.3482L2.76946 20.129C2.21421 20.3141 1.68597 19.7858 1.87105 19.2306L2.65184 16.8882C2.13062 15.9604 1.83338 14.89 1.83338 13.75C1.83338 10.2062 4.70622 7.33333 8.25004 7.33333C11.7939 7.33333 14.6667 10.2062 14.6667 13.75ZM5.95838 13.75C5.95838 13.2437 5.54797 12.8333 5.04171 12.8333C4.53545 12.8333 4.12504 13.2437 4.12504 13.75C4.12504 14.2563 4.53545 14.6667 5.04171 14.6667C5.54797 14.6667 5.95838 14.2563 5.95838 13.75ZM9.16671 13.75C9.16671 13.2437 8.7563 12.8333 8.25004 12.8333C7.74379 12.8333 7.33338 13.2437 7.33338 13.75C7.33338 14.2563 7.74379 14.6667 8.25004 14.6667C8.7563 14.6667 9.16671 14.2563 9.16671 13.75ZM11.4584 14.6667C11.9647 14.6667 12.375 14.2563 12.375 13.75C12.375 13.2437 11.9647 12.8333 11.4584 12.8333C10.9521 12.8333 10.5417 13.2437 10.5417 13.75C10.5417 14.2563 10.9521 14.6667 11.4584 14.6667Z"
                      fill="" />
                  </svg>
                  <span></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="message">
                  <li>
                    <a href="#0">
                      <div class="image">
                        <img src="{{ URL::asset('Dashboard/assets/images/lead/lead-5.png') }}" alt="" />
                      </div>
                      <div class="content">
                        <h6>Jacob Jones</h6>
                        <p>Hey!I can across your profile and ...</p>
                        <span>10 mins ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#0">
                      <div class="image">
                        <img src="{{ URL::asset('Dashboard/assets/images/lead/lead-3.png') }}" alt="" />
                      </div>
                      <div class="content">
                        <h6>John Doe</h6>
                        <p>Would you mind please checking out</p>
                        <span>12 mins ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#0">
                      <div class="image">
                        <img src=" {{ URL::asset('Dashboard/assets/images/lead/lead-2.png') }}" alt="" />
                      </div>
                      <div class="content">
                        <h6>Anee Lee</h6>
                        <p>Hey! are you available for freelance?</p>
                        <span>1h ago</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- message end -->
              <!-- profile start -->
              <div class="profile-box ml-15">
                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="profile-info">
                    <div class="info">
                      <div class="image">
                        <img src=" {{ URL::asset('Dashboard/assets/images/profile/profile-image.png') }}" alt="" />
                      </div>
                      <div>
                        <h6 class="fw-500">{{ Auth()->user()->name }}</h6>
                        {{--    <p>Admin</p> --}}
                      </div>
                    </div>
                  </div>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                  <li>
                    <div class="author-info flex items-center !p-1">
                      <div class="image">
                        <img src=" {{ URL::asset('Dashboard/assets/images/profile/profile-image.png') }}" alt="image">
                      </div>
                      <div class="content">
                        <h4 class="text-sm">{{ Auth()->user()->name }}</h4>
                        <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs"
                          href="#">{{ Auth()->user()->email }}</a>
                      </div>
                    </div>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="#0">
                      <i class="lni lni-user"></i> View Profile
                    </a>
                  </li>
                  <li>
                    <a href="#0">
                      <i class="lni lni-alarm"></i> Notifications
                    </a>
                  </li>
                  <li>
                    <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                  </li>
                  <li>
                    <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="lni lni-exit"></i> Sign Out
                  </a>
                                    </li>
                </ul>
              </div>
              <!-- profile end -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ========== header end ========== -->
    @if ($message = session('flash_message'))
                            
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
    <!-- ========== section start ========== -->
    @yield('content')

    <!-- ========== section end ========== -->


    

  </main>
  <!-- ======== main-wrapper end =========== -->

  <!-- ============ Theme Option Start ============= -->
  <button class="option-btn">
    <i class="lni lni-cog"></i>
  </button>
  <div class="option-overlay"></div>
  <div class="option-box">
    <div class="option-header">
      <h5>Settings</h5>
      <button class="option-btn-close text-gray">
        <i class="lni lni-close"></i>
      </button>
    </div>
    <h6 class="mb-10">Layout</h6>
    <ul class="mb-30">
      <li><button class="leftSidebarButton active">Left Sidebar</button></li>
      <li><button class="rightSidebarButton">Right Sidebar</button></li>
    </ul>

    <h6 class="mb-10">Theme</h6>
    <ul class="d-flex flex-wrap align-items-center">
      <li>
        <button class="lightThemeButton active">
          Light Theme + Sidebar 1
        </button>
      </li>
      <li><button class="darkThemeButton">Dark Theme + Sidebar 1</button></li>
    </ul>

    <div class="promo-box">
      <div class="promo-icon">
        <img class="mx-auto" src=" {{ URL::asset('Dashboard/assets/images/logo/logo-icon-big.svg') }}" alt="Logo">
      </div>
      <h3>Upgrade to PRO</h3>
      <p>Improve your development process and start doing more with PlainAdmin PRO!</p>
      <a href="https://plainadmin.com/pro" target="_blank" rel="nofollow" class="main-btn primary-btn btn-hover">
        Upgrade to PRO
      </a>
    </div>
  </div>
  <!-- ============ Theme Option End ============= -->

  <!-- ========= All Javascript files linkup ======== -->
  <script src="{{ URL::asset('Dashboard/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/Chart.min.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/apexcharts.min.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/dynamic-pie-chart.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/moment.min.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/fullcalendar.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/jvectormap.min.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/world-merc.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/polyfill.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/quill.min.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/datatable.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/Sortable.min.js') }}"></script>
  <script src="{{ URL::asset('Dashboard/assets/js/main.js') }}"></script>
  <script src="https://kit.fontawesome.com/e9ea9ee727.js" crossorigin="anonymous"></script>

  @yield('js')

  <script>
    // ======== jvectormap activation
    const markers = [
      { name: "Egypt", coords: [26.8206, 30.8025] },
      { name: "Russia", coords: [61.524, 105.3188] },
      { name: "Canada", coords: [56.1304, -106.3468] },
      { name: "Greenland", coords: [71.7069, -42.6043] },
      { name: "Brazil", coords: [-14.235, -51.9253] },
    ];

    const jvm = new jsVectorMap({
      map: "world_merc",
      selector: "#map",
      zoomButtons: false,

      regionStyle: {
        initial: {
          fill: "#d1d5db",
        },
      },

      labels: {
        markers: {
          render: (marker) => marker.name,
        },
      },

      markersSelectable: true,
      selectedMarkers: markers.map((marker, index) => {
        const name = marker.name;

        if (name === "Russia" || name === "Brazil") {
          return index;
        }
      }),
      markers: markers,
      markerStyle: {
        initial: { fill: "#4A6CF7" },
        selected: { fill: "#ff5050" },
      },
      markerLabelStyle: {
        initial: {
          fontWeight: 400,
          fontSize: 14,
        },
      },
    });

    // =========== chart three start
    const ctx3 = document.getElementById("Chart3").getContext("2d");
    const chart3 = new Chart(ctx3, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "Visitors",
            backgroundColor: "transparent",
            borderColor: "#9b51e0",
            data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
            pointBackgroundColor: "transparent",
            pointHoverBackgroundColor: "#9b51e0",
            pointBorderColor: "transparent",
            pointHoverBorderColor: "#fff",
            pointHoverBorderWidth: 3,
            borderWidth: 5,
            pointRadius: 5,
            pointHoverRadius: 8,
            fill: false,
            cubicInterpolationMode: "monotone", // Add this line for curved line
          },
          {
            label: "Visits",
            backgroundColor: "transparent",
            borderColor: "#4a6cf7",
            data: [
              120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
            ],
            pointBackgroundColor: "transparent",
            pointHoverBackgroundColor: "#4a6cf7",
            pointBorderColor: "transparent",
            pointHoverBorderColor: "#fff",
            pointHoverBorderWidth: 3,
            borderWidth: 5,
            pointRadius: 5,
            pointHoverRadius: 8,
            fill: false,
            cubicInterpolationMode: "monotone", // Add this line for curved line
          },
        ],
      },
      options: {
        plugins: {
          tooltip: {
            callbacks: {
              labelColor: function (context) {
                return {
                  backgroundColor: "rgba(104, 110, 255, .0)",
                };
              },
            },
            intersect: false,
            backgroundColor: "#fbfbfb",
            titleColor: "#8F92A1",
            bodyColor: "#272727",
            titleFont: {
              fontSize: 16,
              fontFamily: "Plus Jakarta Sans",
              fontStyle: "400",
              display: false,
            },
            bodyFont: {
              family: "Plus Jakarta Sans",
              size: 16,
            },
            multiKeyBackground: "transparent",
            displayColors: false,
            padding: 15,
            borderColor: "rgba(143, 146, 161, .1)",
            borderWidth: 1,
          },
          legend: {
            display: false,
          },
        },
        responsive: true,
        // maintainAspectRatio: false,
        layout: {
          padding: {
            top: 0,
          },
        },
        title: {
          display: false,
        },
        legend: {
          display: false,
        },
        scales: {
          y: {
            grid: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
              max: 300,
              min: 50,
            },
          },
          x: {
            grid: {
              display: false,
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
            },
          },
        },
      },
    });
    // =========== chart three end

    // ================== chart four start
    const ctx4 = document.getElementById("Chart4").getContext("2d");
    const chart4 = new Chart(ctx4, {
      type: "bar",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [
          {
            label: "",
            backgroundColor: "#4A6CF7",
            borderColor: "transparent",
            borderRadius: 20,
            borderWidth: 5,
            barThickness: 20,
            maxBarThickness: 20,
            data: [600, 700, 1000, 700, 650, 800],
          },
          {
            label: "",
            backgroundColor: "#d50100",
            borderColor: "transparent",
            borderRadius: 20,
            borderWidth: 5,
            barThickness: 20,
            maxBarThickness: 20,
            data: [690, 740, 720, 1120, 876, 900],
          },
        ],
      },
      options: {
        plugins: {
          tooltip: {
            backgroundColor: "#F3F6F8",
            titleColor: "#8F92A1",
            titleFontSize: 12,
            bodyColor: "#171717",
            bodyFont: {
              weight: "bold",
              size: 16,
            },
            multiKeyBackground: "transparent",
            displayColors: false,
            padding: {
              x: 30,
              y: 10,
            },
            bodyAlign: "center",
            titleAlign: "center",
            enabled: true,
          },
          legend: {
            display: false,
          },
        },
        layout: {
          padding: {
            top: 0,
          },
        },
        responsive: true,
        // maintainAspectRatio: false,
        title: {
          display: false,
        },
        scales: {
          y: {
            grid: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
              max: 1200,
              min: 0,
            },
          },
          x: {
            grid: {
              display: false,
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
            },
          },
        },
      },
    });
    // =========== chart four end

    //============ doughnutChart1 start
    const doughnutChart1 = new ApexCharts(
      document.querySelector("#doughnutChart1"),
      (options = {
        series: [83, 67, 55, 44],
        chart: {
          height: 350,
          type: "radialBar",
        },

        plotOptions: {
          radialBar: {
            dataLabels: {
              name: {
                fontSize: "22px",
              },
              value: {
                fontSize: "16px",
              },
            },
            hollow: {
              size: "40%",
            },
            track: {
              strokeWidth: "100%",
              margin: 10,
            },
          },
        },
        stroke: {
          lineCap: "round",
        },
        labels: ["Desktop", "Tablet", "Mobile", "Others"],
        colors: ["#4a6cf7", "#f2994a", "#d50100", "#f7c800"],
      })
    );
    doughnutChart1.render();
    //============ doughnutChart1 end

    // =========== referralsCtx1 start
    const referralsCtx1 = document.getElementById("referralsChart1").getContext("2d");
    const referralsChart1 = new Chart(referralsCtx1, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "",
            backgroundColor: "transparent",
            borderColor: "#219653",
            borderWidth: 3,
            data: [5, 40, 20, 80, 30, 90, 60, 75, 35, 85, 50, 90],
            pointBackgroundColor: "transparent",
            pointBorderColor: "transparent",
            pointRadius: 8,
            cubicInterpolationMode: "monotone",
          },
        ],
      },
      options: {
        plugins: {
          tooltip: {
            enabled: false,
          },
          legend: {
            display: false,
          },
        },
        responsive: true,
        maintainAspectRatio: false,
        layout: {
          padding: {
            top: 0,
          },
        },
        title: {
          display: false,
        },
        scales: {
          y: {
            display: false,
          },
          x: {
            display: false,
          },
        },
      },
    });
    // =========== referralsCtx1 end

    // =========== referralsCtx2 start
    const referralsCtx2 = document.getElementById("referralsChart2").getContext("2d");
    const referralsChart2 = new Chart(referralsCtx2, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "",
            backgroundColor: "transparent",
            borderColor: "#EB5757",
            borderWidth: 3,
            data: [50, 40, 90, 80, 60, 40, 75, 55, 70, 40, 54, 10],
            pointBackgroundColor: "transparent",
            pointBorderColor: "transparent",
            pointRadius: 8,
            cubicInterpolationMode: "monotone",
          },
        ],
      },
      options: {
        plugins: {
          tooltip: {
            enabled: false,
          },
          legend: {
            display: false,
          },
        },
        responsive: true,
        maintainAspectRatio: false,
        layout: {
          padding: {
            top: 0,
          },
        },
        title: {
          display: false,
        },
        scales: {
          y: {
            display: false,
          },
          x: {
            display: false,
          },
        },
      },
    });

    // =========== referralsCtx2 end

    // =========== referralsCtx3 start
    const referralsCtx3 = document.getElementById("referralsChart3").getContext("2d");
    const referralsChart3 = new Chart(referralsCtx3, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "",
            backgroundColor: "transparent",
            borderColor: "#219653",
            borderWidth: 3,
            data: [5, 40, 25, 75, 40, 90, 60, 75, 35, 85, 60, 90],
            pointBackgroundColor: "transparent",
            pointBorderColor: "transparent",
            pointRadius: 8,
            cubicInterpolationMode: "monotone",
          },
        ],
      },
      options: {
        plugins: {
          tooltip: {
            enabled: false,
          },
          legend: {
            display: false,
          },
        },
        responsive: true,
        maintainAspectRatio: false,
        layout: {
          padding: {
            top: 0,
          },
        },
        title: {
          display: false,
        },
        scales: {
          y: {
            display: false,
          },
          x: {
            display: false,
          },
        },
      },
    });
    // =========== referralsCtx3 end

    // =========== referralsCtx4 start
    const referralsCtx4 = document.getElementById("referralsChart4").getContext("2d");
    const referralsChart4 = new Chart(referralsCtx4, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        // Information about the dataset
        datasets: [
          {
            label: "",
            backgroundColor: "transparent",
            borderColor: "#EB5757",
            borderWidth: 3,
            data: [55, 40, 80, 75, 50, 35, 75, 55, 60, 30, 34, 10],
            pointBackgroundColor: "transparent",
            pointBorderColor: "transparent",
            pointRadius: 8,
            cubicInterpolationMode: "monotone",
          },
        ],
      },

      options: {
        plugins: {
          tooltip: {
            enabled: false,
          },
          legend: {
            display: false,
          },
        },
        responsive: true,
        maintainAspectRatio: false,
        layout: {
          padding: {
            top: 0,
          },
        },
        title: {
          display: false,
        },
        scales: {
          y: {
            display: false,
          },
          x: {
            display: false,
          },
        },
      },
    });
    // =========== referralsCtx4 end

    // =========== referralsCtx5 start
    const referralsCtx5 = document.getElementById("referralsChart5").getContext("2d");
    const referralsChart5 = new Chart(referralsCtx5, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "",
            backgroundColor: "transparent",
            borderColor: "#219653",
            borderWidth: 3,
            data: [5, 40, 20, 80, 30, 90, 60, 75, 35, 85, 50, 90],
            pointBackgroundColor: "transparent",
            pointBorderColor: "transparent",
            pointRadius: 8,
            cubicInterpolationMode: "monotone",
          },
        ],
      },

      options: {
        plugins: {
          tooltip: {
            enabled: false,
          },
          legend: {
            display: false,
          },
        },
        responsive: true,
        maintainAspectRatio: false,
        layout: {
          padding: {
            top: 0,
          },
        },
        title: {
          display: false,
        },
        scales: {
          y: {
            display: false,
          },
          x: {
            display: false,
          },
        },
      },
    });
    // =========== referralsCtx5 end

    // =========== referralsCtx6 start
    const referralsCtx6 = document.getElementById("referralsChart6").getContext("2d");
    const referralsChart6 = new Chart(referralsCtx6, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "",
            backgroundColor: "transparent",
            borderColor: "#219653",
            borderWidth: 3,
            data: [5, 40, 20, 80, 30, 90, 60, 75, 35, 85, 50, 90],
            pointBackgroundColor: "transparent",
            pointBorderColor: "transparent",
            pointRadius: 8,
            cubicInterpolationMode: "monotone",
          },
        ],
      },

      options: {
        plugins: {
          tooltip: {
            enabled: false,
          },
          legend: {
            display: false,
          },
        },
        responsive: true,
        maintainAspectRatio: false,
        layout: {
          padding: {
            top: 0,
          },
        },
        title: {
          display: false,
        },
        scales: {
          y: {
            display: false,
          },
          x: {
            display: false,
          },
        },
      },
    });
      // =========== referralsCtx6 end

    // =========== theme change
    const lightThemeColors = {
      darkBorder: "rgba(143, 146, 161, .1)",
      darkColor: "#5A6A85",
    };

    const darkThemeColors = {
      darkBorder: "#2b2b42",
      darkColor: "#838C9A",
    };

    // Function to apply theme colors to the chart
    function applyThemeColors(themeColors) {

      chart3.options.scales.y.grid.color = themeColors.darkBorder;
      chart3.options.scales.y.grid.borderColor = themeColors.darkBorder;
      chart3.options.scales.x.ticks.color = themeColors.darkColor;
      chart3.options.scales.y.ticks.color = themeColors.darkColor;

      chart4.options.scales.y.grid.color = themeColors.darkBorder;
      chart4.options.scales.y.grid.borderColor = themeColors.darkBorder;
      chart4.options.scales.x.ticks.color = themeColors.darkColor;
      chart4.options.scales.y.ticks.color = themeColors.darkColor;

      chart3.update();
      chart4.update();
    }

    const darkThemeButton = document.querySelector('.darkThemeButton')
    const lightThemeButton = document.querySelector('.lightThemeButton')

    // Check if the user has a saved theme preference
    const savedTheme = localStorage.getItem('theme')

    // Check the saved theme preference and apply appropriate colors
    if (savedTheme === 'dark') {
      applyThemeColors(darkThemeColors);
    } else {
      applyThemeColors(lightThemeColors);
    }

    // Event listeners for theme buttons
    darkThemeButton.addEventListener('click', () => {
      applyThemeColors(darkThemeColors);
    });   
    
    lightThemeButton.addEventListener('click', () => {
      applyThemeColors(lightThemeColors);
    });
  </script>

</body>

</html>