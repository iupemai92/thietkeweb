<!doctype html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('titlePage')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/css/one-page/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/one-page/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/one-page/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/one-page/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/one-page/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/one-page/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/one-page/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('/css/one-page/responsive.css') }}" type="text/css" />
    @yield('css')
</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>
        @include('includes.slider')
        @include('includes.header')
        <section id="content">
            @yield('content')
        </section>
        @include('includes.footer')
        <!-- Go To Top
        ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>
    </div>


    <script src="{{ asset('/js/one-page/jquery.js') }}"></script>
    <script src="{{ asset('/js/one-page/plugins.js') }}"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script src="{{ asset('/js/one-page/functions.js') }}"></script>

    <script src="https://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="{{ asset('/js/one-page/jquery.gmap.js') }}"></script>
    <script>

        jQuery('#google-map').gMap({

            address: 'Melbourne, Australia',
            maptype: 'ROADMAP',
            zoom: 14,
            markers: [
                {
                    address: "Melbourne, Australia",
                    html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
                    icon: {
                        image: "{{ asset('images/icons/map-icon-red.png') }}",
                        iconsize: [32, 39],
                        iconanchor: [32,39]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }

        });
    </script>

    @yield('javascript')
</body>

</html>