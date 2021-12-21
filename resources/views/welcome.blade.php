@extends('layouts.master')

@section('header')
@include('partials.header')
@include('frontend.includes.mobileheader')
@endsection

@section('content')

{{-- @include('frontend.includes.contactusform') --}}

@include('partials.slider')

@include('frontend.includes.desk')

@include('frontend.includes.members')

@include('frontend.includes.diaspora')


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
                <div class="fea-itm" style="background-image: url(/frontend/images/slider/apc.jpeg);">
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

@include('partials.upcomingEvents')

{{-- <section>
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
</section> --}}

<section>
    <div class="gap thm-layer opc9">
        <div class="fixed-bg" style="background-image: url(/frontend/images/slider/slider-5.jpeg);"></div>
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