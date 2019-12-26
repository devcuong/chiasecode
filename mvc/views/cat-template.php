<?php require_once 'mvc/views/partial/head-html.php'; ?>
<body class="category-page">
		<div id="header" class="header">
			<?php require_once 'mvc/views/partial/top-header.php'; ?>
			<div id="nav-top-menu" class="nav-top-menu">
				<div class="container">
					<div class="row">
<!-- 					vertical menu -->
						<?php require_once 'mvc/views/partial/vertical-menu.php'; ?>
						<div id="main-menu" class="col-sm-9 main-menu">
							<nav class="navbar navbar-default">
								<div class="container-fluid">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed"
											data-toggle="collapse" data-target="#navbar"
											aria-expanded="false" aria-controls="navbar">
											<i class="fa fa-bars"></i>
										</button>
										<a class="navbar-brand" href="#">MENU</a>
									</div>
									<div id="navbar" class="navbar-collapse collapse">
										<ul class="nav navbar-nav">
											<li id="mnhome" class="active" title="Trang chủ"><a
												href="../index.html"><i class="fa fa-home fa-lg"
													aria-hidden="true"></i></a></li>
											<li id="mntopcode" title="Top code nổi bật"><a
												href="../top-codes.html">Top code</a></li>
											<li id="mncodeok" title="Code chất lượng (>= 100 Xu)"><a
												href="../code-chat-luong.html">Code chất lượng <span
													class="notify notify-right"></span></a></li>
											<li id="mncode" title="Code tham khảo (2 Xu - 99 Xu)"><a
												href="../code-tham-khao.html">Code tham khảo</a></li>
											<li id="mncodefree" title="Code miễn phí (0 Xu)"><a
												href="../code-mien-phi.html">Code miễn phí</a></li>
											<li id="mndomain" class="dropdown"><a
												href="../hosting-ssd.html" class="dropdown-toggle"
												data-toggle="dropdown">Tên miền - Hosting <span
													class="notify notify-right"></span></a>
												<ul class="dropdown-menu container-fluid">
													<li class="block-container">
														<ul class="block">
															<li class="link_container"><a
																href="../dang-ki-ten-mien.html">Đăng kí tên miền</a></li>
															<li class="link_container"><a href="../hosting-ssd.html">Hosting
																	SSD</a></li>
															<li class="link_container"><a
																href="../vps-may-chu-ao.html">Clould VPS</a></li>
															<li class="link_container"><a href="../email-server.html">Email
																	server</a></li>
															<li class="link_container"><a
																href="../chung-thuc-ssl.html">Chứng thực SSL</a></li>
														</ul>
													</li>
												</ul></li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
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
						<p class="modal-title text-center" id="myModalLabel">SHARECODE.VN</p>
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
									Bạn chưa có tài khoản ShareCode.vn? <a
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
										<input name="ctl00$ctl00$ctl00$txtCaptcha" type="text"
											maxlength="4" id="txtCaptcha" class="form-control alignleft"
											placeholder="Xác nhận" style="width: 90px;" />

										
										<div
											style="height: 30px; width: 140px; float: left; margin-left: 10px;">
											<img src="../assets/images/captcha.jpg" alt="captcha"
												class="imgCaptcha" height="30" width="80" />
											<div class="aorange"
												style="float: right; width: 60px; margin-top: 6px; padding-left: 5px;"
												onclick="return createCaptcha();">Mã khác</div>
										</div>


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
						<p class="text-center">ShareCode.vn Cộng đồng chia sẻ và download
							source code</p>
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



