<header class="style2">
    <div class="container">
        <div class="logo"><a href="{{url('/')}}" title="Logo"><img src="/frontend/images/logo/logo.png"></a></div>
        <nav>
            <div>
                <a class="srch-btn" href="#" title=""><i class="fa fa-search"></i></a>
                <a class="thm-btn brd-rd5" href="{{url('/contact-us')}}" title="">Donate</a>
                <ul>
                    <li ><a href="{{url('/')}}" title="">Home</a>
                    
                    </li>
                    {{-- <li><a href="#" title="">36 States And The FCT</a> </li> --}}
                    <li class="menu-item-has-children"><a href="#" title="">36 States And The FCT</a>
                        <ul>
                            {{-- <li><a href="{{route('login')}}" title="">Login</a></li> --}}
                            <li>
                                <div class="dropdown">        
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expande  d="false">                                                                             Dropdown button                                                                   </button>                       
                                       <div class="dropdown-menu pre-scrollable" aria-labelledby="dropdownMenuButton">                                                           
                                        <a class="dropdown-item" href="#">Foo</a>                                  
                                        <a class="dropdown-item" href="#">Thing</a>                          
                                        <a class="dropdown-item" href="#">Something</a>
                                        <a class="dropdown-item" href="#">Dudes</a>
                                        <a class="dropdown-item" href="#">Birds</a>
                                        <a class="dropdown-item" href="#">Nikes</a>
                                        <a class="dropdown-item" href="#">Marsh mellows</a>      
                                       <a class="dropdown-item" href="#">Apples</a>                                               
                                       <a class="dropdown-item" href="#">Dingles</a>                                             
                                       <a class="dropdown-item" href="#">Berries</a>                                             
                                       <a class="dropdown-item" href="#">What not</a>                                           
                                       <a class="dropdown-item" href="#">Something else here</a>                              
                                       <a class="dropdown-item" href="#">Action</a>                                            
                                       <a class="dropdown-item" href="#">Another action</a>                                     
                                       <a class="dropdown-item" href="#">Something else here</a>                     
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