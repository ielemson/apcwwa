@extends('layouts.frontend')

@section('header')
@include('frontend.includes.mobileheader')
@php
    $img = "frontend/images/parallax14.jpg"
@endphp
@include('frontend.includes.hero',['title'=>'ZSC','header2Text'=>'ZSC','header1Text'=>'Zonal and State Coordinators','img'=>$img])
@endsection


@section('content')
<section>
    <div class="gap">
        <div class="container">
        
            @if (count($zones) > 0)
                
            @foreach ($zones as $zone)
            <div class="sec-title mb-5">
                <div class="sec-title-inner">
                    <h3>{{$zone->zone}}</h3>
                </div>
                {{-- <p><b>Zonal Coordinator</b> : {{$zone->user->name}}</p> --}}
                <div class="col-md-4 col-sm-12 col-lg-10 mx-auto">
                    {{-- <div class="sec-title">
                        <div class="sec-title-inner">
                            <h3>{{$zone->zone}}</h3>
                        </div>
                    </div> --}}
                    <ul class="prayer-times">
                        <li class="pry-tim-hed"><span>Zonal Coordinator</span><span>Phone Number</span></li>
                        <li><span class="thm-clr">{{$zone->user->name}}</span><span>{{$zone->user->phone_number}}</span></li>
                        {{-- <li><span class="thm-clr">{{count($zone->zone_states)}}</span><span>{{$zone->user->phone_number}}</span></li> --}}
                    </ul>
                </div>

                <div class="table-responsive">
                    <table class="table mb-0 table-bordered">
                        <thead>
                            <tr>
                                
                                <th scope="col">State</th>
                                <th scope="col">Coordinator</th>
                                <th scope="col">Photograph</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                           
                                @foreach ($zone->zone_states as $zone_state)
                                <tr>
                                    <td>{{$zone_state->state->name}}</td>
                                    <td>{{$zone_state->user->name}}</td>   
                                    <td>
                                        <img style="border-radius:50%; height:50px; width:50px" src="{{$zone_state->user->profile_photo }}" class="img-fluid img-thumbnail " alt="image">   
                                </tr>
                                @endforeach
                               
                           
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach
            @else
                
            @endif
            
        </div>
    </div>
</section>

@endsection