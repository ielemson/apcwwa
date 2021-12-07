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
    {{-- <link rel="stylesheet" href="{{asset('frontend/css/fancybox.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('frontend/css/jquery.circliful.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{asset('frontend/css/colors/color3.css')}}" /><!-- Color -->

    {{-- From  Desk Style Starts --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
		
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slides.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}">

    {{-- From  Desk Style Ends --}}
    
</head>
<body>
    <main>
        {{-- <div class="pageloader-wrap">
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div> --}}
        <!-- Pageloader Wrap -->

       @yield('header')

        <!-- Header -->
        @yield('content')

      @include('frontend.includes.footer')
    </main>
    <!-- Main Wrapper -->

    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
      {{-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> --}}
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/downCount.js')}}"></script>
    <script src="{{asset('frontend/js/fancybox.min.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/perfectscrollbar.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.circliful.min.js')}}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALsm2XWtRQ5INM_ITSCwYB7rQdI9ILgy0"></script> --}}
    {{-- <script src="{{asset('frontend/js/google-map-int.js')}}"></script> --}}
    <script src="{{asset('frontend/js/custom-scripts.js')}}"></script>
    {{-- <script src="{{asset('frontend/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script> --}}
    {{-- From the desk starts--}}
    <script src="{{asset('frontend/js/popper.j')}}s"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    {{-- From the desk ends--}}
      <script type="text/javascript">
    $(document).on('ready', function() {
      $('.regular').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
	
    });
</script>
</body>	
</html>