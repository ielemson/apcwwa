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

                        <div class="card card-profile">
                            <div class="card-image">
                                <a href="#"> <img class="img" src="{{$user->user_photo}}">
                                    <div class="card-caption"> {{$user->name}} </div>
                                </a>
                            </div>
                            <div class="table">
                                <h6 class="category"><b>{{$user->post}}</b></h6>
                                <p class="text">{!! Str::words($user->speech, 15) !!}</p>
                                <div class="read-more"><a href="{{route('desk_more',$user->slug)}}">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach 

            </div>

        </div>

    </div>

</section>