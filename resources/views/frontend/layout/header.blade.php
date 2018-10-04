
<div class="body">
    <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 70}">
        <div class="header-body">
            <div class="header-container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <div class="header-logo px-3">
                            <a href="{{url('/')}}">


                                <img src="{{url('img/view9logo.png')}}" width="120"

                                     alt=""/>

                            </a>
                        </div>
                    </div>
                    <div class="header-column justify-content-center">
                        <div class="header-nav justify-content-lg-center">
                            <div class="header-nav-main header-nav-main-dark header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">

                                    <ul class="nav flex-column flex-lg-row" id="mainNav">
                                        <li class=" active ">
                                            <a href="{{url('/aboutus')}}" >
                                                About us
                                            </a>
                                        </li>
                                        <li class="  ">
                                            <a href="{{url('/news-and-articles')}}" >
                                               News and Articles
                                            </a>
                                        </li>
                                        <li class="  ">
                                            <a href="{{url('/contactus')}}" >
                                                Contact Us
                                            </a>
                                        </li>


                                    </ul>

                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="header-column justify-content-center">
                        <button type="button" class="btn btn-primary btn-outline btn-rounded " id="estimate_btn"
                                data-toggle="modal"
                                data-target="#Modal1">Get a Estimate
                        </button>

                        <a href="{{url('/login')}}"
                           class="btn btn-primary btn-outline btn-rounded btn-lg">
                            Login
                        </a>

                        <button class="header-btn-collapse-nav mx-3" data-toggle="collapse"
                                data-target=".header-nav-main nav">
									<span class="hamburguer">
										<span></span>
										<span></span>
										<span></span>
									</span>
									<span class="close">
										<span></span>
										<span></span>
									</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

</div>