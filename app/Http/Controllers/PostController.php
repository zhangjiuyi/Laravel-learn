<?php
/**
 * 创建 post 控制器
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Post;

class PostController extends Controller
{
    // 文章列表操作
    public function index() {
 
        // 查找模型
        $posts = Post::orderBy('created_at', 'desc')->paginate(4); // 数据分页

        return view("post/index", compact('posts'));
    }

    // 详情页
    public function show(Post $post) {
        return view("post/show", compact('post'));
    }

    // 创建文章页面
    public function create() {
        return view("post/create");
    }    


    //创建逻辑
    public function store() {

        // v1 
        // $post = new Post();
        // $post -> title = request('title');
        // $post -> content = request('content');
        // $post -> save();

        // v2
        // $params = ['title' => request('title'), 'content'=> request('content')];

        // v3
        $params = request(['title', 'content']);
        
        $post = Post::create($params);

        dd($post);  //dd 是laravel自带调试方法 
    }

    //编辑页面
    public function edit() {
        return view("post/edit");
    }   


    //编辑逻辑
    public function update() {
    
    }

    //删除逻辑
    public function delete() {
    
    }   
}
