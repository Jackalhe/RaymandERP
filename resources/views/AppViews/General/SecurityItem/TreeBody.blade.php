<ul>
    @foreach($childs as $child)

        <li>
            <input type="checkbox" name="id[]"
                   value="{{$child->id}}" {{isset($selectparentitem) && in_array($child->id,$selectparentitem) ? 'checked' : ''}} /> {{ $child->Title }}

            @if(count($child->childs))

                @include("$view_route.TreeBody",['childs' => $child->childs])

            @endif

        </li>

    @endforeach

</ul>