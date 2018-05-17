@extends('layouts.Main')

@section('content')
    @include('layouts.partial.ValidationErrors')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">

    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form-center">{{$form_title}}</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload" onclick="location.href=''"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">

                        @yield('OpenForm')
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-body">
                                        @yield('InputForm')
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions center">
                                @yield('SubmitForm')
                            </div>
                        @yield('CloseForm')

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>



