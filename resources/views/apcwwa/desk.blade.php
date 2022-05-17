<section class="news-section">

    <div class="auto-container">

        <div class="sec-title with-separator">

            <h2>From Our Desk</h2>

            <div class="separator"><span class="cir c-1"></span><span  class="cir c-2"></span><span class="cir c-3"></span></div>

        </div>

        <div class="carousel-box">

            <div class="news-carousel owl-theme owl-carousel">

                <!--News Block-->

               
                @foreach ($desk as $key => $user)
               

                <div class="news-block">

                    <div class="inner-box">

                        <div class="image-box">

                            <figure class="image"><img src="{{$user->user_photo}}" alt="desk" style="max-height: 35vh">
                            </figure>

                            <div class="hover-box">

                                <div class="link zoom-link">

                                    <a href="{{$user->user_photo}}" class="lightbox-image"><span
                                            class="icon flaticon-zoom-in"></span></a>

                                </div>

                                <div class="link single-link">

                                    <a href="{{route('desk_more',$user->slug)}}"><span class="icon flaticon-link-4"></span></a>

                                </div>

                            </div>

                        </div>

                        <div class="lower-box">

                            <div class="upper-info">

                                <h4><a href="{{route('desk_more',$user->slug)}}">{{$user->name}}</a></h4>

                                <div class="cat-info"><a href="{{route('desk_more',$user->slug)}}"><span
                                            class="fa fa-folder"></span>From the desk of the {{$user->post}}</a></div>

                            </div>

                         

                        </div>

                    </div>

                </div>
                @endforeach 

            </div>

        </div>

    </div>

</section>