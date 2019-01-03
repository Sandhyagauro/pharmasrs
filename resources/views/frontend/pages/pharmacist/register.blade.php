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
                <h1 class="font-weight-bold">Registration Page</h1>

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
                    <h2 class="text-color-light font-weight-bold text-4 mb-4">Register Pharmacist / Assistant Pharmacist</h2>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{route('pharmacist.store')}}" method="post" enctype="multipart/form-data">
                        {!! csrf_field(); !!}
                        <div class="form-row">
                            <div class="form-group col mb-2">
                                <label class="text-color-light-2">NAME</label>
                                <input type="text" placeholder="Enter your Name" maxlength="100"
                                       class="form-control bg-light rounded border-0 text-1" value="{{ old('name') }}" name="name"
                                       id="name" required>
                            </div>
                            <div class="form-group col mb-2">
                                <label class="text-color-light-2">Email</label>
                                <input type="email" placeholder="Enter your Email" value="{{ old('email') }}" maxlength="100"
                                       class="form-control bg-light rounded border-0 text-1" name="email"
                                       required>
                            </div>
                            <div class="form-group col">
                                <label class="text-color-light-2">PASSWORD</label>
                                <input type="password" placeholder="Enter your Password" value=""
                                       class="form-control bg-light rounded border-0 text-1" name="password"
                                       required>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col">
                                <label class="text-color-light-2">Phone NUMBER</label>
                                <input type="string" placeholder="Enter your Phone Number" value="{{ old('phone') }}"
                                       class="form-control bg-light rounded border-0 text-1" name="phone"
                                       required>
                            </div>
                            <div class="form-group col">
                                <label class="text-color-light-2">NPC NUMBER</label>
                                <input type="text" placeholder="Enter your NPC Number" value="{{ old('nmc_number') }}"
                                       class="form-control bg-light rounded border-0 text-1" name="nmc_number"
                                       required>
                            </div>
                            <div class="form-group col">
                                <label class="text-color-light-2">QUALIFICATION</label>
                                <input type="text" placeholder="Enter your Qualification" value="{{ old('qualification') }}"
                                       class="form-control bg-light rounded border-0 text-1" name="qualification"
                                    >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="text-color-light-2">UNIVERSITY / BOARD</label>
                                <input type="text" placeholder="Enter University / Board name" value="{{ old('education') }}"
                                       class="form-control bg-light rounded border-0 text-1" name="education"
                                required>
                            </div>
                            <div class="form-group col">
                                <label class="text-color-light-2">PHARMACY / CLINIC / HOSPITAL NAME</label>
                                <input type="text" placeholder="Enter your Pharmacy / Clinic / Hospital name" value="{{ old('shop_name') }}"
                                       class="form-control bg-light rounded border-0 text-1" name="shop_name"
                                    >
                            </div>

                            <div class="form-group col">
                                <label class="text-color-light-2">PHARMACY / CLINIC / HOSPITAL ADDRESS</label>
                                <input type="text" placeholder="Enter your Pharmacy / Clinic / Hospital address" value="{{ old('shop_address') }}"
                                       class="form-control bg-light rounded border-0 text-1" name="shop_address"
                                    >
                            </div>
                        </div>

                        <div class="form-group col">
                            <label class="text-color-light-2">PROFILE IMAGE</label>
                            <input type="file" value=""
                                   class="form-control bg-light rounded border-0 text-1" name="image" required>
                        </div>
                        <div class="form-group col">
                            <label class="text-color-light-2">LICENSE IMAGE</label>
                            <input type="file" value=""
                                   class="form-control bg-light rounded border-0 text-1" name="license_front" required>
                        </div>
                        <div class="form-group col">
                            <label class="text-color-light-2">CITIZENSHIP IMAGE</label>
                            <input type="file" value=""
                                   class="form-control bg-light rounded border-0 text-1" name="citizenship_front" required>
                        </div>

                        <!--                            <div class="form-row">-->
                        <!--                                <div class="form-group col-md-6">-->
                        <!--                                    <label class="text-color-light-2" >SPECIALITY</label>-->
                        <!--                                    <input type="text" value=""-->
                        <!--                                           class="form-control bg-light rounded border-0 text-1" name="speciality"-->
                        <!--                                           required>-->
                        <!--                                </div>-->
                        <!---->
                        <!--                                <div class="form-group col-md-6">-->
                        <!--                                    <label class="text-color-light-2" >WEBSITE</label>-->
                        <!--                                    <input type="text" value=""-->
                        <!--                                           class="form-control bg-light rounded border-0 text-1" name="website"-->
                        <!--                                          >-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <!--                            <div class="form-row">-->
                        <!--                                <div class="form-group col-md-6">-->
                        <!--                                    <label class="text-color-light-2" >SHOP NUMBER</label>-->
                        <!--                                    <input type="text" value=""-->
                        <!--                                           class="form-control bg-light rounded border-0 text-1" name="shop_number"-->
                        <!--                                           >-->
                        <!--                                </div>-->
                        <!---->
                        <!--                                <div class="form-group col-md-6">-->
                        <!--                                    <label class="text-color-light-2" >SPECIALIZATION</label>-->
                        <!--                                    <input type="text" value=""-->
                        <!--                                           class="form-control bg-light rounded border-0 text-1" name="specialization"-->
                        <!--                                            >-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="form-row">-->
                        <!--                                <div class="form-group col-md-6">-->
                        <!--                                    <label class="text-color-light-2" >EXPERIENCE</label>-->
                        <!--                                    <input type="text" value=""-->
                        <!--                                           class="form-control bg-light rounded border-0 text-1" name="experience"-->
                        <!--                                           >-->
                        <!--                                </div>-->
                        <!---->
                        <!--                                <div class="form-group col-md-6">-->
                        <!--                                    <label class="text-color-light-2" >EDUCAITON</label>-->
                        <!--                                    <input type="text" value=""-->
                        <!--                                           class="form-control bg-light rounded border-0 text-1" name="education"-->
                        <!--                                            >-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="form-row">-->
                        <!--                                <div class="form-group col-md-6">-->
                        <!--                                    <label class="text-color-light-2" >RESEARCH JOURNALS</label>-->
                        <!--                                    <input type="text" value=""-->
                        <!--                                           class="form-control bg-light rounded border-0 text-1" name="journals"-->
                        <!--                                           >-->
                        <!--                                </div>-->
                        <!--                                <div class="form-group col-md-6">-->
                        <!--                                    <label class="text-color-light-2" >AWARDS AND RECOGNITION</label>-->
                        <!--                                    <input type="text" value=""-->
                        <!--                                           class="form-control bg-light rounded border-0 text-1" name="awards"-->
                        <!--                                           >-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="form-row">-->
                        <!--                                <div class="form-group col-md-6">-->
                        <!--                                    <label class="text-color-light-2" >MEMBERSHIPS</label>-->
                        <!--                                    <input type="text" value=""-->
                        <!--                                           class="form-control bg-light rounded border-0 text-1" name="memberships"-->
                        <!--                                          >-->
                        <!--                                </div>-->
                        <!---->
                        <!--                                <div class="form-group col-md-6">-->
                        <!--                                    <label class="text-color-light-2" >PROFILE IMAGE</label>-->
                        <!--                                    <input type="file" value=""-->
                        <!--                                           class="form-control bg-light rounded border-0 text-1" name="image"-->
                        <!--                                        >-->
                        <!--                                </div>-->
                        <!--                            </div>-->

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
    $(document).ready(function () {

    });
</script>
<script src="{{('assets/js/countries.js')}}"></script>
<script language="javascript">
    populateCountries("country");
</script>


@endsection



