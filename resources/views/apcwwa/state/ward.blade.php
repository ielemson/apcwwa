@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection',['title_1'=>"State Event",'title_2'=>"Events"])
@endsection

@section('content')
    <!--Events Section-->

    <div class="sidebar-page-container">

        <div class="auto-container">
            <div class="sec-title with-separator ">

                <h2 class="text-capitalize">List of Wards in  {{$slug}} LGA</h2>

                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>


            </div>
       
            <div class="contr-wrap table-responsive">
                @if (count($wards) > 0)
                <table class="table table-striped table-inverse">
                    <thead>
                      <tr>
                        {{-- <th>#</th> --}}
                        <th>WARD </th>
                        <th>WARD COORDINATOR</th>
                      </tr>
                    </thead>
                    <tbody>
                   
                       
                   @foreach ($wards as $ward)
                   <tr>
                      {{-- <th >1</th> --}}
                      <td>{{$ward->name}}</td>
                      <td>
                        {{$ward->cordinator->cordname}}
                      </td>
                    </tr>
                   @endforeach
                  
                 
                     
                    </tbody>
                  </table>
                  @else
                  <div class="alert alert-primary container col-md-12 col-sm-12 col-lg-12 text-center py-2" role="alert">
                   <h4 class="alert-heading">Heads Up!</h4>
                   <p>No Ward For {{(strtoupper($slug))}} </p>
               </div>  
                  @endif
                </div>
            </div>

        </div>

    </div>
@endsection
