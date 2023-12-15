<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sitio web del desarrollador Alan Carabali">
    <meta name="author" content="Alan Carabali">
    <title>AF developer</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {!! Html::style('melody/vendors/css/vendor.bundle.base.css') !!}
    {!! Html::style('melody/vendors/css/vendor.bundle.addons.css') !!}
    {!! Html::style('melody/css/style.css') !!}
    <link rel="icon" href="{{asset('imagen/LOGO.svg')}}" sizes="64x64" type="image/png">
    <meta name="theme-color" content="#712cf9">
    @yield('styles')
    <!-- Favicons -->

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .containH1{
            padding-top: 60px;
        }

        .avatarAlan {
            height: 250px;
            background-color: white;
            border-radius: 100%;
            margin: 40px 0;
            border: 3px solid gray
        }

        .textH1 {
            font-size: 25px;
            padding-top: 30px;
        }
        .containImgPcs{
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 60px;
        }
        .imgPcs{
            height: 140px;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }

            .containH1 {
                display: flex;
                flex-direction: column;
            }
            .containFatherNav{
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            

        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-84416V4SLC"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-84416V4SLC');
</script>

<body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div class="containFatherNav">
                <h3 class="float-md-start mb-0"><img src="imagen/AFDEVELOPER_LOGO.png" alt="..." width="150px">
                </h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link text-light" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item {{ request()->is('portfolio') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item {{ request()->is('skills') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('skills') }}">Skills</a>
                    </li>
                </nav>
            </div>
        </header>

        @yield('content')

        <footer class="mt-auto text-white-50">
            <p>Instagram<a href="https://www.instagram.com/tribie17/" class="text-white text-decoration-none"> TRIBIE17
                </a> Twitter <a href="https://twitter.com/alangfa" class="text-white text-decoration-none">
                    @Alangfa</a>.</p>
        </footer>
    </div>
    {!! Html::script('melody/vendors/js/vendor.bundle.base.js') !!}
    {!! Html::script('melody/vendors/js/vendor.bundle.addons.js') !!}
    {!! Html::script('melody/js/off-canvas.js') !!}
    {!! Html::script('melody/js/hoverable-collapse.js') !!}
    {!! Html::script('melody/js/misc.js') !!}
    {!! Html::script('melody/js/settings.js') !!}
    {!! Html::script('melody/js/dashboard.js') !!}
    {!! Html::script('melody/js/progress-bar.js') !!}
    @yield('scripts')
</body>

</html>