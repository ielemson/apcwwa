<header class="style1">
    <div class="container">
        <div class="logo"><a href="{{route('welcome')}}" title="Logo"><img src="{{asset('main/images/logo.png')}}" style="width: 100%; height:3.5vw"></a></div>
        <nav>
            <div>
                {{-- <a class="srch-btn" href="#" ><i class="fa fa-search"></i></a> --}}
                <a class="thm-btn brd-rd5" href="#" title="donate"  data-toggle="modal" data-target="#sideModalBRDangerDemo"> <i class="fas fa-hand-holding-heart"></i> Donate </a>
                <ul>
                    <li ><a href="{{url('/')}}" >Home</a>
                    
                    </li>
                    {{-- <li><a href="#" >36 States And The FCT</a> </li> --}}
                    <li class="menu-item-has-children"><a href="#" >36 States And The FCT</a>
                        <ul>
                            {{-- <li><a href="{{route('login')}}" >Login</a></li> --}}
                            
                        <li class="dropdown">        
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
                    <li ><a href="{{route('dnc_home')}}" title="dnc">Diaspora Network Coordinate</a> 
                    
                        <ul>
                            {{-- <li><a href="{{route('dnc_home')}}" >About DNC</a></li> --}}
                            {{-- <li><a href="{{route('dnc_members')}}" >DNC Committee</a></li> --}}
                            {{-- <li><a href="{{route('dnc_post')}}" >DNC Event</a></li> --}}
                            {{-- <li><a href="{{route('dnc_gallery')}}" >DNC Gallery</a></li> --}}
                        </ul>
                    </li>
                    <li><a href="{{route('events')}}" title="event">Event</a></li>
                    {{-- <li class="menu-item-has-children"><a href="#" >Account</a>
                        <ul>
                            <li><a href="{{route('login')}}" >Login</a></li>
                            <li><a href="{{route('register')}}" >Register</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="menu-item-has-children"><a href="#" >Account</a>
                        <ul>
                            <li><a href="{{route('login')}}" >Login</a></li>
                            <li><a href="{{route('register')}}" >Register</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{url('/about-us')}}" >About</a></li>
                    <li><a href="{{url('/contact-us')}}" >Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>