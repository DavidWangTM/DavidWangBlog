<!DOCTYPE html>
<html >
<!-- saved from url=(0028)http://www.davidwang.com/ -->
<head lang="zh-CN">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>DavidWang.com</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="/js/canvas.js"></script>
    <link rel="stylesheet" media="all" href="/css/index.css">
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navMenu">

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img alt="DavidWang" style="width: 42px; height: 42px;" src="">
           <span class="mobile">
             <img alt="DavidWang" style="width: 42px; height: 42px;" src="">
          </span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navMenu">
            @yield('head_index')
            @if(Auth::check())
                <ul class="nav-operate">
                    <li class="msg dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon icon-msg"></i>
                            <span>消息</span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="uc" role="presentation">
                                <a role="menuitem" tabindex="-1" href="/user_center/notifications">站内通知</a>
                            </li>
                            <li class="divider"></li>
                            <li class="uc" role="presentation">
                                <a role="menuitem" tabindex="-1" href="/user_center/conversations">私信</a></li>
                        </ul>
                    </li>
                    <li class="user dropdown open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <img src="http://7xi85d.com2.z0.glb.qiniucdn.com/default-avatars/c9.jpg" alt="C9">
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="divider"></li>
                            <li class="uc" role="presentation">
                                <a role="menuitem" tabindex="-1" href="/user_center"><span>用户中心</span><img src="http://7xi85d.com2.z0.glb.qiniucdn.com/default-avatars/c9.jpg" alt="C9"></a>
                            </li>
                            <li class="divider"></li>
                            <li class="uc" role="presentation">
                                <a role="menuitem" tabindex="-1" href="/logout" data-method="delete"><span>注销</span>
                                    <img alt="深圳湾" src="http://7xi85d.com2.z0.glb.qiniucdn.com/assets/icon-shutdown-9b5c62a39ed8e2767449d0f05effef27.png">
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            @else
                @yield('login_register_index')
            @endif

        </div>
    </div>
</nav>

@yield('content')

<div class="footer-link">
    <div class="container">
        <p class="pull-left link">
            <a href="">关于我</a>
            <a href="">我想.</a>
            <a href="">我在想.</a>
            <a href="">我想不出.</a>
            <a href="">ing...</a>
        </p>

        {{--<p class="pull-right contact">--}}
        {{--<a href="javascript:;">--}}
        {{--<i class="icon icon-weixin"></i>--}}
        {{--<img width="155px" src="/img/qc.png" alt="Qrcode"></a>--}}
        {{--<a href="https://github.com/DavidWangTM">--}}
        {{--<i class="icon icon-"></i>--}}
        {{--</a>--}}
        {{--</p>--}}

    </div>
</div>
<div class="copyright">Copyright © 2015 DavidWang   XXXX备案信息</div>

</body>
</html>