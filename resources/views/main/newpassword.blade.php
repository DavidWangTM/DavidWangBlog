@extends('main/main')
@section('content')

    <div class="container">
        <div class="setting col-md-8 col-md-offset-2">
            <!-- Nav tabs -->s
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#">申请重置密码</a>
                </li>

            </ul>
            <form class="form-horizontal" id="new_user" action="/password" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="xtRyKMkFHPFNlscCOaTx4T3eBemLtyqAnH05TJlScvCEqM1MIxzoJJYwWePL5XP7joh/uqDdagVVMp530Pqiqg==">
                <div class="form-group">
                    <label class="col-sm-2  col-sm-offset-1 control-label">Email</label>
                    <div class="col-sm-6">
                        <input placeholder="请输入要重置密码的邮箱地址" autofocus="autofocus" class="form-control" type="email" name="user[email]" id="user_email">
                    </div>
                </div>
                <div class="form-btn col-sm-6">
                    <input type="submit" name="commit" value="发送重置指示" class="btn btn-primary">
                </div>
            </form>  </div>
    </div>
@stop