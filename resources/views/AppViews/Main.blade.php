@extends('layouts.Main')

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- stats -->
        @include('AppViews.Dashboard.Cards')
            <!--/ stats -->
            <!--/ project charts -->
        @include('AppViews.Dashboard.Charts')
            <!--/ project charts -->
            <!-- Recent invoice with Statistics -->
        @include('AppViews.Dashboard.Invoices')
            <!-- Recent invoice with Statistics -->
         @include('AppViews.Dashboard.Lists')

        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection

@section('addjs')
    <script src="{{url("")}}/app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    @endsection

