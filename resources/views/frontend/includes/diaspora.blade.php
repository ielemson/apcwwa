<section>
   <div class="gap white-layer opc9">
   <div class="fixed-bg ptrn-bg" style="background-image: url(frontend/images/pattern-bg.jpg);"></div>
   <div class="container">
      <div class="sec-title2 text-center">
         <div class="sec-title-inner2">
            {{-- <span>What Our</span> --}}
            <h3>Diaspora Network Chapter (DNC) </h3>
         </div>
      </div>
      <div class="team-wrap text-center remove-ext3">
         <div class="gtco-testimonials">
         @if (count($diaspora_network_chapter)>0)
             
               <div class="owl-carousel owl-carousel1 owl-theme">
            @foreach ($diaspora_network_chapter as $member)
                 <div>
                  <div class="card text-center">
                     <img class="card-img-top" style="max-height:35vh; width:100%" src="{{$member->profile_photo}}" alt="">
                     <div class="card-body">
                        <h5>{{$member->name}}<br />
                           <span>{{$member->post}}</span>
                        </h5>
                        
                     </div>
                  </div>
               </div>
            @endforeach

            @else

         <div class="sec-title-inner2">
            {{-- <span>What Our</span> --}}
            <h4>No Diaspora Network Chapter (DNC) Member Yet</h4>
         </div>
         @endif
          
             
              
            </div>
         </div>
      </div>
   </div>
</section>