@extends('frontend/layout/layout')
@section('content')
<div role="main" class="main">

<section class="page-header parallax page-header-text-light overlay overlay-color-primary overlay-show overlay-op-9 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{url('img/medical/carousel/banner2.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-left">
                <h1 class="font-weight-bold">News And Articles</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 pb-2">
                <a href="{{url('/blog-detail')}}">
                    <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': '{{url('img/medical/blog/team.jpg')}}'}">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-4 mb-1">Amazing Space</h3>
                            <p>
                                <i class="far fa-clock mt-1 text-color-primary"></i>
                                <time class="font-tertiary text-1" datetime="2018-01-16">Jan 17, 2018</time>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p class="text-color-dark font-weight-semibold mb-0">
                                <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />
                                by Bob Doe
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 pb-2">
                <a href="{{url('/blog-detail')}}">
                    <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': '{{url('img/medical/blog/team.jpg')}}'}">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-4 mb-1">Getting Ready</h3>
                            <p>
                                <i class="far fa-clock mt-1 text-color-primary"></i>
                                <time class="font-tertiary text-1" datetime="2018-01-15">Jan 16, 2018</time>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p class="text-color-dark font-weight-semibold mb-0">
                                <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />
                                by John Doe
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 pb-2">
                <a href="{{url('/blog-detail')}}">
                    <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': '{{url('img/medical/blog/team.jpg')}}'}">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-4 mb-1">Cool Hobbies</h3>
                            <p>
                                <i class="far fa-clock mt-1 text-color-primary"></i>
                                <time class="font-tertiary text-1" datetime="2018-01-14">Jan 15, 2018</time>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p class="text-color-dark font-weight-semibold mb-0">
                                <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />
                                by Jessica Doe
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 pb-2">
                <a href="{{url('/blog-detail')}}">
                    <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': '{{url('img/medical/blog/team.jpg')}}'}">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-4 mb-1">Work Machines</h3>
                            <p>
                                <i class="far fa-clock mt-1 text-color-primary"></i>
                                <time class="font-tertiary text-1" datetime="2018-01-13">Jan 14, 2018</time>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p class="text-color-dark font-weight-semibold mb-0">
                                <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />
                                by Alice Doe
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 pb-2">
                <a href="{{url('/blog-detail')}}">
                    <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': '{{url('img/medical/blog/team.jpg')}}'}">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-4 mb-1">Breaking the Rules</h3>
                            <p>
                                <i class="far fa-clock mt-1 text-color-primary"></i>
                                <time class="font-tertiary text-1" datetime="2018-01-12">Jan 12, 2018</time>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p class="text-color-dark font-weight-semibold mb-0">
                                <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />
                                by Bob Doe
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 pb-2">
                <a href="{{url('/blog-detail')}}">
                    <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': '{{url('img/medical/blog/team.jpg')}}'}">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-4 mb-1">Ways to Start</h3>
                            <p>
                                <i class="far fa-clock mt-1 text-color-primary"></i>
                                <time class="font-tertiary text-1" datetime="2018-01-11">Jan 11, 2018</time>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p class="text-color-dark font-weight-semibold mb-0">
                                <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />
                                by Bob Doe
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 pb-2">
                <a href="{{url('/blog-detail')}}">
                    <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': '{{url('img/medical/blog/team.jpg')}}'}">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-4 mb-1">Vintage Culture</h3>
                            <p>
                                <i class="far fa-clock mt-1 text-color-primary"></i>
                                <time class="font-tertiary text-1" datetime="2018-01-10">Jan 10, 2018</time>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p class="text-color-dark font-weight-semibold mb-0">
                                <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />
                                by John Doe
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 pb-2">
                <a href="{{url('/blog-detail')}}">
                    <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': '{{url('img/medical/blog/team.jpg')}}'}">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-4 mb-1">Meet Our CEO</h3>
                            <p>
                                <i class="far fa-clock mt-1 text-color-primary"></i>
                                <time class="font-tertiary text-1" datetime="2018-01-05">Jan 5, 2018</time>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p class="text-color-dark font-weight-semibold mb-0">
                                <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />
                                by Jessica Doe
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <hr class="mt-5 mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto mb-3 mb-sm-0">
                <span>Showing 1-9 of 60 results</span>
            </div>
            <div class="col-auto">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link prev" href="#" aria-label="Previous">
                                <span><i class="fas fa-angle-left" aria-label="Previous"></i></span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">...</li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                            <a class="page-link next" href="#" aria-label="Next">
                                <span><i class="fas fa-angle-right" aria-label="Next"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

</div>
@endsection