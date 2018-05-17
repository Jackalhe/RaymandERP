
<div class="panel-default">
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1" onclick="location.href='{{isset($route_title) ? route("$route_title.index") : ''}}'">@lang('messages.Reload')</button>
                <button type="button" class="btn btn-success btn-min-width mr-1 mb-1" onclick="location.href='{{isset($route_title) ? route("$route_title.create") : ''}}'">@lang('messages.New')</button>

                {{--{!! Form::open(['method' => 'POST','route' => ["$route_title.store",'IsDelete'=>true],'style'=>'display:inline','IsDelete1'=>true]) !!}--}}
                {{--{!! Form::button('<i>'.__('messages.Delete').'</i>', ['name' => 'id','type' => 'submit', 'class' => 'btn btn-danger btn-min-width mr-1 mb-1'] ) !!}--}}
                {{--{!! Form::close() !!}--}}

            </div>
        </div>
    </div>
</div>