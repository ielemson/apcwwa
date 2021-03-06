@extends('layouts.master')

@section('header')
@include('partials.header')
@include('frontend.includes.mobileheader')
@endsection

@section('content')

{{-- @include('frontend.includes.contactusform') --}}

@include('partials.slider')

@include('frontend.includes.desk')

@include('frontend.includes.members')

@include('frontend.includes.diaspora')


{{-- @include('partials.objectives') --}}
@include('partials.aims_and_objective')


{{-- Organizational Structure starts --}}
@include('partials.structure')
{{-- Organizational Structure ends --}}

{{-- Our Services --}}
@include('partials.Ourservices')
{{-- Our Services --}}

{{-- Upcoming Events --}}
@include('partials.upcomingEvents')

{{-- <section>
    <div class="gap">
        <div class="fixed-bg" style="background-image: url(/frontend/images/parallax2.jpg);"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title-inner">
                    <span>Serving Humanity</span>
                    <h3>Our Services</h3>
                </div>
            </div>
            <div class="serv-wrap">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="srv-tl">
                            <h2>We're on a <span>Mission</span> to</h2>
                            <h5>solve the problems and gain resources for a new generation.</h5>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="remove-ext9">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="serv-box">
                                        <i class="flaticon-quran-rehal"></i>
                                        <div class="serv-info">
                                            <h4>Quran Learning</h4>
                                            <p>Quran Teaching dolor sit amet, coteudtur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="serv-box">
                                        <i class="flaticon-heart-1"></i>
                                        <div class="serv-info">
                                            <h4>Chartiy Service</h4>
                                            <p>Charity Events dolor sit amet, coteudtur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="serv-box">
                                        <i class="flaticon-mosque"></i>
                                        <div class="serv-info">
                                            <h4>Mosque Development</h4>
                                            <p>Mosque Renovation dolor sit amet, coteudtur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="serv-box">
                                        <i class="flaticon-social-care"></i>
                                        <div class="serv-info">
                                            <h4>Help Poor's</h4>
                                            <p>Help Your fellows dolor sit amet, coteudtur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Serv Wrap -->
        </div>
    </div>
</section> --}}

@include('frontend.includes.donate')
@endsection

@push('frontend-styles')
<link rel="stylesheet" href="{{asset('main/css/style.css')}}">
@endpush