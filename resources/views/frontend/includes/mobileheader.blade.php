<div class="rspn-hdr">
    <div class="rspn-mdbr">
        <ul class="rspn-scil">
            <li><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>                   
        </ul>
        {{-- <form class="rspn-srch">
            <input type="text" placeholder="Enter Your Keyword" />
            <button type="submit"><i class="fa fa-search"></i></button>
        </form> --}}
    </div>
    <div class="lg-mn">
        <div class="logo"><a href="{{url('/')}}" title="Logo"><img src="/frontend/images/logo/logo2.png" alt="logo" style="height: 8vh"></a></div>
        <div class="rspn-cnt">
            <span><i class="fa fa-envelope thm-clr"></i><a href="#" title="">info@apcwwa.com</a></span>
            <span><i class="fa fa-phone thm-clr"></i>+(00) 123-345-11</span>
        </div>
        <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
    </div>
    <div class="rsnp-mnu">
        <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
        <ul>
            <li ><a href="{{url('/')}}" title="">Home</a>
                    
            </li>
            <li class="menu-item-has-children"><a href="#" title="">36 States And The FCT</a>
                <ul>
                    {{-- <li><a href="{{route('login')}}" title="">Login</a></li> --}}
                    
                        <li class="dropdown menu-item-has-children">        
                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expande  d="false">       
                                Select State 
                              </button>                       
                               <div class="dropdown-menu pre-scrollable" aria-labelledby="dropdownMenuButton"> 
                                   @if (count($states ?? '')>0)
                                       @foreach ($states ?? '' as $state)
                                       <a class="dropdown-item" href="{{route('events.state',strtolower($state->name))}}">{{$state->name}}</a>
                                       @endforeach
                                   @else
                                   <a class="dropdown-item" href="#">No State Available</a>
                                   @endif                                                                             
                              </div>
                            </li>
                                                 
            
                </ul>
            </li>
  
              {{-- <li class="menu-item-has-children"><a href="#" title="dnc">Diaspora Network Coordinate</a> 
                    
                        <ul>
                            <li><a href="{{route('dnc_home')}}" >About DNC</a></li>
                            <li><a href="{{route('dnc_members')}}" >DNC Members</a></li>
                            <li><a href="{{route('dnc_post')}}" >DNC Event</a></li>
                            <li><a href="{{route('dnc_gallery')}}" >DNC Gallery</a></li>
                        </ul>
                    </li> --}}

                    <li ><a href="{{route('dnc_home')}}" title="dnc">Diaspora Network Coordinate</a> 
                    
                        <ul>
                            {{-- <li><a href="{{route('dnc_home')}}" >About DNC</a></li> --}}
                            {{-- <li><a href="{{route('dnc_members')}}" >DNC Committee</a></li> --}}
                            {{-- <li><a href="{{route('dnc_post')}}" >DNC Event</a></li> --}}
                            {{-- <li><a href="{{route('dnc_gallery')}}" >DNC Gallery</a></li> --}}
                        </ul>
                    </li>
                    
            <li><a href="{{route('events')}}" title="event">Event</a></li>

            {{-- <li class="menu-item-has-children"><a href="#" title="">Account</a>
                <ul>
                    <li><a href="{{route('login')}}" title="">Login</a></li>
                    <li><a href="{{route('register')}}" title="">Register</a></li>
                </ul>
            </li> --}}
            <li><a href="{{url('/about-us')}}" title="">About</a></li>
            <li><a href="{{url('/contact-us')}}" title="">Contact</a></li>
        </ul>
    </div><!-- Responsive Menu -->
</div><!-- Responsive Header -->

<div class="header-search">
    <span class="srch-cls-btn brd-rd5"><i class="fa fa-times"></i></span>
    <form>
        <input type="text" placeholder="Search here...">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>