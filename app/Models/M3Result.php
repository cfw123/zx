<?php

namespace App\Models;

trait M3Result {

  public $code;
  public $message;
  public $data;

  public function ResponseJson($code=0,$message='success',$data=[])
  {
    return json_encode([$code,$message,$data]);
  }

}
