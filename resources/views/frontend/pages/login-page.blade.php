@extends('frontend/layout/layout')
@section('content')
<div role="main" class="main">
    <section class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">login/register</li>
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

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
                @endif
</div>
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation patient-login" data-appear-animation="fadeInRightShorter">
                    <div class="bg-primary rounded p-5">
                        <h2 class="text-color-light font-weight-bold text-4 mb-4">Patient Login / Registration</h2>

                        <form  action="{{route('patient.login')}}" id="patientLogin"  method="post">
                            {!! csrf_field(); !!}
                            <div class="form-row">
                                <div class="form-group col mb-2">
                                    <label class="text-color-light-2" for="email">EMAIL / PHONE</label>
                                    <input type="text" value="" maxlength="100" class="form-control bg-light rounded border-0 text-1" name="email" id="frmSignInEmail" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-light-2" for="password">PASSWORD</label>
                                    <input type="password" value="" class="form-control bg-light rounded border-0 text-1" name="password" id="password" required>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="form-group col">
                                    <div class="form-check checkbox-custom checkbox-custom-transparent checkbox-default">
                                        <input class="form-check-input" type="checkbox" id="frmSignInRemember">
                                        <label class="form-check-label text-color-light-2" for="frmSignInRemember">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me

                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col text-right">
                                    <a class="forgot-pw text-color-light-2 d-block" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col ">
                                    <a href="{{ url('/auth/facebook') }}" style="background-color: #3b5998" class="btn btn-light btn-outline btn-rounded font-weight-semibold btn-h-3 btn-v-3 text-0"><i class="fab fa-facebook-f" style="padding: 2px 0px; margin-right: 10px;" ></i>LOGIN WITH FACEBOOK</a>
                                </div>
                            </div><br>

                            <div class="row align-items-center">
                                <div class="col text-left">
                                    <button type="submit" class="submit-check btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">LOGIN</button>
                                    <a href="{{route('patient.index')}}" class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">  REGISTER</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6 appear-animation patient-login" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="border rounded h-100 p-5">
                        <h2 class="font-weight-bold text-4 mb-4">Pharmacist Login/Register</h2>

                        <form action="{{route('pharmacist.login')}}"  id="pharmacistLogin" method="post">
                            {!! csrf_field(); !!}
                            <div class="form-row">
                                <div class="form-group col mb-2">
                                    <label>EMAIL / PHONE</label>
                                    <input type="text" value="" maxlength="100" class="form-control bg-light-5 rounded border-0 text-1" name="email" required>
                                </div>
                            </div>
                            <div class="form-row mb-5">
                                <div class="form-group col-lg-12">
            <!-- <div class="form-row ">
            <div class="form-group col"> -->
                                    <label for="frmRegisterPassword">PASSWORD</label>
                                    <input type="password" value="" class="form-control bg-light-5 rounded border-0 text-1" name="password" id="frmRegisterPassword" required>
                                </div>

                            </div>
                            <div class="form-row mb-3">
                                {{--<div class="form-group col">--}}
                                    {{--<div class="form-check checkbox-custom checkbox-custom-transparent checkbox-default">--}}
                                        {{--<input class="form-check-input" type="checkbox" id="frmSignInRemember">--}}
                                        {{--<label class="form-check-label text-color-light-2" for="frmSignInRemember">--}}
                                            {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}

                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group col text-right">
                                    <a class="forgot-pw text-color-dark-2 d-block" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col text-left">
                                    <button type="submit" class=" submit-pharmacist-check btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold">LOGIN</button>

                                    <a href="{{route('pharmacist.index')}}" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold">REGISTER NOW</a>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection