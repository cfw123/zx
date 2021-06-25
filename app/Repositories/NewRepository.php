<?php
/**
 * Created by PhpStorm.
 * User: 35066
 * Date: 2021/5/4
 * Time: 22:10
 */

namespace App\Repositories;


use App\Models\Admin\News;

class NewRepository
{
    public function byId($id)
    {
        return News::find($id);
    }


    // 产品展示
    public function newShow()
    {

        $data['公司'] = News::published()->ofType('公司新闻')->where('cate', '新闻动态')->where('site', 'hs')->take(3)->get();
        $data['行业'] = News::published()->ofType('行业新闻 ')->where('cate', '新闻动态')->take(3)->where('site', 'hs')->get();


        return $data;


    }


}