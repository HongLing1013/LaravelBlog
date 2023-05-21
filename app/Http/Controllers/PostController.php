<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBlogPost;
use App\Models\Tag;

class PostController extends Controller
{
    public function admin()
    {
        $posts = Post::all();
        return view('posts.admin' , [ 'posts' => $posts ]);//管理頁面給一個文章列表
    }

    public function index()
    {
        // 撈文章
        $posts = Post::all();
        $categories = Category::all();

        return view('posts.index' , ['post' => $posts , 'categories' => $categories]); //veiw 在posts資料夾下的index.blade.php 把值傳進去
    }

    public function indexWithCategory(Category $category)
    {
        // 只抓取該分類的文章
        $posts = Post::where('category_id' , $category->id)->get();
        $categories = Category::all();

        return view('posts.index' , ['post' => $posts , 'categories' => $categories]);
    }

    public function create()
    {
        $post = new Post;
        $categories = Category::all();
        return view('posts.create' , ['post' => $post , 'categories' => $categories]);
    }

    public function store(StoreBlogPost $request)
    {
        $post = new Post;
        $post->fill($request->all());//把從create.blase.php收到的資料填入post存入$post
        $post->user_id = Auth::id(); //取得USER ID
        $post->save();//存入資料庫

        $tags = explode(',' , $request->tags); //把字串轉成陣列
        $this->addTagsToPost($tags , $post);

        return redirect('/posts/admin');
    }

    private function addTagsToPost($tags , $post)
    {
        foreach($tags as $key => $tag){
            // 新增與讀取tags
            $model = Tag::firstOrCreate(['name' => $tag]);//如果沒有這個tag就新增
            // 連結tags跟文章
            $post->tags()->attach($model->id); //用post找到tag關聯性 再使model的id與tags連結
        }
    }

    public function show(Post $post)
    {
        if(Auth::check()){
            return view('posts.showByAdmin' , ['post' => $post]);
        }else{
            $categories = Category::all();
            return view('posts.show' , ['post' => $post , 'categories' => $categories]);
        }
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit' , ['post' => $post , 'categories' => $categories]);
    }

    // 因為update來的時候很多筆資料需要承接，所以需要用到Request 
    // Request 要養成好習慣 寫在前面
    public function update(StoreBlogPost $request , Post $post)
    {
        $post->fill($request->all());
        $post->save();

        // 刪除原本的tags 避免重複儲存
        $post->tags()->detach(); //detach() 會把所有關聯的資料刪除

        // 新增新的tags
        $tags = explode(',' , $request->tags);
        $this->addTagsToPost($tags , $post);

        return redirect('/posts/admin');
    }

    public function destroy(Post $post)
    {
        $post->delete();
    }
}
