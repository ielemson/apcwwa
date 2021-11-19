@extends('layouts.frontend')

@section('header')
@include('frontend.includes.mobileheader')
@include('frontend.includes.hero',['title'=>'Contact','header2Text'=>'Contact','header1Text'=>'Contact Us'])
@endsection


@section('content')
<section>
    <div class="gap">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title-inner">
                    <span>Get information</span>
                    <h3>Contact information</h3>
                </div>
            </div>
            <div class="contact-info-wrap text-center remove-ext3">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="contact-info-box">
                            <i class="flaticon-location-pin"></i>
                            <strong>Our Location</strong>
                            <span>(800) 123 456 789 / (800) 123 456 789</span>
                            <a href="#" title="">info@example.com</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="contact-info-box">
                            <i class="flaticon-call"></i>
                            <strong>Contact us Anytime</strong>
                            <span>Mobile: 012 345 678</span>
                            <span>Fax: 123 456 789</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="contact-info-box">
                            <i class="flaticon-email"></i>
                            <strong>Write Some Words</strong>
                            <a href="#" title="">Support24/7@example.com</a>
                            <a href="#" title="">info@example.com</a>
                        </div>
                    </div>
                </div>
            </div><!-- Contact Info Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="gap no-gap">
        <div class="contact-loc" id="contact-loc"></div>
    </div>
</section>
<section>
    <div class="gap">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title-inner">
                    <span>Have Question</span>
                    <h3>Send Message</h3>
                </div>
            </div>
            <div class="contact-form text-center">
                <form>
                    <div class="row mrg20">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <input type="text" placeholder="Phone">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <input type="text" placeholder="Subject">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <textarea placeholder="Message"></textarea>
                            <button class="thm-btn brd-rd40" type="submit">Contact Us</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection