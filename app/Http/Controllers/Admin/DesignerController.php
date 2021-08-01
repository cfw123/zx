<?php

namespace App\Http\Controllers\Admin;

use App\Models\Designer;
use App\Models\M3Result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesignerController extends Controller
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
        $designers = Designer::with(['photo' =>
                                         function ($query) {
                                             $query->where("is_hidden", 'F');
                                         }])->where("is_hidden", 'F')
            ->orderBy('created_at','desc')->orderBy('updated_at','desc')->paginate(15);
//        dd($designers);
        return view('admin.designer.index', compact('designers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = $request->query('type');
        if ($type == 'designer') {
            return view('admin.designer.create');
        } else {
            return view('admin.designer.create_wo');
        }


        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //
        $data                   = [];
        $data['cate']           = $request->input('cate');
        $data['designer_name']  = $request->input('designer_name');
        $data['designer_phone'] = $request->input('designer_phone');
        $data['popular']        = $request->input('popular');
        $data['style']          = $request->input('style');
        $data['job']            = $request->input('job');
        $data['year']           = $request->input('year');
        $data['rank']           = $request->input('rank');
        $data['des']            = $request->input('des');
        $data['is_hidden']      = $request->input('is_hidden');

        $designer = (new Designer())->create($data);
        $designer->photo()->create(['path' => $request->input('path')]);

        return redirect()->route('admin.designer.index')->with('msg', '添加成功');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $designer = Designer::findOrFail($id);
        $designer->destroy($id);
        $ret = $designer->photo()->delete();

        if ($ret) {
            $this->status = 0;
            $this->msg    = '删除.$id.成功';
            return $this->toJson();
        }


    }
}
