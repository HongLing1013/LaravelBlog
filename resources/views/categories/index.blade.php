@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Category Admin Panel</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Category Admin Panel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
    <div class="page-content">
        <div class="container">
            <div class="mb-3 text-right">
                <a href="/categories/create" class="btn btn-primary">create category</a>
            </div>
            <ul class="list-group">
                @foreach ($categories as $key => $category)
                    <li class="list-group-item clearfix">
                        @php // 如果有使用pull-right這個屬性的話 上一層要加clearfix 否則會跑版
                        @endphp
                        <div class="float-left">
                            <div class="title">{{ $category->name }}</div>
                        </div>
                        <span class="float-right">
                            <a href="/categories/{{ $category->id }}/edit" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger" onclick="deleteCategory({{ $category->id }})">Delete</button>
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection



