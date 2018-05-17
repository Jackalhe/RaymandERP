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
        {!! Form::label('CategoryKindID', __('messages.Category')) !!}
        {!! Form::select('CategoryKindID', $selectionlist,null, ['class'=>'form-control'])!!}

        {{--<label for="CategoryKindID">Budget</label>--}}
        {{--<select id="CategoryKindID" name="CategoryKindID" class="form-control">--}}
            {{--@foreach($selectionlist as  $key => $value)--}}
                {{--<option value="{{$key}}" >{{$value}}</option>--}}
            {{--@endforeach--}}
        {{--</select>--}}

        {!! Form::label('Code', __('messages.Code')) !!}
        {!! Form::text('Code', null, ['class'=>'form-control'])!!}

        {!! Form::label('Title', __('messages.Title')) !!}
        {!! Form::text('Title', null, ['class'=>'form-control'])!!}

        {!! Form::label('Comment', __('messages.Comment')) !!}
        {!! Form::text('Comment', null, ['class'=>'form-control'])!!}

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



