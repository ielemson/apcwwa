@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection',['title_1'=>"$state->name State Event",'title_2'=>"Events"])
@endsection

@section('content')

<div class="sidebar-page-container">

    <div class="auto-container">

        <div class="row clearfix">



            <!--Content Side-->

            <div class="content-side col-lg-8 col-md-12 col-sm-12">

                <div class="content-inner">

                    <div class="single-post">

                        <div class="post-details text ">

                            <div class="main-image-box">

                                <figure class="image"><img src="{{$state_event->featured_image}}" alt=""></figure>

                            </div>

                                
                            <div class="upper-info">

                                <h2>{{$state_event->event_title}}</h2>

                                <div class="cat-info">

                                <h4>   <span class="fa fa-calendar"></span>&ensp;<small>{{ Carbon\Carbon::createFromTimeString($state_event->created_at)->format('M d Y') }}</small></h4>

                                </div>

                            </div>

                            <p>{!!$state_event->event_body!!}</p>
                    

                        </div>



                        <div class="share-post">

                            <strong>Share this post with your friends</strong>

                            <ul class="links clearfix">

                                <li class="facebook"><a href="#"><span class="icon fab fa-facebook-f"></span><span class="txt">Facebook</span></a></li>

                                <li class="twitter"><a href="#"><span class="icon fab fa-twitter"></span><span class="txt">Twiter</span></a></li>

                                <li class="linkedin"><a href="#"><span class="icon fab fa-linkedin-in"></span><span class="txt">Linkedin</span></a></li>

                                <li class="pinterest"><a href="#"><span class="icon fab fa-pinterest-p"></span><span class="txt">Pinterest</span></a></li>

                            </ul>

                        </div>



                    </div>

                </div>

            </div>



            <!--Sidebar Side-->

            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">

                <aside class="sidebar">

                    <div class="bg-layer">

                        <div class="image-layer" style="background-image:url({{asset('apcwwa/images/background/sidebar-bg-image.jpg')}});"></div>

                    </div>



                   
                    <!--Posts-->

                    <div class="sidebar-widget recent-posts">

                        <div class="widget-inner">

                            <div class="sidebar-title">

                                <h4>Popular Post For {{$state->name}}</h4>

                            </div>


                            @if (count($state_events)>0)
                            @foreach ($state_events as $event)
                            <div class="recent-posts-box">

                                <div class="post">

                                    <div class="inner">

                                        <figure class="post-thumb"><img src="{{$event->featured_image}}" alt="" style="width: 100%; max-height:25vh"><a href="{{$event->featured_image}}" class="overlink"><span class="icon flaticon-zoom-in"></span></a></figure>

                                        <div class="post-date">{{ Carbon\Carbon::createFromTimeString($event->created_at)->format('M d Y') }}</div>

                                        <h5 class="title"><a href="{{route('event.state',[strtolower($state->name),$event->event_slug])}}">{{{$event->event_title}}}</a></h5>

                                    </div>

                                </div>
                                @endforeach
                                    @endif

                            </div>

                        </div>

                    </div>


                </aside>

            </div>



        </div>

    </div>

</div>
@endsection