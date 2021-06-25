@extends('home.layout.master')

@section('content')
    <!------大图开始----->
    <!------大图开始----->
    <div class="inbanner">
        <div class="inbanner-slick" style="margin-top: 67px;">
            <img src="{{ st('home/template/default/news/news_7/images/905ca9d3-2ca8-4eb6-9e04-d64b29695165.jpg')}}">
        </div>
        <div class="current">
            <div class="container">
                <div class="current-title">
                    <img src="{{ st('home/template/default/news/news_7/images/cur.png')}}" alt="">当前位置：<a href="../../../../index.html">首页</a> &gt; <a href="../../../../news.html">
                        新闻中心
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .inbanner {
            width: 100%;
            overflow: hidden;
            position: relative
        }
        .inbanner .inbanner-slick {
            overflow: hidden;
            position: relative;
            width: 100%;
            text-align: center
        }

        .inbanner .inbanner-slick img {
            max-width: 100%;
            vertical-align: middle
        }
        .inbanner .content {
            min-height: 500px
        }
        .inbanner .current {
            background: url({{ st('home/template/default/news/news_7/images/current.png')}}) repeat center center;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 43px;
            line-height: 43px;
            text-align: right;
            color: #fff;
            font-size: 12px
        }

        .inbanner .current .current-title img {
            vertical-align: sub;
            margin-right: 5px
        }

        .inbanner .current .current-title a {
            color: #fff
        }

        .inbanner .container{width: 1200px;margin:0 auto;}
    </style>

    <!------大图结束----->
    <!------left开始----->
    <div style="width:80%;margin:0 auto;">
        <link href="{{ st('home/template/default/news/news_7/css/news_erji.css') }}" rel="stylesheet" type="text/css" />
        <div class="nav-list">
            <div class="container">
                <ul>
                    <li class="active">
                        <a href="../../../../news.html">关于企业</a>
                        <i></i>
                    </li>
                </ul>
                <dl>

                    <dt id="15" class="active"><a href="../../../../news9839.html?mod=index&amp;id=1">企业简介</a> </dt>


                    <dt id="15" ><a href="../../../../news0bb5.html?mod=index&amp;id=5">企业文化</a> </dt>


                    <dt id="15" ><a href="../../../../news7de0.html?mod=index&amp;id=4">企业荣誉</a> </dt>


                    <dt id="15" ><a href="../../../../news9db6.html?mod=index&amp;id=2">联系我们</a> </dt>

                    <div style="clear: both;"></div>
                </dl>
                <div style="clear: both;"></div>
            </div>

        </div>
        <!------left结束----->

    </div>

    <!------left结束----->
    <div class="content">
        <div class="lhw_contactus">
            <div class="lhw_contactus_son">
                <p class="MsoNormal" style="white-space:normal;">
                    <br />
                </p>
                <p class="MsoNormal" style="white-space:normal;text-align:center;">
                    <img src="{{ st('home/editor/attached/image/20191206/20191206092426_27256.jpg') }}" alt="" />
                </p>
                <p class="MsoNormal" style="text-align:center;">
                    <br />
                </p>
                <p style="white-space:normal;text-align:left;">
                    <span style="font-size:16px;">上海知贤装饰设计有限公司（简称知贤装饰），成立于2003年，注册资金2120万元，住建部颁发设计施工二级资质，</span><span style="font-size:16px;">总部位于上海，目前在徐汇、静安、闵行、浦东、嘉定、宝山</span><span style="font-size:16px;">设有整装旗舰店、设计中心和一个5000平实景体验馆，拥有顶层设计研发人员20余名，一线设计师160余名、施工与管理人员1200余名，</span>
                </p>
                <p style="white-space:normal;text-align:left;">
                    <span style="font-size:16px;">自有产权全屋定制加工生产基地15000余平，专注室内整体装修，<span style="font-size:16px;white-space:normal;">是一家</span>集设计、装潢施工、家居建材、整体软装于一体的大型设计装修企业。</span>
                </p>
                <div style="text-align:left;">
                    <br />
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">服务介绍</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">知贤装饰提供家庭整体装修和别墅装修设计一站式装修服务，服务内容包括房屋装修，别墅装修，公寓装修，老房翻新，全屋定制，整体家装。</span>
                </div>
                <div style="text-align:left;">
                    <br />
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">发展历程</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">2003年09月01日，上海知贤装饰设计有限公司成立。</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">2004年-2010年，在嘉定、徐汇、浦东开设三大设计中心，专注于公寓和别墅装修设计。</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">2011年-2016年，在嘉定、闵行、宝山开设三大设计中心。</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">2017年，开拓线上线下一体化运营体系，持续改进服务质量提升服务水平。</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">2019年，筹划全屋整装企业发展战略，完成企业智能管理升级。</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">2020年，5000平全屋整装体验馆正式上线，满足上海业主拎包入住全屋整装的需求。</span>
                </div>
                <div style="text-align:left;">
                    <br />
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">组织架构</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">企业下设总部管理中心，品牌营销部、设计研发部、工程管理部、材料部、售后服务部等职能部门。</span>
                </div>
                <div style="text-align:left;">
                    <br />
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">企业文化</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">核心价值观：正派经营。</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">经营理念：想装修者之所想，急装修者之所急。</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">施工： 精益求精，尽善尽美。</span>
                </div>
                <div style="text-align:left;">
                    <span style="font-size:16px;">服务理念： 珍惜所托，用心服务，做客户永远的伙伴。 尊重客户，理解客户。</span>
                </div>
                <div style="text-align:left;">
                    <br />
                </div>
                <p style="text-align:left;">
                    <span style="font-size:16px;line-height:1.5;">企业地址</span>
                </p>
                <p class="MsoNormal" style="text-align:left;white-space:normal;">
                    <span style="font-size:16px;background-color:#FFFFFF;letter-spacing:0.544px;line-height:1.5;">知贤装饰设计•徐汇实景体验馆地址：徐汇区吴中东路492号（宏云广场对面）</span>
                </p>
                <p class="MsoNormal" style="text-align:left;white-space:normal;">
                    <span style="font-family:微软雅黑;font-size:16px;letter-spacing:0.544px;background-color:#FFFFFF;line-height:1.5;">知贤装饰设计•嘉定旗舰店地址：嘉定区胜辛路417号2楼（万达对面）；</span>
                </p>
                <p class="MsoNormal" style="text-align:left;white-space:normal;">
                    <span style="font-family:微软雅黑;font-size:16px;letter-spacing:0.544px;background-color:#FFFFFF;">知贤装饰设计•浦东旗舰店地址：浦东区花木路838号（世纪公园对面）；</span>
                </p>
                <p class="MsoNormal" style="text-align:left;white-space:normal;">
                    <span style="font-size:16px;letter-spacing:0.544px;margin:0px;padding:0px;line-height:1.5;font-family:微软雅黑;">知贤装饰设计•闵行设计中心地址：闵行区新龙路1333弄29幢</span><span style="font-size:16px;letter-spacing:0.544px;margin:0px;padding:0px;font-family:微软雅黑;line-height:1.5;">（万科七宝国际） ；</span>
                </p>
                <p class="MsoNormal" style="text-align:left;white-space:normal;">
                    <span style="font-size:16px;background-color:#FFFFFF;letter-spacing:0.544px;">知贤装饰设计•宝山设计中心地址：宝山区共和新路4727号（新陆大厦）；</span>
                </p>
                <p class="MsoNormal" style="text-align:left;white-space:normal;">
                    <span style="font-size:16px;background-color:#FFFFFF;letter-spacing:0.544px;">知贤装饰设计•静安设计中心地址：西康路928号（创展大厦）；</span>
                </p>
                <span style="font-size:16px;"></span>
                <p>
                    <br />
                </p>
                <p class="MsoNormal" style="white-space:normal;">
                    <br />
                </p>
            </div>
        </div>

    </div>
@endsection