<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cases;
use App\Models\Designer;
use App\Models\M3Result;
use App\Models\Photo;
use App\Tool\stage\CaseStage;
use Auth;
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


        if ($request->query('type') == 'createcase') {


            $case_name   = $request->input('case_name', '');
            $designer_id = $request->input('designer_id', '');
            $worker_id   = $request->input('worker_id', '');
            $case_style  = $request->input('case_style', '');
            $case_area   = $request->input('case_area', '');
            $case_site   = $request->input('case_site', '');
            $is_rem      = $request->input('is_rem', '');
            $is_hidden   = $request->input('is_hidden', '');

            $case              = new Cases;
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
            session()->put('temp_createcase_' . Auth::id(), $case->id);

            return $this->toJson();
        } elseif ($request->query('type') == 'createcasework') {
            $temp_caseid = session()->get('temp_createcase_' . Auth::id());

//            dd($temp_caseid);
            $preview_start_1 = $request->input('preview_start_1', '');
            if ($preview_start_1 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_start_1;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_START;
                $photo->is_hidden = "F";
                $photo->save();
            }

            $preview_start_2 = $request->input('preview_start_2', '');
            if ($preview_start_2 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_start_2;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_START;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_start_3 = $request->input('preview_start_3', '');
            if ($preview_start_3 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_start_3;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_START;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_start_4 = $request->input('preview_start_4', '');
            if ($preview_start_4 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_start_4;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_START;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_start_5 = $request->input('preview_start_5', '');
            if ($preview_start_5 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_start_5;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_START;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_start_6 = $request->input('preview_start_6', '');
            if ($preview_start_6 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_start_6;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_START;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_designe_1 = $request->input('preview_designe_1', '');
            if ($preview_designe_1 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_designe_1;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_DESIGNE;
                $photo->is_hidden = "F";
                $photo->save();
            }

            $preview_designe_2 = $request->input('preview_designe_2', '');
            if ($preview_designe_2 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_designe_2;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_DESIGNE;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_designe_3 = $request->input('preview_designe_3', '');
            if ($preview_designe_3 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_designe_3;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_DESIGNE;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_designe_4 = $request->input('preview_designe_4', '');
            if ($preview_designe_4 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_designe_4;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_DESIGNE;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_designe_5 = $request->input('preview_designe_5', '');
            if ($preview_designe_5 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_designe_5;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_DESIGNE;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_designe_6 = $request->input('preview_designe_6', '');
            if ($preview_designe_6 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_designe_6;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_DESIGNE;
                $photo->is_hidden = "F";
                $photo->save();
            }

            $preview_wall_1 = $request->input('preview_wall_1', '');
            if ($preview_wall_1 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wall_1;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WALL;
                $photo->is_hidden = "F";
                $photo->save();
            }

            $preview_wall_2 = $request->input('preview_wall_2', '');
            if ($preview_wall_2 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wall_2;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WALL;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_wall_3 = $request->input('preview_wall_3', '');
            if ($preview_wall_3 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wall_3;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WALL;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_wall_4 = $request->input('preview_wall_4', '');
            if ($preview_wall_4 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wall_4;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WALL;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_wall_5 = $request->input('preview_wall_5', '');
            if ($preview_wall_5 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wall_5;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WALL;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_wall_6 = $request->input('preview_wall_6', '');
            if ($preview_wall_6 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wall_6;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WALL;
                $photo->is_hidden = "F";
                $photo->save();
            }

///水电阶段
            $preview_water_1 = $request->input('preview_water_1', '');
            if ($preview_water_1 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_water_1;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WATER;
                $photo->is_hidden = "F";
                $photo->save();
            }

            $preview_water_2 = $request->input('preview_water_2', '');
            if ($preview_water_2 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_water_2;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WATER;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_water_3 = $request->input('preview_water_3', '');
            if ($preview_water_3 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_water_3;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WATER;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_water_4 = $request->input('preview_water_4', '');
            if ($preview_water_4 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_water_4;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WATER;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_water_5 = $request->input('preview_water_5', '');
            if ($preview_water_5 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_water_5;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WATER;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_water_6 = $request->input('preview_water_6', '');
            if ($preview_water_6 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_water_6;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WATER;
                $photo->is_hidden = "F";
                $photo->save();
            }


            // 泥瓦工阶段
            $preview_brick_1 = $request->input('preview_brick_1', '');
            if ($preview_brick_1 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_brick_1;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_BRICK;
                $photo->is_hidden = "F";
                $photo->save();
            }

            $preview_brick_2 = $request->input('preview_brick_2', '');
            if ($preview_brick_2 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_brick_2;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_BRICK;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_brick_3 = $request->input('preview_brick_3', '');
            if ($preview_brick_3 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_brick_3;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_BRICK;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_brick_4 = $request->input('preview_brick_4', '');
            if ($preview_brick_4 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_brick_4;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_BRICK;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_brick_5 = $request->input('preview_brick_5', '');
            if ($preview_brick_5 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_brick_5;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_BRICK;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_brick_6 = $request->input('preview_brick_6', '');
            if ($preview_brick_6 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_brick_6;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_BRICK;
                $photo->is_hidden = "F";
                $photo->save();
            }

// 木工阶段
            $preview_wood_1 = $request->input('preview_wood_1', '');
            if ($preview_wood_1 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wood_1;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WOOD;
                $photo->is_hidden = "F";
                $photo->save();
            }

            $preview_wood_2 = $request->input('preview_wood_2', '');
            if ($preview_wood_2 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wood_2;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WOOD;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_wood_3 = $request->input('preview_wood_3', '');
            if ($preview_wood_3 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wood_3;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WOOD;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_wood_4 = $request->input('preview_wood_4', '');
            if ($preview_wood_4 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wood_4;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WOOD;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_wood_5 = $request->input('preview_wood_5', '');
            if ($preview_wood_5 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wood_5;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WOOD;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_wood_6 = $request->input('preview_wood_6', '');
            if ($preview_wood_6 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_wood_6;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_WOOD;
                $photo->is_hidden = "F";
                $photo->save();
            }

// 油漆工阶段
            $preview_paint_1 = $request->input('preview_paint_1', '');
            if ($preview_paint_1 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_paint_1;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_PAINT;
                $photo->is_hidden = "F";
                $photo->save();
            }

            $preview_paint_2 = $request->input('preview_paint_2', '');
            if ($preview_paint_2 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_paint_2;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_PAINT;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_paint_3 = $request->input('preview_paint_3', '');
            if ($preview_paint_3 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_paint_3;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_PAINT;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_paint_4 = $request->input('preview_paint_4', '');
            if ($preview_paint_4 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_paint_4;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_PAINT;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_paint_5 = $request->input('preview_paint_5', '');
            if ($preview_paint_5 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_paint_5;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_PAINT;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_paint_6 = $request->input('preview_paint_6', '');
            if ($preview_paint_6 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_paint_6;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_PAINT;
                $photo->is_hidden = "F";
                $photo->save();
            }
// 安装阶段
            $preview_install_1 = $request->input('preview_install_1', '');
            if ($preview_install_1 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_install_1;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_INSTALL;
                $photo->is_hidden = "F";
                $photo->save();
            }

            $preview_install_2 = $request->input('preview_install_2', '');
            if ($preview_install_2 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_install_2;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_INSTALL;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_install_3 = $request->input('preview_install_3', '');
            if ($preview_install_3 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_install_3;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_INSTALL;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_install_4 = $request->input('preview_install_4', '');
            if ($preview_install_4 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_install_4;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_INSTALL;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_install_5 = $request->input('preview_install_5', '');
            if ($preview_install_5 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_install_5;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_INSTALL;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_install_6 = $request->input('preview_install_6', '');
            if ($preview_install_6 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_install_6;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_INSTALL;
                $photo->is_hidden = "F";
                $photo->save();
            }


            // 验收阶段
            $preview_check_1 = $request->input('preview_check_1', '');
            if ($preview_check_1 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_check_1;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_CHECK;
                $photo->is_hidden = "F";
                $photo->save();
            }

            $preview_check_2 = $request->input('preview_check_2', '');
            if ($preview_check_2 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_check_2;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_CHECK;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_check_3 = $request->input('preview_check_3', '');
            if ($preview_check_3 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_check_3;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_CHECK;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_check_4 = $request->input('preview_check_4', '');
            if ($preview_check_4 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_check_4;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_CHECK;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_check_5 = $request->input('preview_check_5', '');
            if ($preview_check_5 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_check_5;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_CHECK;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $preview_check_6 = $request->input('preview_check_6', '');
            if ($preview_check_6 != '') {
                $photo            = new Photo;
                $photo->path      = $preview_check_6;
                $photo->case_id   = $temp_caseid;
                $photo->stage     = CaseStage::STAGE_CHECK;
                $photo->is_hidden = "F";
                $photo->save();
            }


            $this->status = 0;
            $this->msg    = '添加施工进度成功';

            return $this->toJson();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $case    = Cases::with(['designer', 'worker'])->where('id', $id)->firstOrFail();
        $ph_case = Cases::where('id', $id)->firstOrFail();
        $photos  = [
            CaseStage::STAGE_FINISH  => $ph_case->photos->where('stage', CaseStage::STAGE_FINISH),
            CaseStage::STAGE_START   => $ph_case->photos->where('stage', CaseStage::STAGE_START),
            CaseStage::STAGE_DESIGNE => $ph_case->photos->where('stage', CaseStage::STAGE_DESIGNE),
            CaseStage::STAGE_WALL    => $ph_case->photos->where('stage', CaseStage::STAGE_WALL),
            CaseStage::STAGE_WATER   => $ph_case->photos->where('stage', CaseStage::STAGE_WATER),
            CaseStage::STAGE_BRICK   => $ph_case->photos->where('stage', CaseStage::STAGE_BRICK),
            CaseStage::STAGE_WOOD    => $ph_case->photos->where('stage', CaseStage::STAGE_WOOD),
            CaseStage::STAGE_PAINT   => $ph_case->photos->where('stage', CaseStage::STAGE_PAINT),
            CaseStage::STAGE_INSTALL => $ph_case->photos->where('stage', CaseStage::STAGE_INSTALL),
            CaseStage::STAGE_CHECK   => $ph_case->photos->where('stage', CaseStage::STAGE_CHECK),
        ];

        $labels = ['', '前期', '设计阶段', '墙体改造', '水电阶段', '泥瓦工阶段', '木工阶段', '油漆工阶段', '安装阶段', '验收阶段'];

//        dd($photos);
        return view('admin.case.show', compact(['case', 'photos', 'labels']));
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
        $case      = Cases::with(['designer', 'worker', 'photos'])->findOrFail($id);
//        dd($case);
        $designers = Designer::where(['is_hidden' => 'F', 'cate' => 0])->get();

        $workers = Designer::where(['is_hidden' => 'F', 'cate' => 1])->get();
        $count   = $case->photos->count('id');
        $photos  = [
            CaseStage::STAGE_FINISH  => $case->photos->where('stage', CaseStage::STAGE_FINISH),
            CaseStage::STAGE_START   => $case->photos->where('stage', CaseStage::STAGE_START),
            CaseStage::STAGE_DESIGNE => $case->photos->where('stage', CaseStage::STAGE_DESIGNE),
            CaseStage::STAGE_WALL    => $case->photos->where('stage', CaseStage::STAGE_WALL),
            CaseStage::STAGE_WATER   => $case->photos->where('stage', CaseStage::STAGE_WATER),
            CaseStage::STAGE_BRICK   => $case->photos->where('stage', CaseStage::STAGE_BRICK),
            CaseStage::STAGE_WOOD    => $case->photos->where('stage', CaseStage::STAGE_WOOD),
            CaseStage::STAGE_PAINT   => $case->photos->where('stage', CaseStage::STAGE_PAINT),
            CaseStage::STAGE_INSTALL => $case->photos->where('stage', CaseStage::STAGE_INSTALL),
            CaseStage::STAGE_CHECK   => $case->photos->where('stage', CaseStage::STAGE_CHECK),
        ];
        $count   = [
            $case->photos->where('stage', CaseStage::STAGE_FINISH)->count('id'),
            $case->photos->where('stage', CaseStage::STAGE_START)->count('id'),
            $case->photos->where('stage', CaseStage::STAGE_DESIGNE)->count('id'),
            $case->photos->where('stage', CaseStage::STAGE_WALL)->count('id'),
            $case->photos->where('stage', CaseStage::STAGE_WATER)->count('id'),
            $case->photos->where('stage', CaseStage::STAGE_BRICK)->count('id'),
            $case->photos->where('stage', CaseStage::STAGE_WOOD)->count('id'),
            $case->photos->where('stage', CaseStage::STAGE_PAINT)->count('id'),
            $case->photos->where('stage', CaseStage::STAGE_INSTALL)->count('id'),
            $case->photos->where('stage', CaseStage::STAGE_CHECK)->count('id'),
        ];
//dd($count);
        return view('admin.case.edit', compact(['case', 'designers', 'workers', 'count', 'photos']));
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
        if ($request->query('type') == 'case') {
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

            $case->photos()->where('stage', 0)->delete();
//
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
        } elseif ($request->query('type') == 'casework') {
            $case      = Cases::findOrFail($id);
            $caseDeles = $case->photos->whereNotIn('stage', [0]);
            foreach ($caseDeles as $caseDele) {
                $caseDele->delete();
            }


            $previewArr = [
                'preview_start_',
                'preview_designe_',
                'preview_wall_',
                'preview_water_',
                'preview_brick_',
                'preview_wood_',
                'preview_paint_',
                'preview_install_',
                'preview_check_',

            ];
            for ($i = 0; $i < 9; $i++) {

                for ($j = 1; $j < 7; $j++) {

                    ${$previewArr[$i] . $j} = $request->input($previewArr[$i] . $j, '');

//                    dump(${$previewArr[$i] . $j});
                    if (${$previewArr[$i] . $j} != '') {
                        $photo            = new Photo;
                        $photo->path      = ${$previewArr[$i] . $j};
                        $photo->case_id   = $case->id;
                        $photo->stage     = $i + 1;
                        $photo->is_hidden = "F";
                        $photo->save();
                    }

                }

            }

            $this->status = 0;
            $this->msg    = '更新成功';
            return $this->toJson();

        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
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
