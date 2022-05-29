@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection',['title_1'=>"Donate",'title_2'=>"Donate","img"=>"/apcwwa/images/banner/about.jpg"])
@endsection

@section('content')

<section class="welcome-section-two alternate">

    <div class="lower-row">

        <div class="auto-container">

            <div class="sec-title with-separator text-capitalize">

                <h2>Thanks for your Donation</h2>

                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

                
                <div class="row">
                    <div class="col-3">
                        <p></p>
                        <p class="text-center"><i class="fas fa-hands-helping fa-4x"></i></p>
                    </div>

                    <div class="col-9">
                        <div class="text-col col-lg-12 col-md-12 col-sm-12 service-details service-list li">

                            <div class="inner">

                                <h3>BANK ACCOUNT DETAILS:</h3>

                                <ul class="service-list">

                                    <li><b>Bank</b>: Sterling Bank PLC </li>

                                    <li><b>Account Name</b>: APC Ward to Ward Ambassadors  </li>

                                    <li> <b>Account Number</b>: <i>0083480806</i></li>

                                    <li><b>Swift Code</b>: ……………</li>

                                   

                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div> 
        </div>

    </div>

</section>

@endsection