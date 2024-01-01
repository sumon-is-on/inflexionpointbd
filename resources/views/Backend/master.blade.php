<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>inflexionpointBD</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ url('backend/assets/css/lib/calendar2/semantic.ui.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ url('backend/assets/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ url('backend/assets/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('backend/assets/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @include('Backend.Layouts.sidebar')

    @include('Backend.Layouts.header')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    @yield('content')
                </section>
            </div>
        </div>
    </div>
    {{-- <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div> --}}
    <!-- jquery vendor -->
    <script src="{{ url('backend/assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ url('backend/assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ url('backend/assets/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ url('backend/assets/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->

    <!-- bootstrap -->

    <script src="{{ url('backend/assets/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ url('backend/assets/js/lib/calendar-2/semantic.ui.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ url('backend/assets/js/lib/calendar-2/prism.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ url('backend/assets/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ url('backend/assets/js/lib/calendar-2/pignose.init.js') }}"></script>
    <!-- scripit init-->


    <script src="{{ url('backend/assets/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ url('backend/assets/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ url('backend/assets/js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ url('backend/assets/js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ url('backend/assets/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ url('backend/assets/js/lib/chartist/chartist-init.js') }}"></script>
    <script src="{{ url('backend/assets/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ url('backend/assets/js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ url('backend/assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('backend/assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <script src="{{ url('backend/assets/js/scripts.js') }}"></script>
    <!-- scripit init-->
</body>

</html>