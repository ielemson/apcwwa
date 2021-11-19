@extends('layouts.frontend')

@section('header')
@include('frontend.includes.header')
@include('frontend.includes.mobileheader')
@endsection

@section('content')

@include('frontend.includes.contactusform')

@include('frontend.includes.slider')

<section>
    <div class="gap">
        <div class="container">
            <div class="hstry-wrap">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="hstry-img text-center">
                            <img src="/frontend/images/logo.jpg" alt="hstry-img.png">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="hstry-desc">
                            <span>A Few Words About Us</span>
                            <h2>History Of Center</h2>
                            <p>Since 1987, Our institution guiding students and people around the world. Helping others in every community and region with astonishing facilities. Since 1987, Our institution guiding students and people around the world.</p>
                            <strong>The jamia is the <span>#1</span> apcwwa Center in the <span>Country!</span></strong>
                            <ul>
                                <li>Astonisihing Facilities</li>
                                <li>Helping All Communities</li>
                                <li>Leads Charity Events</li>
                                <li>Schooling Children</li>
                                <li>Feeding Hungry People</li>
                                <li>Providing Accomodations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- History Wrap -->
        </div>
    </div>
</section>
<section class = "team-green-block">
    <div class="gap thm-layer opc95">
        <div class="fixed-bg ptrn-bg" style="background-image: url(/frontend/images/pattern-bg.jpg);"></div>
        <div class="container">
            <div class="sec-title2 text-center">
                <div class="sec-title-inner2">
                    <span>Our Members</span>
                    <h3>APCWWA Members</h3>
                </div>
            </div>
            <div class="team-wrap text-center remove-ext3">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-lg-3 fadeIn" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="team-box2">
                            <img src="/frontend/images/resources/team-img2-1.jpg" alt="team-img2-1.jpg">
                            <div class="team-info2">
                                <h4>Joe Amaka</h4>
                                <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to.</p>
                                <div class="team-scl">
                                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3 fadeIn" data-wow-duration=".8s" data-wow-delay=".3s">
                        <div class="team-box2">
                            <img src="/frontend/images/resources/team-img2-2.jpg" alt="team-img2-2.jpg">
                            <div class="team-info2">
                                <h4>Umair</h4>
                                <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to.</p>
                                <div class="team-scl">
                                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3 fadeIn" data-wow-duration=".8s" data-wow-delay=".4s">
                        <div class="team-box2">
                            <img src="/frontend/images/resources/team-img2-3.jpg" alt="team-img2-3.jpg">
                            <div class="team-info2">
                                <h4>Fatima</h4>
                                <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to.</p>
                                <div class="team-scl">
                                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3 fadeIn" data-wow-duration=".8s" data-wow-delay=".5s">
                        <div class="team-box2">
                            <img src="/frontend/images/resources/team-img2-4.jpg" alt="team-img2-4.jpg">
                            <div class="team-info2">
                                <h4>Ammara</h4>
                                <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to.</p>
                                <div class="team-scl">
                                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Team Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="gap">
        <div class="container">
            <div class="sec-title2 text-center">
                <div class="sec-title-inner2">
                    <span>Serving Humanity</span>
                    <h3>Our Services</h3>
                </div>
            </div>
            <div class="serv-wrap text-center remove-ext3">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="srv-box2">
                            <i class="flaticon-quran-rehal"></i>
                            <div class="srv-info2">
                                <h4>Quran Learning</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <a href="#" title="">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="srv-box2">
                            <i class="flaticon-heart-1"></i>
                            <div class="srv-info2">
                                <h4>Charity Service</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <a href="#" title="">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="srv-box2">
                            <i class="flaticon-social-care"></i>
                            <div class="srv-info2">
                                <h4>Home Development</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <a href="#" title="">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="srv-box2">
                            <i class="flaticon-social-care"></i>
                            <div class="srv-info2">
                                <h4>Help Poor's</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <a href="#" title="">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Serv Wrap -->
            <div class="view-all text-center">
                <a class="thm-btn brd-rd5" href="#" title="">View More</a>
            </div><!-- View All -->
        </div>
    </div>
</section>
<section>
    <div class="gap remove-gap three-block-section">
        <div class="sec-title2 text-center">
            <div class="sec-title-inner2">
                <span>PRESENT TO YOU</span>
                <h3>What We Do</h3>
            </div>
            <p>Our insitutions running all over the country providing facilities and help in every area of life including education counselling hadees classes and health facilites</p>
        </div>
        <div class="fea-car text-center">
            <div class="row mrg">
                <div class="col-md-4 col-sm-6 col-lg-4">
                    <div class="fea-itm" style="background-image: url(/frontend/images/resources/fea-img1.jpg);">
                        <i class="flaticon-reading-quran"></i>
                        <div class="fea-info2">
                            <h4>Hadees Class</h4>
                            <p>Along with quran teachings we are giving classes of Ahadees, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                            <a href="#" title="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4">
                    <div class="fea-itm" style="background-image: url(/frontend/images/resources/fea-img2.jpg);">
                        <i class="flaticon-museum"></i>
                        <div class="fea-info2">
                            <h4>Our Academies</h4>
                            <p>Our academies and insitutes spread all over regions with 100+ locations, adipi sicing elit, sed do eiusmod tempor</p>
                            <a href="#" title="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4">
                    <div class="fea-itm" style="background-image: url(/frontend/images/resources/fea-img3.jpg);">
                        <i class="flaticon-heart-1"></i>
                        <div class="fea-info2">
                            <h4>Counselling</h4>
                            <p>Along with quran teachings we are giving classes of Ahadees, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                            <a href="#" title="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="gap">
        <div class="container">
            <div class="evnt-pry-wrap">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-title">
                            <div class="sec-title-inner">
                                <h3><span>Upcoming</span> Events</h3>
                            </div>
                            <p>APC Ward To Ward Multiple Events</p>
                        </div>
                        <div class="evnt-wrap remove-ext5">
                            <div class="row mrg20">

                                <div class="col-md-4 col-sm-12 col-lg-4">
                                    <div class="evnt-box">
                                        <div class="evnt-thmb">
                                            <a href="#" title=""><img src="/frontend/images/resources/evnt-img1.jpg" alt="evnt-img1.jpg"></a>
                                        </div>
                                        <div class="evnt-info">
                                            <h4>apcwwa  Event</h4>
                                            <ul class="pst-mta">
                                                <li class="thm-clr">07/10/2020</li>
                                                <li class="thm-clr">12:00 AM to 02:00 PM</li>
                                            </ul>
                                            <p>Giviing hope to all children</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-sm-12 col-lg-4">
                                    <div class="evnt-box">
                                        <div class="evnt-thmb">
                                            <a href="#" title=""><img src="/frontend/images/resources/evnt-img1.jpg" alt="evnt-img1.jpg"></a>
                                        </div>
                                        <div class="evnt-info">
                                            <h4>apcwwa  Event</h4>
                                            <ul class="pst-mta">
                                                <li class="thm-clr">07/10/2020</li>
                                                <li class="thm-clr">12:00 AM to 02:00 PM</li>
                                            </ul>
                                            <p>Giviing hope to all children</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12 col-lg-4">
                                    <div class="evnt-box">
                                        <div class="evnt-thmb">
                                            <a href="#" title=""><img src="/frontend/images/resources/evnt-img1.jpg" alt="evnt-img1.jpg"></a>
                                        </div>
                                        <div class="evnt-info">
                                            <h4>apcwwa  Event</h4>
                                            <ul class="pst-mta">
                                                <li class="thm-clr">07/10/2020</li>
                                                <li class="thm-clr">12:00 AM to 02:00 PM</li>
                                            </ul>
                                            <p>Giviing hope to all children</p>
                                        </div>
                                    </div>
                                </div>


                               

                                {{-- <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="evnt-box">
                                        <div class="evnt-thmb">
                                            <a href="#" title=""><img src="/frontend/images/resources/evnt-img2.jpg" alt="evnt-img2.jpg"></a>
                                        </div>
                                        <div class="evnt-info">
                                            <h4>apcwwa Teaching Event</h4>
                                            <ul class="pst-mta">
                                                <li class="thm-clr">10/10/2020</li>
                                                <li class="thm-clr">12:00 AM to 02:00 PM</li>
                                            </ul>
                                            <p>Central masque, New town, Las Vegas MuslimHub Center</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div><!-- Events Wrap -->
                    </div>
                    {{-- <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="sec-title">
                            <div class="sec-title-inner">
                                <h3>Prayer <span>Times</span></h3>
                            </div>
                        </div>
                        <ul class="prayer-times">
                            <li class="pry-tim-hed"><span>Salat</span><span>Start</span><span>Iqamah</span></li>
                            <li><span class="thm-clr">Fajar</span><span>03:58 am</span><span>04:45 am</span></li>
                            <li><span class="thm-clr">Sunrise</span><span>05:31 am</span><span>05:31 am</span></li>
                            <li><span class="thm-clr">Zuhr</span><span>12:47 pm</span><span>12:47 pm</span></li>
                            <li><span class="thm-clr">Asr</span><span>05:53 pm</span><span>05:50 pm</span></li>
                            <li><span class="thm-clr">Maghrib</span><span>08:04 pm</span><span>08:04 pm</span></li>
                            <li><span class="thm-clr">Isha</span><span>09:37 pm</span><span>09:30 pm</span></li>
                            <li><span class="thm-clr">Jumu'ah 1</span><span>01:15 pm</span><span>01:15 pm</span></li>
                        </ul>
                    </div> --}}
                </div>
            </div><!-- Events & Prayer Wrap -->
        </div>
    </div>
</section>

<section>
    <div class="gap top-spac120 white-grad-layer">
        <img class="top-shp shp-img" src="frontend/images/shp2.png" alt="shp2.png">
        <img class="botm-shp shp-img" src="frontend/images/shp3.png" alt="shp3.png">
        <div class="fixed-bg" style="background-image: url(frontend/images/landing.png);"></div>
        <div class="container">
            <div class="abot-wrap">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="abot-sec">
                            <div class="sec-title">
                                <div class="sec-title-inner">
                                    <span>About</span>
                                    <h3>Our Diaspora</h3>
                                </div>
                            </div>
                            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                            <a class="secndry-btn brd-rd40" href="#" title="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div><!-- About Wrap -->
        </div>
    </div>
</section>

{{-- <section>
    <div class="gap white-layer opc9">
        <div class="fixed-bg ptrn-bg" style="background-image: url(/frontend/images/pattern-bg.jpg);"></div>
        <div class="container">
            <div class="sec-title2 text-center">
                <div class="sec-title-inner2">
                    <span>What Our</span>
                    <h3>Donator Say</h3>
                </div>
            </div>
            <div class="testi-wrap style2 text-center">
                <div class="testi-car owl-carousel">
                    <div class="testi-itm">
                        <i><img src="/frontend/images/resources/testi-img1.jpg" alt="testi-img1.jpg"></i>
                        <div class="testi-info">
                            <h4>Abu Hassam Adam</h4>
                            <p><i>"</i>Giving charity to this insitution made me feel happy, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <i>"</i></p>
                        </div>
                    </div>
                    <div class="testi-itm">
                        <i><img src="/frontend/images/resources/testi-img2.jpg" alt="testi-img2.jpg"></i>
                        <div class="testi-info">
                            <h4>Abu Adam Hassam</h4>
                            <p><i>"</i>I'm glad that I was able to help the needy, elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <i>"</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Our Members in Diaspora</h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" style="background-color: #38ab1e" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3" style="background-color: #38ab1e" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="gap thm-layer opc9">
        <div class="fixed-bg" style="background-image: url(/frontend/images/parallax7.jpg);"></div>
        <div class="container">
            <div class="nwsltr-wrp text-center">
                <div class="nwsltr-innr">
                    <div class="nwsltr-title">
                        <h3>Newsletter</h3>
                        <span>Subscribe to our mailing list</span>
                    </div>
                    <form>
                        <input type="email" placeholder="Enter your email">
                        <button type="submit">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection