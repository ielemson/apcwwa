@if (count($diaspora_network_chapter)>0)
        <section class="news-section">

            <div class="auto-container">

                <div class="sec-title with-separator">

                    <h2>
                        Diaspora Network Chapter DNC</h2>

                    <div class="separator"><span class="cir c-1"></span><span
                            class="cir c-2"></span><span class="cir c-3"></span></div>

                </div>



                <div class="carousel-box">

                    <div class="news-carousel owl-theme owl-carousel">

                        <!--News Block-->

                        @foreach ($diaspora_network_chapter as $member)
      
                        <div class="news-block">

                            <div class="inner-box">

                                <div class="card card-profile">
                                    <div class="card-image">
                                        <a href="#"> <img class="img" src="{{$member->profile_photo}}"> </a>
                                    </div>
                                    <div class="table">
                                        <h4 class="card-caption"> {{$member->name}}</h4>
                                        <h5 class="category text-gray "> {{ $member->post }}</h5>
                                        {{-- <div class="ftr"> <a href="#" class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a> <a href="#" class="btn btn-just-icon btn-facebook btn-round"><i class="fa fa-facebook-square"></i></a> <a href="#" class="btn btn-just-icon btn-google btn-round"><i class="fa fa-google"></i></a> </div> --}}
                                    </div>
                                </div>

                             

                            </div>

                        </div>
      
                        @endforeach
                    </div>

                </div>

              
            </div>

        </section>
    
     @endif

     @push('extracss')
<link href="{{ asset('apcwwa/css/dnc.css') }}" rel="stylesheet">
@endpush