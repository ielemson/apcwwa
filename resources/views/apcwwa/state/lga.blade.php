@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.slider')
@endsection

@section('content')
    <!--Events Section-->

    <div class="sidebar-page-container">

        <div class="auto-container">
            <div class="sec-title with-separator ">

                <h2 class="text-capitalize">{{$state}} Local Government & Wards</h2>

                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>


            </div>
       

            <div class="contr-wrap table-responsive">
                <table class="table table-striped table-inverse">
                    <thead>
                      <tr>
                        {{-- <th>#</th> --}}
                        <th>Local government <span class="badge badge-pill badge-dark">{{count($state_lga->lgas)}}</span></th>
                        <th>Wards  <span class="badge badge-pill badge-dark">{{count($state_lga->wards)}}</span></th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($state_lga->lgas as $lga)
                     <tr>
                        {{-- <th >1</th> --}}
                        <td>{{$lga->name}}</td>
                        <td>
                            {{-- @foreach ($lga->wards as $ward)
                            <span class="badge badge-pill badge-primary">
                                {{$ward->name}} 
                            </span>
                            
                            @endforeach --}}

                            <a href="{{route('lga.ward',strtolower($lga->name))}}">
                                view ward 
                                <span class="badge badge-pill badge-primary">
                                   {{count($lga->wards)}} 
                                </span>
                            </a>
                        </td>
                      </tr>
                     @endforeach
                     
                    </tbody>
                  </table>
                </div>

        </div>

    </div>
@endsection
