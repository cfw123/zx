@extends('home.layout.master')

@section('content')

    <link href="{{ st('home/template/default/gongdi/gongdi/css/erji_gongdi_single.css') }}" rel="stylesheet" type="text/css" />
    <div id="common_dd_pic" style="width:100%;height:350px;background:url({{ st('home/yun.lehome114.com/attached/cs_lehouwu/image/20180828/20180828173443_61795.jpg')}}) no-repeat center;"></div>
    <!--主体内容-->
    <script type="text/javascript">
        $(function () {
            $(".sg_wz").click(function(){

                var value=$(this).attr("value");
                if (value=="0") {
                    $(this).find(".all_img200").hide();
                    $(this).find(".all_txt200").show();
                    $(this).attr("value","1");
                } else if (value=="1") {
                    $(this).find(".all_txt200").hide();
                    $(this).find(".all_img200").show();
                    $(this).attr("value","0");
                }
                $(".floors_Ctro p").each(function(){
                    var index = $(this).attr("id_value");
                    var height = $(".gd_follow_"+index).offset().top;
                    $(this).attr("value",height);
                })
            })
        })

        //图片操作绑定
        function imgbind() {
            $(".sg_wz").find("img").unbind()
            $(".sg_wz").find("img").click(function () {
                if ($(this).parent().parent().attr("class") == "big") {
                    $(this).parent().parent().attr("class", "small")
                } else {
                    $(this).parent().parent().attr("class", "big")
                }
                setcaseimg()
            })

        }

        //放大缩小图片
        function setcaseimg() {

            $(".sg_wz .small").find("img").each(function (k, v) {
                $(this).removeAttr("width");
                $(this).removeAttr("height");
                $(this).attr("height", "118"); $(this).removeAttr("width")
                //                if ($(this).width() >= $(this).height()) { $(this).attr("height", "118"); $(this).removeAttr("width") }
                //                else { $(this).attr("width", "118"); $(this).removeAttr("height") }
            });
            $(".sg_wz .big").find("img").each(function (e) {
                $(this).removeAttr("width")
                $(this).removeAttr("height")
                if ($(this).width() > 700) { $(this).attr("width", "700") }
            });

        }

    </script>

    <div style="width: 1200px; margin: 0 auto;overflow: hidden;">
        <!--左边信息展示开始-->
        <div class="left_content">
            <!--页面导航-->
            <div class="snav">
                <div class="text">
                    <a href="index.html">首页</a>&nbsp;>&nbsp;<a href="gongdi.html">施工工地</a>&nbsp;>&nbsp;<a href="#">徐汇·临江豪园</a></div>
            </div>
            <!--工地信息展示-->
            <div class="gd_box">
                <div class="title">
                    上海·徐汇·临江豪园
                    <span class="title_span">
	                    徐汇区龙华路附近                    </span>
                </div>
                <div class="img">
                    <img src="{{ st('home/editor/attached/lehome_thumb/20200529141454_30382.jpg')}}">
                </div>
                <div class="right">
                    <div class="nr">
                        <table class="table1">
                            <tr>
                                <td class="left">
                                    风&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                                </td>
                                <td class="rig">
                                    现代简约
                                </td>
                            </tr>
                            <tr>
                                <td class="left">
                                    户&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型：
                                </td>
                                <td class="rig">
                                    三室两厅
                                </td>
                            </tr>
                            <tr>
                                <td class="left">
                                    面&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;积：
                                </td>
                                <td class="rig">
                                    115㎡
                                </td>
                            </tr>
                            <tr>
                                <td class="left">
                                    区&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;域：
                                </td>
                                <td class="rig">
                                    上海
                                </td>
                            </tr>
                        </table>
                        <table class="table2">
                            <tr>
                                <td class="left">
                                    业<span style="display: inline-block;width:2em;"></span>主：
                                </td>
                                <td class="rig">
                                    李先生
                                </td>
                            </tr>
                            <tr>
                                <td class="left">
                                    施工队长：
                                </td>
                                <td class="rig">
                                    季连生
                                </td>
                            </tr>
                            <tr>
                                <td class="left">
                                    设<span style="display: inline-block;width:0.5em;"></span>计<span style="display: inline-block;width:0.5em;"></span>师：
                                </td>
                                <td class="rig">
                                    张梦梦
                                </td>
                            </tr>
                            <tr>
                                <td class="left">
                                    开工时间：
                                </td>
                                <td class="rig">

                                </td>
                            </tr>
                        </table>
                        <div class="icon icon1">
                        </div>
                        <div class="icon icon2">
                        </div>
                        <div class="icon icon3">
                        </div>
                        <div class="icon icon4">
                        </div>
                        <div class="icon icon5">
                        </div>
                        <div class="icon icon6">
                        </div>
                        <div class="icon icon7">
                        </div>
                        <div class="icon icon8">
                        </div>

                    </div>

                </div>
                <div class="jd">
                    <div class="jd_text active">
                        <div class="jd_wz">
                            前期</div>
                    </div>
                    <div class="jd_text active">
                        <div class="jd_wz">
                            设计阶段</div>
                    </div>
                    <div class="jd_text active">
                        <div class="jd_wz">
                            墙体改造</div>
                    </div>
                    <div class="jd_text active">
                        <div class="jd_wz">
                            水电阶段</div>
                    </div>
                    <div class="jd_text active">
                        <div class="jd_wz">
                            泥瓦工阶段</div>
                    </div>
                    <div class="jd_text active">
                        <div class="jd_wz">
                            木工阶段</div>
                    </div>
                    <div class="jd_text active">
                        <div class="jd_wz">
                            油漆工阶段</div>
                    </div>
                    <div class="jd_text active">
                        <div class="jd_wz">
                            安装阶段</div>
                    </div>
                    <div class="jd_text active">
                        <div class="jd_wz">
                            验收阶段</div>
                    </div>
                </div>
            </div>
            <!--施工详情展示-->
            <div class="gd_show">
                <div class="gd_content">

                </div>
                <!--按进度展示-->
                <div>
                    <!--左侧长条-->
                    <div class="gd_show_sg">
                        <!--施工跟踪信息-->
                        <div class="gd_follow gd_follow_0">
                            <!--施工节点名称、圆圈、箭头开始-->
                            <div class="gd_sgname">前期</div>
                            <div class="gd_yuanquan1 ss1">
                                <div class="gd_yuanquan2">
                                </div>
                            </div>
                            <img src="{{ st('home/template/default/gongdi/gongdi/images/jiantou.png')}}"  class="gd_jiantou" />
                            <!--施工节点、圆圈、箭头结束-->
                            <!--具体施工信息-->
                            <div class="sg_content">
                                <!--<div class="sg_title">
                                    泥瓦工阶段</div>-->
                                <div class="sg_wz" value="0">
                                    <div class="all_txt200" style="display:none;" class="all_txt">
                                        <p>
                                            前期门窗保护，黄色墙固绿色地固施工，防止墙面起灰，五步精工放线，确定大体轮毂<img src="{{ st('home/editor/attached/image/20200422/20200422154337_14927.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422154338_47614.jpg')}}" alt="" />
                                        </p>
                                        <p>
                                            <img src="{{ st('home/editor/attached/image/20200422/20200422172748_98236.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422172748_95451.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422172749_28921.jpg')}}" alt="" />
                                        </p>
                                        <p>
                                            <img src="{{ st('home/editor/attached/image/20200422/20200422154620_33634.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422154620_70617.jpg')}}" alt="" />
                                        </p>
                                        <p>
                                            <br />
                                        </p>
                                    </div>
                                    <div class="all_img200">
                                        <div class="caseimg">
                                            <div style="margin-bottom: 5px;">
                                                前期门窗保护，黄色墙固绿色地固施工，防止墙面起灰，五步精工放线，确定大体轮毂









                                            </div>
                                            <ul class="small">
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422154337_14927.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422154338_47614.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422172748_98236.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422172748_95451.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422172749_28921.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422154620_33634.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422154620_70617.jpg')}}" height="118">
                                                </li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gd_follow gd_follow_2">
                            <!--施工节点名称、圆圈、箭头开始-->
                            <div class="gd_sgname">墙体改造</div>
                            <div class="gd_yuanquan1 ss1">
                                <div class="gd_yuanquan2">
                                </div>
                            </div>
                            <img src="{{ st('home/template/default/gongdi/gongdi/images/jiantou.png')}}"  class="gd_jiantou" />
                            <!--施工节点、圆圈、箭头结束-->
                            <!--具体施工信息-->
                            <div class="sg_content">
                                <!--<div class="sg_title">
                                    泥瓦工阶段</div>-->
                                <div class="sg_wz" value="0">
                                    <div class="all_txt200" style="display:none;" class="all_txt">
                                        <p>
                                            墙体拆改：植入钢筋，新建墙体拆网植入钢筋、挂网
                                        </p>
                                        <p>
                                            <br />
                                        </p>
                                        <p>
                                            <img src="{{ st('home/editor/attached/image/20200422/20200422141407_74775.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141407_53846.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141408_52261.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141408_98744.jpg')}}" alt="" />
                                        </p>
                                    </div>
                                    <div class="all_img200">
                                        <div class="caseimg">
                                            <div style="margin-bottom: 5px;">
                                                墙体拆改：植入钢筋，新建墙体拆网植入钢筋、挂网






                                            </div>
                                            <ul class="small">
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141407_74775.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141407_53846.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141408_52261.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141408_98744.jpg')}}" height="118">
                                                </li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gd_follow gd_follow_3">
                            <!--施工节点名称、圆圈、箭头开始-->
                            <div class="gd_sgname">水电阶段</div>
                            <div class="gd_yuanquan1 ss1">
                                <div class="gd_yuanquan2">
                                </div>
                            </div>
                            <img src="{{ st('home/template/default/gongdi/gongdi/images/jiantou.png')}}"  class="gd_jiantou" />
                            <!--施工节点、圆圈、箭头结束-->
                            <!--具体施工信息-->
                            <div class="sg_content">
                                <!--<div class="sg_title">
                                    泥瓦工阶段</div>-->
                                <div class="sg_wz" value="0">
                                    <div class="all_txt200" style="display:none;" class="all_txt">
                                        <p>
                                            水电开槽、布管排线
                                        </p>
                                        <p>
                                            <br />
                                        </p>
                                        <p>
                                            <img src="{{ st('home/editor/attached/image/20200422/20200422141427_97184.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141428_69438.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141428_55148.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141428_36724.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141428_32574.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141428_98261.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141428_71564.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141429_45334.jpg')}}" alt="" />
                                        </p>
                                    </div>
                                    <div class="all_img200">
                                        <div class="caseimg">
                                            <div style="margin-bottom: 5px;">
                                                水电开槽、布管排线






                                            </div>
                                            <ul class="small">
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141427_97184.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141428_69438.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141428_55148.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141428_36724.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141428_32574.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141428_98261.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141428_71564.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141429_45334.jpg')}}" height="118">
                                                </li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gd_follow gd_follow_4">
                            <!--施工节点名称、圆圈、箭头开始-->
                            <div class="gd_sgname">泥瓦工阶段</div>
                            <div class="gd_yuanquan1 ss1">
                                <div class="gd_yuanquan2">
                                </div>
                            </div>
                            <img src="{{ st('home/template/default/gongdi/gongdi/images/jiantou.png')}}"  class="gd_jiantou" />
                            <!--施工节点、圆圈、箭头结束-->
                            <!--具体施工信息-->
                            <div class="sg_content">
                                <!--<div class="sg_title">
                                    泥瓦工阶段</div>-->
                                <div class="sg_wz" value="0">
                                    <div class="all_txt200" style="display:none;" class="all_txt">
                                        <p>
                                            泥木工进场，吊顶贴砖同步进行
                                        </p>
                                        <p>
                                            <br />
                                        </p>
                                        <p>
                                            <img src="{{ st('home/editor/attached/image/20200422/20200422141446_54066.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141447_21964.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141447_96272.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141447_87648.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141447_60674.jpg')}}" alt="" />
                                        </p>
                                    </div>
                                    <div class="all_img200">
                                        <div class="caseimg">
                                            <div style="margin-bottom: 5px;">
                                                泥木工进场，吊顶贴砖同步进行






                                            </div>
                                            <ul class="small">
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141446_54066.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141447_21964.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141447_96272.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141447_87648.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141447_60674.jpg')}}" height="118">
                                                </li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gd_follow gd_follow_5">
                            <!--施工节点名称、圆圈、箭头开始-->
                            <div class="gd_sgname">木工阶段</div>
                            <div class="gd_yuanquan1 ss1">
                                <div class="gd_yuanquan2">
                                </div>
                            </div>
                            <img src="{{ st('home/template/default/gongdi/gongdi/images/jiantou.png')}}"  class="gd_jiantou" />
                            <!--施工节点、圆圈、箭头结束-->
                            <!--具体施工信息-->
                            <div class="sg_content">
                                <!--<div class="sg_title">
                                    泥瓦工阶段</div>-->
                                <div class="sg_wz" value="0">
                                    <div class="all_txt200" style="display:none;" class="all_txt">
                                        <p>
                                            吊顶龙骨安装，柜体制作，门套打底
                                        </p>
                                        <p>
                                            <img src="{{ st('home/editor/attached/image/20200422/20200422141504_14968.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141504_83630.jpg')}}" alt="" />
                                        </p>
                                    </div>
                                    <div class="all_img200">
                                        <div class="caseimg">
                                            <div style="margin-bottom: 5px;">
                                                吊顶龙骨安装，柜体制作，门套打底



                                            </div>
                                            <ul class="small">
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141504_14968.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141504_83630.jpg')}}" height="118">
                                                </li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gd_follow gd_follow_8">
                            <!--施工节点名称、圆圈、箭头开始-->
                            <div class="gd_sgname">验收阶段</div>
                            <div class="gd_yuanquan1 ss1">
                                <div class="gd_yuanquan2">
                                </div>
                            </div>
                            <img src="{{ st('home/template/default/gongdi/gongdi/images/jiantou.png')}}"  class="gd_jiantou" />
                            <!--施工节点、圆圈、箭头结束-->
                            <!--具体施工信息-->
                            <div class="sg_content">
                                <!--<div class="sg_title">
                                    泥瓦工阶段</div>-->
                                <div class="sg_wz" value="0">
                                    <div class="all_txt200" style="display:none;" class="all_txt">
                                        <p>
                                            <img src="{{ st('home/editor/attached/image/20200422/20200422141534_42456.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141535_89497.jpg')}}" alt="" />
                                        </p>
                                        <p>
                                            <img src="{{ st('home/editor/attached/image/20200422/20200422141654_13142.jpg')}}" alt="" /><img src="{{ st('home/editor/attached/image/20200422/20200422141655_99697.jpg')}}" alt="" />
                                        </p>
                                        <p>
                                            <img src="{{ st('home/editor/attached/image/20200422/20200422142017_38734.jpg')}}" alt="" />
                                        </p>
                                        <p>
                                            <br />
                                        </p>
                                    </div>
                                    <div class="all_img200">
                                        <div class="caseimg">
                                            <div style="margin-bottom: 5px;">










                                            </div>
                                            <ul class="small">
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141534_42456.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141535_89497.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141654_13142.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422141655_99697.jpg')}}" height="118">
                                                </li>
                                                <li>
                                                    <img src="{{ st('home/editor/attached/image/20200422/20200422142017_38734.jpg')}}" height="118">
                                                </li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--按进度展示结合-->
            </div>
        </div>

        <!--左边信息展示结束-->
        <!--右边预约开始-->
        <script>
            function checkform() {
                var title = $("#title");
                var tel = $("#tel");
                var address = $("#address");

                if (!checkNull(title.val())) {
                    alert("请输入您的姓名");
                    title.focus();
                    return false;
                }
                if (!checkkg(title.val())) {
                    alert("姓名中不能有空格，请重新输入");
                    title.focus();
                    return false;
                }
                if (!checkNull(tel.val())) {
                    alert("请输入您的号码");
                    tel.focus();
                    return false;
                }
                if (!checkTel(tel.val())) {
                    alert("请输入正确格式的号码");
                    tel.focus();
                    return false;
                }
                form_ts();
                return true;
            }
        </script>
        </script>
        <div class="right_content">
            <div class="right_yuyue">

            <div class="yuyue_advert"><img src="{{ st('home/template/default/gongdi/gongdi/images/advimg.jpg')}}" /></div>

            <img src="{{ st('home/template/default/gongdi/gongdi/images/yyzx.jpg')}}" />
            <!--表格-->
            <div class="right_table">
            <form method="post" name="form" id="form" action="http://www.zhixian.com.cn/save_book.php?mod=index&amp;mid=2" onsubmit="return checkform();">
            <table border="0" cellpadding="0" cellspacing="0" style="width:228px;">
            <tr>
            <td class="td_title">
            您的小区：
        </td>
        <td>
        <input type="text" name="address" id="address" class="txt_input" />
            </td>
            </tr>
            <tr>
            <td class="td_title">
            您的姓名：
        </td>
        <td>
        <input type="text" name="title" id="title" class="txt_input" />
            </td>
            </tr>
            <tr>
            <td class="td_title">
            您的电话：
        </td>
        <td>
        <input type="text" name="tel" id="tel" class="txt_input" />
            </td>
            </tr>
            <tr>
            <td colspan="2" style="text-align: center;">
            <input type="submit" name="btn_sub" class="btn_sub" value="提交信息" />
            </td>
            </tr>
            </table>
            </form>
            </div>
            </div>
            <div class="show_yz">
            <div class="yz_title">
            <div>
            现已经报名业主</div>
            </div>
            <div class="yz_list" id="sjk">
            <ul id="sjk1">
            <li>·
		                赵旭-上海市上海市浦 东
        </li>
        <li>·
		                章先生-上海天玺
                        </li>
                        <li>·
		                刘珺-仁恒河滨城
                        </li>
                        <li>·
		                须小姐-上海市上海市上青佳园
                        </li>
                        <li>·
		                鲁女士-上海市上海康城
                        </li>
                        <li>·
		                黄女士-上海市吴中公寓
                        </li>
                        <li>·
		                程先生-上海市嘉宝梦之缘
                        </li>
                        <li>·
		                赵小姐-上海市石龙春晓
                        </li>
                        <li>·
		                李先生-上海市静安府
                        </li>
                        <li>·
		                徐小姐-上海市中环一号
                        </li>
                        <li>·
		                王先生-上海市中信态度
                        </li>
                        <li>·
		                刘先生-上海市佘山一号
                        </li>
                        </ul>
                        <ul id="sjk2">

            </ul>
            </div>
            </div>
            </div>
            <script>
            wfgundong("sjk","sjk1","sjk2",50);
        </script>
        <!--右边预约结束-->
    </div>
    <!--楼层导航-->
    <script src="{{ st('home/js/gun_by_height.js') }}" type="text/javascript"></script>
    <style>
        div.floors_Ctro{ width: 85px;border-left:solid 1px #d6d6d6;border-right:solid 1px #d6d6d6;border-top:solid 1px #d6d6d6; position: fixed;left: 1px;
            top: 152px; z-index:100;}
        div.floors_Ctro p{width:100%; text-align:center; height:31px; line-height:32px;color:#676767;border-bottom:solid 1px #d6d6d6; margin:0; padding:0; cursor:pointer; background:#fff;}

        div.floors_Ctro a:hover{ background:#000; color:#fff; zoom:1;}
        div.floors_Ctro p:hover{ background:#c40000; color:#fff;}
        div.floors_Ctro p.cur{ background:#c40000; color:#fff;}
    </style>

    <div class="floors_Ctro">
        <p value="" id_value="0">前期</p>

        <p value="" id_value="2">墙体改造</p>

        <p value="" id_value="3">水电阶段</p>

        <p value="" id_value="4">泥瓦工阶段</p>

        <p value="" id_value="5">木工阶段</p>

        <p value="" id_value="8">验收阶段</p>

    </div>
    <script>
        $(function(){
            $(".floors_Ctro p").each(function(){
                var index = $(this).attr("id_value");
                var height = $(".gd_follow_"+index).offset().top;
                $(this).attr("value",height);
            })
            $(".floors_Ctro p").click(function(){
                var height = $(this).attr("value");
                gun_by_height(height);

            })
            $(window).scroll(function(){
                var height = parseInt($(this).scrollTop());
                $(".floors_Ctro p").each(function(index){
                    var value = parseInt($(this).attr("value"));
                    if (height >= value) {
                        $('.floors_Ctro p').removeClass('cur');
                        $(this).addClass('cur');
                    }
                });
            });
        })

    </script>
    <!--楼层导航结束-->
    <!--主体内容结束-->
@endsection