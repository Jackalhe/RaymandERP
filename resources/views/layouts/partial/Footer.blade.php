
<!-- BEGIN VENDOR JS-->
{{--<script src="{{asset('app-assets/js/core/libraries/jquery.min.js')}}" type="text/javascript"></script>--}}
<script src="{{url("")}}/app-assets/datepicker/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
<script src="{{url("")}}/js/bootstrap-confirmation.min.js"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{url("")}}/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="{{url("")}}/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/js/core/app.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/js/scripts/ui/fullscreenSearch.min.js" type="text/javascript"></script>
<script src="{{url("")}}/js/MessageList.js"></script>
<script src="{{url("")}}/js/sweetalert2.min.js"></script>

<script>
    var msg = '{{Session::get('alert')}}';
    var submsg = '{{Session::get('alert_comment')}}';
    var micon = '{{Session::get('alert_type')}}';
    var btn = '{{Session::get('alert_button')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
        swal({
            title: msg,
            text: submsg,
            type: micon,
            confirmButtonText: btn,
            closeOnConfirm: false
        });
    }
</script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->

<!-- END PAGE LEVEL JS-->
@yield('addjs')
<footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="http://Raymandsoft.ir" target="_blank" class="text-bold-800 grey darken-2">Raymand Software Co. </a>, All rights reserved. </span></p>
</footer>
</body>

</html>
