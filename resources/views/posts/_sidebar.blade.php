@php
    $latestPosts = \App\Models\Post::orderBy('created_at','desc')->take(3)->get();
    $latestComments = \App\Models\Comment::orderBy('created_at','desc')->take(4)->get();
    $categories = \App\Models\Category::all();
    $tags = \App\Models\Tag::has('posts')->withCount('posts')->orderBy('posts_count','desc')->get(); //只抓有文章的tag
@endphp

<!--latest post widget-->
<div class="widget">
    <div class="heading-title-alt text-left heading-border-bottom">
        <h6 class="text-uppercase">latest post</h6>
    </div>
    <ul class="widget-latest-post">
        @foreach($latestPosts as $key => $post)
        <li>
            <div class="thumb">
                <a href="/posts/{{ $post->id }}">
                    @if($post->thumbnail)
                        <img src="{{ $post->thumbnail }}" alt="thumbnail">
                    @else
                        <img src="/assets/img/post/post-thumb.jpg" alt="" />
                    @endif
                </a>
            </div>
            <div class="w-desk">
                <a href="#">{{ $post->title }}</a>
                {{ $post->created_at->format('F d, Y') }}
            </div>
        </li>
        @endforeach
    </ul>
</div>
<!--latest post widget-->

<!--category widget-->
<div class="widget">
    <div class="heading-title-alt text-left heading-border-bottom">
        <h6 class="text-uppercase">category</h6>
    </div>
    <ul class="widget-category">
        @foreach($categories as $category)
            <li><a href="/posts/category/{{ $category->id }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>
<!--category widget-->

<!--comments widget-->
<div class="widget">
    <div class="heading-title-alt text-left heading-border-bottom">
        <h6 class="text-uppercase">Latest comments </h6>
    </div>
    <ul class="widget-comments">
        @foreach ($latestComments as $key => $comment)
            <li>{{ $comment->name }} on <a href="/posts/{{ $comment->post->id }}">{{ $comment->post->title }}</a></li>
        @endforeach
    </ul>
</div>
<!--comments widget-->

<!--tags widget-->
<div class="widget">
    <div class="heading-title-alt text-left heading-border-bottom">
        <h6 class="text-uppercase">tag cloud</h6>
    </div>
    <div class="widget-tags">
        @foreach ($tags as $key => $tag)
            <a href="/posts/tag/{{ $tag->id }}">{{ $tag->name }}</a>
        @endforeach
    </div>
</div>
<!--tags widget-->