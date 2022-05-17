<!-- Banner Section -->
<section class="banner-section banner-one">

  <div class="banner-carousel owl-theme owl-carousel">
  
      <!-- Slide Item -->
  
     @foreach ($sliders as $slider)
      
        <div class="slide-item">
  
            <div class="image-layer" style="background-image: url({{$slider->image}});"></div>
    
            <div class="auto-container">
    
                <div class="content-box">
    
                    <div class="content clearfix">
    
                        <div class="inner">
    
                            <h1>{!!$slider->title2!!}</h1>
    
                            <div class="text">{!!$slider->title1!!}</div>
    
                            {{-- <div class="links-box clearfix">
    
                                <a href="about.html" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a>
    
                                <a href="#" class="theme-btn btn-style-two lightbox-image"><span class="btn-title"><span class="icon flaticon-media-play-symbol"></span> City Video</span></a>
    
                            </div> --}}
    
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
            {{-- <div class="next-slide">
    
                <div class="inner">
    
                    <div class="count">02</div>
    
                    <div class="text">Save time , pay your tax online</div>
    
                    <div class="arrow"><span class="flaticon-next"></span></div>
    
                </div>
    
            </div> --}}
    
        </div>
      @endforeach
  
  
  </div>
  
  </section>