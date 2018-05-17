
<div class="panel-default">
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                {!! Form::open(['method' => 'POST','route' => ["$route_title.submits"],'style'=>'display:inline']) !!}
                {!! Form::button('<i>'.__('messages.Update').'</i>', ['name' => 'id','type' => 'submit', 'class' => 'btn btn-primary btn-min-width mr-1 mb-1'] ) !!}
                {!! Form::close() !!}

                <button type="button" class="btn btn-warning btn-min-width mr-1 mb-1" onclick="location.href='{{isset($route_title) ? route("$route_title.index") : ''}}'">@lang('messages.Return')</button>

            </div>
        </div>
    </div>
</div>