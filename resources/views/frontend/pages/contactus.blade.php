@extends('frontend/layout/layout')
@section('content')
<div class="parallax py-5 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax
     data-plugin-options="{'speed': 1.5, 'parallaxHeight': '115%'}" data-image-src="{{url('img/view9logo.png')}}">
    <div class="spacer py-5 my-5"></div>
    <div class="spacer py-5 my-5"></div>
</div>
<section class="section section-content-pull-top-2 pull-top-level-3 z-index-1 py-lg-0 appear-animation"
         data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
    <div class="container pb-0">

        <div class="row text-center mb-5">
            <div class="col">
                <div class="overflow-hidden">
                </div>
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp"
                        data-appear-animation-delay="800">sdfs</h2>
                </div>
                <div class="overflow-hidden mb-5">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                       data-appear-animation-delay="1000">sdfsd</p>
                </div>
                <p class="text-2 px-lg-5 appear-animation" data-appear-animation="fadeInUpShorter"
                   data-appear-animation-delay="1200">sdf</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4 p-md-4 p-lg-5 mb-5 mb-md-4 appear-animation"
                 data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1600">
                <div class="icon-box icon-box-style-6">
                    <div class="icon-box-icon mb-3">
                        <i class="lnr lnr-apartment text-color-primary"></i>
                    </div>
                    <div class="icon-box-info">
                        <div class="icon-box-info-title">
                            <h3 class="font-weight-bold text-4 mb-0">
                                Address</h3>
                        </div>
                        <span>Newroad, Kathmandu</span>
                    </div>
                </div>
                <br><br>
                <div class="icon-box icon-box-style-6">
                    <div class="icon-box-icon mb-3">
                        <i class="lnr lnr-phone-handset text-color-primary"></i>
                    </div>
                    <div class="icon-box-info">
                        <div class="icon-box-info-title">
                            <h3 class="font-weight-bold text-4 mb-0">
                                Phone number</h3>
                        </div>
                        <span><a href="phone:9741458464">9741458464</a></span>
                    </div>
                </div>
            </div>



            <div class="vertical-divider border border-top-0 border-right-0 border-bottom-0 d-none d-md-block appear-animation"
                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400"></div>
            <div class="col-md-5 col-lg-4 p-md-4 p-lg-5 mb-5 mb-md-4 appear-animation"
                 data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600">
                <div class="icon-box icon-box-style-6">
                    <div class="icon-box-icon mb-3">
                        <i class="lnr lnr-envelope text-color-primary"></i>
                    </div>
                    <div class="icon-box-info">
                        <div class="icon-box-info-title">
                            <h3 class="font-weight-bold text-4 mb-0">Email Address</h3>
                        </div>
										<span class="d-block"><a href="mailto:customer.service@pharmasrs.com">customer.service@pharmasrs.com</a> <a href="#">support@pharmasrs.com</a>
										</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 p-md-4 p-lg-5 mb-5 mb-md-4 appear-animation"
                 data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1600">
                <div class="icon-box icon-box-style-6">

                </div>
            </div>
        </div>
    </div>

    <div class="container no-pull-top">
        <div class="row text-center">

            <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800"
                 data-plugin-options="{'accY': 100}">
                <a class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold text-0" href="#collapseForm"
                   data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseForm"
                   onClick="scrollAndFocus('#form', '#name', 30);">SEND MESSAGE</a>
            </div>
        </div>
    </div>
</section>
<div class="section bg-light-5 mt-negative-2 z-index-0 py-0">
    <div class="container">
        <div id="form" class="row">
            <div class="col">
                <div class="collapse pr-4" id="collapseForm">

                    <form class="contact-form pt-5 mt-5" data-request="contactform::onSend" id="contact_form">

                        <strong id="succesMsg" ></strong>

                        <ul>

                        </ul>
                        <div class="contact-form-error alert alert-danger d-none">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message d-block"></span>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-lg-3">
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                       class="form-control" name="name" id="name" placeholder="Name">
                            </div>

                            <div class="form-group col-lg-3">
                                <input type="text" value="" data-msg-required="Please enter your address."
                                       maxlength="100" class="form-control" name="address" id="address"
                                       placeholder="Address">
                            </div>
                            <div class="form-group col-lg-3">
                                <input type="text" value="" data-msg-required="Please enter the mobile number."
                                       maxlength="100" class="form-control" name="mobile" id="mobile"
                                       placeholder="Mobile number">
                            </div>
                            <div class="form-group col-lg-3">
                                <input type="email" value="" data-msg-required="Please enter your email address."
                                       data-msg-email="Please enter a valid email address." maxlength="100"
                                       class="form-control" name="email" id="email" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col">
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"
                                          class="form-control" name="message" id="message"
                                          placeholder="Message"></textarea>
                            </div>
                        </div>

                        <strong id="errorCaptcha"></strong>

                        <div class="form-row mt-2">
                            <div class="form-group col">
                                <div class="g-recaptcha" data-sitekey="6Lf3r18UAAAAAF_i7k-ETJARNzaw2fa8FIpOLKUE"></div>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="submit" value="SEND MESSAGE"
                                       class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0"
                                       data-loading-text="Loading...">
                            </div>
                        </div>

                    </form>
                    <strong id="result"></strong>
                </div>
            </div>
        </div>
        <!--<div class="row mx-0 appear-animation" data-appear-animation="fadeInUpShorter">-->
        <!--&lt;!&ndash; Go to the bottom of the page to change settings and map location. &ndash;&gt;-->
        <!--<div id="googlemaps" class="google-map google-map-style-2 height-500">-->
        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.683087523665!2d85.33456395118695!3d27.696188182712252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199851b4ff6f%3A0xf8d756f117f66bb0!2sBaneshwor+Party+Palace!5e0!3m2!1sen!2snp!4v1526548935977"-->
        <!--height="100%" width="100%"></iframe>-->
        <!--</div>-->

        <!--</div>-->
    </div>
</div>
@endsection