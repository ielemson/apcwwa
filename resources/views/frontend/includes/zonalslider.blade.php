<section class="ftco-section">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    @foreach ($desk as $user)
                    <div class="item">
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                <div class="testimony-wrap d-md-flex">
                                    <div class="img" style="background-image: url({{$user->user_photo}});"></div>
                                    <div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
                                        <div class="desc w-100">
                                            <div class="sec-title2 text-center">
                                                <div class="sec-title-inner2">
                                                    <h3 class="text-capitalize" style="font-size: 1.2rem;  margin-bottom:0">From the desk of the {{$user->post}}</h3>
                                                </div>
                                             </div>
                                            <p   style="text-align:justify; hyphens:auto;" lang="en">"{{$user->speech}}</p>
                                            <div >
                                                <p class="name mb-0 mt-0">&mdash; {{$user->name}}</p>
                                                {{-- <span class="position">{{$user->post}}</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>