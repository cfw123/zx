<?php
/**
 * Created by PhpStorm.
 * User: xiaowu
 * Date: 2018/12/27
 * Time: 22:02
 */

namespace App\Http\Controllers\Traits;


use Illuminate\Http\Request;

trait Tools
{
    /**
     * 文件上传
     * @param Request $request
     * @return array
     */



    public function upfile(Request $request,$foldername)
    {

        $file     = $request->file('pic');
        $foldername ? $filename = $file->store( $foldername,'course'):$filename = $file->store( '','course') ;
        return ['file' => '/uploads/product/' . $filename];

    }
}