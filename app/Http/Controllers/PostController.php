<?php
/**
 * 创建 post 控制器
 */

 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // 文章列表操作
    public function index() {

        $posts = [
            [
                "title" => "this is title1",
            ],
            [
                "title" => "this is title2",
            ],
            [
                "title" => "this is title3",
            ]
        ];

        return view("post/index", compact('posts'));
    }

    // 详情页
    public function show() {
        return view("post/show", ['title'=> 'this is title', 'isShow' => false]);
    }

    // 创建文章页面
    public function create() {
        return view("post/create");
    }    


    //创建逻辑
    public function store() {
    
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
