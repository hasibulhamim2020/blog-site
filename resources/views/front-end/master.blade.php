<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{asset('front-end-assets')}}/favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('front-end-assets')}}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('front-end-assets')}}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{asset('front-end-assets')}}/css/tiny-slider.css">
    <link rel="stylesheet" href="{{asset('front-end-assets')}}/css/aos.css">
    <link rel="stylesheet" href="{{asset('front-end-assets')}}/css/glightbox.min.css">
    <link rel="stylesheet" href="{{asset('front-end-assets')}}/css/style.css">

    <link rel="stylesheet" href="{{asset('front-end-assets')}}/css/flatpickr.min.css">


    <title>@yield('title')</title>
</head>
<body>

@include('front-end.include.header')

    @yield('content')

@include('front-end.include.footer')

<script src="{{asset('front-end-assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('front-end-assets')}}/js/tiny-slider.js"></script>

<script src="{{asset('front-end-assets')}}/js/flatpickr.min.js"></script>


<script src="{{asset('front-end-assets')}}/js/aos.js"></script>
<script src="{{asset('front-end-assets')}}/js/glightbox.min.js"></script>
<script src="{{asset('front-end-assets')}}/js/navbar.js"></script>
<script src="{{asset('front-end-assets')}}/js/counter.js"></script>
<script src="{{asset('front-end-assets')}}/js/custom.js"></script>


</body>
</html>
