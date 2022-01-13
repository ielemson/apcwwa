@extends('layouts.frontend')

@section('header')
@include('frontend.includes.mobileheader')
@php
    $name = $service->title;
@endphp
@include('frontend.includes.hero',['title'=>'Our Service','header2Text'=>'Our Services','header1Text'=>$name])
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
                                <img src="{{$service->featured_image}}" alt="{{$service->title}}" class="w-100" style="max-height: 35vw">
                                <div class="blog-detail-inf-inr">
                                    <h4>{{$service->title}}t</h4>
                                    <ul class="pst-mta">
                                        <li><i class="fa fa-calendar-o thm-clr"></i>{{ Carbon\Carbon::createFromTimeString($service->created_at)->format('M d Y') }}</li>
                                        <li><i class="fa fa-user-o thm-clr"></i>By</li>
                                        <li><i class="fa fa-clock-o thm-clr"></i>Admin</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-detail-desc">
                                {!!$service->content!!}
                                <div class="pst-shr-tgs">
                                    <div class="team-scl float-left">
                                        <span>Go Back:</span>
                                        <a href="{{url('/')}}"><i class="fa fa-arrow-left"></i></a>
                                        {{-- <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a> --}}
                                    </div>
                                    {{-- <div class="tag-clouds float-right">
                                        <span>Tags:</span>
                                        <a href="#" title="">Namaz</a>, <a href="#" title="">Roza</a>, <a href="#" title="">Hajj</a>, <a href="#" title="">Zakat</a>
                                    </div> --}}
                                </div>
                              
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div><!-- Blog Detail Wrap -->
        </div>
    </div>
</section>
@endsection