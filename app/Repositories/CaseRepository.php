<?php
/**
 * Created by PhpStorm.
 * User: 35066
 * Date: 2021/7/25
 * Time: 10:55
 */

namespace App\Repositories;


use App\Models\Cases;

class CaseRepository
{
    public function byStage($id)
    {
        return Cases::with(['photos'=>function($query){
            $query->where('stage','$id');
    }])->where(['is_rem'=>'F'])->first();
    }
}