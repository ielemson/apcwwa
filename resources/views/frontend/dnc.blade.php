@extends('layouts.frontend')

@section('header')
@include('frontend.includes.mobileheader')
@include('frontend.includes.hero',['title'=>'DNC','header2Text'=>'DNC','header1Text'=>'Diaspora Network Coordinate'])
@endsection


@section('content')
<section>
    <div class="gap">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title-inner">
                    <span>Our DNC</span>
                    <h3>Diaspora Network Coordinate</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="team-wrap2 text-center remove-ext3">
                <div class="row">
                    @if (count($dncs)>0)
                    @foreach ($dncs as $dnc)
                      
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="team-box2">
                            <img src="{{$dnc->profile_photo}}" alt="{{$dnc->name}}">
                            <div class="team-info2">
                                <h4>{{$dnc->name}}</h4>
                                <h6>{{$dnc->post}}</h6>
                                <strong>{{$dnc->state}}</strong>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p> --}}
                                {{-- <div class="team-scl">
                                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
                    @else
                        
                        <div class="alert alert-primary col-md-12 col-sm-12 col-lg-12" role="alert">
                            <h4 class="alert-heading">Heads Up!</h4>
                            <p>No DNC Available</p>
                            </div>
                    @endif
                  
                </div>
            </div><!-- Team Wrap -->
        </div>
    </div>
</section>
@endsection