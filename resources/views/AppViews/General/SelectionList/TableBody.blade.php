@foreach($tablelists as $tablelist)
    <tr>
        <td><input type="checkbox" name="id[]"
                   value="{{$tablelist->id}}" {{isset($selectparentitem) && in_array($tablelist->id,$selectparentitem) ? 'checked' : ''}} />&nbsp;
        </td>
        <td>{{__('selections.'.$tablelist->CategoryKind())}} </td>
        <td>{{$tablelist->Code}}</td>
        <td>{{$tablelist->Title}}</td>
        <td>{{$tablelist->Comment}}</td>
        <td>
            <a href="{{isset($route_title) ? route("$route_title.edit",$tablelist->id) : ''}}"><i class="icon-edit"></i></a>
            {{ Form::open(['route' => ["$route_title.destroy", $tablelist->id], 'method' => 'DELETE','style'=>'display:inline' ]) }}
            <a href="#" class="btn_destroy"><i class="icon-trash-a"></i></a>
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach