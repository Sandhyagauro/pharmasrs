@extends('frontend/layout/layout')
@section('content')


<section class="section">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">Prescription
                    Lists</h2>

                <!--search-->
                <input type="text" class="form-controller" id="search" name="search">

<!--                <div class="row">-->
<!--                    <div class="col-md-4 col-md-offset-8">-->
<!--                        <form id="search" >-->
<!--                            {!! csrf_field() !!}-->
<!--                            <div class="input-group" >-->
<!--                                <input type="text" class="form-control" name="search"-->
<!--                                       placeholder="Search">-->
<!--                        <span class="input-group-btn">-->
<!--            <button type="submit" class="btn btn-default">-->
<!--                <span class="glyphicon glyphicon-search"></span>-->
<!--            </button>-->
<!--        </span>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->


                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter"
                   data-appear-animation-delay="200"></p>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-lg-12 appear-animation" data-appear-animation="fadeInRightShorter">
                @foreach($prescriptions as $prescription)
                <section class="section section-height-1 bg-light-5 mt-2 mb-2" required>
                    <div class="row pharmacist-list">
                        <div class="col-md-2">
                            Posted By :
                            <h4 class="font-weight-semibold mb-0">
                                <label>{{$prescription->name}}</label>
                            </h4>

                            <p class="font-weight-light mb-0">Posted On
                                {{$prescription->created_at->format('d/m/Y')}}</p>
                        </div>
                        @if($prescription->image->count() > 0)
                        @foreach($prescription->image as $img)
                        <div class="col-md-1" style="margin: 3px"><img src="{{asset($img->file_data)}}"
                                                                       style="height: 80px; width: 80px"></div>
                        @endforeach
                        @endif
                    </div>
                </section>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
