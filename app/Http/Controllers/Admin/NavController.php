<?php

namespace App\Http\Controllers\Admin;

use App\Models\M3Result;
use App\Models\Nav;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavController extends Controller
{
    use M3Result;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $nav = Nav::get();
        return view('admin.nav.index', compact('nav'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.nav.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Nav::create($request->except(['_token', 'file']));
        return redirect()->route('admin.nav.index')->with('msg', '添加成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $nav = Nav::findOrFail($id);
        return view('admin.nav.edit',compact('nav'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
//        dd($request->except('_token','file','_method'));
        if($request->path == null){
            $nav['path']=Nav::findOrFail($id)->value('path');

        }else{
            $nav['path'] = $request->get('path');

        };

        $nav['num'] = $request->get('num');
        $nav['is_hidden'] = $request->get('is_hidden');


        Nav::findOrFail($id)->update($nav);
        return redirect()->route('admin.nav.index')->with('msg', '更新轮播【'.$id.'】成功');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $ret = Nav::findOrFail($id)->delete();
        if($ret){

            return  $this->ResponseJson();
        }

    }
}
