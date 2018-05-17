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

