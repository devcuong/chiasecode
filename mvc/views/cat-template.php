<?php require_once 'mvc/views/partial/head-html.php'; ?>
<body class="category-page">
		<div id="header" class="header">
			<?php require_once 'mvc/views/partial/top-header.php'; ?>
			<div id="nav-top-menu" class="nav-top-menu">
				<div class="container">
					<div class="row">
                        <!-- vertical menu -->
						<?php require_once 'mvc/views/partial/vertical-menu.php'; ?>
						<?php require_once 'mvc/views/partial/horizontal-menu.php'; ?>
					</div>
					<div id="form-search-opntop"></div>
					<div id="user-info-opntop"></div>

				</div>
			</div>
		</div>
		<div class="modal fade" id="LoginForm" tabindex="-1" role="dialog"
			aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header popup_header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<p class="modal-title text-center" id="myModalLabel">CODE4V.COM</p>
					</div>
					<div id="loginPanel"
						onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnLogin&#39;)">

						<div class="modal-body">
							<div class="row line-h">
								<div class="col-sm-4 title3 bold">ĐĂNG NHẬP</div>
								<div class="col-sm-8">
									(Hoặc) Đăng nhập &nbsp;<a
										title="Đăng nhập nhanh bằng tài khoản Facebook"
										class="loginBtn loginBtn-facebook"
										href="javascript:__doPostBack(&#39;ctl00$ctl00$ctl00$ctl23&#39;,&#39;&#39;)">Log
										in</a>&nbsp;<a id="LinkButton1"
										title="Đăng nhập nhanh bằng tài khoản Google"
										class="loginBtn loginBtn-google"
										href="javascript:__doPostBack(&#39;ctl00$ctl00$ctl00$LinkButton1&#39;,&#39;&#39;)">Log
										in</a>
								</div>
							</div>
							<div class="line"></div>
							<br />
							<div class="row">
								<div class="col-xs-12">
									Bạn chưa có tài khoản CODE4V.COM? <a
										href="../dang-ki-tai-khoan.html" class="agreen bold">Đăng ký
										ngay</a>
								</div>
							</div>
							<br />
							<div class="form-horizontal">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-4 control-label">Email <span
										class="text-error">*</span></label>
									<div class="col-sm-6">
										<input name="ctl00$ctl00$ctl00$log_username" type="text"
											id="log_username" maxlength="50"
											placeholder="Vui lòng nhập email" class="form-control" />
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-4 control-label">Password
										<span class="text-error">*</span>
									</label>
									<div class="col-sm-6">
										<input name="ctl00$ctl00$ctl00$log_password" type="password"
											id="log_password" placeholder="******" class="form-control" />
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-4 col-sm-6">

										<a href="../quen-mat-khau.html" target="_blank"
											class="aorange">Quên mật khẩu?</a>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-4 col-sm-6">
										<div class="text-error" id="login_error">&nbsp;</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-4 col-sm-6">
										<a onclick="return fosp_login();" id="btnLogin"
											class="button-orange"
											href="javascript:__doPostBack(&#39;ctl00$ctl00$ctl00$btnLogin&#39;,&#39;&#39;)"><i
											class="fa fa-sign-in fa-lg" aria-hidden="true"></i>&nbsp;
											Đăng nhập</a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="line_orn"></div>
					<div class="modal-footer">
						<p class="text-center"></p>
					</div>
				</div>
			</div>
		</div>
		<div class="columns-container">
			<div class="container" id="columns">
				<div class="row">
					<div class="center_column col-xs-12 col-sm-12" id="center_column">
							<div id="mainbody_contentbody_contentpage_upPannel">
								<a id="mainbody_contentbody_contentpage_btnViewBase"
									href="javascript:__doPostBack(&#39;ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnViewBase&#39;,&#39;&#39;)"></a>
								<a id="mainbody_contentbody_contentpage_bntViewDetail"
									href="javascript:__doPostBack(&#39;ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$bntViewDetail&#39;,&#39;&#39;)"></a>
								<?php require_once "./mvc/views/pages/" . $data["Page"] . ".php"?>
							</div>
					</div>
				</div>

			</div>
		</div>

		<?php require_once 'mvc/views/partial/main-footer.php'; ?>



