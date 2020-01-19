<div id="header" class="header">
            <?php require_once 'mvc/views/partial/top-header.php'; ?>
            <div id="nav-top-menu" class="nav-top-menu">
                <div class="container">
                    <div class="row">
                        <!-- 					vertical menu -->
						<?php require_once 'mvc/views/partial/vertical-menu.php'; ?>
                        <?php require_once 'mvc/views/partial/horizontal-menu.php'; ?>
                    </div>
                    <div id="form-search-opntop">
                    </div>
                    <div id="user-info-opntop">
                    </div>

                </div>
            </div>
        </div>
<div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header popup_header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p class="modal-title text-center" id="myModalLabel">SHARECODE.VN</p>
                    </div>
                    <div id="loginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnLogin&#39;)">

                        <div class="modal-body">
                            <div class="row line-h">
                                <div class="col-sm-4 title3 bold">ĐĂNG NHẬP</div>
                                <div class="col-sm-8">(Hoặc) Đăng nhập &nbsp;<a title="Đăng nhập nhanh bằng tài khoản Facebook" class="loginBtn loginBtn-facebook" href="javascript:__doPostBack(&#39;ctl00$ctl23&#39;,&#39;&#39;)">Log in</a>&nbsp;<a id="LinkButton1" title="Đăng nhập nhanh bằng tài khoản Google" class="loginBtn loginBtn-google" href="javascript:__doPostBack(&#39;ctl00$LinkButton1&#39;,&#39;&#39;)">Log in</a></div>
                            </div>
                            <div class="line"></div>
                            <br />
                            <div class="row">
                                <div class="col-xs-12">Bạn chưa có tài khoản ShareCode.vn? <a href="dang-ki-tai-khoan.html" class="agreen bold">Đăng ký ngay</a></div>
                            </div>
                            <br />
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Email <span class="text-error">*</span></label>
                                    <div class="col-sm-6">
                                        <input name="ctl00$log_username" type="text" id="log_username" maxlength="50" placeholder="Vui lòng nhập email" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-4 control-label">Password <span class="text-error">*</span></label>
                                    <div class="col-sm-6">
                                        <input name="ctl00$log_password" type="password" id="log_password" placeholder="******" class="form-control" />
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-6">
                                         <input name="ctl00$txtCaptcha" type="text" maxlength="4" id="txtCaptcha" class="form-control alignleft" placeholder="Xác nhận" style="width:90px;" />
<div style="height: 30px; width: 140px; float: left; margin-left: 10px;">
    <img src="assets/images/captcha.jpg" alt="captcha" class="imgCaptcha" height="30" width="80" />
    <div class="aorange" style="float: right; width: 60px; margin-top: 6px; padding-left: 5px;"
        onclick="return createCaptcha();">
        Mã khác
    </div>
</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-6">

                                        <a href="quen-mat-khau.html" target="_blank" class="aorange">Quên mật khẩu?</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-6">
                                        <div class="text-error" id="login_error">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-6">
                                        <a onclick="return fosp_login();" id="btnLogin" class="button-orange" href="javascript:__doPostBack(&#39;ctl00$btnLogin&#39;,&#39;&#39;)"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i>&nbsp; Đăng nhập</a>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
                    <div class="line_orn"></div>
                    <div class="modal-footer">
                        <p class="text-center">ShareCode.vn Cộng đồng chia sẻ và download source code</p>
                    </div>
                </div>
            </div>
        </div>
<div id="home-slider" class="page-home">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 slider-left"></div>
                <div class="col-sm-9 header-top-right">
                    <div class="homeslider">
                        <div class="content-slide">
                            <ul id="contenhomeslider">
                                <li>
                                    <img alt="sharecode cộng đồng download source code" src="https://sharecode.vn/assets/images/share-code-1.jpg" title="Thư viện download code hàng đầu Việt Nam - Upload mỗi ngày!" /></li>

                                <li>
                                    <img alt="Phân biệt sharecode.vn và topcode.vn" src="https://sharecode.vn/assets/images/Sharecode-vs-topcode.jpg" title="Sharecode.vn thư viện code tham khảo và Topcode.vn sàn code chất lượng cao" /></li>

                            </ul>
                        </div>
                    </div>
                    <div class="header-banner banner-opacity">
  
<div class="col-md-12 log_re">
 

</div>
<div class="col-md-12 action">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIzYdqdauBtfK-Myv1GJ2yFbab1FuJymYNhKjDlygJ2vnHOlFb&s" alt="">
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
