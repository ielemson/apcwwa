<section class="news-section">

    <div class="auto-container">

        <div class="sec-title with-separator">

            <h2>From Our Desk</h2>

            <div class="separator"><span class="cir c-1"></span><span  class="cir c-2"></span><span class="cir c-3"></span></div>

        </div>

        <div class="blog-slider">
            <div class="blog-slider__wrp swiper-wrapper">
              
                @foreach ($desk as $key => $user) 
              <div class="blog-slider__item swiper-slide">
                <div class="blog-slider__img">
                  <img src="{{$user->user_photo}}" alt="">
                </div>
                <div class="blog-slider__content">
                  <span class="blog-slider__code text-uppercase">From the desk of the {{$user->post}}</span>
                  <div class="blog-slider__title">{{$user->name}}</div>
                  <div class="blog-slider__text p-2">{!! Str::words($user->speech, 50) !!}</div>
                  <a href="{{route('desk_more',$user->slug)}}" class="blog-slider__button">READ MORE</a>
                </div>
              </div>
              @endforeach
            </div>
            <div class="blog-slider__pagination"></div>
          </div>

    </div>

</section>

