@extends('frontend/layout/layout')
@section('content')

<div role="main" class="main">
    <div id="home" class="slider-container slider-container-full-height rev_slider_wrapper">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider
             data-plugin-options="{'delay': 9000, 'sliderLayout': 'fullscreen', 'fullScreenOffsetContainer': '#header', 'gridwidth': [1140,960,720,540], 'gridheight': [900,900,900,900], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': true, 'hide_under': 767, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
            <ul>

                <li data-transition="fade">
                    <!-- image of size 1920X875-->
                    <img src="{{url('img/view9logo.png')}}"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-kenburns="on"
                         data-duration="10000"
                         data-ease="Linear.easeNone"
                         data-scalestart="110"
                         data-scaleend="100"
                         data-offsetstart="-250 -100"
                         class="rev-slidebg">

                    <div class="tp-caption text-color-light font-primary font-weight-thin letter-spacing-5"
                         data-x="center" data-hoffset="['-220','-220','-197','-150']"
                         data-y="center" data-voffset="['-55','-55','-55','-45']"
                         data-start="1000"
                         data-fontsize="['37','37','30','25']"
                         data-lineheight="['42','42','35','30']"
                         data-transform_in="y:[100%];opacity:0;s:500;"
                         data-transform_out="y:[100%];opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;">test
                    </div>

                    <div class="tp-caption text-color-light font-primary font-weight-bold letter-spacing-10"
                         data-x="center"
                         data-y="center"
                         data-start="1300"
                         data-fontsize="['68','68','57','40']"
                         data-lineheight="['73','73','62','45']"
                         data-transform_in="y:[100%];opacity:0;s:500;"
                         data-transform_out="y:[100%];opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;">test
                    </div>

                    <div class="tp-caption text-color-primary font-quaternary font-weight-light"
                         data-x="center" data-hoffset="['193','193','170','130']"
                         data-y="center" data-voffset="['31','31','31','20']"
                         data-start="1600"
                         data-fontsize="['65','65','57','40']"
                         data-transform_in="opacity:0;s:500;"
                         data-transform_out="y:[100%];opacity:0;s:500;">sd
                    </div>

                </li>

            </ul>
        </div>
<!--        <div class="slider-contact-form-wrapper container custom-slider">-->
<!--            <div class="slider-contact-form appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">-->
<!---->
<!--                {% partial 'homepage/signupForm' %}-->
<!--            </div>-->
<!--        </div>-->
    </div>


    <!-- image of 1920X512 -->
    <section id="services" class="section home-service section-background section-height-4 appear-animation"
             data-plugin-image-background data-plugin-options="{'imageUrl': '{{url('img/view9logo.png')}}'}"
             data-appear-animation="fadeIn" data-appear-animation-duration="1s">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <div class="overflow-hidden">
                        <span class="d-block top-sub-title text-color-light appear-animation"
                              data-appear-animation="maskUp">adsf</span>
                    </div>
                    <div class="overflow-hidden">
                        <h2 class="font-weight-bold text-color-light mb-0 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="200">dfg</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-content-pull-top pull-top-level-2 bg-light-5">
        <div class="container">
            <div class="row">



                <section class="section section-content-pull-top pull-top-level-2 bg-light-5">
                    <div class="container">
                        <div class="row">



                            <div class="col-md-4 text-center mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
                                <div class="image-frame image-frame-style-3 mb-5">
                                    <!-- image of 722X430 -->
                                    <img src="{{url('img/view9logo.png')}}" class="img-fluid" alt="">
                                </div>

                                <h2 class="text-4 font-weight-bold mb-3">ssd</h2>
                                <p> sds</p>
                                <a href="{{url('/services')}}" class="btn btn-link font-weight-semibold text-decoration-none align-items-center text-0 d-inline-flex">VIEW MORE <i class="fas fa-angle-right text-3 ml-3"></i></a>
                            </div>
                            <div class="col-md-4 text-center mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
                                <div class="image-frame image-frame-style-3 mb-5">
                                    <!-- image of 722X430 -->
                                    <img src="{{url('img/view9logo.png')}}" class="img-fluid" alt="">
                                </div>

                                <h2 class="text-4 font-weight-bold mb-3">ssd</h2>
                                <p> sds</p>
                                <a href="{{url('/services')}}" class="btn btn-link font-weight-semibold text-decoration-none align-items-center text-0 d-inline-flex">VIEW MORE <i class="fas fa-angle-right text-3 ml-3"></i></a>
                            </div>
                            <div class="col-md-4 text-center mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
                                <div class="image-frame image-frame-style-3 mb-5">
                                    <!-- image of 722X430 -->
                                    <img src="{{url('img/view9logo.png')}}" class="img-fluid" alt="">
                                </div>

                                <h2 class="text-4 font-weight-bold mb-3">ssd</h2>
                                <p> sds</p>
                                <a href="{{url('/services')}}" class="btn btn-link font-weight-semibold text-decoration-none align-items-center text-0 d-inline-flex">VIEW MORE <i class="fas fa-angle-right text-3 ml-3"></i></a>
                            </div>



                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div class="appeasr-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="100">
                        <!--<span class="top-sub-title text-color-primary">LOREM IPSUM DOLOR SIT</span>-->

                        <h2 class="word-rotator letters type font-weight-bold text-5 mb-3">
                            <span>sdsd</span>
										<span class="word-rotator-words waiting">
											<b class="is-visible">think.</b>
											<b>believe.</b>
											<b>dreamed.</b>
										</span>
                        </h2>
                    </div>
                    <p class="lead mb-3 appear-animation" data-appear-animation="fadeInUpShorter"
                       data-appear-animation-delay="300">as</p>

                    <p class="mb-3 appear-animation" data-appear-animation="fadeInUpShorter"
                       data-appear-animation-delay="500">as</p>

                    <div class="d-block d-sm-inline-block text-center appear-animation"
                         data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                        <a href="{{url('/about-us')}}"
                           class="btn btn-outline btn-rounded btn-primary btn-v-3 btn-h-4 font-weight-bold mt-3 text-0">MORE
                            ABOUT US</a>

                    </div>

                </div>

                <div class="col-10 col-md-5 mx-auto ml-md-auto appear-animation" data-appear-animation="fadeInUpShorter"
                     data-appear-animation-delay="500">
                    <div class="particles d-flex align-items-center pr-0 pr-lg-3 pr-xl-5">
                        <svg class="svg-particles d-none d-sm-block" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 493.72 405.79">
                            <g class="g-particles g-particles-group-1 appear-animation"
                               data-appear-animation="expandParticles" data-appear-animation-delay="500">
                                <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="150.28"
                                      y1="108.35" x2="159.03" y2="102.1"/>
                                <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="325.51"
                                      y1="118.98" x2="334.26" y2="112.73"/>
                                <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="483.33"
                                      y1="94.52" x2="492.08" y2="88.27"/>
                                <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="321.14"
                                      y1="279.22" x2="329.89" y2="272.97"/>
                                <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="148.47"
                                      y1="279.22" x2="157.22" y2="272.97"/>
                                <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="11.14"
                                      y1="305.17" x2="19.89" y2="298.92"/>
                            </g>
                            <g class="g-particles g-particles-group-2 appear-animation"
                               data-appear-animation="expandParticles" data-appear-animation-delay="800">
                                <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10"
                                      d="M51.78,105.64s-.37-12.75,5.25-3.5.38,7.13,0,7.13"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10"
                                      d="M229.34,103.24s-.37-12.75,5.25-3.5.38,7.12,0,7.12"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10"
                                      d="M401,103.24s-.37-12.75,5.25-3.5.38,7.12,0,7.12"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10"
                                      d="M401,274.1s-.37-12.75,5.25-3.5.38,7.13,0,7.13"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10"
                                      d="M227.33,276.14s-.37-12.75,5.25-3.5.38,7.13,0,7.13"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10"
                                      d="M55.49,276.14s-.37-12.75,5.25-3.5.38,7.13,0,7.13"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10"
                                      d="M97.76,41.59s-2.5,4.83,2.83,2.33.67,2.67.67,2.67"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10"
                                      d="M448.14,22.85s-2.5,4.83,2.83,2.33.67,2.67.67,2.67"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10"
                                      d="M246,44.18s.1,5.85,4.41-.28,2.26,1.66,2.26,1.66"
                                      transform="translate(-3.14 -1.85)"/>
                            </g>
                            <g class="g-particles g-particles-group-3 appear-animation"
                               data-appear-animation="expandParticles" data-appear-animation-delay="1100">
                                <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="4.77" cy="151" r="1.14"
                                        transform="translate(-108.51 45.76) rotate(-45)"/>
                                <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="149.72" cy="30.16" r="1.14"
                                        transform="translate(19.39 112.85) rotate(-45)"/>
                                <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="304.7" cy="3.48" r="1.14"
                                        transform="translate(83.64 214.63) rotate(-45)"/>
                                <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="495.22" cy="155.04" r="1.14"
                                        transform="translate(32.28 393.74) rotate(-45)"/>
                                <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="315.2" cy="163.8" r="1.14"
                                        transform="translate(-26.64 269.01) rotate(-45)"/>
                                <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="153.42" cy="344.7" r="1.14"
                                        transform="translate(-201.94 207.59) rotate(-45)"/>
                                <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="249.61" cy="406" r="1.14"
                                        transform="translate(-217.11 293.57) rotate(-45)"/>
                                <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="313.32" cy="336.94" r="1.14"
                                        transform="translate(-149.62 318.39) rotate(-45)"/>
                                <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="148.58" cy="172.2" r="1.14"
                                        transform="translate(-81.38 153.65) rotate(-45)"/>
                            </g>
                            <g class="g-particles g-particles-group-4 appear-animation"
                               data-appear-animation="expandParticles" data-appear-animation-delay="1400">
                                <polyline class="cls-3" fill="none" stroke="#969da0"
                                          points="200.87 18.34 197.2 18.34 199.03 21"/>
                                <polyline class="cls-3" fill="none" stroke="#969da0"
                                          points="179.66 368.64 180.47 364.7 176.12 365.86"/>
                                <polyline class="cls-3" fill="none" stroke="#969da0"
                                          points="369.87 368.64 370.67 364.7 366.31 365.86"/>
                                <polyline class="cls-3" fill="none" stroke="#969da0"
                                          points="369.31 5.73 371.83 1.9 367.27 1.65"/>
                                <polyline class="cls-3" fill="none" stroke="#969da0"
                                          points="217.7 153.19 210.32 153.19 214.01 158.56"/>
                                <polyline class="cls-3" fill="none" stroke="#969da0"
                                          points="385.03 153.19 377.66 153.19 381.34 158.56"/>
                                <polyline class="cls-3" fill="none" stroke="#969da0"
                                          points="385.03 324.15 377.66 324.15 381.34 329.52"/>
                                <polyline class="cls-3" fill="none" stroke="#969da0"
                                          points="213.01 324.15 205.64 324.15 209.32 329.52"/>
                                <polyline class="cls-3" fill="none" stroke="#969da0"
                                          points="52.35 324.15 44.98 324.15 48.66 329.52"/>
                            </g>
                            <g class="g-particles g-particles-group-5 appear-animation"
                               data-appear-animation="expandParticles" data-appear-animation-delay="1700">
                                <path class="cls-4" fill="none" stroke="#969da0"
                                      d="M264.48,188.12s-4,8.83,3.33,6.17,5.67-.5,5.67-.5-1.33,3.67-2.17,3.5"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-4" fill="none" stroke="#969da0"
                                      d="M444.52,179.07s-4,8.83,3.33,6.17,5.67-.5,5.67-.5-1.33,3.67-2.17,3.5"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-4" fill="none" stroke="#969da0"
                                      d="M94.23,196.91s-4,8.83,3.33,6.17,5.67-.5,5.67-.5-1.33,3.67-2.17,3.5"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-4" fill="none" stroke="#969da0"
                                      d="M92.81,369.86s-2.63,6.55,2.19,4.57,3.73-.37,3.73-.37-.88,2.72-1.43,2.6"
                                      transform="translate(-3.14 -1.85)"/>
                                <path class="cls-4" fill="none" stroke="#969da0"
                                      d="M269.94,368.71c.06-.09,3.2,5.44,4.68,2,2-4.8,2.54-2.76,2.54-2.76s1.15,2.61.66,2.89"
                                      transform="translate(-3.14 -1.85)"/>
                            </g>
                            <g class="g-particles g-particles-group-6 appear-animation"
                               data-appear-animation="expandParticles" data-appear-animation-delay="2000">
                                <polyline class="cls-5" fill="#969da0" stroke="#969da0"
                                          points="8.58 76.55 13.71 78.42 12.58 72.8"/>
                                <polyline class="cls-5" fill="#969da0" stroke="#969da0"
                                          points="8.58 228.65 13.71 230.53 12.58 224.9"/>
                                <polyline class="cls-5" fill="#969da0" stroke="#969da0"
                                          points="178.55 238.99 183.68 240.86 182.55 235.24"/>
                                <polyline class="cls-5" fill="#969da0" stroke="#969da0"
                                          points="349.47 240.53 354.59 242.4 353.47 236.78"/>
                                <polyline class="cls-5" fill="#969da0" stroke="#969da0"
                                          points="338.72 402.28 343.84 404.15 342.72 398.53"/>
                                <polyline class="cls-5" fill="#969da0" stroke="#969da0"
                                          points="147.72 399.46 152.84 401.34 151.72 395.71"/>
                                <polyline class="cls-5" fill="#969da0" stroke="#969da0"
                                          points="482.39 209.27 485.95 213.4 487.71 207.94"/>
                                <polyline class="cls-5" fill="#969da0" stroke="#969da0"
                                          points="349.58 66.58 354.83 68.06 353.29 62.54"/>
                            </g>
                        </svg>
                        <div class="particles-rect bg-primary d-none d-md-block" data-plugin-float-element
                             data-plugin-options="{'startPos': 'top', 'speed': 4, 'transition': true}"></div>
                        <!-- image size 1000X667 -->
                        <img src="{{url('img/view9logo.png')}}" class="img-fluid" alt=""
                             data-plugin-float-element
                             data-plugin-options="{'startPos': 'top', 'speed': 4, 'horizontal': true, 'transition': true}"/>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="section bg-light-5 section-text-overlay">
        <!--<span class="text-background font-primary font-weight-bold appear-animation"-->
        <!--data-appear-animation="textBgFadeInUp" data-appear-animation-delay="500">EASY AS 123-->
        <!--</span>-->
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="font-weight-bold">Work Process</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="steps steps-primary">
                        <div class="dots appear-animation" data-appear-animation="fadeIn"
                             data-appear-animation-delay="1200">
                            <img class="dots-mask" src="{{url('assets/images/steps-dots.svg')}}"
                                 alt=""/>
                            <div class="dots-color"></div>
                            <div class="dots-color-dark"></div>
                        </div>

                        <div class="item appear-animation" data-appear-animation="stepsFadeInUp"
                             data-plugin-image-background data-plugin-options="{'imageUrl': {{url('img/view9logo.png')}}">
                            <h3 class="item-title"><span>
1
                        </span>as</h3>
                            <p>adsd</p>
                            <a class="learn-more" href="#">Learn More <i class="fas fa-angle-right"></i></a>
                        </div>
                        <div class="item appear-animation" data-appear-animation="stepsFadeInUp"
                             data-plugin-image-background data-plugin-options="#">
                            <h3 class="item-title"><span>
2
                        </span>as</h3>
                            <p>adsd</p>
                            <a class="learn-more" href="#">Learn More <i class="fas fa-angle-right"></i></a>
                        </div>
                        <div class="item appear-animation" data-appear-animation="stepsFadeInUp"
                             data-plugin-image-background data-plugin-options="#">
                            <h3 class="item-title"><span>
3
                        </span>as</h3>
                            <p>adsd</p>
                            <a class="learn-more" href="#">Learn More <i class="fas fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="section">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-md-10 col-lg-7 col-xl-6 mx-auto">

                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp"
                            data-appear-animation-delay="200">Companies Collaboration</h2>
                    </div>
                    <div class="overflow-hidden mb-5">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                           data-appear-animation-delay="400">Companies we worked for</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-baseline mb-4 pb-2">

                <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter"
                     data-appear-animation-delay="300">
                    <div class="icon-box icon-box-style-3">
                        <div class="icon-box-icon">
                            <img width="42" height="42" src="{{url('img/view9logo.png')}}" alt="" data-icon
                                 data-plugin-options="{'color': '#463732', 'animated': true, 'delay': 500}"/>
                        </div>
                        <div class="icon-box-info">
                            <div class="icon-box-info-title">
                                <span class="top-sub-title">dsd</span>
                                <h2 class="font-weight-bold text-4 mb-3">sds</h2>
                            </div>
                            <p>sds</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter"
                     data-appear-animation-delay="300">
                    <div class="icon-box icon-box-style-3">
                        <div class="icon-box-icon">
                            <img width="42" height="42" src="{{url('img/view9logo.png')}}" alt="" data-icon
                                 data-plugin-options="{'color': '#463732', 'animated': true, 'delay': 500}"/>
                        </div>
                        <div class="icon-box-info">
                            <div class="icon-box-info-title">
                                <span class="top-sub-title">dsd</span>
                                <h2 class="font-weight-bold text-4 mb-3">sds</h2>
                            </div>
                            <p>sds</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter"
                     data-appear-animation-delay="300">
                    <div class="icon-box icon-box-style-3">
                        <div class="icon-box-icon">
                            <img width="42" height="42" src="{{url('img/view9logo.png')}}" alt="" data-icon
                                 data-plugin-options="{'color': '#463732', 'animated': true, 'delay': 500}"/>
                        </div>
                        <div class="icon-box-info">
                            <div class="icon-box-info-title">
                                <span class="top-sub-title">dsd</span>
                                <h2 class="font-weight-bold text-4 mb-3">sds</h2>
                            </div>
                            <p>sds</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter"
                     data-appear-animation-delay="300">
                    <div class="icon-box icon-box-style-3">
                        <div class="icon-box-icon">
                            <img width="42" height="42" src="{{url('img/view9logo.png')}}" alt="" data-icon
                                 data-plugin-options="{'color': '#463732', 'animated': true, 'delay': 500}"/>
                        </div>
                        <div class="icon-box-info">
                            <div class="icon-box-info-title">
                                <span class="top-sub-title">dsd</span>
                                <h2 class="font-weight-bold text-4 mb-3">sds</h2>
                            </div>
                            <p>sds</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="section section-background section-height-4" data-plugin-image-background
         data-plugin-options="{'imageUrl': 'assets/images/background-2.jpg'}"></div>

</div>

@endsection