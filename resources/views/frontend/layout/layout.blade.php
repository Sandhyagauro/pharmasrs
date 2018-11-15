
<!DOCTYPE html>
<html lang="">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Pharma SRS</title>
    <meta name="title" content="sdf">
    <meta name="description" content="sfsdf">
    <meta name="author" content="Pharma SRS">
    <meta name="generator" content="Pharma SRS">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!--favicon-->
    <link rel="icon" type="image/png" href="#">



    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800"
          rel="stylesheet" type="text/css">

    <!--compiled css-->
    <link rel="stylesheet" href="{{ url('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/custom.css')}}">

</head>
<body>

<div class="body">
@include('frontend/layout/header')

@yield('content')

@include('frontend/layout/footer')
<script src="{{ 'assets/js/all.js' }}"></script>

</div>
</body>
</html>