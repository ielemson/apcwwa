@include('partials.header')
<section>

    <div class="swiper-container slideshow">
  
      <div class="swiper-wrapper">
        @foreach ($sliders as $slider)
        <div class="swiper-slide slide">
            <div class="slide-image" style="background-image: url({{$slider->image}})"></div>
            <span class="slide-title">{!!$slider->title1!!}</span>
          </div>  
        @endforeach
     
  
        {{-- <div class="swiper-slide slide">
          <div class="slide-image" style="background-image: url(https://images.unsplash.com/photo-1500375592092-40eb2168fd21?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e07d2457879a4e15577ec75a31023e47&auto=format&fit=crop&w=2134&q=80"></div>
          <span class="slide-title">Meet ocean</span>
        </div>
  
        <div class="swiper-slide slide">
          <div class="slide-image" style="background-image: url(https://images.unsplash.com/photo-1482059470115-0aadd6bf6834?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=267bba9a4e280ec64388fe8fb01e9d1b&auto=format&fit=crop&w=1950&q=80"></div>
          <span class="slide-title">Around the world</span>
        </div> --}}
  
      </div>
  
      <div class="slideshow-pagination"></div>
      <div class="slideshow-navigation">
        <div class="slideshow-navigation-button prev"><span class="fas fa-chevron-left"></span></div>
        <div class="slideshow-navigation-button next"><span class="fas fa-chevron-right"></span></div>
      </div>
    </div>
  
  </section>