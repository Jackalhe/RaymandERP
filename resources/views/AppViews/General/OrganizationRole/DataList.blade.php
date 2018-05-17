@extends('Layouts.tables.TableLists_1')

@section('OperationButton')
    @include("$view_route.OperationButton")
@endsection

@section('TableHeader')
    @include("$view_route.TableHeader")
@endsection

@section('TableBody')
    @include("$view_route.TableBody")
@endsection


{{--@extends('Layouts.tables.TableLists_1')--}}

{{--@section('OperationButton')--}}
    {{--@include('AppViews.General.OrganizationRole.OperationButton')--}}
{{--@endsection--}}

{{--@section('TableHeader')--}}
    {{--@include('AppViews.General.OrganizationRole.TableHeader')--}}
{{--@endsection--}}

{{--@section('TableBody')--}}
    {{--@include('AppViews.General.OrganizationRole.TableBody')--}}
{{--@endsection--}}

