@extends('frontend/layout/layout')
@section('content')


<section class="section">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">Online Consultaion
                    Service</h2>

                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter"
                   data-appear-animation-delay="200">To proceed consulting, please fill up the following form.
                </p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-12 appear-animation" data-appear-animation="fadeInRightShorter">
                <form class="contact-form form-style-2" action="#" method="POST">
                    <!--                    <div class="contact-form-success alert alert-success d-none">-->
                    <!--                        <strong>Success!</strong> Your message has been sent to us.-->
                    <!--                    </div>-->
                    <!--                    <div class="contact-form-error alert alert-danger d-none">-->
                    <!--                        <strong>Error!</strong> There was an error sending your message.-->
                    <!--                        <span class="mail-error-message d-block"></span>-->
                    <!--                    </div>-->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="form-group">
                                <label for="package">Select Package:</label>
                                <select class="form-control" id="package">
                                    @foreach($packages as $package)
                                    <option>Rs. {{$package->amount}} ( {{$package->duration}} Consultation)</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="department">Select Department:</label>
                            <select class="form-control" id="department">
                                @foreach($departments as $department)
                                <option>{{$department->title}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            Choose your preferred doctor (optional)
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="patient"> Choose Patient</label><br>
                            <input type="radio" class="radio" name="self" value="self"><label for="y">Self</label>
                            <input type="radio" class="radio" name="others" value="others"> <label
                                for="y">Others</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label>Patient Current Symptoms</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"
                                      class="form-control" name="message" id="message" placeholder="Your Current Symptoms"
                                      required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label>Patient Previous Medical History</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"
                                      class="form-control" name="message" id="message" placeholder="Your Previous Medical History"
                                      required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label>Patient Query</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"
                                      class="form-control" name="message" id="message" placeholder="Your Queries"
                                      required></textarea>
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="col">
                            <input type="submit" value="SUBMIT"
                                   class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0"
                                   data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection