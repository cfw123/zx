
@extends('home.layout.master')

@section('content')

    <style>
        .slide_bgimg{}
        .slide_sbgimg{}
    </style>
    <link href="{{ st('home/template/default/index/style/gongzhaung/css/slide.css') }}" rel="stylesheet" type="text/css" />
    <!-----分类样式11开始------->
    <div class="wrap">
    </div>
    <!--bannar 大图-->
    <div class="bannar">
        <div class="bannar_swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a  href="#" target="_blank" ><img src="{{ st('home/editor/attached/image/20210114/20210114170850_59685.jpg')}}" alt="定制精装"></a></div>
                <div class="swiper-slide"><a  href="#" target="_blank" ><img src="{{ st('home/editor/attached/image/20210118/20210118102034_83872.jpg')}}" alt="诚信品牌"></a></div>
                <div class="swiper-slide"><a  href="index.html" target="_blank" ><img src="{{ st('home/editor/attached/image/20191220/20191220102115_66958.jpg')}}" alt="品质整装"></a></div>
                <div class="swiper-slide"><a  href="zt03bb.html?mod=index&amp;id=44" target="_blank" ><img src="{{ st('home/editor/attached/image/20210120/20210120121523_13716.jpg')}}" alt="知贤艾宅整装"></a></div>
                <div class="swiper-slide"><a  href="#" target="_blank" ><img src="{{ st('home/editor/attached/image/20210510/20210510093709_39349.jpg')}}" alt="金五星工程"></a></div>
            </div>
            <div class="bannar_swiper_btn"></div>
            <div class="swiper-button-prev jiantou_prev jiantou">
                <img src="{{ st('home/template/default/index/style/gongzhaung/images/slide/bannar_left.png') }}" alt="前一页">
            </div>
            <div class="swiper-button-next jiantou_next jiantou">
                <img src="{{ st('home/template/default/index/style/gongzhaung/images/slide/bannar_right.png') }}" alt="后一页">
            </div>
        </div>
    </div>
    <script>
        var mySwiper = new Swiper('.bannar_swiper', {
            pagination: '.bannar_swiper_btn',
            autoplay: 5000,
            paginationClickable:true,
            speed:1000,
            loop : true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
        })
    </script>
    <!--bannar 大图end-->
    <div class="diy_box">
        <style>
            .liuxiangbaozhang .w {
                width: 100%;
            }
            .liuxiangbaozhang .fl {
                float: left;
                display: inline;
            }
            .wrp {
                width: 1200px;
                margin: 0 auto;
                background: #FFF;
            }
            .liuxiangbaozhang .mod_ind_advantage{ border-bottom:1px solid #DDD; padding:40px 0}
            .liuxiangbaozhang .mod_ind_advantage .sub{ margin:40px 0; font-family:"微软雅黑"}
            .liuxiangbaozhang .mod_ind_advantage .sub h2{ width:100%; text-align:center; float:left}
            .liuxiangbaozhang .mod_ind_advantage .sub h2 a{ font-size:26px}
            .liuxiangbaozhang .mod_ind_advantage .sub p{ width:100%; text-align:center; float:left; font-size:14px; color:#999; margin-top:10px}
            .liuxiangbaozhang .mod_ind_advantage .list li{ width:200px; float:left; text-align:center}
            .liuxiangbaozhang .mod_ind_advantage .list li i{ text-align:center;width:68px; height:68px; background:#3F4A55; float:left; line-height:68px; color:#FFF; font-size:36px; border-radius:68px; margin-left:66px; display:inline;
                -webkit-transition: -webkit-transform 0.3s ease-out;
                -moz-transition: -moz-transform 0.3s ease-out;
                -o-transition: -o-transform 0.3s ease-out;
                -ms-transition: -ms-transform 0.3s ease-out;}
            .liuxiangbaozhang .mod_ind_advantage .list li:hover i{
                -webkit-transform: rotateZ(360deg);
                -moz-transform: rotateZ(360deg);
                -o-transform: rotateZ(360deg);
                -ms-transform: rotateZ(360deg);
                transform: rotateZ(360deg);
            }
            .liuxiangbaozhang .mod_ind_advantage .list li h3{font-weight: normal;font-style:normal; width:100%; float:left; text-align:center; font-size:18px; font-family:"微软雅黑"; margin:15px 0}
            .liuxiangbaozhang .mod_ind_advantage .list li p{ width:140px; padding:0 30px; float:left; font-family:"微软雅黑"; font-size:12px; color:#666; line-height:160%}
            .liuxiangbaozhang .mod_ind_advantage .list li i img{
                width: 42px;
                height: 42px;
                margin-top:13px;
            }
        </style>
        <div class="liuxiangbaozhang">
            <div class="mod_ind_advantage w fl">
                <div class="wrp">
                    <ul class="list w fl">
                        <li>
                            <i><a href="news.php/mod-index-id-1.html" target="_blank"><u></u><img src="{{ st('home/kehu.lehouwu.cn/zt/liuxiangbaozhang/pingpai.png')}}" alt="上海家庭装潢品牌实力" /></a></i>
                            <h3>
                                <a href="news.php/mod-index-id-1.html" target="_blank">品牌实力</a>
                            </h3>
                            <p>
                                <a href="news.php/mod-index-id-1.html" target="_blank"><span style="color:#337FE5;">2003年成立，上海装修公司</span><span style="color:#337FE5;">装修二级资质，累计服务21850位业主</span></a><span style="color:#337FE5;"></span>
                            </p>
                        </li>
                        <li>
                            <a href="designer.html" target="_blank"> </a><i><a href="designer.html" target="_blank"><img src="{{ st('home/kehu.lehouwu.cn/zt/liuxiangbaozhang/sheji.png')}}" alt="上海装饰装修设计团队" /></a></i><a href="designer.html" target="_blank"> </a>
                            <h3>
                                <a href="designer.html" target="_blank">设计团队</a>
                            </h3>
                            <p>
                                <span style="color:#337FE5;"><a href="designer.html" target="_blank">“1+3”装修设计团队, 为每一位客户打造专属定制家装设计装生活空间</a></span>
                            </p>
                        </li>
                        <li>
                            <a href="cases.html" target="_blank"> </a><i><a href="case.html" target="_blank"></a><a href="cases.html" target="_blank"><img src="{{ st('home/kehu.lehouwu.cn/zt/liuxiangbaozhang/anli.png')}}" alt="上海家装修公司案例集锦" /></a></i><a href="case.html" target="_blank"> </a>
                            <h3>
                                <a href="cases.html" target="_blank">案例集锦</a>
                            </h3>
                            <p>
                                <a href="cases.html" target="_blank"><span style="color:#337FE5;">3000+经典案例，量身定制整体家装家庭装修，</span><span style="color:#337FE5;">知贤装饰打造独一无二</span></a><span style="color:#337FE5;">的个性空间</span>
                            </p>
                        </li>
                        <li>
                            <a href="gongdi.html" target="_blank"> <i><img src="{{ st('home/kehu.lehouwu.cn/zt/liuxiangbaozhang/gongcheng.png')}}" alt="上海装修设计公司精益工程" /></i>
                                <h3>
                                    精益工程
                                </h3>
                                <p>
                                    <span style="color:#337FE5;">精益工程4.0国际施工标准捍卫家装设计品质,上海装饰设计公司，严设计,严施工</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="zta537.html?mod=index&amp;id=40" "="" target="_blank"> <i><img src="{{ st('home/kehu.lehouwu.cn/zt/liuxiangbaozhang/tianyan.png')}}" alt="装修装潢公司天眼管家" /></i>
                            <h3>
                                天眼管家
                            </h3>
                            <p>
                                <span style="color:#337FE5;">品质装修，”天眼”护航;第三方监控,为客户把装修装潢整个项目过程</span>
                            </p>
                            </a>
                        </li>
                        <li>
                            <a href="designer.html" target="_blank"> </a><i><a href="about.html" target="_blank"></a><a href="zxbx.html" target="_blank"><img src="{{ st('home/kehu.lehouwu.cn/zt/liuxiangbaozhang/fuwu.png')}}" alt="室内装修装饰服务保障" /></a></i><a href="about.html" target="_blank"> </a>
                            <h3>
                                <a href="zxbx.html" target="_blank">服务保障</a>
                            </h3>
                            <p>
                                <a href="zxbx.html" target="_blank"><span style="color:#337FE5;">隐蔽工程20年质保，终身售后；一线环保主材,2</span><span style="color:#337FE5;">4小时热线售后及时</span></a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="clear:both;">
            </div>
        </div>
    </div>
    <div class="diy_box">
        <style>
            .floor-01-pic img{width:100%;}
            .dm-floor-01 { margin-top: 50px; }
            .dm-floor-01 .floor-01-content { width: 100%; height: 770px; background: url(home/kehu.lehouwu.cn/zt/20181211_1/floor-01-bg.html) top center no-repeat; position: relative; }
            .dm-floor-01 .dm-wrapper { width: 1400px; margin: auto; }
            .dm-floor-01 p { margin: 0px; }
            .dm-floor-01 .dm-common-title { text-align: center; }
            .dm-floor-01 .dm-common-title a { text-decoration: none; color: #323232; font-size: 0px; display: inline-block; }
            .dm-floor-01 .dm-common-title p { font-size: 32px; }
            .dm-floor-01 .dm-common-title p:before { content: ""; width: 50px; height: 1px; background: #6b9d9b; display: inline-block; vertical-align: middle;margin-right: 25px; }
            .dm-floor-01 .dm-common-title p:after { content: ""; width: 50px; height: 1px; background: #6b9d9b; display: inline-block; vertical-align: middle; margin-left: 25px; }
            .dm-floor-01 .dm-common-title span { color: #999; display: block; margin-top: 5px; font-size: 14px; }
            .dm-floor-01 .floor-01-tab { font-size: 0px; text-align: center; margin-top: 75px; }
            .dm-floor-01 .floor-01-tab p { width: 200px; height: 50px; line-height: 50px; text-align: center; display: inline-block; vertical-align: top; font-size: 19px; border: 1px solid #6b9d9b; color: #6b9d9b; background: #fff;  transition: all 0.5s ease; margin-top: -25px; cursor: pointer; }
            .dm-floor-01 .floor-01-tab p.cur { color: #fff; background: #6b9d9b; box-shadow: 0 15px 32px rgba(115,155,155,0.5); }
            .dm-floor-01 .floor-01-content em { font-style: normal; }
            .dm-floor-01 .swiper-container {
                margin-left: auto;
                margin-right: auto;
                position: relative;
                overflow: hidden;
                z-index: 1;
            }
            .dm-floor-01 .swiper-container-android .swiper-slide, .dm-floor-01 .swiper-wrapper {
                -webkit-transform: translate3d(0,0,0);
                -moz-transform: translate3d(0,0,0);
                -o-transform: translate(0,0);
                -ms-transform: translate3d(0,0,0);
                transform: translate3d(0,0,0);
            }
            .dm-floor-01 .swiper-wrapper {
                position: relative;
                width: 100%;
                height: 100%;
                z-index: 1;
                display: -webkit-box;
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-transition-property: -webkit-transform;
                -moz-transition-property: -moz-transform;
                -o-transition-property: -o-transform;
                -ms-transition-property: -ms-transform;
                transition-property: transform;
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
            }
            .dm-floor-01 .swiper-slide {
                -webkit-flex-shrink: 0;
                -ms-flex: 0 0 auto;
                flex-shrink: 0;
                width: 100%;
                height: 100%;
                position: relative;
            }
            .dm-floor-01 .swiper-pagination {
                position: absolute;
                text-align: center;
                -webkit-transition: .3s;
                -moz-transition: .3s;
                -o-transition: .3s;
                transition: .3s;
                -webkit-transform: translate3d(0,0,0);
                -ms-transform: translate3d(0,0,0);
                -o-transform: translate3d(0,0,0);
                transform: translate3d(0,0,0);
                z-index: 10;
            }
            .dm-floor-01 .swiper-pagination-clickable .swiper-pagination-bullet {
                cursor: pointer;
            }
            .dm-floor-01 .swiper-pagination-bullet {
                width: 8px;
                height: 8px;
                display: inline-block;
                border-radius: 100%;
                background: #000;
                opacity: .2;
            }
            .dm-floor-01 .swiper-button-next, .dm-floor-01 .swiper-button-prev {
                position: absolute;
                top: 50%;
                width: 27px;
                height: 44px;
                margin-top: -22px;
                z-index: 10;
                cursor: pointer;
                -moz-background-size: 27px 44px;
                -webkit-background-size: 27px 44px;
                background-size: 27px 44px;
                background-position: center;
                background-repeat: no-repeat;
            }
            .dm-floor-01 .swiper-button-next, .dm-floor-01 .swiper-container-rtl .swiper-button-prev {
                right: 10px;
                left: auto;
            }
            .dm-floor-01 .swiper-button-prev, .dm-floor-01 .swiper-container-rtl .swiper-button-next {
                left: 10px;
                right: auto;
            }
            .dm-floor-01 .floor-01-content .floor-01-tabitem .floor-01-infor { height: 389px; padding: 65px 50px 39px; position: absolute; top: 0px; bottom: 0px; left: 75px; margin: auto; text-align: center; background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/dm-gbg.png')}}) repeat; z-index: 1; }
            .dm-floor-01 .floor-01-content .floor-01-tabitem .swiper-slide-prev,.dm-floor-01 .floor-01-content .floor-01-tabitem .swiper-slide-next { opacity: 0.25; }
            .dm-floor-01 .floor-01-content a { color: #fff; text-decoration: none; }
            .dm-floor-01 .floor-01-content .floor-01-tabitem .floor-01-infor p { margin: 50px 0; font-size: 19px; line-height: 1.9; }
            .dm-floor-01 .floor-01-content .floor-01-tabitem .floor-01-infor .floor-01-price { color: #fff; font-size: 25px; }
            .dm-floor-01 .floor-01-content .floor-01-tabitem .floor-01-infor .floor-01-price b { font-size: 32px; font-weight: bold; }
            .dm-floor-01 .floor-01-content .floor-01-tabitem .floor-01-infor .floor-01-price em { margin-right: 10px; }
            .dm-floor-01 .floor-01-content .floor-01-tabitem .floor-01-infor .floor-01-price span { margin-left: 5px; font-size: 16px; }
            .dm-floor-01 .floor-01-content .floor-01-tabitem .floor-01-infor i { width: 230px; height: 50px; line-height: 50px; color: #6b9d9b; background: #fff; display: block; font-size: 19px; margin: 25px auto 0; font-style: normal; }
            .dm-floor-01 .floor-01-content .floor-01-tablist { margin-top: 50px; }
            .dm-floor-01 .floor-01-content .floor-01-tablist .floor-01-tabitem {  display: none; }
            .dm-floor-01 .floor-01-content .floor-01-tablist .floor-01-tabitem.active { display: block; }
            .dm-floor-01 .floor-tc-btn { width: 1200px; height: 70px; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; margin: auto; }
            .dm-floor-01 .floor-tc-btn .swiper-button-prev,.dm-floor-01 .floor-tc-btn .swiper-button-next { margin-top: -50px; }
            .dm-floor-01 .floor-tc-btn .swiper-button-prev { width: 39px; height: 70px; background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/dm-slide-prev.png')}}) no-repeat; left: -79px; }
            .dm-floor-01 .floor-tc-btn .swiper-button-next { width: 39px; height: 70px; background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/dm-slide-next.png')}}) no-repeat; right: -79px; }
            .dm-floor-01 .floor-01-pic { width: 1200px; height: 565px; overflow: hidden; }
            .dm-floor-01 .swiper-slide .floor-01-pic { width: 1400px; height: 565px; transition: all 0.5s ease; }
            .dm-floor-01 .swiper-slide:hover .floor-01-pic { transform: scale(1.1); }
            .dm-floor-01 .swiper-pagination { text-align: center; font-size: 0px; position: relative; margin-top: 32px; }
            .dm-floor-01 .swiper-pagination span { width: 90px; height: 90px; background: #fff; opacity: 1; display: inline-block; vertical-align: top; font-size: 14px; margin: 0 10px; transition: all 0.5s ease; }
            .dm-floor-01 .swiper-pagination span.swiper-pagination-bullet-active { background: #6b9d9b; box-shadow: 0 15px 32px rgba(115,155,155,0.5); transform: translateY(-15px); }
            .dm-floor-01 .swiper-pagination span:before,.dm-floor-01 .swiper-pagination span:after { content: ""; text-align: center; color: #999; font-size: 14px; }
            .dm-floor-01 .swiper-pagination span:before { width: 39px; height: 39px; display: block; margin: 15px auto 0; }
            .dm-floor-01 .swiper-pagination span:first-child:before {  background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-01.png')}}) no-repeat; }
            .dm-floor-01 .swiper-pagination span:first-child:after { content: "客餐厅"; }
            .dm-floor-01 .swiper-pagination span:first-child.swiper-pagination-bullet-active:before { background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-01.png')}}) 0 -39px no-repeat; }
            .dm-floor-01 .swiper-pagination span.swiper-pagination-bullet-active:after { color: #fff;  }
            .dm-floor-01 .swiper-pagination span:first-child + span:before { background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-02.png')}}) no-repeat; }
            .dm-floor-01 .swiper-pagination span:first-child + span.swiper-pagination-bullet-active:before { background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-02.png')}}) 0 -39px no-repeat; }
            .dm-floor-01 .swiper-pagination span:first-child + span:after { content: "卧室"; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span:before { background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-03.png')}}) no-repeat; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span.swiper-pagination-bullet-active:before { background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-03.png')}}) 0 -39px no-repeat; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span:after { content: "次卧"; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span + span:before { background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-05.png')}}) no-repeat; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span + span.swiper-pagination-bullet-active:before { background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-05.png')}}) 0 -39px no-repeat; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span + span:after { content: "厨房"; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span + span + span:before { background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-06.png')}}) no-repeat; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span + span + span.swiper-pagination-bullet-active:before { background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-06.png')}}) 0 -39px no-repeat; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span + span + span:after { content: "卫生间"; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span + span + span + span:before { background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-07.png')}}) no-repeat; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span + span + span + span.swiper-pagination-bullet-active:before { background: url({{ st('home/kehu.lehouwu.cn/zt/20181211_1/icon-07.png')}}) 0 -39px no-repeat; }
            .dm-floor-01 .swiper-pagination span:first-child + span + span + span + span + span:after { content: "阳台"; }
        </style>
        <!-- 套餐 -->
        <div class="dm-floor-01">
            <div class="dm-common-title">
                <a href="javascript:;"> </a>
                <p>
                    高颜值精选知贤&amp;艾宅整装<a href="javascript:;">修套餐</a>
                </p>
                <span><a href="javascript:;" rel="nofollow">DECORATION PACKAGE</a></span><a href="javascript:;" rel="nofollow"> </a>
            </div>
            <div class="floor-01-content">
                <div class="dm-wrapper">
                    <div class="floor-01-tab">
                        <p class="cur">
                            A3美学整装
                        </p>
                        <p>
                            A3超值个性整装
                        </p>
                    </div>
                    <div class="floor-01-tablist">
                        <div class="floor-01-tabitem tc-01 active">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- 客餐厅 -->
                                    <div class="swiper-slide">
                                        <img src="{{ st('home/editor/attached/image/20201001/20201001143616_64849.jpg')}}" alt="" /><br />
                                    </div>
                                    <!-- 客餐厅结束 -->
                                    <!-- 卧室 -->
                                    <div class="swiper-slide">
                                        <a href="#" rel="nofollow">
                                            <div class="floor-01-pic">
                                                <img src="{{ st('home/editor/attached/image/20200306/20200306141133_74434.jpg')}}" alt="卧室家装设计" />
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 卧室结束 -->
                                    <!-- 次卧 -->
                                    <div class="swiper-slide">
                                        <a href="#" rel="nofollow">
                                            <div class="floor-01-pic">
                                                <img src="{{ st('home/editor/attached/image/20200306/20200306141133_38635.jpg')}}" alt="上海室内装潢次卧" />
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 次卧结束 -->
                                    <!-- 厨房 -->
                                    <div class="swiper-slide">
                                        <a href="#" rel="nofollow">
                                            <div class="floor-01-pic">
                                                <img src="{{ st('home/editor/attached/image/20200306/20200306141132_20250.jpg')}}" alt="厨房装饰装璜" />
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 厨房结束 -->
                                    <!-- 卫生间 -->
                                    <div class="swiper-slide">
                                        <a href="#" rel="nofollow">
                                            <div class="floor-01-pic">
                                                <img src="{{ st('home/editor/attached/image/20200306/20200306141133_44178.jpg')}}" alt="卫生间家庭装修" />
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 卫生间结束 -->
                                    <!-- 阳台 -->
                                    <div class="swiper-slide">
                                        <a href="#" rel="nofollow">
                                            <div class="floor-01-pic">
                                                <img src="{{ st('home/editor/attached/image/20200306/20200306141133_11013.jpg')}}" alt="阳台装潢装修" />
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 阳台结束 -->
                                </div>
                            </div>
                            <div class="floor-tc-btn">
                                <div class="swiper-button-prev">
                                </div>
                                <div class="swiper-button-next">
                                </div>
                            </div>
                            <div class="swiper-pagination">
                            </div>
                            <script>
                                var swiper1 = new Swiper('.floor-01-tabitem.tc-01 .swiper-container', {
                                    loop: true,
                                    autoplay: 3200,
                                    pagination: '.floor-01-tabitem.tc-01 .swiper-pagination',
                                    nextButton: '.floor-01-tabitem.tc-01 .swiper-button-next',
                                    prevButton: '.floor-01-tabitem.tc-01 .swiper-button-prev',
                                    paginationClickable: true,
                                });
                            </script>
                        </div>
                        <div class="floor-01-tabitem tc-02">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- 客餐厅 -->
                                    <div class="swiper-slide">
                                        <a href="#" rel="nofollow">
                                            <div class="floor-01-pic">
                                                <img src="{{ st('home/editor/attached/image/20200306/20200306141549_33145.jpg')}}" alt="客餐厅高端装修公司" />
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 客餐厅结束 -->
                                    <!-- 卧室 -->
                                    <div class="swiper-slide">
                                        <a href="#" rel="nofollow">
                                            <div class="floor-01-pic">
                                                <img src="{{ st('home/editor/attached/image/20200306/20200306141209_71625.jpg')}}" alt="卧室装修公司" />
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 卧室结束 -->
                                    <!-- 次卧 -->
                                    <div class="swiper-slide">
                                        <a href="#" rel="nofollow">
                                            <div class="floor-01-pic">
                                                <img src="{{ st('home/editor/attached/image/20200306/20200306141208_15806.jpg')}}" alt="次卧装潢装修" />
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 次卧结束 -->
                                    <!-- 厨房 -->
                                    <div class="swiper-slide">
                                        <a href="#" rel="nofollow">
                                            <div class="floor-01-pic">
                                                <img src="{{ st('home/editor/attached/image/20200306/20200306141208_12584.jpg')}}" alt="厨房家庭装修" />
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 厨房结束 -->
                                    <!-- 卫生间 -->
                                    <div class="swiper-slide">
                                        <a href="#" rel="nofollow">
                                            <div class="floor-01-pic">
                                                <img src="{{ st('home/editor/attached/image/20200306/20200306141208_30970.jpg')}}" alt="卫生间家装设计" />
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 卫生间结束 -->
                                    <!-- 阳台 -->
                                    <div class="swiper-slide">
                                        <a href="#" rel="nofollow">
                                            <div class="floor-01-pic">
                                                <img src="{{ st('home/editor/attached/image/20200306/20200306141209_64363.jpg')}}" alt="阳台家装设计" />
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 阳台结束 -->
                                </div>
                            </div>
                            <div class="floor-tc-btn">
                                <div class="swiper-button-prev">
                                </div>
                                <div class="swiper-button-next">
                                </div>
                            </div>
                            <div class="swiper-pagination">
                            </div>
                            <script>
                                var swiper2 = new Swiper('.floor-01-tabitem.tc-02 .swiper-container', {
                                    loop: true,
                                    autoplay: 3200,
                                    pagination: '.floor-01-tabitem.tc-02 .swiper-pagination',
                                    nextButton: '.floor-01-tabitem.tc-02 .swiper-button-next',
                                    prevButton: '.floor-01-tabitem.tc-02 .swiper-button-prev',
                                    paginationClickable: true,
                                    observer:true,
                                    observeParents:true
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var list_li = $('.floor-01-tab p');
            list_li.click(function(){
                $(this).addClass('cur').siblings().removeClass('cur');
                var index = list_li.index(this);
                $('.floor-01-tablist .floor-01-tabitem').eq(index).addClass('active').siblings().removeClass('active');
            });
        </script>
        <!-- 套餐结束 -->
    </div>
    <style>
        .jcases_bgimg{}
        .jcases_sbgimg{}
    </style>
    <link href="{{ st('home/template/default/index/style/style_11/css/jcases.css') }}" rel="stylesheet" type="text/css" />
    <!-----案例样式10开始------->
    <div class=" jcases_bgimg">
        <div class="wrap jcases_sbgimg">
            <link href="{{ st('home/template/default/index/style/style_11/css/jcases.css') }}" rel="stylesheet" type="text/css" />
            <!--样式10开始-->
            <div class="title">
                <a href="casesa76c.html?mod=index&amp;mid=1" title="">
                    <h4>知贤设计经典案例</h4>
                    <i>海量家装效果图真实呈现 发现新家装修灵感</i>
                </a>
            </div>
            <!--标题样式10结束-->


            <!---丰富的装修经验-->
            <!---标题公用-->

            <!---标题公用结束-->
            <div class="jcases_s11 loucheng" data-section-name="pageTwo">

                <ul>
                    <a target="_blank" href="cases1cf7.html?mod=detail&amp;id=431" title="上海装修案例《临江豪园》美式轻奢风格，与自由和不羁的邂逅！">
                        <li><img src="{{ st('home/editor/attached/lehome_thumb/20201009105944_24249.jpg')}}"  title="上海装修案例《临江豪园》美式轻奢风格，与自由和不羁的邂逅！" alt="《临江豪园》美式轻奢风格，与自由和不羁的邂逅！"/>
                            <div class="txt">
                                <h3>《临江豪园》美式轻奢风格，与自由和不羁的邂逅！</h3>
                                <p></p>
                            </div>
                        </li>
                    </a>
                    <a target="_blank" href="cases4d15.html?mod=detail&amp;id=164" title="上海装修案例《绿地天呈》200㎡简美风格装修效果图，每一处细节都让人陶醉!">
                        <li><img src="{{ st('home/editor/attached/lehome_thumb/20200523100432_26875.jpg')}}"  title="上海装修案例《绿地天呈》200㎡简美风格装修效果图，每一处细节都让人陶醉!" alt="《绿地天呈》200㎡简美风格装修效果图，每一处细节都让人陶醉!"/>
                            <div class="txt">
                                <h3>《绿地天呈》200㎡简美风格装修效果图，每一处细节都让人陶醉!</h3>
                                <p></p>
                            </div>
                        </li>
                    </a>
                    <a target="_blank" href="casesc64b.html?mod=detail&amp;id=284" title="上海装修案例《太阳都市花园》现代简约风装修案例，闹市之中的宁静优雅！">
                        <li><img src="{{ st('home/editor/attached/lehome_thumb/20200523100512_71240.jpg')}}"  title="上海装修案例《太阳都市花园》现代简约风装修案例，闹市之中的宁静优雅！" alt="《太阳都市花园》现代简约风装修案例，闹市之中的宁静优雅！"/>
                            <div class="txt">
                                <h3>《太阳都市花园》现代简约风装修案例，闹市之中的宁静优雅！</h3>
                                <p></p>
                            </div>
                        </li>
                    </a>
                    <a target="_blank" href="casesc643.html?mod=detail&amp;id=154" title="上海装修案例《香樟园》北欧风格装修效果图，温馨简约实用！">
                        <li><img src="{{ st('home/editor/attached/lehome_thumb/20200522134110_66876.jpg')}}"  title="上海装修案例《香樟园》北欧风格装修效果图，温馨简约实用！" alt="《香樟园》北欧风格装修效果图，温馨简约实用！"/>
                            <div class="txt">
                                <h3>《香樟园》北欧风格装修效果图，温馨简约实用！</h3>
                                <p></p>
                            </div>
                        </li>
                    </a>
                    <a target="_blank" href="cases2b1c.html?mod=detail&amp;id=161" title="上海装修案例《乾阳佳园》新中式装修效果，别具韵味的中国文化！">
                        <li><img src="{{ st('home/editor/attached/lehome_thumb/20200522133657_10906.jpg')}}"  title="上海装修案例《乾阳佳园》新中式装修效果，别具韵味的中国文化！" alt="《乾阳佳园》新中式装修效果，别具韵味的中国文化！"/>
                            <div class="txt">
                                <h3>《乾阳佳园》新中式装修效果，别具韵味的中国文化！</h3>
                                <p></p>
                            </div>
                        </li>
                    </a>
                    <a target="_blank" href="cases5ca0.html?mod=detail&amp;id=410" title="上海装修案例《融创·玫瑰公馆》现代轻奢风格，精致高端有格调！">
                        <li><img src="{{ st('home/editor/attached/lehome_thumb/20201005094340_41607.jpg')}}"  title="上海装修案例《融创·玫瑰公馆》现代轻奢风格，精致高端有格调！" alt="《融创·玫瑰公馆》现代轻奢风格，精致高端有格调！"/>
                            <div class="txt">
                                <h3>《融创·玫瑰公馆》现代轻奢风格，精致高端有格调！</h3>
                                <p></p>
                            </div>
                        </li>
                    </a>
                </ul>
            </div>

            <script>
                $(".jcases_s11 ul li").hover(function() {
                    $(this).find(".txt").stop().animate({ height: "258px" }, 400);
                    $(this).find(".txt h3").stop().animate({ paddingTop: "60px" }, 400);
                }, function() {
                    $(this).find(".txt").stop().animate({ height: "45px" }, 400);
                    $(this).find(".txt h3").stop().animate({ paddingTop: "0px" }, 400);
                })
            </script>
            <!---丰富的装修经验结束-->
            <div class="clear"></div>
        </div>
    </div>









    <style>
        .calc_bgimg{}
        .calc_sbgimg{}
    </style>
    <link href="{{ st('home/template/default/index/style/style_10/css/calc.css') }}" rel="stylesheet" type="text/css" />
    <!-----分类样式一开始------->
    <div class=" calc_bgimg">
        <div class="wrap calc_sbgimg">
            <script>
                function calcchk() {
                    if (!checkTel($("#calc_tel").val()) || !checkNull($("#calc_tel").val())) {
                        alert("请填写正确格式的手机号码！");
                        $("#calc_tel").focus();
                        return false;
                    }
                    var code = $("#calc_code");
                    if (!checkNull(code.val())) {
                        alert("请输入验证码");
                        code.focus();
                        return false;
                    }
                    layer.msg('正在为您计算报价，请稍等', {
                        icon: 16
                        ,shade: 0.01
                    });
                    form_ts();
                    return true;
                }
            </script>

            <div class="calc" style="position:relative;overflow: initial;">
                <div style=""></div>
                <div class="calc-lt fl">
                    <p>30秒预测家装费用</p> <span>一键获取健康整装方案</span>
                </div>
                <form name="calc_jj" action="http://www.zhixian.com.cn/save_book.php?mod=calc&amp;act=code" method="post" onsubmit="return calcchk()">
                    <div class="calc-ct fl">
                        <div class="calc-title">立即预测家装费用</div>
                        <div class="calc-lxt">
                            <span class="fl">装修风格：</span>
                            <input type="radio" name="zxfg"  class="fl" value="36" checked="checked">
                            <label for="sxo0" class="fl" style="color:#000;">现代简约</label>
                            <input type="radio" name="zxfg"  class="fl" value="34" >
                            <label for="sxo0" class="fl" style="color:#000;">时尚轻奢</label>
                            <input type="radio" name="zxfg"  class="fl" value="31" >
                            <label for="sxo0" class="fl" style="color:#000;">美式欧式</label>
                            <input type="radio" name="zxfg"  class="fl" value="38" >
                            <label for="sxo0" class="fl" style="color:#000;">现代中式</label>
                            <input type="radio" name="zxfg"  class="fl" value="39" >
                            <label for="sxo0" class="fl" style="color:#000;">中西合璧</label>
                            <input type="radio" name="zxfg"  class="fl" value="40" >
                            <label for="sxo0" class="fl" style="color:#000;">其他风格</label>
                        </div>
                        <div class="calc-lxt">
                            <span class="fl">装修档次：</span>
                            <input type="radio" name="zxdc"  class="fl" value="43" checked="checked">
                            <label for="sxo0" class="fl" >经济实惠</label>
                            <input type="radio" name="zxdc"  class="fl" value="42" >
                            <label for="sxo0" class="fl" >小康实用</label>
                            <input type="radio" name="zxdc"  class="fl" value="41" >
                            <label for="sxo0" class="fl" >高档豪华</label>
                        </div>


                        <div class="calc-tx">
                            <label class="fl">房屋面积：</label>
                            <input type="text" class="fl" name="area" >
                            <label class="fl">小区名称：</label>
                            <input type="text" class="fl" name="address" style="color: rgb(51, 51, 51);">
                        </div>
                        <div class="calc-tx" style="position: relative;">
                            <label class="fl">您的称呼：</label>
                            <input type="text" class="fl" name="title" style="color: rgb(51, 51, 51);">
                            <label class="fl">手机号码：</label>
                            <input type="text" class="fl" name="tel" id="calc_tel" style="color: rgb(51, 51, 51);">
                            <label class="fl calc_yzm" id="calc_yzm" value="0">获取验证码</label>
                            <input type="text" class="fl" name="code" id="calc_code" style="color: rgb(51, 51, 51);width:90px;">
                            <div style="position:absolute;font-size:14px;bottom: -25px;left: 380px;display:none;" id="calc-codedjs"></div>
                        </div>

                        <script type="text/javascript">
                            $(function(){
                                $("#calc_yzm").click(function(){
                                    var ajax_flag = 0;
                                    var value = $("#calc_yzm").attr("value");
                                    if (value==0) {
                                        //=======lehouwu========
                                        var tel = $("#calc_tel");
                                        if (!checkNull(tel.val())) {
                                            alert("请输入您的手机号码");
                                            tel.focus();
                                            return false;
                                        }
                                        if (!checkTel(tel.val())) {
                                            alert("请输入正确格式的手机号码");
                                            tel.focus();
                                            return false;
                                        }
                                        var calc_tan = layer.msg('正在发送短信验证码，请稍等', {
                                            icon: 16,
                                            shade: 0.01,
                                            time:0,
                                        });
                                        $.post("ajax.html",
                                            {
                                                mod:"postcode",
                                                tel:tel.val(),
                                            },
                                            function(data,status){
                                                layer.close(calc_tan);
                                                /*ajax返回结果
                                                *0为发送失败
                                                *1为发送成功，
                                                *2为手机号码填写不正确
                                                *3为两次验证码相同
                                                *4为验证码发送时间未超过30秒
                                                *5为验证码发送已超过3次
                                                */
                                                if (data=="1") {
                                                    $("#calc-codedjs").show();
                                                    $("#calc_yzm").attr("value",1);
                                                    time();
                                                } else if (data=="2"){
                                                    alert("请输入正确格式的手机号码");
                                                    tel.focus();
                                                } else {
                                                    alert("暂时无法发送验证码，请稍后再试");
                                                }
                                            });
                                        //=======lehouwu=========

                                    }
                                })
                            })
                            var ddtime = 60;
                            var wait = ddtime;//定时时间
                            function time() {
                                if (wait == 0) {
                                    $("#calc-codedjs").hide();
                                    $("#calc_yzm").attr("value",0);
                                    wait = ddtime;//定时时间
                                } else {
                                    $("#calc-codedjs").html("<font style='color:#59AC3E;'>"+wait+"</font>秒后重新获取验证码");
                                    wait--;
                                    setTimeout(function () {
                                            time();
                                        },
                                        1000)
                                }
                            }
                        </script>
                    </div>
                    <div class="calc-rt fl">
                        <input value="提交信息预测费用" type="submit" id="yuyue" class="">
                        <p>已帮助<span>1042</span>位业主成功获取报价</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        .designer_bgimg{}
        .designer_sbgimg{}
    </style>
    <link href="{{ st('home/template/default/index/style/style_9/css/designer.css') }}" rel="stylesheet" type="text/css" />
    <!---第九套设计团队-->

    <div class=" designer_bgimg" style="margin: 0 0;">
        <div  class="designer_style9 wrap designer_sbgimg">
            <link href="{{ st('home/template/default/index/title/title_12/css/title.css') }}" rel="stylesheet" type="text/css" />
            <!--样式10开始-->
            <div class="title">
                <a href="designer5281.html?mod=index" title="">
                    <h4>知贤装饰优选设计师</h4>
                    <i>汇集装饰装修设计行业力量，私人定制百种风格设计！家就要与众不同！</i>
                </a>
            </div>
            <!--标题样式10结束-->

            <ul id="designer_ides">






                <li>
                    <div class="designer_img">
                        <a href="designer7bd8.html?mod=detail&amp;id=18" title="上海装修设计师祁丹" target="_blank">
                            <img src="{{ st('home/editor/attached/image/20191030/20191030153653_61707.jpg')}}" title="上海装修设计师祁丹"/>
                        </a>
                    </div>
                    <div class="designer_bg"></div>
                    <div class="designer_content">
                        <p><span><a href="_br/__b_Notice_/b__%20%20Undefined%20index_%20type%20in%20_b_D_/web/zhixian/template_c/54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file/b_%20on%20line%20_b_97_/b__br/__br/__b_Notice_/b__%20%20Trying/_.6f.delaye" target="_blank" title="上海<br />
    <b>Notice</b>:  Undefined index: type in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    <br />
    <b>Notice</b>:  Trying to get property of non-object in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    装修设计师">祁丹</a></span><font style="float:right;    margin-top: 5px;">设计总监</font></p>
                        <div class="designer_P">从业年限：9年</div>
                        <div class="designer_P">为<font style="color:#ed182a">490</font>户家庭设计过房子</div>
                    </div>
                    <a href="designer7bd8.html?mod=detail&amp;id=18" title="上海装修设计师祁丹" target="_blank" class="designer_btn">查看案例</a>
                    <a onclick="OpenDialog('book73a2.html?mod=designer&amp;id=18','预约设计师(祁丹)',420,300)" class="designer_btn1">预约设计师</a>
                </li>



                <li>
                    <div class="designer_img">
                        <a href="designer09de.html?mod=detail&amp;id=33" title="上海装修设计师周议" target="_blank">
                            <img src="{{ st('home/editor/attached/image/20191030/20191030153740_20887.jpg')}}" title="上海装修设计师周议"/>
                        </a>
                    </div>
                    <div class="designer_bg"></div>
                    <div class="designer_content">
                        <p><span><a href="_br/__b_Notice_/b__%20%20Undefined%20index_%20type%20in%20_b_D_/web/zhixian/template_c/54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file/b_%20on%20line%20_b_97_/b__br/__br/__b_Notice_/b__%20%20Trying/_.6f.delaye" target="_blank" title="上海<br />
    <b>Notice</b>:  Undefined index: type in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    <br />
    <b>Notice</b>:  Trying to get property of non-object in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    装修设计师">周议</a></span><font style="float:right;    margin-top: 5px;">总监设计师</font></p>
                        <div class="designer_P">从业年限：8年</div>
                        <div class="designer_P">为<font style="color:#ed182a">405</font>户家庭设计过房子</div>
                    </div>
                    <a href="designer09de.html?mod=detail&amp;id=33" title="上海装修设计师周议" target="_blank" class="designer_btn">查看案例</a>
                    <a onclick="OpenDialog('bookdf73.html?mod=designer&amp;id=33','预约设计师(周议)',420,300)" class="designer_btn1">预约设计师</a>
                </li>



                <li>
                    <div class="designer_img">
                        <a href="designer1248.html?mod=detail&amp;id=74" title="上海装修设计师李梦然" target="_blank">
                            <img src="{{ st('home/editor/attached/image/20200709/20200709103402_81364.jpg')}}" title="上海装修设计师李梦然"/>
                        </a>
                    </div>
                    <div class="designer_bg"></div>
                    <div class="designer_content">
                        <p><span><a href="_br/__b_Notice_/b__%20%20Undefined%20index_%20type%20in%20_b_D_/web/zhixian/template_c/54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file/b_%20on%20line%20_b_97_/b__br/__br/__b_Notice_/b__%20%20Trying/_.6f.delaye" target="_blank" title="上海<br />
    <b>Notice</b>:  Undefined index: type in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    <br />
    <b>Notice</b>:  Trying to get property of non-object in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    装修设计师">李梦然</a></span><font style="float:right;    margin-top: 5px;">总监设计师</font></p>
                        <div class="designer_P">从业年限：8年</div>
                        <div class="designer_P">为<font style="color:#ed182a">391</font>户家庭设计过房子</div>
                    </div>
                    <a href="designer1248.html?mod=detail&amp;id=74" title="上海装修设计师李梦然" target="_blank" class="designer_btn">查看案例</a>
                    <a onclick="OpenDialog('book8893.html?mod=designer&amp;id=74','预约设计师(李梦然)',420,300)" class="designer_btn1">预约设计师</a>
                </li>



                <li>
                    <div class="designer_img">
                        <a href="designer649a.html?mod=detail&amp;id=24" title="上海装修设计师王庭华" target="_blank">
                            <img src="{{ st('home/editor/attached/image/20200427/20200427104859_88338.jpg')}}" title="上海装修设计师王庭华"/>
                        </a>
                    </div>
                    <div class="designer_bg"></div>
                    <div class="designer_content">
                        <p><span><a href="_br/__b_Notice_/b__%20%20Undefined%20index_%20type%20in%20_b_D_/web/zhixian/template_c/54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file/b_%20on%20line%20_b_97_/b__br/__br/__b_Notice_/b__%20%20Trying/_.6f.delaye" target="_blank" title="上海<br />
    <b>Notice</b>:  Undefined index: type in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    <br />
    <b>Notice</b>:  Trying to get property of non-object in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    装修设计师">王庭华</a></span><font style="float:right;    margin-top: 5px;">设计总监</font></p>
                        <div class="designer_P">从业年限：9年</div>
                        <div class="designer_P">为<font style="color:#ed182a">480</font>户家庭设计过房子</div>
                    </div>
                    <a href="designer649a.html?mod=detail&amp;id=24" title="上海装修设计师王庭华" target="_blank" class="designer_btn">查看案例</a>
                    <a onclick="OpenDialog('bookead5.html?mod=designer&amp;id=24','预约设计师(王庭华)',420,300)" class="designer_btn1">预约设计师</a>
                </li>



                <li>
                    <div class="designer_img">
                        <a href="designer0f5b.html?mod=detail&amp;id=38" title="上海装修设计师吴永" target="_blank">
                            <img src="{{ st('home/editor/attached/image/20200709/20200709102832_24087.jpg')}}" title="上海装修设计师吴永"/>
                        </a>
                    </div>
                    <div class="designer_bg"></div>
                    <div class="designer_content">
                        <p><span><a href="_br/__b_Notice_/b__%20%20Undefined%20index_%20type%20in%20_b_D_/web/zhixian/template_c/54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file/b_%20on%20line%20_b_97_/b__br/__br/__b_Notice_/b__%20%20Trying/_.6f.delaye" target="_blank" title="上海<br />
    <b>Notice</b>:  Undefined index: type in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    <br />
    <b>Notice</b>:  Trying to get property of non-object in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    装修设计师">吴永</a></span><font style="float:right;    margin-top: 5px;">总监设计师</font></p>
                        <div class="designer_P">从业年限：8年</div>
                        <div class="designer_P">为<font style="color:#ed182a">329</font>户家庭设计过房子</div>
                    </div>
                    <a href="designer0f5b.html?mod=detail&amp;id=38" title="上海装修设计师吴永" target="_blank" class="designer_btn">查看案例</a>
                    <a onclick="OpenDialog('book34a1.html?mod=designer&amp;id=38','预约设计师(吴永)',420,300)" class="designer_btn1">预约设计师</a>
                </li>



                {{--<li>--}}
                    {{--<div class="designer_img">--}}
                        {{--<a href="designercdfe.html?mod=detail&amp;id=55" title="上海装修设计师刘新洲" target="_blank">--}}
                            {{--<img src="{{ st('home/editor/attached/image/20191104/20191104104058_96039.jpg')}}" title="上海装修设计师刘新洲"/>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="designer_bg"></div>--}}
                    {{--<div class="designer_content">--}}
                        {{--<p><span><a href="_br/__b_Notice_/b__%20%20Undefined%20index_%20type%20in%20_b_D_/web/zhixian/template_c/54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file/b_%20on%20line%20_b_97_/b__br/__br/__b_Notice_/b__%20%20Trying/_.6f.delaye" target="_blank" title="上海<br />--}}
    {{--<b>Notice</b>:  Undefined index: type in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />--}}
    {{--<br />--}}
    {{--<b>Notice</b>:  Trying to get property of non-object in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />--}}
    {{--装修设计师">刘新洲</a></span><font style="float:right;    margin-top: 5px;">设计总监</font></p>--}}
                        {{--<div class="designer_P">从业年限：9年</div>--}}
                        {{--<div class="designer_P">为<font style="color:#ed182a">412</font>户家庭设计过房子</div>--}}
                    {{--</div>--}}
                    {{--<a href="designercdfe.html?mod=detail&amp;id=55" title="上海装修设计师刘新洲" target="_blank" class="designer_btn">查看案例</a>--}}
                    {{--<a onclick="OpenDialog('bookd860.html?mod=designer&amp;id=55','预约设计师(刘新洲)',420,300)" class="designer_btn1">预约设计师</a>--}}
                {{--</li>--}}



                <li>
                    <div class="designer_img">
                        <a href="designere7e5.html?mod=detail&amp;id=124" title="上海装修设计师张梦梦" target="_blank">
                            <img src="{{ st('home/editor/attached/image/20200511/20200511095149_63978.jpg')}}" title="上海装修设计师张梦梦"/>
                        </a>
                    </div>
                    <div class="designer_bg"></div>
                    <div class="designer_content">
                        <p><span><a href="_br/__b_Notice_/b__%20%20Undefined%20index_%20type%20in%20_b_D_/web/zhixian/template_c/54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file/b_%20on%20line%20_b_97_/b__br/__br/__b_Notice_/b__%20%20Trying/_.6f.delaye" target="_blank" title="上海<br />
    <b>Notice</b>:  Undefined index: type in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    <br />
    <b>Notice</b>:  Trying to get property of non-object in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    装修设计师">张梦梦</a></span><font style="float:right;    margin-top: 5px;">总监设计师</font></p>
                        <div class="designer_P">从业年限：8年</div>
                        <div class="designer_P">为<font style="color:#ed182a">298</font>户家庭设计过房子</div>
                    </div>
                    <a href="designere7e5.html?mod=detail&amp;id=124" title="上海装修设计师张梦梦" target="_blank" class="designer_btn">查看案例</a>
                    <a onclick="OpenDialog('book4873.html?mod=designer&amp;id=124','预约设计师(张梦梦)',420,300)" class="designer_btn1">预约设计师</a>
                </li>



                <li>
                    <div class="designer_img">
                        <a href="designer2d2c.html?mod=detail&amp;id=80" title="上海装修设计师秦兴宇" target="_blank">
                            <img src="{{ st('home/editor/attached/image/20191225/20191225135549_89985.jpg')}}" title="上海装修设计师秦兴宇"/>
                        </a>
                    </div>
                    <div class="designer_bg"></div>
                    <div class="designer_content">
                        <p><span><a href="_br/__b_Notice_/b__%20%20Undefined%20index_%20type%20in%20_b_D_/web/zhixian/template_c/54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file/b_%20on%20line%20_b_97_/b__br/__br/__b_Notice_/b__%20%20Trying/_.6f.delaye" target="_blank" title="上海<br />
    <b>Notice</b>:  Undefined index: type in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    <br />
    <b>Notice</b>:  Trying to get property of non-object in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    装修设计师">秦兴宇</a></span><font style="float:right;    margin-top: 5px;">总监设计师</font></p>
                        <div class="designer_P">从业年限：9年</div>
                        <div class="designer_P">为<font style="color:#ed182a">388</font>户家庭设计过房子</div>
                    </div>
                    <a href="designer2d2c.html?mod=detail&amp;id=80" title="上海装修设计师秦兴宇" target="_blank" class="designer_btn">查看案例</a>
                    <a onclick="OpenDialog('book414f.html?mod=designer&amp;id=80','预约设计师(秦兴宇)',420,300)" class="designer_btn1">预约设计师</a>
                </li>



                <li>
                    <div class="designer_img">
                        <a href="designer2555.html?mod=detail&amp;id=58" title="上海装修设计师初文娇" target="_blank">
                            <img src="{{ st('home/editor/attached/image/20200430/20200430142813_70405.jpg')}}" title="上海装修设计师初文娇"/>
                        </a>
                    </div>
                    <div class="designer_bg"></div>
                    <div class="designer_content">
                        <p><span><a href="_br/__b_Notice_/b__%20%20Undefined%20index_%20type%20in%20_b_D_/web/zhixian/template_c/54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file/b_%20on%20line%20_b_97_/b__br/__br/__b_Notice_/b__%20%20Trying/_.6f.delaye" target="_blank" title="上海<br />
    <b>Notice</b>:  Undefined index: type in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    <br />
    <b>Notice</b>:  Trying to get property of non-object in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    装修设计师">初文娇</a></span><font style="float:right;    margin-top: 5px;">首席设计师</font></p>
                        <div class="designer_P">从业年限：8年</div>
                        <div class="designer_P">为<font style="color:#ed182a">363</font>户家庭设计过房子</div>
                    </div>
                    <a href="designer2555.html?mod=detail&amp;id=58" title="上海装修设计师初文娇" target="_blank" class="designer_btn">查看案例</a>
                    <a onclick="OpenDialog('book534a.html?mod=designer&amp;id=58','预约设计师(初文娇)',420,300)" class="designer_btn1">预约设计师</a>
                </li>



                <li>
                    <div class="designer_img">
                        <a href="designerf2d9.html?mod=detail&amp;id=73" title="上海装修设计师盛亮" target="_blank">
                            <img src="{{ st('home/editor/attached/image/20200430/20200430141542_56268.jpg')}}" title="上海装修设计师盛亮"/>
                        </a>
                    </div>
                    <div class="designer_bg"></div>
                    <div class="designer_content">
                        <p><span><a href="_br/__b_Notice_/b__%20%20Undefined%20index_%20type%20in%20_b_D_/web/zhixian/template_c/54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file/b_%20on%20line%20_b_97_/b__br/__br/__b_Notice_/b__%20%20Trying/_.6f.delaye" target="_blank" title="上海<br />
    <b>Notice</b>:  Undefined index: type in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    <br />
    <b>Notice</b>:  Trying to get property of non-object in <b>D:\web\zhixian\template_c\54d278a89a3c5b7592ff9f000e50a78f6cac8a70_0.file.style_designer.html.cache.php</b> on line <b>99</b><br />
    装修设计师">盛亮</a></span><font style="float:right;    margin-top: 5px;">设计总监</font></p>
                        <div class="designer_P">从业年限：9年</div>
                        <div class="designer_P">为<font style="color:#ed182a">416</font>户家庭设计过房子</div>
                    </div>
                    <a href="designerf2d9.html?mod=detail&amp;id=73" title="上海装修设计师盛亮" target="_blank" class="designer_btn">查看案例</a>
                    <a onclick="OpenDialog('book2c43.html?mod=designer&amp;id=73','预约设计师(盛亮)',420,300)" class="designer_btn1">预约设计师</a>
                </li>
            </ul>
        </div>
    </div>
    <!---设计师-->

    <div style="clear:both;">
    </div>
    <style>

        .yangbanjian_bgimg{}
        .yangbanjian_sbgimg{}

    </style>

    <link href="{{ st('home/template/default/index/style/style_18/css/yangbanjian.css') }}" rel="stylesheet" type="text/css" />
    <!--分类样式一开始-->
    <div style="overflow:hidden;" class=" yangbanjian_bgimg">
        <div class="wrap yangbanjian_sbgimg" style="overflow: initial;">
            <div style="width:1200px;margin:0 auto;">
                <link href="{{ st('home/template/default/index/title/title_12/css/title.css') }}" rel="stylesheet" type="text/css" />
                <!--样式10开始-->
                <div class="title">
                    <a href="yangbanjian.html" title="">
                        <h4>知贤装修3D样板间</h4>
                        <i>720°全景装潢装修实景 多种家装风格设计让您漫步新家</i>
                    </a>
                </div>
                <!--标题样式10结束-->

                <!--3D样板间-->
                <div class="vr_style">
                    <ul>
                        <li>
                            <a href="yangbanjian6f5c.html?mod=detail&amp;id=11"><img src="{{ st('home/editor/attached/image/20200521/20200521125727_70378.jpg')}}" alt="">
                                <div><i>《花园里》简欧轻奢风</i></div></a>
                        </li>
                        <li>
                            <a href="yangbanjianc9b9.html?mod=detail&amp;id=9"><img src="{{ st('home/editor/attached/image/20191105/20191105162336_39720.jpg')}}" alt="">
                                <div><i>《绿地天呈》现代美式风格</i></div></a>
                        </li>
                        <li>
                            <a href="yangbanjian23b5.html?mod=detail&amp;id=15"><img src="{{ st('home/editor/attached/image/20210102/20210102133458_61940.jpg')}}" alt="">
                                <div><i>《英伦风尚》现代轻奢风格</i></div></a>
                        </li>
                    </ul>
                    <div style="clear:both;"></div>
                </div>
                <!--3D样板间end-->
            </div>
        </div>
    </div>
    <style>
        .gongdi_bgimg{}
        .gongdi_sbgimg{}
    </style>
    <!--开放工地-->
    <link href="{{ st('home/template/default/index/style/style_8/css/gongdi.css') }}" rel="stylesheet" type="text/css" />
    <!-----工地样式七开始------->
    <div class="wrap">
        <link href="{{ st('home/template/default/index/title/title_12/css/title.css') }}" rel="stylesheet" type="text/css" />
        <!--样式10开始-->
        <div class="title">
            <a href="gongdi5281.html?mod=index" title="">
                <h4>上海装修在建工地</h4>
                <i>在线申请实地参观，眼见为实！</i>
            </a>
        </div>
        <!--标题样式10结束-->



        <div class="s8_gongdi">

            <div class="s8_gongdi_con" id="s8_gongdi_con">
                <ul>
                    <li class="s8_gongdi_con_li">
                        <div class="s8_gongdi_con_img">
                            <a style="color:#eee;" href="gongdif582.html?mod=detail&amp;id=37" target="_blank" title="点击查看工地详情">
                                <img src="{{ st('home/editor/attached/lehome_thumb/20200507112138_44205.jpg')}}"/>
                                <div class="s8_gongdi_con_tit">
                                    普陀·阳光威尼斯
                                </div>
                            </a>
                        </div>
                        <!--<div class="s8_gongdi_con_jd">
                            <div class="s8_gongdi_con_jd_box">









                                                            验收阶段

                            </div>
                        </div>-->
                        <!--<div class="s8_gongdi_con_xq">
                                                </div>-->
                        <div style="border:1px solid #ccc;border-top:none;overflow: hidden;height:163px;position:relative;">
                            <div style="width: 307px;margin: 0 auto;margin-top:10px;">
                                <div class="s8_gongdi_con_xz">
                                    <span>在施地址：靖边路</span>

                                </div>
                                <div class="s8_gongdi_con_xz s8_gongdi_con_xz2">

                                    <span>户型风格：两室一厅/日式风格</span>
                                    <span style="float:right;">设计师：<a href="designerb9c0.html?mod=detail&amp;id=51" target="_blank" title="上海装修设计师沈慧贤">沈慧贤</a></span>

                                    <span style="width:100%;color:#f27600;">施工进度：








                                                                                                    验收阶段
                                                                                                       </span>

                                </div>


                            </div>
                            <a href="gongdif582.html?mod=detail&amp;id=37" target="_blank" title="点击查看工地详情" class="s8_gongdi_con_yuyue">
                                查看工地
                            </a>

                            <div class="s8_gongdi_con_yuyuecount">
                                <img src="{{ st('home/template/default/index/style/style_7/images/eye.png') }}">
                                已有186人参观
                            </div>
                        </div>
                    </li>
                    <li class="s8_gongdi_con_li">
                        <div class="s8_gongdi_con_img">
                            <a style="color:#eee;" href="gongdi8639.html?mod=detail&amp;id=28" target="_blank" title="点击查看工地详情">
                                <img src="{{ st('home/editor/attached/lehome_thumb/20200429143543_87849.jpg')}}"/>
                                <div class="s8_gongdi_con_tit">
                                    浦东·碧云新天地
                                </div>
                            </a>
                        </div>
                        <!--<div class="s8_gongdi_con_jd">
                            <div class="s8_gongdi_con_jd_box">




                                                            水电阶段

                            </div>
                        </div>-->
                        <!--<div class="s8_gongdi_con_xq">
                                                </div>-->
                        <div style="border:1px solid #ccc;border-top:none;overflow: hidden;height:163px;position:relative;">
                            <div style="width: 307px;margin: 0 auto;margin-top:10px;">
                                <div class="s8_gongdi_con_xz">
                                    <span>在施地址：浦东新区长岛路1066弄</span>

                                </div>
                                <div class="s8_gongdi_con_xz s8_gongdi_con_xz2">

                                    <span>户型风格：三室两厅/简美风格</span>
                                    <span style="float:right;">设计师：<a href="designer6d6e.html?mod=detail&amp;id=35" target="_blank" title="上海装修设计师王剑鸣">王剑鸣</a></span>

                                    <span style="width:100%;color:#f27600;">施工进度：



                                                                                                    水电阶段
                                                                                                       </span>

                                </div>


                            </div>
                            <a href="gongdi8639.html?mod=detail&amp;id=28" target="_blank" title="点击查看工地详情" class="s8_gongdi_con_yuyue">
                                查看工地
                            </a>

                            <div class="s8_gongdi_con_yuyuecount">
                                <img src="{{ st('home/template/default/index/style/style_7/images/eye.png') }}">
                                已有209人参观
                            </div>
                        </div>
                    </li>
                    <li class="s8_gongdi_con_li">
                        <div class="s8_gongdi_con_img">
                            <a style="color:#eee;" href="gongdi58f7.html?mod=detail&amp;id=8" target="_blank" title="点击查看工地详情">
                                <img src="{{ st('home/editor/attached/lehome_thumb/20200529100337_47551.jpg')}}"/>
                                <div class="s8_gongdi_con_tit">
                                    嘉定·嘉宝梦之星
                                </div>
                            </a>
                        </div>
                        <!--<div class="s8_gongdi_con_jd">
                            <div class="s8_gongdi_con_jd_box">





                                                            泥瓦工阶段

                            </div>
                        </div>-->
                        <!--<div class="s8_gongdi_con_xq">
                                                </div>-->
                        <div style="border:1px solid #ccc;border-top:none;overflow: hidden;height:163px;position:relative;">
                            <div style="width: 307px;margin: 0 auto;margin-top:10px;">
                                <div class="s8_gongdi_con_xz">
                                    <span>在施地址：嘉定区城固路与崇信路交叉口</span>

                                </div>
                                <div class="s8_gongdi_con_xz s8_gongdi_con_xz2">

                                    <span>户型风格：三室两厅/现代简约</span>
                                    <span style="float:right;">设计师：<a href="designer0f5b.html?mod=detail&amp;id=38" target="_blank" title="上海装修设计师吴永">吴永</a></span>

                                    <span style="width:100%;color:#f27600;">施工进度：




                                                                                                    泥瓦工阶段
                                                                                                       </span>

                                </div>


                            </div>
                            <a href="gongdi58f7.html?mod=detail&amp;id=8" target="_blank" title="点击查看工地详情" class="s8_gongdi_con_yuyue">
                                查看工地
                            </a>

                            <div class="s8_gongdi_con_yuyuecount">
                                <img src="{{ st('home/template/default/index/style/style_7/images/eye.png') }}">
                                已有209人参观
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script language="javascript" type="text/javascript">
        var scrollPic_gongdi = new ScrollPic();
        scrollPic_gongdi.scrollContId = "s8_gongdi_con"; //内容容器ID
        scrollPic_gongdi.arrLeftId      = "s8_gongdi_con_leftjt";//左箭头ID
        scrollPic_gongdi.arrRightId     = "s8_gongdi_conjt"; //右箭头ID
        scrollPic_gongdi.frameWidth = 1160;//显示框宽度
        scrollPic_gongdi.pageWidth = 909; //翻页宽度

        scrollPic_gongdi.speed = 50; //移动速度(单位毫秒，越小越快)
        scrollPic_gongdi.space = 200; //每次移动像素(单位px，越大越快)
        scrollPic_gongdi.autoPlay = false; //自动播放
        scrollPic_gongdi.autoPlayTime = 5; //自动播放间隔时间(秒)

        scrollPic_gongdi.initialize(); //初始化

    </script>
    <!-----工地样式七结束------->



    <style>
        .tuanz_bgimg{}
        .tuanz_sbgimg{}
    </style>
    <!--团装小区-->
    <link href="{{ st('home/template/default/index/style/style_10/css/tuanz.css')}}" rel="stylesheet" type="text/css" />

    <!-----小区样式10开始------->
    <div class="wrap">
        <link href="{{ st('home/template/default/index/title/title_12/css/title.css')}}" rel="stylesheet" type="text/css" />
        <!--样式10开始-->
        <div class="title">
            <a href="tuanz5281.html?mod=index" title="">
                <h4>知贤设计团装小区</h4>
                <i>老房翻新、二手旧房装修、别墅装修、家装设计，减少多次材料运输等费用，享受集团采购价。</i>
            </a>
        </div>
        <!--标题样式10结束-->

        <div class="tuanz_s10">
            <ul class="tuanz_s10_ul">
                <li>
                    <div class="tuanz_s10_img">
                        <a href="tuanz58f7.html?mod=detail&amp;id=8" title="上海团装活动绿地天呈小区团装正在进行中……" target="_blank">
                            <img src="{{ st('home/editor/attached/lehome_thumb/20191107100514_25512.jpg')}}" alt="绿地天呈小区团装正在进行中……" title="绿地天呈小区团装正在进行中……" class="ht5_fangda"/>
                        </a>
                    </div>
                    <a href="tuanz58f7.html?mod=detail&amp;id=8" title="上海团装活动绿地天呈小区团装正在进行中……" target="_blank">
                        <div class="tuanz_s10_text"><span>团装小区/</span>绿地天呈小区团装正在进行中……</div>
                    </a>
                    <div class="tuanz_s10_tr">
                        <div class="tuanz_s10_trson">报名：40户</div>
                        <div class="tuanz_s10_trson">签约：31户</div>
                        <div class="tuanz_s10_trson">施工：18户</div>
                    </div>
                    <div class="tuanz_s10_bmct">
                        <a href="tuanz58f7.html?mod=detail&amp;id=8" title="上海团装活动绿地天呈小区团装正在进行中……" target="_blank">
                            <div class="tuanz_s10_te">报名参团</div>
                        </a>
                        <a href="tuanz58f7.html?mod=detail&amp;id=8" title="上海团装活动绿地天呈小区团装正在进行中……" target="_blank"><div class="tuanz_s10_ck">查看</div></a>
                    </div>
                    <div class="tuanz_s10_kjs">
                        <div class="tuanz_s10_kjstx">可节省：￥3000</div>
                    </div>
                </li>
                <li>
                    <div class="tuanz_s10_img">
                        <a href="tuanz1fad.html?mod=detail&amp;id=7" title="上海团装活动中环一号小区团装正在进行中……" target="_blank">
                            <img src="{{ st('home/editor/attached/lehome_thumb/20191107104652_98365.jpg')}}" alt="中环一号小区团装正在进行中……" title="中环一号小区团装正在进行中……" class="ht5_fangda"/>
                        </a>
                    </div>
                    <a href="tuanz1fad.html?mod=detail&amp;id=7" title="上海团装活动中环一号小区团装正在进行中……" target="_blank">
                        <div class="tuanz_s10_text"><span>团装小区/</span>中环一号小区团装正在进行中……</div>
                    </a>
                    <div class="tuanz_s10_tr">
                        <div class="tuanz_s10_trson">报名：59户</div>
                        <div class="tuanz_s10_trson">签约：26户</div>
                        <div class="tuanz_s10_trson">施工：12户</div>
                    </div>
                    <div class="tuanz_s10_bmct">
                        <a href="tuanz1fad.html?mod=detail&amp;id=7" title="上海团装活动中环一号小区团装正在进行中……" target="_blank">
                            <div class="tuanz_s10_te">报名参团</div>
                        </a>
                        <a href="tuanz1fad.html?mod=detail&amp;id=7" title="上海团装活动中环一号小区团装正在进行中……" target="_blank"><div class="tuanz_s10_ck">查看</div></a>
                    </div>
                    <div class="tuanz_s10_kjs">
                        <div class="tuanz_s10_kjstx">可节省：￥5000</div>
                    </div>
                </li>
                <li>
                    <div class="tuanz_s10_img">
                        <a href="tuanzf602.html?mod=detail&amp;id=6" title="上海团装活动碧桂园嘉誉小区团装正在进行中……" target="_blank">
                            <img src="{{ st('home/editor/attached/lehome_thumb/20191107103237_92666.jpg')}}" alt="碧桂园嘉誉小区团装正在进行中……" title="碧桂园嘉誉小区团装正在进行中……" class="ht5_fangda"/>
                        </a>
                    </div>
                    <a href="tuanzf602.html?mod=detail&amp;id=6" title="上海团装活动碧桂园嘉誉小区团装正在进行中……" target="_blank">
                        <div class="tuanz_s10_text"><span>团装小区/</span>碧桂园嘉誉小区团装正在进行中……</div>
                    </a>
                    <div class="tuanz_s10_tr">
                        <div class="tuanz_s10_trson">报名：56户</div>
                        <div class="tuanz_s10_trson">签约：30户</div>
                        <div class="tuanz_s10_trson">施工：15户</div>
                    </div>
                    <div class="tuanz_s10_bmct">
                        <a href="tuanzf602.html?mod=detail&amp;id=6" title="上海团装活动碧桂园嘉誉小区团装正在进行中……" target="_blank">
                            <div class="tuanz_s10_te">报名参团</div>
                        </a>
                        <a href="tuanzf602.html?mod=detail&amp;id=6" title="上海团装活动碧桂园嘉誉小区团装正在进行中……" target="_blank"><div class="tuanz_s10_ck">查看</div></a>
                    </div>
                    <div class="tuanz_s10_kjs">
                        <div class="tuanz_s10_kjstx">可节省：￥6000</div>
                    </div>
                </li>
            </ul>
        </div>

    </div>



    <style>
        .active_bgimg{}
        .active_sbgimg{}
    </style>
    <div style="clear:both;">
    </div>
    <!-----活动------->
    <link href="{{ st('home/template/default/index/style/style_20/css/active.css')}}" rel="stylesheet" type="text/css" />
    <div class="wq-floor-12  active_bgimg">
        <link href="{{ st('home/template/default/index/title/title_12/css/title.css')}}" rel="stylesheet" type="text/css" />
        <!--样式10开始-->
        <div class="title">
            <a href="active5281.html?mod=index" title="">
                <h4>知贤装饰近期活动</h4>
                <i>为您挑选善用心，精彩活动早知晓。</i>
            </a>
        </div>
        <!--标题样式10结束-->

        <div class="floor-12-content ant2 move">
            <div class="floor-12-item">
                <a href="active4479.html?mod=detail&amp;id=5">
                    <div class="floor-12-pic">
                        <img src="{{ st('home/editor/attached/image/20210519/20210519154418_53994.jpg')}}">
                    </div>
                    <div class="floor-12-text">
                        <div class="floor-12-title">实景装修家博会</div>
                        <div class="floor-12-time">2021-05-22至2021-06-13</div>
                    </div>
                </a>
            </div>
            <div class="floor-12-item">
                <a href="active9e26.html?mod=detail&amp;id=4">
                    <div class="floor-12-pic">
                        <img src="{{ st('home/editor/attached/image/20201001/20201001130344_83512.jpg')}}">
                    </div>
                    <div class="floor-12-text">
                        <div class="floor-12-title">知贤实景家装展</div>
                        <div class="floor-12-time">2021-03-13至2021-03-14</div>
                    </div>
                </a>
            </div>


        </div>
    </div>
    <style>
        .pingjia_bgimg{}
        .pingjia_sbgimg{}
    </style>
    {{--mt--}}
    {{--<link href="{{ st('home/template/default/index/style/style_8/css/pingjia.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--<!-----分类样式一开始------->--}}
    {{--<div class="wrap">--}}
        {{--<link href="{{ st('home/template/default/index/title/title_8/css/title.css')}}" rel="stylesheet" type="text/css" />--}}
        {{--<!-----样式8开始------->--}}
        {{--<a href="pingjiaf69b.html?mod=company" title="上海装修案例">--}}
            {{--<div class="s8_title">--}}
                {{--<h2 class="">--}}
                    {{--<span>客户评价<span>省心\<em>省钱</em>\省事</span></span>--}}
                    {{--<P class="s8_title_left"></P>--}}
                    {{--<P class="s8_title_right"></P>--}}
                {{--</h2>--}}
                {{--<P class="s8_title_p">我们用心服务，我们倾听用户反馈，我们保护你关于家的梦想。</P>--}}
            {{--</div>--}}
        {{--</a>--}}
        {{--<!-----标题样式6结束------->--}}
        {{--<div class="pingjia">--}}
            {{--<div class="pingjia_left ">--}}

                {{--<h3 class="pingjia_biaoti"><font style="color:#57AD40">评价</font>中心<span>THE USER EVALUATION</span></h3>--}}
                {{--<div class="pingjia mt10">--}}
                    {{--<ul class="pingjia_ul">--}}
                        {{--<a href="pingjiaf69b.html?mod=company" class="pingjia_more">点击查看更多>></a>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="pingjia_right ">--}}

                {{--<h3 class="pingjia_biaoti"><font style="color:#57AD40">咨询</font>中心<span>COUNSELING CENTER</span></h3>--}}

                {{--<a href="pingjia53c5.html?mod=khzx" target="_blank" class="pingjia_tj"></a>--}}
                {{--<div class="pingjia_online">--}}
                    {{--<a href="kefu.html" target="_blank">--}}
                        {{--<div class="pingjia_online1" style=" cursor:pointer;"></div>--}}
                    {{--</a>--}}
                    {{--<a href="kefu.html" target="_blank">--}}
                        {{--<div class="pingjia_online2" style=" cursor:pointer;"></div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<style>--}}
        {{--.news_bgimg{}--}}
        {{--.news_sbgimg{}--}}
    {{--</style>--}}
    {{--mtend--}}
    <link href="{{ st('home/template/default/index/style/style_17/css/news.css')}}" rel="stylesheet" type="text/css" />
    <!-----分类样式5开始------->

    <!--新闻-->
    <div class="news_index">
        <link href="{{ st('home/template/default/index/title/title_12/css/title.css')}}" rel="stylesheet" type="text/css" />
        <!--样式10开始-->
        <div class="title">
            <a href="news.php/id-12.html">
                <h4>知贤装饰新闻资讯</h4>
                <i>专注高品质家装设计 房子翻新、二手旧房装修、别墅装修、家庭装修等服务</i>
            </a>
        </div>
        <!--标题样式10结束-->
        <div class="news_cont_left">
            <img src="{{ st('home/template/default/index/style/style_17/images/news/news_img.jpg') }}" alt="">
            <div class="news_content">
                <div class="news_change_btn">
                    <ul>
                        <li class="on"><a class="on">上海装修常识</a></li>
                        <li ><a >上海装修设计</a></li>
                        <li ><a >上海装修施工</a></li>
                        <li ><a >知贤装饰资讯</a></li>
                    </ul>
                </div>

                <div class="news_change_page on">
                    <ul>
                        <li>
                            <a href="news04ad.html?mod=detail&amp;id=406"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">越来越多人这样装修卧室，不仅颜值爆表，还超超超实用！#上海装修#装修小知识</a><span>2021/05/21</span>
                        </li>
                        <li>
                            <a href="news4edf.html?mod=detail&amp;id=404"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">合理规划空间，用舒服的姿势拥抱生活！#空间规划#装修常识</a><span>2021/05/07</span>
                        </li>
                        <li>
                            <a href="news3ad6.html?mod=detail&amp;id=401"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">卧室不要装传统大衣柜了，如今流行这样装!#上海装修#装修知识#</a><span>2021/04/29</span>
                        </li>
                        <li>
                            <a href="news81f6.html?mod=detail&amp;id=399"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">装修想省钱？NO，再抠门这些地方都不能省！</a><span>2021/04/16</span>
                        </li>
                        <li>
                            <a href="newsda50.html?mod=detail&amp;id=397"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">5㎡的卫生间怎么放洗衣机？这35个设计显高级！</a><span>2021/04/12</span>
                        </li>
                        <li>
                            <a href="news1b1f.html?mod=detail&amp;id=391"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">全屋收纳技巧，码住，让你家越住越大！#装修设计#全屋收纳设计</a><span>2021/03/18</span>
                        </li>
                        <li>
                            <a href="news186d.html?mod=detail&amp;id=390"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">2021年装修开工吉日表，速收藏！#装修开工#知贤装饰#上海装修</a><span>2021/02/25</span>
                        </li>

                    </ul>
                </div>


                <div class="news_change_page ">
                    <ul>
                        <li>
                            <a href="newsa09a.html?mod=detail&amp;id=405"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">《骏苑》140㎡现代风格 简约质感 共鉴生活之美！#上海装修#装修设计</a><span>2021/05/21</span>
                        </li>
                        <li>
                            <a href="news3fe0.html?mod=detail&amp;id=403"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">《新理想花园》现代轻奢风 感悟心之归处！#上海装修#装修设计</a><span>2021/05/07</span>
                        </li>
                        <li>
                            <a href="newsf38a.html?mod=detail&amp;id=400"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">实景案例赏析|《万科·天籁湖畔》现代简约风 从细节里感受精致！</a><span>2021/04/28</span>
                        </li>
                        <li>
                            <a href="newseb37.html?mod=detail&amp;id=398"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">《保利·叶上海》现代简约风 简约生活不只一面！#装修设计##嘉定装修#</a><span>2021/04/16</span>
                        </li>
                        <li>
                            <a href="news584e.html?mod=detail&amp;id=394"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">《象屿西郊御府》现代轻奢风案例 流淌在生活中的时尚！#上海装修#装修设计#</a><span>2021/04/12</span>
                        </li>
                        <li>
                            <a href="news2d75.html?mod=detail&amp;id=393"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">186㎡北欧轻奢风格 每个清晨，都是新的开始。</a><span>2021/03/31</span>
                        </li>
                        <li>
                            <a href="newsda34.html?mod=detail&amp;id=389"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">《上海花城》108㎡现代轻奢风格 低调的奢华！</a><span>2021/02/24</span>
                        </li>

                    </ul>
                </div>


                <div class="news_change_page ">
                    <ul>
                        <li>
                            <a href="news437d.html?mod=detail&amp;id=396"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">马桶怎么选？排水怎么做？你想知道的都在这！</a><span>2021/04/12</span>
                        </li>
                        <li>
                            <a href="newse9ff.html?mod=detail&amp;id=386"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">知贤装饰施工标准流程，品质交付看知贤！#装修施工##闵行区装修#</a><span>2021/01/25</span>
                        </li>
                        <li>
                            <a href="news3b9b.html?mod=detail&amp;id=378"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">防水没做好，有后悔药吗？#装修细节设计#上海装修</a><span>2021/01/01</span>
                        </li>
                        <li>
                            <a href="news9599.html?mod=detail&amp;id=372"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">新房二手房装修先别急!看完这套施工详细流程，装修不后悔#上海装修##装修施工#</a><span>2020/12/05</span>
                        </li>
                        <li>
                            <a href="newsa05a.html?mod=detail&amp;id=362"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">知贤装饰施工标准流程，品质交付看知贤！#装修施工##静安区装修#</a><span>2020/11/01</span>
                        </li>
                        <li>
                            <a href="news81c4.html?mod=detail&amp;id=357"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">开工交底，到底要做哪些事情？#装修小知识##装修设计##上海装修#</a><span>2020/10/25</span>
                        </li>
                        <li>
                            <a href="news3591.html?mod=detail&amp;id=349"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">最全装修材料购买清单，快码！#装修材料##装修施工##上海装修#</a><span>2020/10/15</span>
                        </li>

                    </ul>
                </div>


                <div class="news_change_page ">
                    <ul>
                        <li>
                            <a href="news98ad.html?mod=detail&amp;id=395"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">ZXZS0008期|知贤装饰“老总下工地”特别栏目</a><span>2021/04/11</span>
                        </li>
                        <li>
                            <a href="news8de0.html?mod=detail&amp;id=392"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">理流程 抓培训 重管理 |知贤装饰 3月份工程管理会议隆重召开</a><span>2021/03/31</span>
                        </li>
                        <li>
                            <a href="news379b.html?mod=detail&amp;id=402"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">“心心向杨 ‘签’手美好”|知贤装饰助力曹杨一村旧住房成套改造装修装饰项目</a><span>2021/02/01</span>
                        </li>
                        <li>
                            <a href="news278b.html?mod=detail&amp;id=385"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">知贤装饰“老总下工地”特别栏目 第202101期</a><span>2021/01/21</span>
                        </li>
                        <li>
                            <a href="news2ec3.html?mod=detail&amp;id=371"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">知贤装饰“老总下工地”特别栏目 2020年06期</a><span>2020/12/03</span>
                        </li>
                        <li>
                            <a href="news0b9c.html?mod=detail&amp;id=353"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">【坚持以客户为中心】选择知贤装饰的9大理由！</a><span>2020/10/30</span>
                        </li>
                        <li>
                            <a href="newsfcee.html?mod=detail&amp;id=336"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">知贤装饰17周年庆典|整装半价日，豪礼送不停！</a><span>2020/10/01</span>
                        </li>

                    </ul>
                </div>


            </div>
        </div>
        <div class="news_cont_right">
            <h3>竣工验收</h3>


            <div>
                <ul>
                    <li><a href="news130d.html?mod=detail&amp;id=54"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">冬季装修竣工验收别忽视</a></li>
                    <li><a href="news8a40.html?mod=detail&amp;id=53"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">房屋装修竣工验收流程 房屋装修竣工注意事项</a></li>
                    <li><a href="news180a.html?mod=detail&amp;id=52"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">办公室装修竣工验收流程 办公室装修验收步骤</a></li>
                    <li><a href="newsb9c0.html?mod=detail&amp;id=51"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">房屋工程竣工验收 工程竣工验收流程</a></li>
                    <li><a href="news650a.html?mod=detail&amp;id=50"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">装修竣工验收30个细节 看完验收不后悔！</a></li>
                    <li><a href="newsea24.html?mod=detail&amp;id=49"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">竣工验收应在什么时间 有什么条件？</a></li>
                    <li><a href="newsae9e.html?mod=detail&amp;id=48"><img src="template/default/index/style/style_17/images/news/news_cont_spot.png" alt="">竣工验收程序与交工验收的区别是什么？</a></li>

                </ul>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".news_change_btn li").mouseenter(function(){
                var index=$(this).index();
                $(".news_change_btn li").each(function(a){
                    if(a == index){
                        $(this).addClass('on');
                        $(this).find("a").addClass("on");
                        $('.news_change_page').eq(a).addClass('on');
                    }
                    else{
                        $(this).removeClass('on');
                        $(this).find("a").removeClass("on");
                        $('.news_change_page').eq(a).removeClass('on');
                    }
                })
            });
        });
    </script>
    <!--新闻end-->


    <link rel="stylesheet" href="{{ st('home/template/common/bottom/bottom_7/bottom.css')}}" />
@endsection