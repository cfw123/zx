@extends('home.layout.master')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ st('home/template/default/cases/cases/css/erji_case_single.css')}}" />

    <script src="{{ st('home/template/default/cases/cases/js/casescript.js')}}" type="text/javascript"></script>

    <div class="weizhi content" style="clear:both">
        <a href="index.html">主页</a> > <a href="cases.html">精彩案例</a>>《临江豪园》美式轻奢风格，与自由和不羁的邂逅！
    </div>
    <style>
    </style>
    <div class="case content">
        <div class="leftt">
            <h2>《临江豪园》美式轻奢风格，与自由和不羁的邂逅！</h2>
            <div id="tFocus" style="position:relative;">
                <div class="prev" id="prev" style="opacity: 0.5;" ></div>
                <div class="next" id="next" style="opacity: 0.5;" ></div>
                <ul id="tFocus-pic">
                    <li><img src="{{ st('home/editor/attached/image/20200511/20200511160519_72935.jpg')}}"  onload="DrawImage(this,895,500)"/></li>
                    <li><img src="{{ st('home/editor/attached/image/20200511/20200511160519_20453.jpg')}}"  onload="DrawImage(this,895,500)"/></li>
                    <li><img src="{{ st('home/editor/attached/image/20200511/20200511160519_76681.jpg')}}"  onload="DrawImage(this,895,500)"/></li>
                    <li><img src="{{ st('home/editor/attached/image/20200511/20200511160520_65360.jpg')}}"  onload="DrawImage(this,895,500)"/></li>
                    <li><img src="{{ st('home/editor/attached/image/20200511/20200511160520_21115.jpg')}}"  onload="DrawImage(this,895,500)"/></li>
                    <li><img src="{{ st('home/editor/attached/image/20200511/20200511160520_61825.jpg')}}"  onload="DrawImage(this,895,500)"/></li>
                    <li><img src="{{ st('home/editor/attached/image/20200511/20200511160521_70691.jpg')}}"  onload="DrawImage(this,895,500)"/></li>
                    <li><img src="{{ st('home/editor/attached/image/20200511/20200511160521_41294.jpg')}}"  onload="DrawImage(this,895,500)"/></li>
                    <li><img src="{{ st('home/editor/attached/image/20200511/20200511160521_92301.jpg')}}"  onload="DrawImage(this,895,500)"/></li>
                    <li><img src="{{ st('home/editor/attached/image/20200511/20200511160521_52550.jpg')}}"  onload="DrawImage(this,895,500)"/></li>
                    <li><img src="{{ st('home/editor/attached/image/20200511/20200511160522_51871.jpg')}}"  onload="DrawImage(this,895,500)"/></li>

                    <div id="dailyContent"></div>
                </ul>
            </div><!--tFocus end-->
            <div id="tFocusBtn">
                <div class="smallpicarea_left">


                </div>
                <a href="javascript:void(0);" id="tFocus-leftbtn">上一张</a>
                <div id="tFocus-btn">
                    <ul>
                        <li class="active"><img src="{{ st('home/editor/attached/image/20200511/20200511160519_72935.jpg')}}" width="124" height="95" /></li>
                        <li ><img src="{{ st('home/editor/attached/image/20200511/20200511160519_20453.jpg')}}" width="124" height="95" /></li>
                        <li ><img src="{{ st('home/editor/attached/image/20200511/20200511160519_76681.jpg')}}" width="124" height="95" /></li>
                        <li ><img src="{{ st('home/editor/attached/image/20200511/20200511160520_65360.jpg')}}" width="124" height="95" /></li>
                        <li ><img src="{{ st('home/editor/attached/image/20200511/20200511160520_21115.jpg')}}" width="124" height="95" /></li>
                        <li ><img src="{{ st('home/editor/attached/image/20200511/20200511160520_61825.jpg')}}" width="124" height="95" /></li>
                        <li ><img src="{{ st('home/editor/attached/image/20200511/20200511160521_70691.jpg')}}" width="124" height="95" /></li>
                        <li ><img src="{{ st('home/editor/attached/image/20200511/20200511160521_41294.jpg')}}" width="124" height="95" /></li>
                        <li ><img src="{{ st('home/editor/attached/image/20200511/20200511160521_92301.jpg')}}" width="124" height="95" /></li>
                        <li ><img src="{{ st('home/editor/attached/image/20200511/20200511160521_52550.jpg')}}" width="124" height="95" /></li>
                        <li ><img src="{{ st('home/editor/attached/image/20200511/20200511160522_51871.jpg')}}" width="124" height="95" /></li>
                    </ul>
                </div>
                <a href="javascript:void(0);" id="tFocus-rightbtn">下一张</a>
                <div class="smallpicarea_right">

                    <a href="cases4d15.html?mod=detail&amp;id=164"><img src="{{ st('home/editor/attached/lehome_thumb/20200523100432_26875.jpg')}}" width="124" height="95" title="《绿地天呈》200㎡简美风格装修效果图，每一处细节都让人陶醉!" /></a>
                    <p><a href="cases4d15.html?mod=detail&amp;id=164" title="《绿地天呈》200㎡简美风格装修效果图，每一处细节都让人陶醉!">下一图集〉</a></p>

                </div>
            </div>

            <div class="anli_content">
                <div class="h3">
                    <div style="float:left;">
                        装修详情
                    </div>
                    <div style="float:left; font-size:14px; margin-left:20px; color:#555;">
                        累加访问量<font color="#ed182a">6421</font>次
                    </div>
                    <div style="float:left; margin-left:10px; font-size:14px;color:#555;">
                        预约业主共<font color="#ed182a">139</font>户
                    </div>
                </div>
                <div class="productmid-list">
                    <ul>
                        <li>户型:&nbsp;四居室</li>
                        <li>面积:&nbsp;100-150㎡</li>
                        <li>设计师:&nbsp;张梦梦</li>								<li>工程造价:&nbsp;26w</li>
                    </ul>
                </div>
                <div class="s_anli_content">
                    <p>
                        <img title="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" src="{{ st('home/editor/attached/image/20200511/20200511160519_72935.jpg')}}" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" /><img title="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" src="{{ st('home/editor/attached/image/20200511/20200511160519_20453.jpg')}}" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" /><img title="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" src="{{ st('home/editor/attached/image/20200511/20200511160519_76681.jpg')}}" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" /><img title="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" src="{{ st('home/editor/attached/image/20200511/20200511160520_65360.jpg')}}" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" /><img title="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" src="{{ st('home/editor/attached/image/20200511/20200511160520_21115.jpg')}}" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" /><img title="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" src="{{ st('home/editor/attached/image/20200511/20200511160520_61825.jpg')}}" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" /><img title="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" src="{{ st('home/editor/attached/image/20200511/20200511160521_70691.jpg')}}" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" /><img title="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" src="{{ st('home/editor/attached/image/20200511/20200511160521_41294.jpg')}}" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" /><img title="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" src="{{ st('home/editor/attached/image/20200511/20200511160521_92301.jpg')}}" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" /><img title="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" src="{{ st('home/editor/attached/image/20200511/20200511160521_52550.jpg')}}" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" /><img title="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" src="{{ st('home/editor/attached/image/20200511/20200511160522_51871.jpg')}}" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" />
                    </p>
                    <p>
                        <br />
                    </p>
                    <p>
                        知贤装饰,一家拥有住建委建筑装饰二级资质的老牌,上海装修公司，专注,房屋设计,房屋装修,公寓装修,二手房装修，别墅装修,旧房装修，上海十大诚信家装公司，百姓喜爱装饰公司，24H咨询热线：4008-547-888。
                    </p>
                    <p>
                        <br />
                    </p>
                </div>
            </div>



            <script type="text/javascript">addLoadEvent(Focus());</script>
            <div style="clear:both"></div>
            <!--相关品牌-->
            <!--相关品牌结束-->
            <!---------评价--------->
            {{--<div class="plun">--}}
                {{--<div class="plun_c">--}}
                    {{--<h3>评价</h3>--}}

                    {{--<div class="mt10">--}}
                        {{--<ul class="pj_ul">--}}
                            {{--<div class="plun_c_l mt10"></div>--}}
                            {{--<div style="line-height:30px; text-align: center;">暂无评价内容。</div>--}}
                            {{--<a href="pingjiadad7.html?mod=cases&amp;id=431" class="more fr" style="color: #ed182a; margin-top: 10px;font-size: 13px;line-height: 28px;--}}
    {{--height: 28px;">查看更多＞＞</a>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<script>--}}
                        {{--function pingjia_checkform() {--}}
                            {{--var title = $("#pingjia_form_title");--}}
                            {{--var content = $("#pingjia_form_content");--}}

                            {{--if (!checkNull(title.val())) {--}}
                                {{--alert("请输入您的姓名");--}}
                                {{--title.focus();--}}
                                {{--return false;--}}
                            {{--}--}}
                            {{--if (!checkkg(title.val())) {--}}
                                {{--alert("姓名中不能有空格，请重新输入");--}}
                                {{--title.focus();--}}
                                {{--return false;--}}
                            {{--}--}}
                            {{--if (!checkNull(content.val())) {--}}
                                {{--alert("请输入评价内容");--}}
                                {{--content.focus();--}}
                                {{--return false;--}}
                            {{--}--}}
                            {{--form_ts();--}}
                            {{--$("#pingjia_form").submit();--}}
                        {{--}--}}
                    {{--</script>--}}
                    {{--<div class="clear"></div>--}}
                    {{--<h3>我要评价</h3>--}}
                    {{--<div class="pingjia">--}}
                        {{--<div class="plun_c_l mt20"><img src="images/pingjia_icon.jpg" width="70" height="70"></div>--}}
                        {{--<div class="plun_c_r">--}}
                            {{--<form id="pingjia_form" action="http://www.zhixian.com.cn/save_book.php?mod=pingjia&amp;mid=5" method="post">--}}
                                {{--<input type="hidden" name="obj_id" value="431">--}}
                                {{--<input class="border" style="width:150px;height:30px;line-height:30px;margin-bottom:10px;text-indent:10px;color:#666;" type="text" name="title" id="pingjia_form_title" placeholder="请输入您的称呼" >--}}
                                {{--<textarea name="content" cols="103" rows="13" class="plun_texta" id="pingjia_form_content" placeholder="请输入您的评价"></textarea>--}}
                                {{--<div class="plun_c_qq" style="">--}}
                                    {{--<div id="bdshare" class="fr f_l bdshare_b" style="line-height: 12px;padding-top:5px;">--}}
                                        {{--<img src="{{ st('home/template/default/common/images/type-button-53cb7.jpg')}}?cdnversion=20120831">--}}
                                    {{--</div>--}}
                                    {{--<script type="text/javascript" id="bdshare_js" data="type%3dbutton%26uid%3d0.html" src="../bdimg.share.baidu.com/static/js/bds_s_v2d5c3.js?cdnversion=402446"></script>--}}

                                    {{--<script type="text/javascript">--}}
                                        {{--document.getElementById("bdshell_js").src = "../bdimg.share.baidu.com/static/js/shell_v2b662.js?cdnversion=" + Math.ceil(new Date()/3600000);--}}
                                    {{--</script>--}}
                                {{--</div>--}}
                                {{--<div style="width:150px; float:left;height:30px;margin-top:20px;">--}}
                                    {{--<span class="fl">满意度：</span>--}}
                                    {{--<span  id="manyi"><input type="hidden" name="manyidu" value="5" /></span>--}}
                                    {{--<div class="clr"></div>--}}
                                {{--</div>--}}
                                {{--<div>--}}
                                    {{--验证码：<input name="code" type="text" id="code"   style="  margin-top: 18px;width:70px; height:20px; border:1px solid #666666;"/>--}}
                                    {{--<img src="codeb275.png?1825493605"  id="imgCode"  alt="验证码,看不清楚?请点击刷新验证码" style="cursor : pointer; background-color:#A9E0F4;vertical-align: bottom;" onclick="this.src='coded41d.png?'+Math.random();" width="80" height="30">--}}

                                {{--</div>--}}
                                {{--<div style="clear:both"></div>--}}
                                {{--<div style="margin-bottom: 10px;"><input type="button" onclick="pingjia_checkform();" value="提交评价" class="plun_subtn" style="background:#ed182a;color:#fff;font-size:14px;"></div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<script>--}}
                {{--$(document).ready(function(e) {--}}
                    {{--showstar("manyi")--}}
                {{--});--}}

                {{--function showstar(div){--}}
                    {{--var value=parseInt($("#"+div).children("input").val())--}}
                    {{--for (i=0;i<=4;i++){--}}
                        {{--if (value-i	>=1){--}}
                            {{--$("#"+div).append("<span class='fullstar'></span>")--}}
                        {{--}else{--}}
                            {{--$("#"+div).append("<span class='empstar'></span>")--}}
                        {{--}--}}
                    {{--}--}}
                    {{--$("#"+div).children("span").bind({--}}
                        {{--"mouseenter":function(){--}}
                            {{--$("#"+div).children("span").attr("class","empstar")--}}
                            {{--for(i=0;i<=$("#"+div).children("span").index(this);i++){--}}
                                {{--$("#"+div).children("span").eq(i).attr("class","fullstar")--}}
                            {{--}--}}
                        {{--},--}}
                        {{--"click":function(){--}}
                            {{--$("#"+div).children("input").val($("#"+div).children(".fullstar").length)--}}
                        {{--}--}}
                    {{--});--}}
                    {{--$("#"+div).mouseleave(function(){--}}
                        {{--var value=parseInt($("#"+div).children("input").val())--}}
                        {{--$("#"+div).children("span").attr("class","empstar")--}}
                        {{--for(i=0;i<value;i++){--}}
                            {{--$("#"+div).children("span").eq(i).attr("class","fullstar")--}}
                        {{--}--}}
                    {{--})--}}
                {{--}--}}
            {{--</script>--}}
            {{--<!---------评价结束--------->--}}
            {{--<div class="al_cai mt10">--}}
                {{--<p>猜您喜欢</p>--}}
                {{--<ul>         		         		                    <li id="al_none">--}}
                        {{--<a href="cases4d15.html?mod=detail&amp;id=164" title="《绿地天呈》200㎡简美风格装修效果图，每一处细节都让人陶醉!">--}}
                            {{--<img src="{{ st('home/editor/attached/lehome_thumb/20200523100432_26875.jpg')}}"title="《绿地天呈》200㎡简美风格装修效果图，每一处细节都让人陶醉!" alt="《绿地天呈》200㎡简美风格装修效果图，每一处细节都让人陶醉!"/>--}}
                        {{--</a>--}}
                        {{--<br />--}}
                        {{--<a href="cases4d15.html?mod=detail&amp;id=164" title="《绿地天呈》200㎡简美风格装修效果图，每一处细节都让人陶醉!">《绿地天呈》200㎡简美风格装修效果图，每一处细节都让人陶醉!</a>--}}
                    {{--</li>--}}
                    {{--<li id="al_none">--}}
                        {{--<a href="casesc64b.html?mod=detail&amp;id=284" title="《太阳都市花园》现代简约风装修案例，闹市之中的宁静优雅！">--}}
                            {{--<img src="{{ st('home/editor/attached/lehome_thumb/20200523100512_71240.jpg')}}"title="《太阳都市花园》现代简约风装修案例，闹市之中的宁静优雅！" alt="《太阳都市花园》现代简约风装修案例，闹市之中的宁静优雅！"/>--}}
                        {{--</a>--}}
                        {{--<br />--}}
                        {{--<a href="casesc64b.html?mod=detail&amp;id=284" title="《太阳都市花园》现代简约风装修案例，闹市之中的宁静优雅！">《太阳都市花园》现代简约风装修案例，闹市之中的宁静优雅！</a>--}}
                    {{--</li>--}}
                    {{--<li id="al_none">--}}
                        {{--<a href="casesc643.html?mod=detail&amp;id=154" title="《香樟园》北欧风格装修效果图，温馨简约实用！">--}}
                            {{--<img src="{{ st('home/editor/attached/lehome_thumb/20200522134110_66876.jpg')}}"title="《香樟园》北欧风格装修效果图，温馨简约实用！" alt="《香樟园》北欧风格装修效果图，温馨简约实用！"/>--}}
                        {{--</a>--}}
                        {{--<br />--}}
                        {{--<a href="casesc643.html?mod=detail&amp;id=154" title="《香樟园》北欧风格装修效果图，温馨简约实用！">《香樟园》北欧风格装修效果图，温馨简约实用！</a>--}}
                    {{--</li>--}}
                    {{--<li id="al_none">--}}
                        {{--<a href="cases2b1c.html?mod=detail&amp;id=161" title="《乾阳佳园》新中式装修效果，别具韵味的中国文化！">--}}
                            {{--<img src="{{ st('home/editor/attached/lehome_thumb/20200522133657_10906.jpg')}}"title="《乾阳佳园》新中式装修效果，别具韵味的中国文化！" alt="《乾阳佳园》新中式装修效果，别具韵味的中国文化！"/>--}}
                        {{--</a>--}}
                        {{--<br />--}}
                        {{--<a href="cases2b1c.html?mod=detail&amp;id=161" title="《乾阳佳园》新中式装修效果，别具韵味的中国文化！">《乾阳佳园》新中式装修效果，别具韵味的中国文化！</a>--}}
                    {{--</li>--}}
                    {{--<li id="al_none">--}}
                        {{--<a href="cases5ca0.html?mod=detail&amp;id=410" title="《融创·玫瑰公馆》现代轻奢风格，精致高端有格调！">--}}
                            {{--<img src="{{ st('home/editor/attached/lehome_thumb/20201005094340_41607.jpg')}}"title="《融创·玫瑰公馆》现代轻奢风格，精致高端有格调！" alt="《融创·玫瑰公馆》现代轻奢风格，精致高端有格调！"/>--}}
                        {{--</a>--}}
                        {{--<br />--}}
                        {{--<a href="cases5ca0.html?mod=detail&amp;id=410" title="《融创·玫瑰公馆》现代轻奢风格，精致高端有格调！">《融创·玫瑰公馆》现代轻奢风格，精致高端有格调！</a>--}}
                    {{--</li>--}}
                    {{--<li id="al_none">--}}
                        {{--<a href="casesba21.html?mod=detail&amp;id=121" title="《莱茵北郡》新中式装修效果图，一进门就感受满满的贵气！ ​">--}}
                            {{--<img src="{{ st('home/editor/attached/lehome_thumb/20190924172748_90598.jpg')}}"title="《莱茵北郡》新中式装修效果图，一进门就感受满满的贵气！ ​" alt="《莱茵北郡》新中式装修效果图，一进门就感受满满的贵气！ ​"/>--}}
                        {{--</a>--}}
                        {{--<br />--}}
                        {{--<a href="casesba21.html?mod=detail&amp;id=121" title="《莱茵北郡》新中式装修效果图，一进门就感受满满的贵气！ ​">《莱茵北郡》新中式装修效果图，一进门就感受满满的贵气！ ​</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
        <div class="case_right fr">

            <div class="alr_doc_01">
                <p class="al_title">设计师</p>
                <p class="sjs_tu">
                    <a href="designere7e5.html?mod=detail&amp;id=124" title="上海装修设计师张梦梦">
                        <div class="clipImage">
                            <img src="{{ st('home/editor/attached/image/20200511/20200511095142_31437.jpg')}}" title="上海装修设计师张梦梦" alt="上海装修设计师张梦梦" width="224px" height="220"/>
                        </div>
                    </a>
                </p>
                <dl class="sjs_dl fl">
                    <dt>张梦梦</dt>
                    <dd class="dd_01" style="height:7px;">总监设计师</dd>
                </dl>

                <span class="anniu sjs_an fl" ><a  style="color:#fff;" onclick="OpenDialog('book4873.html?mod=designer&amp;id=124','预约设计师',420,300)">免费预约</a></span>
                <span class="anniu sjs_an fl"><a style="color:#fff;"href="kefu482d.html?mod=index&amp;qq=&amp;id=0" target="_blank">在线Q Ta</a></span>

            </div>
            <script>
                function cases_form_checkform() {
                    var title = $("#cases_form_title");
                    var tel = $("#cases_form_tel");
                    var address = $("#cases_form_address");

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
                    $("#cases_form_form").submit();
                }
            </script>
            <div class="alr_doc_01">
                <p class="al_title">按此风格设计</p>
                <div class="anli_for">
                    <form  id="cases_form_form" action="http://www.zhixian.com.cn/save_book.php?mod=index&amp;mid=7" method="post" >
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <input type="hidden"  name="obj_id"  value="431" />
                            <tr>
                                <td height="48;">
                                    <input id="cases_form_title" name="title" type="text" class="al_text" placeholder="请输入您的姓名" />
                                </td>
                            </tr>
                            <tr>
                                <td height="48;">
                                    <input type="text" id="cases_form_tel" name="tel" class="al_text" placeholder="请输入您的手机号码"/>
                                </td>
                            </tr>
                            <tr>
                                <td height="48;">
                                    <input type="text" id="cases_form_address" name="address" class="al_text" placeholder="请输入您的楼盘名称" />
                                </td>
                            </tr>
                            <tr>
                                <td height="48;">
                                    <input style="text-align: center" type="button" onclick="cases_form_checkform();" value="提交信息" class="al_btn" />
                                </td>
                            </tr>
                            <tr>
                                <td height="29;" align="center">已有<b>139</b>人提交</td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <!--设计师人气排行榜开始---->
            <script>
                //设计师排行榜
                function ej_des(){
                    $('.ej_des_sjsCon ul li').mouseover(function () {
                        $('.ej_des_sjsCon ul li').find('.ej_des_liTittle').css('display', 'block');
                        $('.ej_des_sjsCon ul li').find('.ej_des_liCon').css('display', 'none');
                        $(this).find('.ej_des_liTittle').css('display', 'none');
                        $(this).find('.ej_des_liCon').css('display', 'block');
                    });
                }
            </script>
            <style>
                /*设计师排行榜*/
                .ej_des_sjs {width:260px;height:391px;overflow:hidden;background:#fff;border-top: 2px solid #ed182a;}
                .ej_des_sjsTittle{height:30px;line-height:30px;font-size:18px;color:#222;padding-left:15px;width:245px;}
                .ej_des_sjsCon{width:206px;padding-left:6px;margin:0 auto;font-size:12px;}
                .ej_des_sjsCon ul{width:206px;}
                .ej_des_sjsCon ul li{width:206px;border-bottom:1px dashed #AFAFAF;overflow:auto;}
                .ej_des_liTittle{width:206px;height:32px;line-height:32px;}
                .ej_des_sjsCon ul li:first-child .ej_des_liTittle{display:none;}
                .ej_des_sjsCon ul li:first-child .ej_des_liCon{display:block;}
                .ej_des_liTittle a{display: block;width: 206px;height: 31px;color: #333333;}
                .ej_des_liTittle a strong{display: block;height: 31px;float: right;font-weight: normal;overflow: hidden;}
                .ej_des_liTittle a b{display: block;float: left;font-weight: normal;width: 50px;height: 31px;
                    overflow: hidden;margin-right: 10px;}
                .ej_des_liCon{width: 206px;height: 94px;display: none;border-bottom: 1px dashed #dedede;padding-bottom: 6px;padding-top: 5px;}
                .ej_des_liCon a img{width:93px;height:94px;float:left;margin-right:17px;}
                .ej_des_liCon a p{width: 94px;height: 94px;float: left;line-height: 24px;color: #333;overflow: hidden;font-weight: bold;
                    font-size: 14px;}
            </style>

            <div class="ej_des_sjs" id="ej_des_sjs">
                <div class="ej_des_sjsTittle">
                    设计师人气榜
                </div>
                <div class="ej_des_sjsCon">
                    <ul>
                        <li>
                            <div class="ej_des_liTittle">
                                <a href="designer7bd8.html?mod=detail&amp;id=18" title="上海装修设计师祁丹">
                                    <strong>10907</strong>
                                    <b>祁丹</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_liCon">
                                <a href="designer7bd8.html?mod=detail&amp;id=18" title="上海装修设计师祁丹">
                                    <img src="{{ st('home/editor/attached/image/20191225/20191225133242_94064.jpg')}}" alt="上海装修设计师祁丹" title="上海装修设计师祁丹"/>
                                    <p>祁丹<br />设计总监</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_liTittle">
                                <a href="designerdd1d.html?mod=detail&amp;id=66" title="上海装修设计师殷勇">
                                    <strong>10667</strong>
                                    <b>殷勇</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_liCon">
                                <a href="designerdd1d.html?mod=detail&amp;id=66" title="上海装修设计师殷勇">
                                    <img src="{{ st('home/editor/attached/image/20191225/20191225141747_40371.jpg')}}" alt="上海装修设计师殷勇" title="上海装修设计师殷勇"/>
                                    <p>殷勇<br />设计总监</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_liTittle">
                                <a href="designerf582.html?mod=detail&amp;id=37" title="上海装修设计师刘敏">
                                    <strong>10292</strong>
                                    <b>刘敏</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_liCon">
                                <a href="designerf582.html?mod=detail&amp;id=37" title="上海装修设计师刘敏">
                                    <img src="{{ st('home/editor/attached/image/20191226/20191226112223_52802.jpg')}}" alt="上海装修设计师刘敏" title="上海装修设计师刘敏"/>
                                    <p>刘敏<br />首席设计师</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_liTittle">
                                <a href="designer65c4.html?mod=detail&amp;id=21" title="上海装修设计师陈学红">
                                    <strong>8777</strong>
                                    <b>陈学红</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_liCon">
                                <a href="designer65c4.html?mod=detail&amp;id=21" title="上海装修设计师陈学红">
                                    <img src="{{ st('home/editor/attached/image/20191226/20191226112748_14696.jpg')}}" alt="上海装修设计师陈学红" title="上海装修设计师陈学红"/>
                                    <p>陈学红<br />设计总监</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_liTittle">
                                <a href="designer1248.html?mod=detail&amp;id=74" title="上海装修设计师李梦然">
                                    <strong>8774</strong>
                                    <b>李梦然</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_liCon">
                                <a href="designer1248.html?mod=detail&amp;id=74" title="上海装修设计师李梦然">
                                    <img src="{{ st('home/editor/attached/image/20200709/20200709103349_87525.jpg')}}" alt="上海装修设计师李梦然" title="上海装修设计师李梦然"/>
                                    <p>李梦然<br />总监设计师</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_liTittle">
                                <a href="designerca8c.html?mod=detail&amp;id=81" title="上海装修设计师鲁斌">
                                    <strong>8708</strong>
                                    <b>鲁斌</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_liCon">
                                <a href="designerca8c.html?mod=detail&amp;id=81" title="上海装修设计师鲁斌">
                                    <img src="{{ st('home/editor/attached/image/20191225/20191225133207_16358.jpg')}}" alt="上海装修设计师鲁斌" title="上海装修设计师鲁斌"/>
                                    <p>鲁斌<br />首席设计师</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_liTittle">
                                <a href="designercdfe.html?mod=detail&amp;id=55" title="上海装修设计师刘新洲">
                                    <strong>8217</strong>
                                    <b>刘新洲</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_liCon">
                                <a href="designercdfe.html?mod=detail&amp;id=55" title="上海装修设计师刘新洲">
                                    <img src="{{ st('home/editor/attached/image/20191225/20191225145821_21153.jpg')}}" alt="上海装修设计师刘新洲" title="上海装修设计师刘新洲"/>
                                    <p>刘新洲<br />设计总监</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_liTittle">
                                <a href="designer649a.html?mod=detail&amp;id=24" title="上海装修设计师王庭华">
                                    <strong>8090</strong>
                                    <b>王庭华</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_liCon">
                                <a href="designer649a.html?mod=detail&amp;id=24" title="上海装修设计师王庭华">
                                    <img src="{{ st('home/editor/attached/image/20200427/20200427104558_84995.jpg')}}" alt="上海装修设计师王庭华" title="上海装修设计师王庭华"/>
                                    <p>王庭华<br />设计总监</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <script>
                    ej_des();
                </script>
            </div>
            <!--设计师人气排行榜结束---->
            <!--装企服务之星开始---->
            <script>
                //设计师服务之星排行榜
                function ej_des_fwzx(){
                    $('.ej_des_fwzx_sjsCon ul li').mouseover(function () {
                        $('.ej_des_fwzx_sjsCon ul li').find('.ej_des_fwzx_liTittle').css('display', 'block');
                        $('.ej_des_fwzx_sjsCon ul li').find('.ej_des_fwzx_liCon').css('display', 'none');
                        $(this).find('.ej_des_fwzx_liTittle').css('display', 'none');
                        $(this).find('.ej_des_fwzx_liCon').css('display', 'block');
                    });
                }
            </script>
            <style>
                /*设计师服务之星排行榜*/
                .ej_des_fwzx_sjs {width:260px;height:391px;overflow:hidden;background:#fff;border-top: 2px solid #ed182a; margin-top:10px;}
                .ej_des_fwzx_sjsTittle{height:30px;line-height:30px;font-size:18px;color:#222;padding-left:15px;width:245px;}
                .ej_des_fwzx_sjsCon{width:206px;padding-left:6px;margin:0 auto;font-size:12px;}
                .ej_des_fwzx_sjsCon ul{width:206px;}
                .ej_des_fwzx_sjsCon ul li{width:206px;border-bottom:1px dashed #AFAFAF;overflow:auto;}
                .ej_des_fwzx_liTittle{width:206px;height:32px;line-height:32px;}
                .ej_des_fwzx_sjsCon ul li:first-child .ej_des_fwzx_liTittle{display:none;}
                .ej_des_fwzx_sjsCon ul li:first-child .ej_des_fwzx_liCon{display:block;}
                .ej_des_fwzx_liTittle a{display: block;width: 206px;height: 31px;color: #333333;}
                .ej_des_fwzx_liTittle a strong{display: block;width: 45px;height: 31px;float: right;font-weight: normal;overflow: hidden;}
                .ej_des_fwzx_liTittle a b{display: block;float: left;font-weight: normal;width: 50px;height: 31px;
                    overflow: hidden;margin-right: 50px;}
                .ej_des_fwzx_liCon{width: 206px;height: 94px;display: none;border-bottom: 1px dashed #dedede;padding-bottom: 6px;padding-top: 5px;}
                .ej_des_fwzx_liCon a img{width:93px;height:94px;float:left;margin-right:17px;}
                .ej_des_fwzx_liCon a p{width: 94px;height: 94px;float: left;line-height: 24px;color: #333;overflow: hidden;font-weight: bold;
                    font-size: 14px;}
            </style>
            <div class="ej_des_fwzx_sjs">
                <div class="ej_des_fwzx_sjsTittle">
                    服务之星
                </div>
                <div class="ej_des_fwzx_sjsCon">
                    <ul>
                        <li>
                            <div class="ej_des_fwzx_liTittle">
                                <a href="designer7bd8.html?mod=detail&amp;id=18" title="上海装修设计师祁丹">
                                    <strong>10907</strong>
                                    <b>祁丹</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_fwzx_liCon">
                                <a href="designer7bd8.html?mod=detail&amp;id=18" title="上海装修设计师祁丹">
                                    <img src="{{ st('home/editor/attached/image/20191225/20191225133242_94064.jpg')}}" alt="上海装修设计师祁丹" title="上海装修设计师祁丹"/>
                                    <p>祁丹<br />设计总监</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_fwzx_liTittle">
                                <a href="designer65c4.html?mod=detail&amp;id=21" title="上海装修设计师陈学红">
                                    <strong>8777</strong>
                                    <b>陈学红</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_fwzx_liCon">
                                <a href="designer65c4.html?mod=detail&amp;id=21" title="上海装修设计师陈学红">
                                    <img src="{{ st('home/editor/attached/image/20191226/20191226112748_14696.jpg')}}" alt="上海装修设计师陈学红" title="上海装修设计师陈学红"/>
                                    <p>陈学红<br />设计总监</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_fwzx_liTittle">
                                <a href="designerdc13.html?mod=detail&amp;id=30" title="上海装修设计师林泽文">
                                    <strong>6980</strong>
                                    <b>林泽文</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_fwzx_liCon">
                                <a href="designerdc13.html?mod=detail&amp;id=30" title="上海装修设计师林泽文">
                                    <img src="{{ st('home/editor/attached/image/20191223/20191223142029_60037.jpg')}}" alt="上海装修设计师林泽文" title="上海装修设计师林泽文"/>
                                    <p>林泽文<br />设计总监</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_fwzx_liTittle">
                                <a href="designer649a.html?mod=detail&amp;id=24" title="上海装修设计师王庭华">
                                    <strong>8090</strong>
                                    <b>王庭华</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_fwzx_liCon">
                                <a href="designer649a.html?mod=detail&amp;id=24" title="上海装修设计师王庭华">
                                    <img src="{{ st('home/editor/attached/image/20200427/20200427104558_84995.jpg')}}" alt="上海装修设计师王庭华" title="上海装修设计师王庭华"/>
                                    <p>王庭华<br />设计总监</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_fwzx_liTittle">
                                <a href="designer1248.html?mod=detail&amp;id=74" title="上海装修设计师李梦然">
                                    <strong>8774</strong>
                                    <b>李梦然</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_fwzx_liCon">
                                <a href="designer1248.html?mod=detail&amp;id=74" title="上海装修设计师李梦然">
                                    <img src="{{ st('home/editor/attached/image/20200709/20200709103349_87525.jpg')}}" alt="上海装修设计师李梦然" title="上海装修设计师李梦然"/>
                                    <p>李梦然<br />总监设计师</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_fwzx_liTittle">
                                <a href="designer0f5b.html?mod=detail&amp;id=38" title="上海装修设计师吴永">
                                    <strong>7624</strong>
                                    <b>吴永</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_fwzx_liCon">
                                <a href="designer0f5b.html?mod=detail&amp;id=38" title="上海装修设计师吴永">
                                    <img src="{{ st('home/editor/attached/image/20191225/20191225133402_91633.jpg')}}" alt="上海装修设计师吴永" title="上海装修设计师吴永"/>
                                    <p>吴永<br />总监设计师</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_fwzx_liTittle">
                                <a href="designer08fd.html?mod=detail&amp;id=109" title="上海装修设计师程训昂">
                                    <strong>6768</strong>
                                    <b>程训昂</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_fwzx_liCon">
                                <a href="designer08fd.html?mod=detail&amp;id=109" title="上海装修设计师程训昂">
                                    <img src="{{ st('home/editor/attached/image/20200305/20200305113421_16039.jpg')}}" alt="上海装修设计师程训昂" title="上海装修设计师程训昂"/>
                                    <p>程训昂<br />总监设计师</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ej_des_fwzx_liTittle">
                                <a href="designerdd1d.html?mod=detail&amp;id=66" title="上海装修设计师殷勇">
                                    <strong>10667</strong>
                                    <b>殷勇</b>
                                    作品人气
                                </a>
                            </div>
                            <div class="ej_des_fwzx_liCon">
                                <a href="designerdd1d.html?mod=detail&amp;id=66" title="上海装修设计师殷勇">
                                    <img src="{{ st('home/editor/attached/image/20191225/20191225141747_40371.jpg')}}" alt="上海装修设计师殷勇" title="上海装修设计师殷勇"/>
                                    <p>殷勇<br />设计总监</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <script>
                    ej_des_fwzx();
                </script>
            </div>
            <!--装企服务之星开始结束---->
            <!--提交信息开始---->
            <style>
                /*设计师楼盘提交信息*/
                .xiaoqu_form_lpxx{width:260px;height:347px;margin-top:10px;background:#f7f7f7;border-top: 2px solid #ed182a;}
                .xiaoqu_form_lpxx img{float:left;width:243px;height:67px;}
                .xiaoqu_form_lpxx>p.xiaoqu_form_tips{width:245px;padding-left:15px;height:25px;line-height:25px;font-size:12px;color:#222;overflow:hidden;}
                .xiaoqu_form_lpxx form{width:234px;margin:0px auto;}
                .xiaoqu_form_lpxx form input.xiaoqu_form_textBox{width:100%;height:34px;margin-top:10px;border:1px solid #dedede;color:#999;text-indent:15px;}
                .xiaoqu_form_lpxx form input.xiaoqu_form_btn{background: #ed182a;color: #fff;border-radius: 5px;height: 37px;line-height: 37px;width: 100%;margin-top:10px;}
                .xiaoqu_form_lpxx>p.xiaoqu_form_num{width:100%;text-align:center;overflow:hidden;color:#666;}
                .xiaoqu_form_lpxx>p.xiaoqu_form_num b{color:#ed182a;font-weight:normal;}
            </style>
            <script>
                function xiaoqu_form_checkform() {
                    var title = $("#xiaoqu_form_title");
                    var tel = $("#xiaoqu_form_tel");
                    var address = $("#xiaoqu_form_address");

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
                    if (!checkNull(address.val())) {
                        alert("请输入您所在的小区");
                        address.focus();
                        return false;
                    }
                    form_ts();
                    $("#xiaoqu_form_form").submit();
                }
            </script>
            <div class="xiaoqu_form_lpxx">
                <img src="{{ st('home/template/default/common/images/xq_bg.jpg')}}" />
                <p class="xiaoqu_form_tips">提交信息，试试看！</p>
                <form action="http://www.zhixian.com.cn/save_book.php?mod=index&amp;mid=5" method="post" id="xiaoqu_form_form">
                    <input type="text" class="xiaoqu_form_textBox" name="title" id="xiaoqu_form_title" placeholder="请输入您的姓名" />
                    <input type="text" class="xiaoqu_form_textBox" name="tel" placeholder="请输入您的手机号码" id="xiaoqu_form_tel"/>
                    <input type="text" class="xiaoqu_form_textBox" name="address" placeholder="请输入您的楼盘名称" id="xiaoqu_form_address"/>
                    <input type="text" class="xiaoqu_form_textBox" name="huxing" placeholder="请输入您的户型名称" id="xiaoqu_form_huxing"/>
                    <input type="button" class="xiaoqu_form_btn" name="" value="提交信息" onclick="xiaoqu_form_checkform()"/>
                </form>
                <p class="xiaoqu_form_num">
                    已有<b>97</b>人提交
                </p>
            </div>
            <!--提交信息结束---->
            <!--精彩活动开始---->
            <style>
                /*精彩活动列表*/
                .ej_des_tpgg{width:260px;background:#fff;margin-top:10px;}
                .ej_des_tpgg ul{width:260px;}
                .ej_des_tpgg ul li{width:260px;height:138px;}
                .ej_des_tpgg ul li a{width:260px;height:138px;display:block;}
                .ej_des_tpgg ul li a img{width:260px;height:113px;}
                .ej_des_tpgg ul li a p{width:260px;height:25px;line-height:25px;font-size:12px;color:#888; text-align: center;}
                .ej_des_tpgg ul li a:hover p{color:#ed182a;}
            </style>
            <div class="ej_des_tpgg">
                <ul>
                    <li>
                        <a href="active4479.html?mod=detail&amp;id=5" title="上海装修活动实景装修家博会">
                            <img src="{{ st('home/editor/attached/lehome_thumb/20210519154335_39385.jpg')}}" alt="上海装修活动实景装修家博会" title="上海装修活动实景装修家博会"/>
                            <p>
                                实景装修家博会
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="active9e26.html?mod=detail&amp;id=4" title="上海装修活动知贤实景家装展">
                            <img src="{{ st('home/editor/attached/lehome_thumb/20201001130332_30028.jpg')}}" alt="上海装修活动知贤实景家装展" title="上海装修活动知贤实景家装展"/>
                            <p>
                                知贤实景家装展
                            </p>
                        </a>
                    </li>

                </ul>
            </div>
            <!--精彩活动结束---->


        </div>
    </div>
    <div style="width:100%; height:20px; overflow:hidden; clear:both;"></div>
    <link rel="stylesheet" href="{{ st('home/template/common/bottom/bottom_7/bottom.css')}}" />
@endsection