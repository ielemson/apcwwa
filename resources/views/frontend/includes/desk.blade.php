<section>
    @if (count($desk)>0)
        
            <div class="gap">
            <div class="container">
                <div class="hstry-wrap">
                    <div class="owl-carousel slide-one-item">
            @foreach ($desk as $user)
                
                 <div class="d-md-flex desk align-items-stretch" style="height:auto">
                          <div class="image" style="background-image: url('{{$user->user_photo}}');"></div>
                          <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="hstry-desc">
                                <span>
                                    <h4>From the desk of the {{$user->post}}</h4>
                                </span>
                                <h2>{{$user->name}}</h2>
                                <p>
                                  {!! $user->speech !!} 
                                 <!--{!! Str::words($user->speech, 100) !!}-->
                               </p>
                               <!--<a class="thm-btn mt-2" href="{{route('desk_more',$user->slug)}}" title="">Read More</a>-->
                            </div>
                        </div>
                        </div>  <!-- .item -->
    
            @endforeach     
                </div><!-- History Wrap -->
            </div>
        </div>
    @endif
    </section>