@if (count($diaspora_network_chapter)>0)
        <section class="news-section">

            <div class="auto-container">

                <div class="sec-title with-separator">

                    <h2>
                        Diaspora Network Chapter DNC</h2>

                    <div class="separator"><span class="cir c-1"></span><span
                            class="cir c-2"></span><span class="cir c-3"></span></div>

                </div>



                <div class="carousel-box">

                    <div class="news-carousel owl-theme owl-carousel">

                        <!--News Block-->

                        @foreach ($diaspora_network_chapter as $member)
      
                        <div class="news-block">

                            <div class="inner-box">

                                <div class="image-box">

                                    <figure class="image"><img src="{{$member->profile_photo}}" alt="">
                                    </figure>

                                    <div class="hover-box">

                                        <div class="link zoom-link">

                                            <a href="{{$member->profile_photo}}" class="lightbox-image"><span
                                                    class="icon flaticon-zoom-in"></span></a>

                                        </div>

                                        <div class="link single-link">

                                            <a href="blog-single.html"><span class="icon flaticon-link-4"></span></a>

                                        </div>

                                    </div>

                                </div>

                                <div class="lower-box">

                                    <div class="upper-info">

                                        <h4><a href="blog-single.html">{{$member->name}}</a></h4>

                                        {{-- <div class="cat-info"><a href="#"><span
                                                    class="fa fa-folder"></span>{{$member->post}}</a>
                                        </div> --}}

                                    </div>

                                   

                                </div>

                            </div>

                        </div>
      
                        @endforeach
                    </div>

                </div>

              
            </div>

        </section>
    
     @endif
