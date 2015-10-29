@extends('app')
@section('header')
    <header id="header" >
        <div class="menu" id="menu">
            <a href="/content">
                <i class="fa fa-paper-plane"></i>
            </a>
        </div>
        <div class="container">
            <div class="pad group">
                <h1 class="site-title">
                    <a >
                        <img src="/img/DavidWang_avatar.png" alt="img">
                    </a>
                </h1>
                <p class="site-description" id="site-description">A Web Developer</p>
            </div>

        </div>
    </header>
@stop

@section('content')

    <article class=" format-standard format-image group">
        <h2 class="post-title pad">
            <a href="/content" rel="bookmark" target="_blank"> Laravel 5系列教程十：实现文章的修改</a>
        </h2><!--/.post-title-->

        <ul class="post-meta pad group">
            <li><i class="fa fa-comments"></i><a target="_blank" href="/content">24 评论</a></li>
            <li><i class="fa fa-eye"></i>491 浏览</li>
            <li><i class="fa fa-clock-o"></i>1月前</li>
            <li><i class="fa fa-tag"></i><a href="https://jellybool.com/tags/php" rel="category tag">php</a></li>
            <li><i class="fa fa-tag"></i><a href="https://jellybool.com/tags/laravel" rel="category tag">laravel</a></li>
        </ul>
        <!--/.post-meta-->

        <div class="post-inner">
            <div class="post-format">
                <div class="image-container">
                    <a href="/content" target="_blank">
                        <img src="/img/test.png" class="attachment-thumb-large" alt="Laravel 5系列教程十：实现文章的修改">
                    </a>
                </div>
            </div>

            <div class="post-deco">
                <div class="hex hex-small">
                    <div class="hex-inner"><i class="fa"></i></div>
                    <div class="corner-1"></div>
                    <div class="corner-2"></div>
                </div>
            </div>
            <!--/.post-deco-->

            <div class="post-content pad">

                <div class="entry custome">

                    原文来自https://laravist.com/article/20
                    Laravist是我刚刚上线的Laravel社区，有任何与Laravel相关的问题可以到这里来问我，我会尽力去帮大家解决问题，后期会尝试录制一些视频教程，形式大概是这样的
                    https://laravist.com/lesson/2
                    我们之前的一系列文章综合起来就实现了一个发布文章的整个流程，但是万一我们需要修改某篇文章的内容呢？我们该如何去实现呢？其实，有了怎么创建一篇文章之后，
                    <p><a href="/content" class="more-link" target="_blank">（更多…）</a></p>
                </div>
                <!--/.entry-->

                <a class="more-link-custom" href="/content" rel="bookmark" target="_blank"><span><i>更多</i></span></a>

            </div>
            <!--/.post-content-->

        </div>
        <!--/.post-inner-->

    </article>
@stop