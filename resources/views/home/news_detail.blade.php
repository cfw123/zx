@extends('home.layout.master')

@section('content')
    <div class="inbanner">
        <div class="inbanner-slick" style="margin-top: 67px;">
            <img src="{{ st('home/template/default/news/news_7/images/905ca9d3-2ca8-4eb6-9e04-d64b29695165.jpg')}}">
        </div>
        <div class="current">
            <div class="container">
                <div class="current-title">
                    <img src="{{ st('home/template/default/news/news_7/images/cur.png')}}" alt="">当前位置：<a href="../index.html">首页</a> &gt; <a href="../news.html">
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
    <link href="{{ st('home/template/default/news/news_7/css/news_erji.css')}}" rel="stylesheet" type="text/css" />
    <div class="nav-list">
        <div class="container">
            <ul>
                <li class="active">
                    <a href="../news.html">关于企业</a>
                    <i></i>
                </li>
            </ul>
            <dl>

                <dt id="15" ><a href="../news9839.html?mod=index&amp;id=1">企业简介</a> </dt>


                <dt id="15" ><a href="../news0bb5.html?mod=index&amp;id=5">企业文化</a> </dt>


                <dt id="15" class="active"><a href="../news7de0.html?mod=index&amp;id=4">企业荣誉</a> </dt>


                <dt id="15" ><a href="../news9db6.html?mod=index&amp;id=2">联系我们</a> </dt>

                <div style="clear: both;"></div>
            </dl>
            <div style="clear: both;"></div>
        </div>

    </div>
    <!------left结束----->

    <!------left结束----->
    <div class="content original-info">
        <div class="container">
            <div class="example-list wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <ul class=" list-paddingleft-2">

                    <li class="wow bounceInUp"><a href="javascript:;">
                            <div class="pic"><img src="{{ st('home/editor/attached/lehome_thumb/20191202101511_54815.jpg')}}" class="middleCenter"></div>
                            <div class="example-info">
                                <div class="example-title">
                                    <span style="font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(241, 241, 241);"></span>
                                </div>
                            </div>
                        </a></li>

                    <li class="wow bounceInUp"><a href="javascript:;">
                            <div class="pic"><img src="{{ st('home/editor/attached/lehome_thumb/20191202101451_53818.jpg')}}" class="middleCenter"></div>
                            <div class="example-info">
                                <div class="example-title">
                                    <span style="font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(241, 241, 241);"></span>
                                </div>
                            </div>
                        </a></li>

                    <li class="wow bounceInUp"><a href="javascript:;">
                            <div class="pic"><img src="{{ st('home/editor/attached/lehome_thumb/20191202101433_93888.jpg')}}" class="middleCenter"></div>
                            <div class="example-info">
                                <div class="example-title">
                                    <span style="font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(241, 241, 241);"></span>
                                </div>
                            </div>
                        </a></li>

                    <li class="wow bounceInUp"><a href="javascript:;">
                            <div class="pic"><img src="{{ st('home/editor/attached/lehome_thumb/20191202101917_10120.jpg')}}" class="middleCenter"></div>
                            <div class="example-info">
                                <div class="example-title">
                                    <span style="font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(241, 241, 241);"></span>
                                </div>
                            </div>
                        </a></li>

                    <li class="wow bounceInUp"><a href="javascript:;">
                            <div class="pic"><img src="{{ st('home/editor/attached/lehome_thumb/20191202101938_56708.jpg')}}" class="middleCenter"></div>
                            <div class="example-info">
                                <div class="example-title">
                                    <span style="font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(241, 241, 241);"></span>
                                </div>
                            </div>
                        </a></li>

                    <li class="wow bounceInUp"><a href="javascript:;">
                            <div class="pic"><img src="{{ st('home/editor/attached/lehome_thumb/20191202102003_66346.jpg')}}" class="middleCenter"></div>
                            <div class="example-info">
                                <div class="example-title">
                                    <span style="font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(241, 241, 241);"></span>
                                </div>
                            </div>
                        </a></li>

                    <li class="wow bounceInUp"><a href="javascript:;">
                            <div class="pic"><img src="{{ st('home/editor/attached/lehome_thumb/20191202102031_71630.jpg')}}" class="middleCenter"></div>
                            <div class="example-info">
                                <div class="example-title">
                                    <span style="font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(241, 241, 241);"></span>
                                </div>
                            </div>
                        </a></li>

                    <li class="wow bounceInUp"><a href="javascript:;">
                            <div class="pic"><img src="{{ st('home/editor/attached/lehome_thumb/20191202102102_73407.jpg')}}" class="middleCenter"></div>
                            <div class="example-info">
                                <div class="example-title">
                                    <span style="font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(241, 241, 241);"></span>
                                </div>
                            </div>
                        </a></li>

                    <li class="wow bounceInUp"><a href="javascript:;">
                            <div class="pic"><img src="{{ st('home/editor/attached/lehome_thumb/20191202144147_88728.jpg')}}" class="middleCenter"></div>
                            <div class="example-info">
                                <div class="example-title">
                                    <span style="font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(241, 241, 241);"></span>
                                </div>
                            </div>
                        </a></li>
                    <div style="clear:both;"></div>

                    <style>
                        /*翻页*/
                        .digg {margin-top: 45px; text-align: center;width: 100%;height: 40px;padding:2px 3px;}
                        .digg a {border: #eeeeee 1px solid; padding: 5px 12px; margin: 2px;  color: #999999;  text-decoration: none;font-size: 16px;}
                        .digg a:hover {border: #b60005 1px solid; color: #fff;background-color: #b60005;}
                        .digg a:active {border: #b60005 1px solid; color: #fff;background-color: #b60005;}
                        .digg a.current {border: #b60005 1px solid;color: #fff;background-color: #b60005;}
                    </style>
                    <div class="digg">
                        <a title="首页" href="../news30e5.html?id=4&amp;page=1">首页</a>
                        <a title="上一页" href="../news30e5.html?id=4&amp;page=1"><</a>
                        <a title="1" href="../news30e5.html?id=4&amp;page=1" class="current">1</a>
                        <a title="2" href="../news8fdf.html?id=4&amp;page=2" >2</a>
                        <a title="3" href="../news2bdd.html?id=4&amp;page=3" >3</a>
                        <a title="下一页" href="../news8fdf.html?id=4&amp;page=2">></a>
                        <a title="尾页" href="../news2bdd.html?id=4&amp;page=3">尾页</a>
                    </div>

                </ul>
            </div>
        </div>
    </div>


    <style>
        .slideTest{z-index:20;}.Eject{z-index:20;}.swiper-pagination-current{color:#ffae00;}.swiper-pagination-total{color:#fff;}
    </style>
@endsection