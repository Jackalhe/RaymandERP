@extends('layouts.Main')
@section('addcss')
    <link rel="stylesheet" type="text/css" href="{{url("")}}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/vendors/css/sliders/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/vendors/css/extensions/pace.css">
    {{--<style>--}}
        {{--li:focus {--}}
            {{--background: lightgreen;--}}
        {{--}--}}
    {{--</style>--}}

    @if(__('messages.TextDir')=='ltr')
        <link rel="stylesheet" type="text/css" href="{{url("")}}/css/treeview.css">
    @else
        <link rel="stylesheet" type="text/css" href="{{url("")}}/css/treeview-rtl.css">
    @endif

@endsection

@section('content')
    @include('layouts.partial.ValidationErrors')
{{--    @include('Layouts.partial.MessageHandler')--}}
    <form action="" method="post">
        {{csrf_field()}}
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="dom">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{$form_title}}</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                            <li><a data-action="reload" onclick="location.href='{{isset($route_title) ? route("$route_title.index") : ''}}'"><i class="icon-reload"></i></a></li>
                                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block card-dashboard">
                                        {{--<p class="card-text">Events assigned to the table can be exceptionally useful for user interaction, however you must be aware that DataTables will add and remove rows from the DOM as they are needed (i.e. when paging only the visible elements are actually available in the DOM). As such, this can lead to the odd hiccup when working with events.</p>--}}
                                        @yield('OperationButton')
                                        <div class="row">
                                                <div class="col-md-12">
                                                    @yield('TreeHeader')
                                               </div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

            </div>
        </div>
    </div>
    </form>
@endsection


@section('addjs')

    <script src="{{url("")}}/js/jquery-1.12.4.js" type="text/javascript"></script>

    <script src="{{url("")}}/app-assets/vendors/js/ui/jquery-sliding-menu.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/sliders/slick/slick.min.js" type="text/javascript"></script>
    <script src="{{url("")}}/js/jquery-1.12.4.js" type="text/javascript"></script>

    <script src="{{url("")}}/app-assets/js/scripts/ui/fullscreenSearch.min.js" type="text/javascript"></script>
    <script src="{{url("")}}/js/treeview.js" type="text/javascript"></script>
    {{--<script>--}}
        {{--$(document).ready(function() {--}}
        {{--$(".items ul li").click(function(){--}}
        {{--$(".items ul li").css("color","inherit");--}}
        {{--$(this).css("color","green");--}}
        {{--});--}}
        {{--});--}}
    {{--</script>--}}


@endsection
