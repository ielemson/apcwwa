
 <section class = "team-green-block">
            <div class="gap thm-layer opc95">
                <div class="fixed-bg ptrn-bg" style="background-image: url(frontend/images/pattern-bg.jpg);"></div>
                <div class="container">
                    {{-- <div class="sec-title2 text-center">
                        <div class="sec-title-inner2">
                            <h3>Our Zonal And State Cordinators</h3>
                        </div>
                    </div> --}}


                    <div class="sec-title">
                        <div class="sec-title-inner" >
                            <h3><span>Zonal and State Coordinators</span style="color:#fff"> </h3>
                        </div>
                        {{-- <p>The aims and objectives of APC Ward-to-Ward Ambassadors are as follows:</p> --}}
                    </div>

                    <div class="team-wrap text-center remove-ext3">
                        <div class="">
                         <div >
            <div class="owl-carousel owl-carousel-members owl-theme">
              
              @foreach ($state_zonal_cords as $member)
                    <div>
                  <div class="card text-center">
                     <img class="card-img-top" style="max-height:35vh; width:100%" src="{{$member->user->profile_photo}}" alt="">
                     <div class="card-body">
                        <h5>{{$member->user->name}}<br />
                        <strong>{{$member->portfolio}}</strong>
                        <br/>
                        {{-- <h6>{{$member->state->name}}</h6> --}}
                        
                     </div>
                  </div>
               </div>
              @endforeach
            </div>
         </div>  
        </div>
         </div><!-- Team Wrap -->
         <a class="thm-btn brd-rd5" href="{{route('zonal_state_cord')}}" title="">View More</a>
         </div>
         
            </div>
        </section>