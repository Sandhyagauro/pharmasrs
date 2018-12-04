@extends('frontend/layout/layout')
@section('content')




<section class="section">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">Prescription Lists</h2>

                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter"
                   data-appear-animation-delay="200">                </p>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-lg-12 appear-animation" data-appear-animation="fadeInRightShorter">
                @foreach($prescriptions as $prescription)

                <section class="section section-height-1 bg-light-5 mt-2 mb-2" required>
                    <div class="row pharmacist-list">

                        @if($prescription->image->count() > 0)
                        @foreach($prescription->image as $img)
                        <div class="col-md-1" style="margin: 3px"><img src="{{asset($img->file_data)}}" style="height: 80px; width: 80px"></div>
                        @endforeach
                        @endif

                        <div class="col-md-5"><h4 class="font-weight-semibold mb-0">

                                <label>s</label>
                            </h4>
                            <p class="font-weight-light mb-0">{{$prescription->id}}</p>
                        </div>
                    </div>
                </section>
                @endforeach

            </div>
        </div>
    </div>
</section>

@endsection