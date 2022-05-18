@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection',['title_1'=>"Events",'title_2'=>"Event","img"=>"/apcwwa/images/banner/news.jpg"])
@endsection

@section('content')
<div class="sidebar-page-container">

    <div class="auto-container">

        <div class="row clearfix">



            <!--Content Side-->

            <div class="content-side col-lg-8 col-md-12 col-sm-12">

                <div class="content-inner">

                    <div class="blog-posts">
                        @if (count($posts) > 0)
                        <div class="row clearfix">
                        
                                @foreach ($posts as $post)
                                  <!--News Block-->
                            <div class="news-block-five col-md-6 col-sm-12">

                                <div class="inner-box">

                                    <div class="image-box">

                                        <figure class="image"><img src="{{$post->featured_image}}" alt=""></figure>

                                        <div class="date"><span>{{ Carbon\Carbon::createFromTimeString($post->created_at)->format('M d Y') }}</span></div>

                                        <div class="hover-box">

                                            <div class="more-link"><a href="{{route('event',$post->post_slug)}}">Read More</a></div>

                                        </div>

                                    </div>

                                    <div class="lower-box">

                                        <div class="upper-info">

                                            <h4><a href="{{route('event',$post->post_slug)}}">{{$post->post_title}}</a></h4>

                                            <div class="cat-info">

                                                <a href="#"><span class="fa fa-folder"></span>{{$post->category->category_name}}</a>

                                            </div>

                                        </div>



                                        <div class="meta-info clearfix">

                                            <div class="author-info clearfix">

                                                <div class="author-icon"><span class="flaticon-user-3"></span></div>

                                                <div class="author-title">Admin</div>

                                            </div>

                                            {{-- <div class="comments-info">

                                                <a href="#"><span class="fa fa-comment"></span> 03</a>

                                            </div> --}}

                                        </div>

                                    </div>

                                </div>

                            </div>  
                                @endforeach

                                
                    <!--Pagination-->


                           

                        </div>

                        <div class="pagination-box text-center">

                            {!! $posts->links() !!}
    
                        </div>

                        @else
                        <div class="alert alert-primary col-md-12 col-sm-12 col-lg-12" role="alert">
                            <h4 class="alert-heading">Heads Up!</h4>
                            <p>No Event Available</p>
                        </div>
                        @endif
                        
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

                                <h4>Popular Event</h4>

                            </div>


                            @if (count($latest_posts) > 0)
                            <div class="recent-posts-box">
    
                                @foreach ($latest_posts as $latest_post)
                                <div class="post">
    
                                    <div class="inner">
    
                                        <figure class="post-thumb"><img src="{{$latest_post->featured_image}}" alt=""><a href="#" class="overlink"><span class="icon flaticon-zoom-in"></span></a></figure>
    
                                        <div class="post-date">{{ Carbon\Carbon::createFromTimeString($latest_post->created_at)->format('M d Y') }}</div>
    
                                        <h5 class="title"><a href="#">{{$latest_post->post_title}}</a></h5>
    
                                    </div>
    
                                </div>
                                @endforeach
                                
                            </div>
                            @endif <div class="recent-posts-box">

                              

                            </div>

                        </div>

                    </div>

                </aside>

            </div>

        </div>

    </div>

</div>

@endsection