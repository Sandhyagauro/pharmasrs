

<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120, 'stickyChangeLogo': false}">
    <div class="header-body">
    <div class="header-top">
        <div class="header-top-container container">
            <div class="header-row">
                <div class="header-column justify-content-start">
									<span class="d-none d-sm-flex align-items-center">
										<i class="lnr lnr-map-marker mr-1"></i>
										{{$site->address}}
									</span>
									<span class="d-none d-sm-flex align-items-center ml-4">
										<i class="lnr lnr-phone-handset mr-1"></i>
										<a href="tel:+{{$site->phone}}">{{$site->phone}}</a>
									</span>
                </div>
                <div class="header-column justify-content-end">
<!--                    <ul class="nav">-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="contact-us-1.html">Contact Us</a>-->
<!--                        </li>-->
<!--                    </ul>-->
                    <ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
                        <li class="social-icons-facebook">
                            <a href="http://{{$site->facebook_link}}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-icons-twitter">
                            <a href="http://{{$site->twitter_link}}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>

                         <li class="social-icons-instagram">
                            <a href="#" target="_blank" title="Twitter"><i class="fab fa-instagram"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-container container">
    <div class="header-row">
    <div class="header-column justify-content-start">
        <div class="header-logo">
            <a href="{{url('/')}}">
                <img alt="EZ" width="100px" height="50px" src="{{asset($site->logo)}}">
            </a>
        </div>
    </div>
    <div class="header-column justify-content-end">
    <div class="header-nav">
    <div class="header-nav-main header-nav-main-uppercase header-nav-main-effect-1 header-nav-main-sub-effect-1">
    <nav class="collapse">
    <ul class="nav flex-column flex-lg-row" id="mainNav">
        @foreach($menus as $menu)
        <li class="active">
            <a href="/{{$menu->url}}" >
                {{ucfirst(trans($menu->title))}}
            </a>
        </li>
        @endforeach
        @if(Auth::check() && Auth::user()->hasRole('patient'))
        <li >
            <a href="{{url('/patient/dashboard')}}">
                 Profile
            </a>
        </li>
        @elseif(Auth::check() && Auth::user()->hasRole('pharmacist'))
        <li >
            <a href="{{url('/pharmacist/dashboard')}}">
                Profile
            </a>
        </li>
        @else
        <li >
            <a href="{{url('/login-page')}}">
                LOGIN
            </a>
        </li>
        @endif

    </ul>
    </nav>
    </div>
    <button class="header-btn-collapse-nav ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
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
    </div>
    </header>

