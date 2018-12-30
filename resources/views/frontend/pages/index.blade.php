@extends('frontend/layout/layout')

@section('content')


<div role="main" class="main">

<div class="slider-container slider-container-height-600 rev_slider_wrapper">
    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider
         data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [600,600,600,600], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': true, 'style': 'slider-arrows-style-1 slider-arrows-dark' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
        <ul>
            <?php $i = 1 ?>
            @foreach($banners as $banner)
            @if($i == 1 )
            <li data-transition="fade">
                @foreach($banner->image as $image)
                <img src="{{$image->file_data}}"
                     alt=""
                     data-bgposition="center center"
                     data-bgfit="cover"
                     data-bgrepeat="no-repeat"
                     class="rev-slidebg">
                @endforeach
                <div class="tp-caption text-color-light font-primary font-weight-bold"
                     data-x="center" data-hoffset="['-255','-255','-255','-116']"
                     data-y="center" data-voffset="['-95','-95','-95','-90']"
                     data-start="1900"
                     data-fontsize="['28','28','28','28']"
                     data-transform_in="y:[100%];opacity:0;s:1000;"
                     data-transform_out="y:[100%];opacity:0;s:1000;">{!! html_entity_decode($banner->content) !!}
                </div>

                <div class="tp-caption text-color-light font-primary font-weight-bold"
                     data-frames='[{"delay":800,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                     data-x="center"
                     data-y="center" data-voffset="['-40','-40','-40','-40']"
                     data-fontsize="['77','77','77','47']"
                     data-lineheight="['60','60','60','41']">{{$banner->title}}
                </div>

                <div class="tp-caption text-color-light font-primary font-weight-thin"
                     data-x="center" data-hoffset="['235','235','235','92']"
                     data-y="center" data-voffset="['15','15','15','10']"
                     data-start="1900"
                     data-fontsize="['28','28','28','28']"
                     data-transform_in="y:[-100%];opacity:0;s:1000;"
                     data-transform_out="y:[-100%];opacity:0;s:1000;">{{$banner->excerpt}}
                </div>

            </li>
            @else
            <li data-transition="fade">
                @foreach($banner->image as $image)
                <img src="{{$image->file_data}}"
                     alt=""
                     data-bgposition="center center"
                     data-bgfit="cover"
                     data-bgrepeat="no-repeat"
                     class="rev-slidebg">
                @endforeach
                <div class="tp-caption text-color-dark font-primary font-weight-bold"
                     data-x="['left','left','left','30']"
                     data-y="center" data-voffset="['-95','-95','-95','-90']"
                     data-start="1900"
                     data-fontsize="['28','28','28','28']"
                     data-transform_in="y:[100%];opacity:0;s:1000;"
                     data-transform_out="y:[100%];opacity:0;s:1000;">{!! html_entity_decode($banner->content) !!}
                </div>

                <div class="tp-caption text-color-dark font-primary font-weight-bold"
                     data-frames='[{"delay":800,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                     data-x="['left','left','left','30']"
                     data-y="center" data-voffset="['-40','-40','-40','-40']"
                     data-fontsize="['77','77','77','47']"
                     data-lineheight="['60','60','60','41']">{{$banner->title}}
                </div>

                <div class="tp-caption text-color-dark font-primary font-weight-thin"
                     data-x="right" data-hoffset="['578','395','155','167']"
                     data-y="center" data-voffset="['15','15','15','10']"
                     data-start="1900"
                     data-fontsize="['28','28','28','28']"
                     data-transform_in="y:[-100%];opacity:0;s:1000;"
                     data-transform_out="y:[-100%];opacity:0;s:1000;">{{$banner->excerpt}}
                </div>

            </li>
            @endif
            <?php $i++; ?>
            @endforeach
        </ul>
    </div>
</div>
<section class="section section-content-pull-top py-0">
    <div class="container custom-max-width-1">
        <div class="row align-items-stretch align-items-lg-center justify-content-center">
            <div class="col-md-6 col-lg-4 p-0 appear-animation" data-appear-animation="fadeInLeftShorter"
                 data-appear-animation-delay="400">
                <div class="card bg-primary border-0 min-height-200 h-100 py-2">
                    <div class="card-body text-center text-lg-right p-4 d-flex flex-column justify-content-center">
                        <div
                            class="icon-box icon-box-reverse icon-box-style-1 align-items-center justify-content-center justify-content-lg-end mb-4 pb-2">
                            <div class="icon-box-icon">
                                <img width="45" src="{{url('img/medical/icons/emergency.svg')}}" alt="" data-icon
                                     data-plugin-options="{'color': '#FFF', 'animated': true, 'delay': 600}"/>
                            </div>
                            <div class="icon-box-info">
                                <div class="icon-box-info-title">
                                    <span class="icon-box-sub-title text-color-light">HAVE AN</span>

                                    <h2 class="text-color-light font-weight-semibold text-4 line-height-1 mb-0">
                                        EMERGENCY?</h2>
                                </div>
                            </div>
                        </div>
                        <a href="tel:+{{$site->phone}}" class="text-color-light font-primary text-7">{{$site->phone}}</a>

<!--                        <p class="text-color-light mb-0 mt-2">Lorem ipsum dolor sit amet, consectetu</p>-->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 z-index-1 p-0 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="card bg-dark-2 border-0">
                    <div class="card-body text-center px-4 py-5">
                        <div class="icon-box icon-box-style-1 align-items-center justify-content-center mb-4 pb-2">
                            <div class="icon-box-icon pt-1">
                                <img width="45" src="{{url('img/medical/icons/appointment.svg')}}" alt="" data-icon
                                     data-plugin-options="{'color': '#FFF', 'animated': true, 'delay': 600}"/>
                            </div>
                            <div class="icon-box-info text-left">
                                <div class="icon-box-info-title">
                                    <span class="icon-box-sub-title text-color-light">MAKE AN</span>

                                    <h2 class="text-color-light font-weight-semibold text-4 line-height-1 mb-0">
                                        Appointment</h2>
                                </div>
                            </div>
                        </div>
                        @if(Auth::check() && Auth::user()->hasRole(['patient','pharmacist']))
                        <a href="{{url('prescription-option')}}"
                           class="btn btn-dark bg-dark-3 btn-rounded btn-v-4 btn-h-3 font-weight-semibold mb-3">Upload / View Prescription
                        </a>
                        @else
                            <a href="{{url('/login-page')}}" class="btn btn-dark bg-dark-3 btn-rounded btn-v-4 btn-h-3 font-weight-semibold mb-3">
                                Upload / View Prescription
                            </a>
                        @endif

<!--                        <p class="text-color-light-3 mb-0">Lorem ipsum dolor sit amet, consectetu</p>-->
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-4 p-0 appear-animation" data-appear-animation="fadeInRightShorter"
                 data-appear-animation-delay="400">
                <div class="card bg-primary border-0 min-height-200 py-2">
                    <div class="card-body p-4">
                        <div
                            class="icon-box icon-box-style-1 align-items-center justify-content-center justify-content-lg-start mb-4 pb-2">
                            <div class="icon-box-icon pt-2">
                                <img width="45" src="{{url('img/medical/icons/opening-hours.svg')}}" alt="" data-icon
                                     data-plugin-options="{'color': '#FFF', 'animated': true, 'delay': 600}"/>
                            </div>
                            <div class="icon-box-info">
                                <div class="icon-box-info-title">
                                    <span class="icon-box-sub-title text-color-light">OPENING</span>

                                    <h2 class="text-color-light font-weight-semibold text-4 line-height-1 mb-0">
                                        Hours</h2>
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
<!--team-->
<section class="section pb-5">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="overflow-hidden mb-3">
                    <h2 class="font-secondary text-5 mb-0 px-5 appear-animation" data-appear-animation="fadeInUpShorter">{{$teamSection->title}}</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="lead mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">{!! html_entity_decode($teamSection->content) !!}</p>
                </div>
            </div>
        </div>
        <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-aniamtion-delay="600">
            <div class="col">
                <div class="owl-carousel owl-theme dots-style-1 nav-style-3" data-plugin-options="{'responsive': {'0': {'items': 1}, '576': {'items': 1}, '768': {'items': 3}, '979': {'items': 4}, '1199': {'items': 4}}, 'dots': true, 'nav': false, 'loop': false, 'navtext': [], 'margin': 30}">
                   @foreach($teams as $team)
                    <div>
                        <div class="text-center mb-4">
                            <div class="image-frame image-frame-style-1 image-frame-effect-1">
                                <div class="image-frame-wrapper">
                                    @foreach($team->image as $image)
                                    <img src="{{$image->file_data}}" class="img-fluid" alt="">
                                    @endforeach
                                    <div class="image-frame-inner-border"></div>
                                   
                                </div>
                            </div>
                            <h3 class="font-weight-bold text-4 mb-0">{{$team->title}}</h3>
                            <h3 class="font-weight text-4 mb-0">{{$team->excerpt}}</h3>
                            <span class="text-1">{!! html_entity_decode($team->content) !!}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- clinic department section-->
<section class="section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-7">
<!--                <div class="overflow-hidden">-->
<!--                    <span class="d-block top-sub-title text-color-primary appear-animation"-->
<!--                          data-appear-animation="maskUp">LOREM IPSUM DOLOR SIT</span>-->
<!--                </div>-->
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp"
                        data-appear-animation-delay="200">{{$clinicDepartment->title}}</h2>
                </div>
                <div class="overflow-hidden mb-5">
                    <p class="lead pb-xlg mb-0 appear-animation" data-appear-animation="maskUp"
                       data-appear-animation-delay="400">{!! html_entity_decode($clinicDepartment->content) !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($departments as $department)
            <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                 data-appear-animation-delay="200">
                <div class="card border-0">
                    <div class="card-body text-center p-2">
                        <div class="image-frame mb-4">
                            <img src="{{$department->image}}" class="img-fluid rounded-circle" alt="">
                        </div>

                        <h3 class="font-weight-bold text-4">{{$department->title}}</h3>

                        <p class="px-sm-5 px-md-0">{!! html_entity_decode(str_limit($department->content,80)) !!} </p>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
<section class="section bg-light-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 mb-5 pb-md-0 mb-lg-0">

                <div class="overflow-hidden mb-3">
                    <h2 class="font-weight-bold text-5 mb-0 appear-animation" data-appear-animation="maskUp"
                        data-appear-animation-delay="200">{{$aboutSection->title}}</h2>
                </div>
                <p class="lead text-color-dark mb-3 appear-animation" data-appear-animation="fadeInUpShorter"
                   data-appear-animation-delay="400">{{$aboutSection->excerpt}}</p>

                <p class="text-color-light-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                   data-appear-animation-delay="600">{!! html_entity_decode(str_limit($aboutSection->content,200)) !!}</p>

                <div class="d-block d-sm-inline-block text-center appear-animation"
                     data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <a href="{{url('aboutus')}}"
                       class="btn btn-outline btn-rounded btn-primary btn-v-3 btn-h-4 font-weight-bold">MORE ABOUT
                        US</a>
                </div>
            </div>
            <div class="col-8 col-md-10 col-lg-5 ml-auto ml-md-auto mb-5 mb-lg-0 appear-animation"
                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="bg-primary position-relative mx-auto" data-plugin-float-element
                     data-plugin-options="{'startPos': 'none', 'speed': 10, 'transition': true, 'style': 'max-width: 250px;'}">
                    <div class="rect-size"></div>
                    <div class="position-absolute" data-plugin-float-element
                         data-plugin-options="{'startPos': 'none', 'speed': 8.5, 'transition': true, 'style': 'bottom: -20px; left: -56%; width: 150%;'}">
                        <div class="owl-carousel owl-theme dots-style-3 mb-0"
                             data-plugin-options="{'items': 1, 'dots': true, 'nav': false}">
                            @foreach($aboutSection->image as $image)
                            <div>
                                <img src="{{asset($image->file_data)}}" class="img-fluid" alt=""/>
                            </div>
                            @endforeach
                            @foreach($aboutSectionImage2->image as $image)
                            <div>
                                <img src="{{asset($image->file_data)}}" class="img-fluid" alt=""/>
                            </div>
                            @endforeach
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
                    <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp"
                        data-appear-animation-delay="200">Latest News</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            @foreach($news as $n)
            <div class="col-md-4 mb-4 mb-md-0 appear-animation news-wrap" data-appear-animation="fadeInLeftShorter"
                 data-appear-animation-delay="800">
                <article class="blog-post">
                    <header class="mb-2">
                        @foreach($n->image as $image)
                        <div class="image-frame hover-effect-2">
                            <a href="{{url('/news-and-articles',$n->slug)}}" class="d-block">
                                <img src="{{$image->file_data}}" class="img-fluid mb-3" alt=""/>
                            </a>
                        </div>
                        @endforeach
                        <h3 class="font-weight-bold text-4 mb-1"><a href="{{url('/news-and-articles',$n->slug)}}"
                                                                    class="text-color-dark">{{$n->title}}</a></h3>
                        <i class="far fa-clock mt-1 text-color-primary"></i>
                        <time class="font-tertiary text-1" datetime="2018-01-17">{{$n->created_at->format('l j F Y')
                            }}
                        </time>
                    </header>
                    <p>{!! html_entity_decode(str_limit($n->content,20)) !!}</p>
                </article>
            </div>
            @endforeach
        </div>
        <div class="row text-center">
            <div class="col">
                <a href="{{url('news-and-articles')}}"
                   class="btn btn-outline btn-primary btn-h-4 btn-v-3 font-weight-semibold text-0">VIEW NEWS AND
                    ARTICLES</a>
            </div>
        </div>
    </div>
</section>
</div>

@endsection