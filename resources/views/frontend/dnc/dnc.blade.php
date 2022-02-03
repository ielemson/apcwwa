`@extends('layouts.master')

@section('header')
@include('frontend.includes.mobileheader')

@php
    $img = "/frontend/images/dnc_banner.jpg"
@endphp

@include('frontend.includes.hero',['title'=>'DNC','header2Text'=>'DNC','header1Text'=>'Diaspora Network Coordinate','img'=>$img])
@endsection


@section('content')
<section>
    <div class="gap">
        <div class="container">
           
            <div class="sec-title style2 text-center">
                <div class="sec-title-inner">
                    <h3><span class="secndry-clr">Diaspora </span> Network Coordinate</h3>
                </div>
                <p>
                    The opposition is greatly exploiting the huge population of Nigerian communities in the diaspora in expanding the frontiers of her malicious propaganda machinery against the government and the ruling party, therefore achieving the goal of APC Ward to Ward Ambassadors which is Bridging Communication Gap between Nigerians and their ruling Party/government of Choice requires a robust networking and fit-for-purpose coordination of Nigerians living in diaspora.
                </p>
<p>              
We operate a Diaspora Network Chapter DNC which consists of smart organization of indigenous Nigerians across six continents of the world.
</p>

<div class="sec-title-inner mt-5">
    <h4><span class="secndry-clr"></span>Purpose:</h4>
</div>
<p>
The purpose of APC Ward to Ward Ambassadors – Diaspora Network Chapter is to enlist Men and Women of Nigeria origin residing in different parts of the world to support the noble task of progressive continuity by propagating the modest efforts and unequalled achievements of the President Mohammadu Buhari led APC Federal Government and bridging all communication gap between Nigerians in diaspora and their government/party of choice.
</p>

<div class="sec-title-inner mt-5">
    <h4><span class="secndry-clr"></span>Membership:</h4>
</div>
<p>
Membership of APC Ward-to-Ward Ambassadors Diaspora Network is open to every Nigerian above the age of 18 years living in countries of any of the Six (6) major continents of the world namely: ASIA, AFRICA, NORTH AMERICA, EUROPE, SOUTH AMERICA AND AUSTRALIA, who subscribes to the stated purpose of the organization.
</p>

<div class="sec-title-inner mt-5">
    <h4><span class="secndry-clr"></span>Social Media Handles:</h4>
</div>

<p class="mt-3">
    <ul class="socialIcons">
        <li class="facebook"><a href="https://www.facebook.com/groups/643248286704615" target="_blank"><i class="fa fa-fw fa-facebook"></i> Facebook</a></li>
        <li class="twitter"><a href="https://twitter.com/ApcdiasporaEx" target="_blank"><i class="fa fa-fw fa-twitter"></i> Twitter</a></li>
        <li class="instagram"><a href="https://www.youtube.com/channel/UC3WY8-PX-pKtVFbUZl1v6zA" target="_blank"><i class="fa fa-fw fa-youtube"></i> Youtube</a></li>
        {{-- <li class="pinterest"><a href=""><i class="fa fa-fw fa-envelop-o"></i>Pinterest</a></li> --}}
        <li class="steam"><a href="mailto:apcdiasporaex@gmail.com"><i class="fa fa-fw fa-envelope-o"></i> Email</a></li>
      </ul>
</p>

</div>

           
</div>
    </div>
</section>
@endsection

@push('frontend-styles')
<link rel="stylesheet" href="{{asset('main/css/pages.css')}}">
<link rel="stylesheet" href="{{asset('main/css/social.css')}}">
@endpush