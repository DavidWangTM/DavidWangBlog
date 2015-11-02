@extends('main/main_default')
@section('content')

    <div class="container">
        <div class="setting col-md-8 col-md-offset-2">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation">
                    <a href="/users/edit_profile">个人资料</a>
                </li>
                <li role="presentation" class="active">
                    <a href="#">修改密码</a>
                </li>

            </ul>
            <form class="form-horizontal" id="edit_user_1073139128" action="/users/1073139128/update_password" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="9+YOs//+RxcpyBmWqj7E1+MfqPZ/v/HMMAGvYQocToviPlFbP6UKeUzg/88XtRZdrP4A2k7xg+wJBhOPwhmRcg==">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-offset-1 control-label">原密码</label>
                    <div class="col-sm-6">
                        <input autofocus="autofocus" autocomplete="off" class="form-control" type="password" name="user[current_password]" id="user_current_password">
                    </div>
                    <div class="col-sm-2 help-text">
                        <em>* 必填</em>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2  col-sm-offset-1 control-label">新密码</label>
                    <div class="col-sm-6">
                        <input autocomplete="off" class="form-control" placeholder="密码（最少8位）" type="password" name="user[password]" id="user_password">
                    </div>
                    <div class="col-sm-2 help-text">
                        <em>* 必填</em>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2  col-sm-offset-1 control-label">确认密码</label>
                    <div class="col-sm-6">
                        <input autocomplete="off" class="form-control" placeholder="再次输入密码" type="password" name="user[password_confirmation]" id="user_password_confirmation">
                    </div>
                    <div class="col-sm-2 help-text">
                        <em>* 必填</em>
                    </div>
                </div>
                <div class="form-btn col-sm-6  col-sm-offset-3">
                    <input type="submit" name="commit" value="保存" class="btn btn-primary">
                </div>
            </form>  </div>

    </div>

@stop