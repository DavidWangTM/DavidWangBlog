@extends('main/main')
@section('head_index')

    <ul class="nav navbar-nav">
        <li class=''>
            <a href="/featured">精选</a>
        </li>
        <li class='active'>
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

    <div class="media-wrap white">
        <div class="container ">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 media-list">
                    <h3 class="title" style="padding-bottom:0">
                        所有活动 <em>158 </em>
                        <a href="/events/new" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> <span
                                    class="hidden-xs">发起活动</span></a>

                    </h3>
                    <h5 style="margin-top:0" class="text-muted">
                        分类：
                        <a href="/events?category=78805924" class="btn btn-link">深圳湾夜话</a>
                        <a href="/events?category=78805971" class="btn btn-link">创客之旅</a>
                        <a href="/events?category=78805969" class="btn btn-link">T&amp;F 会员活动</a>
                        <a href="/events?category=78805967" class="btn btn-link">合作伙伴活动</a>
                        <a href="/events?category=78805968" class="btn btn-link">社区自发活动</a>
                        <a href="/events?recommend=true" class="btn btn-link">推荐</a>
                    </h5>

                    <div class="medias media-activity">
                        <div class="media  ">
                            <div class="media-left">
    <span class="time">
      11月
      <em>06日</em>
    </span>
                            </div>
                            <div class="media-body">
                                <i class="icon icon-progress"></i>

                                <div class="tags">
      <span class="label label-primary">
        <a href="/events?category=78805926">深圳湾直航</a>
      </span>

                                    <span class="label label-default"><a
                                                href="/events?tag=%E6%BD%AE%E6%B1%95">潮汕</a></span>
                                    <span class="label label-default"><a
                                                href="/events?tag=%E5%95%86%E6%97%85">商旅</a></span>
                                    <span class="label label-default"><a
                                                href="/events?tag=%E6%96%87%E5%8C%96">文化</a></span>
                                    <span class="label label-default"><a
                                                href="/events?tag=%E5%88%9B%E4%B8%9A">创业</a></span>
                                    <span class="label label-default"><a
                                                href="/events?tag=%E6%B1%95%E5%A4%B4%E5%A4%A7%E5%AD%A6">汕头大学</a></span>
                                </div>
                                <div class="media-heading">
                                    <h4>
                                        <a href="/events/1047030261">50 后创业导师对话 80 后潮人创业家 -- 潮汕两日省亲活动</a>
                                    </h4>
                                </div>
                                <p>
                                    有潮水的地方就有潮汕人，有钱赚的地方就有潮商。潮汕商人与晋商、徽商合称为中国传统三大商帮，经过 500
                                    多年的商业洗礼，潮商已经成为中国实力最大、影响最深远、唯一没有断代的大商帮，是华人世界中最富有的族群。
                                </p>

                                <div class="users">
                                    <a href="/events/1047030261" title="凡"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073130703%2Fthumb_2.pic.jpg"
                                                alt="Uploads%2fusers%2favatar%2f1073130703%2fthumb 2.pic"></a>
                                    <a href="/events/1047030261" title="Catchadmission"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073137841%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073137841%2fthumb 132"></a>
                                    <a href="/events/1047030261" title="于凯鸿"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073135705%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073135705%2fthumb 132"></a>
                                    <a href="/events/1047030261" title="曾健鹏"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073138934%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073138934%2fthumb 132"></a>
                                    <a href="/events/1047030261" title="宏"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073131873%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073131873%2fthumb 132"></a>
                                    <a href="/events/1047030261" title="深圳湾的炫姐姐"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F338640627%2Fthumb_shining_avatar.001.jpg"
                                                alt="Uploads%2fusers%2favatar%2f338640627%2fthumb shining avatar.001"></a>
                                    <a href="/events/1047030261" title="xiaohai582"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073131916%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073131916%2fthumb 132"></a>
                                </div>
                            </div>
                        </div>
                        <div class="media  ">
                            <div class="media-left">
    <span class="time">
      11月
      <em>04日</em>
    </span>
                            </div>
                            <div class="media-body">
                                <i class="icon icon-progress"></i>

                                <div class="tags">
      <span class="label label-primary">
        <a href="/events?category=78805927">深圳湾课堂</a>
      </span>

                                    <span class="label label-default"><a href="/events?tag=%E5%8D%8A%E5%AF%BC%E4%BD%93">半导体</a></span>
                                    <span class="label label-default"><a href="/events?tag=%E8%AE%A1%E7%AE%97%E6%9C%BA">计算机</a></span>
                                    <span class="label label-default"><a
                                                href="/events?tag=%E6%83%A0%E6%99%AE">惠普</a></span>
                                    <span class="label label-default"><a
                                                href="/events?tag=%E5%BE%B7%E5%B7%9E%E4%BB%AA%E5%99%A8">德州仪器</a></span>
                                </div>
                                <div class="media-heading">
                                    <h4>
                                        <a href="/events/1047030249">深圳湾课堂：智能硬件初创企业的产业分析及生态系统构建（深圳湾携手众创空间伙伴 - 第二站 @
                                            华强北国际创客空间）</a>
                                    </h4>
                                </div>
                                <p>
                                    过去在惠普和德州仪器的经历，让我亲历了在计算机以及半导体行业的过去与现在。其实计算机和半导体还有很像的地方，都是通用产品，可以用在各行各业，金融、教育、电子、食品、化工、医药都会用到计算机。同样半导体也是一样，CPU
                                    渗透到各行各业，无论是 COMMUNICATION ENGINE, OPERATION ENGINE 都需要 PROCESSOR。
                                </p>

                                <div class="users">
                                    <a href="/events/1047030249" title="海涛"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073137271%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073137271%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="一棵草"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073132490%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073132490%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="斌"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073136722%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073136722%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="swee"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073131241%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073131241%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="流浪的瀑布"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073133207%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073133207%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="Terry朱"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073137243%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073137243%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="唐可信"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073130897%2Fthumb_IMG_20150527_205114.jpg"
                                                alt="Uploads%2fusers%2favatar%2f1073130897%2fthumb img 20150527 205114"></a>
                                    <a href="/events/1047030249" title="李昌雷"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073136260%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073136260%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="童家威"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073131686%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073131686%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="黄炜中"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073131261%2Fthumb_T_F____-___.jpg"
                                                alt="Uploads%2fusers%2favatar%2f1073131261%2fthumb t f        "></a>
                                    <a href="/events/1047030249" title="黄耀华"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073136976%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073136976%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="太火鸟 铟立方未来实验室  小麦"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073131829%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073131829%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="吴贤Sage"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073133710%2Fthumb______.jpg"
                                                alt="Uploads%2fusers%2favatar%2f1073133710%2fthumb      "></a>
                                    <a href="/events/1047030249" title="义无反顾"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073137458%2Fthumb___.JPG"
                                                alt="Uploads%2fusers%2favatar%2f1073137458%2fthumb   "></a>
                                    <a href="/events/1047030249" title="飞飞"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073135831%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073135831%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="侯亮/LEON"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073137065%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073137065%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="黄永林(DavidHuang)"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073135942%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073135942%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="Wang"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073134184%2Fthumb_132.jpeg"
                                                alt="Uploads%2fusers%2favatar%2f1073134184%2fthumb 132"></a>
                                    <a href="/events/1047030249" title="凡"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073130703%2Fthumb_2.pic.jpg"
                                                alt="Uploads%2fusers%2favatar%2f1073130703%2fthumb 2.pic"></a>
                                    <a href="/events/1047030249" title="yeah!"><img
                                                src="http://7xi85d.com2.z0.glb.qiniucdn.com/uploads%2Fusers%2Favatar%2F1073136325%2Fthumb_IMG_20150405_092943.jpg"
                                                alt="Uploads%2fusers%2favatar%2f1073136325%2fthumb img 20150405 092943"></a>
                                    <a href="/events/1047030249" class="more">
                                        <i class="icon icon-dots"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

@stop