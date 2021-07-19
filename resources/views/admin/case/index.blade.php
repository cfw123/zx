@extends('layout.main')

@section('content')
    @include('layout.msg')

    <div class="page-container">
        <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l">
            <a href="{{ route('admin.case.create')}}" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加案例</a></span>
        </div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <th width="80">ID</th>
                    <th width="100">案例名</th>
                    <th width="100">案例缩略图</th>
                    <th width="100">设计师名</th>
                    <th width="100">施工工长名</th>
                    <th width="100">案例风格</th>
                    <th width="100">案例户型</th>
                    <th width="100">案例面积</th>
                    <th width="100">案例楼盘</th>

                    <th width="100">是否推荐</th>
                    <th width="100">是否隐藏</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($cases as $case)
                    <tr>
                        <td>{{$case->id}}</td>
                        <td>{{$case->case_name}}</td>
                        <td><img src="{{$case->photos->first()['path']}}" style="height: 80px" alt=""></td>
                        <td>{{$case->designer->designer_name}}</td>
                        <td>{{$case->worker->designer_name}}</td>
                        <td>{{$case->case_style}}</td>
                        <td>{{$case->case_type}}</td>
                        <td>{{$case->case_area}}</td>
                        <td>{{$case->case_site}}</td>
                        <td>{{$case->is_rem}}</td>
                        <td>{{$case->is_hidden}}</td>



                        <td>
                            <a style="text-decoration:none" class="ml-12"
                               href="{{ route('admin.case.edit',$case->id) }}"><i
                                        class="Hui-iconfont">&#xe60c;</i>
                            </a>
                            <a title="编辑" href="{{ route('admin.case.show',$case->id) }}"
                               {{--onclick='nav_show(this,"{{ route('admin.case.show',$case->id) }}")'--}}
                               class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe725;</i></a>
                            <a title="删除" href="javascript:;"
                               onclick='nav_del(this,"{{ route('admin.case.destroy',$case->id) }}")'
                               class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                        </td>
                        @empty
                            <td colspan="13">暂无数据</td>
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


        function nav_del(row, url) {
            // 阻止默认事件

            $.ajax({
                url,
                type: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                dataType: 'json',
                success: ret => {
                    $(row).parents('tr').remove();
                    layer.msg('删除成功', {time: 2000, icon: 6});
                    {{--creatIframe("{{route('admin.case.index')}}","案例列表")--}}
                }
            });

            // return false;
        }
    </script>
@endsection

