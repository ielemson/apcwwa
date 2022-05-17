<!DOCTYPE html>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>apcwwa</title>

    <!-- Stylesheets -->

    <link href="{{asset('apcwwa/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('apcwwa/css/style.css')}}" rel="stylesheet">

    <!-- Responsive File -->

    <link href="{{asset('apcwwa/css/responsive.css')}}" rel="stylesheet">



    <link rel="shortcut icon" href="{{asset('apcwwa/images/logo/logo-trans.png')}}" type="image/x-icon">

    <link rel="icon" href="{{asset('apcwwa/images/logo/logo-trans.png')}}" type="image/x-icon">



    <!-- Responsive Settings -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


</head>

<body>



    <div class="page-wrapper">

        <!-- Preloader -->

        {{-- <div class="preloader">
<div class="icon"></div>
</div> --}}

        <!-- Main Header -->

        @include('apcwwa.header')


        <!--Search Popup-->
{{-- 
        <div id="search-popup" class="search-popup">

            <div class="close-search theme-btn"><span class="flaticon-targeting-cross"></span></div>

            <div class="popup-inner">

                <div class="overlay-layer"></div>

                <div class="search-form">

                    <form method="post" action="index.html">

                        <div class="form-group">

                            <fieldset>

                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>

                                <input type="submit" value="Search Now!" class="theme-btn">

                            </fieldset>

                        </div>

                    </form>



                    <br>

                    <h3>Recent Search Keywords</h3>

                    <ul class="recent-searches">

                        <li><a href="#">Finance</a></li>

                        <li><a href="#">Idea</a></li>

                        <li><a href="#">Service</a></li>

                        <li><a href="#">Growth</a></li>

                        <li><a href="#">Plan</a></li>

                    </ul>



                </div>



            </div>

        </div> --}}

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





    <script src="{{asset('apcwwa/js/jquery.js')}}"></script>

    <script src="{{asset('apcwwa/js/popper.min.js')}}"></script>

    <script src="{{asset('apcwwa/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('apcwwa/js/jquery-ui.js')}}"></script>

    <script src="{{asset('apcwwa/js/jquery.fancybox.js')}}"></script>

    <script src="{{asset('apcwwa/js/owl.js')}}"></script>

    <script src="{{asset('apcwwa/js/scrollbar.js')}}"></script>

    <script src="{{asset('apcwwa/js/appear.js')}}"></script>

    <script src="{{asset('apcwwa/js/wow.js')}}"></script>

    <script src="{{asset('apcwwa/js/custom-script.js')}}"></script>



</body>

</html>
