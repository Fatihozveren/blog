@if(count($articles)>0)
@foreach($articles as $article)
    <!-- Post preview-->
    <div class="post-preview">
        <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}">
            <h2 class="post-title">
                {{$article->title}}
            </h2>
            <img src="{{$article->image}}" alt="">
            <h3 class="post-subtitle">
                {{str_limit($article->content,75)}}
            </h3>
        </a>
        <p class="post-meta">
            <!-- Kimin tarafindan paylasildigi burada yaziyordu unutma -->
            Kategori :
            <a href="#!">{{$article->getCategory->name}}</a>
            <span style="display: inline-block; margin-left: 200px">{{$article->created_at->diffForHumans()}}</span>
        </p>
    </div>
    @if(!$loop->last)
        <hr>
    @endif
@endforeach
@else
    <div class="alert alert-danger" style="text-align: center">
        <h1>Bu kategoriye ait yazı bulunamadı</h1>
    </div>
@endif
