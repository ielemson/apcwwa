@extends('layouts.master')

@section('header')
@include('frontend.includes.mobileheader')
@include('frontend.includes.hero',['title'=>'DNC','header2Text'=>'DNC','header1Text'=>'Diaspora Network Coordinate'])
@endsection


@section('content')
<section>
    <div class="gap">
        <div class="container">
            {{-- <div class="sec-title text-center">
                <div class="sec-title-inner">
                    <span>Our DNC</span>
                    <h3>Diaspora Network Coordinate</h3>
                </div>
                <p>-BACKGROUND:
                    The opposition is greatly exploiting the huge population of Nigerian communities in the diaspora in expanding the frontiers of her malicious propaganda machinery against the government and the ruling party, therefore achieving the goal of APC Ward to Ward Ambassadors which is Bridging Communication Gap between Nigerians and their ruling Party/government of Choice requires a robust networking and fit-for-purpose coordination of Nigerians living in diaspora.
                    
                    We operate a Diaspora Network Chapter DNC which consists of smart organization of indigenous Nigerians across six continents of the world.
                    -	Purpose:
                    The purpose of APC Ward to Ward Ambassadors – Diaspora Network Chapter is to enlist Men and Women of Nigeria origin residing in different parts of the world to support the noble task of progressive continuity by propagating the modest efforts and unequalled achievements of the President Mohammadu Buhari led APC Federal Government and bridging all communication gap between Nigerians in diaspora and their government/party of choice. 
                    
                    -	Membership:
                    Membership of APC Ward-to-Ward Ambassadors Diaspora Network is open to every Nigerian above the age of 18 years living in countries of any of the Six (6) major continents of the world namely: ASIA, AFRICA, NORTH AMERICA, EUROPE, SOUTH AMERICA AND AUSTRALIA, who subscribes to the stated purpose of the organization.
                    </p>
            </div> --}}

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

<div class="sec-title-inner mt-3">
    <h4><span class="secndry-clr"></span>Purpose:</h4>
</div>
<p>
    The purpose of APC Ward to Ward Ambassadors – Diaspora Network Chapter is to enlist Men and Women of Nigeria origin residing in different parts of the world to support the noble task of progressive continuity by propagating the modest efforts and unequalled achievements of the President Mohammadu Buhari led APC Federal Government and bridging all communication gap between Nigerians in diaspora and their government/party of choice. 

</p>

<div class="sec-title-inner mt-3">
    <h4><span class="secndry-clr"></span>Membership:</h4>
</div>
<p>
Membership of APC Ward-to-Ward Ambassadors Diaspora Network is open to every Nigerian above the age of 18 years living in countries of any of the Six (6) major continents of the world namely: ASIA, AFRICA, NORTH AMERICA, EUROPE, SOUTH AMERICA AND AUSTRALIA, who subscribes to the stated purpose of the organization.
</p>
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
            </div><!-- Team Wrap -->
        </div>
    </div>
</section>
@endsection

@push('frontend-styles')
<link rel="stylesheet" href="{{asset('main/css/pages.css')}}">
@endpush