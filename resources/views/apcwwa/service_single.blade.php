@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection',['title_1'=>"$service->title",'title_2'=>"$service->title"])
@endsection

@section('content')
<div class="sidebar-page-container">

    <div class="auto-container">

        <div class="row clearfix">

            <!--Content Side-->

            <div class="content-side col-lg-8 col-md-12 col-sm-12 mx-auto">

                <div class="content-inner">

                    <div class="single-post">

                        <div class="post-details">

                            <div class="main-image-box">

                                <figure class="image"><img src="{{$service->featured_image}}" alt="desk" style="width: 100%; max-height:80vh"></figure>
                                <h2>{{$service->title}}</h2>
                                {{-- <h2></h2> --}}
                            </div>

                            {!!$service->content!!}
                        </div>

                    </div>

                </div>

            </div>

            <div class="share-post mx-auto">

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



@endsection