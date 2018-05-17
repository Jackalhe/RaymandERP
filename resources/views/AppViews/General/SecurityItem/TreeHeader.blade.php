<div class="items">
<ul id="tree1">
    @foreach($categories as $category)

        <li>

            <input type="checkbox" name="id[]"
                   value="{{$category->id}}" {{isset($selectparentitem) && in_array($category->id,$selectparentitem) ? 'checked' : ''}} /> {{ $category->Title }}

            @if(count($category->childs))

                @include("$view_route.TreeBody",['childs' => $category->childs])

            @endif

        </li>

    @endforeach

</ul>
</div>