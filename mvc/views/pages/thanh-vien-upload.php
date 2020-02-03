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
<form method="post" action="<?php echo $servername ?>/thanh-vien-upload/upload-code" id="frm-upload" enctype="multipart/form-data">
		<div class="row">
			<div class="center_column col-xs-12 col-sm-12" id="center_column">
				<div class="box-bg">
					<div class="upload_form">
						<h1 class="title3 bold text-center up-title">UPLOAD CODE CHIA SẺ
							&amp; KIẾM TIỀN CÙNG CODE4V</h1>
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
							<div id="mainbody_contentbody_contentpage_panDefaultButton">
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
												<label class="btn btn-warning active" id="lblCheckFree"> <input
													type="radio" name="options" id="idFree" value="Free"
													checked> Miễn phí (0 Xu)
												</label> <label class="btn btn-warning" id="lblCheckCode"> <input
													type="radio" name="options" id="idCode" value="Code"> Tham
													khảo (2Xu - 99Xu)
												</label> <label class="btn btn-warning"
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
															name="fileupload2[]"
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


