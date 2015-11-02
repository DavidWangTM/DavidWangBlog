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
        <li class="msg">
            <a href="/login" >登录</a>
        </li>
        <li class="msg active">
            <a href="/register" >注册</a>
        </li>
    </ul>
@stop

@section('content')

    <div class="row modal-index">
        <div class="setting col-md-6 col-md-offset-3">

            <div class="modal-body" style="background: none">
                <h4 class="modal-title" style="margin-bottom: 40px">注册 DavidWangBlog</h4>
                <form class="new_user" id="new_user" action="/" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="zXHaXgQMRUnpGEaXMhnMzNv4hwTIAKnBpU9dQAUpeCyPDWU67hWxnDK+2HbAWE7WaK79V+Nq6URsAPp7TIGodg==">
                    <div class="form-together">
                        <div class="form-group">
                            <input autofocus="autofocus" class="form-control" placeholder="邮箱" type="email" name="user[email]" id="user_email"></div>
                        <div class="form-group">
                            <input autocomplete="off" class="form-control" placeholder="密码（最少8位）" type="password" name="user[password]" id="user_password"></div>
                        <div class="form-group">
                            <input autocomplete="off" class="form-control" placeholder="再次输入密码" type="password" name="user[password_confirmation]" id="user_password_confirmation"></div>
                    </div>
                    <p>
                        继续注册代表您同意 DavidWangBlog 的
                        <a href="/agreement">用户协议</a>
                    </p>
                    <div class="form-group">
                        <input type="submit" name="commit" value="注册" class="btn btn-primary btn-block"></div>
                </form></div>
            <div class="modal-footer" style="background: none">
                <p>
                    已有账号？
                    <a href="/login">立即登录</a>
                </p>
            </div>
        </div>

    </div>
@stop