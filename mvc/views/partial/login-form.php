<div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header popup_header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p class="modal-title text-center" id="myModalLabel">CODE4V.COM</p>
                    </div>
                    <div id="loginPanel">
                        <div class="modal-body">
                            <div class="row line-h">
                                <div class="col-sm-4 title3 bold">ĐĂNG NHẬP</div>
                                <div class="col-sm-8">(Hoặc) Đăng nhập &nbsp;<a title="Đăng nhập nhanh bằng tài khoản Facebook" class="loginBtn loginBtn-facebook" href="#">Log in</a>&nbsp;<a id="LinkButton1" title="Đăng nhập nhanh bằng tài khoản Google" class="loginBtn loginBtn-google" href="#">Log in</a></div>
                            </div>
                            <div class="line"></div>
                            <br />
                            <div class="row">
                                <div class="col-xs-12">Bạn chưa có tài khoản CODE4V.COM? <a href="dang-ki-tai-khoan.html" class="agreen bold">Đăng ký ngay</a></div>
                            </div>
                            <br />
                           <form action="<?php echo $servername ?>/api/ThanhVienDangNhap"
				method="post" id="frm-dang-nhap" name="frm-dang-nhap" enctype="multipart/form-data">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Email <span class="text-error">*</span></label>
                                        <div class="col-sm-6">
                                            <input name="log-email" type="text" id="log-email" maxlength="50" placeholder="Vui lòng nhập email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Password <span class="text-error">*</span></label>
                                        <div class="col-sm-6">
                                            <input name="log-password" type="password" id="log-password" placeholder="******" class="form-control" />
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
                                            <button type="button" id="btn-login" class="button-orange"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i>&nbsp; Đăng nhập</button>
                                        </div>
                                    </div>
                                </div>
                             </form>
                        </div>
</div>
                    <div class="line_orn"></div>
                    <div class="modal-footer">
                        <p class="text-center">CODE4V.COM Cộng đồng chia sẻ và download source code</p>
                    </div>
                </div>
            </div>
        </div>
