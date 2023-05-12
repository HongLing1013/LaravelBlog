@extends('layouts.frontend')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Blog Admin Panel</h4>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Blog Admin Panel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
    <div class="page-content">
        <div class="container">
            <div class="clearfix toolbox">
                <a href="/posts/create" class="btn btn-primary pull-right">create post</a>
            </div>
            <ul class="list-group">
                @foreach ($posts as $key => $post)
                    <li class="list-group-item clearfix">
                        @php // 如果有使用pull-right這個屬性的話 上一層要加clearfix 否則會跑版
                        @endphp
                        <div class="pull-left">
                            <div class="title">{{ $post->title }}</div>
                            <small class="author">{{ $post->user->name }}</small>
                        </div>
                        <span class="pull-right">
                            <a href="/posts/show/{{ $post->id }}" class="btn btn-default">View</a>
                            <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger" onclick="deletePost({{ $post->id }})">Delete</button>
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection



