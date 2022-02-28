@if (count($services)>0)
<section>
    <div class="gap">
        
        <div class="container">
            {{-- <div class="sec-title2 text-center">
                <div class="sec-title-inner2">
                    <span>Serving Humanity</span>
                    <h3>Our Services</h3>
                </div>
            </div> --}}

            <div class="sec-title">
                <div class="sec-title-inner" >
                    <h3><span>Our Flagship </span> Programs</h3>
                </div>
                <p>Serving Humanity</p>
            </div>

            <div class="serv-wrap text-center remove-ext3">
                <div class="row">
                  @foreach ($services as $service)
                        
                    <div class="col-md-4 col-sm-6 col-lg-4 fadeIn mt-4" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="blog-box">
                            <div class="blog-thmb">
                                <a href="{{route('our.service',$service->id)}}"><img src="{{$service->featured_image}}" alt="{{$service->title}}" class="mw-50" style="min-height:15vw ! important;"></a>
                            </div>
                            <div class="blog-info">
                               
                                <h5><a href="{{route('our.service',$service->id)}}" title="">{{$service->title}}</a></h5>
                                <!--<p>{!! Str::words($service->content, 30) !!}</p>-->
                                

                                <a href="{{route('our.service',$service->id)}}" title="">Read More</a>
                            </div>
                        </div>
                    </div>
                  @endforeach

                </div>
            </div><!-- Serv Wrap -->
            {{-- <div class="view-all text-center">
                <a class="thm-btn brd-rd5" href="#" title="">
                    {!!$services->links()!!}
                </a>
            </div><!-- View All --> --}}
            {!!$services->links()!!}
        </div>
    </div>
</section>
   
@endif
    