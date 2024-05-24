<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Grupo SADCO</title>

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/gijgo.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/slick.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/slicknav.css') }}" />
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-img pere-text">
                        <img src="{{ asset('img/icono.png') }}" alt="Logo del Preloader" />
                    </div>
                </div>
            </div>
        </div>        
        <!-- Preloader End -->

        @include('layouts.menu')
        @include('layouts.banner')
        @yield('content')
        @include('layouts.footer')

        <!-- JS here -->
        <!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('/js/animated.headline.js') }}"></script>
        <script src="{{ asset('/js/gijgo.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.form.js') }}"></script>
        <script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('/js/wow.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('/js/slick.min.js') }}"></script>

        <!-- JS Customization -->
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>
