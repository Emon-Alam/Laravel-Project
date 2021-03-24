<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Pay | admin-Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/MainPage.css')}}" rel="stylesheet">
  <link href="{{asset('css/Create.css')}}" rel="stylesheet">
  <link href="{{asset('css/CreateButton.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: Reveal - v4.0.1
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- <iframe src="{{asset('music/RunicPower.mp3')}}" allow="autoplay" style="display: none"></iframe>
<audio id="player" autoplay loop>
    <source src="{{asset('music/RunicPower.mp3')}}" type="audio/mp3">
</audio> -->

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:epay.management.21@gmail.com">EPay@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:+880 1775463783">+880 186 510882</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/Emon71340800" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/Emon.king16/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/dauntless_Emon/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/Emon-350141185/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
      <ul>

      


        <li><a class="nav-link scrollto" href="{{route('admin.create')}}">Add Customer</a></li>
        <li><a class="nav-link scrollto" href="{{route('admin.admin')}}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{route('logout.index')}}">Logout</a></li>
        <li class="dropdown"><a class="nav-link scrollto" href="#contact"><span>{{ session('username') }}</span> <i class="bi bi-chevron-down"></i></a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
      <h2>Profile<br><span style="color: red; text-decoration:none">{{session('username')}}</span></h2>
      <div>
        
      </div>
    </div>

    <div class="hero-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/2.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/3.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/4.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/5.jpg');"></div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">
<br>
    <!-- ======= Services Section ======= -->
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>@for($i=0; $i < count($list); $i++){{$list[$i]['name']}}@endfor</h2>
        </div>

    <section id="contact">
      <div class="container">
 
                <div class="card-body">
				<span class="login100-form-title" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
        Your Profile
					</span>





          <table border="0" style="width: 100%">
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Password</td>
            <td>Type</td>
            <td>Action</td>
        </tr>
        <tr><td><br></td></tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['userId'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['name'] }}</td>
            <td>{{ $list[$i]['type'] }}</td>
            <td>
                <a href="{{ route('admin.edit', [$list[$i]['userId']]) }}">Edit</a>
                <a href="/E-Pay/home/delete/admin/{{ $list[$i]['userId'] }}">Delete</a>
                <a href="/E-Pay/home/details/admin/{{ $list[$i]['userId'] }}">Details</a> 
            </td>
        </tr>
        <tr><td><br></td></tr>

        @endfor

        </div>
        </div>
        </section>
    </table>
    <br>
    {{session('msg')}}

      </div>



 

<!-- ------------------------------------------------ -->

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Explore</h2>
        </div>

    <section id="contact">
      <div class="container">
 
                <div class="card-body">
				<span class="login100-form-title" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
        Others Admin Profile
					</span>

        <table border="0" style="width: 100%">
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Name</td>
            <td>Type</td>
            <td>Action</td>
        </tr>
        <tr><td><br></td></tr>

        @for($i=0; $i < count($name); $i++)
        <tr>
            <td>{{ $name[$i]['userId'] }}</td>
            <td>{{ $name[$i]['username'] }}</td>
            <td>{{ $name[$i]['name'] }}</td>
            <td>{{ $name[$i]['type'] }}</td>
                
                
            <td>
                <a href="{{ route('admin.edit', [$name[$i]['userId']]) }}">Edit</a>
                <a href="/E-Pay/home/delete/admin/{{ $name[$i]['userId'] }}">Delete</a>
                <a href="/E-Pay/home/details/admin/{{ $name[$i]['userId'] }}">Details</a>
                
            </td>
        </tr>
        <tr><td><br></td></tr>

        @endfor


        </div>
        </div>
        </section>
    </table>


    <!-- **** -->
    <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Explore</h2>
        </div>

    <section id="contact">
      <div class="container">
 
                <div class="card-body">
				<span class="login100-form-title" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
        Customer Profile
					</span>

        <table border="0" style="width: 100%">
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Name</td>
            <td>Type</td>
            <td>Action</td>
        </tr>
        <tr><td><br></td></tr>

        @for($i=0; $i < count($c); $i++)
        <tr>
            <td>{{ $c[$i]['userId'] }}</td>
            <td>{{ $c[$i]['username'] }}</td>
            <td>{{ $c[$i]['name'] }}</td>
            <td>{{ $c[$i]['type'] }}</td>
            
            <td>
                <a href="{{ route('customerEdit', [$c[$i]['userId']]) }}">Edit</a>
                <a href="/E-Pay/home/delete/customer/{{ $c[$i]['userId'] }}">Delete</a>
            <a href=" {{ route('customerShow', $c[$i]['userId'] ) }}">Details</a></td>
            
        </tr>

        <tr><td><br></td></tr>

        @endfor
        </table>

        <div class="card-body">
				<span class="login100-form-title" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
        Customer Loan Details
					</span>
        <table border="0" style="width: 80%">
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>status</td>
            <td>LoanRequest</td>
            <td>Action</td>
        </tr>
        <tr><td><br></td></tr>
        @for($i=0; $i < count($l); $i++)
        <tr>
            <td>{{ $l[$i]['id'] }}</td>
            <td>{{ $l[$i]['username'] }}</td>
            <td>{{ $l[$i]['status'] }}</td>
            <td>{{ $l[$i]['loanreq'] }}</td>
            
            
            <td> <a href=" {{ route('loanap', $l[$i]['id'] ) }}">Loan Request</a></td>
            <td> <a href=" {{ route('ap.loan', $l[$i]['id'] ) }}">Approve</a></td>
            
            
        </tr>

        <tr><td><br></td></tr>

        @endfor
       

        </div>
        </div>
        </section>
    </table>
    <!-- ****** -->

<!-- **** -->
<div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Explore</h2>
        </div>

    <section id="contact">
      <div class="container">
 
                <div class="card-body">
				<span class="login100-form-title" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
        Desk Manager Profile
					</span>

        <table border="0" style="width: 100%">
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Name</td>
            <td>Type</td>
            <td>Action</td>
        </tr>
        <tr><td><br></td></tr>

        @for($i=0; $i < count($d); $i++)
        <tr>
            <td>{{ $d[$i]['userId'] }}</td>
            <td>{{ $d[$i]['username'] }}</td>
            <td>{{ $d[$i]['name'] }}</td>
            <td>{{ $d[$i]['type'] }}</td>
            
            <td>
                <a href="{{ route('deskEdit', [$d[$i]['userId']]) }}">Edit</a>
                <a href="/E-Pay/home/delete/deskManager/{{ $d[$i]['userId'] }}">Delete</a>
            <a href="/E-Pay/home/details/deskManager/{{ $d[$i]['userId'] }}">Details</a></td>
        </tr>
        <tr><td><br></td></tr>

        @endfor


        </div>
        </div>
        </section>
    </table>
    <!-- ****** -->

    <!-- **** -->
    <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Explore</h2>
        </div>

    <section id="contact">
      <div class="container">
 
                <div class="card-body">
				<span class="login100-form-title" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
        Service Provider Profile
					</span>

        <table border="0" style="width: 100%">
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Name</td>
            <td>Type</td>
            <td>Action</td>
        </tr>
        <tr><td><br></td></tr>

        @for($i=0; $i < count($s); $i++)
        <tr>
            <td>{{ $s[$i]['userId'] }}</td>
            <td>{{ $s[$i]['username'] }}</td>
            <td>{{ $s[$i]['name'] }}</td>
            <td>{{ $s[$i]['type'] }}</td>
            <td>
                <a href="{{ route('serviceEdit', [$d[$i]['userId']]) }}">Edit</a>
                <a href="/E-Pay/home/delete/serviceProvider/{{ $d[$i]['userId'] }}">Delete</a>
            <a href="/E-Pay/home/details/serviceProvider/{{ $s[$i]['userId'] }}">Details</a></td>
          
        </tr>
        <tr><td><br></td></tr>

        @endfor


        </div>
        </div>
        </section>
    </table>
    <!-- ****** -->

    <!-- {{session('msg')}} -->

      </div>

    <!-- ======= Contact Section ======= -->
    
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact to Admin</h2>
          <p><strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong> responses as soon as possible when when we are active. Feel free to discuss with us.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>Dhaka, Bangladesh</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+880 1775463783">+880 1775463783</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:epay.management.21@gmail.com">EPay@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Copyright  &copy; 2021 | <strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        Powered by <a href="https://github.com/sourcebd/Laravel-Project"><strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong> Team</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/MainPage.js')}}"></script>

</body>

</html>