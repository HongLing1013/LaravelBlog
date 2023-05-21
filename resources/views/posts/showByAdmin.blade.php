
@extends('layouts.app')

@section('page-title')
  <section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Blog Single</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/posts/admin">Blog Admin Panel</a>
                    </li>
                    <li class="breadcrumb-item active">Blog Single</li>
                </ol>
            </div>
        </div>
    </div>
  </section>
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <h1 class="mb-0">{{ $post->title }}</h1>
        @if(isset($post->category))
            <small class="d-block text-muteed">{{ $post->category->name }}</small>
        @endif
        <small class="d-block text-muted">{{ $post->tagsString() }}</small>
        <small class="author"> {{ $post->user->name }} </small>
        <div class="toolbox text-left mt-3">
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
            <button class="btn btn-danger" onclick="deletePost({{ $post->id }})">Delete</button>
        </div>
        <div class="content">
            {{ $post->content }}
        </div>
    </div>
</div>
@endsection