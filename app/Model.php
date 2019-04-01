<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;


// 表 => psots
class Model extends BaseModel
{
    protected $guarded = []; // 不可以注入的字段
}
