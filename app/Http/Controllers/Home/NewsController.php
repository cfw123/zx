<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    // 品牌中心
    public function index($id=null)
    {
        if(!!$id){
            return view('home.news_detail');
        }
        return view('home.news');
    }

}
