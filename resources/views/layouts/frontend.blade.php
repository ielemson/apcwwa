<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="/frontend/images/logo/logo2.png" sizes="32x32" type="image/png">
    <title>apcwwa - APC Ward To Ward Ambassadors</title>

    <link rel="stylesheet" href="{{asset('frontend/css/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.circliful.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{asset('frontend/css/colors/color3.css')}}" />
    <!-- Color -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{('frontend/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">


    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('frontend/css/slides.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}"> 
    {{-- From  Desk Style Ends --}}

    {{-- @include('frontend.includes.head') --}}
    @yield('styles')

    <link rel="stylesheet" href="{{asset('frontend/css/slides.css')}}">
    <style>
#header {
  width: 100%;
  height: 90vh;
}
#header .carousel {
  height: 100%;
}
#header .carousel .carousel-inner {
  height: 100%;
}
#header .carousel .carousel-inner .carousel-item {
  height: 100%;
}
#header .carousel .carousel-inner .carousel-item .title {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 5px;
    padding: 10px;
    color: #fff !important;
    position: absolute;
    text-align: center;
    width: auto;
    left: 50%;
    top: 60%;
    transform: translate(-50%, -50%);
}
#header .carousel .carousel-inner .carousel-item .title h1 {
  font-size: 3vw;
  color:#fff;
}
.ext{
  color:;
  font-size:1.5vw;
}
#header .carousel .carousel-inner .carousel-item .title .animated {
  animation-duration: 1.3s;
  animation-delay: 0.5s;
}
#header .carousel .carousel-inner .carousel-item img {
  object-fit: cover;
  height: 100%;
}


    </style>
</head>
<body>
    <main>
        <div class="pageloader-wrap">
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div>
        <!-- Pageloader Wrap -->

       @yield('header')

        <!-- Header -->
        @yield('content')

      @include('frontend.includes.footer')
    </main>
    <!-- Main Wrapper -->

  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/downCount.js')}}"></script>
    <script src="{{asset('frontend/js/fancybox.min.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/perfectscrollbar.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.circliful.min.js')}}"></script> 
 
  
    {{-- From the desk starts--}}
    <script src="{{asset('frontend/js/popper.j')}}s"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    {{-- From the desk ends--}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
    @include('frontend.includes.foot')
    {{-- <script src="{{asset('frontend/js/main.js')}}"></script>  --}}
</body>	
</html>