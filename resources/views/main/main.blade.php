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
            <ul class="nav navbar-nav">
                <li class=''>
                    <a href="/featured">精选</a>
                </li>
                <li class=''>
                    <a href="/events">活动</a>
                </li>
                <li class=''>
                    <a href="/wareplus">产品</a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li class="msg">
                    <a href="/login" >登录</a>
                </li>
                <li class="msg">
                    <a href="/register" >注册</a>
                </li>
            </ul>
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