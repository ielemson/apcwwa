@include('partials.header')

<section>
    <div class="top-content">
        <!-- Carousel -->
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
    
            <ol class="carousel-indicators">
                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example" data-slide-to="1"></li>
                <li data-target="#carousel-example" data-slide-to="2"></li>
                <li data-target="#carousel-example" data-slide-to="3"></li>
            </ol>
    
            <div class="carousel-inner">

                @foreach ($sliders as $key => $slider)

                <div class="carousel-item {{$key == 0 ? 'active': '' }}">
                    <img src="{{$slider->image}}" class="d-block w-100">
                    <div class="carousel-caption">
                        <h1>Carousel Fullscreen Template</h1>
                        <div class="carousel-caption-description">
                            <p>This is a free Fullscreen Carousel template made with the Bootstrap 4 framework.</p>
                        </div>
                    </div>
                </div>
                @endforeach
             
            </div>
    
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End carousel -->
    </div>
</section>

