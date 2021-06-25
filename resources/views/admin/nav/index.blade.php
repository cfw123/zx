@extends('layout.main')

@section('content')
    @include('layout.msg')

    <div class="page-container">
        <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l">
            <a href="{{ route('admin.nav.create')}}" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加轮播图</a></span>
        </div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <th width="80">ID</th>
                    <th width="100">编号</th>
                    <th width="100">图片</th>
                    <th width="100">是否隐藏</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($nav as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->num}}</td>
                        <td><img src="{{ $item->path }}" alt="">
                        <td>{{$item->is_hidden}}</td>
                        <td>
                            <a style="text-decoration:none" class="ml-12"
                               href="{{ route('admin.nav.edit',$item->id) }}" ><i class="Hui-iconfont">&#xe60c;</i>
                            </a>
                            &nbsp; &nbsp;
                            {{--<a title="编辑" href="javascript:;" onclick='nav_edit("编辑轮播","{{ route('admin.nav.edit',$item->id) }}")' class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe60c;</i></a>--}}
                            <a title="删除" href="javascript:;" onclick='nav_del(this,"{{ route('admin.nav.destroy',$item->id) }}")' class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                        </td>
                        @empty
                            <td colspan="5">暂无数据</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script>




        function nav_del(row,url) {
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
                    layer.msg('删除成功',{time:2000,icon:6});
                }
            });

            //return false;
        }
    </script>
@endsection

