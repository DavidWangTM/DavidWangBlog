@extends('main/main')
@section('head_index')

    <ul class="nav navbar-nav">
        <li class=''>
            <a href="/featured">精选</a>
        </li>
        <li class=''>
            <a href="/events">活动</a>
        </li>
        <li class='active'>
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

    <div class="products-index">
        <div class="container">
            <a class="btn btn-primary pull-right" data-remote="true" href="/login-modal?redirect_to=%2Fware%2Fnew"><i class="fa fa-plus"></i> <span class="hidden-xs">发布产品</span></a>

            <div class="filter">
                <a href="/wareplus" class="btn btn-primary" role="button"><i class="fa fa-list-ul"></i> 产品清单</a>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        推荐 <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li>

                            <a href="/ware?order=new">最新</a>
                            <a href="/ware?order=hot">最热</a>
                        </li>
                    </ul>
                </div>
                <form class="form-inline hidden-xs" style="display: inline-block" action="/ware" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="产品搜索..." name="q" value="">
         <span class="input-group-btn">
           <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
         </span>
                    </div>
                </form>    </div>
            <form class="visible-xs" action="/ware" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="产品搜索..." name="q" value="">
         <span class="input-group-btn">
           <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
         </span>
                </div>
            </form>    <div class="row list">
                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/1073444945">
                            <img alt="智能嘘嘘扣" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F1073444945%2F1073444945-______________-t.jpg">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/1073444945">
                                <h4 class="truncate">智能嘘嘘扣</h4>
                            </a>
                            <p class="text-muted truncate">
                                纸尿裤一秒变智能，让宝宝远离尿布疹
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="avatar">
                                <a class="avatar-thumb" href="/friends/74233630">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073133807%2Fthumb_132.jpeg" alt="Uploads%2fusers%2favatar%2f1073133807%2fthumb 132">
                                </a>
                                <div class="avatar-ball  text-center">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073133807%2Fthumb_132.jpeg" alt="Uploads%2fusers%2favatar%2f1073133807%2fthumb 132">
                                    <a href="/friends/74233630"><h4>李光辉</h4></a>
                                    <p class="text-muted truncate">极客宝贝嘘嘘扣联合创始人</p>
                                </div>
                            </div>

                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/1073444945#comments" class="text-muted"><i class="fa fa-comments "></i> 2 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/1073444945/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_1073444945">11</em></a>
                                    <!-- cached_votes_total: 11 ; cached_weighted_total: 221 ; admin_comments_count: 1 -->
                                    <!-- 1.1 + 0.6 + 0.6 = 23.000000000000004-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/1073445201">
                            <img alt="OMNI 万向跑步机" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F1073445201%2FQQ__20150407095706.png">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/1073445201">
                                <h4 class="truncate">OMNI 万向跑步机</h4>
                            </a>
                            <p class="text-muted truncate">
                                在虚拟世界走动
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/1073445201#comments" class="text-muted"><i class="fa fa-comments "></i> 2 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/1073445201/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_1073445201">12</em></a>
                                    <!-- cached_votes_total: 12 ; cached_weighted_total: 218 ; admin_comments_count: 2 -->
                                    <!-- 1.2000000000000002 + 0.6 + 0.6 = 23.000000000000004-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/1073445216">
                            <img alt="3D 打印机- Uncia 雪豹" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F1073445216%2F1407300836342322.jpg">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/1073445216">
                                <h4 class="truncate">3D 打印机- Uncia 雪豹</h4>
                            </a>
                            <p class="text-muted truncate">
                                国内第一款桌面式光固化 3D打印机
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="avatar">
                                <a class="avatar-thumb" href="/friends/25415017">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073130746%2Fthumb_DSC08042_meitu_2.jpg" alt="Uploads%2fusers%2favatar%2f1073130746%2fthumb dsc08042 meitu 2">
                                </a>
                                <div class="avatar-ball  text-center">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073130746%2Fthumb_DSC08042_meitu_2.jpg" alt="Uploads%2fusers%2favatar%2f1073130746%2fthumb dsc08042 meitu 2">
                                    <a href="/friends/25415017"><h4>窦浩桐</h4></a>
                                    <p class="text-muted truncate">美国拉塞尔学院项目管理硕士，南京激光院 3D打印研究员，百川国际副总裁</p>
                                </div>
                            </div>

                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/1073445216#comments" class="text-muted"><i class="fa fa-comments "></i> 2 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/1073445216/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_1073445216">9</em></a>
                                    <!-- cached_votes_total: 9 ; cached_weighted_total: 207 ; admin_comments_count: 1 -->
                                    <!-- 0.9 + 0.6 + 0.6 = 21.600000000000005-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/1073445679">
                            <img alt="360 行车记录仪" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F1073445679%2FQQ__20150519145111.jpg">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/1073445679">
                                <h4 class="truncate">360 行车记录仪</h4>
                            </a>
                            <p class="text-muted truncate">
                                汽车里的视频记录卫士
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="avatar">
                                <a class="avatar-thumb" href="/friends/42947757">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073135655%2Fthumb_132.jpeg" alt="Uploads%2fusers%2favatar%2f1073135655%2fthumb 132">
                                </a>
                                <div class="avatar-ball  text-center">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073135655%2Fthumb_132.jpeg" alt="Uploads%2fusers%2favatar%2f1073135655%2fthumb 132">
                                    <a href="/friends/42947757"><h4>王铁军</h4></a>
                                    <p class="text-muted truncate">360行车记录仪产品经理   360随身Wi-Fi产品经理</p>
                                </div>
                            </div>

                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/1073445679#comments" class="text-muted"><i class="fa fa-comments "></i> 0 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/1073445679/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_1073445679">6</em></a>
                                    <!-- cached_votes_total: 6 ; cached_weighted_total: 208 ; admin_comments_count: 0 -->
                                    <!-- 0.6000000000000001 + 0.0 + 0.6 = 21.400000000000002-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/1073445301">
                            <img alt="FlexPV 电动轮" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F1073445301%2FflexPV.jpg">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/1073445301">
                                <h4 class="truncate">FlexPV 电动轮</h4>
                            </a>
                            <p class="text-muted truncate">
                                把任何能跑的变成电动的
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="avatar">
                                <a class="avatar-thumb" href="/friends/51796029">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073133380%2Fthumb_132.jpeg" alt="Uploads%2fusers%2favatar%2f1073133380%2fthumb 132">
                                </a>
                                <div class="avatar-ball  text-center">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073133380%2Fthumb_132.jpeg" alt="Uploads%2fusers%2favatar%2f1073133380%2fthumb 132">
                                    <a href="/friends/51796029"><h4>廖兴毅</h4></a>
                                    <p class="text-muted truncate">Flex 联合创始人 产品经理</p>
                                </div>
                            </div>

                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/1073445301#comments" class="text-muted"><i class="fa fa-comments "></i> 0 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/1073445301/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_1073445301">10</em></a>
                                    <!-- cached_votes_total: 10 ; cached_weighted_total: 113 ; admin_comments_count: 1 -->
                                    <!-- 1.0 + 0.0 + 0.6 = 12.200000000000001-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/1073445447">
                            <img alt="GYENNO 「睿餐」防抖餐具" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F1073445447%2Fsaozi.png">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/1073445447">
                                <h4 class="truncate">GYENNO 「睿餐」防抖餐具</h4>
                            </a>
                            <p class="text-muted truncate">
                                智能识别抵消手部颤抖，震颤病人的防抖餐具
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/1073445447#comments" class="text-muted"><i class="fa fa-comments "></i> 4 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/1073445447/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_1073445447">9</em></a>
                                    <!-- cached_votes_total: 9 ; cached_weighted_total: 108 ; admin_comments_count: 4 -->
                                    <!-- 0.9 + 1.2 + 0.0 = 12.0-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/1073445397">
                            <img alt="萌奇小可乐移动电源" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F1073445397%2F123456.png">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/1073445397">
                                <h4 class="truncate">萌奇小可乐移动电源</h4>
                            </a>
                            <p class="text-muted truncate">
                                你是独一无二的宇宙小姐！充前摇一摇！
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="avatar">
                                <a class="avatar-thumb" href="/friends/68887242">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073131023%2Fthumb_tree.jpg" alt="Uploads%2fusers%2favatar%2f1073131023%2fthumb tree">
                                </a>
                                <div class="avatar-ball  text-center">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073131023%2Fthumb_tree.jpg" alt="Uploads%2fusers%2favatar%2f1073131023%2fthumb tree">
                                    <a href="/friends/68887242"><h4>邱树湘</h4></a>
                                    <p class="text-muted truncate"></p>
                                </div>
                            </div>

                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/1073445397#comments" class="text-muted"><i class="fa fa-comments "></i> 1 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/1073445397/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_1073445397">11</em></a>
                                    <!-- cached_votes_total: 11 ; cached_weighted_total: 108 ; admin_comments_count: 1 -->
                                    <!-- 1.1 + 0.3 + 0.6 = 11.700000000000001-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/1073445107">
                            <img alt="神奇叫叫 | Smart JOJO" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F1073445107%2F1073445107-__________________________Smart_JOJO-t.jpg">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/1073445107">
                                <h4 class="truncate">神奇叫叫 | Smart JOJO</h4>
                            </a>
                            <p class="text-muted truncate">
                                最有爱、最具科技范儿的儿童智能玩具
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="avatar">
                                <a class="avatar-thumb" href="/friends/13761333">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/default-avatars/a7.jpg" alt="A7">
                                </a>
                                <div class="avatar-ball  text-center">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/default-avatars/a7.jpg" alt="A7">
                                    <a href="/friends/13761333"><h4>冯娟</h4></a>
                                    <p class="text-muted truncate"></p>
                                </div>
                            </div>

                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/1073445107#comments" class="text-muted"><i class="fa fa-comments "></i> 1 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/1073445107/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_1073445107">7</em></a>
                                    <!-- cached_votes_total: 7 ; cached_weighted_total: 106 ; admin_comments_count: 1 -->
                                    <!-- 0.7000000000000001 + 0.3 + 0.6 = 11.500000000000002-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/894166970">
                            <img alt="AutoBot mini" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F894166970%2Fau.jpg">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/894166970">
                                <h4 class="truncate">AutoBot mini</h4>
                            </a>
                            <p class="text-muted truncate">
                                AutoBot mini是全球最小的汽车智能设备
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="avatar">
                                <a class="avatar-thumb" href="/friends/59058434">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073134881%2Fthumb_132.jpeg" alt="Uploads%2fusers%2favatar%2f1073134881%2fthumb 132">
                                </a>
                                <div class="avatar-ball  text-center">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073134881%2Fthumb_132.jpeg" alt="Uploads%2fusers%2favatar%2f1073134881%2fthumb 132">
                                    <a href="/friends/59058434"><h4>陈桦</h4></a>
                                    <p class="text-muted truncate"></p>
                                </div>
                            </div>

                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/894166970#comments" class="text-muted"><i class="fa fa-comments "></i> 0 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/894166970/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_894166970">6</em></a>
                                    <!-- cached_votes_total: 6 ; cached_weighted_total: 109 ; admin_comments_count: 0 -->
                                    <!-- 0.6000000000000001 + 0.0 + 0.6 = 11.5-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/1073445205">
                            <img alt="贱驴007专业有线游戏鼠标" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F1073445205%2Fshubiao.jpg">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/1073445205">
                                <h4 class="truncate">贱驴007专业有线游戏鼠标</h4>
                            </a>
                            <p class="text-muted truncate">
                                满足专业游戏需求，值得收藏的经典
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/1073445205#comments" class="text-muted"><i class="fa fa-comments "></i> 2 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/1073445205/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_1073445205">11</em></a>
                                    <!-- cached_votes_total: 11 ; cached_weighted_total: 110 ; admin_comments_count: 1 -->
                                    <!-- 1.1 + 0.6 + 0.0 = 11.3-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/1073444847">
                            <img alt="金属乐高 Makeblock 机械制作套件" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F1073444847%2F1073444847-_____Makeblock_______-t.jpg">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/1073444847">
                                <h4 class="truncate">金属乐高 Makeblock 机械制作套件</h4>
                            </a>
                            <p class="text-muted truncate">
                                模块化机器人搭建和创意实现平台
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="avatar">
                                <a class="avatar-thumb" href="/friends/65768280">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073131092%2Fthumb_132.jpeg" alt="Uploads%2fusers%2favatar%2f1073131092%2fthumb 132">
                                </a>
                                <div class="avatar-ball  text-center">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073131092%2Fthumb_132.jpeg" alt="Uploads%2fusers%2favatar%2f1073131092%2fthumb 132">
                                    <a href="/friends/65768280"><h4>王建军</h4></a>
                                    <p class="text-muted truncate">Makeblock 创始人</p>
                                </div>
                            </div>

                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/1073444847#comments" class="text-muted"><i class="fa fa-comments "></i> 1 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/1073444847/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_1073444847">3</em></a>
                                    <!-- cached_votes_total: 3 ; cached_weighted_total: 102 ; admin_comments_count: 1 -->
                                    <!-- 0.30000000000000004 + 0.3 + 0.6 = 11.100000000000001-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 product">
                    <div class="product-item thumbnail">
                        <a class="product-item-image" href="/ware/1073444881">
                            <img alt="Ai.Frame智能机器人" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproducts%2F1073444881%2F6.jpg">
                        </a>
                        <div class="caption text-center">
                            <a href="/ware/1073444881">
                                <h4 class="truncate">Ai.Frame智能机器人</h4>
                            </a>
                            <p class="text-muted truncate">
                                Ai.Frame 是一个开源的智能机器人，玩家可以通过游戏手柄、Android手机、PC 控制板和两只机械臂，来控制机器人的动作。
                            </p>
                        </div>
                        <div class="product-item-footer">
                            <div class="avatar">
                                <a class="avatar-thumb" href="/friends/49464612">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073134899%2Fthumb_IMG_0333.JPG" alt="Uploads%2fusers%2favatar%2f1073134899%2fthumb img 0333">
                                </a>
                                <div class="avatar-ball  text-center">
                                    <img class="img-circle" src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073134899%2Fthumb_IMG_0333.JPG" alt="Uploads%2fusers%2favatar%2f1073134899%2fthumb img 0333">
                                    <a href="/friends/49464612"><h4>孫澤波</h4></a>
                                    <p class="text-muted truncate">Ai.Frame 创始人</p>
                                </div>
                            </div>

                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/ware/1073444881#comments" class="text-muted"><i class="fa fa-comments "></i> 0 </a>
                                </div>
                                <div class="like">
                                    <a href="/ware/1073444881/like" class="text-muted "><i class="fa fa-heart "></i> <em class="product_like_count_1073444881">6</em></a>
                                    <!-- cached_votes_total: 6 ; cached_weighted_total: 104 ; admin_comments_count: 0 -->
                                    <!-- 0.6000000000000001 + 0.0 + 0.6 = 11.0-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="load-more"><a rel="next" class="btn btn-block btn-default" data-remote="true" href="/ware?_=1446194667629&amp;page=3">下一页</a></div>
                </div>
            </div>
        </div>
    </div>

@stop