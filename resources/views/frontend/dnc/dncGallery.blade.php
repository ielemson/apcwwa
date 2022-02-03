@extends('layouts.master')

@section('header')

@include('frontend.includes.mobileheader')
@php
    $img = "/frontend/images/dnc_gallery.jpg"
@endphp
@include('frontend.includes.hero',['title'=>'Gallery','header2Text'=>'Gallery','header1Text'=>'DNC Gallery','img'=>$img])

@endsection

@section('content')

<div class="gap">
    <div class="container">
        <div class="sec-title style2 text-center">
            <div class="sec-title-inner">
                <h3><span class="secndry-clr">DNC </span> Gallery</h3>
            </div>
        </div>
     
        <div class="prtfl-wrap text-center">
          @if (count($galleries)>0)
          {{-- <ul class="fltr-lnks">
            <li class="active"><a data-filter="*" href="#">All</a></li>
            
            @foreach ($galleries as $gallery)
            <li class=""><a data-filter=".fltr-itm1" href="#">{{$gallery->category}}</a></li>
            @endforeach
        </ul> --}}

        <div class="prtfl-dta remove-ext1">
            <div class="row mrg15 masonry">
                    {{-- Gallery Starts --}}

                
                    @foreach ($galleries as $gallery)
                    <div class="col-md-4 col-sm-6 col-lg-4">
                    <div class="prtfl-box">
                        <img src="{{$gallery->image_path}}"class="img-fluid img-thumbnail" style="height:40vh; width:100%">
                        <div class="prtfl-info">
                            <a href="{{$gallery->image_path}}" data-fancybox="gallery" title=""><i class="fa fa-eye fa-2x"></i></a>
                            <h4>{{$gallery->title}}</h4>
                            <span>{{$gallery->caption}}</span>
                        </div>
                    </div>
                    </div>
                    @endforeach
                  
               

                   {{-- Gallery Starts --}}
            </div>
        </div>                              
            
        </div>
          @else
          <div class="alert alert-primary col-md-12 col-sm-12 col-lg-12" role="alert">
            <h4 class="alert-heading">Heads Up!</h4>
            <p>No Gallery Available</p>
            </div> 
          @endif
        </div>
       
    
</div>

@push('frontend-styles')
<link rel="stylesheet" href="{{asset('main/css/pages.css')}}">
@endpush
@endsection

