<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        {!! HTML::style('public/assets/global/plugins/font-awesome/css/font-awesome.min.css'); !!}
        {!! HTML::style('public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); !!}
        {!! HTML::style('public/assets/global/plugins/bootstrap/css/bootstrap.min.css'); !!}
        {!! HTML::style('public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); !!}
        <!-- END GLOBAL MANDATORY STYLES -->
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {!! HTML::style('public/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css'); !!}
        {!! HTML::style('public/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); !!}
        {!! HTML::style('public/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css'); !!}
        {!! HTML::style('public/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'); !!}
        {!! HTML::style('public/assets/global/plugins/morris/morris.css'); !!}
        {!! HTML::style('public/assets/global/plugins/fullcalendar/fullcalendar.min.css'); !!}
        {!! HTML::style('public/assets/global/plugins/jqvmap/jqvmap/jqvmap.css'); !!}
        {!! HTML::style('public/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css'); !!}
        {!! HTML::style('public/assets/global/plugins/bootstrap-toastr/toastr.min.css'); !!}
        <!--FOR Jquery DataTable-->
        {!! HTML::style('public/assets/global/plugins/datatables/datatables.min.css'); !!}
        <!-- END PAGE LEVEL PLUGINS -->

         <!-- BEGIN select2 LEVEL PLUGINS -->
        {!! HTML::style('public/assets/global/plugins/select2/css/select2.min.css'); !!}
        {!! HTML::style('public/assets/global/plugins/select2/css/select2-bootstrap.min.css'); !!}
        <!-- END select2 LEVEL PLUGINS -->
        
        <!-- BEGIN THEME GLOBAL STYLES -->
        {!! HTML::style('public/assets/global/css/components.min.css'); !!}
        {!! HTML::style('public/assets/global/css/plugins.min.css'); !!}
        <!-- END THEME GLOBAL STYLES -->
        
        <!-- BEGIN PAGE LEVEL STYLES FOR DASHBOARD-->
        {!! HTML::style('public/assets/pages/css/pricing.css'); !!}
        {!! HTML::style('public/assets/global/plugins/bootstrap-sweetalert/sweetalert.css'); !!}
        <!-- END PAGE LEVEL STYLES -->
        
        <!-- BEGIN THEME LAYOUT STYLES -->
        {!! HTML::style('public/assets/layouts/layout/css/layout.min.css'); !!}
        {!! HTML::style('public/assets/layouts/layout/css/themes/darkblue.min.css'); !!}
        {!! HTML::style('public/assets/layouts/layout/css/custom.css'); !!}
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" type="image/icon" href="{{URL::to('/')}}/public/img/favicon.ico"/>    
         <!-- BEGIN CORE PLUGINS -->
        {!! HTML::script('public/assets/global/plugins/jquery.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/js.cookie.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/jquery.blockui.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}
        <!-- END CORE PLUGINS -->
        {!! HTML::script('public/js/jquery.mCustomScrollbar.min.js') !!}
        {!! HTML::script('public/js/jquery.newsTicker.js') !!}
    </head>

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            @include('templates.header')
            <!-- END HEADER -->

            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                @include('templates.sidebar')
                <!-- END SIDEBAR -->

                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    @yield('content')
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->

                <!-- BEGIN QUICK SIDEBAR -->
                <!--@include('templates.quicksidebar')-->
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->

            <!-- BEGIN FOOTER -->
            @include('templates.footer')
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        <!--@include('templates.quicknav')-->
        <!-- END QUICK NAV -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {!! HTML::script('public/assets/global/plugins/moment.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/morris/morris.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/morris/raphael-min.js') !!}
        {!! HTML::script('public/assets/global/plugins/counterup/jquery.waypoints.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/counterup/jquery.counterup.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/amcharts/amcharts/amcharts.js') !!}
        {!! HTML::script('public/assets/global/plugins/amcharts/amcharts/serial.js') !!}
        {!! HTML::script('public/assets/global/plugins/amcharts/amcharts/pie.js') !!}
        {!! HTML::script('public/assets/global/plugins/amcharts/amcharts/radar.js') !!}
        {!! HTML::script('public/assets/global/plugins/amcharts/amcharts/themes/light.js') !!}
        {!! HTML::script('public/assets/global/plugins/amcharts/amcharts/themes/patterns.js') !!}
        {!! HTML::script('public/assets/global/plugins/amcharts/amcharts/themes/chalk.js') !!}
        {!! HTML::script('public/assets/global/plugins/amcharts/ammap/ammap.js') !!}
        {!! HTML::script('public/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') !!}
        {!! HTML::script('public/assets/global/plugins/amcharts/amstockcharts/amstock.js') !!}
        {!! HTML::script('public/assets/global/plugins/fullcalendar/fullcalendar.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/horizontal-timeline/horizontal-timeline.js') !!}
        {!! HTML::script('public/assets/global/plugins/flot/jquery.flot.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/flot/jquery.flot.resize.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/flot/jquery.flot.categories.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/jquery.sparkline.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') !!}
        {!! HTML::script('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') !!}
        {!! HTML::script('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') !!}
        {!! HTML::script('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') !!}
        {!! HTML::script('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') !!}
        {!! HTML::script('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') !!}
        {!! HTML::script('public/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') !!}
        <!-- END PAGE LEVEL PLUGINS -->
        
         <!--BEGIN FOR DATERANGE & DATE PICKER PLUGINS-->
        {!! HTML::script('public/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}
        {!! HTML::script('public/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') !!}
        <!--END FOR DATERANGE & DATE PICKER PLUGINS-->
        
        <!--BEGIN FOR JQUERY REPEATER PLUGINS-->
        <!--BEGIN FOR JQUERY REPEATER PLUGINS-->
        
        {!! HTML::script('public/assets/global/plugins/select2/js/select2.full.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}
        {!! HTML::script('public/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js') !!}
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        {!! HTML::script('public/assets/global/scripts/app.min.js') !!}
        <!-- END THEME GLOBAL SCRIPTS -->
        
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        
        {!! HTML::script('public/assets/global/plugins/datatables/datatables.min.js') !!}
        {!! HTML::script('public/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
        
        {!! HTML::script('public/assets/pages/scripts/dashboard.js') !!}
        {!! HTML::script('public/assets/global/plugins/bootstrap-toastr/toastr.min.js') !!}
        <!-- END PAGE LEVEL SCRIPTS -->
        
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        {!! HTML::script('public/assets/layouts/layout/scripts/layout.min.js') !!}
        {!! HTML::script('public/assets/layouts/layout/scripts/demo.min.js') !!}
        {!! HTML::script('public/assets/layouts/global/scripts/quick-sidebar.min.js') !!}
        {!! HTML::script('public/assets/layouts/global/scripts/quick-nav.min.js') !!}
        <!-- END THEME LAYOUT SCRIPTS -->

    </body>
</html>