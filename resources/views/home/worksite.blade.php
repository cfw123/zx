@extends('home.layout.master')

@section('content')
    <link href="{{ st('home/template/default/gongdi/gongdi/css/erji_gongdi.css') }}" rel="stylesheet" type="text/css" />
    <a href="#" target="_blank">
        <div id="common_dd_pic" style="overflow:hidden;width:100%;height:200px;background:url({{ st('home/yun.lehome114.com/attached/cs_lehouwu/image/20180828/20180828173443_61795.jpg')}}) no-repeat center;margin-top: 67px;">
            <div class="ht5_zhezhao">
                <table>
                    <tr>
                        <td>在建工地</td>
                    </tr>
                </table>
            </div>
        </div>
    </a>
    <!-- 大图结束 -->
    <!-------顶部导航开始------>
    <div class="content ej_des_upNav" style="margin-top:10px;margin-bottom:0px;">
        <img src="{{ st('home/template/default/common/images/ej_home.gif')}}" />
        <a href="index.html">首页</a>
        <span>></span>
        <a href="gongdi.html">施工工地</a>
    </div>
    <!-------顶部导航结束------>
    <!--——搜索框开始-——-->
    <div class="ej_site_search" id="gm">
        <form class="ej_site_form" action="http://www.zhixian.com.cn/gongdi.php" method="post">
            <input type="text" name="sstr" value="" placeholder="找自家修案例，看真实在线工地">
            <input type="submit" value="">
            <div class="clear"></div>
        </form>
        <a class="boxy" href="mfty9839.html?mod=index&amp;id=1" title="提交装修需求">+提交装修需求</a>
        <div class="clear"></div>
        <p>温馨提示：实景工地因施工进度及在装业主要求，为保证其他业主方便查看工地，请提前两天预约，防止出现工地无法观看</p>
    </div>
    <!--——搜索框结束——-->
    <!--——索引导航开始——-->
    <div style="margin:20px auto" class="content">

        <div class="ej_site_area white">
	        <span class="">
	             风格
	        </span>
            <a href="gongdi-2.html#gm" title="上海全部装修工地" class="ej_site_current">
                全部
            </a>
            <a href="gongdi47d8.html?fid=198#gm" title="上海简美风格装修工地" >
                简美风格
            </a>
            <a href="gongdi41e2.html?fid=157#gm" title="上海现代轻奢装修工地" >
                现代轻奢
            </a>
            <a href="gongdi9a3e.html?fid=133#gm" title="上海北欧风格装修工地" >
                北欧风格
            </a>
            <a href="gongdi5a00.html?fid=152#gm" title="上海现代简约装修工地" >
                现代简约
            </a>
            <a href="gongdi6611.html?fid=156#gm" title="上海简约美式装修工地" >
                简约美式
            </a>
            <a href="gongdi88c0.html?fid=153#gm" title="上海新中式风格装修工地" >
                新中式风格
            </a>
            <a href="gongdi3c68.html?fid=192#gm" title="上海欧式风格装修工地" >
                欧式风格
            </a>
            <a href="gongdie14a.html?fid=191#gm" title="上海美式/美式田园装修工地" >
                美式/美式田园
            </a>
            <a href="gongdid671.html?fid=194#gm" title="上海日式风格装修工地" >
                日式风格
            </a>
            <a href="gongdi5703.html?fid=193#gm" title="上海混搭风格装修工地" >
                混搭风格
            </a>
            <div class="clear">
            </div>
        </div>
        <div class="ej_site_area white">
	        <span class="">
	             户型
	        </span>
            <a href="gongdi-2.html#gm" title="上海全部装修工地" class="ej_site_current">
                全部
            </a>
            <a href="gongdi0ccf.html?hid=160#gm" title="上海别墅装修工地" >
                别墅
            </a>
            <a href="gongdi2eb4.html?hid=159#gm" title="上海复式装修工地" >
                复式
            </a>
            <a href="gongdi1655.html?hid=158#gm" title="上海四居室装修工地" >
                四居室
            </a>
            <a href="gongdie7e8.html?hid=104#gm" title="上海三室两厅装修工地" >
                三室两厅
            </a>
            <a href="gongdi0f70.html?hid=137#gm" title="上海两室一厅装修工地" >
                两室一厅
            </a>
            <a href="gongdi9597.html?hid=196#gm" title="上海一室一厅装修工地" >
                一室一厅
            </a>
            <div class="clear">
            </div>
        </div>
        <div class="ej_site_area white">
	        <span class="">
	             进度
	        </span>
            <a href="gongdi-2.html#gm" title="上海全部装修工地" class="ej_site_current">
                全部
            </a>
            <a href="gongdi8b00.html?jid=123#gm" title="上海前期装修工地" >
                前期
            </a>
            <a href="gongdide4e.html?jid=124#gm" title="上海设计阶段装修工地" >
                设计阶段
            </a>
            <a href="gongdi7e99.html?jid=126#gm" title="上海墙体改造装修工地" >
                墙体改造
            </a>
            <a href="gongdieb79.html?jid=95#gm" title="上海水电阶段装修工地" >
                水电阶段
            </a>
            <a href="gongdibcc8.html?jid=127#gm" title="上海泥瓦工阶段装修工地" >
                泥瓦工阶段
            </a>
            <a href="gongdieed2.html?jid=93#gm" title="上海木工阶段装修工地" >
                木工阶段
            </a>
            <a href="gongdi38e3.html?jid=111#gm" title="上海油漆工阶段装修工地" >
                油漆工阶段
            </a>
            <a href="gongdif435.html?jid=128#gm" title="上海安装阶段装修工地" >
                安装阶段
            </a>
            <a href="gongdibc23.html?jid=129#gm" title="上海验收阶段装修工地" >
                验收阶段
            </a>
            <div class="clear">
            </div>
        </div>
        <div class="ej_site_area white">
	        <span class="">
	             区域
	        </span>
            <a href="gongdi-2.html#gm" title="上海全部装修工地" class="ej_site_current">
                全部
            </a>
            <a href="gongdi3bdd.html?qid=200#gm" title="上海上海装修工地" >
                上海
            </a>
            <div class="clear">
            </div>
        </div>

    </div>
    <!--——索引导航结束——-->
    <!--——内容部分开始——-->
    <div class="ej_site_ct white">
        <ul class="ej_site_ul">

            <li>
                <div class="ej_siteLileft">
                    <a href="gongdif582.html?mod=detail&amp;id=37" title="点击查看工地详情">
                        <img src="{{ st('home/editor/attached/lehome_thumb/20200507112138_44205.jpg')}}" width="275" height="210" alt="普陀·阳光威尼斯">
                    </a>
                </div>




                <div class="ej_siteLiright">
                    <h4>
                        普陀·阳光威尼斯
                    </h4>
                    <h5>
                        <a href="engineer7bd8.html?mod=detail&amp;id=18" target="_blank" title="上海装修工长王怀喜">
                            <img src="{{ st('home/editor/attached/lehome_thumb/20200423153142_18489.jpg')}}" alt="上海装修工长王怀喜" title="上海装修工长王怀喜" style="border-radius:50%;" width="165" height="165"/>
                        </a>
                        <span class="ej_gongdi_zl">
	                                                     施工工长：
                            <t>
                        	<a href="engineer7bd8.html?mod=detail&amp;id=18" title="上海装修工长王怀喜" target="_blank">王怀喜</a>
                            </t>
                            <br>

	                                                    设计师：
                            <t>
                            <a href="designerb9c0.html?mod=detail&amp;id=51" title="上海装修设计师沈慧贤" target="_blank">
                            沈慧贤
                            </a>
                            </t>
                            <br>

	                         	                                                    风格：
                            <t>
                                日式风格
                            </t>
                            <br>
	                        	                        面积：
                            <t>
                                87㎡
                            </t>
                            <br>
	                                                     区域：
                            <t>
                                上海
                            </t>
                            <br>

                            小区地址：
                            <t>
                                靖边路
                            </t>
                        </span>
                        <div class="clear">
                        </div>
                    </h5>
                </div>
                <div class="ej_siteButton">
                    <a class="ej_siteButton2" target="_blank" href="gongdif582.html?mod=detail&amp;id=37" title="上海装修工地普陀·阳光威尼斯">
                        查看工地详情
                    </a>
                </div>
                <div class="clear">
                </div>
                <div class="ej_siteJindu">

                    <a                      href="gongdif582.html?mod=detail&amp;id=37" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        前期
                    </a>

                    <a                      href="gongdif582.html?mod=detail&amp;id=37" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        设计阶段
                    </a>

                    <a                      href="gongdif582.html?mod=detail&amp;id=37" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        墙体改造
                    </a>

                    <a                      href="gongdif582.html?mod=detail&amp;id=37" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        水电阶段
                    </a>

                    <a                      href="gongdif582.html?mod=detail&amp;id=37" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        泥瓦工阶段
                    </a>

                    <a                      href="gongdif582.html?mod=detail&amp;id=37" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        木工阶段
                    </a>

                    <a                      href="gongdif582.html?mod=detail&amp;id=37" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        油漆工阶段
                    </a>

                    <a                      href="gongdif582.html?mod=detail&amp;id=37" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        安装阶段
                    </a>

                    <a                      href="gongdif582.html?mod=detail&amp;id=37" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        验收阶段
                    </a>

                    <div class="clear">
                    </div>
                </div>
            </li>
            <li>
                <div class="ej_siteLileft">
                    <a href="gongdi8639.html?mod=detail&amp;id=28" title="点击查看工地详情">
                        <img src="{{ st('home/editor/attached/lehome_thumb/20200429143543_87849.jpg')}}" width="275" height="210" alt="浦东·碧云新天地">
                    </a>
                </div>




                <div class="ej_siteLiright">
                    <h4>
                        浦东·碧云新天地
                    </h4>
                    <h5>
                        <a href="engineer6f5c.html?mod=detail&amp;id=11" target="_blank" title="上海装修工长秦荣">
                            <img src="{{ st('home/editor/attached/lehome_thumb/20200422144433_36394.jpg')}}" alt="上海装修工长秦荣" title="上海装修工长秦荣" style="border-radius:50%;" width="165" height="165"/>
                        </a>
                        <span class="ej_gongdi_zl">
	                                                     施工工长：
                            <t>
                        	<a href="engineer6f5c.html?mod=detail&amp;id=11" title="上海装修工长秦荣" target="_blank">秦荣</a>
                            </t>
                            <br>

	                                                    设计师：
                            <t>
                            <a href="designer6d6e.html?mod=detail&amp;id=35" title="上海装修设计师王剑鸣" target="_blank">
                            王剑鸣
                            </a>
                            </t>
                            <br>

	                         	                                                    风格：
                            <t>
                                简美风格
                            </t>
                            <br>
	                        	                        面积：
                            <t>
                                105㎡
                            </t>
                            <br>
	                                                     区域：
                            <t>
                                上海
                            </t>
                            <br>

                            小区地址：
                            <t>
                                浦东新区长岛路1066弄
                            </t>
                        </span>
                        <div class="clear">
                        </div>
                    </h5>
                </div>
                <div class="ej_siteButton">
                    <a class="ej_siteButton2" target="_blank" href="gongdi8639.html?mod=detail&amp;id=28" title="上海装修工地浦东·碧云新天地">
                        查看工地详情
                    </a>
                </div>
                <div class="clear">
                </div>
                <div class="ej_siteJindu">

                    <a                      href="gongdi8639.html?mod=detail&amp;id=28" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        前期
                    </a>

                    <a                      href="gongdi8639.html?mod=detail&amp;id=28" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        设计阶段
                    </a>

                    <a                      href="gongdi8639.html?mod=detail&amp;id=28" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        墙体改造
                    </a>

                    <a                      href="gongdi8639.html?mod=detail&amp;id=28" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        水电阶段
                    </a>

                    <a                      href="gongdi8639.html?mod=detail&amp;id=28" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        泥瓦工阶段
                    </a>

                    <a                      href="gongdi8639.html?mod=detail&amp;id=28" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        木工阶段
                    </a>

                    <a                      href="gongdi8639.html?mod=detail&amp;id=28" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        油漆工阶段
                    </a>

                    <a                      href="gongdi8639.html?mod=detail&amp;id=28" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        安装阶段
                    </a>

                    <a                      href="gongdi8639.html?mod=detail&amp;id=28" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        验收阶段
                    </a>

                    <div class="clear">
                    </div>
                </div>
            </li>
            <li>
                <div class="ej_siteLileft">
                    <a href="gongdi58f7.html?mod=detail&amp;id=8" title="点击查看工地详情">
                        <img src="{{ st('home/editor/attached/lehome_thumb/20200529100337_47551.jpg')}}" width="275" height="210" alt="嘉定·嘉宝梦之星">
                    </a>
                </div>




                <div class="ej_siteLiright">
                    <h4>
                        嘉定·嘉宝梦之星
                    </h4>
                    <h5>
                        <a href="engineerc9b9.html?mod=detail&amp;id=9" target="_blank" title="上海装修工长蔡永红">
                            <img src="{{ st('home/editor/attached/lehome_thumb/20200422130602_81916.jpg')}}" alt="上海装修工长蔡永红" title="上海装修工长蔡永红" style="border-radius:50%;" width="165" height="165"/>
                        </a>
                        <span class="ej_gongdi_zl">
	                                                     施工工长：
                            <t>
                        	<a href="engineerc9b9.html?mod=detail&amp;id=9" title="上海装修工长蔡永红" target="_blank">蔡永红</a>
                            </t>
                            <br>

	                                                    设计师：
                            <t>
                            <a href="designer0f5b.html?mod=detail&amp;id=38" title="上海装修设计师吴永" target="_blank">
                            吴永
                            </a>
                            </t>
                            <br>

	                         	                                                    风格：
                            <t>
                                现代简约
                            </t>
                            <br>
	                        	                        面积：
                            <t>
                                88㎡
                            </t>
                            <br>
	                                                     区域：
                            <t>
                                上海
                            </t>
                            <br>

                            小区地址：
                            <t>
                                嘉定区城固路与崇信路交叉口
                            </t>
                        </span>
                        <div class="clear">
                        </div>
                    </h5>
                </div>
                <div class="ej_siteButton">
                    <a class="ej_siteButton2" target="_blank" href="gongdi58f7.html?mod=detail&amp;id=8" title="上海装修工地嘉定·嘉宝梦之星">
                        查看工地详情
                    </a>
                </div>
                <div class="clear">
                </div>
                <div class="ej_siteJindu">

                    <a                      href="gongdi58f7.html?mod=detail&amp;id=8" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        前期
                    </a>

                    <a                      href="gongdi58f7.html?mod=detail&amp;id=8" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        设计阶段
                    </a>

                    <a                      href="gongdi58f7.html?mod=detail&amp;id=8" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        墙体改造
                    </a>

                    <a                      href="gongdi58f7.html?mod=detail&amp;id=8" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        水电阶段
                    </a>

                    <a                      href="gongdi58f7.html?mod=detail&amp;id=8" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        泥瓦工阶段
                    </a>

                    <a                      href="gongdi58f7.html?mod=detail&amp;id=8" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        木工阶段
                    </a>

                    <a                      href="gongdi58f7.html?mod=detail&amp;id=8" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        油漆工阶段
                    </a>

                    <a                      href="gongdi58f7.html?mod=detail&amp;id=8" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        安装阶段
                    </a>

                    <a                      href="gongdi58f7.html?mod=detail&amp;id=8" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        验收阶段
                    </a>

                    <div class="clear">
                    </div>
                </div>
            </li>
            <li>
                <div class="ej_siteLileft">
                    <a href="gongdib24c.html?mod=detail&amp;id=46" title="点击查看工地详情">
                        <img src="{{ st('home/editor/attached/lehome_thumb/20201231095433_19906.jpg')}}" width="275" height="210" alt="嘉定·日月光伯爵湾">
                    </a>
                </div>




                <div class="ej_siteLiright">
                    <h4>
                        嘉定·日月光伯爵湾
                    </h4>
                    <h5>
                        <a href="engineerd635.html?mod=detail&amp;id=17" target="_blank" title="上海装修工长陶中山">
                            <img src="{{ st('home/editor/attached/lehome_thumb/20200423153044_46691.jpg')}}" alt="上海装修工长陶中山" title="上海装修工长陶中山" style="border-radius:50%;" width="165" height="165"/>
                        </a>
                        <span class="ej_gongdi_zl">
	                                                     施工工长：
                            <t>
                        	<a href="engineerd635.html?mod=detail&amp;id=17" title="上海装修工长陶中山" target="_blank">陶中山</a>
                            </t>
                            <br>

	                                                    设计师：
                            <t>
                            <a href="designer7bd8.html?mod=detail&amp;id=18" title="上海装修设计师祁丹" target="_blank">
                            祁丹
                            </a>
                            </t>
                            <br>

	                         	                                                    风格：
                            <t>
                                简约美式
                            </t>
                            <br>
	                        	                        面积：
                            <t>
                                91
                            </t>
                            <br>
	                                                     区域：
                            <t>
                                上海
                            </t>
                            <br>

                            小区地址：
                            <t>
                                博园路8090弄
                            </t>
                        </span>
                        <div class="clear">
                        </div>
                    </h5>
                </div>
                <div class="ej_siteButton">
                    <a class="ej_siteButton2" target="_blank" href="gongdib24c.html?mod=detail&amp;id=46" title="上海装修工地嘉定·日月光伯爵湾">
                        查看工地详情
                    </a>
                </div>
                <div class="clear">
                </div>
                <div class="ej_siteJindu">

                    <a                      href="gongdib24c.html?mod=detail&amp;id=46" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        前期
                    </a>

                    <a                      href="gongdib24c.html?mod=detail&amp;id=46" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        设计阶段
                    </a>

                    <a                      href="gongdib24c.html?mod=detail&amp;id=46" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        墙体改造
                    </a>

                    <a                      href="gongdib24c.html?mod=detail&amp;id=46" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        水电阶段
                    </a>

                    <a                      href="gongdib24c.html?mod=detail&amp;id=46" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        泥瓦工阶段
                    </a>

                    <a                      href="gongdib24c.html?mod=detail&amp;id=46" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        木工阶段
                    </a>

                    <a                      href="gongdib24c.html?mod=detail&amp;id=46" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        油漆工阶段
                    </a>

                    <a                      href="gongdib24c.html?mod=detail&amp;id=46" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        安装阶段
                    </a>

                    <a                      href="gongdib24c.html?mod=detail&amp;id=46" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        验收阶段
                    </a>

                    <div class="clear">
                    </div>
                </div>
            </li>
            <li>
                <div class="ej_siteLileft">
                    <a href="gongdi1fad.html?mod=detail&amp;id=7" title="点击查看工地详情">
                        <img src="{{ st('home/editor/attached/lehome_thumb/20200429150403_87456.jpg')}}" width="275" height="210" alt="闵行·卓越维港">
                    </a>
                </div>




                <div class="ej_siteLiright">
                    <h4>
                        闵行·卓越维港
                    </h4>
                    <h5>
                        <a href="engineer3be7.html?mod=detail&amp;id=12" target="_blank" title="上海装修工长田爱华">
                            <img src="{{ st('home/editor/attached/lehome_thumb/20200422132758_73767.jpg')}}" alt="上海装修工长田爱华" title="上海装修工长田爱华" style="border-radius:50%;" width="165" height="165"/>
                        </a>
                        <span class="ej_gongdi_zl">
	                                                     施工工长：
                            <t>
                        	<a href="engineer3be7.html?mod=detail&amp;id=12" title="上海装修工长田爱华" target="_blank">田爱华</a>
                            </t>
                            <br>

	                                                    设计师：
                            <t>
                            <a href="designer09de.html?mod=detail&amp;id=33" title="上海装修设计师周议" target="_blank">
                            周议
                            </a>
                            </t>
                            <br>

	                         	                                                    风格：
                            <t>
                                北欧风格
                            </t>
                            <br>
	                        	                        面积：
                            <t>
                                190㎡
                            </t>
                            <br>
	                                                     区域：
                            <t>
                                上海
                            </t>
                            <br>

                            小区地址：
                            <t>
                                闵行区马桥镇富岩路
                            </t>
                        </span>
                        <div class="clear">
                        </div>
                    </h5>
                </div>
                <div class="ej_siteButton">
                    <a class="ej_siteButton2" target="_blank" href="gongdi1fad.html?mod=detail&amp;id=7" title="上海装修工地闵行·卓越维港">
                        查看工地详情
                    </a>
                </div>
                <div class="clear">
                </div>
                <div class="ej_siteJindu">

                    <a                      href="gongdi1fad.html?mod=detail&amp;id=7" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        前期
                    </a>

                    <a                      href="gongdi1fad.html?mod=detail&amp;id=7" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        设计阶段
                    </a>

                    <a                      href="gongdi1fad.html?mod=detail&amp;id=7" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        墙体改造
                    </a>

                    <a                      href="gongdi1fad.html?mod=detail&amp;id=7" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        水电阶段
                    </a>

                    <a                      href="gongdi1fad.html?mod=detail&amp;id=7" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        泥瓦工阶段
                    </a>

                    <a                      href="gongdi1fad.html?mod=detail&amp;id=7" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        木工阶段
                    </a>

                    <a                      href="gongdi1fad.html?mod=detail&amp;id=7" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        油漆工阶段
                    </a>

                    <a                      href="gongdi1fad.html?mod=detail&amp;id=7" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        安装阶段
                    </a>

                    <a                      href="gongdi1fad.html?mod=detail&amp;id=7" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        验收阶段
                    </a>

                    <div class="clear">
                    </div>
                </div>
            </li>
            <li>
                <div class="ej_siteLileft">
                    <a href="gongdib218.html?mod=detail&amp;id=36" title="点击查看工地详情">
                        <img src="{{ st('home/editor/attached/lehome_thumb/20200507110747_27498.jpg')}}" width="275" height="210" alt="宝山·宝宸怡景园">
                    </a>
                </div>




                <div class="ej_siteLiright">
                    <h4>
                        宝山·宝宸怡景园
                    </h4>
                    <h5>
                        <a href="engineer89bd.html?mod=detail&amp;id=19" target="_blank" title="上海装修工长张友林">
                            <img src="{{ st('home/editor/attached/lehome_thumb/20200423153232_59180.jpg')}}" alt="上海装修工长张友林" title="上海装修工长张友林" style="border-radius:50%;" width="165" height="165"/>
                        </a>
                        <span class="ej_gongdi_zl">
	                                                     施工工长：
                            <t>
                        	<a href="engineer89bd.html?mod=detail&amp;id=19" title="上海装修工长张友林" target="_blank">张友林</a>
                            </t>
                            <br>

	                                                    设计师：
                            <t>
                            <a href="designer1248.html?mod=detail&amp;id=74" title="上海装修设计师李梦然" target="_blank">
                            李梦然
                            </a>
                            </t>
                            <br>

	                         	                                                    风格：
                            <t>
                                简美风格
                            </t>
                            <br>
	                        	                        面积：
                            <t>
                                134㎡
                            </t>
                            <br>
	                                                     区域：
                            <t>
                                上海
                            </t>
                            <br>

                            小区地址：
                            <t>
                                三泉路
                            </t>
                        </span>
                        <div class="clear">
                        </div>
                    </h5>
                </div>
                <div class="ej_siteButton">
                    <a class="ej_siteButton2" target="_blank" href="gongdib218.html?mod=detail&amp;id=36" title="上海装修工地宝山·宝宸怡景园">
                        查看工地详情
                    </a>
                </div>
                <div class="clear">
                </div>
                <div class="ej_siteJindu">

                    <a                      href="gongdib218.html?mod=detail&amp;id=36" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        前期
                    </a>

                    <a                      href="gongdib218.html?mod=detail&amp;id=36" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        设计阶段
                    </a>

                    <a                      href="gongdib218.html?mod=detail&amp;id=36" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        墙体改造
                    </a>

                    <a                      href="gongdib218.html?mod=detail&amp;id=36" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        水电阶段
                    </a>

                    <a                      href="gongdib218.html?mod=detail&amp;id=36" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        泥瓦工阶段
                    </a>

                    <a                      href="gongdib218.html?mod=detail&amp;id=36" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        木工阶段
                    </a>

                    <a                      href="gongdib218.html?mod=detail&amp;id=36" t`arget="_blank"
                                            class="ej_site_jindu ej_site_jindu2">
                        <i class="ej_site_i ej_site_i2">
                        </i>
                        油漆工阶段
                    </a>

                    <a                      href="gongdib218.html?mod=detail&amp;id=36" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        安装阶段
                    </a>

                    <a                      href="gongdib218.html?mod=detail&amp;id=36" t`arget="_blank"
                                            class="ej_site_jindu ">
                        <i class="ej_site_i ">
                        </i>
                        验收阶段
                    </a>

                    <div class="clear">
                    </div>
                </div>
            </li>

            <div class="clear"></div>
            <style>
                /*翻页*/
                .pages{line-height:26px; text-align:center;  margin:15px 0; clear:both;word-wrap: break-word;word-break: break-all;}
                .pages a, .pages a:visited{ display:inline-block; padding:0 8px; text-decoration:none!important; background-color:#f0f0f0; border:1px solid #DDD; color:#888; margin:2px; -moz-border-radius: 4px; border-radius: 4px;}
                .pages a:hover{background-color: #ed182a!important;color: #fff !important;}

                .pages a.link{color:#555!important;}
                .pages a.link:hover{background-color: #ed182a!important;color: #fff !important;}
                .pageNo{ display:inline-block; padding:0 8px; text-decoration:none!important; background-color:#f0f0f0; border:1px solid #DDD;  -moz-border-radius: 4px; border-radius: 4px; color:#888; margin:0 2px;}
                .pages .nowpage,.pages .nowpage:hover{background-color: #ed182a!important;color: #fff!important;}
            </style>
            <div class="pages">

                <a title="首页" href="gongdi2679.html?page=1">首页</a>
                <a title="上一页" href="gongdi2679.html?page=1">上一页</a>
                <a title="1" href="gongdi2679.html?page=1" class="nowpage">1</a>
                <a title="2" href="gongdi4658.html?page=2" >2</a>
                <a title="3" href="gongdi9ba9.html?page=3" >3</a>
                <a title="4" href="gongdifdb0.html?page=4" >4</a>
                <a title="下一页" href="gongdi4658.html?page=2">下一页</a>
                <a title="尾页" href="gongdifdb0.html?page=4">尾页</a>

                <a class="pageNo">共(1/4)页</a>

            </div>

        </ul>
    </div>
    <!--——内容部分结束——-->
@endsection