@extends('layout.main')

@section('content')


    <article class="page-container">
        <form action="{{ route('admin.designer.store') }}" method="post" class="form form-horizontal"
              id="form-admin-role-add">
            @csrf

            <div style="display: none" class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>分类</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="1" name="cate">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>工长名</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="" name="designer_name">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>联系电话</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="" name="designer_phone">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>从业年限</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="" name="year">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>评价</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="" name="rank">
                </div>
            </div>





            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>人气</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="" name="popular">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">图片：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <div class="uploader-thum-container">
                        <div id="filePicker">选择图片</div>
                        <input type="hidden" id="path" name="path">
                        <img src="" style="width: 100px;" id="pic">
                    </div>
                </div>
            </div>


            <div class="row cl">
                <label class="form-label col-sm-2">是否隐藏：</label>

                <label><input type="radio" name="is_hidden" checked value="F">F</label>
                &nbsp; &nbsp; &nbsp;
                <label><input type="radio" name="is_hidden" value="T">T</label>


            </div>
            <div class="row cl">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-success radius">
                        <i class="icon-ok"></i>
                        添加工长
                    </button>
                </div>
            </div>
        </form>
    </article>


@endsection

@section('css')
    <link rel="stylesheet" href="/admin/lib/webuploader/0.1.5/webuploader.css">
@endsection

@section('js')
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>

    <script type="text/javascript" src="/admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
    <script>
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
        $("#form-admin-role-add").validate({
            rules: {
                num: {
                    required: true
                }
            },
            messages: {
                num: {
                    required: '图片编号不能为空'
                }
            },
            onkeyup: false,
            focusCleanup: true,
            success: "valid",
            submitHandler: function (form) {
                form.submit();
            }
        });

        var uploader = WebUploader.create({
            auto: true,
            swf: '{{st('admin')}}/lib/webuploader/0.1.5/Uploader.swf',
            // 文件接收服务端。
            server: '{{ route('admin.upfile','dd') }}',
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',
            // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            resize: false,
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            },
            fileVal: 'pic',
            formData: {
                _token: "{{ csrf_token() }}"
            }
        });
        uploader.on('uploadSuccess', function (file, res) {
            $('#path').val(res.file);
            $('#pic').attr('src', res.file);
        });
    </script>
    <script>
        jQuery.Huitab =function(tabBar,tabCon,class_name,tabEvent,i){
            var $tab_menu=$(tabBar);
            // 初始化操作
            $tab_menu.removeClass(class_name);
            $(tabBar).eq(i).addClass(class_name);
            $(tabCon).hide();
            $(tabCon).eq(i).show();

            $tab_menu.bind(tabEvent,function(){
                $tab_menu.removeClass(class_name);
                $(this).addClass(class_name);
                var index=$tab_menu.index(this);
                $(tabCon).hide();
                $(tabCon).eq(index).show()})}
        $(function(){
            $.Huitab("#tab_demo .tabBar span","#tab_demo .tabCon","current","click","0")});



        $(function(){
            $("#star-1").raty({
                hints: ['1','2', '3', '4', '5'],//自定义分数
                starOff: "iconpic-star-S-default.png",//默认灰色星星
                starOn: "iconpic-star-S.png",//默认灰色星星
                path: "{{ st('admin/static/h-ui/images/star')}}",
                number: 5,//星星数量，要和hints数组对应
                showHalf: true,
                targetKeep : true,
                click: function (score, evt) {//点击事件
                    //第一种方式：直接取值
                    $("#result-1").html('你的评分是'+score+'分');
                }
            });
            $("#star-2").raty({
                hints: ['1','2', '3', '4', '5'],
                starOff: "iconpic-star-S-default.png",//默认灰色星星
                starOn: "iconpic-star-S.png",//默认灰色星星
                path: "{{ st('admin/static/h-ui/images/star')}}",
                number: 5,
                showHalf: true,
                targetKeep : true,
                click: function (score, evt) {//点击事件
                    //第一种方式：直接取值
                    $("#result-2").html('你的评分是'+score+'分');
                }
            })});
    </script>
@endsection

