<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
// 宣告Model

class BlogController extends Controller
{
    public function index(){
        // 1. 把需要的包裹包好
        $blogs = Blog::all();

        // 2. 把包裹和規格表一起丟
        return view('blog.index', [
            'blogs' => $blogs
            // '前端收到的包裹名稱' => $後端要丟的包裹名稱
        ]);
    }
    
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        
        return view('blog.show', ['blog' => $blog]);
    }

    
    public function create(Request $request){
        // 回傳View/post/create.blade.php
        return view('blog.create');
    }
    
    public function store(Request $request){
        // 插入以下驗證器
        $messages = [
            'title.required' => '標題必需填入內容。',
            'content.required' => '必須填入文章內容',
            'max' => '不可大於十個字',
            'string' => '格式須為字串'
        ];

        $this->validate($request, [
            'title' => 'required|string|max:10',
            'content' => 'required|string',
        ], $messages);
        // 插入以上驗證器
        //     title欄位: 一定要填 & 是個字串 & 最大字數為10
        //     content欄位: 一定要填 & 是個字串
        
        // 把$request丟過來的包裹儲存成一個Model包裹
        Blog::create([
            'title'=>$request->input('title'),
            'content'=>$request->input('content')
        ]);
        
        // 重新導向
        return redirect()->route('blog.index');
    }
    
    public function destroy($id){
        // 先去資料庫找找看這個post存不存在
        $blog = Blog::findOrFail($id);
        // 找到後呼叫刪除函式
        $blog->delete();
        
        // 重新導向
        return redirect()->route('blog.index');
    }
}
