<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="E-commerce Application">
    <meta name="author" content="Ali">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>{{ config('app.name', 'Laravel') }} | Admin Auth</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="/css/nunito.css:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/css/css2.css?family=Khand:wght@300;400;500;600;700&family=Yeseva+One&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend_new/css/style.css') }}" rel="stylesheet">

    @yield('styles')
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
</head>

<body>
    <div class="bg-gradient-primary admin-login-page">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    @yield('scripts')
</body>

</html>
