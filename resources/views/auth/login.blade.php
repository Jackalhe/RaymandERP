<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-textdirection="rtl" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="@lang('messages.description')">
    <meta name="keywords"
          content="@lang('messages.keywords')">
    <meta name="Raymand" content="RaymandSoft">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
<!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    @if(__('messages.TextDir')=='ltr')
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
        <link rel="stylesheet" type="text/css"
              href="{{url("")}}/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css/pages/login-register.css">
    @else
        <link rel="stylesheet" type="text/css"
              href="{{url("")}}/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css"
              href="{{url("")}}/app-assets/css-rtl/core/menu/menu-types/vertical-overlay-menu.css">
        <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/css-rtl/pages/login-register.css">
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
</head>
<body data-open="click" data-menu="vertical-menu" data-col="1-column"
      class="vertical-layout vertical-menu 1-column  blank-page blank-page">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header no-border">
                            <div class="card-title text-xs-center">
                                <div class="p-1"><img src="{{url("")}}/app-assets/images/logo/robust-logo-dark.png"
                                                      alt="branding logo"></div>
                            </div>

                            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
                                <span>@lang('messages.LoginTitle')</span>
                            </h6>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <form class="form-horizontal form-simple" method="POST" action="{{ route('login') }}"
                                      novalidate>
                                    {{ csrf_field() }}
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <input type="text" class="form-control form-control-lg input-lg" id="name"
                                               name="name"
                                               placeholder="@lang('messages.UserName')" value="{{ old('name') }}"
                                               required
                                               autofocus>

                                        <div class="form-control-position">
                                            <i class="icon-head"></i>
                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="password" class="form-control form-control-lg input-lg"
                                               id="password" name="password" placeholder="@lang('messages.Password')"
                                               required>
                                        <div class="form-control-position">
                                            <i class="icon-key3"></i>
                                        </div>
                                    </fieldset>
                                    {{--</div>--}}
                                    <fieldset class="form-group row">
                                        <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                            <fieldset>
                                                <input type="checkbox" id="remember" class="chk-remember"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember">@lang('messages.RememberMe')</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a
                                                    href="{{ route('password.request') }}"
                                                    class="card-link">@lang('messages.ForgotPassword')</a>
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"><i
                                                class="icon-unlock2"></i>@lang('messages.Login')
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            {{--<div class="">--}}
                            {{--<p class="float-sm-right text-xs-center m-0">کاربر جدید هستید? <a--}}
                            {{--href="{{ route('register') }}" class="card-link">ثبت نام</a></p>--}}
                            {{--</div>--}}
                            <div class="">
                                <ul class="nav navbar-nav float-xs-left">
                                    <li class="dropdown dropdown-language nav-item">
                                        <a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false"
                                           class="dropdown-toggle nav-link">
                                            <i class="flag-icon flag-icon-{{Config::get('languages-flag')[Config::get('languages')[App::getLocale()]]}}">
                                            </i><span
                                                    class="selected-language">{{ Config::get('languages')[App::getLocale()] }}</span>
                                        </a>
                                        <div aria-labelledby="dropdown-flag" class="dropdown-menu">
                                            @foreach (Config::get('languages') as $lang => $language)
                                                @if ($lang != App::getLocale())
                                                    <a href="{{ route('lang.switch', $lang) }}" class="dropdown-item">
                                                        <i class="flag-icon flag-icon-{{Config::get('languages-flag')[$language]}}"></i> {{$language}}</a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- BEGIN VENDOR JS-->
<script src="{{url("")}}/app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="{{url("")}}/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="{{url("")}}/app-assets/js/core/app.js" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>
</html>


