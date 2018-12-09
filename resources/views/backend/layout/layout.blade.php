<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>PHARMA SRS</title>
    <!-- Icons-->
    <link href="{{url('node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{url('node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{url('node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    <link href="{{url('node_modules/pace-progress/css/pace.min.css')}}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{url('/')}}">
<!--        <img class="navbar-brand-full" src="{{url('img/view9logo.png')}}" width="89" height="25" alt="Pharma SRS">-->
        <img class="navbar-brand-minimized" src="{{url('img/brand/sygnet.svg')}}" width="30" height="30"
             alt="Pharma SRS">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="{{url('/admin/dashboard')}}">Dashboard</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="{{url('/admin/users')}}">Users</a>
        </li>
<!--        <li class="nav-item px-3">-->
<!--            <a class="nav-link" href="#">Settings</a>-->
<!--        </li>-->
    </ul>
    <ul class="nav navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
               aria-expanded="false">
                <img class="img-avatar" src="{{url('img/authors/author.jpg')}}" alt="admin@bootstrapmaster.com">
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Settings</strong>
                </div>
<!--                <a class="dropdown-item" href="#">-->
<!--                    <i class="fa fa-user"></i>name</a>-->


                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            </div>
        </li>
    </ul>

    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>
<div class="app-body">
    @include('backend/layout/menu')
    <main class="main">

        <!-- Breadcrumb-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">
               Admin
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
            <!-- Breadcrumb Menu-->
            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a class="btn" href="{{url('/admin/consult')}}">
                        <i class="icon-speech"></i>
                    </a>
                    <a class="btn" href="{{url('/admin/dashboard')}}">
                        <i class="icon-graph"></i>  Dashboard</a>
<!--                    <a class="btn" href="#">-->
<!--                        <i class="icon-settings"></i>  Settings</a>-->
                </div>
            </li>
        </ol>
        @yield('content')

    </main>
</div>
@include('backend/layout/footer')

<!-- CoreUI and necessary plugins-->
<script src="{{url('node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="../assets/js/jquery.nestable.js"></script>
<script src="{{url('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{url('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{url('node_modules/pace-progress/pace.min.js')}}"></script>
<script src="{{url('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{url('node_modules/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
<!-- Plugins and scripts required by this view-->
<script
    src="{{url('node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>

<script src="{{ url('assets/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('content');
</script>

<!--menu -->
<script type="text/javascript">
    $(document).ready(function () {

        var updateOutput = function (e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            console.log($('.dd').nestable('serialize'));
            if (window.JSON) {
                var jsonData = window.JSON.stringify(list.nestable('serialize'));
                console.log(window.JSON.stringify(list.nestable('serialize')));

                //console.log(window.JSON.stringify(list.nestable('serialize')));

                $.ajax({
                    type: "POST",
                    url: "{!! URL::route('admin.menu.save') !!}",
                    data: {'json': jsonData,
                        "_token": "{{ csrf_token() }}"},


                    success: function (response) {

                        //$("#msg").append('<div class="alert alert-success msg-save">Saved!</div>');
                        $("#msg").append('<div class="msg-save" style="float:right; color:red;">Saving!</div>');
                        $('.msg-save').delay(1000).fadeOut(500);
                    },
                    error: function () {
                        alert("error");
                    }
                });

            } else {
                alert('error');
            }
        };

        $('#nestable').nestable({
            group: 1
        }).on('change', updateOutput);
    });
</script>

</body>
</html>