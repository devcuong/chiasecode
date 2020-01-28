<?php require_once "./mvc/core/String.php"?>
<?php require_once "./mvc/core/Config.php"?>
<div id="view-content-page" class="view-content-page">
	<div class="container" id="columns">
		<div class="breadcrumb clearfix" itemscope=""
			itemtype="http://schema.org/BreadcrumbList">
			<span itemprop="itemListElement" itemscope=""
				itemtype="http://schema.org/ListItem"> <a itemprop="item"
				class="agreen" href="https://sharecode.vn/"
				title="Trở lại trang chủ">Trang chủ
					<meta itemprop="name" content="sharecode.vn">
			</a>
				<meta itemprop="position" content="1">
			</span> <span class="navigation-pipe">&nbsp;</span> <a
				href="https://sharecode.vn/thong-tin-ca-nhan.htm"
				id="mainbody_breadcrumb_breadpage_UserName" class="agreen">sen đỏ TV</a>
			<span class="navigation-pipe">&nbsp;</span> <a class="agreen"
				href="https://sharecode.vn/code-upload-cua-toi.htm">
				<h2 class="abread">Code tải lên</h2>
			</a> <span class="navigation-pipe">&nbsp;</span> <a
				href="https://sharecode.vn/thanh-vien-upload.htm"
				id="mainbody_breadcrumb_breadpage_pathLink" class="agreen">
				<h2 id="mainbody_breadcrumb_breadpage_pathTitle" class="abread">Tải
					code lên</h2>
			</a>
		</div>
		<div class="row">
			<div class="center_column col-xs-12 col-sm-12" id="center_column">


				<div class="box-bg">
					<div class="upload_form">
						<h1 class="title3 bold text-center up-title">UPLOAD CODE CHIA SẺ
							&amp; KIẾM TIỀN CÙNG SHARECODE.VN</h1>
						<div class="up-note hidden-xs">
							<div class="col-md-6 up-left">
								<div class="title3 orange">Lợi ích code4v đem lại</div>
								<ul class="introduce-list">
									<li>Tiếp cận <span class="green">trăm nghìn khách hàng</span>
										tiềm năng mỗi ngày
									</li>
									<li>Code được marketting đưa lên <span class="green">top 5
											google</span></li>
									<li>Hưởng <span class="green">70% doanh thu</span> trên mỗi
										code được bán
									</li>
									<li>Bạn <span class="green">tự đặt phí</span> cho source code
										của mình
									</li>
								</ul>
							</div>
							<div class="col-md-6 up-right">
								<div class="title3 orange">Mẹo giúp bạn tăng doanh thu</div>
								<ul class="introduce-list">
									<li><a
										href="https://sharecode.vn/cau-hoi/meo-giup-ban-tang-doanh-thu-ban-source-code-9.htm#meo-nhap-thong-tin">Cách
											nhập thông tin đầy đủ, rõ ràng và hữu ích</a></li>
									<li><a
										href="https://sharecode.vn/cau-hoi/meo-giup-ban-tang-doanh-thu-ban-source-code-9.htm#meo-gia-hop-ly">Đưa
											ra mức phí hợp lý và có sức thu hút</a></li>
									<li><a
										href="https://sharecode.vn/cau-hoi/meo-giup-ban-tang-doanh-thu-ban-source-code-9.htm#meo-gioi-thieu">Tạo
											chiến lược quảng bá, giới thiệu</a></li>
									<li><a
										href="https://sharecode.vn/cau-hoi/meo-giup-ban-tang-doanh-thu-ban-source-code-9.htm#meo-tham-gia-event">Tham
											gia đầy đủ các sự kiện của Sharecode.vn</a></li>
								</ul>
							</div>
						</div>
						<div class="up-box">
							<input type='file' onchange="readURL(this);" /> <img id="blah"
								src="#" alt="your image" />

							<div id="mainbody_contentbody_contentpage_panDefaultButton"
								onkeypress="javascript:return WebForm_FireDefaultButton(event, 'mainbody_contentbody_contentpage_btnUpload')">
								<div class="form-horizontal">
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10">
											<div id="mainbody_contentbody_contentpage_lblEvent"
												class="bold orange">Tặng thưởng ngay 5 Point cho mỗi upload
												được duyệt (5 Point = 1 XU).</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Ảnh đại diện <span
											class="text-error">*</span></label>
										<div class="col-md-10">
											<div class="u_image validation-success">
												<canvas id="canvas"></canvas>
												<img id="mainbody_contentbody_contentpage_imgUpdateCode"
													class="u_image_edit">
												<div class="img_edit"></div>
												<input type="file" id="FileUpload1" class="img_upload"
													accept=".jpg,.png,.gif" onchange="readURL(this);"> <span
													class="glyphicon glyphicon-ok form-control-feedback success-ic2"
													aria-hidden="true" id="successImg" style="display: block;"></span>
												<script id="jsbin-javascript">
                                                     function readURL(input) {
                                                            if (input.files && input.files[0]) {
                                                                var reader = new FileReader();
                                                
                                                                reader.onload = function (e) {
                                                                    $('#mainbody_contentbody_contentpage_imgUpdateCode')
                                                                        .attr('src', e.target.result)
                                                                        .width(200)
                                                                        .height(150);
                                                                };
                                                
                                                                reader.readAsDataURL(input.files[0]);
                                                            }
                                                        }
                                                </script>
											</div>
											<div class="alignleft u_image_txt">
												<div class="true-ic">Ảnh đẹp sẽ giúp code có nhiều lượt xem</div>
												<div class="true-ic">Dung lượng tối đa 2MB</div>
												<span id="img_error" class="text-error "></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Tiêu đề code <span
											class="text-error">*</span></label>
										<div class="col-md-7">
											<input
												name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$txtTitle"
												type="text" maxlength="200"
												id="mainbody_contentbody_contentpage_txtTitle"
												class="form-control" onblur="ValidateTitle()"
												placeholder="Tối thiểu 20 kí tự"> <span
												class="glyphicon glyphicon-ok form-control-feedback success-ic"
												aria-hidden="true" id="successTitle" style="display: none;"></span>
										</div>
										<div class="col-md-3 note-col">
											<div class="form-control-static">
												<span id="title_error" class="text-error "></span> <span
													class="text-nowrap title5">Quyết định 80% SEO <span
													data-toggle="tooltip" data-placement="top"
													title="Tiêu đề tối thiểu 20 kí tự, Tiêu đề cần chứa 'Từ khóa' trọng tâm, tiêu đề càng hấp dẫn sẽ thu hút nhiều lượt xem."><i
														class="fa fa-info-circle" aria-hidden="true"></i></span></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Danh mục <span
											class="text-error">*</span></label>
										<div class="col-md-4">
											<select
												name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$ddlCategoryLang"
												id="mainbody_contentbody_contentpage_ddlCategoryLang"
												class="form-control" onblur="ValidateCate()"
												onchange="ValidateCate()">
												<option value="0">--Chọn danh mục--</option>
												<option value="15">Android</option>
												<option value="23">iOS</option>
												<option value="26">Windows phone</option>
												<option value="21">PHP &amp; MySQL</option>
												<option value="29">WordPress</option>
												<option value="28">Joomla</option>
												<option value="17">Visual C#</option>
												<option value="16">Asp/Asp.Net</option>
												<option value="20">Java/JSP</option>
												<option value="19">Visual Basic</option>
												<option value="24">Cocos2D</option>
												<option value="27">Unity</option>
												<option value="18">Visual C++</option>
												<option value="25">Html &amp; Template</option>
												<option value="22">Khác</option>

											</select> <span
												class="glyphicon glyphicon-ok form-control-feedback success-ic3"
												aria-hidden="true" id="successCate" style="display: none;"></span>

										</div>
										<div class="col-md-6">
											<div class="form-control-static">
												<span id="lang_error" class="text-error">&nbsp;</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Mô tả ngắn <span
											class="text-error">*</span></label>
										<div class="col-md-7">
											<textarea
												name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$txtSubTitle"
												rows="2" cols="20"
												id="mainbody_contentbody_contentpage_txtSubTitle"
												class="form-control up-textarea" onblur="ValidateSub()"
												placeholder="Tối thiểu 70 kí tự" maxlength="200"
												style="height: 60px;"></textarea>
											<span
												class="glyphicon glyphicon-ok form-control-feedback success-ic3"
												aria-hidden="true" id="successSub" style="display: none;"></span>
										</div>
										<div class="col-md-3 note-col">
											<span id="subdetail_error" class="text-error"></span> <span
												class="text-nowrap title5">Tối ưu từ 70 - 200 kí tự <span
												data-toggle="tooltip" data-placement="top"
												title="Để có thứ hạng cao trên kết quả tìm kiếm bạn cần viết mô tả hấp dẫn về code, chứa từ khóa, những ưu điểm và tính năng...để thu hút người mua"><i
													class="fa fa-info-circle" aria-hidden="true"></i></span></span>&nbsp;
											<span class="text-nowrap orange"><b id="lblcountSubTitle">0</b>
												Kí tự</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Link download <span
											class="text-error">*</span></label>
										<div class="col-md-7">
											<input
												name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$txtLink"
												type="text" maxlength="300"
												id="mainbody_contentbody_contentpage_txtLink"
												title="Link download source code: Mediafile, Fshare, Google drive..."
												class="form-control" onblur="ValidateLink()"
												placeholder="Link download: Mediafile, Fshare, Google drive...">
											<span
												class="glyphicon glyphicon-ok form-control-feedback success-ic"
												aria-hidden="true" id="successLink" style="display: none;"></span>
										</div>
										<div class="col-md-3">
											<span id="link_error" class="text-error"></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Link demo</label>
										<div class="col-md-4">
											<input
												name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$txtLinkDemo"
												type="text" maxlength="300"
												id="mainbody_contentbody_contentpage_txtLinkDemo"
												title="Link demo sản phẩm thực tế đã triển khai từ code"
												class="form-control" onblur="ValidateDemo()"
												placeholder="Link live demo (Nếu có)"> <span
												class="glyphicon glyphicon-ok form-control-feedback success-ic"
												aria-hidden="true" id="successDemo" style="display: none;"></span>
										</div>
										<div class="col-md-6">
											<div class="form-control-static">
												<span id="demo_error" class="text-error"></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Đặt phí tải</label>
										<div class="col-md-10">
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-warning" id="lblCheckFree"> <input
													type="radio" name="options" id="idFree" value="Free"
													checked=""> Miễn phí (0 Xu)
												</label> <label class="btn btn-warning" id="lblCheckCode"> <input
													type="radio" name="options" id="idCode" value="Code"> Tham
													khảo (2Xu - 99Xu)
												</label> <label class="btn btn-warning active"
													id="lblCheckCodeOK"> <input type="radio" name="options"
													id="idCodeOK" value="CodeOK"> Chất lượng (&gt;= 100 Xu)
												</label>
											</div>
										</div>
									</div>
									<div class="form-group" id="boxPrice" style="display: block;">
										<div class="col-sm-6 col-md-offset-2 col-md-4">
											<div class="input-group">
												<div class="input-group-btn">
													<button type="button"
														class="btn btn-default dropdown-toggle up-dropdown"
														data-toggle="dropdown" aria-haspopup="true"
														aria-expanded="false">
														Chọn <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-left">
														<li id="li5">5 Xu</li>
														<li id="li10">10 Xu</li>
														<li id="li15">15 Xu</li>
														<li id="li20">20 Xu</li>
														<li id="li40">40 Xu</li>
														<li id="li80">80 Xu</li>
														<li role="separator" class="divider"></li>
														<li id="li100">100 Xu</li>
														<li id="li150">150 Xu</li>
														<li id="li240">240 Xu</li>
														<li id="li400">400 Xu</li>
													</ul>

												</div>
												<input
													name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$txtPriceOther"
													type="text" maxlength="4"
													id="mainbody_contentbody_contentpage_txtPriceOther"
													class="bold form-control" onblur="ValidatePrice()"
													onkeypress="CheckNumeric(event);" onkeyup="ChangPrice();"
													placeholder="Tự nhập phí tải"> <span
													class="glyphicon glyphicon-ok form-control-feedback success-ic"
													aria-hidden="true" id="successPrice"
													style="right: 60px; display: none;"></span> <span
													class="input-group-addon">Xu <span data-toggle="tooltip"
													data-placement="top"
													title="(1 Xu = 1.000 đ) Bạn có thể đặt phí tải tùy ý hoặc chia sẻ miễn phí 0 Xu, Khi code đã được duyệt nếu bạn GIẢM PHÍ TẢI phí tải sẽ được cập nhật ngay nhưng nếu TĂNG GIÁ thì cần chờ BQT kiểm duyệt giá đó! Nếu mức giá >= 100 Xu thì bạn cần cam kết HỖ TRỢ khi người mua liên hệ."><i
														class="fa fa-info-circle" aria-hidden="true"></i></span></span>
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="checkbox" id="boxCheck" style="display: block;">
												<label class="orange"> <input id="chkCamKet"
													onchange="ValidatePrice()" value="1" type="checkbox"> Cam
													kết hỗ trợ người mua
												</label>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-control-static">
												<span id="price_error" class="text-error">&nbsp;</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Hình ảnh về code</label>
										<div class="col-md-7">
											<div class="upload_file">
												<div class="f_control">
													<div class="f_upload_file">
														Thêm ảnh... <input type="file" multiple="multiple"
															name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$FileUpload2"
															id="mainbody_contentbody_contentpage_FileUpload2"
															class="upload" accept="image/gif, image/jpeg, image/png">
													</div>
													<div class="mess alignleft" id="countFiles"></div>

													<div id="errFileMax2" class="text-error clear"></div>
												</div>
												<span id="mainbody_contentbody_contentpage_lblListImage"></span>
												<div id="mainbody_contentbody_contentpage_upPannel">


													<div id="mainbody_contentbody_contentpage_TotalImage"
														class="f_total">
														Tối đa <b>10</b> ảnh, Dung lượng tối đa <b>2 Mb</b> 1 ảnh
													</div>

												</div>
											</div>
										</div>
										<div class="col-md-3 hidden-xs">
											<div class="up-idea">Hoàn thành đầy đủ thông tin giúp code
												của bạn được nhiều người biết đến và có thứ hạng cao trên
												kết quả tìm kiếm</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Mô tả chi tiết <span
											class="text-error">*</span></label>
										<div class="col-md-10" id="editorDetail">
											<textarea
												name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$ckDetail"
												rows="2" cols="20"
												id="mainbody_contentbody_contentpage_ckDetail"
												style="height: 200px; visibility: hidden; display: none;"></textarea>
											<span id="cke_mainbody_contentbody_contentpage_ckDetail"
												class="cke_skin_kama cke_1 cke_editor_mainbody_contentbody_contentpage_ckDetail validation-failed"
												dir="trái-qua-phải" title="" lang="vi" tabindex="0"
												role="application"
												aria-labelledby="cke_mainbody_contentbody_contentpage_ckDetail_arialbl"><span
												id="cke_mainbody_contentbody_contentpage_ckDetail_arialbl"
												class="cke_voice_label">Bộ soạn thảo</span><span
												class="cke_browser_webkit" role="presentation"><span
													class="cke_wrapper cke_trái-qua-phải" role="presentation"><table
															class="cke_editor" border="0" cellspacing="0"
															cellpadding="0" role="presentation">
															<tbody>
																<tr role="presentation">
																	<td
																		id="cke_top_mainbody_contentbody_contentpage_ckDetail"
																		class="cke_top" role="presentation"><div
																			class="cke_toolbox" role="group"
																			aria-labelledby="cke_7" onmousedown="return false;">
																			<span id="cke_7" class="cke_voice_label">Thanh công
																				cụ</span><span id="cke_8" class="cke_toolbar"
																				aria-labelledby="cke_8_label" role="toolbar"><span
																				id="cke_8_label" class="cke_voice_label">Tài liệu</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_9"
																						class="cke_off cke_button_source"
																						"="" href="javascript:void('Mã HTML')"
																						title="Mã HTML" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_9_label"
																						onkeydown="return CKEDITOR.tools.callFunction(4, event);"
																						onfocus="return CKEDITOR.tools.callFunction(5, event);"
																						onclick="CKEDITOR.tools.callFunction(6, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_9_label" class="cke_label">Mã HTML</span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_10" class="cke_toolbar"
																				aria-labelledby="cke_10_label" role="toolbar"><span
																				id="cke_10_label" class="cke_voice_label">Clipboard/Undo</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_11"
																						class="cke_button_cut cke_disabled"
																						"="" href="javascript:void('Cắt')" title="Cắt"
																						tabindex="-1" hidefocus="true" role="button"
																						aria-labelledby="cke_11_label"
																						onkeydown="return CKEDITOR.tools.callFunction(7, event);"
																						onfocus="return CKEDITOR.tools.callFunction(8, event);"
																						onclick="CKEDITOR.tools.callFunction(9, this); return false;"
																						aria-disabled="true"><span class="cke_icon">&nbsp;</span><span
																							id="cke_11_label" class="cke_label">Cắt</span></a></span><span
																					class="cke_button"><a id="cke_12"
																						class="cke_button_copy cke_disabled"
																						"="" href="javascript:void('Sao chép')"
																						title="Sao chép" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_12_label"
																						onkeydown="return CKEDITOR.tools.callFunction(10, event);"
																						onfocus="return CKEDITOR.tools.callFunction(11, event);"
																						onclick="CKEDITOR.tools.callFunction(12, this); return false;"
																						aria-disabled="true"><span class="cke_icon">&nbsp;</span><span
																							id="cke_12_label" class="cke_label">Sao chép</span></a></span><span
																					class="cke_button"><a id="cke_13"
																						class="cke_off cke_button_paste"
																						"="" href="javascript:void('Dán')" title="Dán"
																						tabindex="-1" hidefocus="true" role="button"
																						aria-labelledby="cke_13_label"
																						onkeydown="return CKEDITOR.tools.callFunction(13, event);"
																						onfocus="return CKEDITOR.tools.callFunction(14, event);"
																						onclick="CKEDITOR.tools.callFunction(15, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_13_label" class="cke_label">Dán</span></a></span><span
																					class="cke_separator" role="separator"></span><span
																					class="cke_button"><a id="cke_14"
																						class="cke_button_undo cke_disabled"
																						"="" href="javascript:void('Khôi phục thao tác')"
																						title="Khôi phục thao tác" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_14_label"
																						onkeydown="return CKEDITOR.tools.callFunction(16, event);"
																						onfocus="return CKEDITOR.tools.callFunction(17, event);"
																						onclick="CKEDITOR.tools.callFunction(18, this); return false;"
																						aria-disabled="true"><span class="cke_icon">&nbsp;</span><span
																							id="cke_14_label" class="cke_label">Khôi phục
																								thao tác</span></a></span><span
																					class="cke_button"><a id="cke_15"
																						class="cke_button_redo cke_disabled"
																						"="" href="javascript:void('Làm lại thao tác')"
																						title="Làm lại thao tác" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_15_label"
																						onkeydown="return CKEDITOR.tools.callFunction(19, event);"
																						onfocus="return CKEDITOR.tools.callFunction(20, event);"
																						onclick="CKEDITOR.tools.callFunction(21, this); return false;"
																						aria-disabled="true"><span class="cke_icon">&nbsp;</span><span
																							id="cke_15_label" class="cke_label">Làm lại thao
																								tác</span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_16" class="cke_toolbar"
																				aria-labelledby="cke_16_label" role="toolbar"><span
																				id="cke_16_label" class="cke_voice_label">Chỉnh sửa</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_17"
																						class="cke_off cke_button_find"
																						"="" href="javascript:void('Tìm kiếm')"
																						title="Tìm kiếm" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_17_label"
																						onkeydown="return CKEDITOR.tools.callFunction(22, event);"
																						onfocus="return CKEDITOR.tools.callFunction(23, event);"
																						onclick="CKEDITOR.tools.callFunction(24, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_17_label" class="cke_label">Tìm kiếm</span></a></span><span
																					class="cke_button"><a id="cke_18"
																						class="cke_off cke_button_replace"
																						"="" href="javascript:void('Thay thế')"
																						title="Thay thế" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_18_label"
																						onkeydown="return CKEDITOR.tools.callFunction(25, event);"
																						onfocus="return CKEDITOR.tools.callFunction(26, event);"
																						onclick="CKEDITOR.tools.callFunction(27, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_18_label" class="cke_label">Thay thế</span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_19" class="cke_toolbar"
																				aria-labelledby="cke_19_label" role="toolbar"><span
																				id="cke_19_label" class="cke_voice_label">Kiểu cơ
																					bản</span><span class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_20"
																						class="cke_off cke_button_bold"
																						"="" href="javascript:void('Đậm')" title="Đậm"
																						tabindex="-1" hidefocus="true" role="button"
																						aria-labelledby="cke_20_label"
																						onkeydown="return CKEDITOR.tools.callFunction(28, event);"
																						onfocus="return CKEDITOR.tools.callFunction(29, event);"
																						onclick="CKEDITOR.tools.callFunction(30, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_20_label" class="cke_label">Đậm</span></a></span><span
																					class="cke_button"><a id="cke_21"
																						class="cke_off cke_button_italic"
																						"="" href="javascript:void('Nghiêng')"
																						title="Nghiêng" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_21_label"
																						onkeydown="return CKEDITOR.tools.callFunction(31, event);"
																						onfocus="return CKEDITOR.tools.callFunction(32, event);"
																						onclick="CKEDITOR.tools.callFunction(33, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_21_label" class="cke_label">Nghiêng</span></a></span><span
																					class="cke_button"><a id="cke_22"
																						class="cke_off cke_button_underline"
																						"="" href="javascript:void('Gạch chân')"
																						title="Gạch chân" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_22_label"
																						onkeydown="return CKEDITOR.tools.callFunction(34, event);"
																						onfocus="return CKEDITOR.tools.callFunction(35, event);"
																						onclick="CKEDITOR.tools.callFunction(36, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_22_label" class="cke_label">Gạch chân</span></a></span><span
																					class="cke_button"><a id="cke_23"
																						class="cke_off cke_button_strike"
																						"="" href="javascript:void('Gạch xuyên ngang')"
																						title="Gạch xuyên ngang" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_23_label"
																						onkeydown="return CKEDITOR.tools.callFunction(37, event);"
																						onfocus="return CKEDITOR.tools.callFunction(38, event);"
																						onclick="CKEDITOR.tools.callFunction(39, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_23_label" class="cke_label">Gạch xuyên
																								ngang</span></a></span><span class="cke_button"><a
																						id="cke_24" class="cke_off cke_button_subscript"
																						"="" href="javascript:void('Chỉ số dưới')"
																						title="Chỉ số dưới" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_24_label"
																						onkeydown="return CKEDITOR.tools.callFunction(40, event);"
																						onfocus="return CKEDITOR.tools.callFunction(41, event);"
																						onclick="CKEDITOR.tools.callFunction(42, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_24_label" class="cke_label">Chỉ số dưới</span></a></span><span
																					class="cke_button"><a id="cke_25"
																						class="cke_off cke_button_superscript"
																						"="" href="javascript:void('Chỉ số trên')"
																						title="Chỉ số trên" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_25_label"
																						onkeydown="return CKEDITOR.tools.callFunction(43, event);"
																						onfocus="return CKEDITOR.tools.callFunction(44, event);"
																						onclick="CKEDITOR.tools.callFunction(45, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_25_label" class="cke_label">Chỉ số trên</span></a></span><span
																					class="cke_separator" role="separator"></span><span
																					class="cke_button"><a id="cke_26"
																						class="cke_off cke_button_removeFormat"
																						"="" href="javascript:void('Xoá định dạng')"
																						title="Xoá định dạng" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_26_label"
																						onkeydown="return CKEDITOR.tools.callFunction(46, event);"
																						onfocus="return CKEDITOR.tools.callFunction(47, event);"
																						onclick="CKEDITOR.tools.callFunction(48, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_26_label" class="cke_label">Xoá định dạng</span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_27" class="cke_toolbar"
																				aria-labelledby="cke_27_label" role="toolbar"><span
																				id="cke_27_label" class="cke_voice_label">Đoạn</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_28"
																						class="cke_off cke_button_numberedlist"
																						"="" href="javascript:void('Chèn/Xoá Danh sách có thứ tự')"
																						title="Chèn/Xoá Danh sách có thứ tự" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_28_label"
																						onkeydown="return CKEDITOR.tools.callFunction(49, event);"
																						onfocus="return CKEDITOR.tools.callFunction(50, event);"
																						onclick="CKEDITOR.tools.callFunction(51, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_28_label" class="cke_label">Chèn/Xoá Danh
																								sách có thứ tự</span></a></span><span
																					class="cke_button"><a id="cke_29"
																						class="cke_off cke_button_bulletedlist"
																						"="" href="javascript:void('Chèn/Xoá Danh sách không thứ tự')"
																						title="Chèn/Xoá Danh sách không thứ tự"
																						tabindex="-1" hidefocus="true" role="button"
																						aria-labelledby="cke_29_label"
																						onkeydown="return CKEDITOR.tools.callFunction(52, event);"
																						onfocus="return CKEDITOR.tools.callFunction(53, event);"
																						onclick="CKEDITOR.tools.callFunction(54, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_29_label" class="cke_label">Chèn/Xoá Danh
																								sách không thứ tự</span></a></span><span
																					class="cke_separator" role="separator"></span><span
																					class="cke_button"><a id="cke_30"
																						class="cke_button_outdent cke_disabled"
																						"="" href="javascript:void('Dịch ra ngoài')"
																						title="Dịch ra ngoài" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_30_label"
																						onkeydown="return CKEDITOR.tools.callFunction(55, event);"
																						onfocus="return CKEDITOR.tools.callFunction(56, event);"
																						onclick="CKEDITOR.tools.callFunction(57, this); return false;"
																						aria-disabled="true"><span class="cke_icon">&nbsp;</span><span
																							id="cke_30_label" class="cke_label">Dịch ra ngoài</span></a></span><span
																					class="cke_button"><a id="cke_31"
																						class="cke_off cke_button_indent"
																						"="" href="javascript:void('Dịch vào trong')"
																						title="Dịch vào trong" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_31_label"
																						onkeydown="return CKEDITOR.tools.callFunction(58, event);"
																						onfocus="return CKEDITOR.tools.callFunction(59, event);"
																						onclick="CKEDITOR.tools.callFunction(60, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_31_label" class="cke_label">Dịch vào
																								trong</span></a></span><span
																					class="cke_separator" role="separator"></span><span
																					class="cke_button"><a id="cke_32"
																						class="cke_off cke_button_blockquote"
																						"="" href="javascript:void('Khối trích dẫn')"
																						title="Khối trích dẫn" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_32_label"
																						onkeydown="return CKEDITOR.tools.callFunction(61, event);"
																						onfocus="return CKEDITOR.tools.callFunction(62, event);"
																						onclick="CKEDITOR.tools.callFunction(63, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_32_label" class="cke_label">Khối trích
																								dẫn</span></a></span><span class="cke_separator"
																					role="separator"></span><span class="cke_button"><a
																						id="cke_33" class="cke_off cke_button_justifyleft"
																						"="" href="javascript:void('Canh trái')"
																						title="Canh trái" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_33_label"
																						onkeydown="return CKEDITOR.tools.callFunction(64, event);"
																						onfocus="return CKEDITOR.tools.callFunction(65, event);"
																						onclick="CKEDITOR.tools.callFunction(66, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_33_label" class="cke_label">Canh trái</span></a></span><span
																					class="cke_button"><a id="cke_34"
																						class="cke_off cke_button_justifycenter"
																						"="" href="javascript:void('Canh giữa')"
																						title="Canh giữa" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_34_label"
																						onkeydown="return CKEDITOR.tools.callFunction(67, event);"
																						onfocus="return CKEDITOR.tools.callFunction(68, event);"
																						onclick="CKEDITOR.tools.callFunction(69, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_34_label" class="cke_label">Canh giữa</span></a></span><span
																					class="cke_button"><a id="cke_35"
																						class="cke_off cke_button_justifyright"
																						"="" href="javascript:void('Canh phải')"
																						title="Canh phải" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_35_label"
																						onkeydown="return CKEDITOR.tools.callFunction(70, event);"
																						onfocus="return CKEDITOR.tools.callFunction(71, event);"
																						onclick="CKEDITOR.tools.callFunction(72, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_35_label" class="cke_label">Canh phải</span></a></span><span
																					class="cke_button"><a id="cke_36"
																						class="cke_off cke_button_justifyblock"
																						"="" href="javascript:void('Canh đều')"
																						title="Canh đều" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_36_label"
																						onkeydown="return CKEDITOR.tools.callFunction(73, event);"
																						onfocus="return CKEDITOR.tools.callFunction(74, event);"
																						onclick="CKEDITOR.tools.callFunction(75, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_36_label" class="cke_label">Canh đều</span></a></span><span
																					class="cke_separator" role="separator"></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_38" class="cke_toolbar"
																				aria-labelledby="cke_38_label" role="toolbar"><span
																				id="cke_38_label" class="cke_voice_label">Kiểu</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_rcombo" role="presentation"><span
																					id="cke_37" class="cke_format cke_off"
																					role="presentation"><span id="cke_37_label"
																						class="cke_label">Định dạng</span><a
																						hidefocus="true" title="Định dạng" tabindex="-1"
																						href="javascript:void('Định dạng')" role="button"
																						aria-labelledby="cke_37_label"
																						aria-describedby="cke_37_text"
																						aria-haspopup="true"
																						onkeydown="CKEDITOR.tools.callFunction( 77, event, this );"
																						onfocus="return CKEDITOR.tools.callFunction(78, event);"
																						onclick="CKEDITOR.tools.callFunction(76, this); return false;"><span><span
																								id="cke_37_text"
																								class="cke_text cke_inline_label">Định dạng</span></span><span
																							class="cke_openbutton"><span class="cke_icon"></span></span></a></span></span><span
																				class="cke_rcombo" role="presentation"><span
																					id="cke_39" class="cke_fontSize cke_off"
																					role="presentation"><span id="cke_39_label"
																						class="cke_label">Cỡ chữ</span><a hidefocus="true"
																						title="Cỡ chữ" tabindex="-1"
																						href="javascript:void('Cỡ chữ')" role="button"
																						aria-labelledby="cke_39_label"
																						aria-describedby="cke_39_text"
																						aria-haspopup="true"
																						onkeydown="CKEDITOR.tools.callFunction( 80, event, this );"
																						onfocus="return CKEDITOR.tools.callFunction(81, event);"
																						onclick="CKEDITOR.tools.callFunction(79, this); return false;"><span><span
																								id="cke_39_text"
																								class="cke_text cke_inline_label">Cỡ chữ</span></span><span
																							class="cke_openbutton"><span class="cke_icon"></span></span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_40" class="cke_toolbar"
																				aria-labelledby="cke_40_label" role="toolbar"><span
																				id="cke_40_label" class="cke_voice_label">Màu sắc</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_41"
																						class="cke_off cke_button_textcolor"
																						"="" href="javascript:void('Màu chữ')"
																						title="Màu chữ" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_41_label"
																						aria-haspopup="true"
																						onkeydown="return CKEDITOR.tools.callFunction(82, event);"
																						onfocus="return CKEDITOR.tools.callFunction(83, event);"
																						onclick="CKEDITOR.tools.callFunction(84, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_41_label" class="cke_label">Màu chữ</span><span
																							class="cke_buttonarrow">&nbsp;</span></a></span><span
																					class="cke_button"><a id="cke_42"
																						class="cke_off cke_button_bgcolor"
																						"="" href="javascript:void('Màu nền')"
																						title="Màu nền" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_42_label"
																						aria-haspopup="true"
																						onkeydown="return CKEDITOR.tools.callFunction(85, event);"
																						onfocus="return CKEDITOR.tools.callFunction(86, event);"
																						onclick="CKEDITOR.tools.callFunction(87, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_42_label" class="cke_label">Màu nền</span><span
																							class="cke_buttonarrow">&nbsp;</span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_43" class="cke_toolbar"
																				aria-labelledby="cke_43_label" role="toolbar"><span
																				id="cke_43_label" class="cke_voice_label">Công cụ</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_44"
																						class="cke_off cke_button_maximize"
																						"="" href="javascript:void('Phóng to tối đa')"
																						title="Phóng to tối đa" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_44_label"
																						onkeydown="return CKEDITOR.tools.callFunction(88, event);"
																						onfocus="return CKEDITOR.tools.callFunction(89, event);"
																						onclick="CKEDITOR.tools.callFunction(90, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_44_label" class="cke_label">Phóng to tối
																								đa</span></a></span></span><span
																				class="cke_toolbar_end"></span></span>
																		</div> <a title="Thu gọn thanh công cụ" id="cke_45"
																		tabindex="-1" class="cke_toolbox_collapser"
																		onclick="CKEDITOR.tools.callFunction(91)"><span>▲</span></a></td>
																</tr>
																<tr role="presentation">
																	<td
																		id="cke_contents_mainbody_contentbody_contentpage_ckDetail"
																		class="cke_contents" style="height: 200px;"
																		role="presentation"><span id="cke_49"
																		class="cke_voice_label">Nhấn ALT + 0 để được giúp đỡ</span>
																		<iframe style="width: 671px; height: 100%;"
																			frameborder="0" aria-describedby="cke_49"
																			title="Trình soạn thảo phong phú, mainbody_contentbody_contentpage_ckDetail"
																			src="" tabindex="-1" allowtransparency="true"></iframe></td>
																</tr>
																<tr role="presentation">
																	<td
																		id="cke_bottom_mainbody_contentbody_contentpage_ckDetail"
																		class="cke_bottom" role="presentation"><div
																			class="cke_resizer cke_resizer_ltr"
																			title="Kéo rê để thay đổi kích cỡ"
																			onmousedown="CKEDITOR.tools.callFunction(3, event)"></div>
																		<span
																		id="cke_path_mainbody_contentbody_contentpage_ckDetail_label"
																		class="cke_voice_label">Nhãn thành phần</span>
																		<div
																			id="cke_path_mainbody_contentbody_contentpage_ckDetail"
																			class="cke_path" role="group"
																			aria-labelledby="cke_path_mainbody_contentbody_contentpage_ckDetail_label">
																			<span class="cke_empty">&nbsp;</span>
																		</div></td>
																</tr>
															</tbody>
														</table>
														<style>
.cke_skin_kama {
	visibility: hidden;
}
</style></span></span></span> <span
												class="glyphicon glyphicon-ok form-control-feedback success-ic"
												aria-hidden="true" id="successDetail" style="display: none;"></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Hướng dẫn cài đặt</label>
										<div class="col-md-10">
											<textarea
												name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$ckConfig"
												rows="2" cols="20"
												id="mainbody_contentbody_contentpage_ckConfig"
												style="height: 200px; visibility: hidden; display: none;"></textarea>
											<span id="cke_mainbody_contentbody_contentpage_ckConfig"
												class="cke_skin_kama cke_2 cke_editor_mainbody_contentbody_contentpage_ckConfig"
												dir="trái-qua-phải" title="" lang="vi" tabindex="0"
												role="application"
												aria-labelledby="cke_mainbody_contentbody_contentpage_ckConfig_arialbl"><span
												id="cke_mainbody_contentbody_contentpage_ckConfig_arialbl"
												class="cke_voice_label">Bộ soạn thảo</span><span
												class="cke_browser_webkit" role="presentation"><span
													class="cke_wrapper cke_trái-qua-phải" role="presentation"><table
															class="cke_editor" border="0" cellspacing="0"
															cellpadding="0" role="presentation">
															<tbody>
																<tr role="presentation">
																	<td
																		id="cke_top_mainbody_contentbody_contentpage_ckConfig"
																		class="cke_top" role="presentation"><div
																			class="cke_toolbox" role="group"
																			aria-labelledby="cke_57" onmousedown="return false;">
																			<span id="cke_57" class="cke_voice_label">Thanh công
																				cụ</span><span id="cke_58" class="cke_toolbar"
																				aria-labelledby="cke_58_label" role="toolbar"><span
																				id="cke_58_label" class="cke_voice_label">Tài liệu</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_59"
																						class="cke_off cke_button_source"
																						"="" href="javascript:void('Mã HTML')"
																						title="Mã HTML" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_59_label"
																						onkeydown="return CKEDITOR.tools.callFunction(97, event);"
																						onfocus="return CKEDITOR.tools.callFunction(98, event);"
																						onclick="CKEDITOR.tools.callFunction(99, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_59_label" class="cke_label">Mã HTML</span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_60" class="cke_toolbar"
																				aria-labelledby="cke_60_label" role="toolbar"><span
																				id="cke_60_label" class="cke_voice_label">Clipboard/Undo</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_61"
																						class="cke_button_cut cke_disabled"
																						"="" href="javascript:void('Cắt')" title="Cắt"
																						tabindex="-1" hidefocus="true" role="button"
																						aria-labelledby="cke_61_label"
																						onkeydown="return CKEDITOR.tools.callFunction(100, event);"
																						onfocus="return CKEDITOR.tools.callFunction(101, event);"
																						onclick="CKEDITOR.tools.callFunction(102, this); return false;"
																						aria-disabled="true"><span class="cke_icon">&nbsp;</span><span
																							id="cke_61_label" class="cke_label">Cắt</span></a></span><span
																					class="cke_button"><a id="cke_62"
																						class="cke_button_copy cke_disabled"
																						"="" href="javascript:void('Sao chép')"
																						title="Sao chép" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_62_label"
																						onkeydown="return CKEDITOR.tools.callFunction(103, event);"
																						onfocus="return CKEDITOR.tools.callFunction(104, event);"
																						onclick="CKEDITOR.tools.callFunction(105, this); return false;"
																						aria-disabled="true"><span class="cke_icon">&nbsp;</span><span
																							id="cke_62_label" class="cke_label">Sao chép</span></a></span><span
																					class="cke_button"><a id="cke_63"
																						class="cke_off cke_button_paste"
																						"="" href="javascript:void('Dán')" title="Dán"
																						tabindex="-1" hidefocus="true" role="button"
																						aria-labelledby="cke_63_label"
																						onkeydown="return CKEDITOR.tools.callFunction(106, event);"
																						onfocus="return CKEDITOR.tools.callFunction(107, event);"
																						onclick="CKEDITOR.tools.callFunction(108, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_63_label" class="cke_label">Dán</span></a></span><span
																					class="cke_separator" role="separator"></span><span
																					class="cke_button"><a id="cke_64"
																						class="cke_button_undo cke_disabled"
																						"="" href="javascript:void('Khôi phục thao tác')"
																						title="Khôi phục thao tác" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_64_label"
																						onkeydown="return CKEDITOR.tools.callFunction(109, event);"
																						onfocus="return CKEDITOR.tools.callFunction(110, event);"
																						onclick="CKEDITOR.tools.callFunction(111, this); return false;"
																						aria-disabled="true"><span class="cke_icon">&nbsp;</span><span
																							id="cke_64_label" class="cke_label">Khôi phục
																								thao tác</span></a></span><span
																					class="cke_button"><a id="cke_65"
																						class="cke_button_redo cke_disabled"
																						"="" href="javascript:void('Làm lại thao tác')"
																						title="Làm lại thao tác" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_65_label"
																						onkeydown="return CKEDITOR.tools.callFunction(112, event);"
																						onfocus="return CKEDITOR.tools.callFunction(113, event);"
																						onclick="CKEDITOR.tools.callFunction(114, this); return false;"
																						aria-disabled="true"><span class="cke_icon">&nbsp;</span><span
																							id="cke_65_label" class="cke_label">Làm lại thao
																								tác</span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_66" class="cke_toolbar"
																				aria-labelledby="cke_66_label" role="toolbar"><span
																				id="cke_66_label" class="cke_voice_label">Chỉnh sửa</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_67"
																						class="cke_off cke_button_find"
																						"="" href="javascript:void('Tìm kiếm')"
																						title="Tìm kiếm" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_67_label"
																						onkeydown="return CKEDITOR.tools.callFunction(115, event);"
																						onfocus="return CKEDITOR.tools.callFunction(116, event);"
																						onclick="CKEDITOR.tools.callFunction(117, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_67_label" class="cke_label">Tìm kiếm</span></a></span><span
																					class="cke_button"><a id="cke_68"
																						class="cke_off cke_button_replace"
																						"="" href="javascript:void('Thay thế')"
																						title="Thay thế" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_68_label"
																						onkeydown="return CKEDITOR.tools.callFunction(118, event);"
																						onfocus="return CKEDITOR.tools.callFunction(119, event);"
																						onclick="CKEDITOR.tools.callFunction(120, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_68_label" class="cke_label">Thay thế</span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_69" class="cke_toolbar"
																				aria-labelledby="cke_69_label" role="toolbar"><span
																				id="cke_69_label" class="cke_voice_label">Kiểu cơ
																					bản</span><span class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_70"
																						class="cke_off cke_button_bold"
																						"="" href="javascript:void('Đậm')" title="Đậm"
																						tabindex="-1" hidefocus="true" role="button"
																						aria-labelledby="cke_70_label"
																						onkeydown="return CKEDITOR.tools.callFunction(121, event);"
																						onfocus="return CKEDITOR.tools.callFunction(122, event);"
																						onclick="CKEDITOR.tools.callFunction(123, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_70_label" class="cke_label">Đậm</span></a></span><span
																					class="cke_button"><a id="cke_71"
																						class="cke_off cke_button_italic"
																						"="" href="javascript:void('Nghiêng')"
																						title="Nghiêng" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_71_label"
																						onkeydown="return CKEDITOR.tools.callFunction(124, event);"
																						onfocus="return CKEDITOR.tools.callFunction(125, event);"
																						onclick="CKEDITOR.tools.callFunction(126, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_71_label" class="cke_label">Nghiêng</span></a></span><span
																					class="cke_button"><a id="cke_72"
																						class="cke_off cke_button_underline"
																						"="" href="javascript:void('Gạch chân')"
																						title="Gạch chân" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_72_label"
																						onkeydown="return CKEDITOR.tools.callFunction(127, event);"
																						onfocus="return CKEDITOR.tools.callFunction(128, event);"
																						onclick="CKEDITOR.tools.callFunction(129, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_72_label" class="cke_label">Gạch chân</span></a></span><span
																					class="cke_button"><a id="cke_73"
																						class="cke_off cke_button_strike"
																						"="" href="javascript:void('Gạch xuyên ngang')"
																						title="Gạch xuyên ngang" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_73_label"
																						onkeydown="return CKEDITOR.tools.callFunction(130, event);"
																						onfocus="return CKEDITOR.tools.callFunction(131, event);"
																						onclick="CKEDITOR.tools.callFunction(132, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_73_label" class="cke_label">Gạch xuyên
																								ngang</span></a></span><span class="cke_button"><a
																						id="cke_74" class="cke_off cke_button_subscript"
																						"="" href="javascript:void('Chỉ số dưới')"
																						title="Chỉ số dưới" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_74_label"
																						onkeydown="return CKEDITOR.tools.callFunction(133, event);"
																						onfocus="return CKEDITOR.tools.callFunction(134, event);"
																						onclick="CKEDITOR.tools.callFunction(135, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_74_label" class="cke_label">Chỉ số dưới</span></a></span><span
																					class="cke_button"><a id="cke_75"
																						class="cke_off cke_button_superscript"
																						"="" href="javascript:void('Chỉ số trên')"
																						title="Chỉ số trên" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_75_label"
																						onkeydown="return CKEDITOR.tools.callFunction(136, event);"
																						onfocus="return CKEDITOR.tools.callFunction(137, event);"
																						onclick="CKEDITOR.tools.callFunction(138, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_75_label" class="cke_label">Chỉ số trên</span></a></span><span
																					class="cke_separator" role="separator"></span><span
																					class="cke_button"><a id="cke_76"
																						class="cke_off cke_button_removeFormat"
																						"="" href="javascript:void('Xoá định dạng')"
																						title="Xoá định dạng" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_76_label"
																						onkeydown="return CKEDITOR.tools.callFunction(139, event);"
																						onfocus="return CKEDITOR.tools.callFunction(140, event);"
																						onclick="CKEDITOR.tools.callFunction(141, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_76_label" class="cke_label">Xoá định dạng</span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_77" class="cke_toolbar"
																				aria-labelledby="cke_77_label" role="toolbar"><span
																				id="cke_77_label" class="cke_voice_label">Đoạn</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_78"
																						class="cke_off cke_button_numberedlist"
																						"="" href="javascript:void('Chèn/Xoá Danh sách có thứ tự')"
																						title="Chèn/Xoá Danh sách có thứ tự" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_78_label"
																						onkeydown="return CKEDITOR.tools.callFunction(142, event);"
																						onfocus="return CKEDITOR.tools.callFunction(143, event);"
																						onclick="CKEDITOR.tools.callFunction(144, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_78_label" class="cke_label">Chèn/Xoá Danh
																								sách có thứ tự</span></a></span><span
																					class="cke_button"><a id="cke_79"
																						class="cke_off cke_button_bulletedlist"
																						"="" href="javascript:void('Chèn/Xoá Danh sách không thứ tự')"
																						title="Chèn/Xoá Danh sách không thứ tự"
																						tabindex="-1" hidefocus="true" role="button"
																						aria-labelledby="cke_79_label"
																						onkeydown="return CKEDITOR.tools.callFunction(145, event);"
																						onfocus="return CKEDITOR.tools.callFunction(146, event);"
																						onclick="CKEDITOR.tools.callFunction(147, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_79_label" class="cke_label">Chèn/Xoá Danh
																								sách không thứ tự</span></a></span><span
																					class="cke_separator" role="separator"></span><span
																					class="cke_button"><a id="cke_80"
																						class="cke_button_outdent cke_disabled"
																						"="" href="javascript:void('Dịch ra ngoài')"
																						title="Dịch ra ngoài" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_80_label"
																						onkeydown="return CKEDITOR.tools.callFunction(148, event);"
																						onfocus="return CKEDITOR.tools.callFunction(149, event);"
																						onclick="CKEDITOR.tools.callFunction(150, this); return false;"
																						aria-disabled="true"><span class="cke_icon">&nbsp;</span><span
																							id="cke_80_label" class="cke_label">Dịch ra ngoài</span></a></span><span
																					class="cke_button"><a id="cke_81"
																						class="cke_off cke_button_indent"
																						"="" href="javascript:void('Dịch vào trong')"
																						title="Dịch vào trong" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_81_label"
																						onkeydown="return CKEDITOR.tools.callFunction(151, event);"
																						onfocus="return CKEDITOR.tools.callFunction(152, event);"
																						onclick="CKEDITOR.tools.callFunction(153, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_81_label" class="cke_label">Dịch vào
																								trong</span></a></span><span
																					class="cke_separator" role="separator"></span><span
																					class="cke_button"><a id="cke_82"
																						class="cke_off cke_button_blockquote"
																						"="" href="javascript:void('Khối trích dẫn')"
																						title="Khối trích dẫn" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_82_label"
																						onkeydown="return CKEDITOR.tools.callFunction(154, event);"
																						onfocus="return CKEDITOR.tools.callFunction(155, event);"
																						onclick="CKEDITOR.tools.callFunction(156, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_82_label" class="cke_label">Khối trích
																								dẫn</span></a></span><span class="cke_separator"
																					role="separator"></span><span class="cke_button"><a
																						id="cke_83" class="cke_off cke_button_justifyleft"
																						"="" href="javascript:void('Canh trái')"
																						title="Canh trái" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_83_label"
																						onkeydown="return CKEDITOR.tools.callFunction(157, event);"
																						onfocus="return CKEDITOR.tools.callFunction(158, event);"
																						onclick="CKEDITOR.tools.callFunction(159, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_83_label" class="cke_label">Canh trái</span></a></span><span
																					class="cke_button"><a id="cke_84"
																						class="cke_off cke_button_justifycenter"
																						"="" href="javascript:void('Canh giữa')"
																						title="Canh giữa" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_84_label"
																						onkeydown="return CKEDITOR.tools.callFunction(160, event);"
																						onfocus="return CKEDITOR.tools.callFunction(161, event);"
																						onclick="CKEDITOR.tools.callFunction(162, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_84_label" class="cke_label">Canh giữa</span></a></span><span
																					class="cke_button"><a id="cke_85"
																						class="cke_off cke_button_justifyright"
																						"="" href="javascript:void('Canh phải')"
																						title="Canh phải" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_85_label"
																						onkeydown="return CKEDITOR.tools.callFunction(163, event);"
																						onfocus="return CKEDITOR.tools.callFunction(164, event);"
																						onclick="CKEDITOR.tools.callFunction(165, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_85_label" class="cke_label">Canh phải</span></a></span><span
																					class="cke_button"><a id="cke_86"
																						class="cke_off cke_button_justifyblock"
																						"="" href="javascript:void('Canh đều')"
																						title="Canh đều" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_86_label"
																						onkeydown="return CKEDITOR.tools.callFunction(166, event);"
																						onfocus="return CKEDITOR.tools.callFunction(167, event);"
																						onclick="CKEDITOR.tools.callFunction(168, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_86_label" class="cke_label">Canh đều</span></a></span><span
																					class="cke_separator" role="separator"></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_88" class="cke_toolbar"
																				aria-labelledby="cke_88_label" role="toolbar"><span
																				id="cke_88_label" class="cke_voice_label">Kiểu</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_rcombo" role="presentation"><span
																					id="cke_87" class="cke_format cke_off"
																					role="presentation"><span id="cke_87_label"
																						class="cke_label">Định dạng</span><a
																						hidefocus="true" title="Định dạng" tabindex="-1"
																						href="javascript:void('Định dạng')" role="button"
																						aria-labelledby="cke_87_label"
																						aria-describedby="cke_87_text"
																						aria-haspopup="true"
																						onkeydown="CKEDITOR.tools.callFunction( 170, event, this );"
																						onfocus="return CKEDITOR.tools.callFunction(171, event);"
																						onclick="CKEDITOR.tools.callFunction(169, this); return false;"><span><span
																								id="cke_87_text"
																								class="cke_text cke_inline_label">Định dạng</span></span><span
																							class="cke_openbutton"><span class="cke_icon"></span></span></a></span></span><span
																				class="cke_rcombo" role="presentation"><span
																					id="cke_89" class="cke_fontSize cke_off"
																					role="presentation"><span id="cke_89_label"
																						class="cke_label">Cỡ chữ</span><a hidefocus="true"
																						title="Cỡ chữ" tabindex="-1"
																						href="javascript:void('Cỡ chữ')" role="button"
																						aria-labelledby="cke_89_label"
																						aria-describedby="cke_89_text"
																						aria-haspopup="true"
																						onkeydown="CKEDITOR.tools.callFunction( 173, event, this );"
																						onfocus="return CKEDITOR.tools.callFunction(174, event);"
																						onclick="CKEDITOR.tools.callFunction(172, this); return false;"><span><span
																								id="cke_89_text"
																								class="cke_text cke_inline_label">Cỡ chữ</span></span><span
																							class="cke_openbutton"><span class="cke_icon"></span></span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_90" class="cke_toolbar"
																				aria-labelledby="cke_90_label" role="toolbar"><span
																				id="cke_90_label" class="cke_voice_label">Màu sắc</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_91"
																						class="cke_off cke_button_textcolor"
																						"="" href="javascript:void('Màu chữ')"
																						title="Màu chữ" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_91_label"
																						aria-haspopup="true"
																						onkeydown="return CKEDITOR.tools.callFunction(175, event);"
																						onfocus="return CKEDITOR.tools.callFunction(176, event);"
																						onclick="CKEDITOR.tools.callFunction(177, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_91_label" class="cke_label">Màu chữ</span><span
																							class="cke_buttonarrow">&nbsp;</span></a></span><span
																					class="cke_button"><a id="cke_92"
																						class="cke_off cke_button_bgcolor"
																						"="" href="javascript:void('Màu nền')"
																						title="Màu nền" tabindex="-1" hidefocus="true"
																						role="button" aria-labelledby="cke_92_label"
																						aria-haspopup="true"
																						onkeydown="return CKEDITOR.tools.callFunction(178, event);"
																						onfocus="return CKEDITOR.tools.callFunction(179, event);"
																						onclick="CKEDITOR.tools.callFunction(180, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_92_label" class="cke_label">Màu nền</span><span
																							class="cke_buttonarrow">&nbsp;</span></a></span></span><span
																				class="cke_toolbar_end"></span></span><span
																				id="cke_93" class="cke_toolbar"
																				aria-labelledby="cke_93_label" role="toolbar"><span
																				id="cke_93_label" class="cke_voice_label">Công cụ</span><span
																				class="cke_toolbar_start"></span><span
																				class="cke_toolgroup" role="presentation"><span
																					class="cke_button"><a id="cke_94"
																						class="cke_off cke_button_maximize"
																						"="" href="javascript:void('Phóng to tối đa')"
																						title="Phóng to tối đa" tabindex="-1"
																						hidefocus="true" role="button"
																						aria-labelledby="cke_94_label"
																						onkeydown="return CKEDITOR.tools.callFunction(181, event);"
																						onfocus="return CKEDITOR.tools.callFunction(182, event);"
																						onclick="CKEDITOR.tools.callFunction(183, this); return false;"><span
																							class="cke_icon">&nbsp;</span><span
																							id="cke_94_label" class="cke_label">Phóng to tối
																								đa</span></a></span></span><span
																				class="cke_toolbar_end"></span></span>
																		</div> <a title="Thu gọn thanh công cụ" id="cke_95"
																		tabindex="-1" class="cke_toolbox_collapser"
																		onclick="CKEDITOR.tools.callFunction(184)"><span>▲</span></a></td>
																</tr>
																<tr role="presentation">
																	<td
																		id="cke_contents_mainbody_contentbody_contentpage_ckConfig"
																		class="cke_contents" style="height: 200px;"
																		role="presentation"><span id="cke_99"
																		class="cke_voice_label">Nhấn ALT + 0 để được giúp đỡ</span>
																		<iframe style="width: 671px; height: 100%;"
																			frameborder="0" aria-describedby="cke_99"
																			title="Trình soạn thảo phong phú, mainbody_contentbody_contentpage_ckConfig"
																			src="" tabindex="-1" allowtransparency="true"></iframe></td>
																</tr>
																<tr role="presentation">
																	<td
																		id="cke_bottom_mainbody_contentbody_contentpage_ckConfig"
																		class="cke_bottom" role="presentation"><div
																			class="cke_resizer cke_resizer_ltr"
																			title="Kéo rê để thay đổi kích cỡ"
																			onmousedown="CKEDITOR.tools.callFunction(96, event)"></div>
																		<span
																		id="cke_path_mainbody_contentbody_contentpage_ckConfig_label"
																		class="cke_voice_label">Nhãn thành phần</span>
																		<div
																			id="cke_path_mainbody_contentbody_contentpage_ckConfig"
																			class="cke_path" role="group"
																			aria-labelledby="cke_path_mainbody_contentbody_contentpage_ckConfig_label">
																			<span class="cke_empty">&nbsp;</span>
																		</div></td>
																</tr>
															</tbody>
														</table></span></span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Từ khóa <span
											class="text-error">*</span></label>
										<div class="col-md-7">
											<textarea
												name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$txtTag"
												id="mainbody_contentbody_contentpage_txtTag"
												onblur="ValidateTag()"
												class="form-control tag-editor-hidden-src"></textarea>
											<ul class="tag-editor ui-sortable">
												<li style="width: 1px" class="ui-sortable-handle">&nbsp;</li>
												<li class="placeholder ui-sortable-handle"><div>Tối thiểu 3
														từ khóa</div></li>
											</ul>
											<span
												class="glyphicon glyphicon-ok form-control-feedback success-ic"
												aria-hidden="true" id="successTag" style="display: none;"></span>
										</div>
										<div class="col-md-3 note-col">
											<div class="form-control-static">
												<span id="tag_error" class="text-error">&nbsp;</span> <span
													class="text-nowrap">Tối đa 6 từ khóa </span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10">
											<div id="listSuggest"></div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10">
											<textarea class="form-control up-textarea" rows="5"
												spellcheck="false">- Mọi thông tin của thành viên đăng tải trên diễn đàn sharecode.vn phải chính xác.
- Mọi source code khi upload đã được build phải đảm bảo chạy tốt, mô tả đầy đủ thông tin và đúng như hình ảnh đính kèm.
- Nội dung file nén đã được kiểm tra, đảm bảo không chứa tệp tin không khả dụng, độc hại, virus hoặc bất cứ liên kết khác...
- File chứa code có đầy đủ file chạy, thông tin chi tiết về source, hướng dẫn cài đặt và tài khoản đăng nhập chi tiết.
- Cam kết hỗ trợ hoặc fix lỗi nếu code &gt;= 100Xu (Code chất lượng), khi người mua liên lạc qua email hoặc số điện thoại của bạn.
- Tất cả source code bị báo cáo vi phạm bản quyền nếu được ban quản trị xác nhận là đúng, source code sẽ bị xóa bỏ.
- Source code đã upload lên sharecode.vn là thành viên upload đã đồng ý cho phép các thành viên download và sử dụng.
                                </textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10">
											<div class="checkbox">
												<label id="chkRequireBox" style="border-radius: 4px;"> <input
													name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$chkRequirement"
													type="checkbox"
													id="mainbody_contentbody_contentpage_chkRequirement"
													onchange="ValidateCheck()" value="1"> <a
													href="/quy-dinh-chung.htm" target="_blank" class="aorange"
													title="Xem thêm điều khoản sử dụng">Tôi đã đọc và đồng ý
														với các điều khoản của Sharecode.vn&nbsp;</a>
												</label> &nbsp;&nbsp;<span id="check_error"
													class="text-error" style="line-height: 20px;">&nbsp;</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10">
											<span id="upload_error" class="text-error">Vui lòng nhập mô
												tả chi tiết.</span>
										</div>
									</div>
									<br>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10 line-h">
											<a onclick=" return ValidateUpload();"
												id="mainbody_contentbody_contentpage_btnUpload"
												class="button-orange"
												href="javascript:__doPostBack('ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnUpload','')"><i
												class="fa fa-cloud-upload fa-lg" aria-hidden="true"></i>&nbsp;<span
												id="mainbody_contentbody_contentpage_lblButton">TẢI LÊN NGAY</span></a>
											&nbsp;&nbsp; <span class="text-error text-nowrap"
												style="line-height: 40px;">(*) Là các trường bắt buộc nhập
												nội dung</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div id="imgLoading" class="popup_loading" style="display: none;">
						<img src="/Image/loading.gif">
						<div>Đang xử lý...</div>
					</div>
					<div class="modal fade" id="PopupImage" tabindex="-1" role="dialog"
						style="display: none;" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content text-center">
								<div class="text-center up-pad">
									<strong class="orange title4 text-uppercase">Kéo để chọn vùng
										ảnh đẹp nhất</strong><br> <em>(Đặt chuột vào các ô vuông và
										"Kéo")</em>
								</div>
								<img id="Image1"
									src="data:image/jpeg;base64,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"
									alt=""
									style="display: none; visibility: hidden; width: 159px; height: 225px;">
								<div class="jcrop-holder"
									style="width: 159px; height: 225px; position: relative; background-color: rgb(0, 0, 0);">
									<div
										style="position: absolute; z-index: 600; width: 56px; height: 42px; top: 123px; left: 23px;">
										<div
											style="width: 100%; height: 100%; z-index: 310; position: absolute; overflow: hidden;">
											<img
												src="data:image/jpeg;base64,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"
												style="border: none; visibility: visible; margin: 0px; padding: 0px; position: absolute; top: -123px; left: -23px; width: 159px; height: 225px;">
											<div class="jcrop-hline"
												style="position: absolute; opacity: 0.4;"></div>
											<div class="jcrop-hline bottom"
												style="position: absolute; opacity: 0.4;"></div>
											<div class="jcrop-vline right"
												style="position: absolute; opacity: 0.4;"></div>
											<div class="jcrop-vline"
												style="position: absolute; opacity: 0.4;"></div>
											<div class="jcrop-tracker"
												style="cursor: move; position: absolute; z-index: 360;"></div>
										</div>
										<div
											style="width: 100%; height: 100%; z-index: 320; display: block;">
											<div class="ord-n jcrop-dragbar"
												style="cursor: n-resize; position: absolute; z-index: 370;"></div>
											<div class="ord-s jcrop-dragbar"
												style="cursor: s-resize; position: absolute; z-index: 371;"></div>
											<div class="ord-e jcrop-dragbar"
												style="cursor: e-resize; position: absolute; z-index: 372;"></div>
											<div class="ord-w jcrop-dragbar"
												style="cursor: w-resize; position: absolute; z-index: 373;"></div>
											<div class="ord-n jcrop-handle"
												style="cursor: n-resize; position: absolute; z-index: 374; opacity: 0.5;"></div>
											<div class="ord-s jcrop-handle"
												style="cursor: s-resize; position: absolute; z-index: 375; opacity: 0.5;"></div>
											<div class="ord-e jcrop-handle"
												style="cursor: e-resize; position: absolute; z-index: 376; opacity: 0.5;"></div>
											<div class="ord-w jcrop-handle"
												style="cursor: w-resize; position: absolute; z-index: 377; opacity: 0.5;"></div>
											<div class="ord-nw jcrop-handle"
												style="cursor: nw-resize; position: absolute; z-index: 378; opacity: 0.5;"></div>
											<div class="ord-ne jcrop-handle"
												style="cursor: ne-resize; position: absolute; z-index: 379; opacity: 0.5;"></div>
											<div class="ord-se jcrop-handle"
												style="cursor: se-resize; position: absolute; z-index: 380; opacity: 0.5;"></div>
											<div class="ord-sw jcrop-handle"
												style="cursor: sw-resize; position: absolute; z-index: 381; opacity: 0.5;"></div>
										</div>
									</div>
									<div class="jcrop-tracker"
										style="width: 163px; height: 229px; position: absolute; top: -2px; left: -2px; z-index: 290; cursor: crosshair;"></div>
									<input type="radio" class="jcrop-keymgr"
										style="position: fixed; left: -120px; width: 12px; display: inline-block;"><img
										src="data:image/jpeg;base64,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"
										alt=""
										style="display: block; visibility: visible; width: 159px; height: 225px; border: none; margin: 0px; padding: 0px; position: absolute; top: 0px; left: 0px; opacity: 0.6;">
								</div>
								<div class="text-center up-pad">
									<input type="button" id="btnCrop"
										class="button-green button-small" value="Chọn ảnh"> <input
										type="button" id="btnCancel"
										class="button-orange button-small"
										value="&nbsp;&nbsp;Hủy bỏ&nbsp;&nbsp;">
								</div>
								<input type="hidden" name="imgX1" id="imgX1" value="23"> <input
									type="hidden" name="imgY1" id="imgY1" value="123"> <input
									type="hidden" name="imgWidth" id="imgWidth" value="56"> <input
									type="hidden" name="imgHeight" id="imgHeight" value="42"> <input
									type="hidden" name="imgCropped" id="imgCropped"
									value="data:image/png;base64,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">
							</div>
						</div>
					</div>
				</div>
				<input type="hidden"
					name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$hdCodeId"
					id="mainbody_contentbody_contentpage_hdCodeId" value="0"> <br> <br>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>


