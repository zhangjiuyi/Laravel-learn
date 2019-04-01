<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


// 表 => psots
class Post extends Model
{
    protected $guarded = []; // 不可以注入的字段

    // protected $fillable = ['title', 'content'];  // 可以注入的字段
}
