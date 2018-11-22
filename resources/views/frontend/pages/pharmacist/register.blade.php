@extends('frontend/layout/layout')
@section('content')
<div role="main" class="main">
    <section class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">Login / Register</h1>

                </div>
            </div>
        </div>
    </section>
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
    @endif
<div class="failed">

</div>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="bg-primary rounded p-5">
                        <h2 class="text-color-light font-weight-bold text-4 mb-4">Pharmacist Registration</h2>

                        <form  action="{{route('pharmacist.store')}}" method="post">
                            {!! csrf_field(); !!}
                            <div class="form-row">
                                <div class="form-group col mb-2">
                                    <label class="text-color-light-2" >NAME</label>
                                    <input type="text" value="" maxlength="100"
                                           class="form-control bg-light rounded border-0 text-1" name="name"
                                           id="name" required>
                                </div>
                                <div class="form-group col mb-2">
                                    <label class="text-color-light-2" >Email</label>
                                    <input type="email" value="" maxlength="100"
                                           class="form-control bg-light rounded border-0 text-1" name="email"
                                          required>
                                </div>
                                <div class="form-group col">
                                    <label class="text-color-light-2" >PASSWORD</label>
                                    <input type="password" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="password"
                                            required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-light-2" > Select Category Department</label>
                                    <select  name="category_department_id" class="form-control">
                                        @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label class="text-color-light-2" >NMC NUMBER</label>
                                    <input type="number" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="nmc_number"
                                           required>
                                </div>
                                <div class="form-group col">
                                    <label class="text-color-light-2" >QUALIFICATION</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="qualification"
                                           required>
                                </div>P
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >SPECIALITY</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="speciality"
                                           required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >WEBSITE</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="website"
                                          required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >SHOP NAME</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="shop_name"
                                            required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >SHOP ADDRESS</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="shop_address"
                                           required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >SHOP NUMBER</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="shop_number"
                                           required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >SPECIALIZATION</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="specialization"
                                            required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >EXPERIENCE</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="experience"
                                           required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >EDUCAITON</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="education"
                                            required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >RESEARCH JOURNALS</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="journals"
                                           required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >AWARDS AND RECOGNITION</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="awards"
                                           required>
                                </div>
                            </div>
                            <div class="form-row">


                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >MEMBERSHIPS</label>
                                    <input type="text" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="memberships"
                                          required>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col text-right">
                                    <button type="submit"
                                            class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<!--                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter"-->
<!--                     data-appear-animation-delay="200">-->
<!--                    <div class="border rounded h-100 p-5">-->
<!--                        <span class="top-sub-title text-color-primary">DON'T HAVE AN ACCOUNT?</span>-->
<!---->
<!--                        <h2 class="font-weight-bold text-4 mb-4">Register Now!</h2>-->
<!---->
<!--                        <form action="/" id="frmRegister" method="post">-->
<!--                            <div class="form-row">-->
<!--                                <div class="form-group col mb-2">-->
<!--                                    <label for="frmRegisterEmail">EMAIL / USERNAME</label>-->
<!--                                    <input type="email" value="" maxlength="100"-->
<!--                                           class="form-control bg-light-5 rounded border-0 text-1" name="email"-->
<!--                                           id="frmRegisterEmail" required>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-row mb-5">-->
<!--                                <div class="form-group col-lg-6">-->
<!--                                    <label for="frmRegisterPassword">PASSWORD</label>-->
<!--                                    <input type="password" value=""-->
<!--                                           class="form-control bg-light-5 rounded border-0 text-1" name="password"-->
<!--                                           id="frmRegisterPassword" required>-->
<!--                                </div>-->
<!--                                <div class="form-group col-lg-6">-->
<!--                                    <label for="frmRegisterPassword2">RE-ENTER PASSWORD</label>-->
<!--                                    <input type="password" value=""-->
<!--                                           class="form-control bg-light-5 rounded border-0 text-1" name="password2"-->
<!--                                           id="frmRegisterPassword2" required>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="row align-items-center">-->
<!--                                <div class="col text-right">-->
<!--                                    <button type="submit"-->
<!--                                            class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold">-->
<!--                                        REGISTER NOW-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </section>
</div>

<script src="{{url('node_modules/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
       $('#patientRegister').on('submit',function(e){
           e.preventDefault();
           $.ajax({
               type: "POST",
               url: '{{route('patient.store')}}',
               data:$("#patientRegister").serialize(),
               success: function (response) {
               if(response.success == true)
                location.href=response.data.route;
               else
                $('.failed').html('Something went wrong');

           }
           })
       });


    });

</script>
<script src="{{('assets/js/countries.js')}}"></script>
<script language="javascript">
    populateCountries("country"); // first parameter is id of country drop-down and second parameter is id of state drop-down
</script>


@endsection