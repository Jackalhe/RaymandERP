<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Persian DateTime</title>

    <link href="{{url("")}}/app-assets/datepicker/css/bootstrap.min.css" rel="stylesheet" />
    {{--<link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css/bootstrap.css">--}}
    <link rel="stylesheet" href="{{url("")}}/app-assets/datepicker/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="{{url("")}}/app-assets/datepicker/css/jquery.Bootstrap-PersianDateTimePicker.css" />

    <script src="{{url("")}}/app-assets/datepicker/js/jquery-3.1.0.min.js" type="text/javascript"></script>


    <script src="{{url("")}}/app-assets/datepicker/js/tooltip.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/datepicker/js/popper.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/datepicker/js/bootstrap.min.js" type="text/javascript"></script>
    {{--<script src="{{url("")}}/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>--}}

    {{--<link href="{{url("")}}/css/styles.css" rel="stylesheet">--}}
    {{--<style type="text/css">--}}
    {{--body, table {--}}
    {{--font-family: 'Segoe UI', Yekan;--}}
    {{--font-size: 14px;--}}
    {{--}--}}
    {{--</style>--}}

</head>
<body>
<div style="margin-top: 50px; clear: both;"></div>

<div class="container" style="max-width: 400px;">

    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="true" data-placement="left">
                <span class="glyphicon glyphicon-calendar"></span>
            </div>
            <input type="text" class="form-control"  id="fromDate1" placeholder="از تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="true" data-placement="right" />
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate1" data-groupid="group1" data-todate="true" data-enabletimepicker="false" data-placement="left">
                <span class="glyphicon glyphicon-calendar"></span>
            </div>
            <input type="text" class="form-control" id="toDate1" placeholder="تا تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate1" data-groupid="group1" data-todate="true" data-enabletimepicker="false" data-placement="right"/>
        </div>
    </div>

    <hr />

    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#date1" data-enabletimepicker="false" data-placement="bottom" data-disablebeforetoday="true">
                <span class="glyphicon glyphicon-calendar"></span>
            </div>
            <input type="text" class="form-control" id="date1" placeholder="تاریخ های فعال بعد از امروز"/>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="col-sm-4">
            <button class="btn btn-default" data-mddatetimepicker="true" data-targetselector="#dateWithFormat" data-enabletimepicker="true" data-placement="left" data-mdformat="dddd dd MMMM yyyy ساعت HH:mm">
                <span class="glyphicon glyphicon-calendar"></span>
            </button>
        </div>
        <div class="col-sm-8" id="dateWithFormat" style="direction: rtl;">تاریخ به همراه نمایش با فرمت خاص
        </div>
    </div>

    <hr />

    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#dateMiladi" data-enabletimepicker="false" data-placement="bottom" data-disablebeforetoday="false" data-isgregorian="true">
                <span class="glyphicon glyphicon-calendar"></span>
            </div>
            <input type="text" class="form-control" id="dateMiladi" placeholder="تاریخ میلادی" data-mddatetimepicker="true"  data-isgregorian="true" />
        </div>
    </div>
</div>

<script src="{{url("")}}/app-assets/datepicker/js/jalaali.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/datepicker/js/jquery.Bootstrap-PersianDateTimePicker.js" type="text/javascript"></script>

{{--<script type="text/javascript">--}}
{{--$('#fromDate1').MdPersianDateTimePicker({--}}
{{--Placement: 'left',--}}
{{--Trigger: 'click',--}}
{{--EnableTimePicker: false,--}}
{{--TargetSelector: '#fromDate1',--}}
{{--GroupId: 'group1',--}}
{{--ToDate: false,--}}
{{--FromDate: false,--}}
{{--DisableBeforeToday: false,--}}
{{--Disabled: false,--}}
{{--Format: 'yyyy/MM/dd',--}}
{{--IsGregorian: true,--}}
{{--EnglishNumber: false,--}}
{{--});--}}
{{--</script>--}}

</body>
</html>
