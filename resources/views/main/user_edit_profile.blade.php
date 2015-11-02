@extends('main/main_default')
@section('content')

    <div class="container">
        <div class="setting col-md-8 col-md-offset-2">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#">个人资料</a>
                </li>
                <li role="presentation">
                    <a href="/users/edit_password">修改密码</a>
                </li>

            </ul>
            <form class="form-horizontal" id="edit_user_1073139128" enctype="multipart/form-data" action="/users/1073139128" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="mz8xxHSU4CHxXxmoZAJwF7R3yxeK7FQcQWFG9KtWS6GO524stM+tT5R3//HZiaKd+5ZjO7uiJjx4ZvoaY1OUWA==">

                <div class="form-group form-avatar">
                    <label class="col-sm-2 col-sm-offset-1 control-label">头像</label>
                    <div class="col-sm-6">
                        <img id="preview" src="http://7xi85d.com2.z0.glb.qiniucdn.com/default-avatars/c9.jpg" alt="C9">
                        <div href="###" class="btn btn-primary btn-sm">选择文件 <input type="file" name="user[avatar]" id="user_avatar"></div>
                        <p class="help-block" style="margin-bottom: 0">不超过4M的jpg、jpeg、gif、png文件，保存后生效。</p>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-offset-1 control-label">昵称</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="user[nick_name]" id="user_nick_name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-offset-1 control-label">用户名</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="user[user_name]" id="user_user_name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2  col-sm-offset-1 control-label">邮箱</label>
                    <div class="col-sm-6">
                        <input class="form-control" required="required" type="text" value="232190315@qq.com" name="user[email]" id="user_email">
                    </div>
                    <div class="col-sm-2 help-text">
                        <em>* 必填</em>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2  col-sm-offset-1 control-label">一句话介绍</label>
                    <div class="col-sm-6">
                        <input class="form-control" required="required" placeholder="用一句话让大家快速了解您" type="text" name="user[intro]" id="user_intro">
                    </div>
                    <div class="col-sm-2 help-text">
                        <em>* 必填</em>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2  col-sm-offset-1 control-label">姓名</label>
                    <div class="col-sm-6">
                        <input class="form-control" placeholder="方便您的潜在商业伙伴联系您" type="text" name="user[real_name]" id="user_real_name">
                    </div>
                </div>
                <div class="form-group form-gender">
                    <label class="col-sm-2  col-sm-offset-1 control-label">性别</label>
                    <div class="col-sm-6">
                        <div class="publish">
                            <div class="btn-group btn-group-justified">
                                <a class="btn btn-default" id="btn_gender_male">男</a>
                                <a class="btn btn-default" id="btn_gender_female">女</a>
                            </div>
                            <input type="hidden" name="user[sex]" id="user_sex">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-offset-1 control-label">手机</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="user[phone]" id="user_phone">
                    </div>
                </div>
                <div class="form-group form-gender">
                    <label class="col-sm-2  col-sm-offset-1 control-label">专业领域</label>
                    <div class="col-sm-6">
                        <input name="user[field_ids][]" type="hidden" value=""><div class="select2-container select2-container-multi select2" id="s2id_user_field_ids"><ul class="select2-choices">  <li class="select2-search-field">    <label for="s2id_autogen1" class="select2-offscreen"></label>    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" id="s2id_autogen1" placeholder="" style="width: 20px;">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none">   <ul class="select2-results">   <li class="select2-no-results">没有找到匹配项</li></ul></div></div><select multiple="multiple" class="select2" name="user[field_ids][]" id="user_field_ids" tabindex="-1" style="display: none;"><option value="8">市场营销</option>
                            <option value="9"> 内容1</option>
                            <option value="11">内容2</option>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-offset-1 control-label">个人详细介绍</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" cols="30" rows="10" name="user[bio]" id="user_bio"></textarea>
                        <p class="help-block" style="margin-bottom: 0">字数限制为500</p>
                    </div>
                    <div class="form-btn col-sm-6  col-sm-offset-3">
                        <input type="submit" name="commit" value="保存" class="btn btn-primary">
                    </div>
                </div></form>

        </div>
    </div>

@stop