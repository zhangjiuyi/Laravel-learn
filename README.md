# Laravel-learn
php laravel57 


## 启动

按照以下步骤启动项目：

`composer install`  

`php artisan serve`  


## 命令列表

* 数据库迁移 `php artisan migrate:install`
* 创建控制器 `php artisan make:controller [name]` (在 http controller目录下下生成对应的 controller)
* 生成key `php artisan key:generate`
* 创建一个migration `php artisan make:migration [mame]` 
* 执行数据库迁移 `php artisan migrate`
* 创建模型 `php artisan make:model` 
* tinker 

```
// tinker 基本的增删改查 example
* php artisan tinker
* 
Psy Shell v0.9.9 (PHP 7.2.9 — cli) by Justin Hileman
>>> $post = new \App\Post();
=> App\Post {#2914}
>>> $post->content = "this is post3 content";
=> "this is post3 content"
>>> $post ->title = "this is post3";
=> "this is post3"
>>> $post->save()
=> true
>>>
>>>
>>> \App\Post::find(2)
=> App\Post {#2922
     id: 2,
     title: "this is post1=2",
     content: "this is post2 content",
     user_id: 0,
     created_at: "2019-03-18 16:07:43",
     updated_at: "2019-03-18 16:07:43",
   }
>>> \App\Post::where('title', 'this is post1')->first();
=> App\Post {#2920
     id: 1,
     title: "this is post1",
     content: "this is post1 content",
     user_id: 0,
     created_at: "2019-03-18 16:02:28",
     updated_at: "2019-03-18 16:02:28",
   }
>>> \App\Post::where('title', 'this is post1')->get();
=> Illuminate\Database\Eloquent\Collection {#2916
     all: [
       App\Post {#2922
         id: 1,
         title: "this is post1",
         content: "this is post1 content",
         user_id: 0,
         created_at: "2019-03-18 16:02:28",
         updated_at: "2019-03-18 16:02:28",
       },
     ],
   }
>>> $post = \App\Post::find(2);
=> App\Post {#2918
     id: 2,
     title: "this is post1=2",
     content: "this is post2 content",
     user_id: 0,
     created_at: "2019-03-18 16:07:43",
     updated_at: "2019-03-18 16:07:43",
   }
>>> $post ->title='this is post2'
=> "this is post2"
>>> $post->save()
=> true
>>> $post = \App\Post::find(2);
=> App\Post {#2914
     id: 2,
     title: "this is post2",
     content: "this is post2 content",
     user_id: 0,
     created_at: "2019-03-18 16:07:43",
     updated_at: "2019-03-19 00:13:16",
   }
>>> $post->delete()
=> true
>>>
```



### 调试

laravel 自带了 dd 打印方法