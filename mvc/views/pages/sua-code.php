<?php require_once "./mvc/core/String.php"?>
<?php require_once "./mvc/core/Config.php"?>
<div id="view-content-page" class="view-content-page">
<?php while ($row = mysqli_fetch_array($data["InforSourceCode"])) { ?>
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
				href="thong-tin-ca-nhan"
				id="breadcrumb-userName" class="agreen"><?php echo $_SESSION['username'] ?></a>
			<span class="navigation-pipe">&nbsp;</span> <a class="agreen"
				href="https://sharecode.vn/code-upload-cua-toi.htm">
				<h2 class="abread">Code tải lên</h2>
			</a> <span class="navigation-pipe">&nbsp;</span> <a
				href="/thanh-vien-upload"
				id="path-link" class="agreen">
				<h2 id="path-title" class="abread">Tải
					code lên</h2>
			</a>
		</div>
<form method="post" action="<?php echo $servername ?>/sua-code/update-code" id="frm-upload" enctype="multipart/form-data">
		<div class="row">
			<div class="center_column col-xs-12 col-sm-9" id="center_column">
				<div class="box-bg">
					<div class="upload_form">
						<h1 class="title3 bold text-center up-title" id="up-title">UPDATE CODE</h1>
						<input type="hidden" id="hidden-code-id" name="hidden-code-id" value="<?php echo $row["id"] ?>">
						<div class="up-box">
							<div id="mainbody_contentbody_contentpage_panDefaultButton">
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-md-2 control-label bold">Ảnh đại diện <span
											class="text-error">*</span></label>
										<div class="col-md-10">
											<div class="u_image validation-success">
											<div id="uploaded_image">
											<img id="mainbody_contentbody_contentpage_imgUpdateCode"
													class="u_image_edit" src="<?php echo $servername ?>/mvc/public/member/thumbnail/<?php echo $row["anhdaidien"] ?>">
											<input type="hidden" id="img-dai-dien-hidden" name="img-dai-dien-hidden" value="<?php echo $data["ImageEncode"]; ?>" >
											</div>
												<input type="file" id="file-upload-1" class="img_upload"
													accept=".jpg,.png,.gif">
											</div>
											<div class="alignleft u_image_txt">
												<div class="true-ic">Ảnh đẹp sẽ giúp code có nhiều lượt xem</div>
												<div class="true-ic">Dung lượng tối đa 2MB</div>
												<div class="true-ic">Nếu không có ảnh sẽ lấy ảnh mặc định</div>
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
												placeholder="Tối thiểu 20 kí tự" value="<?php echo $row["tieudecode"] ?>"> <span
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
												<?php foreach ($arrDanhMuc as $key => $value) {?>
                                                    <option value="<?php echo $key ?>" <?php if($row["danhmuc"] == $key){ echo "selected"; } ?>><?php echo $value ?></option>
                                                <?php } ?>
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
												style="height: 60px;"><?php echo $row["motangan"] ?></textarea>
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
												placeholder="Link download: Mediafile, Fshare, Google drive..." value="<?php echo $row["linkcode"] ?>">
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
												placeholder="Link live demo (Nếu có)" value="<?php echo $row["linkdemo"] ?>"> <span
												class="glyphicon glyphicon-ok form-control-feedback success-ic"
												aria-hidden="true" id="successDemo" style="display: none;" ></span>
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
											<?php if($row["luachonphitai"] == "Free") {?>
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
												<?php } if($row["luachonphitai"] == "Code" ){?>
												<label class="btn btn-warning" id="lblCheckFree"> <input
													type="radio" name="options" id="idFree" value="Free"
													checked> Miễn phí (0 Xu)
												</label> <label class="btn btn-warning active" id="lblCheckCode"> <input
													type="radio" name="options" id="idCode" value="Code"> Tham
													khảo (2Xu - 99Xu)
												</label> <label class="btn btn-warning"
													id="lblCheckCodeOK"> <input type="radio" name="options"
													id="idCodeOK" value="CodeOK"> Chất lượng (&gt;= 100 Xu)
												</label>
												<?php } if($row["luachonphitai"] == "CodeOK" ){?>
												<label class="btn btn-warning" id="lblCheckFree"> <input
													type="radio" name="options" id="idFree" value="Free"
													checked> Miễn phí (0 Xu)
												</label> <label class="btn btn-warning active" id="lblCheckCode"> <input
													type="radio" name="options" id="idCode" value="Code"> Tham
													khảo (2Xu - 99Xu)
												</label> <label class="btn btn-warning"
													id="lblCheckCodeOK"> <input type="radio" name="options"
													id="idCodeOK" value="CodeOK"> Chất lượng (&gt;= 100 Xu)
												</label>
												<?php } ?>
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
													placeholder="Tự nhập phí tải" <?php if($row["phitai"] != 0){ echo "value=".$row["phitai"]; } ?>> <span
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
												<label class="orange"> <input id="chk-cam-ket" name="chk-cam-ket" value="1" type="checkbox"> Cam
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
															name="file-upload-2[]"
															id="file-upload-2"
															class="upload" accept="image/gif, image/jpeg, image/png">
															<input type="hidden" id="hidden-image-code" name="hidden-image-code" value="<?php echo $row["hinhanhcode"] ?>">
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
												style="height: 200px; visibility: hidden; display: none;"><?php echo $row["motachitiet"] ?></textarea>
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
												style="height: 200px; visibility: hidden; display: none;"><?php echo $row["huongdancaidat"] ?></textarea>
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
												class="form-control tag-editor-hidden-src" onblur="ValidateTag()"><?php echo $row["tukhoa"] ?></textarea>
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
											<a onclick="SubmitUpdateCode()"
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
		<?php require_once 'mvc/views/partial/right-column.php';?>
		</div>
		</form>
	</div>
</div>
<?php }?>
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
<div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
							<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
							<h1>UPLOAD THÀNH CÔNG!</h1>
							<p>code của bạn đã upload thành công lên hệ thống, code sẽ hiển thị sau khi ban quản trị kiểm duyệt</p>
							<h3 class="cupon-pop">TÀI KHOẢN: <span><?php echo $_SESSION["username"] ?></span></h3>
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>

