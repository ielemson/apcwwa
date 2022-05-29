@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection', [
        'title_1' => 'States in Nigeria',
        'title_2' => 'States in Nigeria',
        'img' => '/apcwwa/images/banner/flag.jpg',
    ])
@endsection

@section('content')


<section class="get-info-section">

    <div class="auto-container">

        <div class="sec-title with-separator">

            <h2>All States in Nigeria</h2>

            <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

        </div>

    
            <div class="featured-block-four row mx-auto">
                @foreach ($states as $state)
                <div class="inner-box col-md-3 col-sm-3 col-lg-3 mr-lg-4 mb-4">
                    <div class="count-box"><span>{{count($state->posts)}}</span></div>
                    <div class="content">
            
                       @if ($state->name == 'FCT - Abuja')
                       <h4>{{$state->name}} Capital</h4> 
                       @else
                       <h4>{{$state->name}} State</h4>
                       @endif
                        <h5>{{$state->slogan}}</h5>
            
                        <div class="read-more"><a href="{{route('events.state',strtolower($state->name))}}"><span>view event</span></a></div>
            
                    </div>
            
                </div>
                @endforeach     
            </div>  
        
    </div>

</section>
@endsection