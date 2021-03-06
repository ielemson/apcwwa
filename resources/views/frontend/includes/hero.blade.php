@include('partials.header')
{{-- @include('frontend.includes.header') --}}

<section>
    <div class="gap remove-bottom black-layer2 opc85">
        <div class="fixed-bg" style="background-image: url({{$img ?? ''}});"></div>
        <div class="container">
            <div class="page-title-wrap">
                <h1 class="text-white text-uppercase">{{$header1Text ?? ''}}</h1>
                <h2>{{$header2Text ?? ''}}</h2>
                <ul class="breadcrumbs">
                    <li><a href="{{url('/')}}" title="">Home</a></li>
                    <li>{{$title}}</li>
                </ul>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>
