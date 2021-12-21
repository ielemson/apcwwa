<header class="style1">
    <div class="container">
        <div class="logo"><a href="/" title="Logo"><img src="{{asset('main/images/logo.png')}}" style="width: 100%; height:5vw"></a></div>
        <nav>
            <div>
                {{-- <a class="srch-btn" href="#" title=""><i class="fa fa-search"></i></a> --}}
                <a class="thm-btn brd-rd5" href="{{url('/contact-us')}}" title="">Membership</a>
                <ul>
                    <li ><a href="{{url('/')}}" title="">Home</a>
                    
                    </li>
                    {{-- <li><a href="#" title="">36 States And The FCT</a> </li> --}}
                    <li class="menu-item-has-children"><a href="#" title="">36 States And The FCT</a>
                        <ul>
                            {{-- <li><a href="{{route('login')}}" title="">Login</a></li> --}}
                            
                                <li class="dropdown">        
                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expande  d="false">       
                                        Select State 
                                      </button>                       
                                       <div class="dropdown-menu pre-scrollable" aria-labelledby="dropdownMenuButton"> 
                                           @if (count($states)>0)
                                               @foreach ($states as $state)
                                               <a class="dropdown-item" href="{{route('events.state',strtolower($state->name))}}">{{$state->name}}</a>
                                               @endforeach
                                           @else
                                           <a class="dropdown-item" href="#">No State Available</a>
                                           @endif                                                                             
                                      </div>
                                    </li>
                                                         
                    
                        </ul>
                    </li>
                    <li><a href="{{route('dnc')}}" title="dnc">Diaspora Network Coordinate</a> </li>
                    <li><a href="{{route('events')}}" title="event">Event</a></li>
                    {{-- <li class="menu-item-has-children"><a href="#" title="">Account</a>
                        <ul>
                            <li><a href="{{route('login')}}" title="">Login</a></li>
                            <li><a href="{{route('register')}}" title="">Register</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="menu-item-has-children"><a href="#" title="">Account</a>
                        <ul>
                            <li><a href="{{route('login')}}" title="">Login</a></li>
                            <li><a href="{{route('register')}}" title="">Register</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{url('/about-us')}}" title="">About</a></li>
                    <li><a href="{{url('/contact-us')}}" title="">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>