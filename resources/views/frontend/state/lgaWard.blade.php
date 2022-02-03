@extends('layouts.master')

@section('header')

@include('frontend.includes.mobileheader')
@php
    $img = "/frontends/images/events.jpg"
@endphp
@include('frontend.includes.hero',['title'=>'Wards','header2Text'=>'Wards','header1Text'=>'LGA WARD','img'=>$img])

@endsection
@section('content')


    <div class="gap">
        <div class="container">
            <div class="sec-title style2 text-center">
                <div class="sec-title-inner">
                    <h3><span class="secndry-clr">{{strtoupper($slug)}}</span> Local Government & Wards</h3>
                </div>
                {{-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis um voluptatum deleniti atque orrupti quos dolores et quas molestias. Excepturi sint occaecati cupiditate.</p> --}}
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

@push('frontend-styles')
<link rel="stylesheet" href="{{asset('main/css/pages.css')}}">
@endpush