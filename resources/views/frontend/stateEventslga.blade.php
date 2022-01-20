@extends('layouts.master')

@section('header')
@include('frontend.includes.mobileheader')

@include('partials.states_slider')
@endsection

@section('content')


    <div class="gap">
        <div class="container">
            <div class="sec-title style2 text-center">
                <div class="sec-title-inner">
                    <h3><span class="secndry-clr">{{$state_lga->name}} State</span> Local Government & Wards</h3>
                </div>
                {{-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis um voluptatum deleniti atque orrupti quos dolores et quas molestias. Excepturi sint occaecati cupiditate.</p> --}}
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
                            @foreach ($lga->wards as $ward)
                            <span class="badge badge-pill badge-primary">
                                {{$ward->name}} 
                            </span>
                            
                            @endforeach
                        </td>
                      </tr>
                     @endforeach
                     
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('frontend-styles')
<link rel="stylesheet" href="{{asset('main/css/pages.css')}}">
@endpush