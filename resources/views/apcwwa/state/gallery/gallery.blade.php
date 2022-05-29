@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection', [
        'title_1' => 'Gallery',
        'title_2' => 'Gallery',
        'img' => '/apcwwa/images/banner/contact.jpg',
    ])
@endsection

@section('content')
<section class="portfolio-section portfolio-masonry">

    <div class="auto-container">

        <div class="sec-title with-separator centered">

            <h2>What We Have Done In Our <br>City Council</h2>

            <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

        </div>

        <!--Masonry Galery-->

        <div class="sortable-masonry filter-gallery">

            <div class="filters clearfix">

                <ul class="filter-tabs filter-btns clearfix">

                    <li class="filter active" data-role="button" data-filter=".all">View All</li>

                    <li class="filter" data-role="button" data-filter=".conference">Conference</li>

                    <li class="filter" data-role="button" data-filter=".celebration">Celebration</li>

                    <li class="filter" data-role="button" data-filter=".tour">Tourist Guide</li>

                    <li class="filter" data-role="button" data-filter=".industry">Industry</li>

                </ul>

            </div>



            <div class="items-container row clearfix">

                <!--Gallery Item-->

                <div class="gallery-block masonry-item all tour industry col-lg-4 col-md-6 col-sm-12">

                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image-box">

                            <figure class="image">

                                <img src="images/gallery/19.jpg" alt="">

                            </figure>

                            <div class="zoom-btn">

                                <a class="lightbox-image zoom-link" href="images/gallery/19.jpg" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>

                            </div>

                            <div class="cap-box">

                                <h6>Tourist Guide</h6>

                                <h3><a href="#"><span>[</span> Mayor golf day <span>]</span></a></h3>

                            </div>

                        </div>



                    </div>

                </div>

                <!--Gallery Item-->

                <div class="gallery-block masonry-item all celebration tour col-lg-8 col-md-6 col-sm-12">

                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image-box">

                            <figure class="image">

                                <img src="images/gallery/20.jpg" alt="">

                            </figure>

                            <div class="zoom-btn">

                                <a class="lightbox-image zoom-link" href="images/gallery/20.jpg" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>

                            </div>

                            <div class="cap-box">

                                <h6>Tourist Guide</h6>

                                <h3><a href="#"><span>[</span> City metro train <span>]</span></a></h3>

                            </div>

                        </div>



                    </div>

                </div>

                <!--Gallery Item-->

                <div class="gallery-block masonry-item all conference tour col-lg-4 col-md-6 col-sm-12">

                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image-box">

                            <figure class="image">

                                <img src="images/gallery/21.jpg" alt="">

                            </figure>

                            <div class="zoom-btn">

                                <a class="lightbox-image zoom-link" href="images/gallery/21.jpg" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>

                            </div>

                            <div class="cap-box">

                                <h6>Tourist Guide</h6>

                                <h3><a href="#"><span>[</span> St james park <span>]</span></a></h3>

                            </div>

                        </div>



                    </div>

                </div>

                <!--Gallery Item-->

                <div class="gallery-block masonry-item all celebration tour col-lg-4 col-md-6 col-sm-12">

                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image-box">

                            <figure class="image">

                                <img src="images/gallery/22.jpg" alt="">

                            </figure>

                            <div class="zoom-btn">

                                <a class="lightbox-image zoom-link" href="images/gallery/22.jpg" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>

                            </div>

                            <div class="cap-box">

                                <h6>Tourist Guide</h6>

                                <h3><a href="#"><span>[</span> British museum <span>]</span></a></h3>

                            </div>

                        </div>



                    </div>

                </div>

                <!--Gallery Item-->

                <div class="gallery-block masonry-item all conference celebration tour industry col-lg-4 col-md-6 col-sm-12">

                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image-box">

                            <figure class="image">

                                <img src="images/gallery/23.jpg" alt="">

                            </figure>

                            <div class="zoom-btn">

                                <a class="lightbox-image zoom-link" href="images/gallery/23.jpg" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>

                            </div>

                            <div class="cap-box">

                                <h6>Tourist Guide</h6>

                                <h3><a href="#"><span>[</span> Tower of london <span>]</span></a></h3>

                            </div>

                        </div>



                    </div>

                </div>

                <!--Gallery Item-->

                <div class="gallery-block masonry-item all celebration tour industry col-lg-8 col-md-6 col-sm-12">

                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image-box">

                            <figure class="image">

                                <img src="images/gallery/24.jpg" alt="">

                            </figure>

                            <div class="zoom-btn">

                                <a class="lightbox-image zoom-link" href="images/gallery/24.jpg" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>

                            </div>

                            <div class="cap-box">

                                <h6>Tourist Guide</h6>

                                <h3><a href="#"><span>[</span> Job expo 2019 <span>]</span></a></h3>

                            </div>

                        </div>



                    </div>

                </div>

                <!--Gallery Item-->

                <div class="gallery-block masonry-item all conference tour industry col-lg-4 col-md-4 col-sm-12">

                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image-box">

                            <figure class="image">

                                <img src="images/gallery/25.jpg" alt="">

                            </figure>

                            <div class="zoom-btn">

                                <a class="lightbox-image zoom-link" href="images/gallery/25.jpg" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>

                            </div>

                            <div class="cap-box">

                                <h6>Tourist Guide</h6>

                                <h3><a href="#"><span>[</span> Parking clerk <span>]</span></a></h3>

                            </div>

                        </div>



                    </div>

                </div>

                <!--Gallery Item-->

                <div class="gallery-block masonry-item all conference celebration industry col-lg-4 col-md-6 col-sm-12">

                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image-box">

                            <figure class="image">

                                <img src="images/gallery/26.jpg" alt="">

                            </figure>

                            <div class="zoom-btn">

                                <a class="lightbox-image zoom-link" href="images/gallery/26.jpg" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>

                            </div>

                            <div class="cap-box">

                                <h6>Tourist Guide</h6>

                                <h3><a href="#"><span>[</span> Affordable parking <span>]</span></a></h3>

                            </div>

                        </div>



                    </div>

                </div>

                <!--Gallery Item-->

                <div class="gallery-block masonry-item all conference celebration tour  col-lg-4 col-md-6 col-sm-12">

                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image-box">

                            <figure class="image">

                                <img src="images/gallery/27.jpg" alt="">

                            </figure>

                            <div class="zoom-btn">

                                <a class="lightbox-image zoom-link" href="images/gallery/27.jpg" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>

                            </div>

                            <div class="cap-box">

                                <h6>Tourist Guide</h6>

                                <h3><a href="#"><span>[</span>  Buckingham palace <span>]</span></a></h3>

                            </div>

                        </div>



                    </div>

                </div>

                <!--Gallery Item-->

                <div class="gallery-block masonry-item all celebration tour  col-lg-4 col-md-6 col-sm-12">

                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image-box">

                            <figure class="image">

                                <img src="images/gallery/28.jpg" alt="">

                            </figure>

                            <div class="zoom-btn">

                                <a class="lightbox-image zoom-link" href="images/gallery/28.jpg" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>

                            </div>

                            <div class="cap-box">

                                <h6>Tourist Guide</h6>

                                <h3><a href="#"><span>[</span>  Buckingham palace <span>]</span></a></h3>

                            </div>

                        </div>



                    </div>

                </div>

            </div>



        </div>

    </div>

</section>
@endsection
