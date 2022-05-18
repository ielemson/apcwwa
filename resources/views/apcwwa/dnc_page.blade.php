@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection',['title_1'=>"Diaspora Network Cordinate",'title_2'=>"DNC",'img'=>"/apcwwa/images/banner/dnc_banner.jpg"])
@endsection

@section('content')

<section class="welcome-section-two alternate">

    <div class="lower-row">

        <div class="auto-container">

            <div class="row clearfix">

                <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class="inner">

                        <div class="sec-title with-separator">

                            <h2>About DNC</h2>

                            <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

                        </div>

                        <div class="text">
                            The opposition is greatly exploiting the huge population of Nigerian communities in the diaspora in expanding the frontiers of her malicious propaganda machinery against the government and the ruling party, therefore achieving the goal of APC Ward to Ward Ambassadors which is Bridging Communication Gap between Nigerians and their ruling Party/government of Choice requires a robust networking and fit-for-purpose coordination of Nigerians living in diaspora. We operate a Diaspora Network Chapter DNC which consists of smart organization of indigenous Nigerians across six continents of the world.
                        </div>

                    </div>

                </div>


                <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class="inner">

                        <div class="sec-title with-separator">

                            <h2>Purpose</h2>

                            <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

                        </div>

                        <div class="text">
                            The purpose of APC Ward to Ward Ambassadors – Diaspora Network Chapter is to enlist Men and Women of Nigeria origin residing in different parts of the world to support the noble task of progressive continuity by propagating the modest efforts and unequalled achievements of the President Mohammadu Buhari led APC Federal Government and bridging all communication gap between Nigerians in diaspora and their government/party of choice.
                        </div>

                    </div>

                </div>


    <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="inner">

            <div class="sec-title with-separator">

                <h2>Membership</h2>

                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

            </div>

            <div class="text">
                Membership of APC Ward-to-Ward Ambassadors Diaspora Network is open to every Nigerian above the age of 18 years living in countries of any of the Six (6) major continents of the world namely: ASIA, AFRICA, NORTH AMERICA, EUROPE, SOUTH AMERICA AND AUSTRALIA, who subscribes to the stated purpose of the organization.
            </div>

        </div>

    </div>

    <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="inner">

            <div class="sec-title with-separator">

                <h2>Social Media Handle</h2>

                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

            </div>
            <div class="share-post">


                <ul class="links clearfix">

                    <li class="facebook"><a href="https://www.facebook.com/groups/643248286704615" target="_blank"><span class="icon fab fa-facebook-f"></span><span class="txt">Facebook</span></a></li>

                    <li class="twitter"><a href="https://twitter.com/ApcdiasporaEx" target="_blank"><span class="icon fab fa-twitter"></span><span class="txt">Twiter</span></a></li>

                    <li class="linkedin"><a href="https://www.youtube.com/channel/UC3WY8-PX-pKtVFbUZl1v6zA" target="_blank"><span class="icon fab fa-linkedin-in"></span><span class="txt">Linkedin</span></a></li>

                    <li class="pinterest"><a href="mailto:apcdiasporaex@gmail.com" target="_blank"><span class="icon fa fa-envelope"></span><span class="txt">Email</span></a></li>

                </ul>

            </div>

        </div>

    </div>

    <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="inner">

            <div class="sec-title with-separator">

                <h2>DNC Committee</h2>

                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

            </div>

            <div class="row">

                @if (count($dncs) > 0)
                    @foreach ($dncs as $dnc)
                    <div class="news-block">

                        <div class="inner-box">

                            <div class="image-box">

                                <figure class="image"><img src="{{ $dnc->user->profile_photo }}" alt="img" style="max-height:30vh"></figure>

                                <div class="hover-box">

                                    <div class="link zoom-link">

                                        <a href="{{ $dnc->user->profile_photo }}" class="lightbox-image"><span class="icon flaticon-zoom-in"></span></a>

                                    </div>

                                    <div class="link single-link">

                                        <a href="#"><span class="icon flaticon-link-4"></span></a>

                                    </div>

                                </div>

                            </div>

                            <div class="lower-box">

                                <div class="upper-info">

                                    <h4><a href="#">{{ $dnc->user->name }}</a></h4>

                                    <div class="cat-info"><a href="#"><span class="fa fa-user"></span>{{ $dnc->post }}</a></div>

                                </div>
                              

                            </div>

                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="alert alert-primary col-md-12 col-sm-12 col-lg-12" role="alert">
                        <h4 class="alert-heading">Heads Up!</h4>
                        <p>No DNC Memeber Available</p>
                    </div>
                @endif
            </div>

        </div>

    </div>


    <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="inner">

            <div class="sec-title with-separator">

                <h2>DNC Events</h2>

                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

            </div>

            @if (count($posts) > 0)
            @foreach ($posts as $post)
         

                <div class="col-md-4 col-sm-6 col-lg-4 fadeIn" data-wow-duration=".8s"
                    data-wow-delay=".2s">
                    <div class="blog-box">
                        <div class="blog-thmb">
                            <a href="{{ route('event', $post->post_slug) }}" title=""><img
                                    src="{{ $post->featured_image }}"
                                    alt="{{ $post->post_title }}"></a>
                        </div>
                        <div class="blog-info">
                            <ul class="pst-mta2">
                                <li><a href="#"
                                        title="">{{ $post->category->category_name }}</a></li>
                            </ul>
                            <h4><a href="{{ route('event', $post->post_slug) }}"
                                    title="">{{ $post->post_title }}</a></h4>
                            <p>
                                {!! Str::words($post->post_body, 25) !!}
                            </p>
                            <a href="{{ route('event', $post->post_slug) }}" title="">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="pagination-wrap text-center mb-2">
                <ul class="pagination">
                    {!! $posts->links() !!}
                </ul>
            </div>
        @else
            <div class="alert alert-primary col-md-12 col-sm-12 col-lg-12" role="alert">
                <h4 class="alert-heading">Heads Up!</h4>
                <p>No Event Available</p>
            </div>
        @endif

        </div>

    </div>
    <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="inner">

            <div class="sec-title with-separator">

                <h2>DNC Gallery</h2>

                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

            </div>

            @if (count($posts) > 0)
            @foreach ($posts as $post)
         

                <div class="col-md-4 col-sm-6 col-lg-4 fadeIn" data-wow-duration=".8s"
                    data-wow-delay=".2s">
                    <div class="blog-box">
                        <div class="blog-thmb">
                            <a href="{{ route('event', $post->post_slug) }}" title=""><img
                                    src="{{ $post->featured_image }}"
                                    alt="{{ $post->post_title }}"></a>
                        </div>
                        <div class="blog-info">
                            <ul class="pst-mta2">
                                <li><a href="#"
                                        title="">{{ $post->category->category_name }}</a></li>
                            </ul>
                            <h4><a href="{{ route('event', $post->post_slug) }}"
                                    title="">{{ $post->post_title }}</a></h4>
                            <p>
                                {!! Str::words($post->post_body, 25) !!}
                            </p>
                            <a href="{{ route('event', $post->post_slug) }}" title="">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="pagination-wrap text-center mb-2">
                <ul class="pagination">
                    {!! $posts->links() !!}
                </ul>
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

        </div>

    </div>



</section>



@endsection