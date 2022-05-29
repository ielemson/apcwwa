<!DOCTYPE html>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="application-name" content="APC ward  to ward ambassadors">
    <meta property="og:title" content="APCWWA - National Political Action Group" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('apcwwa/images/logo/logo.png') }}" />
    <meta property="og:url" content="https://apcwwa.com" />
    <title>apcwwa {{ $title ?? '' }}</title>
    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description"
        content="APC Ward to Ward Ambassadors is a National Political Action Group operating in the entire 8,665 Political Wards; 774 local government areas of the 36 States of the federation, the FCT" />
    <meta name="keywords" content="APC, Ward, Ambassador, Political, Action Group, Political Party" />
    <meta name="author" content="Elemson Ifeanyi" />
<!-- Stylesheets -->
<link href="{{ asset('apcwwa/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('apcwwa/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('apcwwa/css/desk.css') }}" rel="stylesheet">
<!-- Responsive File -->
<link href="{{ asset('apcwwa/css/responsive.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('apcwwa/images/logo/logo-trans.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('apcwwa/images/logo/logo-trans.png') }}" type="image/x-icon">
@stack('extracss')
    {{-- Extra --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> --}}
{{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'> --}}
<style>
 
</style>
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->

        <div class="preloader">
            <div class="icon"></div>
        </div>

        <!-- Main Header -->

        @include('apcwwa.header')

        @yield('banner')

        <!--End Banner Section -->

        @yield('content')
        <!-- Main Footer -->

        @include('apcwwa.footer')

    </div>

    <!--End pagewrapper-->

    <!--Scroll to top-->

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon flaticon-up-arrow-angle"></span>
    </div>

    <script src="{{ asset('apcwwa/js/jquery.js') }}"></script>
    <script src="{{ asset('apcwwa/js/popper.min.js') }}"></script>
    <script src="{{ asset('apcwwa/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('apcwwa/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('apcwwa/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('apcwwa/js/owl.js') }}"></script>
    <script src="{{ asset('apcwwa/js/mixitup.js') }}"></script>
    <script src="{{ asset('apcwwa/js/mixitup-loadmore.js') }}"></script>
    <script src="{{ asset('apcwwa/js/scrollbar.js') }}"></script>
    <script src="{{ asset('apcwwa/js/isotope.js') }}"></script>
    <script src="{{ asset('apcwwa/js/appear.js') }}"></script>
    <script src="{{ asset('apcwwa/js/wow.js') }}"></script>
    <script src="{{ asset('apcwwa/js/custom-script.js') }}"></script>

    {{-- Extra --}}
    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script> --}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
    <script>
        var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      speed: 3000,
      autoplay:true,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });
    </script>
@stack('extrajs')
</body>

</html>
