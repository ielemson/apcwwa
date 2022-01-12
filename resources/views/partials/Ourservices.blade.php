@if (count($services)>0)
<section>
    <div class="gap">
        
        <div class="container">
            <div class="sec-title2 text-center">
                <div class="sec-title-inner2">
                    <span>Serving Humanity</span>
                    <h3>Our Services</h3>
                </div>
            </div>
            <div class="serv-wrap text-center remove-ext3">
                <div class="row">
                  @foreach ($services as $service)
                        
                    <div class="col-md-4 col-sm-6 col-lg-4 fadeIn" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="blog-box">
                            <div class="blog-thmb">
                                <a href="blog-detail.html"><img src="{{$service->featured_image}}" alt="{{$service->title}}" class="mw-50" style="max-height:15vw"></a>
                            </div>
                            <div class="blog-info">
                               
                                <h4><a href="blog-detail.html" title="">{{$service->title}}</a></h4>
                                <p>{!!\Illuminate\Support\Str::limit($service->content, 100) !!}</p>
                                <a href="blog-detail.html" title="">Read More</a>
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
    