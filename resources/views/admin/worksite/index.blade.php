@extends('layout.main')

@section('content')
    @include('layout.msg')



    <div class="page-container">
        @if(! $type)
        <div class="cl pd-5 bg-1 bk-gray mt-20">

            <form action="" method="get" class="form-horizontal" enctype="application/x-www-form-urlencoded"
                  role="form">


                <div class="row cl" style="margin: 9px 1px ;">
                    <div class="col-sm-6">
                        <label class="col-sm-3">起始日期</label>

                        <input name="startDate" value="{{ $startDate1 }}" type="date" placeholder="起始日期"/>
                    </div>
                    <div class="col-sm-6">
                        <label class="col-sm-3">截至日期</label>

                        <input name="endDate" value="{{ $endDate1 }}" type="date" placeholder="截至日期"/>
                    </div>

                </div>
                <div class="row cl" style="margin: 9px 1px ;">
                    <div class="col-sm-6">

                        <label class=" col-sm-3">是否包含前期</label>

                        <div class="col-sm-3">
                            <select name="case_opt" id="inputID" class="form-control">
                                <option value="1">===========</option>
                                <option value="1" @if( $case_opt ==1) selected="selected" @endif> 是</option>
                                <option value="0" @if( $case_opt ==0) selected="selected" @endif> 否</option>

                            </select>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class=" col-sm-3">施工进度</label>

                        <div class="col-sm-3">
                            <select name="case_stage" id="inputID" class="form-control">
                                <option value="9">===========</option>
                                <option value="1" @if( $case_stage ==1) selected="selected" @endif> 前期</option>
                                <option value="2" @if( $case_stage ==2) selected="selected" @endif> 设计阶段</option>
                                <option value="3" @if( $case_stage ==3) selected="selected" @endif> 墙体改造</option>
                                <option value="4" @if( $case_stage ==4) selected="selected" @endif> 水电阶段</option>
                                <option value="5" @if( $case_stage ==5) selected="selected" @endif> 泥瓦工阶段</option>
                                <option value="6" @if( $case_stage ==6) selected="selected" @endif> 木工阶段</option>
                                <option value="7" @if( $case_stage ==7) selected="selected" @endif> 油漆工阶段</option>
                                <option value="8" @if( $case_stage ==8) selected="selected" @endif> 安装阶段</option>
                                <option value="9" @if( $case_stage ==9) selected="selected" @endif> 验收阶段</option>
                            </select>

                        </div>
                    </div>

                </div>
                <div class="row cl" style="margin: 9px 1px ;">

                    <div class="col-sm-6">
                        <label class="col-sm-3">案例名</label>

                        <input name="case_name"  value="{{ $kw }}"  placeholder="请输入案例名"/>
                    </div>
                    <div class="col-sm-offset-8">
                        <button type="submit" class="btn btn-success radius">搜索</button>
                    </div>

                </div>



            </form>



        </div>
        @endif
            <div class="row" style="margin: 10px 10px;">
            <span class="r">共有数据：<strong>{{ $count }}</strong>条</span>
            <span class="r" style="margin: 0px 10px;">
                                <a onclick="refresh()" href="javascript:;" class="btn btn-primary radius">
                                 <i class="Hui-iconfont">&#xe68f;</i>刷新</a>
                    </span>
        </div>
    </div>

    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
            <tr class="text-c">
                <th width="60">ID</th>
                <th width="100">案例名</th>
                <th width="100">前期</th>
                <th width="100">设计阶段</th>
                <th width="100">墙体改造</th>
                <th width="100">水电阶段</th>
                <th width="100">泥瓦工阶段</th>
                <th width="100">木工阶段</th>
                <th width="100">油漆工阶段</th>

                <th width="100">安装阶段</th>
                <th width="100">验收阶段</th>
                <th width="120">创建时间</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>

            @forelse($cases as $case)
                <tr>
                    <td>{{$case->id}}</td>
                    <td>{{$case->case_name}}</td>
                    @for($i=1;$i<10;$i++)
                        {{--                            <td>{{ $i }}</td>--}}
                        @if( $case->photos->where('stage',$i)->first()['path'] !='')
                            <td><img src="{{ $case->photos->where('stage',$i)->first()['path'] }}"
                                     style="height: 60px" alt=""></td>
                        @else
                            <td style="background-color: #eeeeee">暂无数据</td>

                        @endif
                    @endfor
                    <td>
                        {{ date_format($case->created_at,'Y-m-d H:i')  }}
                    </td>
                    <td>
                        <a title="编辑" href="javascript:;"
                           onclick='case_edit("{{ route('admin.case.edit',$case->id) }}",{{$case->id}})'
                           class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe60c;</i></a>
                    </td>


                    @empty
                        <td colspan="11">暂无数据</td>
                </tr>
            @endforelse

            </tbody>

        </table>
        {{ $cases->links() }}
    </div>
    </div>
@endsection

@section('js')
    <script>
        function refresh() {
            window.location.reload();
        }

        function case_edit(url, id) {
            creatIframe(url, "案例" + id + "编辑页");
        }

    </script>
@endsection

