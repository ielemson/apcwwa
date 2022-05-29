<section class="team-section">

    <div class="auto-container">

        <div class="sec-title with-separator centered">

            <h2>Zonal and State Coordinators</h2>

            <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span
                    class="cir c-3"></span></div>
        </div>


        <div class="team-carousel owl-theme owl-carousel">

            <!--Team Block-->
            @foreach ($state_zonal_cords as $member)
                <div class="team-block">

                    <div class="inner-box">

                        <div class="image-box">

                            <figure class="image"><img src="{{ $member->user->profile_photo }}" alt="img" style="width:100%; max-height:35vh">
                            </figure>

                        </div>

                        <div class="lower-box">

                            <h4><a href="#">{{$member->user->name }}</a></h4>

                            <div class="designation">{{$member->portfolio}}</div>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>

    </div>

</section>
