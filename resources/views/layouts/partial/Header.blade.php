<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-textdirection="rtl" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="@lang('messages.description')">
    <meta name="keywords" content="@lang('messages.keywords')">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@lang('messages.AppName')</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{url("")}}/app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url("")}}/app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url("")}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url("")}}/app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{url("")}}/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="{{url("")}}/app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    @if(__('messages.TextDir')=='ltr')
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css/bootstrap.css">
    @else
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css-rtl/bootstrap.css">
    @endif
    <!-- END VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/vendors/css/extensions/pace.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/css/sweetalert2.min.css">




    <!-- BEGIN ROBUST CSS-->
    @if(__('messages.TextDir')==='ltr')
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css/app.css">
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css/colors.css">
    @else
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css-rtl/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css-rtl/app.css">
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css-rtl/colors.css">
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css-rtl/custom-rtl.css">
    @endif
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    @if(__('messages.TextDir')=='ltr')
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css/core/colors/palette-gradient.css">
    @else
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css-rtl/core/menu/menu-types/vertical-overlay-menu.css">
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css-rtl/core/colors/palette-gradient.css">
    @endif
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    @if(__('messages.TextDir')=='ltr')
        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    @else
        <link rel="stylesheet" type="text/css" href="{{url("")}}/assets/css/style-rtl.css">
        <link href="{{url("")}}/css/styles.css" rel="stylesheet">
    @endif
    <!-- END Custom CSS-->
    @yield('addcss')
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">