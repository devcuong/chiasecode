<?php require_once "./mvc/core/String.php"?>
<?php require_once "./mvc/core/Config.php"?>
<div id="view-content-page" class="view-content-page">
	<div class="container" id="columns">
		<div class="breadcrumb clearfix" itemscope=""
			itemtype="http://schema.org/BreadcrumbList">
			<span itemprop="itemListElement" itemscope=""
				itemtype="http://schema.org/ListItem"> <a itemprop="item"
				class="agreen" href="/" title="Trở lại trang chủ">Trang chủ
					<meta itemprop="name" content="sharecode.vn">
			</a>
				<meta itemprop="position" content="1">
			</span> <span class="navigation-pipe">&nbsp;</span>
			<form action="<?php echo $servername ?>/chu-kenh-dang-ky"
				method="post">
				<span itemprop="itemListElement" itemscope=""
					itemtype="http://schema.org/ListItem"> <a itemprop="item"
					class="agreen" href="/dang-ki-tai-khoan.htm"
					title="Đăng kí tài khoản">
						<h2 class="abread" itemprop="name">Đăng kí tài khoản</h2>
				</a>
					<meta itemprop="position" content="2">
				</span>
		
		</div>
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<div id="mainbody_contentbody_Panel1">
					<div class="modal-body reg-border">
						<div class="row ">
							<h1 class="col-sm-4 title3 bold line-h">ĐĂNG KÍ TÀI KHOẢN</h1>
							<div class="col-sm-8 line-h">
								(Hoặc) Đăng nhập nhanh &nbsp;<a
									title="Đăng nhập nhanh bằng tài khoản Facebook"
									class="loginBtn loginBtn-facebook">Log in</a>&nbsp;<a
									id="mainbody_contentbody_LinkButton3"
									title="Đăng nhập nhanh bằng tài khoản Google"
									class="loginBtn loginBtn-google">Log in</a>
							</div>
						</div>
						<div class="line"></div>
						<br>
						<div class="row">
							<h3 class="col-xs-12 title5">
								Bạn đã có tài khoản 5TUB.COM? <a data-dismiss="modal"
									data-toggle="modal" data-target="#LoginForm"
									onclick="createCaptcha();" role="button" class="agreen bold">Đăng
									nhập ngay</a>
							</h3>
						</div>
						<br>
						<div class="form-horizontal">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Email <span
									class="text-error">*</span></label>
								<div class="col-sm-6">
									<input name="email-dang-ky" type="text" id="email-dang-ky"
										placeholder="VD: trantam92@gmail.com" maxlength="50"
										class="form-control">
								</div>

							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">Password
									<span class="text-error">*</span>
								</label>
								<div class="col-sm-6">
									<input name="password-dang-ky" type="password"
										id="password-dang-ky" placeholder="******" maxlength="32"
										autocomplete="off" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Nhập lại Password <span
									class="text-error">*</span>
								</label>
								<div class="col-sm-6">
									<input placeholder="******" name="password-nhap-lai"
										id="password-nhap-lai" maxlength="32" class="form-control"
										type="password">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Họ
									tên <span class="text-error">*</span>
								</label>
								<div class="col-sm-6">
									<input name="ho-ten-dang-ky" type="text"
										id="ho-ten-dang-ky" maxlength="40"
										placeholder="VD: Trần Sỹ Tâm" class="form-control require">
								</div>
								<div class="col-sm-3"></div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">Tên
									hiển thị <span class="text-error">*</span>
								</label>
								<div class="col-sm-6">
									<input name="ten-hien-thi" type="text"
										id="mainbody_contentbody_reg_username"
										placeholder="VD: TranTam92" maxlength="40"
										class="form-control require">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">Số
									điện thoại <span class="text-error">*</span>
								</label>
								<div class="col-sm-6">
									<input name="sdt-dang-ky" type="text" style="width: 185px;"
										maxlength="20" placeholder="01..., 08..., 09... or +84..."
										class="form-control require">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-8">
									<div class="checkbox">
										<label> <input name="agree" id="chkRequirement"
											checked="checked" value="1" type="checkbox"> <a
											href="quy-dinh-chung" target="_blank" class="aorange"
											title="Xem điều khoản sử dụng">Tôi đồng ý với điều khoản sử
												dụng</a>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-7">
									<span id="register_error" class="text-error">&nbsp;</span> <span
										class="text-error" id="reg_error_email">&nbsp;</span>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-6">
									<button type="submit" name="btn-dang-ky-ngay"
										class="btn btn-primary">Đăng ký ngay</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		</form>
	</div>
</div>
<div class="clearfix"></div>

