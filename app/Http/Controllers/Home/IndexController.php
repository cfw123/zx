<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{


    //
    public function index()
    {
        return view('home.index');
    }


    //经典案例
    public function case()
    {
        return view('home.case');
    }


    //经典案例详情
    public function caseDetail($id)
    {
        return view('home.case_detail');
    }
    
    //施工工艺
    public function craft()
    {
        return view('home.craft');
    }
    
}
