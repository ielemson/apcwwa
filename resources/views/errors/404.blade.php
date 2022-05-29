@extends('layouts.mainLayout')



@section('content')
<section class="error-section">

    <div class="auto-container">

        <div class="content">

            <div class="big-text">

                <span class="num">404</span>

                <div class="med-text">Not Found</div>

            </div>

            <h2>Something went wrong, try later</h2>

            <div class="text">You may have mistyped the address or the page <br>may have moved.</div>

            <div class="link-box"><a href="{{url('/')}}" class="theme-btn btn-style-one"><span class="btn-title">Back to Home</span></a></div>

        </div>

    </div>

</section>

@endsection