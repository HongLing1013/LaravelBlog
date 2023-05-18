<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreBlogPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $post = request()->post; //找到文章
        if ($post->user_id === Auth::id()){//檢查文章的發文者是否跟使用者id吻合
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // 設定長度title長度255 所有欄位必填
        return [
            'title' => 'required|max:255',
            'content' => 'required',
        ];
    }
}
