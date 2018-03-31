<!doctype html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<html lang="{{ app()->getLocale() }}">
@include('part.head')
<body class="dashboard">
<!-- WRAPPER -->
    <div class="wrapper">

        <!-- TOP GENERAL ALERT -->
        @include('part.top_general_alert')
        <!-- END TOP GENERAL ALERT -->

        <!-- TOP BAR -->
        @include('part.top_bar')
        <!-- /top -->

        <!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
        @yield('content')
        <!-- END BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
        <div class="push-sticky-footer"></div>
    </div><!-- /wrapper -->

    <!-- FOOTER -->
    @include('part.footer')
    <!-- END FOOTER -->

    <!-- STYLE SWITCHER -->
    @include('part.style_switcher')
    <!-- END STYLE SWITCHER -->

    <!-- Javascript -->
    @yield('scripts')

</body>
</html>
