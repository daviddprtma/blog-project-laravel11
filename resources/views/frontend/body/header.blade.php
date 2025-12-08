<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Logbook</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="{{asset('frontend/assets/css/main.css')}}" rel="stylesheet">

  {{-- for no content / error page --}}
  <style>
    
body
{
  background-color:#fff;
/*   background: radial-gradient(at 50% -20%, #908392, #0d060e) fixed; */
}


#handboy
{
   animation: swing ease-in-out 1.3s infinite alternate;
    transform-origin: 98% 98%;
    transform-box: fill-box;
    
}


#girllight
{
   animation: swing ease-in-out 1.3s infinite alternate;
    transform-origin: 0% 97%;
    transform-box: fill-box;
}

#hairgirl
{
    animation: swinghair ease-in-out 1.3s infinite alternate;
   transform-origin: 60% 0%;
    transform-box: fill-box;
  
}

#zero
{
  transform-origin:bottom;
  transform-box:fill-box;
  
}

/*************swing************/
@keyframes swing {
    0% { transform: rotate(10deg); }
    100% { transform: rotate(-10deg); }
}


/*************swing hair************/
@keyframes swinghair {
    0% { transform: rotate(6deg); }
    100% { transform: rotate(-6deg); }
}
  </style>

  <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="blog-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('frontend.index') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Logbook</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('frontend.index')}}">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('register') }}">Get Started</a>

    </div>
  </header>