@extends('layouts.frontend')

@section('header')
@include('frontend.includes.mobileheader')
@include('frontend.includes.hero',['title'=>'Event','header2Text'=>'Contact','header1Text'=>'Event'])
@endsection


@section('content')

<section>
    <div class="gap">
        <div class="container">
            <div class="event-wrap">
                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="remove-ext3">
                            <div class="row">
                                @if (count($posts)>0)
                                    @foreach ($posts as $post)
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="event-box2">
                                            <div class="event-thumb">
                                                <a href="{{route('event',$post->post_slug)}}" title="{{$post->post_title}}"><img src="{{$post->featured_image}}" alt="{{$post->post_title}}" style="max-height:35vh"></a>
                                            </div>
                                            <div class="event-info">
                                                <h4><a href="{{route('event',$post->post_slug)}}" title="{{$post->post_title}}">{{$post->post_title}}</a></h4>
                                                <p>{!!\Illuminate\Support\Str::limit($post->post_body, 100, $end='...') !!}</p>
                                                <ul class="event-mta">
                                                    <li><i class="fa fa-user"></i>by Admin</li>
                                                    <li><i class="flaticon-clock"></i>{{ Carbon\Carbon::createFromTimeString($post->created_at)->format('M d Y') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    
                
                                    @endforeach

                                    <div class="pagination-wrap text-center mb-2">
                                        <ul class="pagination">
                                            {!! $posts->links() !!}
                                        </ul>
                                    </div>
                                @else
                                <div class="alert alert-primary col-md-12 col-sm-12 col-lg-12" role="alert">
                                    <h4 class="alert-heading">Heads Up!</h4>
                                    <p>No Event Available</p>
                                    </div>  
                                @endif

                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Event Wrap -->
        </div>
    </div>
</section>
@endsection