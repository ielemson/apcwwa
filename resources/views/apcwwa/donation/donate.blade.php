@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection',['title_1'=>"Donate",'title_2'=>"Donate","img"=>"/apcwwa/images/banner/about.jpg"])
@endsection

@section('content')

<section class="welcome-section-two alternate">

    <div class="lower-row">

        <div class="auto-container">

            <div class="sec-title with-separator">

                <h2>Thanks for your Donating</h2>

                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

                
                <div class="row">
                    <div class="col-3">
                        <p></p>
                        <p class="text-center"><i class="fas fa-hands-helping fa-4x"></i></p>
                    </div>

                    <div class="col-9">
                        <p>

                            <b>BANK ACCOUNT DETAILS: </b><br/>
                            <b>Bank</b>: Sterling Bank PLC <br/>
                            <b>Account Title</b>: APC Ward to Ward Ambassadors  <br/>
                            <b>Account Number</b>: <i>0083480806</i><br/>
                            <b>Swift Code</b>: ……………


                        </p>
                        {{-- <h2><span class="badge">v52gs1</span></h2> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>



</section>



@endsection