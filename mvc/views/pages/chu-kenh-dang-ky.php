<?php require_once "./mvc/core/String.php" ?>
<?php require_once "./mvc/core/Config.php" ?>
<div id="view-content-page" class="view-content-page">
	<div class="container" id="columns">
            <div class="breadcrumb clearfix" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" class="agreen" href="/" title="Trở lại trang chủ">Trang chủ<meta itemprop="name" content="sharecode.vn"></a>
                     <meta itemprop="position" content="1">
                </span>
                <span class="navigation-pipe">&nbsp;</span>
                
    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
        <a itemprop="item" class="agreen" href="/dang-ki-tai-khoan.htm" title="Đăng kí tài khoản">
            <h2 class="abread" itemprop="name">Đăng kí tài khoản</h2>
        </a>
        <meta itemprop="position" content="2">
    </span>

            </div>
            
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
            <div id="mainbody_contentbody_Panel1" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'mainbody_contentbody_btnRegister')">
	
                <div class="modal-body reg-border">
                    <div class="row ">
                        <h1 class="col-sm-4 title3 bold line-h">ĐĂNG KÍ TÀI KHOẢN</h1>
                        <div class="col-sm-8 line-h">(Hoặc) Đăng nhập nhanh &nbsp;<a id="mainbody_contentbody_LinkButton2" title="Đăng nhập nhanh bằng tài khoản Facebook" class="loginBtn loginBtn-facebook" href="javascript:__doPostBack('ctl00$ctl00$mainbody$contentbody$LinkButton2','')">Log in</a>&nbsp;<a id="mainbody_contentbody_LinkButton3" title="Đăng nhập nhanh bằng tài khoản Google" class="loginBtn loginBtn-google" href="javascript:__doPostBack('ctl00$ctl00$mainbody$contentbody$LinkButton3','')">Log in</a></div>
                    </div>
                    <div class="line"></div>
                    <br>
                    <div class="row">
                        <h3 class="col-xs-12 title5">Bạn đã có tài khoản 5TUB.COM? <a data-dismiss="modal" data-toggle="modal" data-target="#LoginForm" onclick="createCaptcha();" role="button" class="agreen bold">Đăng nhập ngay</a></h3>
                    </div>
                    <br>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Email <span class="text-error">*</span></label>
                            <div class="col-sm-6">
                                <input name="ctl00$ctl00$mainbody$contentbody$reg_email" type="text" id="mainbody_contentbody_reg_email" placeholder="VD: thanhtam92@gmail.com" maxlength="50" class="form-control">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Password <span class="text-error">*</span></label>
                            <div class="col-sm-6">
                                <input name="ctl00$ctl00$mainbody$contentbody$reg_password" type="password" id="mainbody_contentbody_reg_password" placeholder="******" maxlength="32" autocomplete="off" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Nhập lại Password <span class="text-error">*</span></label>
                            <div class="col-sm-6">
                                <input placeholder="******" name="re_password" id="reg_re_password" maxlength="32" class="form-control" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Họ tên <span class="text-error">*</span></label>
                            <div class="col-sm-6">
                                <input name="ctl00$ctl00$mainbody$contentbody$reg_fullname" type="text" id="mainbody_contentbody_reg_fullname" maxlength="40" placeholder="VD: Trần Thanh Tâm" class="form-control require">
                            </div>
                            <div class="col-sm-3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Tên hiển thị <span class="text-error">*</span></label>
                            <div class="col-sm-6">
                                <input name="ctl00$ctl00$mainbody$contentbody$reg_username" type="text" id="mainbody_contentbody_reg_username" placeholder="VD: ThanhTam92" maxlength="40" class="form-control require">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Số điện thoại <span class="text-error">*</span></label>
                            <div class="col-sm-6">
                                <input name="ctl00$ctl00$mainbody$contentbody$reg_phone" type="text" id="mainbody_contentbody_reg_phone" style="width: 185px;" maxlength="20" placeholder="01..., 08..., 09... or +84..." class="form-control require">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <input name="ctl00$ctl00$mainbody$contentbody$txtCaptcha" type="text" maxlength="4" id="mainbody_contentbody_txtCaptcha" class="form-control alignleft" placeholder="Xác nhận" style="width:90px;">
                                
<script type="text/javascript">
    function createCaptcha() {
        jQuery.ajax({
            type: "POST",
            url: "/Ajax/CreateCaptcha.aspx/CaptchaUrl",
            data: '{}',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            async: false,
            success: function (data) {
                if (data.d != '') {
                    $('.imgCaptcha').attr('src', data.d);
                }
                else
                    $('.imgCaptcha').attr('src', '/Image/captcha.jpg');
            }
        });
    }
</script>
<div style="height: 30px; width: 140px; float: left; margin-left: 10px;">
    <img src="/FilesUpload/Captcha/captcha730.jpg" alt="captcha" class="imgCaptcha" height="30" width="80">
    <div class="aorange" style="float: right; width: 60px; margin-top: 6px; padding-left: 5px;" onclick="return createCaptcha();">
        Mã khác
    </div>
</div>


                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <div class="checkbox">
                                    <label>
                                        <input name="agree" id="chkRequirement" checked="checked" value="1" type="checkbox">
                                        <a href="/quy-dinh-chung.htm" target="_blank" class="aorange" title="Xem điều khoản sử dụng">Tôi đồng ý với điều khoản sử dụng</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-7">
                                <span id="register_error" class="text-error">&nbsp;</span>
                                <span class="text-error" id="reg_error_email">&nbsp;</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-6">
                                <a onclick=" return fosp_register();" id="mainbody_contentbody_btnRegister" class="button-orange" href="javascript:__doPostBack('ctl00$ctl00$mainbody$contentbody$btnRegister','')"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>&nbsp; Đăng kí ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            
</div>
        </div>
    </div>

        </div>
</div>
<div class="clearfix"></div>

