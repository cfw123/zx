<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cases;
use App\Models\Designer;
use App\Models\M3Result;
use App\Models\Photo;
use App\Tool\stage\CaseStage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaseController extends Controller
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
        $cases = Cases::with(['designer', 'worker', 'photos'])->orderBy('updated_at', 'desc')->paginate(15);
//        dump($cases);
        return view('admin.case.index', compact('cases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $designers = Designer::where(['is_hidden' => 'F', 'cate' => 0])->get();

//        dd($designers);
        $workers = Designer::where(['is_hidden' => 'F', 'cate' => 1])->get();
//        dump($workers);
//        $ret1 = Cases::findOrFail(1)->designer()->get();
//        $ret  = Cases::findOrFail(1)->worker()->get();
//        $ph   = Cases::findOrFail(1)->photos()->get();
        return view('admin.case.create', compact(['designers', 'workers']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $case_name   = $request->input('case_name', '');
        $designer_id = $request->input('designer_id', '');
        $worker_id   = $request->input('worker_id', '');
        $case_style  = $request->input('case_style', '');
        $case_area   = $request->input('case_area', '');
        $case_site   = $request->input('case_site', '');
        $is_rem      = $request->input('is_rem', '');
        $is_hidden   = $request->input('is_hidden', '');


        $case = new Cases;

        $case->case_name   = $case_name;
        $case->designer_id = $designer_id;
        $case->worker_id   = $worker_id;
        $case->case_style  = $case_style;
        $case->case_area   = $case_area;
        $case->case_site   = $case_site;
        $case->is_rem      = $is_rem;
        $case->is_hidden   = $is_hidden;

        $case->save();
//       dump($case->id);

//
        $preview1 = $request->input('preview1', '');
        if ($preview1 != '') {
            $photo            = new Photo;
            $photo->path      = $preview1;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }

        $preview2 = $request->input('preview2', '');
        if ($preview2 != '') {
            $photo            = new Photo;
            $photo->path      = $preview2;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }


        $preview3 = $request->input('preview3', '');
        if ($preview3 != '') {
            $photo            = new Photo;
            $photo->path      = $preview3;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }


        $preview4 = $request->input('preview4', '');
        if ($preview4 != '') {
            $photo            = new Photo;
            $photo->path      = $preview4;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }


        $preview5 = $request->input('preview5', '');
        if ($preview5 != '') {
            $photo            = new Photo;
            $photo->path      = $preview5;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }


        $preview6 = $request->input('preview6', '');
        if ($preview6 != '') {
            $photo            = new Photo;
            $photo->path      = $preview6;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }

        $this->status = 0;
        $this->msg    = '添加成功';

        return $this->toJson();


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $case = Cases::with(['designer', 'worker', 'photos'])->where('id', $id)->first();
        return view('admin.case.show', compact(['case']));
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
        $case      = Cases::with(['designer', 'worker', 'photos'])->where('id', $id)->first();
        $designers = Designer::where(['is_hidden' => 'F', 'cate' => 0])->get();

        $workers = Designer::where(['is_hidden' => 'F', 'cate' => 1])->get();
        $count   = $case->photos()->count('id');

        return view('admin.case.edit', compact(['case', 'designers', 'workers', 'count']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)



        //array:12 [
        //  "_token" => "K5Nv672ZYxRi7pLkWNBQtfYVHSNf9Q3uShYpyDuW"
        //  "case_name" => "test2"
        //  "designer_id" => "设计师1"
        //  "worker_id" => "工长22"
        //  "case_style" => "简约、北欧、美式、日式"
        //  "case_type" => null
        //  "case_area" => "1"
        //  "case_site" => "1"
        //  "is_rem" => "F"
        //  "is_hidden" => "F"
        //  "preview6" => "/upload/images/20210713/7f381eb3eb0e4ed77000d4cedf1afd72.jpg"
        //  "_method
        //
        //" => "patch"
        //]
    {

//        dd($request->input());


//        dd($id);
        $case_name   = $request->input('case_name', '');
        $designer_id = $request->input('designer_id', '');
        $worker_id   = $request->input('worker_id', '');
        $case_style  = $request->input('case_style', '');
        $case_type   = $request->input('case_type', '');
        $case_area   = $request->input('case_area', '');
        $case_site   = $request->input('case_site', '');
        $is_rem      = $request->input('is_rem', '');
        $is_hidden   = $request->input('is_hidden', '');


        $case = Cases::findOrFail($id);

        $case->case_name   = $case_name;
        $case->designer_id = $designer_id;
        $case->worker_id   = $worker_id;
        $case->case_style  = $case_style;
        $case->case_type   = $case_type;
        $case->case_area   = $case_area;
        $case->case_site   = $case_site;
        $case->is_rem      = $is_rem;
        $case->is_hidden   = $is_hidden;

        $case->update();

        $ret = $case->photos()->delete();
//
        $preview1 = $request->input('preview1', '');
        if ($preview1 != '') {
            $photo            = new Photo;
            $photo->path      = $preview1;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }

        $preview2 = $request->input('preview2', '');
        if ($preview2 != '') {
            $photo            = new Photo;
            $photo->path      = $preview2;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }


        $preview3 = $request->input('preview3', '');
        if ($preview3 != '') {
            $photo            = new Photo;
            $photo->path      = $preview3;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }


        $preview4 = $request->input('preview4', '');
        if ($preview4 != '') {
            $photo            = new Photo;
            $photo->path      = $preview4;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }


        $preview5 = $request->input('preview5', '');
        if ($preview5 != '') {
            $photo            = new Photo;
            $photo->path      = $preview5;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }


        $preview6 = $request->input('preview6', '');
        if ($preview6 != '') {
            $photo            = new Photo;
            $photo->path      = $preview6;
            $photo->case_id   = $case->id;
            $photo->stage     = CaseStage::STAGE_FINISH;
            $photo->is_hidden = "F";
            $photo->save();
        }

        $this->status = 0;
        $this->msg    = '更新成功';

        return $this->toJson();


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

        $case = Cases::findOrFail($id);
        $case->destroy($id);
        $ret = $case->photos()->delete();
//        dump($ret);
        if (!$ret) {
            $this->status = 0;
            $this->msg    = '删除.$id.成功';
            return $this->toJson();
//            return  redirect()->route('home.case.index')->with('msg','删除.$id.成功');
        }

    }
}
