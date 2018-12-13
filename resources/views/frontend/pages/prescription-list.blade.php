@extends('frontend/layout/layout')
@section('content')

<section class="section">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">Prescription
                    Lists</h2>

                <!--search-->

                <div class="d-flex justify-content-center h-50">
                    <div class="searchbar">
                        <input type="hidden" name="category_id" value="{{$category->id}}">
                        <input type="text" placeholder="Search" class="search_input" id="search" name="search">
                        <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                        <div class="search_list" id="search_list">
                        </div>
                    </div>
                </div>




                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter"
                   data-appear-animation-delay="200"></p>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-lg-12 appear-animation" data-appear-animation="fadeInRightShorter">
                @foreach($prescriptions as $prescription)
                <a href="{{route('prescription-list.detail',$prescription->id)}}">
                <section class="section section-height-1 mt-2 mb-2" required>
                    <div class="container">
                    <div class="row">
                     <div class="pharmacist-list col-md-12">
                        <div class="col-md-2">
                             <h4 class="font-weight-semibold mb-0">Posted By :
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
                     </div>
                    </div>
                </section>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
