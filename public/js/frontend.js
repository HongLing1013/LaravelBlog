$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

// 使用全域變數 使其在每個頁面都可以吃到這個function
deletePost = function(id){
  let result = confirm('確定刪除嗎?');
  // console.log(result);
  if(result){
      let actionUrl = '/posts/' + id;
      // console.log(actionUrl);
      $.post(actionUrl, {_method: 'delete'}).done(function(){
          location.href = '/posts/admin';
      });
  }
}

deleteCategory = function(id){
  let result = confirm('確定刪除嗎?');
  // console.log(result);
  if(result){
      let actionUrl = '/categories/' + id;
      // console.log(actionUrl);
      $.post(actionUrl, {_method: 'delete'}).done(function(){
          location.href = '/categories';
      });
  }
}

deleteTag = function(id){
  let result = confirm('確定刪除嗎?');
  // console.log(result);
  if(result){
      let actionUrl = '/tags/' + id;
      // console.log(actionUrl);
      $.post(actionUrl, {_method: 'delete'}).done(function(){
          location.href = '/tags';
      });
  }
}

/* 如果在編輯模式的話 切換成input */
toggleCommentForm = function(e){
  $(e.currentTarget).closest('.comment-info').siblings('.comment-body').toggleClass('edit')
}

/* 當留言的編輯被按下時 要擋下送出 另做處理 */
$('form.update-comment').submit(function(e){
  e.preventDefault(); // 阻擋預設送出行為

  let comment = $(e.currentTarget).find('[name="comment"]').val();

  $.post($(e.currentTarget).attr('action'), {// 送出的資料
    _method: 'put',
    comment: comment,
  }).done(function(data){// 成功後的處理
    $(e.currentTarget).closest('.comment-body').toggleClass('edit');// 切換回原本的留言模式
    $(e.currentTarget).siblings('p').html(comment);// 更新留言內容
  });
});