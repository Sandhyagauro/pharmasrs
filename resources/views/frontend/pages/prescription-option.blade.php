@extends('frontend/layout/layout')
@section('content')

<div class="container mb-5 pb-3 pt-3">
    <div class="row justify-content-center mb-5">
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="card bg-primary-2 border-0 ">
                <div class="card-body p-5">
                    <h3 class="font-weight-bold text-color-light mb-3">Upload Prescription</h3>
                    <p class="text-color-light opacity-7 mb-0">Confusion?? Get the best advice here uploading your prescription.</p>
                    <a href="{{url('/consult')}}" class="btn btn-rounded btn-dark btn-h-4 btn-v-3 mt-4">Upload Prescription</a>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="card card-style-1 ">
                <div class="card-body p-5">
                    <h4 class="font-weight-bold mb-3">View Prescriptions</h4>

                    <p class="mb-0">Want to know more about our prescription. View Here</p>
                    <a href="{{url('/prescription-categories')}}" class="btn btn-rounded btn-dark btn-h-4 btn-v-3 mt-4">View Prescription</a>
                </div>
            </div>

        </div>


    </div>

</div>
@endsection