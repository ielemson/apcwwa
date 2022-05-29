@extends('layouts.mainLayout')

@section('banner')
@include('apcwwa.pageSection', [
    'title_1' => "Events in $state->name State",
    'title_2' => "Events",
    'img' => '/apcwwa/images/banner/flag.jpg',
])
@endsection

@section('content')
    <!--Events Section-->

    <div class="sidebar-page-container">

        <div class="auto-container">

            <div class="row clearfix">
                <!--Content Side-->

                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="sec-title with-separator text-capitalize">

                        <h2>Events in {{$state->name}} State </h2>
            
                        <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>
            
                        <div class="lower-text">
                            This is the event page for {{$state->name}} State. Here, we publish events and news about the State.
                        </div>
            
                    </div>
                    <div class="content-inner">
                        @if (count($events) > 0)
                        <div class="blog-posts">
                            @foreach ($events as $event)
                            <!--News Block-->
                            <div class="news-block-four">

                                <div class="inner-box">

                                    <div class="image-box">

                                        <figure class="image"><img src="{{ $event->featured_image }}" alt="img" style="max-height:55vh;width:100%"></figure>

                                        <div class="date"><span>{{ Carbon\Carbon::createFromTimeString($event->created_at)->format('M d Y') }}</span></div>

                                        <div class="hover-box">

                                            <div class="more-link"><a href="{{ route('event.state', [strtolower($state->name), $event->post_slug]) }}">Read More</a></div>

                                        </div>

                                    </div>

                                    <div class="lower-box">

                                        <div class="upper-info">

                                            <h2><a href="{{ route('event.state', [strtolower($state->name), $event->post_slug]) }}">{{ $event->post_title }}</a></h2>

                                            <div class="cat-info">

                                                <a href="#"><span class="fa fa-folder"></span>Community Life</a> &ensp;/&ensp; <a href="#"><span class="fa fa-comment"></span>0 Comments</a>

                                            </div>

                                        </div>

                                        <div class="text">
                                            {!!\Illuminate\Support\Str::limit($event->post_body, 100, $end='...') !!}
                                         </div>

                                        <div class="meta-info clearfix">

                                            <div class="author-info clearfix">

                                                <div class="author-icon"><span class="flaticon-user-3"></span></div>

                                                <div class="author-title">By Admin</div>

                                            </div>

                                            <div class="share-it">

                                                <a class="share-btn" href="#"><span class="icon flaticon-share"></span></a>

                                                <div class="share-list">

                                                    <ul>

                                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>

                                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>

                                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            @endforeach
                            
                        </div>

                        <!--Pagination-->
                        <div class="pagination-box text-center">

                            {!! $events->links() !!}

                        </div>

                        @else
                        <div class="container alert alert-primary container col-md-12 col-sm-12 col-lg-12 text-center py-2"
                            role="alert">
                            <h4 class="alert-heading">Heads Up!</h4>
                            <p>No Event For {{ $state->name }} is Available</p>
                        </div>
                    @endif
                    </div>

                </div>

                <!--Sidebar Side-->

                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">

                    <aside class="sidebar">

                        <div class="bg-layer">

                            <div class="image-layer" style="background-image:url(/apcwwa/images/background/sidebar-bg-image.jpg);"></div>

                        </div>



                     <div class="sidebar-widget search-box">

                        <a href="{{route('state.lga',strtolower($state->name))}}">
                            <button   class="theme-btn btn-style-one btn-block"><span class="btn-title">View LGA in {{$state->name}}</span></button>    

                        </a>

                    </div>

{{-- 

                        <div class="sidebar-widget cat-widget">

                            <div class="widget-content">

                                <div class="sidebar-title">

                                    <h4>Categories</h4>

                                </div>

                                <ul class="cat-links clearfix">

                                    <li><a href="{{ route('event.state', [strtolower($state->name), $event->post_slug]) }}">Community Life</a></li>

                                    <li class="current"><a href="{{ route('event.state', [strtolower($state->name), $event->post_slug]) }}">Opportunities</a></li>

                                    <li><a href="{{ route('event.state', [strtolower($state->name), $event->post_slug]) }}">Toursit Guide</a></li>

                                    <li><a href="{{ route('event.state', [strtolower($state->name), $event->post_slug]) }}">Regeneration</a></li>

                                    <li><a href="{{ route('event.state', [strtolower($state->name), $event->post_slug]) }}">Public Information</a></li>

                                </ul>

                            </div>

                        </div> --}}

                        <div class="sidebar-widget popular-tags">

                            <div class="widget-inner">
    
                                <div class="sidebar-title">
    
                                    <h4>More States</h4>
    
                                </div>
    
                                <ul class="tags-list clearfix">
                                    @foreach ($states as $other_state)
    
                                    @php
                                        if ($other_state->name == $state->name) {
                                           $style = "background-color:#00aa55; color:#ffff";
                                        } else {
                                            $style = "";
                                        }
                                        
                                    @endphp
    
                                        <li><a  style="<?=$style;?>"
                                            href="{{ route('events.state', strtolower($other_state->name)) }}">{{ $other_state->name }}</a>
                                        </li>
                                    @endforeach
    
                                </ul>
    
                            </div>
    
                        </div>

                    </aside>

                </div>

            </div>

        </div>

    </div>

@endsection
