<footer id="footer" class="footer-hover-links-light bg-dark-4 mt-0 mt-md-5 pt-md-5">
    <section class="section section-content-pull-top pull-top-level-3 pt-0 pt-md-5 pb-0 mt-2">
        <div class="container custom-max-width-1">
            <div class="row align-items-stretch">
                <div class="col-md-6 p-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="card bg-primary-3 border-0 h-100">
                        <div class="card-body p-5">
                            <div class="row align-items-center text-center">
                                <div class="col-lg-6 mb-4 mb-lg-0 mt-2 mt-lg-0">
                                    <div class="icon-box icon-box-reverse icon-box-style-1 align-items-center justify-content-center justify-content-lg-end">
                                        <div class="icon-box-icon">
                                            <img width="45" src="{{url('img/medical/icons/emergency.svg')}}" alt="" data-icon data-plugin-options="{'color': '#FFF', 'animated': true, 'delay': 600}" />
                                        </div>
                                        <div class="icon-box-info">
                                            <div class="icon-box-info-title">
                                                <span class="icon-box-sub-title text-color-light">HAVE AN</span>
                                                <h2 class="text-color-light font-weight-semibold text-4 line-height-1 mb-0">QUERIES?</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <a href="tel:+{{$site->phone}}" class="text-color-light font-primary text-6 line-height-1">{{$site->phone}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <div class="card bg-primary border-0 h-100">
                        <div class="card-body p-5">
                            <div class="row align-items-center text-center">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="icon-box icon-box-style-1 align-items-center justify-content-center">
                                        <div class="icon-box-icon pt-1">
                                            <img width="45" src="{{url('img/medical/icons/opening-hours.svg')}}" alt="" data-icon data-plugin-options="{'color': '#FFF', 'animated': true, 'delay': 600}" />
                                        </div>
                                        <div class="icon-box-info text-left">
                                            <div class="icon-box-info-title">
                                                <span class="icon-box-sub-title text-color-light">MAKE AN</span>
                                                <h2 class="text-color-light font-weight-semibold text-4 line-height-1 mb-0">Appointment</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    @if(Auth::check() && Auth::user()->hasRole(['patient','pharmacist']))
                                        <a href="{{ url('consult')}}"  class="btn btn-dark btn-rounded btn-v-4 btn-h-2 font-weight-semibold">CONSULT ONLINE</a>

                                            @else
                                                <a href="{{url('/login-page')}}" class="btn btn-dark btn-rounded btn-v-4 btn-h-2 font-weight-semibold">CONSULT ONLINE</a>

                                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">

                <a href="#">
                    <img src="#" width="152" height="22" class="img-fluid mb-3" alt="" />
                </a>
                <p>{{html_entity_decode($footer1->content)}}</p>
            </div>
            <div class="col-lg-4 ml-auto mb-4 mb-lg-0">
                <h2 class="font-weight-semibold text-1 mb-3">OUR LOCATION</h2>
                <ul class="list list-unstyled">
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <strong class="text-color-light">Address: </strong> {{$site->address}}</li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <strong class="text-color-light">Phone: <a href="tel:+{{$site->phone}}">{{$site->phone}}</a></strong></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <strong class="text-color-light">Email: </strong> <a href="mailto:{{$site->email}}" class="link-underline-light">{{$site->email}}</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h2 class="font-weight-semibold text-1 mb-3">QUICK LINKS</h2>
                <ul class="list list-unstyled">
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="{{url('/aboutus')}}">About us</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="{{url('/contactus')}}">Contact Us</a></li>
                    @if(Auth::check() && Auth::user()->hasRole(['patient','pharmacist']))
                        <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="{{url('/consult')}}">Consult Online</a></li>

                    @else
                        <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="{{url('/login-page')}}">Consult Online</a></li>

                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright bg-dark-2">
        <div class="container">
            <div class="row text-center text-md-left align-items-center">
                <div class="col-md-7 col-lg-8 mb-3 mb-md-0">
                    <ul class="social-icons social-icons-3 social-icons-icon-dark">
                        <li class="social-icons-facebook"><a href="http://{{$site->facebook_link}}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://{{$site->twitter_link}}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-lg-4">
                    <p class="text-md-right pb-0 mb-0">Copyrights © 2019. All Rights Reserved by Pharma SRS</p>
                </div>
            </div>
        </div>
    </div>
</footer>