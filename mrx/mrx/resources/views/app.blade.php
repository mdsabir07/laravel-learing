<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{$seo->title}}</title>
    <meta name="keywords" content="{{$seo->keywords}}" />
    <meta name="description" content="{{$seo->description}}" />
    <meta name="og:site_name" content="{{$seo->ogSiteName}}" />
    <meta name="og:url" content="{{$seo->ogUrl}}" />
    <meta name="og:title" content="{{$seo->ogTitle}}" />
    <meta name="og:image" content="{{$seo->ogImage}}" />
    <meta name="og:description" content="{{$seo->ogDescription}}" />

    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
    <link rel="preconnect" href="{{asset('//fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{asset('//fonts.gstatic.com')}}" crossorigin />
    <link href="{{asset('//fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap')}}" rel="stylesheet" />
    <link href="{{asset('//cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <script src="{{asset('js/axios.min.js')}}"></script>
</head>
<body class="d-flex flex-column h-100">

@include('components.navbar')
@include('components.loader')

<div class="" id="content-div">
    @yield('content')
</div>

@include('components.footer')

<!-- Bootstrap core JS-->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
