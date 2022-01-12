@extends('layouts.frontend')

@section('header')
@include('frontend.includes.mobileheader')
@include('frontend.includes.hero',['title'=>'About Us','header2Text'=>'About','header1Text'=>'About Us'])
@endsection


@section('content')


<section>
    <div class="gap">
        <div class="container">
            <div class="sec-title style2 text-center">
                <div class="sec-title-inner">
                    <h3><span class="secndry-clr"></span>Background</h3>
                </div>
                <p class="text-justify">
            APC Ward to Ward Ambassadors is creating opportunities for participation. We are setting up organization of people in 8, 665 Wards and 774 Local Government Areas to coordinate a fit-for-purpose Management Information System MIS in mobilizing Nigerians for progressive continuity in the post 2023 political era. 
            The opposition is working very hard to present the noble efforts of President Muhammadu Buhari and the ruling party in the opposite light, and the successes they have recorded so far is a direct consequence of the communication gap that exists between Nigerians and their party and government of choice, especially in the grassroots and diaspora.
            With our organized human structures spread across the entire urban and rural Nigeria, we are physically identifying on-going, completed or commissioned projects and their beneficiaries or host communities and coordinating online and offline person-to-person outreach as a strategy in bridging every communication gap that exists between Nigerians and the noble achievements of the Party and Government.
                    <br/>
                    <br/>
            <h6 style="font-size: 1rem">We are deploying a coordinated use of technology and managing the gamut of the project on a Five tier administrative pyramid thus:</h6>
          </p>
          <ul class="text-justify ml-5">
            <li>
             National Coordinating Committee - NCC
            
            </li>
            <li>
             Zonal Coordinating Committee – ZCC
            
            </li>
            <li>
                 State Coordinating Committee - SCC
           
            </li>
            <li>
                 Local Government Coordinating Committee – LCC
           
            </li>
            <li>
                 Ward Coordinating Committee – WCC
            </li>
          </ul>
          <p class="text-justify"> Members of the Coordinating Committee at the respective tiers shall be assigned specific portfolios for the purposes of democratic multiplication and actualization of the organizations expected output.</p>
        </div>

        {{-- INTRODUCTION --}}

        <div class="container">
            <div class="sec-title style2 text-center">
                <div class="sec-title-inner">
                    <h3><span class="secndry-clr"></span>Introduction</h3>
                </div>
                <p class="text-justify">
                    APC Ward to Ward Ambassadors is a National Political Action Group operating in the entire <strong>8,665</strong> Political Wards; <strong>774</strong> local government areas of the <strong>36</strong> States of the federation, the FCT., and the Diaspora with a clear vision of bridging communications gap between Nigerians and their party and government of choice, the APC.
                    The greatest challenge confronting the ruling party - our party is not that we have performed below expectations or that we are not achieving the goals outlined in our manifesto which Nigerians gladly bought in 2015 and reaffirmed in 2019 through the ballot. The greatest challenge is that we are faced with a determined opposition whose propaganda machinery is on a top-flight mobility. Our brief therefore is to innovate a grassroots citizen engagement ecosystem that will constantly keep the opposition in check by bridging all communication gap between Nigerians and their party and government of choice.                                     
                </p>

        </div>



{{-- 
            <div class="srv-wrap3">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="srv-mckp mt-5">
                            <img src="/frontend/images/slider/apc.jpeg" alt="what-we-are-doing">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="remove-ext5">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="srv-box3">
                                        <div class="srv-ttl">
                                            <i class="flaticon-quran-rehal"></i>
                                            <h4>Education</h4>
                                            <span>Teaching Quran Ayah</span>
                                        </div>
                                        <p>At vero eos et accusamus et iusto odio disimos ducimus qui blanditiis um voluptatum deleniti atque orrupti qlores et...</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="srv-box3">
                                        <div class="srv-ttl">
                                            <i class="flaticon-heart-1"></i>
                                            <h4>Charity Service</h4>
                                            <span>Noble Cause To Help</span>
                                        </div>
                                        <p>At vero eos et accusamus et iusto odio disimos ducimus qui blanditiis um voluptatum deleniti atque orrupti qlores et...</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="srv-box3">
                                        <div class="srv-ttl">
                                            <i class="flaticon-heart-1"></i>
                                            <h4>Church Development</h4>
                                            <span>Renovating Church Everywhere</span>
                                        </div>
                                        <p>At vero eos et accusamus et iusto odio disimos ducimus qui blanditiis um voluptatum deleniti atque orrupti qlores et...</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="srv-box3">
                                        <div class="srv-ttl">
                                            <i class="flaticon-social-care"></i>
                                            <h4>Help Poor's</h4>
                                            <span>Feeding The Hungry</span>
                                        </div>
                                        <p>At vero eos et accusamus et iusto odio disimos ducimus qui blanditiis um voluptatum deleniti atque orrupti qlores et...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}


        </div>
    </div>
</section>

<section>
    <div class="gap gray-bg2">
        <div class="container">
            <div class="msn-wrap">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="msn-thmb-wrap">
                            <a href="/frontend/images/logo.png" data-fancybox="gallery" title=""><img src="/frontend/images/logo.png" alt="missoin-statement"></a> 
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="msn-desc">
                            <h3>Mission Statement</h3>
                            <p>To enlist men and women of youthful minds and genuine leadership persuasions across rural and urban Nigeria in galvanizing the good wishes of Nigerians for progressive continuity.</p>
                            <ul>
                                <li><strong>Vision</strong>: <br/>Bridging Communication Gap between Nigerians and their Party of Choice - APC.</li>
                                <li><strong>Strategy</strong>: <br/>To enlist 20 individuals in each of the 8,665 Wards; 774 L.G.As and the 36 States of the Federation as members of the local executive coordination committee in their respective Wards, L.G.As and State as a sustainable strategy for effective and up-to-date community based Management Information System MIS on the 3-Point presidential focus: Security, Economic Diversification and Fighting Corruption.</li>
                                <li><strong>Approach</strong>: <br/>Formation of volunteer groups in rural areas for person-to-person awareness approach and deploying a coordinated use of information and communication technology ICT to collate feedback and keep volunteers abreast on the verifiable successes recorded on Security, Economic Diversification and Fighting Corruption.</li>
                                <li> <strong>Expected Outcome</strong>: <br/> Continuity of APC in power in the post 2023 political era. </li>
                                <li> <strong>Core Principle</strong>: <br/>We do not root for any individual. We root for the institution of Party and Government. </li>
                            </ul>
               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="gap">
      <div class="container">
        <div class="sec-title style2 text-center">
            <div class="sec-title-inner">
                {{-- <span></span> --}}
                <h3 class="text-capitalize">Rationale</h3>
            </div>
            <section class="text-justify">
                <p>The APC-led federal government performances is the most under reported in the history of Nigeria and, the opposition is slowly but steadily exploiting that gap in creating disaffection between Nigerians and their party of choice, the APC. </p>
            <p>Instructively, there is a subsisting legal order in Nigeria today that the political party is the custodian of the electoral mandate, and, true to this, APC is always the first and last thing on the lips of Nigerians whenever they either criticize or commend the federal government. </p>
            <p>Therefore, there is a sense in which the party through this action group shall rise to the occasion and begin to put her fantastic records of good governance before Nigerians across the <strong>8,665</strong> Wards, <strong>774</strong> Local Governments Areas and the <strong>36</strong> States.</p>
            </section>
        </div>
      </div>
    </div>
</section>




@endsection