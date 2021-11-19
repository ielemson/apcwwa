@extends('layouts.frontend')

@section('header')
@include('frontend.includes.mobileheader')
@include('frontend.includes.hero',['title'=>'About Us','header2Text'=>'About','header1Text'=>'About Us'])
@endsection


@section('content')


<section>
    <div class="gap">
        <div class="container">
            <div class="sec-title style2 text-center">
                <div class="sec-title-inner">
                    <h3><span class="secndry-clr">Things</span> We Are Doing</h3>
                </div>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis um voluptatum deleniti atque orrupti quos dolores et quas molestias. Excepturi sint occaecati cupiditate.</p>
            </div>
            <div class="srv-wrap3">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="srv-mckp mt-5">
                            <img src="/frontend/images/slider/apc.jpeg" alt="what-we-are-doing">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="remove-ext5">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="srv-box3">
                                        <div class="srv-ttl">
                                            <i class="flaticon-quran-rehal"></i>
                                            <h4>Education</h4>
                                            <span>Teaching Quran Ayah</span>
                                        </div>
                                        <p>At vero eos et accusamus et iusto odio disimos ducimus qui blanditiis um voluptatum deleniti atque orrupti qlores et...</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="srv-box3">
                                        <div class="srv-ttl">
                                            <i class="flaticon-heart-1"></i>
                                            <h4>Charity Service</h4>
                                            <span>Noble Cause To Help</span>
                                        </div>
                                        <p>At vero eos et accusamus et iusto odio disimos ducimus qui blanditiis um voluptatum deleniti atque orrupti qlores et...</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="srv-box3">
                                        <div class="srv-ttl">
                                            <i class="flaticon-heart-1"></i>
                                            <h4>Church Development</h4>
                                            <span>Renovating Church Everywhere</span>
                                        </div>
                                        <p>At vero eos et accusamus et iusto odio disimos ducimus qui blanditiis um voluptatum deleniti atque orrupti qlores et...</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="srv-box3">
                                        <div class="srv-ttl">
                                            <i class="flaticon-social-care"></i>
                                            <h4>Help Poor's</h4>
                                            <span>Feeding The Hungry</span>
                                        </div>
                                        <p>At vero eos et accusamus et iusto odio disimos ducimus qui blanditiis um voluptatum deleniti atque orrupti qlores et...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="gap gray-bg2">
        <div class="container">
            <div class="msn-wrap">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="msn-thmb-wrap">
                            <a href="/frontend/images/logo.png" data-fancybox="gallery" title=""><img src="/frontend/images/logo.png" alt="missoin-statement"></a> 
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="msn-desc">
                            <h3>Mission Statement</h3>
                            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
                            <ul>
                                <li>Nam facilisis mauris a metus finibus id gravida</li>
                                <li>Cras neque tortor, faucibus sit amet amet lacus</li>
                                <li>Fusce condimentum sem enim, est ornare ex vestibulum ut</li>
                            </ul>
                            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
                            <a class="thm-btn brd-rd40" href="#" title="">MORE ABOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="gap">
        
    </div>
</section>




@endsection