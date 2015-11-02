@extends('main.main')
@section('head_index')
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
@stop
@section('login_register_index')
    <ul class="nav navbar-nav pull-right">
        <li class="msg active">
            <a href="/login" >登录</a>
        </li>
        <li class="msg">
            <a href="/register" >注册</a>
        </li>
    </ul>
@stop

@section('content')

    <div class="row modal-index">
        <div class="setting col-md-6 col-md-offset-3">

            <div class="modal-body" style="background: none">
                <h4 class="modal-title" style="margin-bottom: 40px">登陆 DavidWangBlog</h4>
                <form class="new_user" id="new_user" action="/" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="zXHaXgQMRUnpGEaXMhnMzNv4hwTIAKnBpU9dQAUpeCyPDWU67hWxnDK+2HbAWE7WaK79V+Nq6URsAPp7TIGodg==">
                    <div class="form-together">
                        <div class="form-group">
                            <input autofocus="autofocus" class="form-control" placeholder="邮箱" type="email" name="user[email]" id="user_email"></div>
                        <div class="form-group">
                            <input autocomplete="off" class="form-control" placeholder="密码（最少8位）" type="password" name="user[password]" id="user_password"></div>

                    </div>
                    <p>
                        <input name="user[remember_me]" type="hidden" value="0"><input type="checkbox" value="1" name="user[remember_me]" id="user_remember_me">
                        <label for="user_remember_me">记住我</label></p>
                    <input type="submit" name="commit" value="登 录" data-disable-with="正在提交..." class="btn btn-primary btn-block">
                </form>
            </div>
            <div class="modal-footer" style="background: none; padding: 30px 50px;">
                <p class="text-center">
                    <a href="/newpassword" }="">忘记密码？</a>
                    |
                    <a href="/register">账号注册</a>
                </p>
            </div>
        </div>

    </div>

@stop