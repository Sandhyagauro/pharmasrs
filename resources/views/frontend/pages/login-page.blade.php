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
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="bg-primary rounded p-5">
                        <h2 class="text-color-light font-weight-bold text-4 mb-4">Patient Login / Registration</h2>
                        <a href="{{url('auth/facebook')}}">Login in with Facebook</a>
                        <form  action="{{route('patient.login')}}"  method="post">
                            {!! csrf_field(); !!}
                            <div class="form-row">
                                <div class="form-group col mb-2">
                                    <label class="text-color-light-2" for="email">EMAIL / USERNAME</label>
                                    <input type="email" value="" maxlength="100" class="form-control bg-light rounded border-0 text-1" name="email" id="frmSignInEmail" required>
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
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col text-right">
                                    <a href="#" class="forgot-pw text-color-light-2 d-block">Forgot password?</a>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">LOGIN</button>
                                    <a href="{{route('patient.index')}}" class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">  REGISTER</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="border rounded h-100 p-5">
                        <h2 class="font-weight-bold text-4 mb-4">Pharmacist Login/Register</h2>

                        <form action="{{route('pharmacist.login')}}"  method="post">
                            {!! csrf_field(); !!}
                            <div class="form-row">
                                <div class="form-group col mb-2">
                                    <label>EMAIL / USERNAME</label>
                                    <input type="email" value="" maxlength="100" class="form-control bg-light-5 rounded border-0 text-1" name="email" required>
                                </div>
                            </div>
                            <div class="form-row mb-5">
                                <div class="form-group col-lg-6">
                                    <label for="frmRegisterPassword">PASSWORD</label>
                                    <input type="password" value="" class="form-control bg-light-5 rounded border-0 text-1" name="password" id="frmRegisterPassword" required>
                                </div>

                            </div>
                            <div class="row align-items-center">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold">LOGIN</button>

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