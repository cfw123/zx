@extends('layout.main')

@section('content')



    <article class="page-container">
        {{--<form action="{{ route('admin.case.store') }}" method="post" class="form form-horizontal"--}}
        {{--id="form-admin-case-add">--}}

        <form action="" method="post" class="form form-horizontal" id="form-admin-case-add">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>


            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例名</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="" name="case_name">
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>设计师名</label>
                <div class="formControls col-sm-4">
                    @foreach ($designers as $designer)
                        <div class="col-sm-4">
                            <label><input type="radio" name="designer_id"
                                          value="{{ $designer->id }}">
                                {{ $designer->designer_name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>施工工长名</label>
                <div class="formControls col-sm-4">

                    @foreach ($workers as $worker)
                        <div class="col-sm-4">
                            <label><input type="radio" name="worker_id"
                                          value="{{ $worker->id }}">{{ $worker->designer_name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例风格</label>

                <div class="col-sm-10">
                    <select name="case_style" id="inputID" class="form-control">
                        <option value="简约、北欧、美式、日式"> 简约、北欧、美式、日式</option>
                        <option value="轻奢、美式、简约、新中式"> 轻奢、美式、简约、新中式</option>
                        <option value="现代、简美、欧式、简约"> 现代、简美、欧式、简约</option>
                        <option value="北欧、简约、美式"> 北欧、简约、美式</option>
                        <option value="新中式、简约、北欧"> 新中式、简约、北欧</option>
                        <option value="港式、混搭、后现代"> 港式、混搭、后现代</option>
                    </select>

                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例户型</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="" name="case_type">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例面积</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="" name="case_area">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例楼盘</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="" name="case_site">
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">图片：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <img id="preview_id1" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_id1').click()"/>
                    <input type="file" name="file" id="input_id1" style="display: none;"
                           onchange="return uploadImageToServer('input_id1','images', 'preview_id1');"/>
                    <img id="preview_id2" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_id2').click()"/>
                    <input type="file" name="file" id="input_id2" style="display: none;"
                           onchange="return uploadImageToServer('input_id2','images', 'preview_id2');"/>
                    <img id="preview_id3" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_id3').click()"/>
                    <input type="file" name="file" id="input_id3" style="display: none;"
                           onchange="return uploadImageToServer('input_id3','images', 'preview_id3');"/>
                    <img id="preview_id4" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_id4').click()"/>
                    <input type="file" name="file" id="input_id4" style="display: none;"
                           onchange="return uploadImageToServer('input_id4','images', 'preview_id4');"/>
                    <img id="preview_id5" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_id5').click()"/>
                    <input type="file" name="file" id="input_id5" style="display: none;"
                           onchange="return uploadImageToServer('input_id5','images', 'preview_id5');"/>
                    <img id="preview_id6" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_id5').click()"/>
                    <input type="file" name="file" id="input_id6" style="display: none;"
                           onchange="return uploadImageToServer('input_id5','images', 'preview_id5');"/>
                </div>
            </div>


            <div class="row cl">
                <label class="form-label col-sm-2">是否推荐：</label>

                <label><input type="radio" name="is_rem" checked value="F">F</label>
                &nbsp; &nbsp; &nbsp;
                <label><input type="radio" name="is_rem" value="T">T</label>


            </div>

            <div class="row cl">
                <label class="form-label col-sm-2">是否隐藏：</label>

                <label><input type="radio" name="is_hidden" checked value="F">F</label>
                &nbsp; &nbsp; &nbsp;
                <label><input type="radio" name="is_hidden" value="T">T</label>


            </div>
            <div class="row cl">
                <div class="col-sm-10 col-sm-offset-2">
                    {{--<button type="submit" class="btn btn-success radius">--}}
                    {{--<i class="icon-ok"></i>--}}
                    {{--添加案例--}}
                    {{--</button>--}}
                    <input style="margin: 20px 0; width: 200px;" class="btn btn-primary radius" type="submit"
                           value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                </div>
            </div>
        </form>
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
                        _token:"{{ csrf_token() }}"
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

