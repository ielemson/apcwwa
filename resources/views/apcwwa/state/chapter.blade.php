@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.slider')
@endsection

@section('content')
    <!--Events Section-->

    <div class="sidebar-page-container">

        <div class="auto-container">

            <div class="row clearfix">


                <!--Content Side-->

                <div class="content-side col-lg-8 col-md-12 col-sm-12">

                    <div class="content-inner">

                        <div class="service-details">

                           
                            <div class="infra-structure">

                                {{-- <h3>{{$state->name}} State Chapter</h3> --}}
                                <div class="sec-title with-separator centered">

                                    <h2>{{$state->name}} State Chapter</h2>
                
                                    <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>
                
                                    <div class="lower-text">
                                        Welcome to {{$state->name}} State page. Please read our events and gallery pages to learn more about us.
                                        Kindly click on the link below to view our state's news or gallery.    
                                    </div>
                
                                </div>
                                <div class="row clearfix">

                                    <div class="infra-block col-lg-6 col-md-6 col-sm-12">

                                        <a href="{{route('events.state',strtolower($state->name))}}">
                                            <div class="inner-box">

                                                <div class="icon-box"><span class="fa fa-newspaper" aria-hidden="true"></span></div>
    
                                                <h4>Events &amp; Current News</h4>
    
                                                <div class="text">Keep up with the latest events and news in {{$state->name}} State.</div>
    
                                            </div>
                                        </a>

                                    </div>

                                    <a href="{{route('state.gallary',strtolower($state->name))}}" class="infra-block col-lg-6 col-md-6 col-sm-12">

                                        <div class="inner-box">

                                            <div class="icon-box"><span class="fa fa-image" aria-hidden="true"></span></div>

                                            <h4>Gallery &amp; Culture</h4>

                                            <div class="text">Our state Art and Gallery page</div>

                                        </div>

                                    </a>

                                </div>

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
