@extends('layout.main')

@section('content')
    @include('layout.msg')

    <div class="page-container">
        <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l">
            <a href="{{ route('admin.designer.create',['type'=>'designer']) }}" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加设计师</a></span>
            &nbsp;
            &nbsp;

            <a href="{{ route('admin.designer.create',['type'=>'work']) }}" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加工长</a></span>

        </div>

        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <th width="80">ID</th>
                    <th width="100">姓名</th>
                    <th width="100">电话</th>
                    <th width="100">擅长风格</th>
                    <th width="100">职称</th>
                    <th width="100">从业年限</th>
                    <th width="100">评价</th>
                    <th width="100">人气</th>
                    <th width="100">理念</th>
                    <th width="100">图片</th>
                    <th width="100">是否隐藏</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($designers as $designer)
                    <tr>
                        <td>{{$designer->id}}</td>
                        <td>{{$designer->designer_name}}</td>
                        <td>{{$designer->designer_phone}}</td>
                        <td>{{$designer->style}}</td>
                        <td>{{$designer->job}}</td>
                        <td>{{$designer->year}}</td>
                        <td>{{$designer->rank}}</td>
                        <td>{{$designer->popular}}</td>
                        <td>{{$designer->des}}</td>
                        <td><img src="{{ isset($designer->photo->path) ? $designer->photo->path : '' }}" alt=""></td>
                        <td>{{$designer->is_hidden}}</td>

                        <td>
                            <a style="text-decoration:none" class="ml-12"
                               href="{{ route('admin.designer.edit',$designer->id) }}"><i
                                        class="Hui-iconfont">&#xe60c;</i>
                            </a>
                            &nbsp; &nbsp;

                            <a title="删除" href="javascript:;"
                               onclick='nav_del(this,"{{ route('admin.designer.destroy',$designer->id) }}")'
                               class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                        </td>
                        @empty
                            <td colspan="12">暂无数据</td>
                    </tr>
                @endforelse
                </tbody>

            </table>
            {{ $designers->links() }}
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
                }
            });

            //return false;
        }
    </script>
@endsection

