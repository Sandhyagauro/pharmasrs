@extends('frontend/layout/layout')
@section('content')


<div class="container">
<div class="row">
    <aside class="sidebar col-md-4 col-lg-3 order-2 order-md-1">

        <div class="card">
            <div class="accordion-body collapse show" role="tabpanel">
                <div class="card-body pt-4">
                    <div class="row mx-0 mt-2">
                        <div class="col-12 mb-2">
                            <div class="icon-box icon-box-style-1 flex-md-column flex-xl-row">

                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-2 mb-2">{{$user->name}}</h3>
                                    </div>
                                    <h3 class="font-weight-bold text-2 mb-2">{{$user->email}}</h3>

                                    <a href="{{route('patient.edit',$user->id)}}">
                                        <h3 class="font-weight-bold text-2 mb-2">Edit Profile</h3>
                                    </a>
                                    <h3 class="font-weight-bold text-2 mb-2">Logout</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="icon-box icon-box-style-1 flex-md-column flex-xl-row">
                                <div class="icon-box-icon mb-md-2 mb-xl-0">
                                    <i class="lnr lnr-apartment text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-2 mb-2">Address</h3>
                                    </div>
                                    <p class="text-1">1234 Street Name, City Name, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="icon-box icon-box-style-1 flex-md-column flex-xl-row">
                                <div class="icon-box-icon icon-box-icon-no-top mb-md-2 mb-xl-0">
                                    <i class="lnr lnr-envelope text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-2 mb-2">Email Address</h3>
                                    </div>
                                    <p class="text-1"><a href="mailto:you@domain.com">you@domain.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="icon-box icon-box-style-1 flex-md-column flex-xl-row">
                                <div class="icon-box-icon mb-md-2 mb-xl-0">
                                    <i class="lnr lnr-phone-handset text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-2 mb-2">Phone Number</h3>
                                    </div>
                                    <p class="text-1"><a href="tel:+1234567890">(123) 456-7890</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</aside>
<div class="col-md-8 col-lg-9 order-1 order-md-2 mb-5 mb-md-0">
<div class="sort-destination-loader sort-destination-loader-showing">
<ul class="portfolio-list portfolio-list-style-2 sort-destination" data-sort-id="portfolio">

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item brands">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/generic/project-1.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">EZ Card</a>
        </h2>
        <span class="text-uppercase text-0">brands</span>
    </div>
</li>

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item design">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/photos/project-2.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">Fashion Model</a>
        </h2>
        <span class="text-uppercase text-0">design</span>
    </div>
</li>

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item web">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/generic/project-3.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">Style Bag</a>
        </h2>
        <span class="text-uppercase text-0">web</span>
    </div>
</li>

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item web">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/photos/project-3.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">Shoes EZ</a>
        </h2>
        <span class="text-uppercase text-0">web</span>
    </div>
</li>

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item ads">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/generic/project-4.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">Sport Watch</a>
        </h2>
        <span class="text-uppercase text-0">ads</span>
    </div>
</li>

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item design">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/photos/project-6.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">Tattoo Show</a>
        </h2>
        <span class="text-uppercase text-0">design</span>
    </div>
</li>

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item ads">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/photos/project-12.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">Mobile Tech</a>
        </h2>
        <span class="text-uppercase text-0">ads</span>
    </div>
</li>

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item design">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/generic/project-6.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">EZ Book</a>
        </h2>
        <span class="text-uppercase text-0">design</span>
    </div>
</li>

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item web">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/generic/project-7.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">Laptop Concept</a>
        </h2>
        <span class="text-uppercase text-0">web</span>
    </div>
</li>

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item brands">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/photos/project-5.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">Pink Ad</a>
        </h2>
        <span class="text-uppercase text-0">brands</span>
    </div>
</li>

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item ads">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/generic/project-8.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">Shirt Box</a>
        </h2>
        <span class="text-uppercase text-0">ads</span>
    </div>
</li>

<li class="col-sm-6 col-lg-4 p-0 mb-3 isotope-item web">
    <div class="portfolio-item hover-effect-3d text-center">
        <a href="portfolio-detail-1.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
													<span class="image-frame-wrapper">
														<img src="img/projects/photos/project-7.jpg" class="img-fluid"
                                                             alt="">
														<span class="image-frame-inner-border"></span>
														<span
                                                            class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
														</span>
													</span>
												</span>
        </a>

        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="portfolio-detail-1.html" class="link-color-dark">Montaing Woman</a>
        </h2>
        <span class="text-uppercase text-0">web</span>
    </div>
</li>
</ul>
</div>
</div>
</div>
</div>

</div>
@endsection