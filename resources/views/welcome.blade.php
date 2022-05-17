@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.slider')
@endsection

@section('content')
    

@include('apcwwa.desk')

<section class="team-section">

    <div class="auto-container">

        <div class="sec-title with-separator centered">

            <h2>Zonal and State Coordinators</h2>

            <div class="separator"><span class="cir c-1"></span><span
                    class="cir c-2"></span><span class="cir c-3"></span></div>
            </div>


        <div class="team-carousel owl-theme owl-carousel">

            <!--Team Block-->
            @foreach ($state_zonal_cords as $member)
 

       <div class="team-block">

        <div class="inner-box">

            <div class="image-box">

                <figure class="image"><img src="{{$member->user->profile_photo}}" alt="">
                </figure>

                <div class="hover-box">

                    <div class="hover-inner">

                        <div class="hover-upper">

                            <div class="icon-box"><span class="flaticon-chat"></span></div>

                            <h6>Get Touch With Me</h6>

                        </div>

                        <div class="hover-lower">

                            <ul class="info">

                                <li><a href="tel_3a+44-800-123-45">+44 800 123 45</a></li>

                                <li><a href="mailto:elvina@citygov.com">elvina@citygov.com</a></li>

                            </ul>

                            <ul class="social-links clearfix">

                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>

                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>

                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <div class="lower-box">

                <h4><a href="#">Bertram Irvin</a></h4>

                <div class="designation">Mayor</div>

            </div>

        </div>

    </div>
      @endforeach
       

            
        </div>

    </div>

</section>


<!--News Section-->
@include('apcwwa.dnc')
{{-- @include('apcwwa.aims_and_objectives') --}}

<!--Contact Info Section-->
<section class="services-section">

    <div class="sec-title with-separator centered">

        <h2>Aims &amp; Objectives</h2>

        <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

        {{-- <div class="lower-text">Denounce with righteous indignation and dislike men who are so beguiled &amp; demoralized our power of choice.</div> --}}

    </div>

    <div class="image-left">

        <div class="image-layer" style="background-image: url(apcwwa/images/background/image-2.jpg);"></div>

    </div>

    <div class="container">


        <div class="row clearfix">
            <div class="column col-xl-12 col-lg-12 col-md-12">

                <div class="col-inner">

                    <div class="row clearfix">

                        <!--Feature Block-->

                        <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="content-box">

                                    <div class="icon-box"><span class="icon flaticon-sheriff-badge"></span></div>

                                    <div class="content">

                                        {{-- <h4><a href="policing-crime.html">Policing & <br>crime department</a></h4> --}}

                                        <div class="text">
                                            To replicate a 20 score structural formation populated by men and women with youthful minds and genuine political leadership persuasions across the 8,665 Wards, 774 Local Governments Areas and the 36 States and the FCT., with view to consolidating on the gains and achieving 5 million votes for the party in the coming elections.</div>

                                        {{-- <div class="read-more"><a href="policing-crime.html">Read More</a></div> --}}

                                    </div>

                                </div>

                            </div>

                        </div>

                        
                        <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="content-box">

                                    <div class="icon-box"><span class="icon flaticon-museum"></span></div>

                                    <div class="content">

                                        {{-- <h4><a href="land-department.html">Housing & <br>land department</a></h4> --}}

                                        <div class="text">
                                            To engage public officials, bureaucrats, political leaders, as well as private sector entrepreneurs, whose actions and activities undermine the development initiatives of government and the progressive manifesto of the APC.
                                        </div>

                                        {{-- <div class="read-more"><a href="land-department.html">Read More</a></div> --}}

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!--Feature Block-->

                        <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="content-box">

                                    <div class="icon-box"><span class="icon flaticon-statue"></span></div>

                                    <div class="content">

                                        {{-- <h4><a href="arts-culture.html">Arts & <br>culture department</a></h4> --}}

                                        <div class="text">
                                            To articulate and initiate smart advocacy across rural and urban areas in consolidation of the dreams of majority of Nigerians that APC continue to serve in power beyond 2023.</div>

                                        {{-- <div class="read-more"><a href="arts-culture.html">Read More</a></div> --}}

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="content-box">

                                    <div class="icon-box"><span class="icon flaticon-museum"></span></div>

                                    <div class="content">

                                        {{-- <h4><a href="land-department.html">Housing & <br>land department</a></h4> --}}

                                        <div class="text">
                                            To constructively engage all states and local governments in order to ensure that they deploy their federation allocations for the development of the human resources in rural areas.    
                                        </div>

                                        {{-- <div class="read-more"><a href="land-department.html">Read More</a></div> --}}

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!--Feature Block-->

                        <!--Feature Block-->

                        <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="content-box">

                                    <div class="icon-box"><span class="icon flaticon-museum"></span></div>

                                    <div class="content">

                                        {{-- <h4><a href="land-department.html">Housing & <br>land department</a></h4> --}}

                                        <div class="text">
                                            To promote the virtues of hard work, honesty, integrity, good name, knowledge and skills acquisition, as well as selfless service to society, in the activities of Nigerians in rural and urban areas.</div>

                                        {{-- <div class="read-more"><a href="land-department.html">Read More</a></div> --}}

                                    </div>

                                </div>

                            </div>

                        </div>

                     
                        <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="content-box">

                                    <div class="icon-box"><span class="icon flaticon-museum"></span></div>

                                    <div class="content">

                                        {{-- <h4><a href="land-department.html">Housing & <br>land department</a></h4> --}}

                                        <div class="text">
                                            To educate the electorate in the vast rural areas on their political rights and responsibilities, as well as mobilizing them to ensure that candidates of the party are elected as president, governors, senators and honorable members.
                                        </div>

                                        {{-- <div class="read-more"><a href="land-department.html">Read More</a></div> --}}

                                    </div>

                                </div>

                            </div>

                        </div>
                   
                        <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="content-box">

                                    <div class="icon-box"><span class="icon flaticon-museum"></span></div>

                                    <div class="content">

                                        {{-- <h4><a href="land-department.html">Housing & <br>land department</a></h4> --}}

                                        <div class="text">
                                           
                                To deploy our vast human resources in monitoring and observing elections at all levels.
                                        </div>

                                        {{-- <div class="read-more"><a href="land-department.html">Read More</a></div> --}}

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="content-box">

                                    <div class="icon-box"><span class="icon flaticon-traffic-light"></span></div>

                                    <div class="content">

                                        {{-- <h4><a href="transport-traffice.html">Transport & <br>traffic department</a></h4> --}}

                                        <div class="text">
                                            To position the organization as a structured catalyst for socio-political and economic re-engineering in rural and urban areas in the post 2023 era.</div>

                                        {{-- <div class="read-more"><a href="transport-traffice.html">Read More</a></div> --}}

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </div>



</section>

    {{-- Organizational Structure starts --}}
    @include('apcwwa.structure')
    {{-- Organizational Structure ends --}}

<!--Facts Section-->

@include('apcwwa.flagship_programs')
@endsection