<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorksiteController extends Controller
{
    //在建工地
    public function index()
    {
        return view('home.worksite');
    }


    // 施工详情
    public function workdetail($id)
    {
        return view('home.worksite_detail');
    }
}
