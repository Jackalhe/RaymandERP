@foreach($tablelists as $tablelist)
    <tr >
        <td><input type="checkbox" name="id[]" value="{{$tablelist->id}}" {{isset($selectparentitem) && in_array($tablelist->id,$selectparentitem) ? 'checked' : ''}} />&nbsp;</td>
            @foreach($table_cols as $table_col)
                <td>{{$tablelist->$table_col}}</td>
            @endforeach
        <td >
            <a href="{{isset($route_title) ? route("$route_title.edit",$tablelist->id) : ''}}"><i class="icon-edit"></i></a>
            <a href="{{route('OrganizationRole.access',$tablelist->id)}}"><i class="icon-list"></i></a>
            {{--<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">--}}
                {{--<button type="button" class="btn btn-outline-primary">Primary</button>--}}
                {{--<button type="button" class="btn btn-outline-secondary">Secondary</button>--}}
                {{--<button type="button" class="btn btn-outline-danger">Danger</button>--}}
                {{--<button type="button" class="btn btn-outline-info">Info</button>--}}
                {{--<button type="button" class="btn btn-outline-warning">Warning</button>--}}
            {{--</div>--}}
            {{ Form::open(['route' => ["$route_title.destroy", $tablelist->id], 'method' => 'DELETE','style'=>'display:inline' ]) }}
            <a href="#" class="btn_destroy"><i class="icon-trash-a"></i></a>
            {!! Form::close() !!}

        </td>
    </tr>
@endforeach