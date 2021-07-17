<?php

namespace App\Http\Controllers\Service;

use App\Models\M3Result;
use App\Tool\UUID;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;

class UploadController extends Controller {

    /**
     * @brief 上传文件
     */

use M3Result;
    public function uploadFile(Request $request, $type)
    {



        Log::info('图片上传');

        $width = $request->input("width", '');
        $height = $request->input("height", '');

                if( $_FILES["file"]["error"] > 0 )
        {
            $this->status = 2;
            $this->msg = "未知错误, 错误码: " . $_FILES["file"]["error"];
            return $this->toJson();
        }

        $file_size = $_FILES["file"]["size"];
        if ( $file_size >7* 1024*1024) {
            $this->status = 2;
            $this->msg = "请注意图片上传大小不能超过7M";
            return $this->toJson();
        }

        $public_dir = sprintf('/upload/%s/%s/', $type, date('Ymd') );
        $upload_dir = public_path() . $public_dir;
        if( !file_exists($upload_dir) ) {
            mkdir($upload_dir, 0777, true);
        }
        // 获取文件扩展名
        $arr_ext = explode('.', $_FILES["file"]['name']);
        $file_ext = count($arr_ext) > 1 && strlen( end($arr_ext) ) ? end($arr_ext) : "unknow";
        // 合成上传目标文件名
        $upload_filename = UUID::create();
        $upload_file_path = $upload_dir . $upload_filename . '.' . $file_ext;
        if (strlen($width) > 0) {
            $public_uri = $public_dir . $upload_filename . '.' . $file_ext;
            $this->status = 0;
            $this->msg = "上传成功";
            $this->uri = $public_uri;
        } else {
            // 从临时目标移到上传目录
            if( move_uploaded_file($_FILES["file"]["tmp_name"], $upload_file_path) )
            {
                $public_uri = $public_dir . $upload_filename . '.' . $file_ext;

                $this->status = 0;
                $this->msg = "上传成功";
                $this->uri = $public_uri;
            }
            else
            {
                $this->status = 1;
                $this->msg = "上传失败, 权限不足";
            }
        }

//        dump($this->toJson());
        return $this->toJson();
    }
}
