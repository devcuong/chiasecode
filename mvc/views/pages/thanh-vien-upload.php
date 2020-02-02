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
				id="path-link" class="agreen">
				<h2 id="path-title" class="abread">Tải
					code lên</h2>
			</a>
		</div>
<form method="post" action="/thanh-vien-upload" id="frm-upload" enctype="multipart/form-data">
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
											<div id="uploaded_image"><img id="mainbody_contentbody_contentpage_imgUpdateCode"
													class="u_image_edit" src="http://localhost/chiasecode/mvc/public/images/imageplace.png"></div>
												<input type="file" id="file-upload-1" class="img_upload"
													accept=".jpg,.png,.gif">
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
												name="txt-title"
												type="text" maxlength="200"
												id="txt-title"
												class="form-control"
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
												name="ddl-category-lang"
												id="ddl-category-lang"
												class="form-control">
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
												name="txt-subtitle"
												rows="2" cols="20"
												id="txt-subtitle"
												class="form-control up-textarea"
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
												name="txt-link"
												type="text" maxlength="300"
												id="txt-link"
												title="Link download source code: Mediafile, Fshare, Google drive..."
												class="form-control"
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
												name="txt-link-demo"
												type="text" maxlength="300"
												id="txt-link-demo"
												title="Link demo sản phẩm thực tế đã triển khai từ code"
												class="form-control"
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
													name="txt-price-other"
													type="text" maxlength="4"
													id="txt-price-other"
													class="bold form-control"
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
												<label class="orange"> <input id="chk-cam-ket" value="1" type="checkbox"> Cam
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
															name="file-upload-2"
															id="file-upload-2"
															class="upload" accept="image/gif, image/jpeg, image/png">
													</div>
													<div class="mess alignleft" id="count-files"></div>

													<div id="errFileMax2" class="text-error clear"></div>
												</div>
												<span id="lbl-list-image"></span>
												<div id="lbl-list-image">


													<div id="total-image"
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
										<div class="col-md-10" id="editor-detail">
											<textarea
												name="ck-detail"
												rows="2" cols="20"
												id="ck-detail"
												style="height: 200px; visibility: hidden; display: none;"></textarea>
											 <span
												class="glyphicon glyphicon-ok form-control-feedback success-ic"
												aria-hidden="true" id="successDetail" style="display: none;"></span>
											<script>
                                                CKEDITOR.replace( 'ck-detail', {"htmlEncodeOutput" : true, "toolbar" : "Basic"} );
                                            </script>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Hướng dẫn cài đặt</label>
										<div class="col-md-10">
											<textarea
												name="ck-config"
												rows="2" cols="20"
												id="ck-config"
												style="height: 200px; visibility: hidden; display: none;"></textarea>
										</div>
										<script>
                                                CKEDITOR.replace('ck-config', {"htmlEncodeOutput" : true, "toolbar" : "Basic"});
                                        </script>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label bold">Từ khóa <span
											class="text-error">*</span></label>
										<div class="col-md-7">
											<textarea
												name="txt-tag"
												id="txt-tag"
												class="form-control tag-editor-hidden-src" onblur="ValidateTag()"></textarea>
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
												spellcheck="false">- Mọi thông tin của thành viên đăng tải trên diễn đàn CODE4V phải chính xác.
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
												<label id="chk-require-box" style="border-radius: 4px;"> <input
													name="chk-require"
													type="checkbox"
													id="chk-require" value="1"> <a
													href="quy-dinh-chung" target="_blank" class="aorange"
													title="Xem thêm điều khoản sử dụng">Tôi đã đọc và đồng ý
														với các điều khoản của code4v.com&nbsp;</a>
												</label> &nbsp;&nbsp;<span id="check_error"
													class="text-error" style="line-height: 20px;">&nbsp;</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10">
											<span id="upload_error" class="text-error">&nbsp;</span>
										</div>
									</div>
									<br>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10 line-h">
											<a onclick="SubmitForm()"
												id="btn-upload"
												class="button-orange" ><i
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
								</div>
								<div class="text-center up-pad">
									<input type="button" id="btnCrop"
										class="button-green button-small" value="Chọn ảnh"> <input
										type="button" id="btnCancel"
										class="button-orange button-small"
										value="&nbsp;&nbsp;Hủy bỏ&nbsp;&nbsp;">
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
<div id="uploadimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload & Crop Image</h4>
        </div>
        <div class="modal-body">
          <div class="row">
       <div class="col-md-8 text-center">
        <div id="image_demo" style="width:350px; margin-top:30px"></div>
       </div>
       <div class="col-md-4" style="padding-top:30px;">
        <br />
        <br />
        <br/>
        <button class="btn btn-success crop_image">Crop & Upload Image</button>
     </div>
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
    </div>
</div>


