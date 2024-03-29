@extends('frontend/layout/layout')
@section('content')
@foreach($contactSection->image as $image)

<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4066.4601378876323!2d85.33424381538913!3d27.690957982798675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190e046ba90b%3A0xa21d7bc5db5c25e0!2sSamaj+Dental+Hospital!5e1!3m2!1sen!2snp!4v1546253986692" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<!-- <div class="parallax py-5 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax
     data-plugin-options="{'speed': 1.5, 'parallaxHeight': '115%'}" data-image-src="{{$image->file_data}}">
    <div class="spacer py-5 my-5"></div>
    <div class="spacer py-5 my-5"></div>
</div> -->
@endforeach
<section class="section section-content-pull-top-2 pull-top-level-3 z-index-1 py-lg-0 appear-animation contact-head"
         data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
    <div class="container pb-0">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{
                                    Session::get('message') }}</p>
        @endif
        <div class="row text-center mb-5">
            <div class="col">
                <div class="overflow-hidden">
                </div>
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp"
                        data-appear-animation-delay="800">{{$contactSection->title}}</h2>
                </div>
                <div class="overflow-hidden">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                       data-appear-animation-delay="1000">{!! html_entity_decode($contactSection->content) !!}</p>
                </div><br>

                <p class="text-2 px-lg-5 appear-animation" data-appear-animation="fadeInUpShorter"
                   data-appear-animation-delay="1200">{{$contactSection->excerpt}}

                </p>
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
                        <span>{{$site->address}}</span>
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
                        <span><a href="phone:{{$site->phone}}">{{$site->phone}}</a></span>
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
										<span class="d-block"><a href="mailto:{{$site->email}}">{{$site->email}}</a>
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

                        <form id="contactForm" class="contact-form pt-5 mt-5" action="{{route('contactinfo.store')}}" method="POST">
                            {!! csrf_field(); !!}

                        <strong id="succesMsg" ></strong>

                        <ul>

                        </ul>
                        <div class="contact-form-error alert alert-danger d-none">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message d-block"></span>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-lg-3">
                                <input type="text" value=""maxlength="100"
                                       class="form-control" name="name" id="name" placeholder="Name" required>
                            </div>

                            <div class="form-group col-lg-3">
                                <input type="text" value="" data-msg-required="Please enter your address."
                                       maxlength="100" class="form-control" name="address" id="address"
                                       placeholder="Address" required>
                            </div>
                            <div class="form-group col-lg-3">
                                <input type="number" value="" data-msg-required="Please enter the mobile number."
                                       maxlength="100" class="form-control" name="mobile" id="mobile"
                                       placeholder="Mobile number" required>
                            </div>
                            <div class="form-group col-lg-3">
                                <input type="email" value="" data-msg-required="Please enter your email address."
                                       data-msg-email="Please enter a valid email address." maxlength="100"
                                       class="form-control" name="email" id="email" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col">
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"
                                          class="form-control" name="message" id="message"
                                          placeholder="Message" required></textarea>
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
                                       class="contact-form-check btn btn-primary btn-rounded btn-4 font-weight-semibold text-0"
                                       data-loading-text="Loading...">
                            </div>
                        </div>

                    </form>
                    <strong id="result"></strong>
                </div>
            </div>
        </div>

    </div>
</div><br><br><br>
@endsection