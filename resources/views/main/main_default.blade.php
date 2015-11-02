@extends('main/main')
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
        <li class="msg">
            <a href="/register" >注册</a>
        </li>
    </ul>
@stop