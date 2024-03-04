<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="public, max-age=31536000">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Agent') | {{ config('app.name', 'Laravel') }} </title>
    <meta name="description" content="@yield('meta-desc', '')">
    <meta property="og:title" content="@yield('title', 'Agent') | {{ config('app.name', 'Laravel') }}" />
    <meta property="og:description" content="@yield('meta-desc', '')" />
    <meta property="og:image" content="{{ asset('frontend_new/images/agent-og.png') }}" />
    <style>
        #loader {
            background: #000;
            overflow: hidden;
            height: 100%;
            width: 100%;
position: absolute;
                        z-index: 99999;
        }
        .spinner {
            margin-top: -21px;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 100%;
        }

        .spinner svg {
            -webkit-animation: loading-rotate 2s linear infinite;
            -moz-animation: loading-rotate 2s linear infinite;
            -o-animation: loading-rotate 2s linear infinite;
            animation: loading-rotate 2s linear infinite;
            height: 42px;
            width: 42px;
        }

        .spinner .path {
            stroke-dasharray: 90, 150;
            stroke-dashoffset: 0;
            stroke-width: 2;
            stroke: #fff;
            stroke-linecap: round;
            -webkit-animation: loading-dash 1.5s ease-in-out infinite;
            -moz-animation: loading-dash 1.5s ease-in-out infinite;
            -o-animation: loading-dash 1.5s ease-in-out infinite;
            animation: loading-dash 1.5s ease-in-out infinite;
        }

        @-webkit-keyframes loading-rotate {
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        @-moz-keyframes loading-rotate {
            to {
                -moz-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        @-o-keyframes loading-rotate {
            to {
                -o-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        @keyframes loading-rotate {
            to {
                -webkit-transform: rotate(1turn);
                -moz-transform: rotate(1turn);
                -o-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        @-webkit-keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px;
            }
            to {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px;
            }
        }

        @-moz-keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px;
            }
            to {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px;
            }
        }

        @-o-keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px;
            }
            to {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px;
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px;
            }
            to {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px;
            }
        }

    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="{{ asset('frontend_new/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend_new/images/favicon.png') }}" type="image/x-icon">


    <link rel="preload" href="{{ asset('css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/app.css') }}"></noscript>

    <link rel="preload" href="{{ asset('frontend/css/magnific-popup.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}"></noscript>

    <link rel="preload" href="{{ asset('frontend/css/animate.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}"></noscript>

    <link rel="preload" href="{{ asset('frontend/css/themify-icons.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}"></noscript>

    <link rel="preload" href="{{ asset('frontend/css/icofont.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/css/icofont.css') }}"></noscript>

    <link rel="preload" href="{{ asset('frontend/css/meanmenu.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}"></noscript>

    <link rel="preload" href="{{ asset('frontend/css/bundle.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/css/bundle.css') }}"></noscript>

    <link rel="preload" href="{{ asset('frontend/css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"></noscript>

    <link rel="preload" href="{{ asset('frontend_new/css/new-questionnaire.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend_new/css/new-questionnaire.css') }}"></noscript>

    <link rel="preload" href="{{ asset('frontend/css/custom.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}"></noscript>

    <link rel="preload" href="{{ asset('frontend/css/responsive.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}"></noscript>



    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@600;700&family=Yeseva+One&display=swap" rel="stylesheet">


    
    <link rel="preload" href="{{ asset('frontend_new/css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend_new/css/bootstrap.min.css') }}"></noscript>


    <link rel="preload" href="{{ asset('frontend_new/css/owl.carousel.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend_new/css/owl.carousel.min.css') }}"></noscript>

    <link rel="preload" href="{{ asset('frontend_new/css/owl.theme.default.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend_new/css/owl.theme.default.min.css') }}"></noscript>


    <link rel="preload" href="{{ asset('frontend_new/css/merged.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend_new/css/merged.css') }}"></noscript>




    <link rel="stylesheet" href="{{ asset('frontend_new/css/style.css') }}">

    <link rel="preload" href="{{ asset('frontend_new/css/questionnaire.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend_new/css/questionnaire.css') }}"></noscript>


    <link rel="preload" href="{{ asset('frontend_new/css/responsive.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend_new/css/responsive.css') }}"></noscript>

    <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>

    <livewire:styles />
    @yield('style')
    
    <!-- <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script> -->
    <!-- Add CkEditor -->

    <!-- Matomo Tag Manager -->
    <script>
        var _mtm = window._mtm = window._mtm || [];
        _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
        (function() {
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.async=true; g.src='https://analytics.agenthealth.co.uk/js/container_JjcvL0pk.js';
            s.parentNode.insertBefore(g,s);
        })();
    </script>
    <!-- End Matomo Tag Manager -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '/js/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KV2ZB6ZG');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
{{--<div id="loader">--}}
{{--    <div class="spinner">--}}
{{--        <svg viewBox="25 25 50 50">--}}
{{--            <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>--}}
{{--        </svg>--}}
{{--    </div>--}}
{{--</div>--}}


<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV2ZB6ZG"
            height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="app-layout">
    @include('partials.frontend.header')

    @include('partials.frontend.flash')
    <div class="main-layout">
         @yield('content')
    </div>
    {{ $slot ?? ""}}


    @yield('script')
        @include('partials.frontend.footer')
    </div>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script async src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script async src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script async src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script async src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script async src="{{ asset('frontend/js/ajax-mail.js') }}"></script>
    <!-- <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script> -->
    
    <!-- <script src="{{ asset('frontend/js/main.js') }}"></script> -->
    <!-- <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script> -->
    <script async src="{{ asset('frontend/js/alert-message.js') }}"></script>
   <!--  <script src="{{ asset('frontend/js/custom.js') }}"></script> -->
    <script src="{{ url('/js/kit.fontawesome.min.js') }}" crossorigin="anonymous"></script>
    
    <script async src="{{ asset('js/custom.js') }}"></script>
    <script src="/js/typeahead.bundle.min.js"></script>
    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    <script src="/js/popper1.14.3.min.js"></script>

    <!-- <script src="{{ asset('frontend_new/js/bootstrap.bundle.min.js') }}"></script> -->
    <script src="{{ asset('frontend_new/js/owl.carousel.min.js') }}"></script>
    <script src="/js/swipter3.4.1.min.js"></script>
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    
    <script src="{{ asset('frontend_new/js/custom.js') }}"></script>

<script>
        $(document).ready(function() {
            let bloodhound = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '{{ url('+search+') }}?productName=%QUERY%', //'/user/find?q=%QUERY%',
                    wildcard: '%QUERY%'
                },
            });

            $('#search').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                name: 'products',
                source: bloodhound,
                limit: 10,
                display: function(data) {
                    return data.name //Input value to be set when you select a suggestion.
                },
                templates: {
                    empty: [
                        '<div class="list-group-item">There are no matching search results</div>'
                    ],
                    header: [
                        '<div class="list-group search-results-dropdown">'
                    ],
                    suggestion: function(data) {
                        return '<div style="font-weight:normal; width:100%" class="list-group-item"><a href="{{ url('+product+') }}/' +
                            data.slug + '">' + data.name + '</a></div></div>'
                    }
                }
            });
        });

        $(function() {
            $('#loader').hide();
        });

    </script>
</body>

</html>
