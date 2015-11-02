@extends('main/main')
@section('head_index')
    <ul class="nav navbar-nav">
        <li class='active'>
            <a href="/featured">精选</a>
        </li>
        <li class=''>
            <a href="/events">活动</a>
        </li>
        <li class=''>
            <a href="/wareplus">产品</a>
        </li>
    </ul>
@stop
@section('login_register_index')
    <ul class="nav navbar-nav pull-right">
        <li class="msg">
            <a href="/login" >登录</a>
        </li>
        <li class="msg">
            <a href="/register" >注册</a>
        </li>
    </ul>
@stop

@section('content')

    <div class="select-list">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active">
                    <a href="/featured">全部</a>
                </li>
                <li class="">
                    <a href="/featured?category=78805925">湾+ 报道</a>
                </li>
                <li class="">
                    <a href="/featured?category=78805929">湾+ 星人</a>
                </li>
                <li class="">
                    <a href="/featured?category=78805930">湾+ 新品</a>
                </li>
                <li class="">
                    <a href="/featured?category=78805931">湾+ 观察</a>
                </li>
                <li class="">
                    <a href="/featured?category=78805979">湾+ 清单</a>
                </li>
                <li class="">
                    <a href="/featured?category=78805991">湾+ 幻灯片</a>
                </li>
            </ul>
        </div>

        <div class="tab-content">
            <div class="tab-pane active">

                <div class="container">
                    <div class="row">

                        <div class="big col-md-6 col-xs-12">
                            <a href="/featured/10318" class="pic">
                                <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Farticles%2F10318%2F2765773121175924528.jpg" alt="Uploads%2farticles%2f10318%2f2765773121175924528">
                            </a>
                            <div class="details">

                                <div class="tags">
                                    <span class="label label-primary">湾+ 新品</span>
                                </div>
                                <h3>
                                    <a href="/featured/10318">花 999 元去看清一个残酷的事实？WeGene 发布基因检测套件帮你了解祖源和天赋</a>
                                </h3>
                            </div>
                        </div>

                        <div class="big col-md-6 col-xs-12">
                            <a href="/featured/10316" class="pic">
                                <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Farticles%2F10316%2F__.png" alt="Uploads%2farticles%2f10316%2f  ">
                            </a>
                            <div class="details">

                                <div class="tags">
                                    <span class="label label-primary">湾+ 报道</span>
                                </div>
                                <h3>
                                    <a href="/featured/10316">哈佛的怪才们研究出了「比光速还快的光速移动」</a>
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-4  col-xs-12">
                            <a href="/featured/10314" class="pic">
                                <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Farticles%2F10314%2F__.jpg" alt="Uploads%2farticles%2f10314%2f  "></a>
                            <div class="details">
                                <div class="tags">
                                    <span class="label label-primary">湾+ 报道</span>
                                </div>
                                <h3>
                                    <a href="/featured/10314">这是一个关于 iPhone 6 的暖心故事</a>
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-4  col-xs-12">
                            <a href="/featured/10312" class="pic">
                                <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Farticles%2F10312%2F__.png" alt="Uploads%2farticles%2f10312%2f  "></a>
                            <div class="details">
                                <div class="tags">
                                    <span class="label label-primary">湾+ 新品</span>
                                </div>
                                <h3>
                                    <a href="/featured/10312">这款活在云端的手机，才是真正的安卓小王子</a>
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-4  col-xs-12">
                            <a href="/featured/10313" class="pic">
                                <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Farticles%2F10313%2FDSC00146.JPG" alt="Uploads%2farticles%2f10313%2fdsc00146"></a>
                            <div class="details">
                                <div class="tags">
                                    <span class="label label-primary">湾+ 报道</span>
                                </div>
                                <h3>
                                    <a href="/featured/10313">腾讯全球合作伙伴大会 ｜ QQ 物联世界</a>
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-4  col-xs-12">
                            <a href="/featured/10305" class="pic">
                                <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Farticles%2F10305%2F___.jpg" alt="Uploads%2farticles%2f10305%2f   "></a>
                            <div class="details">
                                <div class="tags">
                                    <span class="label label-primary">湾+ 观察</span>
                                </div>
                                <h3>
                                    <a href="/featured/10305">高下立判！BAT 的企业文化被放在一起对比，这可能还是第一次</a>
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-4  col-xs-12">
                            <a href="/featured/10306" class="pic">
                                <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Farticles%2F10306%2F__.jpg" alt="Uploads%2farticles%2f10306%2f  "></a>
                            <div class="details">
                                <div class="tags">
                                    <span class="label label-primary">湾+ 报道</span>
                                </div>
                                <h3>
                                    <a href="/featured/10306">「次世代新品」？小米这次又在玩什么？  </a>
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-4  col-xs-12">
                            <a href="/featured/10304" class="pic">
                                <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Farticles%2F10304%2Fwolfofwallstret.jpg" alt="Uploads%2farticles%2f10304%2fwolfofwallstret"></a>
                            <div class="details">
                                <div class="tags">
                                    <span class="label label-primary">湾+ 清单</span>
                                </div>
                                <h3>
                                    <a href="/featured/10304">还在「刷我卡」？以后更流行「刷我表」！ | 本周全球酷品推荐 Vol.6</a>
                                </h3>
                            </div>
                        </div>

                    </div>
                    <nav class="pull-right">
                        <ul class="pagination">



                            <li class="active">
                                <a href="/featured">1</a>
                            </li>

                            <li class="">
                                <a rel="next" href="/featured?page=2">2</a>
                            </li>

                            <li class="">
                                <a href="/featured?page=3">3</a>
                            </li>

                            <li class="">
                                <a href="/featured?page=4">4</a>
                            </li>

                            <li class="">
                                <a href="/featured?page=5">5</a>
                            </li>
                            <li>
                                <a rel="next" href="/featured?page=2">&gt;</a>
                            </li>

                            <li>
                                <a href="/featured?page=35">»</a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <div class="spinner" style="display: none;">
                    <div class="spinner-container container1">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                        <div class="circle4"></div>
                    </div>
                    <div class="spinner-container container2">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                        <div class="circle4"></div>
                    </div>
                    <div class="spinner-container container3">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                        <div class="circle4"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop