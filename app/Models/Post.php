<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [ 'title' , 'content' , 'category_id']; // 可以被批量賦值的欄位

    public function user(){
        // 一對一關聯
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        // 一對一關聯
        return $this->belongsTo('App\Models\Category');
    }

    public function tags()
    {
        // 多對多關聯
        return $this->belongsToMany('App\Models\Tag');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function tagsString()
    {
        $tagsName = [];
        foreach ($this->tags as $key => $tag){
            $tagsName[] = $tag->name;
        }

        $tagsString = implode(',' , $tagsName);

        return $tagsString;
    }
}
