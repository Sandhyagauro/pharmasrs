@extends('frontend/layout/layout')
@section('content')
@foreach($consultOnlineBanner->image as $image)
<section id="services" class="section section-background section-height-4 appear-animation" data-plugin-image-background
         data-plugin-options="{'imageUrl': '{{$image->file_data}}'}" data-appear-animation="fadeIn"
         data-appear-animation-duration="1s">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-12">
                <div class="overflow-hidden">
                </div>
                <div class="overflow-hidden">
                    <h2 class="banner-title font-weight-bold text-color-light mb-0 appear-animation"
                        data-appear-animation="maskUp"
                        data-appear-animation-delay="200">{{$consultOnlineBanner->title}}</h2>

                    <p class="text-color-light-2 text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter"
                       data-appear-animation-delay="400">
                        {!! html_entity_decode( $consultOnlineBanner->content) !!}
                    </p>
                </div>
            </div>
        </div>


    </div>
</section>
@endforeach
<section class="section section-height-4  more-about-us">
    <div class="container">
        <div class="row">
            @foreach($departments as $department)
            <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                 data-appear-animation-delay="200">
                <div class="card border-0">
                    <div class="card-body text-center p-2">
                        @if(Auth::check() && Auth::user()->hasRole(['patient','pharmacist']))
                        <a href="{{ url('prescription-list/'.$department->slug)}}">
                                                
                        @else
                        <a href="{{url('/login-page')}}" >

                        @endif


                            <div class="image-frame mb-4">
                                <img src="{{$department->image}}" class="img-fluid rounded-circle" alt="">
                            </div>

                            <h3 class="font-weight-bold text-4">{{$department->title}}</h3>
                            <p class="px-sm-5 px-md-0">{!! html_entity_decode(str_limit($department->content,80))
                                !!} </p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection