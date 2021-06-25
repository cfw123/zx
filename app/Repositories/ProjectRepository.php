<?php
/**
 * Created by PhpStorm.
 * User: 35066
 * Date: 2021/5/4
 * Time: 22:10
 */

namespace App\Repositories;


use App\Models\Admin\Product;

class ProjectRepository
{
    public function byId($id)
    {
        return Product::find($id);
    }


    // 产品展示
    public function productShow()
    {
        $collection =  collect([
          Product::published() ->ofType('卫生间防水')->where('cate','工程案例')->take(2)->get(),
          Product::published() ->ofType('保温、防腐工程')->where('cate','工程案例')->take(1)->get(),
          Product::published() ->ofType('彩钢瓦防水')->where('cate','工程案例')->take(3)->get(),
        ]);

        $collapsed = $collection->collapse();
       return  $collapsed->all();

        
    }


    // 客户案例
    public function productCase()
    {
        $cates =  Product::select('subCate')->where('cate','客户案例')->distinct()->get();
        $productCases =[];
        foreach ($cates as $cate) {
//         dump ($cate->subCate);
            $productCases[]= Product::published() ->ofType($cate->subCate)->orderBy('updated_at')->first();
        }
        return $productCases;

    }


    // product   我们的服务

    public function productAll()
    {
        $products  = Product::published()->where('site','hf')->orderBy('updated_at','desc')->paginate(16);
        return $products;
    }
}