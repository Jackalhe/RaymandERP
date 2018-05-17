<ul>

    @foreach($childs as $child)

        <li>
                <input type="checkbox" name="id[]"
                       value="{{$child->id}}" {{isset($selectparentitem) && in_array($tablelist->id,$selectparentitem) ? 'checked' : ''}} />&nbsp;{{ $child->Title }}

            @if(count($child->childs))

                @include('layouts.Treeview.manageChild',['childs' => $child->childs])

            @endif

        </li>

    @endforeach

</ul>