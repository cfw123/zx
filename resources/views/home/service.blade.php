@extends('home.layout.master')

@section('content')
    <link href="{{ st("home/template/default/mfty/mfty_2/css/mfty_index.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ st("home/template/default/mfty/mfty_2/css/icon.css") }}" rel="stylesheet" type="text/css" />
    <script src="{{ st("home/js/citylist_all.js") }}"></script>
    <div class="guest_mfty">
        <!--表单-->
        <div class="guest guest-templet  decoration" style="margin-top:67px;">
            <div class="templet-top pr" style="background: url('{{ st("home/template/default/mfty/mfty_2/images/nav_bg1.jpg") }}')">
                <div class="banner_img" style="background: url('{{ st("home/template/default/mfty/mfty_2/images/top1_w1200.jpg") }}') no-repeat top center;height:580px;">
                    <div class="templet-nav over">
                        <div class="back nav1">
                            <!-- <div class="back nav1">这的nav1或者nav几，取决于第几个，加上相应的class -->
                            <div class="w1200 clearfix pr my_a">

                                <a href="#" class="text-center fl active ">
                                    <dl class="clearfix text-left">
                                        <dt class="fl text-center">
                                            <img src="{{ st("home/template/default/mfty/mfty_2/images/sheji.png") }}"/>
                                        </dt>
                                        <dd class="fl">
                                            <h1 class="f18">免费装修方案</h1>

                                            <span>3套方案满足居家需求</span>
                                        </dd>
                                    </dl>
                                </a>
                                <a href="#" class="text-center fl ">
                                    <dl class="clearfix text-left">
                                        <dt class="fl text-center">
                                            <img src="{{ st("home/template/default/mfty/mfty_2/images/chizi.png") }}"/>
                                        </dt>
                                        <dd class="fl">
                                            <p class="f18">免费上门量房</p>

                                            <span>免费量房尺寸进准把控</span>
                                        </dd>
                                    </dl>
                                </a>
                                <a href="#" class="text-center fl ">
                                    <dl class="clearfix text-left">
                                        <dt class="fl text-center">
                                            <img src="{{ st("home/template/default/mfty/mfty_2/images/kefu.png") }}"/>
                                        </dt>
                                        <dd class="fl">
                                            <p class="f18">免费装修顾问</p>

                                            <span>全程保持沟通提供专业建议</span>
                                        </dd>
                                    </dl>
                                </a>
                                <a href="#" class="text-center fl ">
                                    <dl class="clearfix text-left">
                                        <dt class="fl text-center">
                                            <img src="{{ st("home/template/default/mfty/mfty_2/images/anquan.png") }}"/>
                                        </dt>
                                        <dd class="fl">
                                            <p class="f18">免费质保 省心无忧</p>

                                            <span>项目全程监理售后服务保障</span>
                                        </dd>
                                    </dl>
                                </a>

                                <div class="back2 pr"></div>
                            </div>
                        </div>
                    </div>
                    <script src="{{ st("home/js/countUp.js") }}"></script>
                    <script src="{{ st("home/js/my_toggle.js") }}"></script>
                    <script>

                    </script>
                    <div class="w1200 clearfix">

                        <div class="left-cont fl">
                            <ul class="f14">
                                <li><img src="{{ st("home/template/default/mfty/mfty_2/images/linxin.png") }}"/>选装修不再盲目</li>
                                <li><img src="{{ st("home/template/default/mfty/mfty_2/images/linxin.png") }}"/>提出装修诉求，上海知贤装饰设计有限公司为您专属定制</li>
                                <li><img src="{{ st("home/template/default/mfty/mfty_2/images/linxin.png") }}"/>量房、设计、报价、售后服务、无忧装修0烦恼</li>
                                <li><img src="{{ st("home/template/default/mfty/mfty_2/images/linxin.png") }}"/>看风格，选材料，真实实景体验，一站式精装省钱省力省心</li>

                            </ul>
                            <a href="calc.html" class="link btn btn-yellow btn-line text-center f24">在线报价</a>
                        </div>

                        {{--<div class="form-box fr ff pr">--}}
                            {{--<div class="errorLayer">error</div>--}}
                            {{--<script>--}}
                                {{--function mfty_checkform() {--}}
                                    {{--var title = $("#mfty_yuyue input[name='title']");--}}
                                    {{--var tel = $("#mfty_yuyue input[name='tel']");--}}
                                    {{--var sheng = $("#citylist_province option:selected").text();--}}
                                    {{--var shi = $("#citylist_city option:selected").text();--}}
                                    {{--var address = $("#mfty_yuyue input[name='address']").val();--}}
                                    {{--address = sheng+shi+address;--}}
                                    {{--$("#mfty_yuyue input[name='address']").val(address);--}}
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
                                    {{--if (!checkNull(tel.val())) {--}}
                                        {{--alert("请输入您的号码");--}}
                                        {{--tel.focus();--}}
                                        {{--return false;--}}
                                    {{--}--}}
                                    {{--if (!checkTel(tel.val())) {--}}
                                        {{--alert("请输入正确格式的号码");--}}
                                        {{--tel.focus();--}}
                                        {{--return false;--}}
                                    {{--}--}}
                                    {{--form_ts();--}}
                                    {{--$("#mfty_yuyue").submit();--}}
                                {{--}--}}
                            {{--</script>--}}
                            {{--<form class="formLayer" id="mfty_yuyue" action="http://www.zhixian.com.cn/save_book.php?mod=index&amp;mid=1" method="post">--}}

                                {{--<div class="tit f18">--}}
                                    {{--已服务--}}
                                    {{--<span class="J_num f16" id="myTargetElement" style="color:#ff4048;"></span>--}}
                                    {{--位业主--}}
                                {{--</div>--}}
                                {{--<script>--}}
                                    {{--var options = {--}}
                                        {{--useEasing: true,--}}
                                        {{--useGrouping: true,--}}
                                        {{--separator: ',',--}}
                                        {{--decimal: '.',--}}
                                    {{--};--}}
                                    {{--var demo = new CountUp('myTargetElement', 0, 4509309, 0, 2.5, options);--}}
                                    {{--if (!demo.error) {--}}
                                        {{--demo.start();--}}
                                    {{--} else {--}}
                                        {{--console.error(demo.error);--}}
                                    {{--}--}}

                                {{--</script>--}}
                                {{--<div class="row mt5" style="overflow: hidden;">--}}
                                    {{--<div class="col-6">--}}
                                        {{--<div class="mR">--}}
                                            {{--<select id="citylist_province" validate="required" placeholder="省份" class="form-control"></select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-6">--}}
                                        {{--<div class="mL">--}}
                                            {{--<select id="citylist_city" validate="required" placeholder="市区" class="form-control"></select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<script type="text/javascript">--}}
                                        {{--$('#mfty_yuyue').citys({code:310114});--}}
                                    {{--</script>--}}
                                    {{--<div class="col-12">--}}
                                        {{--<input type="text" name="title" placeholder="您的称呼" validate="required" class="form-control"></div>--}}
                                    {{--<div class="col-12">--}}
                                        {{--<input type="text" name="tel" placeholder="手机号" validate="required|phone" class="form-control"></div>--}}
                                    {{--<div class="col-12">--}}
                                        {{--<input type="text" name="address" placeholder="小区名称" validate="required" class="form-control"></div>--}}
                                    {{--<div class="col-6">--}}
                                        {{--<div class="mR">--}}
                                            {{--<select name="area" validate="required" placeholder="房屋面积" class="form-control">--}}
                                                {{--<option value="">房屋面积</option>--}}
                                                {{--<option value="70平米以下">70平米以下</option>--}}
                                                {{--<option value="70-90平米">70-90平米</option>--}}
                                                {{--<option value="91-120平米">91-120平米</option>--}}
                                                {{--<option value="121-150平米">121-150平米</option>--}}
                                                {{--<option value="151-180平米">151-180平米</option>--}}
                                                {{--<option value="181-320平米">181-320平米</option>--}}
                                                {{--<option value="321-500平米">321-500平米</option>--}}
                                                {{--<option value="500平米以上">500平米以上</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-6">--}}
                                        {{--<div class="mL">--}}
                                            {{--<select name="yusuan" validate="required" placeholder="市区" class="form-control">--}}
                                                {{--<option value="">装修预算</option>--}}
                                                {{--<option value="5万左右">5万左右</option>--}}
                                                {{--<option value="8万左右">8万左右</option>--}}
                                                {{--<option value="10万左右">10万左右</option>--}}
                                                {{--<option value="15万左右">15万左右</option>--}}
                                                {{--<option value="20万左右">20万左右</option>--}}
                                                {{--<option value="30万左右">30万左右</option>--}}
                                                {{--<option value="30-50万左右">30-50万左右</option>--}}
                                                {{--<option value="50-80万左右">50-80万左右</option>--}}
                                                {{--<option value="80万以上">80万以上</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12">--}}
                                        {{--<button type="button" onclick="mfty_checkform();" class="btn btn-red btn-block mt15">立即申请</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="grey_6 text-center mt10">不收取任何费用，您的隐私将被严格保密。</div>--}}
                            {{--</form>--}}

                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <!--表单结束-->
        <!---------------------------------------自定义-------------------------------------------->
        <div style="width:100%;">
            <div class="templet-box1 w1200">
                <ul class="clearfix">
                    <li class="fl text-center">
                        <p class="icon pr">
                            <i class="iconfont icon-iconfontanquanbaozhang"></i>
                        </p>
                        <dl class="text-center">
                            <dt class="grey_4 f24">
                                有保障
                            </dt>
                            <dd class="grey_5">
                                专业装修公司，依托智能管理系统<br />
                                施工过程严苛管理，让您省心、安心
                            </dd>
                        </dl>
                    </li>
                    <li class="fl text-center">
                        <p class="icon pr">
                            <i class="iconfont icon-gongsi1"></i>
                        </p>
                        <dl class="text-center">
                            <dt class="grey_4 f24">
                                选择多
                            </dt>
                            <dd class="grey_5">
                                汇聚百余套装修效果图<br />
                                免费任选 不满意重新挑
                            </dd>
                        </dl>
                    </li>
                    <li class="fl text-center">
                        <p class="icon pr">
                            <i class="iconfont icon-dongtaitiaosepan"></i>
                        </p>
                        <dl class="text-center">
                            <dt class="grey_4 f24">
                                个性化
                            </dt>
                            <dd class="grey_5">
                                个性化定制装修方案<br />
                                量身定制，独一无二
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <!--PK-->
            <div class="Engineering-zhuanjia-box-rb">
                <table cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr class="tr1">
                        <td class="td1">
                            <img src="{{ st("home/template/default/mfty/mfty_2/images/pk.png") }}" width="80" />
                        </td>
                        <td class="td2">
                            我们
                        </td>
                        <td class="td3">
                            传统装修公司
                        </td>
                        <td class="td4">
                            游击队
                        </td>
                    </tr>
                    <tr class="tr2">
                        <td class="black">
                            <div class="bg">
                                <div>
                                    线上线下模式
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/good.png") }}" width="18" />
                            </div>
                            官网预约，实体店体验，方便快捷
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            仅有实体店体验
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            无实体店，无线上平台
                        </td>
                    </tr>
                    <tr class="tr2">
                        <td class="black">
                            <div class="bg">
                                <div>
                                    方案<br />
                                    设计
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/good.png") }}" width="18" />
                            </div>
                            主案设计师服务
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            根据设计师经理指定分派
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            无设计师，方案东拼西凑
                        </td>
                    </tr>
                    <tr class="tr2">
                        <td class="black">
                            <div class="bg">
                                <div style="line-height:45px;">
                                    性价比
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/good.png") }}" width="18" />
                            </div>
                            性价比较高，比施工队省了中间环节费用20%-50%不等
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            性价比一般
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            性价比低
                        </td>
                    </tr>
                    <tr class="tr2">
                        <td class="black">
                            <div class="bg">
                                <div>
                                    装修<br />
                                    报价
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/good.png") }}" width="18" />
                            </div>
                            模块式报价（净面积计费）
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            套餐式报价
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            看人下菜
                        </td>
                    </tr>
                    <tr class="tr2">
                        <td class="black">
                            <div class="bg">
                                <div>
                                    装修<br />
                                    模式
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/good.png") }}" width="18" />
                            </div>
                            设计、施工一体化
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            设计接单后转包给工长
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            自己接活干或走私单
                        </td>
                    </tr>
                    <tr class="tr2">
                        <td class="black">
                            <div class="bg">
                                <div>
                                    主材<br />
                                    选购
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/good.png") }}" width="18" />
                            </div>
                            厂家直供，2000㎡材料展厅
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            主材代购，商家返利
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            不负责主材
                        </td>
                    </tr>
                    <tr class="tr2">
                        <td class="black">
                            <div class="bg">
                                <div>
                                    质量<br />
                                    保障
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/good.png") }}" width="18" />
                            </div>
                            5年质保
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            普通质保
                        </td>
                        <td>
                            <div style="float:left;margin-right:10px;">
                                <img src="{{ st("home/template/default/mfty/mfty_2/images/bad.png") }}" width="18" />
                            </div>
                            无保障
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!--PK结束-->
            <!--招标信息-->
            {{--<script>--}}
                {{--$(function(){--}}
                    {{--$(".dataList").load("mfty624f.html?mod=booklist");--}}
                    {{--//最新申请装修服务--}}
                    {{--var obj;--}}
                    {{--setInterval(function() {--}}
                        {{--obj = $('.dataList>ul:last').height(0);--}}
                        {{--$(".dataList").prepend(obj);--}}
                        {{--obj.animate({--}}
                            {{--height: 60--}}
                        {{--}, 'slow');--}}
                    {{--}, 1500)--}}
                    {{--if($('.dataList ul').length > 7){--}}
                        {{--obj = $('.dataList>ul:last').height(0);--}}
                        {{--$(".dataList ul:gt(7)").remove();--}}
                        {{--obj.animate({--}}
                            {{--height: 60--}}
                        {{--}, 'slow');--}}
                    {{--}--}}
                {{--})--}}
            {{--</script>--}}
            {{--<div class="fuwu hui">--}}
                {{--<div class="w1200 pr">--}}
                    {{--<div class="stitle text-center f36 mb35">--}}
                        {{--最新申请装修服务--}}
                    {{--</div>--}}
                    {{--<div class="" style="height:512px;">--}}
                    {{--</div>--}}
                    {{--<div class="newList w1200 pa" style="top:90px;">--}}
                        {{--<div class="listBox f14 ff">--}}
                            {{--<ul class="titBar">--}}
                                {{--<li>--}}
                                    {{--姓名--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--所在小区--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--装修面积--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--申请时间--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<div class="dataList">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!--招标信息结束-->
            <!--免费量房+免费设计+免费报价--->
            <div class="ff huoke_box2">
                <div class="w1200">
                    <div class="text-center">
                        <span class="text-title f36">免费量房+免费设计+免费报价</span>
                    </div>
                    <script>
                        $(function(){
                            $(".huoke_box2 .qin .qin-list").mouseenter(function(){
                                $(".huoke_box2 .qin .qin-list").removeClass("on");
                                $(this).addClass("on");
                            })
                        })
                    </script>
                    <div class="qin" data-scroll-reveal="enter bottom move 20px over 0.5s after 0.3s">
                        <div class="qin-list on">
                            <div class="qin-left clearfix">
                                <div class="lazy pic fl">
                                    <img src="{{ st("home/template/default/mfty/mfty_2/images/huoke_liangfang1.jpg") }}" class="lazy_img auto" />
                                </div>
                                <div class="lazy pic fl">
                                    <img src="{{ st("home/template/default/mfty/mfty_2/images/huoke_liangfang2.jpg") }}" class="lazy_img auto" />
                                </div>
                                <div class="lazy pic fl">
                                    <img src="{{ st("home/template/default/mfty/mfty_2/images/huoke_liangfang3.jpg") }}" class="lazy_img auto" />
                                </div>
                            </div>
                            <div class="qin-title">
                                <div class="border">
                                    <span class="span1 f18">优秀设计师上门量房</span> <span class="span2 f12" style="top:45px;">免费量房获取精准户型尺寸</span>
                                </div>
                            </div>
                        </div>
                        <div class="qin-list">
                            <div class="qin-left clearfix">
                                <div class="lazy pic fl">
                                    <img src="{{ st("home/template/default/mfty/mfty_2/images/huoke_sheji1.jpg") }}" class="lazy_img auto" />
                                </div>
                                <div class="lazy pic fl">
                                    <img src="{{ st("home/template/default/mfty/mfty_2/images/huoke_sheji2.jpg") }}" class="lazy_img auto" />
                                </div>
                                <div class="lazy pic fl">
                                    <img src="{{ st("home/template/default/mfty/mfty_2/images/huoke_sheji3.jpg") }}" class="lazy_img auto" />
                                </div>
                            </div>
                            <div class="qin-title">
                                <div class="border">
                                    <span class="span1 f18">多份设计自由挑选</span> <span class="span2 f12">免费设计契合您的喜好</span>
                                </div>
                            </div>
                        </div>
                        <div class="qin-list">
                            <div class="qin-left clearfix">
                                <div class="lazy pic fl">
                                    <img src="{{ st("home/template/default/mfty/mfty_2/images/huoke_baojia1.jpg") }}" class="lazy_img auto" />
                                </div>
                                <div class="lazy pic fl">
                                    <img src="{{ st("home/template/default/mfty/mfty_2/images/huoke_baojia2.jpg") }}" class="lazy_img auto" />
                                </div>
                                <div class="lazy pic fl">
                                    <img src="{{ st("home/template/default/mfty/mfty_2/images/huoke_baojia3.jpg") }}" class="lazy_img auto" />
                                </div>
                            </div>
                            <div class="qin-title">
                                <div class="border">
                                    <span class="span1 f18">多种报价方案挤干水分</span> <span class="span2 f12">免费报价选择高性价比</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--免费量房+免费设计+免费报价结束--->
            <!--坐等专业设计师免费上门量房设计-->
            <div class="templet-box1 w1200">
                <div class="stitle text-center f36">
                    坐等专业设计师免费上门量房设计
                </div>
                <ul class="clearfix">
                    <li class="fl text-center">
                        <p class="icon pr">
                            <i class="iconfont icon-liangfang1233"></i>
                        </p>
                        <dl class="text-center">
                            <dt class="grey_4 f24">
                                专业设计师上门量房
                            </dt>
                            <dd class="grey_5">
                                准确量房才能做到合理设计、预算精确，<br />
                                设计师到现场量房，实地了解房屋内外结构和环境特点，<br />
                                便于下步进行合理的设计和做出准确的预算。
                            </dd>
                        </dl>
                    </li>
                    <li class="fl text-center">
                        <p class="icon pr">
                            <i class="iconfont icon-sheji11"></i>
                        </p>
                        <dl class="text-center">
                            <dt class="grey_4 f24">
                                选择适合的设计
                            </dt>
                            <dd class="grey_5">
                                通过上门服务及户型设计方案的比较，<br />
                                您可甄别设计师的专业能力和沟通能力，最终选择更适合<br />
                                自己的设计师，帮助自己实现完美舒适的新家梦。<br />
                            </dd>
                        </dl>
                    </li>
                    <li class="fl text-center">
                        <p class="icon pr">
                            <i class="iconfont icon-xiugai0427"></i>
                        </p>
                        <dl class="text-center">
                            <dt class="grey_4 f24">
                                设计方案免费修改
                            </dt>
                            <dd class="grey_5">
                                沟通不可避免的会存在不畅问题，设计方案可能<br />
                                未完全将自己的需求实现，或者临时自己突发新的装修灵感，<br />
                                全程都可以免费重复修改设计方案，直到满意为止。
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <!--坐等专业设计师免费上门量房设计结束-->
            <!--智能计算器来了-->
            <div class="huoke_jusuan">
                <div class="w1200 clearfix">
                    <div class="lazy pic fl jsq_img">
                        <img src="{{ st("home/template/default/mfty/mfty_2/images/jisuan_img.png") }}" class="lazy_img auto" />
                    </div>
                    <div class="jsq fl">
                        <span class="jsq01 f36">智能计算器来了</span><br />
                        <span class="jsq02 f24">快算算你家装修要多少钱吧~~</span>
                    </div>
                    <a href="calc.html" class="btn btn-red f18 fr">开始计算</a>
                </div>
            </div>
            <!--智能计算器来了结束-->
            <!--五个正方形-->
            <div class="huoke_box5">
                <div class="w1200">
                    <ul class="caseBaozheng text-center">
                        <li class="fl">
                            <i class="iconfont icon-zhibao_jing"></i>
                            <p>
                                多套装修方案<br />
                                自由选择
                            </p>
                        </li>
                        <li class="fl">
                            <i class="iconfont icon-zhibao_yan"></i>
                            <p>
                                公司拥有正规行业资质<br />
                                全部正规有保障
                            </p>
                        </li>
                        <li class="fl">
                            <i class="iconfont icon-zhibao_zhi"></i>
                            <p>
                                优质服务<br />
                                全程质量保障
                            </p>
                        </li>
                        <li class="fl">
                            <i class="iconfont icon-zhibao_jian"></i>
                            <p>
                                施工过程节点验收<br />
                                全面维护业主利益
                            </p>
                        </li>
                        <li class="fl last">
                            <i class="iconfont icon-zhibao_xin"></i>
                            <p>
                                诚信家装平台<br />
                                为您家负责到底
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!--五个正方形结束-->
        </div>
        <!---------------------------------------自定义结束-------------------------------------------->
@endsection