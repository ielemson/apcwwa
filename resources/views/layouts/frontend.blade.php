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
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}"> 
    {{-- From  Desk Style Ends --}}

    {{-- @include('frontend.includes.head') --}}
    @yield('styles')
    <link rel="stylesheet" href="{{asset('frontend/css/slides.css')}}">

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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  {{-- <script src="{{asset('frontend/js/jquery.min.js')}}"></script> --}}
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/downCount.js')}}"></script>
    <script src="{{asset('frontend/js/fancybox.min.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/perfectscrollbar.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.circliful.min.js')}}"></script> 
 
  
    {{-- From the desk starts--}}
    {{-- <script src="{{asset('frontend/js/popper.j')}}s"></script> --}}
    {{-- <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script> --}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    {{-- From the desk ends--}}
    {{-- @include('frontend.includes.foot') --}}
    {{-- <script src="{{asset('frontend/js/main.js')}}"></script>  --}}
    <script src="/frontend/boostrap/js/jquery.min.js"></script>
    <script src="/frontend/boostrap/js/bootstrap.min.js"></script>
    <script src="/frontend/boostrap/js/downCount.js"></script>
    <script src="/frontend/boostrap/js/fancybox.min.js"></script>
    <script src="/frontend/boostrap/js/isotope.pkgd.min.js"></script>
    <script src="/frontend/boostrap/js/perfectscrollbar.min.js"></script>    
    <script src="/frontend/boostrap/js/wow.min.js"></script>
    <script src="/frontend/boostrap/js/owl.carousel.min.js"></script>
    <script src="/frontend/boostrap/js/jquery.circliful.min.js"></script>
    <script src="/frontend/boostrap/js/custom-scripts.js"></script>
</body>	
</html>