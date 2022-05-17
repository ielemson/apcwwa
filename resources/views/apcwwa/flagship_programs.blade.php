
@if (count($services) > 0)
      
<section class="team-section">

    <div class="auto-container">

        <div class="sec-title with-separator centered">

            <h2>Our Flagship Programs</h2>

            <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

            <div class="lower-text">
                Serving Humanity
            </div>

        </div>

        <div class="carousel-box">

            <div class="news-carousel owl-theme owl-carousel">

                <!--News Block-->
                @foreach ($services as $service)
{{--                         
                <div class="col-md-4 col-sm-6 col-lg-4 fadeIn mt-4" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="blog-box">
                        <div class="blog-thmb">
                            <a href="{{route('our.service',$service->id)}}"><img src="" alt="{{$service->title}}" class="mw-50" style="min-height:15vw ! important;"></a>
                        </div>
                        <div class="blog-info">
                           
                            <h5><a href="{{route('our.service',$service->id)}}" title="">{{$service->title}}</a></h5>
                            <!--<p>{!! Str::words($service->content, 30) !!}</p>-->
                            
                
                            <a href="{{route('our.service',$service->id)}}" title="">Read More</a>
                        </div>
                    </div>
                </div> --}}

                <div class="news-block">

                    <div class="inner-box">

                        <div class="image-box">

                            <figure class="image"><img src="{{$service->featured_image}}" alt="" style="min-height: 35vh"></figure>

                            <div class="hover-box">

                                <div class="link zoom-link">

                                    <a href="{{$service->featured_image}}" class="lightbox-image"><span class="icon flaticon-zoom-in"></span></a>

                                </div>

                                <div class="link single-link">

                                    <a href="{{route('our.service',$service->id)}}"><span class="icon flaticon-link-4"></span></a>

                                </div>

                            </div>

                        </div>

                        <div class="lower-box" style="background-color: #ffffff; color:#222222">

                            <div class="upper-info">

                                <h4><a href="{{route('our.service',$service->id)}}">{{$service->title}}</a></h4>

                                <p ><a href="{{route('our.service',$service->id)}}" style="color:#222222 !important">{!! Str::words($service->content, 15) !!}</a></p>

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