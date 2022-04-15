@isset($categories)
<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Kategoriler
        </div>
        <div class="card-body">
            <div id="categoryWidget" class="list-group">
                @foreach($categories as $category)
                    <li class="list-group-item @if(Request::segment(2)==$category->slug) active @endif"  style="display: inherit">
                        <a  @if(Request::segment(2)!=$category->slug) href="{{route('category',$category->slug)}}"  @endif  class=" list-group-item-action " style=" @if(Request::segment(2)==$category->slug) background-color: #0085A1  @endif">{{$category->name }}</a><span class="badge bg-secondary" style="width: 15%; height: 50%; margin-top: 4px; margin-left: 5px">{{$category->articleCount()}}</span>
                    </li>
                @endforeach
            </div>
        </div>
    </div>
</div>
    @endisset
