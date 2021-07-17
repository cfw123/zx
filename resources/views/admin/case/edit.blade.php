@extends('layout.main')

@section('content')



    <article class="page-container">

        <form action="" method="post" class="form form-horizontal" id="form-admin-case-add">
            @csrf

            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例名</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="{{ $case->case_name }}" name="case_name">
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>设计师名</label>
                <div class="formControls col-sm-6">
                    @foreach ($designers as $designer)
                        <div class="col-sm-6">
                            <label><input type="radio" name="designer_id"
                                          value="{{ $designer->id }}"
                                          @if($designer->id==$case->designer->id) checked @endif>
                                {{ $designer->designer_name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>施工工长名</label>
                <div class="formControls col-sm-6">

                    @foreach ($workers as $worker)
                        <div class="col-sm-6">
                            <label><input type="radio" name="worker_id"
                                          value="{{ $worker->id }}"
                                          @if($worker->id==$case->worker->id) checked @endif>{{ $worker->designer_name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例风格</label>

                <div class="col-sm-10">
                    <select name="case_style" id="inputID" class="form-control">

                        <option value="简约、北欧、美式、日式"
                                @if($case->case_style=="简约、北欧、美式、日式" ) selected="selected" @endif> 简约、北欧、美式、日式
                        </option>
                        <option value="轻奢、美式、简约、新中式"
                                @if($case->case_style=="轻奢、美式、简约、新中式" ) selected="selected" @endif> 轻奢、美式、简约、新中式
                        </option>
                        <option value="现代、简美、欧式、简约"
                                @if($case->case_style=="现代、简美、欧式、简约" ) selected="selected" @endif> 现代、简美、欧式、简约
                        </option>
                        <option value="北欧、简约、美式"
                                @if($case->case_style=="北欧、简约、美式" ) selected="selected" @endif> 北欧、简约、美式
                        </option>
                        <option value="新中式、简约、北欧"
                                @if($case->case_style=="新中式、简约、北欧" ) selected="selected" @endif> 新中式、简约、北欧
                        </option>
                        <option value="港式、混搭、后现代"
                                @if($case->case_style=="港式、混搭、后现代" ) selected="selected" @endif> 港式、混搭、后现代
                        </option>


                    </select>

                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例户型</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="{{ $case->case_type }}" name="case_type">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例面积</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="{{ $case->case_area }}" name="case_area">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例楼盘</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="{{ $case->case_site }}" name="case_site">
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">图片：</label>
                <div class="formControls col-xs-8 col-sm-9">

                    @foreach($case->photos as $photo)

                            <img id="preview_id{{ $loop->index +1}}" src="{{ $photo->path }}"
                                 style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                                 onclick="$('#input_id{{ $loop->index +1}}').click()"/>
                            <input type="file" name="file" id="input_id{{ $loop->index +1}}" style="display: none;"
                                   onchange="return uploadImageToServer('input_id{{ $loop->index +1}}','images', 'preview_id{{ $loop->index +1}}');"/>





                    @endforeach
                        @for ($i = $count+1; $i < 7; $i++)
                            <img id="preview_id{{$i}}" src="/admin/images/icon-add.png"
                                 style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                                 onclick="$('#input_id{{$i}}').click()"/>
                            <input type="file" name="file" id="input_id{{$i}}" style="display: none;"
                                   onchange="return uploadImageToServer('input_id{{$i}}','images', 'preview_id{{$i}}');"/>
                        @endfor
                </div>

            </div>

            <div class="row cl">
                <label class="form-label col-sm-2">是否推荐：</label>

                <label><input type="radio" name="is_rem" @if($case->is_rem=='F') checked @endif  value="F">F</label>
                &nbsp; &nbsp; &nbsp;
                <label><input type="radio" name="is_rem" @if($case->is_rem=='T') checked @endif value="T">T</label>


            </div>

            <div class="row cl">
                <label class="form-label col-sm-2">是否隐藏：</label>

                <label><input type="radio" name="is_hidden" @if($case->is_hidden=='F') checked @endif value="F">F</label>
                &nbsp; &nbsp; &nbsp;
                <label><input type="radio" name="is_hidden" @if($case->is_hidden=='T') checked @endif value="T">T</label>


            </div>
            <div class="row cl">
                <div class="col-sm-10 col-sm-offset-2">

                    <input style="margin: 20px 0; width: 200px;" class="btn btn-primary radius" type="submit"
                           value="&nbsp;&nbsp;更新&nbsp;&nbsp;">
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
                    url: "{{ route('admin.case.update',$case->id) }}", // 需要提交的 url
                    dataType: 'json',
                    data: {
                        case_name: $('input[name=case_name]').val(),
                        designer_id: $('select[name=designer_id] option:selected').val(),
                        worker_id: $('select[name=worker_id] option:selected').val(),
                        case_style: $('select[name=case_style] option:selected').val(),
                        case_type: $('input[name=case_type]').val(),
                        case_area: $('input[name=case_area]').val(),
                        case_site: $('input[name=case_site]').val(),
                        preview1: ($('#preview_id1').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id1').attr('src') : ''),
                        preview2: ($('#preview_id2').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id2').attr('src') : ''),
                        preview3: ($('#preview_id3').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id3').attr('src') : ''),
                        preview4: ($('#preview_id4').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id4').attr('src') : ''),
                        preview5: ($('#preview_id5').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id5').attr('src') : ''),
                        preview6: ($('#preview_id6').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id6').attr('src') : ''),
                        _token: "{{ csrf_token() }}",
                        _method: "put",
                    },
                    success: function (data) {
                        if (data == null) {
                            layer.msg('服务端错误', {icon: 2, time: 2000});
                            return;
                        }
                        if (data.status != 0) {
                            layer.msg(data.msg, {icon: 2, time: 2000});
                            return;
                        }

                        layer.msg(data.msg, {icon: 1, time: 2000});
                        creatIframe("{{route('admin.case.index')}}","案例列表")
                    },
                    error: function (xhr, status, error) {
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

