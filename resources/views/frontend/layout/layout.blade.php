<!DOCTYPE html>
<html lang="">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Pharma SRS</title>


    <meta name="title" content="{{isset($s) ? $s->title : ' '}}">
    <meta name="description" content="{{isset($s) ? $s->description : ' '}}">
    <meta name="keyword" content="{{isset($s) ? $s->keyword : ' '}}">


    <meta name="author" content="Pharma SRS">
    <meta name="generator" content="Pharma SRS">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!--favicon-->
    <link rel="icon" href="../img/favpharma.png">


    <!-- Web Fonts  -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800"
        rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!--compiled css-->
    <link rel="stylesheet" href="{{ url('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/dash-tab.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/dash-tab.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">


</head>
<body>

<div class="body">
    @include('frontend/layout/header')

    @yield('content')

    @include('frontend/layout/footer')

    <!--messenger integration-->
    <div class="fb-customerchat"
         page_id="574785959645712"
         theme_color="#459645"
         logged_in_greeting="Hi! How can we help you?"
         logged_out_greeting="GoodBye!... Hope to see you soon."
         minimized="false">
    </div>


    <script src="{{url('assets/js/all.js') }}"></script>
    <script src="{{url('assets/js/dropzone.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script>
        Dropzone.autoDiscover = false;
    </script>

    <script>
        $("#date").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    </script>

    <script>


        $(document).ready(function () {

            <!--patient dashboard tabs-->
            $("div.bhoechie-tab-menu>div.list-group>a").click(function (e) {
                e.preventDefault();
                $(this).siblings('a.active').removeClass("active");
                $(this).addClass("active");
                var index = $(this).index();
                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
            });


        });
    </script>

    <script src="{{('assets/js/countries.js')}}"></script>
    <script language="javascript">
        populateCountries("country"); // first parameter is id of country drop-down and second parameter is id of state drop-down
    </script>

    <!--search prescription list-->
    <script>
        $('#search').on('keyup', function () {
            var search_list = document.getElementById('search_list');
            var value = $(this).val();
            var category = $('input[name="category_id"]').val();
            var url = '{{ route("prescription-list.search", ":category") }}';
            url = url.replace(':category', category);

            if (value == "") {
                search_list.style.display = 'none';
                return false;
            }

            $.ajax({
                type: 'post',
                url: url,
                data: {
                    "_token": "{{ csrf_token() }}",
                    'search': value
                },
                success: function (response) {
                    if (response.success == true) {
                        $('.search_list').html(response.data.search_html);
                        search_list.style.display = 'block';
                    }
                    else {
                        search_list.style.display = 'none';
                    }
                }
            });
        })

        //       messenger integration

        window.fbAsyncInit = function () {
            FB.init({
                appId: '196086948005019',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v2.11'
            });
        };
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>

    <script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
        <script>
            $(function () {

                $("#date").datepicker({
                    minDate : 0,
                    dateFormat: 'yy-mm-dd'

                });
            });
        </script>
</div>

</body>
</html>