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
                    <h1 class="font-weight-bold"> Registration Page</h1>

                </div>
            </div>
        </div>
    </section>

<div class="failed">

</div>

    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
    @endif
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="bg-primary rounded p-5">
                        <h2 class="text-color-light font-weight-bold text-4 mb-4">Patient  Registration</h2>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form  id="patientRegister" method="post" enctype="multipart/form-data">
                            {!! csrf_field(); !!}
                            <div class="form-row">
                                <div class="form-group col mb-2">
                                    <label class="text-color-light-2" >NAME</label>
                                    <input type="text" value="{{ old('name') }}" maxlength="100"
                                           class="form-control bg-light rounded border-0 text-1" name="name"
                                           id="name" required>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col">
                                    <label class="text-color-light-2" for="email">EMAIL</label>
                                    <input type="email"  value="{{ old('email') }}"
                                           class="form-control bg-light rounded border-0 text-1" name="email"
                                           id="email" required>
                                </div>
                                <div class="form-group col">
                                    <label class="text-color-light-2" for="password">Password</label>
                                    <input type="password" value=""
                                           class="form-control bg-light rounded border-0 text-1" name="password"
                                           id="password" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" for="address">ADDRESS</label>
                                    <input type="text" value="{{ old('address') }}"
                                           class="form-control bg-light rounded border-0 text-1" name="address"
                                           id="address" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-color-light-2" for="phone">PHONE</label>
                                    <input type="text" value="{{ old('phone') }}"
                                           class="form-control bg-light rounded border-0 text-1" name="phone"
                                           id="phone" >
                                </div>
                            </div>
<!--                            <div class="form-row">-->
<!--                                <div class="form-group col-md-6">-->
<!--                                    <label class="text-color-light-2">COUNTRY</label>-->
<!--                                    <select id="country" name="country" class="form-control"></select>-->
<!--                                </div>-->
<!--                                <div class="form-group col-md-6">-->
<!--                                    <label class="text-color-light-2" for="dob">DOB</label>-->
<!--                                    <input type="text" value=""-->
<!--                                           class="form-control bg-light rounded border-0 text-1" name="dob"-->
<!--                                           id="date" required>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-row">-->
<!--                                <div class="form-group col-md-6">-->
<!--                                    <label class="text-color-light-2"  >GENDER</label>-->
<!--                                    <select name="gender" class="form-control" >-->
<!--                                        <optgroup label="--Select Gender--">-->
<!--                                        <option value="male">Male</option>-->
<!--                                        <option value="female">Female</option>-->
<!--                                        </optgroup>-->
<!--                                    </select>-->
<!--                                </div>-->
<!---->
<!--                                <div class="form-group col-md-6">-->
<!--                                    <label class="text-color-light-2" for="weight">WEIGHT</label>-->
<!--                                    <input type="number" value=""-->
<!--                                           class="form-control bg-light rounded border-0 text-1" name="weight"-->
<!--                                           id="weight" required>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-row">-->
<!--                                <div class="form-group col-md-6">-->
<!--                                    <label class="text-color-light-2" for="feet">FEET</label>-->
<!--                                    <input type="number" value=""-->
<!--                                           class="form-control bg-light rounded border-0 text-1" name="feet"-->
<!--                                           id="feet" required>-->
<!--                                </div>-->
<!---->
<!--                                <div class="form-group col-md-6">-->
<!--                                    <label class="text-color-light-2" for="inches">INCHES</label>-->
<!--                                    <input type="number" value=""-->
<!--                                           class="form-control bg-light rounded border-0 text-1" name="inches"-->
<!--                                           id="inches" required>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                                <div class="form-group col-md-6">-->
<!--                                    <label class="text-color-light-2" for="blood_group">BLOOD GROUP</label>-->
<!--                                    <select name="blood_group" class="form-control" >-->
<!--                                        <optgroup label="--Select Blood Group--">-->
<!--                                            <option value="a+">A+</option>-->
<!--                                            <option value="a-">A-</option>-->
<!--                                            <option value="b+">B+</option>-->
<!--                                            <option value="b-">B-</option>-->
<!--                                            <option value="ab+">AB+</option>-->
<!--                                            <option value="ab-">AB-</option>-->
<!--                                            <option value="o+">O+</option>-->
<!--                                            <option value="o-">O-</option>-->
<!--                                        </optgroup>-->
<!--                                    </select>-->
<!--                                </div>-->

                            <div class="form-row">

                            <div class="form-group col-md-6">
                                    <label class="text-color-light-2" >PROFILE IMAGE</label>
                                    <input type="file"
                                           class="form-control bg-light rounded border-0 text-1" name="image"
                                        >
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
               data: new FormData( this ),
               processData: false,
               contentType: false

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



@endsection