@extends('frontend/layout/layout')
@section('content')

<div class="container">
    <div class="animated fadeIn pre-detail">
        <div class="card">
            <div class="card-body">
                <div class="pre-title"><h4>Prespription Details</h4></div>
                <div class="row bd-example2">
                    <div class="col-12">
                        <div id="spy-example2" data-spy="scroll" data-target="#list-example" data-offset="0" style="overflow: auto">
                           <div class="col-md-4">
                            <h4 id="list-item-1">Name</h4>
                            <p>

                                - {{$post->name}}
                            </p>
                            </div>
                            <div class="col-md-4">
                            <h4 id="list-item-2">Email</h4>
                            <p>
                                - {{$post->email}}
                            </p>
                            </div>
                            <div class="col-md-4">
                            <h4 id="list-item-3">Category Department</h4>
                            <p>
                                - {{$post->title}}
                            </p>
                            </div>

                            <div class="col-md-4">
                            <h4 id="list-item-4">Patient type</h4>
                            <p>
                                - {{$post->patient}}
                            </p>
                            </div>
                            <div class="col-md-4">
                            <h4 id="list-item-5">Patient Query</h4>
                            <p>
                                - {{$post->patient_query}}
                            </p>
                            </div>
                            <div class="col-md-12 pre-images">
                                <div class="pre-title"><h4>Prespription Screen Shots</h4></div>
                                <div class="row">

                                    <div class="col-md-2">
                                        <a href="/img/aboutusbanner.jpg" data-toggle="lightbox" data-lightbox="image-1" data-title=" Prespription 1" data-gallery="example-gallery"> <img src="/img/aboutusbanner.jpg"></a>
                                      
                                    </div>
                                    <div class="col-md-2">
                                        <a href="/img/aboutusbanner.jpg" data-toggle="lightbox" data-lightbox="image-1" data-title="My caption" data-gallery="example-gallery"> <img src="/img/aboutusbanner.jpg"></a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="/img/aboutusbanner.jpg" data-toggle="lightbox" data-lightbox="image-1" data-title="My Prespription" data-gallery="example-gallery"> <img src="/img/aboutusbanner.jpg"></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection