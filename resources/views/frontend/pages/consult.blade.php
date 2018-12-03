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

                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                @endif

                <form class="contact-form form-style-2 " action="{{route('counsel.store')}}" method="POST">
                    {!! csrf_field(); !!}
                    <!--                    <div class="contact-form-success alert alert-success d-none">-->
                    <!--                        <strong>Success!</strong> Your message has been sent to us.-->
                    <!--                    </div>-->
                    <!--                    <div class="contact-form-error alert alert-danger d-none">-->
                    <!--                        <strong>Error!</strong> There was an error sending your message.-->
                    <!--                        <span class="mail-error-message d-block"></span>-->
                    <!--                    </div>-->
                    <!--                    <div class="form-row">-->
                    <!--                        <div class="form-group col-md-12">-->
                    <!--                            <div class="form-group">-->
                    <!--                                <label for="package">Select Package:</label>-->
                    <!--                                <select class="form-control" name="package_id">-->
                    <!--                                    @foreach($packages as $package)-->
                    <!--                                    <option value="{{$package->id}}">Rs. {{$package->amount}} ( {{$package->duration}}-->
                    <!--                                        Consultation)-->
                    <!--                                    </option>-->
                    <!--                                    @endforeach-->
                    <!---->
                    <!--                                </select>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Select Category Department:</label>
                            <select class="form-control" id="category_department_id" name="category_department_id"
                                    required>
                                @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--                    <div class="form-row">-->
                    <!--                        <div class="form-group col-md-12">-->
                    <!--                            <label for="department"> Choose your preferred Pharmacist</label><br>-->
                    <!--                            <div class="pharmacist_list">-->
                    <!---->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="form-row">
                        <div class="form-group col">
                            <label> Choose Patient</label>
                            <select name="patient" class="form-control" id="choose_patient">
                                <option value="self">Self</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="patient_section">
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Patient Name</label>
                                <input
                                    class="form-control" name="patient_name" placeholder="Patient Name"
                                    >
                            </div>
                            <div class="form-group col">
                                <label>Patient Age</label>
                                <input type="number"
                                       class="form-control" name="patient_age" placeholder="Patient Age">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Patient Gender</label>
                                <select name="patient_gender" class="form-control">
                                    <optgroup label="--Select Gender--">
                                        <option value="">None</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Others</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Patient Relation</label>
                                <input maxlength="5000" rows="5"
                                       class="form-control" name="patient_relation" placeholder="Patient Relation">
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="form-row">-->
                    <!--                        <div class="form-group col">-->
                    <!--                            <label>Patient Current Symptoms</label>-->
                    <!--                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"-->
                    <!--                                      class="form-control" name="current_symptoms" placeholder="Your Current Symptoms"-->
                    <!--                                ></textarea>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="form-row">-->
                    <!--                        <div class="form-group col">-->
                    <!--                            <label>Patient Previous Medical History</label>-->
                    <!--                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"-->
                    <!--                                      class="form-control" name="medical_history"-->
                    <!--                                      placeholder="Your Previous Medical History"-->
                    <!--                                ></textarea>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="form-row">
                        <div class="form-group col">
                            <label>Patient Query</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"
                                      class="form-control" name="patient_query" placeholder="Your Queries"
                                >

                                </textarea>
                        </div>
                    </div>

                    <div class="form-row ">
                        <div class="form-group col">
                                <div id="myDropZone" class="form-control " style="padding: 100px;">
                                </div>
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <div class="col">
                            <input type="submit" value="REQUEST ONLINE COUNSELING"
                                   class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0"
                                   data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{url('node_modules/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript">
    //    var category_department_id = $("#category_department_id").val();
    //    pharmacist_list(category_department_id);
    //
    //    function pharmacist_list(category_department_id){
    //        $.ajax({
    //            type: "GET",
    //            url: "{{route('counsel.pharmacist_list')}}",
    //            data: {
    //                'category_department_id': category_department_id
    //            },
    //            success: function (response) {
    //                console.log(response);
    //                $('.pharmacist_list').html(response.data.pharmacist_list_html);
    //
    //            }
    //        })
    //    }
    $(document).ready(function () {

        $("div#myDropZone").dropzone({
            url: "/consult"
        });


        $('.patient_section').hide();
        $('#choose_patient').click(function () {
            if ($('#choose_patient').val() == 'self') {
                $('.patient_section').hide();
            } else {
                $('.patient_section').show();
            }
        });

//        $('#category_department_id').click(function () {
//            var category_department_id = $("#category_department_id").val();
//            pharmacist_list(category_department_id);
//        });


    })
</script>
@endsection