@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Tag Admin Panel</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Tag Admin Panel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
    <div class="page-content">
        <div class="container">
            <ul class="list-group">
                @foreach ($tags as $key => $tag)
                    <li class="list-group-item clearfix">
                        @php // 如果有使用pull-right這個屬性的話 上一層要加clearfix 否則會跑版
                        @endphp
                        <div class="float-left">
                            <div class="title">{{ $tag->name }}</div>
                        </div>
                        <span class="float-right">
                            <button class="btn btn-danger" onclick="deleteTag({{ $tag->id }})">Delete</button>
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection



