@extends('Layouts.FormDetail.FormDetail_1')
@section('OpenForm')
    @if(isset($DataList))
        {{ Form::model($DataList, ['route' => ["$route_title.update" , $DataList->id], 'method' => 'PUT']) }}
    @else
        {{ Form::open(['route' => "$route_title.store", 'method' => 'POST']) }}
    @endif
@endsection

@section('InputForm')
    <div class="form-group">
        {!! Form::label('Title', __('messages.Title')) !!}
        {!! Form::text('Title', null, ['class'=>'form-control'])!!}
    </div>

@endsection

@section('SubmitForm')
    <button type="button" class="btn btn-warning mr-1" onclick="location.href='{{isset($route_title) ? route("$route_title.index") : ''}}'">
        <i class="icon-cross2"></i> @lang('messages.Cancel')
    </button>
    {{--@if(isset($DataList))--}}
    {{--<button data-title="{{$DataList->id}}" type="button" class="btn btn-warning mr-1 btn_save_alert">--}}
        {{--<i class="icon-cross2"></i> @lang('messages.Cancel')--}}
    {{--</button>--}}
    {{--@endif--}}
    {!! Form::button('<i class="icon-check2">'.__('messages.Save').'</i>', ['type' => 'submit', 'class' => 'btn btn-primary'] ) !!}
@endsection

@section('CloseForm')
    {!! Form::close() !!}
@endsection



