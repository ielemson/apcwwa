<!-- Header Upper -->
<header class="main-header header-style-one">

  <!-- Header Top -->
  
  <div class="header-top header-top-one">
  
      <div class="auto-container">
  
          <div class="inner clearfix">
  
              <div class="top-left clearfix">
  
                  <div class="welcome-text">APC Ward To Ward Ambassador <span class="arrow flaticon-right-arrow-angle"></span></div>
  
                  <div class="email"><a href="mailto:info@apcwwa.com"><span class="icon fa fa-envelope"></span>info@apcwwa.com</a></div>
  
              </div>
  
  
  
              {{-- <div class="mid-text"><span>Visiting London?</span> Find events, residents and more.</div> --}}
  
  
  
              <div class="top-right clearfix">
  
                  <div class="phone"><a href="#"><span class="icon fa fa-phone-alt"></span>call on: 0703-151-4509, 0803-453-1635</a></div>
  
                  <div class="hours">
  
                      <div class="hours-btn btn-md">Donate </div>
  
                  </div>
  
              </div>
  
          </div>
  
      </div>
  
  </div>

  
<div class="header-upper">

  <div class="auto-container">

      <div class="inner-container clearfix">

          <!--Logo-->

          <div class="logo-box clearfix">

              <div class="logo">
                  <a href="{{url('/')}}" title="apcwwa"><img src="{{asset('main/images/logo.png')}}" alt="apcwwa" title="apcwwa"></a>
              </div>

              <div class="search-btn search-btn-one"><button type="button" class="theme-btn search-toggler"><span class="txt">Explore</span> <span class="icon flaticon-loupe-1"></span></button></div>

          </div>



          <!--Nav-->

          <div class="nav-outer clearfix">

              <!--Mobile Navigation Toggler-->

              <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

              <!-- Main Menu -->

              <nav class="main-menu navbar-expand-md navbar-light">

                  <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">

                      <ul class="navigation clearfix">

                          <li class="current"><a href="{{url('/')}}">Home</a> </li>

                          <li class="dropdown"><a href="#">36 States & The FCT</a>

                              <ul>


                                   
                                        <li><a href="{{route('states')}}">View All States</a></li>
      
      
                              
{{-- 
                                  <li>
                                    <span class="btn btn-xs dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expande  d="false" style="cursor: pointer">       
                                      Select State 
                                      </span>                       
                                      <span class="dropdown-menu pre-scrollable" aria-labelledby="dropdownMenuButton"> 
                                          @if (count($states ?? '')>0)
                                              @foreach ($states ?? '' as $state)
                                              <a class="dropdown-item" href="{{route('events.state',strtolower($state->name))}}">{{$state->name}}</a>
                                              @endforeach
                                          @else
                                          <a class="dropdown-item" href="#">No State Available</a>
                                          @endif                                                                             
                                      </span>
                                  </li> --}}


                              </ul>

                          </li>

                          <li class="dropdown"><a href="#">DNC</a>

                              <ul>
                                  <li><a href="{{route('dnc_home')}}">Diaspora Network Cordinate</a></li>

                              </ul>

                          </li>

                          <li><a href="events-list.html">Events</a> </li>

                          <li><a href="{{url('/about-us')}}">About Us</a> </li>

                          <li><a href="{{url('/contact-us')}}">Contact</a></li>

                      </ul>

                  </div>

              </nav>

          </div>


          <!--Other Links-->

          <div class="other-links clearfix">

              <!--Language-->

              <div class="language">

                  <div class="lang-btn">

                      <span class="icon flaticon-worldwide-1"></span>

                      <span class="txt">English</span>

                      <span class="arrow fa fa-angle-down"></span>

                  </div>

                  <div class="lang-dropdown">

                      <ul>

                          <li><a href="#">Igbo</a></li>

                          <li><a href="#">Hausa</a></li>

                          <li><a href="#">Yoruba</a></li>

                      </ul>

                  </div>

              </div>

              <!--Social Links-->

              <div class="social-links-one">

                  <ul class="clearfix">

                      <li><a href="#" class="has-tooltip"><span class="fab fa-facebook-f"></span><div class="c-tooltip"><div class="tooltip-inner">Facebook</div></div></a></li>

                      <li><a href="#" class="has-tooltip"><span class="fab fa-twitter"></span><div class="c-tooltip"><div class="tooltip-inner">Twitter</div></div></a></li>

                      <li><a href="#" class="has-tooltip"><span class="fab fa-linkedin-in"></span><div class="c-tooltip"><div class="tooltip-inner">Linkedin</div></div></a></li>

                  </ul>

              </div>



          </div>



      </div>

  </div>

</div>

<!--End Header Upper-->



<!-- Sticky Header  -->

<div class="sticky-header">

  <div class="auto-container clearfix">

      <!--Logo-->

      <div class="logo pull-left">

          <a href="index.html" title=""><img src="images/sticky-logo.png" alt="" title=""></a>

      </div>

      <!--Right Col-->

      <div class="pull-right">

          <!-- Main Menu -->

          <nav class="main-menu clearfix">

              <!--Keep This Empty / Menu will come through Javascript-->

          </nav>
          <!-- Main Menu End-->

      </div>

  </div>

</div>
<!-- End Sticky Menu -->



<!-- Mobile Menu  -->

<div class="mobile-menu">

  <div class="menu-backdrop"></div>

  <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>



  <nav class="menu-box">

      <div class="nav-logo">
          <a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a>
      </div>

      <div class="menu-outer">
          <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
      </div>

      <!--Social Links-->

      <div class="social-links">

          <ul class="clearfix">

              <li><a href="#"><span class="fab fa-twitter"></span></a></li>

              <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>

              <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>

              <li><a href="#"><span class="fab fa-instagram"></span></a></li>

              <li><a href="#"><span class="fab fa-youtube"></span></a></li>

          </ul>

      </div>

  </nav>

</div>
<!-- End Mobile Menu -->

</header>

<!-- End Main Header -->
