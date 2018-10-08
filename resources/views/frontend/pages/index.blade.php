@extends('frontend/layout/layout')
@section('content')


<div role="main" class="main">

<div class="slider-container slider-container-height-600 rev_slider_wrapper">
    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [600,600,600,600], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': true, 'style': 'slider-arrows-style-1 slider-arrows-dark' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
        <ul>
            <li data-transition="fade">
                <img src="{{url('img/medical/carousel/banner2.jpg')}}"
                     alt=""
                     data-bgposition="center center"
                     data-bgfit="cover"
                     data-bgrepeat="no-repeat"
                     class="rev-slidebg">

                <div class="tp-caption text-color-light font-primary font-weight-bold"
                     data-x="center" data-hoffset="['-255','-255','-255','-116']"
                     data-y="center" data-voffset="['-95','-95','-95','-90']"
                     data-start="1900"
                     data-fontsize="['28','28','28','28']"
                     data-transform_in="y:[100%];opacity:0;s:1000;"
                     data-transform_out="y:[100%];opacity:0;s:1000;">FULL SERVICE</div>

                <div class="tp-caption text-color-light font-primary font-weight-bold"
                     data-frames='[{"delay":800,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                     data-x="center"
                     data-y="center" data-voffset="['-40','-40','-40','-40']"
                     data-fontsize="['77','77','77','47']"
                     data-lineheight="['60','60','60','41']">PHARMA SRS</div>

                <div class="tp-caption text-color-light font-primary font-weight-thin"
                     data-x="center" data-hoffset="['235','235','235','92']"
                     data-y="center" data-voffset="['15','15','15','10']"
                     data-start="1900"
                     data-fontsize="['28','28','28','28']"
                     data-transform_in="y:[-100%];opacity:0;s:1000;"
                     data-transform_out="y:[-100%];opacity:0;s:1000;">Quality Healthcare</div>

            </li>
            <li data-transition="fade">
                <img src="{{url('img/medical/carousel/banner1.jpg')}}"
                     alt=""
                     data-bgposition="center center"
                     data-bgfit="cover"
                     data-bgrepeat="no-repeat"
                     class="rev-slidebg">

                <div class="tp-caption text-color-dark font-primary font-weight-bold"
                     data-x="['left','left','left','30']"
                     data-y="center" data-voffset="['-95','-95','-95','-90']"
                     data-start="1900"
                     data-fontsize="['28','28','28','28']"
                     data-transform_in="y:[100%];opacity:0;s:1000;"
                     data-transform_out="y:[100%];opacity:0;s:1000;">YOU CAN TRUST</div>

                <div class="tp-caption text-color-dark font-primary font-weight-bold"
                     data-frames='[{"delay":800,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                     data-x="['left','left','left','30']"
                     data-y="center" data-voffset="['-40','-40','-40','-40']"
                     data-fontsize="['77','77','77','47']"
                     data-lineheight="['60','60','60','41']">PHARMA SRS</div>

                <div class="tp-caption text-color-dark font-primary font-weight-thin"
                     data-x="right" data-hoffset="['578','395','155','167']"
                     data-y="center" data-voffset="['15','15','15','10']"
                     data-start="1900"
                     data-fontsize="['28','28','28','28']"
                     data-transform_in="y:[-100%];opacity:0;s:1000;"
                     data-transform_out="y:[-100%];opacity:0;s:1000;">High Quality</div>

            </li>
        </ul>
    </div>
</div>
<section class="section section-content-pull-top py-0">
    <div class="container custom-max-width-1">
        <div class="row align-items-stretch align-items-lg-center justify-content-center">
            <div class="col-md-6 col-lg-4 p-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                <div class="card bg-primary border-0 min-height-200 h-100 py-2">
                    <div class="card-body text-center text-lg-right p-4 d-flex flex-column justify-content-center">
                        <div class="icon-box icon-box-reverse icon-box-style-1 align-items-center justify-content-center justify-content-lg-end mb-4 pb-2">
                            <div class="icon-box-icon">
                                <img width="45" src="{{url('img/medical/icons/emergency.svg')}}" alt="" data-icon data-plugin-options="{'color': '#FFF', 'animated': true, 'delay': 600}" />
                            </div>
                            <div class="icon-box-info">
                                <div class="icon-box-info-title">
                                    <span class="icon-box-sub-title text-color-light">HAVE AN</span>
                                    <h2 class="text-color-light font-weight-semibold text-4 line-height-1 mb-0">EMERGENCY?</h2>
                                </div>
                            </div>
                        </div>
                        <a href="tel:+1234567890" class="text-color-light font-primary text-7">(123) 456-7890</a>
                        <p class="text-color-light mb-0 mt-2">Lorem ipsum dolor sit amet, consectetu</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 z-index-1 p-0 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="card bg-dark-2 border-0">
                    <div class="card-body text-center px-4 py-5">
                        <div class="icon-box icon-box-style-1 align-items-center justify-content-center mb-4 pb-2">
                            <div class="icon-box-icon pt-1">
                                <img width="45" src="{{url('img/medical/icons/appointment.svg')}}" alt="" data-icon data-plugin-options="{'color': '#FFF', 'animated': true, 'delay': 600}" />
                            </div>
                            <div class="icon-box-info text-left">
                                <div class="icon-box-info-title">
                                    <span class="icon-box-sub-title text-color-light">MAKE AN</span>
                                    <h2 class="text-color-light font-weight-semibold text-4 line-height-1 mb-0">Appointment</h2>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-dark bg-dark-3 btn-rounded btn-v-4 btn-h-3 font-weight-semibold mb-3">DOCTORS TIMETABLE</a>
                        <p class="text-color-light-3 mb-0">Lorem ipsum dolor sit amet, consectetu</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-4 p-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                <div class="card bg-primary border-0 min-height-200 py-2">
                    <div class="card-body p-4">
                        <div class="icon-box icon-box-style-1 align-items-center justify-content-center justify-content-lg-start mb-4 pb-2">
                            <div class="icon-box-icon pt-2">
                                <img width="45" src="{{url('img/medical/icons/opening-hours.svg')}}" alt="" data-icon data-plugin-options="{'color': '#FFF', 'animated': true, 'delay': 600}" />
                            </div>
                            <div class="icon-box-info">
                                <div class="icon-box-info-title">
                                    <span class="icon-box-sub-title text-color-light">OPENING</span>
                                    <h2 class="text-color-light font-weight-semibold text-4 line-height-1 mb-0">Hours</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <span class="text-color-light d-block">MON - SAT</span>
                                <span class="font-primary text-color-light text-1">8AM - 5PM</span>
                            </div>
                            <div class="col-sm-4 custom-border-style-1 text-center py-4 my-4 py-sm-0 my-sm-0">
                                <span class="text-color-light d-block">SATURDAY</span>
                                <span class="font-primary text-color-light text-1">8AM - 11AM</span>
                            </div>
                            <div class="col-sm-4 text-center">
                                <span class="text-color-light d-block">SUNDAY</span>
                                <span class="font-primary text-color-light text-1">CLOSED</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-7">
                <div class="overflow-hidden">
                    <span class="d-block top-sub-title text-color-primary appear-animation" data-appear-animation="maskUp">LOREM IPSUM DOLOR SIT</span>
                </div>
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Clinic Departments</h2>
                </div>
                <div class="overflow-hidden mb-5">
                    <p class="lead pb-xlg mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                <div class="card border-0">
                    <div class="card-body text-center p-2">
                        <div class="image-frame mb-4">
                            <img src="{{url('img/medical/cardiology.jpg')}}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h3 class="font-weight-bold text-4">Cardiology</h3>
                        <p class="px-sm-5 px-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="card border-0">
                    <div class="card-body text-center p-2">
                        <div class="image-frame mb-4">
                            <img src="{{url('img/medical/cardiology.jpg')}}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h3 class="font-weight-bold text-4">Gastroenterology</h3>
                        <p class="px-sm-5 px-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                <div class="card border-0">
                    <div class="card-body text-center p-2">
                        <div class="image-frame mb-4">
                            <img src="{{url('img/medical/cardiology.jpg')}}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h3 class="font-weight-bold text-4">Pulmonology</h3>
                        <p class="px-sm-5 px-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="card border-0">
                    <div class="card-body text-center p-2">
                        <div class="image-frame mb-4">
                            <img src="{{url('img/medical/cardiology.jpg')}}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h3 class="font-weight-bold text-4">Dental</h3>
                        <p class="px-sm-5 px-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="card border-0">
                    <div class="card-body text-center p-2">
                        <div class="image-frame mb-4">
                            <img src="{{url('img/medical/cardiology.jpg')}}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h3 class="font-weight-bold text-4">Gynecology</h3>
                        <p class="px-sm-5 px-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                <div class="card border-0">
                    <div class="card-body text-center p-2">
                        <div class="image-frame mb-4">
                            <img src="{{url('img/medical/cardiology.jpg')}}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h3 class="font-weight-bold text-4">Hepatology</h3>
                        <p class="px-sm-5 px-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-light-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 mb-5 pb-md-0 mb-lg-0">

                <div class="overflow-hidden mb-3">
                    <h2 class="font-weight-bold text-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">About PHARMA SRS</h2>
                </div>
                <p class="lead text-color-dark mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc.</p>
                <p class="text-color-light-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget. </p>
                <div class="d-block d-sm-inline-block text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <a href="{{url('aboutus')}}" class="btn btn-outline btn-rounded btn-primary btn-v-3 btn-h-4 font-weight-bold">MORE ABOUT US</a>
                </div>
            </div>
            <div class="col-8 col-md-10 col-lg-5 ml-auto ml-md-auto mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="bg-primary position-relative mx-auto" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 10, 'transition': true, 'style': 'max-width: 250px;'}">
                    <div class="rect-size"></div>
                    <div class="position-absolute" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 8.5, 'transition': true, 'style': 'bottom: -20px; left: -56%; width: 150%;'}">
                        <div class="owl-carousel owl-theme dots-style-3 mb-0" data-plugin-options="{'items': 1, 'dots': true, 'nav': false}">
                            <div>
                                <img src="{{url('img/medical/about3.jpg')}}" class="img-fluid" alt="" />
                            </div>
                            <div>
                                <img src="{{url('img/medical/medicine.jpg')}}" class="img-fluid" alt="" />
                            </div>
                            <div>
                                <img src="{{url('img/medical/medicine2.jpg')}}" class="img-fluid" alt="" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row text-center">
            <div class="col">
<!--                <div class="overflow-hidden">-->
<!--                    <span class="d-block top-sub-title text-color-primary appear-animation" data-appear-animation="maskUp">OUR BLOG</span>-->
<!--                </div>-->
                <div class="overflow-hidden mb-5">
                    <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Latest News</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                <article class="blog-post">
                    <header class="mb-2">
                        <div class="image-frame hover-effect-2">
                            <a href="blog-single-post.html" class="d-block">
                                <img src="{{url('img/medical/blog/team.jpg')}}" class="img-fluid mb-3" alt="" />
                            </a>
                        </div>
                        <h3 class="font-weight-bold text-4 mb-1"><a href="blog-single-post.html" class="text-color-dark">Diagnosis for a better life</a></h3>
                        <i class="far fa-clock mt-1 text-color-primary"></i>
                        <time class="font-tertiary text-1" datetime="2018-01-17">Jan 17, 2018</time>
                    </header>
                    <p>Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                </article>
            </div>
            <div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <article class="blog-post">
                    <header class="mb-2">
                        <div class="image-frame hover-effect-2">
                            <a href="blog-single-post.html" class="d-block">
                                <img src="{{url('img/medical/blog/team.jpg')}}" class="img-fluid mb-3" alt="" />
                            </a>
                        </div>
                        <h3 class="font-weight-bold text-4 mb-1"><a href="blog-single-post.html" class="text-color-dark">Medical Scientists</a></h3>
                        <i class="far fa-clock mt-1 text-color-primary"></i>
                        <time class="font-tertiary text-1" datetime="2018-01-17">Jan 17, 2018</time>
                    </header>
                    <p>Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                </article>
            </div>
            <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                <article class="blog-post">
                    <header class="mb-2">
                        <div class="image-frame hover-effect-2">
                            <a href="blog-single-post.html" class="d-block">
                                <img src="{{url('img/medical/blog/team.jpg')}}" class="img-fluid mb-3" alt="" />
                            </a>
                        </div>
                        <h3 class="font-weight-bold text-4 mb-1"><a href="blog-single-post.html" class="text-color-dark">Team of Pharmacists</a></h3>
                        <i class="far fa-clock mt-1 text-color-primary"></i>
                        <time class="font-tertiary text-1" datetime="2018-01-17">Jan 17, 2018</time>
                    </header>
                    <p>Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                </article>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <a href="{{url('news-and-articles')}}" class="btn btn-outline btn-primary btn-h-4 btn-v-3 font-weight-semibold text-0">VIEW NEWS AND ARTICLES</a>
            </div>
        </div>
    </div>
</section>


</div>


@endsection