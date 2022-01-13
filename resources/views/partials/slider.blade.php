<section>

    <div class="swiper-container slideshow">
  
      <div class="swiper-wrapper">
        @foreach ($sliders as $slider)
        <div class="swiper-slide slide">
            <div class="slide-image" style="background-image: url({{$slider->image}})"></div>
            <span class="slide-title">
                {!!$slider->title1!!}
                <br/>
                {!!$slider->title2!!}
            </span>
            
          </div>  
        @endforeach
    
  
      </div>
  
      <div class="slideshow-pagination"></div>
      <div class="slideshow-navigation">
        <div class="slideshow-navigation-button prev"><span class="fas fa-chevron-left"></span></div>
        <div class="slideshow-navigation-button next"><span class="fas fa-chevron-right"></span></div>
      </div>
    </div>
  
  </section>