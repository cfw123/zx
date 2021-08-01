@extends('layout.main')

@section('content')
    <style>
        img {
            width: 13% !important;
        }
    </style>
    <div class="col-xs-12 col-sm-6">
        <form action="" method="post" class="form form-horizontal" id="form-admin-case-add">
               <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例名</label>
                <div class="formControls col-sm-4">
                    <input type="text" class="input-text" value="" name="case_name">
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>设计师名</label>
                <div class="formControls col-sm-6">
                    @foreach ($designers as $designer)
                        <div class="col-sm-6">
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
                <div class="formControls col-sm-6">

                    @foreach ($workers as $worker)
                        <div class="col-sm-6">
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
                         onclick="$('#input_id6').click()"/>
                    <input type="file" name="file" id="input_id6" style="display: none;"
                           onchange="return uploadImageToServer('input_id6','images', 'preview_id6');"/>
                </div>
            </div>


            <div class="row cl">
                <label class="form-label col-sm-2">是否完工：</label>

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
                    <input id="submit01" style="margin: 20px 0; width: 200px;" class="btn btn-primary radius" type="submit"
                           value="&nbsp;&nbsp;提交&nbsp;&nbsp;">

                </div>
            </div>
        </form>
    </div>
    <div class="col-xs-12 col-sm-6" style="border-left: 1px solid #ccc">

        <form action="" method="post" class="form form-horizontal" id="form-admin-casework-add">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">前期：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <img id="preview_start_id1" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_start_id1').click()"/>
                    <input type="file" name="file" id="input_start_id1" style="display: none;"
                           onchange="return uploadImageToServer('input_start_id1','images', 'preview_start_id1');"/>
                    <img id="preview_start_id2" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_start_id2').click()"/>
                    <input type="file" name="file" id="input_start_id2" style="display: none;"
                           onchange="return uploadImageToServer('input_start_id2','images', 'preview_start_id2');"/>
                    <img id="preview_start_id3" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_start_id3').click()"/>
                    <input type="file" name="file" id="input_start_id3" style="display: none;"
                           onchange="return uploadImageToServer('input_start_id3','images', 'preview_start_id3');"/>
                    <img id="preview_start_id4" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_start_id4').click()"/>
                    <input type="file" name="file" id="input_start_id4" style="display: none;"
                           onchange="return uploadImageToServer('input_start_id4','images', 'preview_start_id4');"/>
                    <img id="preview_start_id5" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_start_id5').click()"/>
                    <input type="file" name="file" id="input_start_id5" style="display: none;"
                           onchange="return uploadImageToServer('input_start_id5','images', 'preview_start_id5');"/>
                    <img id="preview_start_id6" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_start_id6').click()"/>
                    <input type="file" name="file" id="input_start_id6" style="display: none;"
                           onchange="return uploadImageToServer('input_start_id6','images', 'preview_start_id6');"/>
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"> 设计阶段：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <img id="preview_designe_id1" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_designe_id1').click()"/>
                    <input type="file" name="file" id="input_designe_id1" style="display: none;"
                           onchange="return uploadImageToServer('input_designe_id1','images', 'preview_designe_id1');"/>
                    <img id="preview_designe_id2" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_designe_id2').click()"/>
                    <input type="file" name="file" id="input_designe_id2" style="display: none;"
                           onchange="return uploadImageToServer('input_designe_id2','images', 'preview_designe_id2');"/>
                    <img id="preview_designe_id3" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_designe_id3').click()"/>
                    <input type="file" name="file" id="input_designe_id3" style="display: none;"
                           onchange="return uploadImageToServer('input_designe_id3','images', 'preview_designe_id3');"/>
                    <img id="preview_designe_id4" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_designe_id4').click()"/>
                    <input type="file" name="file" id="input_designe_id4" style="display: none;"
                           onchange="return uploadImageToServer('input_designe_id4','images', 'preview_designe_id4');"/>
                    <img id="preview_designe_id5" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_designe_id5').click()"/>
                    <input type="file" name="file" id="input_designe_id5" style="display: none;"
                           onchange="return uploadImageToServer('input_designe_id5','images', 'preview_designe_id5');"/>
                    <img id="preview_designe_id6" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_designe_id6').click()"/>
                    <input type="file" name="file" id="input_designe_id6" style="display: none;"
                           onchange="return uploadImageToServer('input_designe_id6','images', 'preview_designe_id6');"/>
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"> 墙体改造：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <img id="preview_wall_id1" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wall_id1').click()"/>
                    <input type="file" name="file" id="input_wall_id1" style="display: none;"
                           onchange="return uploadImageToServer('input_wall_id1','images', 'preview_wall_id1');"/>
                    <img id="preview_wall_id2" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wall_id2').click()"/>
                    <input type="file" name="file" id="input_wall_id2" style="display: none;"
                           onchange="return uploadImageToServer('input_wall_id2','images', 'preview_wall_id2');"/>
                    <img id="preview_wall_id3" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wall_id3').click()"/>
                    <input type="file" name="file" id="input_wall_id3" style="display: none;"
                           onchange="return uploadImageToServer('input_wall_id3','images', 'preview_wall_id3');"/>
                    <img id="preview_wall_id4" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wall_id4').click()"/>
                    <input type="file" name="file" id="input_wall_id4" style="display: none;"
                           onchange="return uploadImageToServer('input_wall_id4','images', 'preview_wall_id4');"/>
                    <img id="preview_wall_id5" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wall_id5').click()"/>
                    <input type="file" name="file" id="input_wall_id5" style="display: none;"
                           onchange="return uploadImageToServer('input_wall_id5','images', 'preview_wall_id5');"/>
                    <img id="preview_wall_id6" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wall_id6').click()"/>
                    <input type="file" name="file" id="input_wall_id6" style="display: none;"
                           onchange="return uploadImageToServer('input_wall_id6','images', 'preview_wall_id6');"/>
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"> 水电阶段：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <img id="preview_water_id1" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_water_id1').click()"/>
                    <input type="file" name="file" id="input_water_id1" style="display: none;"
                           onchange="return uploadImageToServer('input_water_id1','images', 'preview_water_id1');"/>
                    <img id="preview_water_id2" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_water_id2').click()"/>
                    <input type="file" name="file" id="input_water_id2" style="display: none;"
                           onchange="return uploadImageToServer('input_water_id2','images', 'preview_water_id2');"/>
                    <img id="preview_water_id3" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_water_id3').click()"/>
                    <input type="file" name="file" id="input_water_id3" style="display: none;"
                           onchange="return uploadImageToServer('input_water_id3','images', 'preview_water_id3');"/>
                    <img id="preview_water_id4" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_water_id4').click()"/>
                    <input type="file" name="file" id="input_water_id4" style="display: none;"
                           onchange="return uploadImageToServer('input_water_id4','images', 'preview_water_id4');"/>
                    <img id="preview_water_id5" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_water_id5').click()"/>
                    <input type="file" name="file" id="input_water_id5" style="display: none;"
                           onchange="return uploadImageToServer('input_water_id5','images', 'preview_water_id5');"/>
                    <img id="preview_water_id6" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_water_id6').click()"/>
                    <input type="file" name="file" id="input_water_id6" style="display: none;"
                           onchange="return uploadImageToServer('input_water_id6','images', 'preview_water_id6');"/>
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"> 泥瓦工阶段：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <img id="preview_brick_id1" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_brick_id1').click()"/>
                    <input type="file" name="file" id="input_brick_id1" style="display: none;"
                           onchange="return uploadImageToServer('input_brick_id1','images', 'preview_brick_id1');"/>
                    <img id="preview_brick_id2" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_brick_id2').click()"/>
                    <input type="file" name="file" id="input_brick_id2" style="display: none;"
                           onchange="return uploadImageToServer('input_brick_id2','images', 'preview_brick_id2');"/>
                    <img id="preview_brick_id3" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_brick_id3').click()"/>
                    <input type="file" name="file" id="input_brick_id3" style="display: none;"
                           onchange="return uploadImageToServer('input_brick_id3','images', 'preview_brick_id3');"/>
                    <img id="preview_brick_id4" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_brick_id4').click()"/>
                    <input type="file" name="file" id="input_brick_id4" style="display: none;"
                           onchange="return uploadImageToServer('input_brick_id4','images', 'preview_brick_id4');"/>
                    <img id="preview_brick_id5" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_brick_id5').click()"/>
                    <input type="file" name="file" id="input_brick_id5" style="display: none;"
                           onchange="return uploadImageToServer('input_brick_id5','images', 'preview_brick_id5');"/>
                    <img id="preview_brick_id6" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_brick_id6').click()"/>
                    <input type="file" name="file" id="input_brick_id6" style="display: none;"
                           onchange="return uploadImageToServer('input_brick_id6','images', 'preview_brick_id6');"/>
                </div>
            </div>


            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"> 木工阶段：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <img id="preview_wood_id1" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wood_id1').click()"/>
                    <input type="file" name="file" id="input_wood_id1" style="display: none;"
                           onchange="return uploadImageToServer('input_wood_id1','images', 'preview_wood_id1');"/>
                    <img id="preview_wood_id2" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wood_id2').click()"/>
                    <input type="file" name="file" id="input_wood_id2" style="display: none;"
                           onchange="return uploadImageToServer('input_wood_id2','images', 'preview_wood_id2');"/>
                    <img id="preview_wood_id3" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wood_id3').click()"/>
                    <input type="file" name="file" id="input_wood_id3" style="display: none;"
                           onchange="return uploadImageToServer('input_wood_id3','images', 'preview_wood_id3');"/>
                    <img id="preview_wood_id4" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wood_id4').click()"/>
                    <input type="file" name="file" id="input_wood_id4" style="display: none;"
                           onchange="return uploadImageToServer('input_wood_id4','images', 'preview_wood_id4');"/>
                    <img id="preview_wood_id5" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wood_id5').click()"/>
                    <input type="file" name="file" id="input_wood_id5" style="display: none;"
                           onchange="return uploadImageToServer('input_wood_id5','images', 'preview_wood_id5');"/>
                    <img id="preview_wood_id6" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_wood_id6').click()"/>
                    <input type="file" name="file" id="input_wood_id6" style="display: none;"
                           onchange="return uploadImageToServer('input_wood_id6','images', 'preview_wood_id6');"/>
                </div>
            </div>


            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"> 油漆工阶段：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <img id="preview_paint_id1" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_paint_id1').click()"/>
                    <input type="file" name="file" id="input_paint_id1" style="display: none;"
                           onchange="return uploadImageToServer('input_paint_id1','images', 'preview_paint_id1');"/>
                    <img id="preview_paint_id2" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_paint_id2').click()"/>
                    <input type="file" name="file" id="input_paint_id2" style="display: none;"
                           onchange="return uploadImageToServer('input_paint_id2','images', 'preview_paint_id2');"/>
                    <img id="preview_paint_id3" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_paint_id3').click()"/>
                    <input type="file" name="file" id="input_paint_id3" style="display: none;"
                           onchange="return uploadImageToServer('input_paint_id3','images', 'preview_paint_id3');"/>
                    <img id="preview_paint_id4" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_paint_id4').click()"/>
                    <input type="file" name="file" id="input_paint_id4" style="display: none;"
                           onchange="return uploadImageToServer('input_paint_id4','images', 'preview_paint_id4');"/>
                    <img id="preview_paint_id5" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_paint_id5').click()"/>
                    <input type="file" name="file" id="input_paint_id5" style="display: none;"
                           onchange="return uploadImageToServer('input_paint_id5','images', 'preview_paint_id5');"/>
                    <img id="preview_paint_id6" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_paint_id6').click()"/>
                    <input type="file" name="file" id="input_paint_id6" style="display: none;"
                           onchange="return uploadImageToServer('input_paint_id6','images', 'preview_paint_id6');"/>
                </div>
            </div>


            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"> 安装阶段：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <img id="preview_install_id1" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_install_id1').click()"/>
                    <input type="file" name="file" id="input_install_id1" style="display: none;"
                           onchange="return uploadImageToServer('input_install_id1','images', 'preview_install_id1');"/>
                    <img id="preview_install_id2" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_install_id2').click()"/>
                    <input type="file" name="file" id="input_install_id2" style="display: none;"
                           onchange="return uploadImageToServer('input_install_id2','images', 'preview_install_id2');"/>
                    <img id="preview_install_id3" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_install_id3').click()"/>
                    <input type="file" name="file" id="input_install_id3" style="display: none;"
                           onchange="return uploadImageToServer('input_install_id3','images', 'preview_install_id3');"/>
                    <img id="preview_install_id4" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_install_id4').click()"/>
                    <input type="file" name="file" id="input_install_id4" style="display: none;"
                           onchange="return uploadImageToServer('input_install_id4','images', 'preview_install_id4');"/>
                    <img id="preview_install_id5" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_install_id5').click()"/>
                    <input type="file" name="file" id="input_install_id5" style="display: none;"
                           onchange="return uploadImageToServer('input_install_id5','images', 'preview_install_id5');"/>
                    <img id="preview_install_id6" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_install_id6').click()"/>
                    <input type="file" name="file" id="input_install_id6" style="display: none;"
                           onchange="return uploadImageToServer('input_install_id6','images', 'preview_install_id6');"/>
                </div>
            </div>



            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"> 验收阶段：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <img id="preview_check_id1" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_check_id1').click()"/>
                    <input type="file" name="file" id="input_check_id1" style="display: none;"
                           onchange="return uploadImageToServer('input_check_id1','images', 'preview_check_id1');"/>
                    <img id="preview_check_id2" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_check_id2').click()"/>
                    <input type="file" name="file" id="input_check_id2" style="display: none;"
                           onchange="return uploadImageToServer('input_check_id2','images', 'preview_check_id2');"/>
                    <img id="preview_check_id3" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_check_id3').click()"/>
                    <input type="file" name="file" id="input_check_id3" style="display: none;"
                           onchange="return uploadImageToServer('input_check_id3','images', 'preview_check_id3');"/>
                    <img id="preview_check_id4" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_check_id4').click()"/>
                    <input type="file" name="file" id="input_check_id4" style="display: none;"
                           onchange="return uploadImageToServer('input_check_id4','images', 'preview_check_id4');"/>
                    <img id="preview_check_id5" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_check_id5').click()"/>
                    <input type="file" name="file" id="input_check_id5" style="display: none;"
                           onchange="return uploadImageToServer('input_check_id5','images', 'preview_check_id5');"/>
                    <img id="preview_check_id6" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_check_id6').click()"/>
                    <input type="file" name="file" id="input_check_id6" style="display: none;"
                           onchange="return uploadImageToServer('input_check_id6','images', 'preview_check_id6');"/>
                </div>
            </div>


            <div class="row cl">
                <div class="col-sm-10 col-sm-offset-2">
                    {{--<button type="submit" class="btn btn-success radius">--}}
                    {{--<i class="icon-ok"></i>--}}
                    {{--添加案例--}}
                    {{--</button>--}}
                    <input id="submit02" style="margin: 20px 0; width: 200px;" disabled="disabled" class="btn btn-default radius" type="submit"
                           value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                </div>
            </div>
        </form>

    </div>
        @endsection

        @section('css')

        @endsection

        @section('js')
            {{--<script type="text/javascript" src="/admin/lib/jquey.validation/1.14.0/jquery.validate.js"></script>--}}
            <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
            <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>

            <script>


                $("#form-admin-case-add").Validform({

                    // tiptype: 2,
                    callback: function (form) {

                        $('#form-admin-case-add').ajaxSubmit({
                            type: 'post', // 提交方式 get/post
                            url: "{{ route('admin.case.store',['type'=>'createcase']) }}", // 需要提交的 url
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
                                _token: "{{ csrf_token() }}"
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
                              $('.layui-layer-loading').css('display','none');

                              $('#submit01').attr("disabled","disabled").removeClass('btn-primary').addClass('btn-default');
                              $('#submit02').removeAttr("disabled").removeClass('btn-default').addClass('btn-primary');
                                // parent.location.reload();
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

                $("#form-admin-casework-add").Validform({

                    tiptype: 2,
                    callback: function (form) {

                        $('#form-admin-casework-add').ajaxSubmit({
                            type: 'post', // 提交方式 get/post
                            url: "{{ route('admin.case.store',['type'=>'createcasework']) }}", // 需要提交的 url
                            dataType: 'json',
                            data: {

                                preview_start_1: ($('#preview_start_id1').attr('src') != '/admin/images/icon-add.png' ? $('#preview_start_id1').attr('src') : ''),
                                preview_start_2: ($('#preview_start_id2').attr('src') != '/admin/images/icon-add.png' ? $('#preview_start_id2').attr('src') : ''),
                                preview_start_3: ($('#preview_start_id3').attr('src') != '/admin/images/icon-add.png' ? $('#preview_start_id3').attr('src') : ''),
                                preview_start_4: ($('#preview_start_id4').attr('src') != '/admin/images/icon-add.png' ? $('#preview_start_id4').attr('src') : ''),
                                preview_start_5: ($('#preview_start_id5').attr('src') != '/admin/images/icon-add.png' ? $('#preview_start_id5').attr('src') : ''),
                                preview_start_6: ($('#preview_start_id6').attr('src') != '/admin/images/icon-add.png' ? $('#preview_start_id6').attr('src') : ''),

                                preview_designe_1: ($('#preview_designe_id1').attr('src') != '/admin/images/icon-add.png' ? $('#preview_designe_id1').attr('src') : ''),
                                preview_designe_2: ($('#preview_designe_id2').attr('src') != '/admin/images/icon-add.png' ? $('#preview_designe_id2').attr('src') : ''),
                                preview_designe_3: ($('#preview_designe_id3').attr('src') != '/admin/images/icon-add.png' ? $('#preview_designe_id3').attr('src') : ''),
                                preview_designe_4: ($('#preview_designe_id4').attr('src') != '/admin/images/icon-add.png' ? $('#preview_designe_id4').attr('src') : ''),
                                preview_designe_5: ($('#preview_designe_id5').attr('src') != '/admin/images/icon-add.png' ? $('#preview_designe_id5').attr('src') : ''),
                                preview_designe_6: ($('#preview_designe_id6').attr('src') != '/admin/images/icon-add.png' ? $('#preview_designe_id6').attr('src') : ''),


                                preview_wall_1: ($('#preview_wall_id1').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wall_id1').attr('src') : ''),
                                preview_wall_2: ($('#preview_wall_id2').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wall_id2').attr('src') : ''),
                                preview_wall_3: ($('#preview_wall_id3').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wall_id3').attr('src') : ''),
                                preview_wall_4: ($('#preview_wall_id4').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wall_id4').attr('src') : ''),
                                preview_wall_5: ($('#preview_wall_id5').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wall_id5').attr('src') : ''),
                                preview_wall_6: ($('#preview_wall_id6').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wall_id6').attr('src') : ''),


                                preview_water_1: ($('#preview_water_id1').attr('src') != '/admin/images/icon-add.png' ? $('#preview_water_id1').attr('src') : ''),
                                preview_water_2: ($('#preview_water_id2').attr('src') != '/admin/images/icon-add.png' ? $('#preview_water_id2').attr('src') : ''),
                                preview_water_3: ($('#preview_water_id3').attr('src') != '/admin/images/icon-add.png' ? $('#preview_water_id3').attr('src') : ''),
                                preview_water_4: ($('#preview_water_id4').attr('src') != '/admin/images/icon-add.png' ? $('#preview_water_id4').attr('src') : ''),
                                preview_water_5: ($('#preview_water_id5').attr('src') != '/admin/images/icon-add.png' ? $('#preview_water_id5').attr('src') : ''),
                                preview_water_6: ($('#preview_water_id6').attr('src') != '/admin/images/icon-add.png' ? $('#preview_water_id6').attr('src') : ''),


                                preview_brick_1: ($('#preview_brick_id1').attr('src') != '/admin/images/icon-add.png' ? $('#preview_brick_id1').attr('src') : ''),
                                preview_brick_2: ($('#preview_brick_id2').attr('src') != '/admin/images/icon-add.png' ? $('#preview_brick_id2').attr('src') : ''),
                                preview_brick_3: ($('#preview_brick_id3').attr('src') != '/admin/images/icon-add.png' ? $('#preview_brick_id3').attr('src') : ''),
                                preview_brick_4: ($('#preview_brick_id4').attr('src') != '/admin/images/icon-add.png' ? $('#preview_brick_id4').attr('src') : ''),
                                preview_brick_5: ($('#preview_brick_id5').attr('src') != '/admin/images/icon-add.png' ? $('#preview_brick_id5').attr('src') : ''),
                                preview_brick_6: ($('#preview_brick_id6').attr('src') != '/admin/images/icon-add.png' ? $('#preview_brick_id6').attr('src') : ''),


                                preview_wood_1: ($('#preview_wood_id1').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wood_id1').attr('src') : ''),
                                preview_wood_2: ($('#preview_wood_id2').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wood_id2').attr('src') : ''),
                                preview_wood_3: ($('#preview_wood_id3').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wood_id3').attr('src') : ''),
                                preview_wood_4: ($('#preview_wood_id4').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wood_id4').attr('src') : ''),
                                preview_wood_5: ($('#preview_wood_id5').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wood_id5').attr('src') : ''),
                                preview_wood_6: ($('#preview_wood_id6').attr('src') != '/admin/images/icon-add.png' ? $('#preview_wood_id6').attr('src') : ''),


                                preview_paint_1: ($('#preview_paint_id1').attr('src') != '/admin/images/icon-add.png' ? $('#preview_paint_id1').attr('src') : ''),
                                preview_paint_2: ($('#preview_paint_id2').attr('src') != '/admin/images/icon-add.png' ? $('#preview_paint_id2').attr('src') : ''),
                                preview_paint_3: ($('#preview_paint_id3').attr('src') != '/admin/images/icon-add.png' ? $('#preview_paint_id3').attr('src') : ''),
                                preview_paint_4: ($('#preview_paint_id4').attr('src') != '/admin/images/icon-add.png' ? $('#preview_paint_id4').attr('src') : ''),
                                preview_paint_5: ($('#preview_paint_id5').attr('src') != '/admin/images/icon-add.png' ? $('#preview_paint_id5').attr('src') : ''),
                                preview_paint_6: ($('#preview_paint_id6').attr('src') != '/admin/images/icon-add.png' ? $('#preview_paint_id6').attr('src') : ''),


                                preview_install_1: ($('#preview_install_id1').attr('src') != '/admin/images/icon-add.png' ? $('#preview_install_id1').attr('src') : ''),
                                preview_install_2: ($('#preview_install_id2').attr('src') != '/admin/images/icon-add.png' ? $('#preview_install_id2').attr('src') : ''),
                                preview_install_3: ($('#preview_install_id3').attr('src') != '/admin/images/icon-add.png' ? $('#preview_install_id3').attr('src') : ''),
                                preview_install_4: ($('#preview_install_id4').attr('src') != '/admin/images/icon-add.png' ? $('#preview_install_id4').attr('src') : ''),
                                preview_install_5: ($('#preview_install_id5').attr('src') != '/admin/images/icon-add.png' ? $('#preview_install_id5').attr('src') : ''),
                                preview_install_6: ($('#preview_install_id6').attr('src') != '/admin/images/icon-add.png' ? $('#preview_install_id6').attr('src') : ''),


                                preview_check_1: ($('#preview_check_id1').attr('src') != '/admin/images/icon-add.png' ? $('#preview_check_id1').attr('src') : ''),
                                preview_check_2: ($('#preview_check_id2').attr('src') != '/admin/images/icon-add.png' ? $('#preview_check_id2').attr('src') : ''),
                                preview_check_3: ($('#preview_check_id3').attr('src') != '/admin/images/icon-add.png' ? $('#preview_check_id3').attr('src') : ''),
                                preview_check_4: ($('#preview_check_id4').attr('src') != '/admin/images/icon-add.png' ? $('#preview_check_id4').attr('src') : ''),
                                preview_check_5: ($('#preview_check_id5').attr('src') != '/admin/images/icon-add.png' ? $('#preview_check_id5').attr('src') : ''),
                                preview_check_6: ($('#preview_check_id6').attr('src') != '/admin/images/icon-add.png' ? $('#preview_check_id6').attr('src') : ''),

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

