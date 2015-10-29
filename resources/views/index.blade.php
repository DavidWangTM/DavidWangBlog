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
<body class="index" style="padding-top: 0px;">
<div class="jumbotron">
    <div id="particle"><canvas class="pg-canvas" width="1282" height="625"></canvas></div>
    <div id="particle2"><canvas class="pg-canvas" width="1282" height="625"></canvas></div>

    <div class="container" style="padding-top: 150px;">

        <p class="text-center">
            「DavidWang」一个默默无闻的程序员
        </p>
        <p class="text-center">
            带着梦希望逃脱世俗的限制，过自己想要的生活。
        </p>

        <p class="text-center">
            希望飞的越来越高，站在屋顶看世界的风景。
        </p>

    </div>
</div>

<script>
    window.onload = function () {

        $('#particle').particleground({
            dotColor: '#fff',
            lineColor: '#fff',
            density:56000,
            particleRadius:10,
            directionX:'center',
            directionY:'center',
            proximity:200,

        });
        $('#particle2').particleground({
            dotColor: '#fff',
            lineColor: '#fff',
            density:60000,
            particleRadius:8,
            directionX:'center',
            directionY:'center',
            proximity:200,

        });

        $("#login-modal").on('show.bs.modal', function (e) {
            $("#register-modal").modal("hide");
        });
        $("#register-modal").on('show.bs.modal', function (e) {
            $("#login-modal").modal("hide");
        });
    }

</script>

<div class="place-to-user"></div>
<div class="user-to-registration"></div>


<div class="slider">
    <div class="container ">
        <div class="row text-center">
            <div class="col-md-6">
                <dl>
                    <dt>
                        <span>活动</span>
                    </dt>
                    <dd>
                        <ul>
                            <li>
                                <a href="http://www.shenzhenware.com/events/1047030261">内容1...</a>
                            </li>
                            <li>
                                <a href="http://www.shenzhenware.com/events/1047030249">内容2...</a>
                            </li>
                            <li>
                                <a href="http://www.shenzhenware.com/events/1047030250">内容3...</a>
                            </li>
                            <li>
                                <a href="http://www.shenzhenware.com/events/1047030103">内容4...</a>
                            </li>
                            <li>
                                <a href="http://www.shenzhenware.com/events/1047030269">内容5....</a>
                            </li>
                        </ul>
                    </dd>
                </dl>
            </div>

            <div class="col-md-6">
                <dl>
                    <dt>
                        <span>精选</span>
                    </dt>
                    <dd>
                        <ul>
                            <li>
                                <a href="">精选1</a>
                            </li>
                            <li>
                                <a href="">精选2...</a>
                            </li>
                            <li>
                                <a href="">精选3...</a>
                            </li>
                            <li>
                                <a href="">精选4.。</a>
                            </li>
                            <li>
                                <a href="">精选5.。</a>
                            </li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>

<div class="footer-link">
    <div class="container">
        <p class="pull-left link">
            <a href="">关于我</a>
            <a href="">我想.</a>
            <a href="">我在想.</a>
            <a href="">我想不出.</a>
            <a href="">ing...</a>
        </p>

        <p class="pull-right contact">
            <a href="javascript:;">
                <i class="icon icon-weixin"></i>
                <img width="155px" src="/img/qc.png" alt="Qrcode"></a>
            <a href="https://github.com/DavidWangTM">
                <i class="icon icon-weibo"></i>
            </a>
        </p>

    </div>
</div>
<div class="copyright">Copyright © 2015 DavidWang   XXXX备案信息</div>

</body>
</html>