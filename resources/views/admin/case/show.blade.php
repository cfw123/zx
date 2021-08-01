@extends('layout.main')

@section('content')
    <style>
        img {
            width: 13% !important;
            height: 10% !important;
        }
    </style>


    <article class="page-container">

        <div class="col-xs-12 col-sm-6">
            <form action="" method="post" class="form form-horizontal" id="form-admin-case-add">
                {{--<input type="hidden" name="_token" value="{{csrf_token()}}"/>--}}


                <div class="row cl">
                    <label class="form-label col-sm-2"><span class="c-red">*</span>案例名:</label>
                    <div class="formControls col-sm-4">
                        <p>{{ $case->case_name }}</p>
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-sm-2"><span class="c-red">*</span>设计师名:</label>

                    <div class="col-sm-4">
                        <p>{{ $case->designer->designer_name}}</p>

                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-sm-2"><span class="c-red">*</span>施工工长名:</label>
                    <div class="formControls col-sm-4">

                        <p>{{ $case->worker->designer_name}}</p>
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-sm-2"><span class="c-red">*</span>案例风格:</label>

                    <div class="col-sm-10">
                        <p>{{ $case->case_style ?  : "暂无数据"}}</p>

                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-sm-2"><span class="c-red">*</span>案例户型:</label>
                    <div class="formControls col-sm-4">
                        <p>{{ $case->case_type or "暂无数据"}}</p>
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-sm-2"><span class="c-red">*</span>案例面积:</label>
                    <div class="formControls col-sm-4">
                        <p>{{ $case->case_area or  "暂无数据" }} </p>
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-sm-2"><span class="c-red">*</span>案例楼盘:</label>
                    <div class="formControls col-sm-4">
                        <p>{{ $case->case_site or "暂无数据"}}</p>
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">图片：</label>


                    <div class="formControls col-xs-8 col-sm-9">
                        @foreach($photos[0] as $photo)
                            {{--{{ dump($photo) }}--}}
                            <img id="preview_id6" src="{{ $photo->path }}"
                                 style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                            />
                        @endforeach
                    </div>

                </div>

                <div class="row cl">
                    <label class="form-label col-sm-2">是否完工：</label>

                    <p>{{ $case->is_rem }}</p>


                </div>
                <div class="row cl">
                    <label class="form-label col-sm-2">是否隐藏：</label>
                    <p>{{ $case->is_hidden }}</p>


                </div>

            </form>
        </div>
        <div class="col-xs-12 col-sm-6">
            <form action="" method="post" class="form form-horizontal" id="form-admin-casework-add">
                @for($i = 1; $i < 10; $i++)
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">{{ $labels[$i] }}：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        @forelse($photos[$i] as $photo)
                            {{--{{ dump($photo) }}--}}
                            <img  src="{{ $photo->path }}"
                                 style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                            />
                            @empty
                            <p>暂无数据</p>
                        @endforelse
                    </div>
                </div>
                @endfor
            </form>
        </div>
    </article>


@endsection

@section('css')
@endsection

@section('js')
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>

    <script>


        $("#form-admin-case-add").Validform({

            tiptype: 2,
            callback: function (form) {

                $('#form-admin-case-add').ajaxSubmit({
                    type: 'post', // 提交方式 get/post
                    url: "{{ route('admin.case.store') }}", // 需要提交的 url
                    dataType: 'json',
                    data: {
                        case_name: $('input[name=case_name]').val(),
                        designer_id: $('input[name=designer_id]').val(),
                        worker_id: $('input[name=worker_id]').val(),
                        case_style: $('select[name=case_style] option:selected').val(),
                        preview1: ($('#preview_id1').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id1').attr('src') : ''),
                        preview2: ($('#preview_id2').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id2').attr('src') : ''),
                        preview3: ($('#preview_id3').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id3').attr('src') : ''),
                        preview4: ($('#preview_id4').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id4').attr('src') : ''),
                        preview5: ($('#preview_id5').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id5').attr('src') : ''),
                        preview6: ($('#preview_id6').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id6').attr('src') : ''),
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (data) {

                        console.log(33333);
                        if (data == null) {
                            layer.msg('服务端错误', {icon: 2, time: 2000});
                            return;
                        }
                        if (data.status != 0) {
                            layer.msg(data.msg, {icon: 2, time: 2000});
                            return;
                        }

                        layer.msg(data.msg, {icon: 1, time: 2000});
                        parent.location.reload();
                    },
                    error: function (xhr, status, error) {
                        console.log(2221);
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                        layer.msg('ajax error', {icon: 2, time: 2000});
                    },
                    beforeSend: function (xhr) {
                        layer.load(0, {shade: false});
                    },
                });

                return false;
            }
        });


    </script>

@endsection

