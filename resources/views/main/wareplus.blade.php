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

    <div class="products-collections-index">
        <div class="container">
            <!--     <a href="/wareplus/new" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> <span class="hidden-xs">发布清单</span></a> -->

            <div class="filter">
                <a href="/ware" class="btn btn-primary" role="button"><i class="fa fa-list-ul"></i> 产品</a>
                <form class="form-inline hidden-xs" style="display: inline-block" action="/ware" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="产品搜索..." name="q" value="">
         <span class="input-group-btn">
           <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
         </span>
                    </div>
                </form>    </div>

            <div class="row collections-list">
                <div class="col-md-4 col-sm-6 col-xs-12 collections">
                    <div class="collections-item thumbnail">
                        <div class="collections-item-theme">
                            <a href="/wareplus/126" class="collections-item-image">
                                <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproduct_collections%2F126%2F1435548082426.jpg" alt="Uploads%2fproduct collections%2f126%2f1435548082426">
                            </a>
                            <h4>
                                <a href="/wareplus/126">湾+ 新品每日早报：锤子坚果完了之后，红衣教主也来了</a>
                            </h4>
                        </div>
                        <div class="collections-item-list">
                            <ul>
                                <li class="truncate">格力手机</li>
                                <li class="truncate">PoloTech 智能紧身衣</li>
                                <li class="truncate">IndiniteUSB 拼接 USB 插口</li>
                            </ul>
                        </div>
                        <div class="collections-item-footer">
                            <div class="pull-left">
                                <a href="/wareplus/126" class="text-muted">共 7 个产品</a>
                            </div>
                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/wareplus/126" class="text-muted"><i class="fa fa-comments"></i> 1 </a>
                                </div>
                                <div class="like">
                                    <a href="/login-modal?return_to=like" data-remote="true" class="text-muted "><i class="fa fa-heart"></i>
                                        1</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 collections">
                    <div class="collections-item thumbnail">
                        <div class="collections-item-theme">
                            <a href="/wareplus/125" class="collections-item-image">
                                <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproduct_collections%2F125%2F150e482abf9fef0e3a2037d6ef3414ee.jpg" alt="Uploads%2fproduct collections%2f125%2f150e482abf9fef0e3a2037d6ef3414ee">
                            </a>
                            <h4>
                                <a href="/wareplus/125">董明珠的格力手机上线聚划算，售价 1599 元 | 8 月 4 周新品</a>
                            </h4>
                        </div>
                        <div class="collections-item-list">
                            <ul>
                                <li class="truncate">格力手机</li>
                                <li class="truncate">情·小白：异地恋情侣必备神器</li>
                                <li class="truncate">滴滴测智能耳温计</li>
                            </ul>
                        </div>
                        <div class="collections-item-footer">
                            <div class="pull-left">
                                <a href="/wareplus/125" class="text-muted">共 10 个产品</a>
                            </div>
                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/wareplus/125" class="text-muted"><i class="fa fa-comments"></i> 0 </a>
                                </div>
                                <div class="like">
                                    <a href="/login-modal?return_to=like" data-remote="true" class="text-muted "><i class="fa fa-heart"></i>
                                        0</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 collections">
                    <div class="collections-item thumbnail">
                        <div class="collections-item-theme">
                            <a href="/wareplus/123" class="collections-item-image">
                                <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fproduct_collections%2F123%2F20140610224246_fFuUx.jpg" alt="Uploads%2fproduct collections%2f123%2f20140610224246 ffuux">
                            </a>
                            <h4>
                                <a href="/wareplus/123">湾+ 新品每日早报：Single dog, single dog, single all the day...</a>
                            </h4>
                        </div>
                        <div class="collections-item-list">
                            <ul>
                                <li class="truncate">Buddy 智能宠物项圈</li>
                                <li class="truncate">Disco Dog LED宠物马甲</li>
                                <li class="truncate">CleverPet 宠物训练机</li>
                            </ul>
                        </div>
                        <div class="collections-item-footer">
                            <div class="pull-left">
                                <a href="/wareplus/123" class="text-muted">共 8 个产品</a>
                            </div>
                            <div class="actions pull-right">
                                <div class="comments">
                                    <a href="/wareplus/123" class="text-muted"><i class="fa fa-comments"></i> 4 </a>
                                </div>
                                <div class="like">
                                    <a href="/login-modal?return_to=like" data-remote="true" class="text-muted "><i class="fa fa-heart"></i>
                                        1</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop