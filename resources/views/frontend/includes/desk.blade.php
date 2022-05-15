@if (count($desk) > 0)
<section>
    <div class="gap">
        <div class="lft-shp shp-lyr"></div>
        <div class="container">
            <div class="plrs-wrap text-center remove-ext5">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            @foreach ($desk as $key => $user)
                            <li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>   
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">		
                            @foreach ($desk as $key => $user)
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <div class="img-box thumbnail rounded "><img src="{{$user->user_photo}}"></div>
                                
                                <p class="testimonial">
                                    <div class="hstry-desc">
                                        <span>
                                            <h4>From the desk of the {{$user->post}}</h4>
                                        </span>
                                        <h5>{{$user->name}}</h5>
                                     
                                    </div>
                                {{-- <p class="overview"><b>{{$user->name}}</b>{{$user->post}}</p> --}}
                                  {!!$user->speech!!}
                                </p>
                               
                             
                            </div>
                            @endforeach   
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    </div>
                    </div>
                </div>
            </div><!-- Pillers Wrap -->
        </div>
    </div>
</section>
@endif

@push('frontend-styles')
<style>

.carousel {
	width: 90%;
	margin: 0 auto;
	padding-bottom: 50px;
}
.carousel .carousel-item {
	color: #999;
	font-size: 14px;
	text-align: center;
	overflow: hidden;
	min-height: 340px;
}
.carousel .carousel-item a {
	color: #eb7245;
}
.carousel .img-box {
	width: 200px;
	height: 200px;
	margin: 0 auto;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {	
	/*padding: 30px 0 10px;*/
}
.carousel .overview {	
	text-align: center;
	padding-bottom: 5px;
}
.carousel .overview b {
	color: #333;
	font-size: 15px;
	text-transform: uppercase;
	display: block;	
	padding-bottom: 5px;
}
.carousel .star-rating i {
	font-size: 18px;
	color: #ffdc12;
}
.carousel-control-prev, .carousel-control-next {
	width: 30px;
	height: 30px;
	border-radius: 50%;
	background: #999;
	text-shadow: none;
	top: 4px;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 20px;
	margin-right: 2px;
}
.carousel-control-prev {
	left: auto;
	right: 40px;
}
.carousel-control-next i {
	margin-right: -2px;
}
.carousel .carousel-indicators {
	bottom: 15px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 11px;
	height: 11px;
	margin: 1px 5px;
	border-radius: 50%;
}
.carousel-indicators li {	
	background: #e2e2e2;
	border: none;
}
.carousel-indicators li.active {		
	background: #888;		
}
    </style>
@endpush