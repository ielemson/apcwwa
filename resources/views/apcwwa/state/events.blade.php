@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.slider')
@endsection

@section('content')
    <!--Events Section-->

    <div class="sidebar-page-container">

        <div class="auto-container">
            <div class="sec-title with-separator ">

                <h2>Welcome to {{$state->name}} State</h2>

                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

                <div class="lower-text">
                    This is the event page for Anambra. Here, we publish events and news about the state.
                </div>

            </div>
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                  
                    <div class="content-inner">

                        <div class="blog-posts">

                            <div class="row clearfix">

                                <!--News Block-->
                                @if (count($state_events) > 0)
                                    @foreach ($state_events as $state_event)
                                        <div class="news-block-five col-md-6 col-sm-12">

                                            <div class="inner-box">

                                                <div class="image-box">

                                                    <figure class="image img-fluid img-thumbnail">
                                                        <img src="{{ $state_event->featured_image }}" alt="img" style="height:35vh; width: 100%;"></figure>

                                                    <div class="date"><span>{{ Carbon\Carbon::createFromTimeString($state_event->created_at)->format('M d Y') }}</span></div>

                                                    <div class="hover-box">

                                                        <div class="more-link"><a
                                                                href="{{ route('event.state', [strtolower($state->name), $state_event->event_slug]) }}">Read
                                                                More</a></div>

                                                    </div>

                                                </div>

                                                <div class="lower-box">

                                                    <div class="upper-info">

                                                        <h4><a
                                                                href="{{ route('event.state', [strtolower($state->name), $state_event->event_slug]) }}">{{ $state_event->event_title }}</a>
                                                        </h4>

                                                        <div class="cat-info">

                                                            <a
                                                                href="{{ route('event.state', [strtolower($state->name), $state_event->event_slug]) }}">

                                                            </a>
                                                            {{-- <p class="text">{!!\Illuminate\Support\Str::limit($state_event->event_body, 10, $end='...') !!}</p> --}}
                                                        </div>

                                                    </div>



                                                    {{-- <div class="meta-info clearfix">

                                                    <div class="author-info clearfix">

                                                        <div class="author-icon"><span class="flaticon-user-3"></span></div>

                                                        <div class="author-title">By Admin</div>

                                                    </div>

                                                    

                                                </div> --}}

                                                </div>

                                            </div>

                                        </div>
                                    @endforeach
                                    <div class="pagination-box text-center">

                                        {!! $state_events->links() !!}

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

                        <!--Pagination-->

                    </div>
                </div>


                <!--Sidebar Side-->

                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">

                    <aside class="sidebar">

                        <div class="bg-layer">

                            <div class="image-layer"
                                style="background-image:url({{asset('/apcwwa/images/background/sidebar-bg-image.jpg')}});" ></div>
                        </div>


                        <div class="sidebar-widget search-box">

                            <a href="{{route('state.lga',strtolower($state->name))}}">
                                <button   class="theme-btn btn-style-one btn-block"><span class="btn-title">View LGA in {{$state->name}}</span></button>    

                            </a>

                        </div>

                        <div class="sidebar-widget popular-tags">

                            <div class="widget-inner">

                                <div class="sidebar-title">

                                    <h4>More States</h4>

                                </div>

                                <ul class="tags-list clearfix">
                                    @foreach ($states as $state)
                                        <li><a
                                                href="{{ route('events.state', strtolower($state->name)) }}">{{ $state->name }}</a>
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
