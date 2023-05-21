
@extends('layouts.frontend')

@section('page-title')
  <section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Blog Single</h4>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active"><a href="/posts">Blog</a>
                    </li>
                    <li class="active">Blog Single</li>
                </ol>
            </div>
        </div>
    </div>
  </section>
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!--classic image post-->
                <div class="blog-classic">
                    <div class="blog-post">
                        <div class="full-width">
                            @if(!$post->thumbnail)
                                {{-- 沒上傳圖片就使用預設圖片 --}}
                                <img src="/assets/img/post/p12.jpg" alt="thumbnail" />
                            @else
                                <img src="{{ $post->thumbnail }}" alt="thumbnail" />
                            @endif
                        </div>
                        <h4 class="text-uppercase"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                        <ul class="post-meta">
                            <li><i class="fa fa-user"></i>posted by <a href="#">{{ $post->user->name }}</a></li>
                            @if($post->category)
                                <li><i class="fa fa-folder-open"></i>  <a href="/posts/category/{{ $post->category_id }}">{{ $post->category->name }}</a></li>
                            @endif
                            <li><i class="fa fa-comments"></i>  <a href="#">4 comments</a></li>
                        </ul>

                        <p>{{ $post->content }}</p>

                        <div class="inline-block">
                            @if($post->tags->count()>0)
                                <div class="widget-tags">
                                    <h6 class="text-uppercase">Tags </h6>
                                    @foreach ($post->tags as $key => $tag)
                                        <a href="/posts/tag/{{ $tag->id }}">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                            @endif
                        </div>


                        <div class="clearfix inline-block m-top-50 m-bot-50">
                            <h6 class="text-uppercase">Share this Post </h6>
                            <div class="widget-social-link circle">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>


                        <div class="pagination-row">

                            <div class="pagination-post">
                                <div class="prev-post">
                                    <a href="#">
                                        <div class="arrow">
                                            <i class="fa fa-angle-double-left"></i>
                                        </div>
                                        <div class="pagination-txt">
                                            <span>Previous Post</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="post-list-link">
                                    <a href="#">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </div>

                                <div class="next-post">
                                    <a href="#">
                                        <div class="arrow">
                                            <i class="fa fa-angle-double-right"></i>
                                        </div>
                                        <div class="pagination-txt">
                                            <span>Next Post</span>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>


                        <!--comments discussion section start-->

                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h4 class="text-uppercase">5 Comments</h4>
                        </div>

                        <ul class="media-list comments-list m-bot-50 clearlist">

                            <!-- Comment Item start-->
                            <li class="media">

                                <a class="pull-left" href="#">
                                    <img class="media-object comment-avatar" src="/assets/img/post/a1.png" alt="" width="50" height="50">
                                </a>

                                <div class="media-body">
                                    <div class="comment-info">
                                        <div class="comment-author">
                                            <a href="#">John Doe</a>
                                        </div>
                                        July 02, 2015, at 11:34
                                        <a href="#"><i class="fa fa-comment-o"></i>Reply</a>
                                    </div>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                    </p>

                                    <!--  second level Comment start-->
                                    <div class="media">

                                        <a class="pull-left" href="#">
                                            <img class="media-object comment-avatar" src="/assets/img/post/a1.png" alt="" width="50" height="50">
                                        </a>

                                        <div class="media-body">

                                            <div class="comment-info">
                                                <div class="comment-author">
                                                    <a href="#">Maragarita Rose</a>
                                                </div>
                                                July 02, 2015, at 11:34
                                                <a href="#"><i class="fa fa-comment-o"></i>Reply</a>
                                            </div>

                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                            </p>


                                            <!-- third level Comment start -->
                                            <div class="media">

                                                <a class="pull-left" href="#">
                                                    <img class="media-object comment-avatar" src="/assets/img/post/a1.png" alt="" width="50" height="50">
                                                </a>

                                                <div class="media-body">

                                                    <div class="comment-info">
                                                        <div class="comment-author">
                                                            <a href="#">Margarita Rose</a>
                                                        </div>
                                                        July 02, 2015, at 11:34
                                                        <a href="#"><i class="fa fa-comment-o"></i>Reply</a>
                                                    </div>

                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                                    </p>


                                                </div>

                                            </div>
                                            <!-- third level Comment end -->

                                        </div>

                                    </div>
                                    <!-- second level Comment end -->

                                </div>

                            </li>
                            <!-- End Comment Item -->

                            <!-- Comment Item start-->
                            <li class="media">

                                <a class="pull-left" href="#">
                                    <img class="media-object comment-avatar" src="/assets/img/post/a1.png" alt="" width="50" height="50">
                                </a>

                                <div class="media-body">

                                    <div class="comment-info">
                                        <div class="comment-author">
                                            <a href="#">John Doe</a>
                                        </div>
                                        July 02, 2015, at 11:34
                                        <a href="#"><i class="fa fa-comment-o"></i>Reply</a>
                                    </div>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                    </p>

                                </div>

                            </li>
                            <!-- End Comment Item -->

                            <!-- Comment Item start-->
                            <li class="media">

                                <a class="pull-left" href="#">
                                    <img class="media-object comment-avatar" src="/assets/img/post/a1.png" alt="" width="50" height="50">
                                </a>

                                <div class="media-body">

                                    <div class="comment-info">
                                        <div class="comment-author">
                                            <a href="#">John Doe</a>
                                        </div>
                                        July 02, 2015, at 11:34
                                        <a href="#"><i class="fa fa-comment-o"></i>Reply</a>
                                    </div>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                    </p>

                                </div>

                            </li>
                            <!-- End Comment Item -->

                        </ul>

                        <!--comments discussion section end-->

                        <!--comments  section start-->

                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h4 class="text-uppercase">Leave a Comments</h4>
                        </div>

                        <form method="post" action="#" id="form" role="form" class="blog-comments">

                            <div class="row">

                                <div class="col-md-6 form-group">
                                    <!-- Name -->
                                    <input type="text" name="name" id="name" class=" form-control" placeholder="Name *" maxlength="100" required="">
                                </div>

                                <div class="col-md-6 form-group">
                                    <!-- Email -->
                                    <input type="email" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100" required="">
                                </div>


                                <div class="form-group col-md-12">
                                    <!-- Website -->
                                    <input type="text" name="website" id="website" class=" form-control" placeholder="Website" maxlength="100">
                                </div>

                                <!-- Comment -->
                                <div class="form-group col-md-12">
                                    <textarea name="text" id="text" class=" form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
                                </div>

                                <!-- Send Button -->
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-small btn-dark-solid ">
                                        Send comment
                                    </button>
                                </div>


                            </div>

                        </form>

                        <!--comments  section end-->



                    </div>
                </div>
                <!--classic image post-->

            </div>
            <div class="col-md-4">
                
                @include('posts._sidebar')  

            </div>
        </div>
    </div>
</div>
@endsection