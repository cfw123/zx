@extends('layout.main')

@section('content')
    @include('layout.msg')


    <div class="page-container">
        <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l">
            <a href="{{ route('admin.worksite.create') }}" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加在建工地</a></span>
        </div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <th width="80">ID</th>
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
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>

                @forelse($cases as $case)
                    <tr>
                    <td>{{$case->id}}</td>
                    <td>{{$case->case_name}}</td>

                    @empty
                    <td colspan="11">暂无数据</td>
                    </tr>
                    @endforelse
                {{--@forelse($cases as $case)--}}
                    {{--<tr>--}}
                        {{--<td>{{$case->id}}</td>--}}
                        {{--<td>{{$case->case_name}}</td>--}}
                        {{--<td><img src="{{$case->photos->first()['path']}}" style="height: 80px" alt=""></td>--}}
                        {{--<td>{{$case->designer->designer_name}}</td>--}}
                        {{--<td>{{$case->worker->designer_name}}</td>--}}
                        {{--<td>{{$case->case_style}}</td>--}}
                        {{--<td>{{$case->case_type}}</td>--}}
                        {{--<td>{{$case->case_area}}</td>--}}
                        {{--<td>{{$case->case_site}}</td>--}}
                        {{--<td>{{$case->is_rem}}</td>--}}
                        {{--<td>{{$case->is_hidden}}</td>--}}



                        {{--<td>--}}
                            {{--<a style="text-decoration:none" class="ml-12"--}}
                               {{--href="{{ route('admin.case.edit',$case->id) }}"><i--}}
                                        {{--class="Hui-iconfont">&#xe60c;</i>--}}
                            {{--</a>--}}
                            {{--<a title="编辑" href="{{ route('admin.case.show',$case->id) }}"--}}
                               {{--onclick='nav_show(this,"{{ route('admin.case.show',$case->id) }}")'--}}
                               {{--class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe725;</i></a>--}}
                            {{--<a title="删除" href="javascript:;"--}}
                               {{--onclick='nav_del(this,"{{ route('admin.case.destroy',$case->id) }}")'--}}
                               {{--class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>--}}
                        {{--</td>--}}
                        {{--@empty--}}
                            {{--<td colspan="13">暂无数据</td>--}}
                    {{--</tr>--}}
                {{--@endforelse--}}
                </tbody>

            </table>
{{--            {{ $cases->links() }}--}}
        </div>
    </div>
@endsection

@section('js')
    <script>


        {{--function nav_del(row, url) {--}}
            {{--// 阻止默认事件--}}

            {{--$.ajax({--}}
                {{--url,--}}
                {{--type: 'DELETE',--}}
                {{--data: {--}}
                    {{--_token: "{{ csrf_token() }}",--}}
                {{--},--}}
                {{--dataType: 'json',--}}
                {{--success: ret => {--}}
                    {{--$(row).parents('tr').remove();--}}
                    {{--layer.msg('删除成功', {time: 2000, icon: 6});--}}
                {{--}--}}
            {{--});--}}

            {{--// return false;--}}
        {{--}--}}
    </script>
@endsection

