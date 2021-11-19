<header class="style2">
    <div class="container">
        <div class="logo"><a href="{{url('/')}}" title="Logo"><img src="/frontend/images/logo.png" alt="logo.png" style="width:5vh; height:5vh"></a></div>
        <nav>
            <div>
                <a class="srch-btn" href="#" title=""><i class="fa fa-search"></i></a>
                <a class="thm-btn brd-rd5" href="contact.html" title="">Wants To Visit ?</a>
                <ul>
                    <li ><a href="#" title="">Home</a>
                    
                    </li>
                    <li><a href="#" title="">Blog</a>
                        
                    </li>
                    <li><a href="event.html" title="">Event</a></li>
                    <li><a href="crowd-funding.html" title="">Donate</a></li>
                    {{-- <li class="menu-item-has-children"><a href="#" title="">Pages</a>
                        <ul>
                            <li><a href="team.html" title="">Team Grid View</a></li>
                            <li><a href="team2.html" title="">Team Round View</a></li>
                            <li><a href="portfolio.html" title="">Our Portfolio</a></li>
                            <li><a href="services.html" title="">Our Services</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{url('/about-us')}}" title="">About</a></li>
                    <li><a href="{{url('/contact-us')}}" title="">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<section>
    <div class="gap remove-bottom black-layer2 opc85">
        <div class="fixed-bg" style="background-image: url(frontend/images/parallax14.jpg);"></div>
        <div class="container">
            <div class="page-title-wrap">
                <h1 class="text-white">{{$header1Text ?? ''}}</h1>
                <h2>{{$header2Text ?? ''}}</h2>
                <ul class="breadcrumbs">
                    <li><a href="{{url('/')}}" title="">Home</a></li>
                    <li>{{$title}}</li>
                </ul>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>
