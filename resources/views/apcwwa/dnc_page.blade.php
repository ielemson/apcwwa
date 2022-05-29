@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection', [
        'title_1' => 'Diaspora Network Cordinate',
        'title_2' => 'DNC',
        'img' => '/apcwwa/images/banner/dnc_banner.jpg',
    ])
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

                                <div class="separator"><span class="cir c-1"></span><span
                                        class="cir c-2"></span><span class="cir c-3"></span></div>

                            </div>

                            <div class="text">
                                The opposition is greatly exploiting the huge population of Nigerian communities in the
                                diaspora in expanding the frontiers of her malicious propaganda machinery against the
                                government and the ruling party, therefore achieving the goal of APC Ward to Ward
                                Ambassadors which is Bridging Communication Gap between Nigerians and their ruling
                                Party/government of Choice requires a robust networking and fit-for-purpose coordination of
                                Nigerians living in diaspora. We operate a Diaspora Network Chapter DNC which consists of
                                smart organization of indigenous Nigerians across six continents of the world.
                            </div>

                        </div>

                    </div>


                    <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="inner">

                            <div class="sec-title with-separator">

                                <h2>Purpose</h2>

                                <div class="separator"><span class="cir c-1"></span><span
                                        class="cir c-2"></span><span class="cir c-3"></span></div>

                            </div>

                            <div class="text">
                                The purpose of APC Ward to Ward Ambassadors – Diaspora Network Chapter is to enlist Men and
                                Women of Nigeria origin residing in different parts of the world to support the noble task
                                of progressive continuity by propagating the modest efforts and unequalled achievements of
                                the President Mohammadu Buhari led APC Federal Government and bridging all communication gap
                                between Nigerians in diaspora and their government/party of choice.
                            </div>

                        </div>

                    </div>


                    <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="inner">

                            <div class="sec-title with-separator">

                                <h2>Membership</h2>

                                <div class="separator"><span class="cir c-1"></span><span
                                        class="cir c-2"></span><span class="cir c-3"></span></div>

                            </div>

                            <div class="text">
                                Membership of APC Ward-to-Ward Ambassadors Diaspora Network is open to every Nigerian above
                                the age of 18 years living in countries of any of the Six (6) major continents of the world
                                namely: ASIA, AFRICA, NORTH AMERICA, EUROPE, SOUTH AMERICA AND AUSTRALIA, who subscribes to
                                the stated purpose of the organization.
                            </div>

                        </div>

                    </div>

                    <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="inner">

                            <div class="sec-title with-separator">

                                <h2>Social Media Handle</h2>

                                <div class="separator"><span class="cir c-1"></span><span
                                        class="cir c-2"></span><span class="cir c-3"></span></div>

                            </div>
                            <div class="share-post">


                                <ul class="links clearfix">

                                    <li class="facebook"><a href="https://www.facebook.com/groups/643248286704615"
                                            target="_blank"><span class="icon fab fa-facebook-f"></span><span
                                                class="txt">Facebook</span></a></li>

                                    <li class="twitter"><a href="https://twitter.com/ApcdiasporaEx"
                                            target="_blank"><span class="icon fab fa-twitter"></span><span
                                                class="txt">Twiter</span></a></li>

                                    <li class="linkedin"><a
                                            href="https://www.youtube.com/channel/UC3WY8-PX-pKtVFbUZl1v6zA"
                                            target="_blank"><span class="icon fab fa-linkedin-in"></span><span
                                                class="txt">Linkedin</span></a></li>

                                    <li class="pinterest"><a href="mailto:apcdiasporaex@gmail.com"
                                            target="_blank"><span class="icon fa fa-envelope"></span><span
                                                class="txt">Email</span></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="inner">

                            <div class="sec-title with-separator">

                                <h2>DNC Committee</h2>

                                <div class="separator"><span class="cir c-1"></span><span
                                        class="cir c-2"></span><span class="cir c-3"></span></div>

                            </div>

                            <div class="row">



                                @if (count($dncs) > 0)
                                    @foreach ($dncs as $dnc)
                                        <div class="col-md-4">
                                            <div class="card card-profile">
                                                <div class="card-image">
                                                    <a href="#"> <img class="img"
                                                            src="{{ $dnc->user->profile_photo }}"> </a>
                                                </div>
                                                <div class="table">
                                                    <h4 class="card-caption"> {{ $dnc->user->name }}</h4>
                                                    <h5 class="category text-gray "> {{ $dnc->post }}</h5>
                                                    {{-- <div class="ftr"> <a href="#" class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a> <a href="#" class="btn btn-just-icon btn-facebook btn-round"><i class="fa fa-facebook-square"></i></a> <a href="#" class="btn btn-just-icon btn-google btn-round"><i class="fa fa-google"></i></a> </div> --}}
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

                                <div class="separator"><span class="cir c-1"></span><span
                                        class="cir c-2"></span><span class="cir c-3"></span></div>

                            </div>


                            <div class="row clearfix">


                                @if (count($posts) > 0)
                                    @foreach ($posts as $post)
                                        <!--Event Block-->
                                        <div class="event-block-two col-md-4 col-sm-12">

                                            <div class="inner-box">

                                                <div class="image-box">

                                                    <figure class="image">
                                                        <a href="{{ route('event', $post->post_slug) }}"><img
                                                                src="{{ $post->featured_image }}" alt="img" style="max-height:30vh; width:100%"></a>
                                                    </figure>

                                                </div>

                                                <div class="lower-box">

                                                    <div class="content-box">


                                                        <div class="content">

                                                            <div class="cat-info"><a
                                                                    href="{{ route('event', $post->post_slug) }}">{{ $post->category->category_name }}</a>
                                                            </div>

                                                            <h3><a
                                                                    href="{{ route('event', $post->post_slug) }}">{{ $post->post_title }}</a>
                                                            </h3>

                                                            <div class="location"> {!! Str::words($post->post_body, 10) !!}</div>

                                                            <div class="read-more"><a
                                                                    href="{{ route('event', $post->post_slug) }}">Read
                                                                    More</a></div>

                                                        </div>

                                                    </div>

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
                    <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="inner">

                            <div class="sec-title with-separator">

                                <h2>DNC Gallery</h2>

                                <div class="separator"><span class="cir c-1"></span><span
                                        class="cir c-2"></span><span class="cir c-3"></span></div>

                            </div>

                            <section class=" loadmore-gallery-one portfolio-mixitup">

                                <div class="filter-gallery-one row clearfix">

                                    <!--Gallery Item-->

                                    @if (count($galleries) > 0)
                                        @foreach ($galleries as $gallery)
                                            <div class="gallery-block mix all tour industry col-lg-4 col-md-6 col-sm-12">

                                                <div class="inner-box wow fadeInUp" data-wow-delay="0ms"
                                                    data-wow-duration="1500ms">

                                                    <div class="image-box">

                                                        <figure class="image">

                                                            <img src="{{ $gallery->image_path }}" alt="">

                                                        </figure>

                                                        <div class="zoom-btn">

                                                            <a class="lightbox-image zoom-link"
                                                                href="{{ $gallery->image_path }}"
                                                                data-fancybox="gallery"><span
                                                                    class="icon flaticon-zoom-in"></span></a>

                                                        </div>

                                                        <div class="cap-box">

                                                            <h6>{{ $gallery->title }}</h6>

                                                            <h3><a
                                                                    href="#"><span>[</span>{{ $gallery->caption }}<span>]</span></a>
                                                            </h3>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        @endforeach
                                    @else
                                        <div class="alert alert-primary col-md-12 col-sm-12 col-lg-12" role="alert">
                                            <h4 class="alert-heading">Heads Up!</h4>
                                            <p>No Gallery Available</p>
                                        </div>
                                    @endif


                                </div>

                        </div>

    </section>
    </div>

    </div>

    </div>

    </div>

    </div>

    </section>
@endsection

@push('extracss')
    <link href="{{ asset('apcwwa/css/dnc.css') }}" rel="stylesheet">
@endpush
