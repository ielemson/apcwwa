@extends('layouts.master')

@section('header')
@include('frontend.includes.mobileheader')

@include('partials.states_slider')
@endsection

@section('content')


    <div class="gap">
        <div class="container">
            <div class="contr-wrap text-center">
                <div class="contr-inner">
                    <div class="contr-desc contr-inr">
                        <h2>Welcome to {{$state->name}} State</h2>
                        <p>This is the event page for {{$state->name}}. Here, we publish events and news about the state.</p>
                    </div>
                    <div class="contr-butn contr-inr">
                        <a class="secndry-btn brd-rd40" href="{{route('state.lga',$state->name)}}" title="">View LGA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<section>
    <div class="gap">
        <div class="container">
            
            <div class="blog-wrap remove-ext7">
                <div class="row mrg40">
                    @if (count($state_events) > 0)
                        
                    @foreach ($state_events as $state_event)
                    <div class="col-md-4 col-sm-6 col-lg-4 fadeIn" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="blog-box">
                            <div class="blog-thmb">
                                <a href="{{route('event.state',[strtolower($state->name),$state_event->event_slug])}}"><img src="{{$state_event->featured_image}}" alt="{{$state->name}}" style="width: 100%; height:40vh"></a>
                            </div>
                            <div class="blog-info">
                                <ul class="pst-mta2">
                                    <li><a href="{{route('event.state',[strtolower($state->name),$state_event->event_slug])}}" >{{$state_event->state->name}} State</a></li>
                                </ul>
                                <h4><a href="{{route('event.state',[strtolower($state->name),$state_event->event_slug])}}">{{$state_event->event_title}}</a></h4>
                                <p>{!!\Illuminate\Support\Str::limit($state_event->event_body, 200, $end='...') !!}</p>
                                <a href="{{route('event.state',[strtolower($state->name),$state_event->event_slug])}}" >Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @else
                       <div class="alert alert-primary col-md-12 col-sm-12 col-lg-12 text-center py-2" role="alert">
                            <h4 class="alert-heading">Heads Up!</h4>
                            <p>No Event For {{$state->name}} is Available</p>
                        </div> 
                    @endif
                  
                     
                </div>

            </div><!-- Blog Wrap -->
            <div class="pagination-wrap text-center">
                <ul class="pagination">
                    {!! $state_events->links() !!}
                </ul>
            </div>
            <!-- Pagination Wrap -->
        </div>
    </div>
</section>

@endsection