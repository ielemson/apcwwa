@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection',['title_1'=>"Event",'title_2'=>"Event","img"=>"/apcwwa/images/banner/news.jpg"])
@endsection

@section('content')
<div class="sidebar-page-container">

    <div class="auto-container">

        <div class="row clearfix">



            <!--Content Side-->

            <div class="content-side col-lg-8 col-md-12 col-sm-12">

                <div class="content-inner">

                    <div class="single-post">

                        <div class="post-details">

                            <div class="main-image-box">

                                <figure class="image"><img src="{{$post->featured_image}}" alt=""></figure>

                            </div>
                            <h2>{{$post->post_title}}</h2>
                    

                            {!!$post->post_body!!}

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

                        <div class="image-layer" style="background-image:url(/apcwwa/images/background/sidebar-bg-image.jpg);"></div>

                    </div>
                    @if (count($categories) > 0)
                    <div class="sidebar-widget cat-widget">

                        <div class="widget-content">

                            <div class="sidebar-title">

                                <h4>Categories</h4>

                            </div>

                            <ul class="cat-links clearfix">

                                @foreach ($categories as $category)
                                <li><a href="{{route('events_catgory',strtolower($category->category_name))}}">{{$category->category_name}}</a></li>
                                    
                                @endforeach
                            </ul>

                        </div>

                    </div>
                    @endif

                       <!--Posts-->
                              
                  <div class="sidebar-widget recent-posts">

                    <div class="widget-inner">

                        <div class="sidebar-title">

                            <h4>Latest Post</h4>

                        </div>


                        @if (count($latest_posts) > 0)
                        <div class="recent-posts-box">

                            @foreach ($latest_posts as $latest_post)
                            <div class="post">

                                <div class="inner">

                                    <figure class="post-thumb"><img src="{{$latest_post->featured_image}}" alt=""><a href="{{$latest_post->featured_image}}" class="overlink"><span class="icon flaticon-zoom-in"></span></a></figure>

                                    <div class="post-date">{{ Carbon\Carbon::createFromTimeString($latest_post->created_at)->format('M d Y') }}</div>

                                    <h5 class="title"><a href="{{route('event',$latest_post->post_slug)}}">{{$latest_post->post_title}}</a></h5>

                                </div>

                            </div>
                            @endforeach
                            
                        </div>
                        @endif
                    </div>

                </div>
                </aside>

               
            </div>
                           
                            
        </div>

    </div>

</div>
@endsection