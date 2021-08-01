<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cases;
use App\Models\Photo;
use App\Repositories\CaseRepository;
use DB;
use function foo\func;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GongdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->query('type', '');


        $kw = $request->get('case_name', '');

//        dump($kw);
        $startDate1 = $request->query('startDate', '2021-06-06');
        $endDate1   = $request->query('endDate', date('Y-m-d'));
        $startDate  = $startDate1 . ' 00:00:00';
        $endDate    = $endDate1 . ' 23:59:59';


//        dump($startDate, $endDate);
        $case_stage = $request->query('case_stage', 9);
        $case_opt   = $request->query('case_opt', 1);
        $case_opt1  = $case_opt == '0' ? '=' : '<=';
//        dump($case_opt, $case_stage);
        if ($type == 'nowork') {


            $cases = Cases::whereDoesntHave('photos')->where(['is_rem' => 'F'])->orderBy("updated_at", 'desc')->paginate(15);
            $cases = $cases->appends(
                ['type' => 'nowork']
            );
            $count = Cases::whereDoesntHave('photos')->where(['is_rem' => 'F'])->count();

        } else {
            //  施工阶段进度查询 存在阶段
            $cases = Cases::whereHas('photos', function ($query) use ($case_opt1, $case_stage) {
                $query->groupBy('case_id')
                    ->havingRaw('MAX(stage)' . $case_opt1 . $case_stage);
            })->whereBetween('created_at', [$startDate, $endDate])->where(['is_rem' => 'F'])->orderBy("updated_at", 'desc')->paginate(10);
            $count = Cases::whereHas('photos', function ($query) use ($case_opt1, $case_stage) {
                $query->groupBy('case_id')
                    ->havingRaw('MAX(stage)' . $case_opt1 . $case_stage);
            })->whereBetween('created_at', [$startDate, $endDate])->where(['is_rem' => 'F'])->count();
            if (!!$kw) {
                $cases = Cases::whereHas('photos', function ($query) use ($case_opt1, $case_stage) {
                    $query->groupBy('case_id')
                        ->havingRaw('MAX(stage)' . $case_opt1 . $case_stage);
                })->whereBetween('created_at', [$startDate, $endDate])->where(['is_rem' => 'F'])
                    ->where('case_name', 'like', "%{$kw}%")->orwhere('case_site', 'like', "%{$kw}%")->paginate(10);

                $count = Cases::whereHas('photos', function ($query) use ($case_opt1, $case_stage) {
                    $query->groupBy('case_id')
                        ->havingRaw('MAX(stage)' . $case_opt1 . $case_stage);
                })->whereBetween('created_at', [$startDate, $endDate])->where(['is_rem' => 'F'])->where('case_name', 'like', "%{$kw}%")->orwhere('case_site', 'like', "%{$kw}%")->count();
            }


            $cases = $cases->appends(array(
                    'case_opt'   => $case_opt,
                    'case_stage' => $case_stage,
                    'startDate'  => $startDate1,
                    'endDate'    => $endDate1,
                    'case_name'         => $kw
                )
            );

        }


        return view('admin.worksite.index', compact(['type', 'cases', 'count', 'case_opt', 'case_stage', 'startDate1', 'endDate1', 'kw']));
    }


}
