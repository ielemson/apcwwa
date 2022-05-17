@extends('layouts.mainLayout')

@section('banner')
    @include('apcwwa.pageSection',['title_1'=>"Contact Us",'title_2'=>"Contact Us"])
@endsection

@section('content')
        <!--Contact Section-->

        <section class="contact-section">

            <div class="auto-container">

                <div class="row clearfix">

                    <div class="left-col col-lg-6 col-md-12 col-sm-12">

                        <div class="inner-box">

                            <div class="images clearfix">

                                <figure class="image"><img src="{{asset('frontend/images/contact.jpeg')}}" alt=""></figure>

                                <figure class="image"><img src="{{asset('frontend/images/logo.png')}}" alt=""></figure>

                            </div>

                            <div class="contact-info-box">

                                <div class="inner">

                                    <ul class="info">

                                        <li class="clearfix">

                                            <h4>Quick contact</h4>

                                            <div class="content">

                                                <span class="icon flaticon-telephone-2"></span>

                                                <span>Call on</span><br>

                                                <a class="txt" href="tel_0803-453-1635">
                                                    Mobile: 0703-151-4509
                                                    0803-453-1635
                                                    0802-275-5235</a>

                                            </div>

                                        </li>

                                        <li class="clearfix">

                                            <h4>Email address</h4>

                                            <div class="content">

                                                <span class="icon flaticon-postcard"></span>

                                                <span>Mail to</span><br>

                                                <a href="mailto:info@apcwwa.com" class="txt">
                                                    apcward2wardambassadors<br/>@gmail.com, <br/> info@apcwwa.com</a>

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

                                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

                                <div class="lower-text">Shoot us a message if you have any question, we’re here to help!.</div>

                            </div>



                            <div class="default-form form-box">

                                <form method="post" action="sendemail.php" id="contact-form">

                                    <div class="form-group">

                                        <div class="field-inner">

                                            <input type="text" name="username" placeholder="Your name *" required="" value="">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <div class="field-inner">

                                            <input type="email" name="email" placeholder="Email" required="" value="">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <div class="field-inner">

                                            <select name="subject" class="custom-select-box">

                                            <option>Traffic & trasport</option>

                                            <option>Arts & culture department</option>

                                            <option>Housing & land department</option>

                                        </select>

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <div class="field-inner">

                                            <textarea name="message" placeholder="Message..." required=""></textarea>

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Send Message</span></button>

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

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4800262.283237964!2d6.067591849541853!3d8.887278280575119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sng!4v1638711264187!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" class="responsive-iframe" loading="lazy"></iframe>

            </div>

        </section>

@endsection