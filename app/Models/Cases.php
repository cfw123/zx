<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cases  extends Base
{

    protected $table='cases';

    // 获取对应设计师
    public function designer()
    {
        return $this->belongsTo(Designer::class);
    }

    // 获取对工长
    public function worker()
    {
        return $this->belongsTo(Designer::class,'worker_id');
    }

    // 案例图片
    public function photos()
    {
        return $this->hasMany(Photo::class,'case_id');
    }
}
