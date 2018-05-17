       {{--$datalist=\Illuminate\Support\Facades\Auth::user()->pluck('id')->toarray();--}}
{{--$datalist=\Illuminate\Support\Facades\Auth::user()->toarray();--}}
       {{--dd($datalist);--}}
    {{--$accesslist =Config::get('access');--}}
{{--dd($accesslist['General']['OrganizationRole']['index']);--}}

{{--$user_id=\Illuminate\Support\Facades\Auth::user()->pluck('id')->toarray();--}}
{{--$OrganizationRole_id=\App\Models\OrganizationRoleModel::where('OrganizationRoleID','=',1);--}}

{{--$Securable_id= DB::table('Access')--}}
    {{--->select('SecurableID')--}}
    {{--->where('OrganizationRoleID', '=', 2)--}}
    {{--->get()->pluck('SecurableID')->toarray();--}}

{{--dd(GetUserAccess(3));--}}

{{--$Total=[];--}}
{{--$Path='http://raymand.dev/General/OrganizationRole/2/edit/index.php?id=3';--}}
{{--dd(dirname($Path));--}}
{{--$results=array_filter(explode("/",$Path));--}}
{{--foreach ($results as $result) {--}}
    {{--if (!is_numeric($result)){--}}
        {{--$Total[]=$result;--}}
    {{--}--}}
{{--}--}}
{{--$accesslist =config::get('access');--}}
{{--$FormAccessID = $accesslist[$Total[0]][$Total[1]][$Total[2]];--}}
{{--//    dd(GetUserAccess($FormAccessID));--}}
{{--if (!GetUserAccess($FormAccessID)){--}}
    {{--return redirect()->back();--}}
{{--}--}}
{{--Alert::message('Robots are working!');--}}
       {{--@extends('layouts.Main')--}}
       {{--@section('content')--}}
           {{--<div class="highlight js">--}}
        {{--<pre class="editor editor-colors">--}}
            {{--<div class="line"><span class="source js"><span class="meta function-call js"><span--}}
                                {{--class="entity name function js"><span>swal</span></span><span class="meta arguments js"><span--}}
                                    {{--class="punctuation definition arguments begin bracket round js"><span>(</span></span><span--}}
                                    {{--class="string quoted double js"><span--}}
                                        {{--class="punctuation definition string begin js"><span>"</span></span><span>Hello&nbsp;world!</span><span--}}
                                        {{--class="punctuation definition string end js"><span>"</span></span></span><span--}}
                                    {{--class="punctuation definition arguments end bracket round js"><span>)</span></span></span></span><span--}}
                            {{--class="punctuation terminator statement js"><span>;</span></span></span></div></pre>--}}
           {{--</div>--}}
       {{--@endsection--}}


       {{--@section('addcss')--}}
           {{--<script> function () {--}}
                   {{--if (givenFunction) {--}}
                       {{--window[givenFunction]();--}}
                   {{--} else if (lang === "css") {--}}
                       {{--swal("Sweet!", "I like customizing!");--}}
                       {{--resetStyles();--}}
                       {{--setStyles(code);--}}
                   {{--} else {--}}
                       {{--var transpiledCode = Babel.transform(code, {--}}
                           {{--presets: ['es2015']--}}
                       {{--}).code;--}}
                       {{--eval(transpiledCode);--}}
                   {{--}--}}
               {{--}--}}
           {{--</script>--}}
       {{--@endsection--}}



               {{--<!DOCTYPE html>--}}
       {{--<html lang="{{ app()->getLocale() }}" data-textdirection="rtl" class="loading">--}}
       {{--<head>--}}
           {{--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">--}}
           {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
           {{--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">--}}
           {{--<meta name="description" content="@lang('messages.description')">--}}
           {{--<meta name="keywords" content="@lang('messages.keywords')">--}}
           {{--<meta name="author" content="PIXINVENT">--}}
           {{--<meta name="csrf-token" content="{{csrf_token()}}">--}}
           {{--<title>@lang('messages.AppName')</title>--}}
           {{--<!-- BEGIN VENDOR CSS-->--}}

           {{--<link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css-rtl/bootstrap.css">--}}

           {{--<link href="{{url("")}}/css/styles.css" rel="stylesheet">--}}
       {{--<!-- END VENDOR CSS-->--}}
           {{--<!-- font icons-->--}}
           {{--<link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/fonts/icomoon.css">--}}
           {{--<link rel="stylesheet" href="{{url("")}}/css/persianDatepicker-default.css" />--}}
       {{--</head>--}}
       {{--<body>--}}

       {{--<input type="text" id="input1" />--}}
       {{--<span id="span1"></span>--}}

       {{--<script src="{{asset('app-assets/js/core/libraries/jquery.min.js')}}" type="text/javascript"></script>--}}
       {{--<script src="js/jquery.min.js" ></script>--}}
       {{--<script src="{{url("")}}/js/persianDatepicker.min.js"></script>--}}
       {{--<script type="text/javascript">--}}
           {{--$(function() {--}}
               {{--$("#input1, #span1").persianDatepicker({--}}
                   {{--months: ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"],--}}
                   {{--dowTitle: ["شنبه", "یکشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه"],--}}
                   {{--shortDowTitle: ["ش", "ی", "د", "س", "چ", "پ", "ج"],--}}
                   {{--showGregorianDate: !1,--}}
                   {{--persianNumbers: !0,--}}
                   {{--formatDate: "YYYY/MM/DD hh:mm:ss:ms",--}}
                   {{--selectedBefore: !1,--}}
                   {{--selectedDate: null,--}}
                   {{--startDate: null,--}}
                   {{--endDate: null,--}}
                   {{--prevArrow: '\u25c4',--}}
                   {{--nextArrow: '\u25ba',--}}
                   {{--theme: 'default',--}}
                   {{--alwaysShow: !1,--}}
                   {{--selectableYears: null,--}}
                   {{--selectableMonths: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],--}}
                   {{--cellWidth: 25, // by px--}}
                   {{--cellHeight: 28, // by px--}}
                   {{--fontSize: 12, // by px--}}
                   {{--isRTL: !1,--}}
                   {{--calendarPosition: {--}}
                       {{--x: 0,--}}
                       {{--y: 0,--}}
                   {{--},--}}
                   {{--onShow: function () { },--}}
                   {{--onHide: function () { },--}}
                   {{--onSelect: function () { }--}}
               {{--});--}}
           {{--});--}}
       {{--</script>--}}
       {{--<!-- BEGIN VENDOR JS-->--}}
       {{--<!-- BEGIN PAGE VENDOR JS-->--}}



       {{--</body>--}}
       {{--</html>--}}

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
