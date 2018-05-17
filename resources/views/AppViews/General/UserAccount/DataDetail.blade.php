@extends('Layouts.FormDetail.FormDetail_1')
@section('OpenForm')
    @if(isset($DataList))
        {{ Form::model($DataList, ['route' => ["$route_title.update" , $DataList->id], 'method' => 'PUT']) }}
    @else
        {{ Form::open(['route' => "$route_title.store", 'method' => 'POST']) }}
    @endif
@endsection

@section('InputForm')
    @if(isset($DataList))
        <div class="form-group">
            {!! Form::label('changepass', __('messages.NoChangePassword')) !!}
            {!! Form::checkbox('changepass', '1', false,['class'=>'form-control'])!!}
        </div>
    @endif
    <div class="form-group">
        {!! Form::label('name', __('messages.UserName')) !!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('email', __('messages.Email')) !!}
        {!! Form::email('email', null, ['class'=>'form-control'])!!}
    </div>

    <div id="PassSection" class="form-group">
        {!! Form::label('password', __('messages.Password')) !!}
        {!! Form::password('password', ['class'=>'form-control'])!!}
        <br/>
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {!! Form::label('password_confirmation', __('messages.PasswordConfirmation')) !!}
        {!! Form::password('password_confirmation', ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('OrganizationRoleID', __('forms.OrganizationRole')) !!}
        {!! Form::select('OrganizationRoleID', $OrganizationRoles, null, ['class'=>'form-control'])!!}
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

@section('addjs')
    <script>
    $(document).ready(function() {
    $('#changepass').change(function() {
    if(this.checked) {
    $('#PassSection').attr("hidden", "hidden");
    }else{
    $('#PassSection').removeAttr("hidden");
    }
    });
    });
    </script>
@endsection



