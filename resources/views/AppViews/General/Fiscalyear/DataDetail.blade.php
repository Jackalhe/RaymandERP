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
        {!! Form::label('Fiscalyear', __('forms.FiscalYear')) !!}
        {!! Form::text('Fiscalyear', null, ['class'=>'form-control'])!!}

        {!! Form::label('StartDate', __('messages.StartDate')) !!}
        {!! Form::Date('StartDate', null, ['class'=>'form-control'])!!}

        {!! Form::label('EndDate', __('messages.EndDate')) !!}
        {!! Form::Date('EndDate', null, ['class'=>'form-control'])!!}

        {!! Form::label('TaxPercent', __('messages.TaxPercent')) !!}
        {!! Form::text('TaxPercent', null, ['class'=>'form-control'])!!}

        {!! Form::label('TollPercent', __('messages.TollPercent')) !!}
        {!! Form::text('TollPercent', null, ['class'=>'form-control'])!!}

        {!! Form::label('TollPercent2', __('messages.TollPercent2')) !!}
        {!! Form::text('TollPercent2', null, ['class'=>'form-control'])!!}

    </div>

@endsection

@section('SubmitForm')
    <button type="button" class="btn btn-warning mr-1" onclick="location.href='{{isset($route_title) ? route("$route_title.index") : ''}}'">
        <i class="icon-cross2"></i> @lang('messages.Cancel')
    </button>
    {!! Form::button('<i class="icon-check2">'.__('messages.Save').'</i>', ['type' => 'submit', 'class' => 'btn btn-primary'] ) !!}
@endsection

@section('CloseForm')
    {!! Form::close() !!}
@endsection



