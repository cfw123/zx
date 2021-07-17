<?php

namespace App\Models;


class Photo extends Base
{
    //
    public function designer()
    {
        return $this->belongsTo(Designer::class);
    }
}
