<?php

namespace App\Models;


class Designer extends Base
{
    //
    public function photo()
    {
        return $this->hasOne('App\Models\Photo');
    }
}
