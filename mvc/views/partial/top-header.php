<div class="top-header">
                <div class="container">
                    <div class="nav-top-links">
                        <a class="first-item" href="tel:+84981282756" title="Click gọi ngay!">
                            <img alt="hotline" src="https://sharecode.vn/assets/images/phone.png" />0981.282.756</a>
                        <a href="mailto:viettxt@gmail.com" title="Click để gửi email!">
                            <img alt="email sharecode" src="https://sharecode.vn/assets/images/email.png" />viettxt@gmail.com</a>
                        <a href="su-kien/%5bsharecodevn%5d-nang-cap-server-moi-cai-tien-tinh-nang-ho-tro-nguoi-dung--13.html">Sự kiện</a>
                    </div>
                    <?php if(!isset($_SESSION['username'])) {?>
                     <div id="LoginBox" class="support-link">
                        <a data-toggle="modal" data-target="#LoginForm" onclick="createCaptcha();" role="button">Đăng nhập</a>
                        <a href="dang-ky">Đăng kí</a>
                    </div>
                    <div id="user-info-top" class="user-info pull-right">
                    <?php } else { ?>
                    <div id="ExitBox" class="support-link">
                        <a id="btn-exit" class="aorange" href="#">[Thoát]</a>
                    </div>
                    <div id="user-info-top" class="user-info pull-right">
                        <div id="AcInfo" class="dropdown">
                            <a href="/code-upload-cua-toi" id="UserName2" class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Xin chào, </span><span id="txt-username"><b><?php echo $_SESSION['username'] ?></b></span></a>
                            <ul class="dropdown-menu mega_dropdown" role="menu">
                                <li><a href="/code-upload-cua-toi"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;Code tải lên</a></li>
                                <li><a href="/code-da-luu"><i class="fa fa-folder-open" aria-hidden="true"></i>&nbsp;&nbsp;Code đã lưu</a></li>
                                <li><a href="/code-download"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Code đã mua</a></li>
                                <li><a href="/doanh-thu-ban-code"><i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Doanh thu bán code</a></li>
                                <li><a href="/lich-su-giao-dich"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;&nbsp;Lịch sử nạp tiền</a></li>
                                <li><a href="/rut-tien"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Rút tiền</a></li>
                                <li><a href="https://me.sharecode.vn" target="_blank"><i class="fa fa-server" aria-hidden="true"></i>&nbsp;Quản lý Domain - Hosting</a></li>
                                <li><a href="/binh-luan" class="orange"><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;Bình luận</a></li>
                                <li><a href="/thong-tin-ca-nhan" class="green"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Cài đặt thông tin</a></li>
                            </ul>
                        </div>
                        
                    </div>
                    
                    <?php } ?>
                   
                        <div id="AcLogin" class="dropdown">
                            <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="index.html"><span></span></a>
                            <ul class="dropdown-menu mega_dropdown" role="menu">
                                <li><a data-toggle="modal" data-target="#LoginForm" onclick="createCaptcha();" role="button"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Đăng nhập</a></li>
                                <li><a href="dang-ky"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Đăng kí</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
</div>
            <div class="container main-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 logo">
                        <a href="index.html">
                            <img alt="Trang chủ sharecode.vn" title="Sharecode.vn" src="https://sharecode.vn/assets/images/logo.png" /></a>
                    </div>
                    <div class="col-xs-7 col-sm-7 col-md-6 header-search-box">
                        <div class="form-inline search-h">
                            <div id="regPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnSearch&#39;)">

                                <div class="form-group form-category">
                                    <input type="hidden" name="ctl00$hdLangFilter" id="hdLangFilter" />
                                    <select class="select-category" id="slSearch">
                                        <option value="0">TẤT CẢ KÊNH</option>

                                                <option value="1">Review Sản phẩm</option>

                                                <option value="2">Vlog</option>

                                                <option value="3">Ẩm thực</option>

                                                <option value="15">Gym</option>

                                                <option value="16">Hài-parody</option>

                                                <option value="17">Người Nổi Tiếng</option>

                                                <option value="18">Động vật hài hước</option>

                                                <option value="19">Trò đùa - troll</option>

                                                <option value="20">Đập hộp</option>

                                                <option value="21">Hướng dẫn Tutorials</option>

                                                <option value="22">Gaming</option>

                                                <option value="23">Đánh Giá - Reaction</option>

                                                <option value="24">Phim ảnh</option>

                                                <option value="25">Du lịch</option>

                                                <option value="26">Tin học</option>
                                                
                                                <option value="27">Kinh doanh</option>
                                                
                                                <option value="28">Âm nhạc</option>
                                                
                                                <option value="29">Trang điểm, làm đẹp</option>

                                    </select>
                                </div>
                                <div class="form-group input-serach">
                                    <input name="ctl00$txtSearch" type="text" id="txtSearch" class="txt-search txt-auto" placeholder="Nhập Từ khóa (or) Tên kênh" />
                                </div>
                                <a id="btnSearch" class="pull-right btn-search" href="javascript:__doPostBack(&#39;ctl00$btnSearch&#39;,&#39;&#39;)"></a>

</div>
                        </div>
                    </div>
                    <div class="col-xs-5 col-sm-2 col-md-3 shopping-cart-box btn-align">
                       <!--   <a data-toggle="modal" data-target="#LoginForm" onclick="createCaptcha();" role="button" class="button-green" title="Nạp tiền vào tài khoản"><i class="fa fa-money fa-lg" aria-hidden="true"></i>&nbsp; NẠP XU</a>&nbsp;&nbsp;-->
                        <a data-toggle="modal" data-target="#LoginForm" onclick="createCaptcha();" role="button" class="button-orange" title="Tặng thêm 5 Point cho mỗi Upload"><i class="fa fa-cloud-upload fa-lg" aria-hidden="true"></i>&nbsp; ĐĂNG KÊNH</a>
                    </div>
                </div>
            </div>
