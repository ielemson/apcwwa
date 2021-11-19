<header class="style2">
    <div class="container">
        <div class="logo"><a href="{{url('/')}}" title="Logo"><img src="/frontend/images/logo.png" alt="logo.png" style="width:100%; height:8vh"></a></div>
        <nav>
            <div>
                <a class="srch-btn" href="#" title=""><i class="fa fa-search"></i></a>
                <a class="thm-btn brd-rd5" href="contact.html" title="">Wants To Visit ?</a>
                <ul>
                    <li ><a href="{{url('/')}}" title="">Home</a>
                    
                    </li>
                    <li><a href="#" title="">Blog</a>
                        
                    </li>
                    <li><a href="event.html" title="">Event</a></li>
                    <li class="menu-item-has-children"><a href="#" title="">Account</a>
                        <ul>
                            <li><a href="{{route('login')}}" title="">Login</a></li>
                            <li><a href="{{route('register')}}" title="">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/about-us')}}" title="">About</a></li>
                    <li><a href="{{url('/contact-us')}}" title="">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>