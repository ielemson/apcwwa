@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection',['title_1'=>"All States",'title_2'=>"All States"])
@endsection

@section('content')
<div class="sidebar-page-container">

    <div class="auto-container">

        <div class="row clearfix">



            <!--Content Side-->

            <div class="content-side col-lg-12 col-md-12 col-sm-12">

                <div class="content-inner">

                    <div class="event-filters-box">

                        <div id="search-popup" class="search-popup popup-visible">

                      
                
                            <div class="popup-inner">
                
                         
                
                                <div class="search-form">
                
                                    <form method="post" action="index.html">
                
                                        <div class="form-group">
                
                                            <fieldset>
                
                                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required="">
                
                                                <input type="submit" value="Search Now!" class="theme-btn">
                
                                            </fieldset>
                
                                        </div>
                
                                    </form>
                
                                </div>       
                
                            </div>
                
                        </div>

                    </div>

                    <div class="events-list">
                        <div class="row">

              @if (count($states) > 0)
               
                 <div class="mx-auto">
                    <aside class="sidebar mx-auto">

                        <div class="sidebar-widget services-widget">

                            <div class="widget-content">

                                <ul class="links clearfix row">
                                    @foreach ($states as $state)
                                    <div class="col-lg-3 col-md-4 col-sm-4 mb-4">
                                    <li><a href="{{route('events.state',strtolower($state->name))}}">{{$state->name}} State <br> <small>{{$state->slogan}}</small></a></li>

                                    </div>

                                    @endforeach


                                    {{-- <li class="current"><a href="health-safety.html"><span class="icon flaticon-hospital"></span> <span class="ttl">Health &amp; safety</span></a></li> --}}

                                </ul>

                            </div>

                        </div>

                    </aside>
                </div>    
              @else
                  No States Available
              @endif
                        </div>
                      

                    </div>


                </div>

            </div>




        </div>

    </div>

</div>
@endsection