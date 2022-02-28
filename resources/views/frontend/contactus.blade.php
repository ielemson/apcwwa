@extends('layouts.frontend')

@section('header')
@include('frontend.includes.mobileheader')
@php
    $img = "frontend/images/parallax14.jpg"
@endphp
@include('frontend.includes.hero',['title'=>'Contact','header2Text'=>'Contact','header1Text'=>'Contact Us','img'=>$img])
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
                    <div class="col-md-4 col-sm-12 col-lg-3">
                        <div class="contact-info-box">
                            <i class="flaticon-location-pin"></i>
                            <strong>Our Location</strong>
                            <span>#11 Ngwa Close, Off Fumilayo Ransome Kuti Way, 
                             </span>
                            <a href="#" >Area 3 Garki, FCT- Abuja.</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="contact-info-box">
                            <i class="flaticon-call"></i>
                            <strong>Contact us Anytime</strong>
                            <span>Mobile: 0703-151-4509</span>
                            <span>0803-453-1635</span>
                            <span>0802-275-5235</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="contact-info-box">
                            <i class="flaticon-email"></i>
                            <strong>Write us anytime</strong>
                            <a href="#" >apcward2wardambassadors<br/> @gmail.com</a>
                            <a href="#" >info@apcwwa.com</a>
                            {{-- <a href="#" >support@apcwwa.com</a> --}}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="contact-info-box">
                            <i class="fa fa-thumbs-up"></i>
                            <strong>our social medial handles</strong>
                            {{-- <a href="#" >apcward2wardambassadors<br/>@gmail.com</a> --}}
                            <a href="https://www.facebook.com/apc.w.ambassadors" ><i class="fa fa-facebook"></i> Facebook</a> <br/>
                            <a href="https://twitter.com/apc_ward2ward" ><i class="fa fa-twitter"></i> Twitter</a><br/>
                            <a href="https://instagram.com/apcward2ward" ><i class="fa fa-instagram"></i> Instagram</a>
                            {{-- <a href="#" >support@apcwwa.com</a> --}}
                        </div>
                    </div>
                </div>
            </div><!-- Contact Info Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="gap no-gap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4800262.283237964!2d6.067591849541853!3d8.887278280575119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sng!4v1638711264187!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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