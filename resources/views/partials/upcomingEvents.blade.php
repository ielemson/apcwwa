<section>
    <div class="gap">
        <div class="container">
            <div class="evnt-pry-wrap">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-title">
                            <div class="sec-title-inner">
                                <h3><span>Upcoming</span> Events</h3>
                            </div>
                            <p>APC Ward To Ward Multiple Events</p>
                        </div>
                        <div class="evnt-wrap remove-ext5">
                            <div class="row mrg20">

                                @if (count($upcoming_events)>0)
                                    @foreach ($upcoming_events as $event)
                                    <div class="col-md-4 col-sm-12 col-lg-4">
                                        <div class="evnt-box">
                                            <div class="evnt-thmb">
                                                <a href="{{route('event',$event->post_slug)}}" title="{{route('event',$event->post_slug)}}"><img src="{{$event->featured_image}}" alt="evnt-img1.jpg" style="max-height: 30vh;width:100%"></a>
                                            </div>
                                            <div class="evnt-info">
                                                <h4>{{$event->post_title}}</h4>
                                                <ul class="pst-mta">
                                                    <li class="thm-clr">{{ Carbon\Carbon::createFromTimeString($event->created_at)->format('M d Y') }}</li>
                                                    {{-- <li class="thm-clr">12:00 AM to 02:00 PM</li> --}}
                                                </ul>
                                                <p>{!!\Illuminate\Support\Str::limit($event->post_body, 50, $end='...') !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                    
                                @endif
                             

                            </div>
                        </div><!-- Events Wrap -->
                    </div>
                   
                </div>
            </div><!-- Events & Prayer Wrap -->
        </div>
    </div>
</section>