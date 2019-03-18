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
// tinker 标准的创建文章的脚本
>>> $post = new \App\Post();
=> App\Post {#2914}
>>> $post ->title = "this is post1";
=> "this is post1"
>>> $post->content = "this is post1 content";
=> "this is post1 content"
>>> $post->save();
=> true
```



