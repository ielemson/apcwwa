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
    <link rel="stylesheet" href="{{asset('frontend/css/colors/color3.css')}}" /><!-- Color -->

    {{-- From  Desk Style Starts --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
		
    {{-- <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css"> --}}
<link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('frontend/css/slides.css')}}">
    
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}">
    {{-- From  Desk Style Ends --}}
    
    <style>
  

.gtco-testimonials {
  position: relative;
  /* margin-top: 30px; */
}
.gtco-testimonials h2 {
  font-size: 30px;
  text-align: center;
  color: #333333;
  margin-bottom: 50px;
}
.gtco-testimonials .owl-stage-outer {
  padding: 30px 0;
}
.gtco-testimonials .owl-nav {
  display: none;
}
.gtco-testimonials .owl-dots {
  text-align: center;
}
.gtco-testimonials .owl-dots span {
  position: relative;
  height: 10px;
  width: 10px;
  border-radius: 50%;
  display: block;
  background: #fff;
  border: 2px solid #01b0f8;
  margin: 0 5px;
}
.gtco-testimonials .owl-dots .active {
  box-shadow: none;
}
.gtco-testimonials .owl-dots .active span {
  background: #01b0f8;
  box-shadow: none;
  height: 12px;
  width: 12px;
  margin-bottom: -1px;
  
}
.gtco-testimonials .card {
  background: #fff;
  box-shadow: 0 8px 30px -7px #c9dff0;
  margin: 0 20px;
  padding: 0 10px;
  border-radius: 20px;
  border: 0;
}
.gtco-testimonials .card .card-img-top {
  max-width: 100px;
  border-radius: 50%;
  margin: 15px auto 0;
  box-shadow: 0 8px 20px -4px #95abbb;
  width: 100px;
  height: 100px;
}
.gtco-testimonials .card h5 {
  color: #01b0f8;
  font-size: 21px;
  line-height: 1.3;
}
.gtco-testimonials .card h5 span {
  font-size: 18px;
  color: #666666;
}
.gtco-testimonials .card p {
  font-size: 18px;
  color: #555;
  padding-bottom: 15px;
}
.gtco-testimonials .active {
  opacity: 0.5;
  transition: all 0.3s;
}
.gtco-testimonials .center {
  opacity: 1;
}
.gtco-testimonials .center h5 {
  font-size: 24px;
}
.gtco-testimonials .center h5 span {
  font-size: 20px;
}
.gtco-testimonials .center .card-img-top {
  max-width: 100%;
  height: 120px;
  width: 120px;
}

@media (max-width: 767px) {
  .gtco-testimonials {
    margin-top: 20px;
  }
}
.owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev {
  outline: 0;
}
.owl-carousel button.owl-dot {
  outline: 0;
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALsm2XWtRQ5INM_ITSCwYB7rQdI9ILgy0"></script>
    <script src="{{asset('frontend/js/google-map-int.js')}}"></script>
    <script src="{{asset('frontend/js/custom-scripts.js')}}"></script>

    {{-- From the desk starts--}}
    <script src="{{asset('frontend/js/popper.j')}}s"></script>
    {{-- <script src="/frontend/js/bootstrap.min.js"></script> --}}
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    {{-- From the desk ends--}}
</body>	
</html>