@extends('layouts.frontend')

@section('header')
@include('frontend.includes.mobileheader')
@php
    $deskfrom = 'From the desk of'.' '.$desk->post;
@endphp
@include('frontend.includes.hero',['title'=>'Our Service','header2Text'=>'Our Services','header1Text'=>$deskfrom])
@endsection


@section('content')

<section>
    <div class="gap">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 left-box mx-auto">
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post" >
                                <img class="d-block img-fluid w-100" style="max-height: 80vh" src="{{$desk->user_photo}}" alt="{{$desk->name}}">
                            </div>
                            <h3 class="text-center p-4">{{$desk->name}}</h3>
                            <p class="p-4">
                                {!! $desk->speech !!}
                            </p>
                        </div>                        
                    </div>

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
                            <a href="{{url('/')}}">Go Back</a>
                        </div>
                    </div>
                   
                </div>
             
            </div>

        </div>
    </div>
</section>
@endsection