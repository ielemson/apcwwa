@extends('layouts.master')

@section('header')
@include('frontend.includes.mobileheader')
@php
    $stateName = $state->name;
@endphp
@include('frontend.includes.hero',['title'=>'Event','header2Text'=>'Events','header1Text'=>"Events In $stateName"])
@endsection

@section('content')
<section>
    <div class="gap">
        <div class="container">
            <div class="blog-detail-wrp">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-lg-9">
                        <div class="blog-detail">
                            <div class="blog-detail-inf brd-rd5">
                                <img src="{{$state_event->featured_image}}" alt="{{$state_event->event_title}}" style="width: 100%; height:45vw">
                                <div class="blog-detail-inf-inr">
                                    <h4>{{$state_event->event_title}}</h4>
                                    <ul class="pst-mta">
                                        <li><i class="fa fa-calendar-o thm-clr"></i>{{ Carbon\Carbon::createFromTimeString($state_event->created_at)->format('M d Y') }}</li>
                                        <li><i class="fa fa-user-o thm-clr"></i>By Admin</li>
                                        {{-- <li><i class="fa fa-clock-o thm-clr"></i>Tuesday, 9:45 AM</li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-detail-desc">
                               {!!$state_event->event_body!!}
                                <div class="pst-shr-tgs">
                                    <div class="team-scl float-left">
                                        <span>Share This:</span>
                                        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <div class="tag-clouds float-right">
                                        <span>Tags:</span>
                                        <a href="{{route('events.state',strtolower($state->name))}}">Go Back</a>
                                    </div>
                                </div>
                                {{-- <div class="cmts-wrp">
                                    <h3>02 Comments</h3>
                                    <ul class="cmt-thrd">
                                        <li>
                                            <div class="cmt-bx">
                                                <img class="brd-rd50" src="assets/images/resources/cmt-img1.jpg" alt="cmt-img1.jpg">
                                                <div class="cmt-inf">
                                                    <h6>Mike Stepliton</h6>
                                                    <span>Aug 14, 2018</span>
                                                    <p itemprop="description">Similique sunt in culpa qui officia.vero eos et accusamus et iusto odio dignissimos ducimuss qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                                    <a class="comment-reply-link thm-clr" href="#" title="">Reply</a>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li>
                                                    <div class="cmt-bx">
                                                        <img class="brd-rd50" src="assets/images/resources/cmt-img2.jpg" alt="cmt-img2.jpg">
                                                        <div class="cmt-inf">
                                                            <h6>Maria Stepliton</h6>
                                                            <span>Aug 14, 2018</span>
                                                            <p>Similique sunt in culpa qui officia.vero eos et accusamus et iusto odio dignissismos ducimuss qui blanditiis praesentium voluptatum.</p>
                                                            <a class="comment-reply-link thm-clr" href="#" title="">Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul><!-- Comment Thread -->
                                </div> --}}
                                <!-- Comments Wrap -->
                                <div class="cnt-frm cmt-frm">
                                    <h3>Leave Your Comments</h3>
                                    <form>
                                        <div class="row mrg20">
                                            <div class="col-md-4 col-sm-6 col-lg-4">
                                                <input type="text" placeholder="Name">
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-lg-4">
                                                <input type="email" placeholder="Email">
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-lg-4">
                                                <input type="text" placeholder="Subject">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <textarea placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button type="submit" class="thm-btn brd-rd40">POST COMMENT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="sidebar-wrp">
                            <div class="wdgt-box">
                                <h4>Search</h4>
                                <form class="srch-frm">
                                    <input type="text" placeholder="Search">
                                    <button type="submit" class="thm-clr"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            {{-- <div class="wdgt-box">
                                <h4>Categories</h4>
                                <ul class="cat-lst">
                                    <li><a href="#" title="">House Accommodation</a>(10)</li>
                                    <li><a href="#" title="">Health Events</a>(06)</li>
                                    <li><a href="#" title="">Donation Event</a>(03)</li>
                                    <li><a href="#" title="">Education</a>(07)</li>
                                    <li><a href="#" title="">Food</a>(12)</li>
                                    <li><a href="#" title=""">Health Care</a>(02)</li>
                                </ul>
                            </div> --}}
                            <div class="wdgt-box">
                                <h4>Recent Events</h4>
                                <div class="rcnt-wrp">
                                    @if (count($state_events)>0)
                                        @foreach ($state_events as $event)
                                        <div class="rcnt-bx">
                                            <a href="{{route('event.state',[strtolower($state->name),$event->event_slug])}}"><img src="{{$event->featured_image}}" style="width: 100%; max-height:10vh"></a>
                                            <div class="rcnt-inf">
                                                <h6><a href="{{route('event.state',[strtolower($state->name),$event->event_slug])}}">{{{$event->event_title}}}</a></h6>
                                                <span class="thm-clr"><i class="fa fa-calendar-o"></i>{{ Carbon\Carbon::createFromTimeString($event->created_at)->format('M d Y') }}</span>
                                            </div>
                                        </div>  
                                        @endforeach
                                    @else
                                        
                                    @endif 
                                </div>
                            </div>
                        </div><!-- Sidebar Wrap -->
                    </div>
                </div>
            </div><!-- Blog Detail Wrap -->
        </div>
    </div>
</section>
@endsection