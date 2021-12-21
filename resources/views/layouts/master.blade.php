<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="main/images/favicon.png" sizes="32x32" type="image/png">
    <title>apcwwa - APC Ward To Ward Ambassadors</title>

    {{-- EFAULT STYLES-SHEETS --}}
    <link rel="stylesheet" href="{{asset('main/css/icons.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('main/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/jquery.circliful.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/responsive.css')}}">
    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{asset('main/css/colors/color3.css')}}" title="color" />
    {{-- EFAULT STYLES-SHEETS --}}

    {{-- sliders styles --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{('frontend/css/owl.theme.default.min.css')}}"> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    {{-- <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}"> 
    <link rel="stylesheet" href="{{asset('frontend/css/slides.css')}}">
    {{-- sliders styles --}}
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

 {{-- DEFAULT SCRIPTS --}}
 <script src="{{asset('main/js/jquery.min.js')}}"></script>
 <script src="{{asset('main/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('main/js/downCount.js')}}"></script>
 <script src="{{asset('main/js/fancybox.min.js')}}"></script>
 <script src="{{asset('main/js/isotope.pkgd.min.js')}}"></script>
 <script src="{{asset('main/js/perfectscrollbar.min.js')}}"></script>
 <script src="{{asset('main/js/wow.min.js')}}"></script>
 <script src="{{asset('main/js/owl.carousel.min.js')}}"></script>
 <script src="{{asset('main/js/jquery.circliful.min.js')}}"></script>
 <script src="{{asset('main/js/custom-scripts.js')}}"></script>
 {{-- DEFAULT SCRIPTS --}}

 {{-- custom sliders --}}
 {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script> --}}
 {{-- <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script> --}}
 <script src="{{asset('frontend/js/main.js')}}"></script>
 {{-- custom sliders --}}
</body>	

</html>