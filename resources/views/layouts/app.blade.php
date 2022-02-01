<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MedInfo') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500%7CSpectral:400,400i,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/plugins/animate/animate.min.css">
    <link rel="stylesheet" href="/assets/plugins/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/custom.css">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


</head>

<body>
<div class="preloader">
    <div class="preload-img">
        <div class="spinnerBounce">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<div class="nav-search-box">
    <form>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="eg. feel the love and …"> <span class="b-line"></span> <span class="b-line-under"></span>
            <div class="input-group-append">
                <button type="button" class="btn"> <img src="/assets/images/search-icon.svg" alt="" class="img-fluid svg"> </button>
            </div>
        </div>
    </form>
</div>
@include('layouts.inc.header')
<div class="page-title">
    <div class="container">
        <h2>Neka365</h2>
        <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/blog">Blog</a></li>
            <li> @yield('title')</li>
        </ul>
    </div>
</div>

@yield('content')
@include('layouts.inc.footer')
<div class="back-to-top d-flex align-items-center justify-content-center"> <span><i class="fa fa-long-arrow-up"></i></span> </div>
<script src="/assets/js/jquery-1.12.1.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/scripts.js"></script>
<script src="/assets/js/custom.js"></script>
</body>

</html>
