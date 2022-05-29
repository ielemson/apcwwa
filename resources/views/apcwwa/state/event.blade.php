@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection',['title_1'=>"$state->name State Event",'title_2'=>"Events", 'img' => '/apcwwa/images/banner/flag.jpg',])
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

                                <figure class="image"><img src="{{$state_event->featured_image}}" alt="img" style="max-height: 
                                    60vh"></figure>

                            </div>

                                
                            <div class="upper-info">

                                <h2>{{$state_event->post_title}}</h2>

                                <div class="cat-info">

                                <h4>   <span class="fa fa-calendar"></span>&ensp;<small>{{ Carbon\Carbon::createFromTimeString($state_event->created_at)->format('M d Y') }}</small></h4>

                                </div>

                            </div>

                            <p>{!!$state_event->post_body!!}</p>
                    

                        </div>
                   
                        @if ($state_event->postimages)
                              <div class="auto-container">
                    
                                <!--Mixit Galery-->
                                <div class="sec-title with-separator">

                                    <h2>Gallery</h2>
                        
                                    <div class="separator"><span class="cir c-1"></span><span  class="cir c-2"></span><span class="cir c-3"></span></div>
                        
                                </div>
                                <div class="mixit-gallery filter-gallery">

                         <div class="filter-gallery-one row clearfix">
                           @foreach ($state_event->postimages as $postimg)
                            <div class="gallery-block all   col-lg-4 col-md-6 col-sm-12">
                
                                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
    
                                    <div class="image-box">
    
                                        <figure class="image">
    
                                            <img src="/{{$postimg->file_path}}" alt="">
    
                                        </figure>
    
                                        <div class="zoom-btn">
    
                                            <a class="lightbox-image zoom-link" href="/{{$postimg->file_path}}" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>
    
                                        </div>
                                           </div>
      
                                </div>
    
                            </div>
                            @endforeach
                        </div>
                
                                </div>
                
                            </div>
                              @endif
                                    

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


                            @if (count($events)>0)
                            @foreach ($events as $event)
                            <div class="recent-posts-box">

                                <div class="post">

                                    <div class="inner">

                                        <figure class="post-thumb"><img src="{{$event->featured_image}}" alt="" style="width: 100%; max-height:25vh"><a href="{{$event->featured_image}}" class="overlink"><span class="icon flaticon-zoom-in"></span></a></figure>

                                        <div class="post-date">{{ Carbon\Carbon::createFromTimeString($event->created_at)->format('M d Y') }}</div>

                                        <h5 class="title"><a href="{{route('event.state',[strtolower($state->name),$event->post_slug])}}">{{{$event->post_title}}}</a></h5>

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