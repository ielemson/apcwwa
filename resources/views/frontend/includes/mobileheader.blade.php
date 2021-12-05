<div class="rspn-hdr">
    <div class="rspn-mdbr">
        <ul class="rspn-scil">
            <li><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>                   
        </ul>
        <form class="rspn-srch">
            <input type="text" placeholder="Enter Your Keyword" />
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
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
    </div><!-- Responsive Menu -->
</div><!-- Responsive Header -->

<div class="header-search">
    <span class="srch-cls-btn brd-rd5"><i class="fa fa-times"></i></span>
    <form>
        <input type="text" placeholder="Search here...">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>