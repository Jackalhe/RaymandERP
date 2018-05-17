
<div class="panel-default">
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1" onclick="location.href='{{isset($route_title) ? route("$route_title.index") : ''}}'">@lang('messages.Reload')</button>
                <button type="button" class="btn btn-success btn-min-width mr-1 mb-1" onclick="location.href='{{isset($route_title) ? route("$route_title.create") : ''}}'">@lang('messages.New')</button>
                {{--<button type="submit" name ="id" data-toggle="confirmation" class="btn btn-danger btn-min-width mr-1 mb-1" >@lang('messages.Delete')</button>--}}

                {!! Form::open(['method' => 'POST','route' => ["$route_title.submits"],'style'=>'display:inline']) !!}
                {!! Form::button('<i>'.__('messages.Delete').'</i>', ['name' => 'Detail','value' => '1','type' => 'submit', 'class' => 'btn btn-danger btn-min-width mr-1 mb-1'] ) !!}
                {!! Form::button('<i>'.__('forms.UserAccount').'</i>', ['name' => 'Detail','value' => '2','type' => 'submit', 'class' => 'btn btn-warning btn-min-width mr-1 mb-1'] ) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>