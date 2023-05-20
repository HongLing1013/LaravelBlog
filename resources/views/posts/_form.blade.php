@php
  // 從路徑判斷是否為新增頁面
    // $isCreate = request()->is('*create');
    // $actionUrl = ($isCreate) ? '/posts' : '/posts/' . $post->id;
    // 判斷$post是否存在 存在就是舊的
    $isCreate = !$post->exists;
    $actionUrl = ($isCreate) ? '/posts' : '/posts/' . $post->id;
@endphp

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $key => $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="{{ $actionUrl }}">
@csrf
@if(!$isCreate)
  <input type="hidden" name="_method" value="put">
@endif
<div class="form-group">
  <label>Title</label>
  <input type="text" class="form-control" name="title" value="{{ $post->title }}">
</div>
<div class="form-group">
  <label>Category</label>
  <select class="form-control" name="category_id">
    <option selected value>請選擇分類</option>
    @foreach ($categories as $key => $category)
      <option value="{{ $category->id }}" @if($post->category_id==$category->id) selected @endif>{{ $category->name }}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label>Content</label>
  <textarea class="form-control" name="content" cols="80" rows="8">{{ $post->content }}</textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
</form>