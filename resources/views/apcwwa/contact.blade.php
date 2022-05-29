@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection', [
        'title_1' => 'Contact Us',
        'title_2' => 'Contact Us',
        'img' => '/apcwwa/images/banner/contact.jpg',
    ])
@endsection

@section('content')
    <!--Contact Section-->

    <section class="contact-section">

        <div class="auto-container">

            <div class="row clearfix">

                <div class="col-lg-6 col-md-12 col-sm-12 mb-5">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                    <div class="inner-box">

                        <div class="contact-info-box">

                            <div class="inner">

                                <ul class="info">

                                    <li class="clearfix">

                                        <h4>Quick contact</h4>

                                        <div class="content">

                                            <span class="icon flaticon-telephone-2"></span>

                                            <span>Call on</span><br>
                                            Mobile: <br>
                                            <a class="txt" href="tel:07031514509">

                                                0703-151-4509
                                            </a> <br>
                                            <a class="txt" href="tel:07031514509">
                                                0703-151-4509
                                            </a> <br>
                                            <a class="txt" href="tel:08022755235">
                                                0802-275-5235
                                            </a>

                                        </div>

                                    </li>

                                    <li class="clearfix">

                                        <h4>Email address</h4>

                                        <div class="content">

                                            <span class="icon flaticon-postcard"></span>

                                            <span>Mail to</span><br>

                                            <a href="mailto:apcward2wardambassadors@gmail.com"
                                                class="txt">apcward2wardambassadors@gmail.com</a>
                                            <br />
                                            <a href="mailto:info@apcwwa.com" class="txt">info@apcwwa.com</a>

                                        </div>

                                    </li>

                                    <li class="clearfix">

                                        <h4>Visit our office</h4>

                                        <div class="content">

                                            <span class="icon flaticon-map">

                                            </span>

                                            <span class="txt">#11 Ngwa Close, Off Fumilayo Ransome Kuti Way,
                                                Area 3 Garki, FCT- Abuja.</span>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="right-col col-lg-6 col-md-12 col-sm-12">

                    <div class="inner">

                        <div class="sec-title with-separator">

                            <h2>We’re Here to Help You</h2>

                            <div class="separator"><span class="cir c-1"></span><span
                                    class="cir c-2"></span><span class="cir c-3"></span></div>

                            <div class="lower-text">Shoot us a message if you have any question, we’re here to help!.
                            </div>

                        </div>


                        <div class="default-form form-box">

                            <form method="post" action="{{ route('contact_email') }}">
                                @csrf
                                <div class="form-group">

                                    <div class="field-inner">

                                        <input type="text" name="name" placeholder="Your name *" 
                                            value="{{ old('name') }}">
                                            @error('name')
                                            <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>



                                <div class="form-group">

                                    <div class="field-inner">

                                        <input type="email" name="email" placeholder="Email" 
                                            value="{{ old('email') }}">
                                            @error('email')
                                            <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>



                                <div class="form-group">

                                    <div class="field-inner">

                                        <input type="text" name="location" placeholder="Your Location" 
                                            value="{{ old('location') }}">
                                            @error('location')
                                            <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                           @enderror
                                    </div>

                                </div>



                                <div class="form-group">

                                    <div class="field-inner">

                                        <textarea name="message" placeholder="Message..." >{{ old('message') }}</textarea>
                                        @error('message')
                                        <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    </div>

                                </div>


                                <div class="form-group">

                                    <div class="field-inner">

                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        @error('g-recaptcha-response')
                                            <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                        @enderror

                                    </div>

                                </div>



                                <div class="form-group">

                                    <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Send
                                            Message</span></button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Map Section-->

    <section class="map-section">

        <!--Map Box-->

        <div class="map-box">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4800262.283237964!2d6.067591849541853!3d8.887278280575119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sng!4v1638711264187!5m2!1sen!2sng"
                width="100%" height="450" style="border:0;" allowfullscreen="" class="responsive-iframe"
                loading="lazy"></iframe>

        </div>

    </section>
@endsection
