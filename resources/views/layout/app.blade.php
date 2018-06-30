<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	{{-- <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}"> --}}
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>My Portfolio</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

	<!--     Fonts and icons     -->
  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  	<!-- CSS Files -->
  	<link href="{{ asset('assets/css/material-kit.css?v=2.0.3') }}" rel="stylesheet" />
  	<!-- CSS Just for demo purpose, don't include it in your project -->
  	<link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />

	<link rel="stylesheet" type="text/css" href="{{asset('assets/manuel-library/style.css')}}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body class="profile-page sidebar-collapse">

    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('/') }}">
          Portfolio </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('gallery') }}">
              <i class="far fa-images"></i>
              Gallery
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/images/bg.jpg');"></div>
  <div class="main main-raised">
    
  	@yield('content')

  </div>
  <footer class="footer footer-default">
    <div class="container">
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, Manuel Ortega Jr.
      </div>
    </div>
  </footer>

    <!--   Core JS Files   -->
	<script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
	<script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
	<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
	<script src="{{ asset('assets/js/material-kit.js?v=2.0.3') }}" type="text/javascript"></script>

</body>

</html>
