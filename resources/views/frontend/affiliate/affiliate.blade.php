<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
        name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap css  -->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- font cdn -->
        <link rel="stylesheet" href="/css/font-awesome/all.min.css"/>
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_new/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_new/css/responsive.css') }}">
        <title>dasboard</title>
    </head>
    <body class="dashboard-open">
        <div class="app-layout">
            <div class="header dasboard-header">
                <div
                    class="container-xxl">
                    <!-- header start-->
                    @include('layouts.affiliate.header')
                    <!-- header end -->
                </div>
            </div>

            <!-- sidebar start -->
            <div class="user-dashboard py-5">
                <div class="row">
                    
                    <div class="col-lg-12">
                       Affiliate Dashboard

                    </div>
                
                   <!-- side bar start -->
                   @include('layouts.affiliate.sidebar')

               <!-- side bar end -->
                    
                </div>
            </div>
            <!-- sidebar end -->

            <!-- footer start-->
            @include('layouts.affiliate.footer')
            <!-- footer end -->
        </div>


        <!-- js cdn -->
        <script src="/js/jquery3.6.4.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
        <script>
            $(".side-bar").click(function () {
                $(this).toggleClass("open");
                $(".user-sidebar").toggleClass("open");
            });
        </script>
    </body>
</html>