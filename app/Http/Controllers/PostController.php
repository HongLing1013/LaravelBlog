<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBlogPost;
use App\Models\Tag;
use Illuminate\Support\Facades\Log;

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
        $posts = Post::paginate(5);

        return view('posts.index' , ['posts' => $posts ]); //veiw 在posts資料夾下的index.blade.php 把值傳進去
    }

    public function indexWithCategory(Category $category)
    {
        // 只抓取該分類的文章
        $posts = Post::where('category_id' , $category->id)->paginate(5);

        return view('posts.index' , ['posts' => $posts]);
    }

    public function indexWithTag(Tag $tag)
    {
        $posts = $tag->posts;

        return view('posts.index' , ['post' => $posts ]); //veiw 在posts資料夾下的index.blade.php 把值傳進去
   
    }

    public function create()
    {
        $post = new Post;
        $categories = Category::all();
        return view('posts.create' , ['post' => $post , 'categories' => $categories]);
    }

    public function store(StoreBlogPost $request)
    {
        /* 處理圖片上傳 */

        /* =======================================================
         * 傳來的路徑存在storage/app/public/thumbnails資料夾下
         * url會是http://localhost:8000/storage/thumbnails/xxxxx.jpg
         * 直接log出來的路徑會是public/thumbnails/xxxxx.jpg"
         * 所以要處理路徑
         * ====================================================== */
        $path = $request->file('thumbnail')->store('public/thumbnails'); //把圖片存到public/thumbnails資料夾下
        $path = str_replace('public/','/storage/',$path); //把public/取代成storage/

        $post = new Post;
        $post->fill($request->all());//把從create.blase.php收到的資料填入post存入$post
        $post->user_id = Auth::id(); //取得USER ID
        $post->thumbnail = $path; //把路徑存入資料庫
        $post->save();//存入資料庫

        $tags = $this->stringToTags($request->tags);
        $this->addTagsToPost($tags , $post);

        return redirect('/posts/admin');
    }

    private function stringToTags($string)
    {
        $tags = explode(',' , $string); //把字串轉成陣列
        $tags = array_filter($tags); //過濾空值

        foreach($tags as $key => $tag){
            $tags['$key'] = trim($tag); //去除空白
        }

        return $tags;
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
        $prevPostId = Post::where('id' , '<' , $post->id)->max('id');
        $nextPostId = Post::where('id' , '>' , $post->id)->min('id');
        return view('posts.show' , ['post' => $post , 'prevPostId' => $prevPostId , 'nextPostId' => $nextPostId]);
    }

    public function showByAdmin(Post $post)
    {
        return view('posts.showByAdmin' , ['post' => $post]);
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
        if(!is_null($request->file('thumbnail'))){
            $path = $request->file('thumbnail')->store('public/thumbnails'); //把圖片存到public/thumbnails資料夾下
            $path = str_replace('public/','/storage/',$path); //把public/取代成storage/
            
            $post->thumbnail = $path;
        }
        $post->save();

        // 刪除原本的tags 避免重複儲存
        $post->tags()->detach(); //detach() 會把所有關聯的資料刪除

        // 新增新的tags
        $tags = $this->stringToTags($request->tags);
        $this->addTagsToPost($tags , $post);

        return redirect('/posts/admin');
    }

    public function destroy(Post $post)
    {
        $post->delete();
    }
}
