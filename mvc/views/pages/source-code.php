<?php require_once "./mvc/core/String.php"?>
<?php require_once "./mvc/core/Config.php"?>
<div id="view-content-page" class="view-content-page">
	<div class="container" id="columns">
	 <?php
	 $arrImg = [];
while ($row = mysqli_fetch_array($data["InforSourceCode"])) {
    ?>
		<div class="breadcrumb clearfix" itemscope=""
			itemtype="http://schema.org/BreadcrumbList">
			<span itemprop="itemListElement" itemscope=""
				itemtype="http://schema.org/ListItem"> <a itemprop="item"
				class="agreen" href="/" title="Trở lại trang chủ">Trang chủ
			</a>
			</span><span class="navigation-pipe">&nbsp;</span><span
				itemprop="itemListElement" itemscope=""
				itemtype="http://schema.org/ListItem"> <a
				href="/ngon-ngu-lap-trinh/wordpress-29.htm" id="path-cate"
				itemprop="item" class="agreen" title="Danh mục WordPress"><span
					itemprop="name">WordPress</span></a>
			</span> <span class="navigation-pipe">&nbsp;</span> <span
				itemprop="itemListElement" itemscope=""
				itemtype="http://schema.org/ListItem"> <a
				href="/the-loai-source-code/website-1" id="path-type"
				itemprop="item" class="agreen" title="Thể loại Website"><span
					itemprop="name">Website</span></a>
			</span><span class="navigation-pipe">&nbsp;</span><a
				href="/source-code/source-code-website-ban-may-tinh-laptop-19470.htm"
				id="path-link" class="agreen" itemprop="item"> <span
				id="mainbody_breadcrumb_PathLinkTitle" itemprop="name">Source code
					website bán máy tính laptop Wordpress</span>
			</a>

		</div>
		<div class="row" itemscope="" itemtype="http://schema.org/Product">
			<div class="center_column col-xs-12 col-sm-9" id="center_column">

				<div id="mainbody_contentbody_upPannel">

					<div class="row">
						<div class="col-sm-5">
							<div class="img-border">
								<img id="code-image"
									title="Download ngay Source code website bán máy tính laptop Wordpress"
									class="img-val" itemprop="image"
									src="<?php echo $servername; ?>/mvc/public/member/thumbnail/<?php echo $row["anhdaidien"] ?>"
									alt="share code bán hàng php,code bán hàng wordpress,code web bán máy tính,code bán máy tính php,web bán hàng bằng wordpress,code bán hàng php">
							</div>
							<div class="text-center dt-gallery">
								<a href="#anh-demo" class="aorange"><span
									id="count-gallery">Xem tất cả ảnh demo</span></a>
							</div>

						</div>
						<div class="col-sm-7 dt-center">
							<h1 id="title-code" class="dt-title bold" itemprop="name"><?php echo $row["tieudecode"] ?></h1>
							<span class="red dt-title bold text-nowrap">[Mã code <span
								id="mainbody_contentbody_Code" itemprop="productID"><?php echo $row["id"] ?></span>]
							</span>
							<div class="row title5">
								<div class="col-md-6 col-lg-7 dt-sta-vie">
									<div class="rateit rate-po rateit-bg" data-rateit-value="5"
										data-rateit-readonly="true">
										<button id="rateit-reset-2" type="button" data-role="none"
											class="rateit-reset" aria-label="reset rating"
											aria-controls="rateit-range-2" style="display: none;">
											<span></span>
										</button>
									</div>
									<span id="total-rate" class="text-nowrap">1 Đánh giá</span>
								</div>
								<div class="col-md-6 col-lg-5 dt-sta-vie2 red">
									<i class="fa fa-download" aria-hidden="true"></i>&nbsp;<b
										id="download-count"><?php echo $row["luottai"] ?></b>&nbsp;&nbsp;&nbsp;&nbsp;
									<span class="dt-vie-ic">&nbsp;<b id="views"><?php echo $row["luotxem"] ?></b></span>&nbsp;&nbsp;&nbsp;&nbsp;
									<span class="text-nowrap"><i class="fa fa-heart"
										aria-hidden="true"></i>&nbsp;<b
										id="mainbody_contentbody_Likes">11</b></span>
								</div>
							</div>
							<div class="line"></div>
							<div class="row">
								<div class="col-sm-10 col-md-8 dt-price">
									<span class="bold">Phí tải: <span
										id="copyright" class="green"><?php
    
if (intval($row["phitai"]) == 0) {
        echo "Miễn Phí";
    } else {
        echo $row["phitai"] . " Xu " . "(1Xu =
										1.000đ)";
    }
    ?> </span></span>
								</div>
								<div class="col-sm-2 col-md-4 dt-pri-btn text-center">
									<a id="mainbody_contentbody_btnLike" title="Yêu thích code này"
										class="button-orange button-small LikeSuccess"
										href="javascript:__doPostBack('ctl00$ctl00$mainbody$contentbody$btnLike','')"><i
										class="fa fa-heart line-h20" aria-hidden="true"></i><span
										class="hidden-sm">&nbsp; YÊU THÍCH</span></a>&nbsp;

								</div>
							</div>
							<div class="line"></div>
							<div class="row">
								<div class="col-md-7 dt-des">
									<meta itemprop="brand" content="code4v.com">
									<meta itemprop="releaseDate" content="5/11/2018 9:33:36 PM">
									<div class="dt-col">Danh mục</div>
									<div itemprop="material">
										<a href="/ngon-ngu-lap-trinh/wordpress-29.htm"
											id="mainbody_contentbody_Lang2" class="red" target="_blank">WordPress</a>
									</div>
									<div class="dt-col">Thể loại</div>
									<div itemprop="category">
										<a href="/the-loai-source-code/website-1.htm"
											id="mainbody_contentbody_Category2" class="red"
											target="_blank">Website</a>
									</div>
									<div class="dt-col">Nhóm code</div>
									<div>
										<a href="/code-chat-luong.htm"
											id="mainbody_contentbody_Group2" class="agreen"
											target="_blank">Code chất lượng</a> <span class="txt-colo"
											data-toggle="tooltip" data-placement="top"
											title="1-CODE MIỄN PHÍ (0Xu): Code học hỏi. 2-CODE THAM KHẢO (2Xu đến 99Xu): Phí tải code để tham khảo và phát triển. 3-CODE CHẤT LƯỢNG (>=100Xu): Code đảm bảo, thường có demo trực tiếp và được cam kết hỗ trợ từ tác giả."><i
											class="fa fa-info-circle" aria-hidden="true"></i></span>
									</div>
									<div class="dt-col">Ngày đăng</div>
									<div id="date-post"><?php
    $timeStamp = $row['ngayupdate'];
    $timeStamp = date("d/m/Y", strtotime($timeStamp));
    echo $timeStamp;
    ?></div>
									<div class="dt-col">Loại file</div>
									<div id="file-type"><?php echo $row["loaifile"] ?></div>
									<div class="dt-col">Dung lượng</div>
									<div id="file-size"><?php echo $row["dungluong"] ?></div>
								</div>
								<div class="col-md-5 dt-dow-vie">
									<a href="#Download" class="btn2 button-down bold"
										title="Download code này">&nbsp; DOWNLOAD</a>
										<?php if($row["linkdemo"] != ""){?>
                                    <a
										href="<?php echo $row["linkdemo"] ?>" id="btn-demo"
										target="blank" class="btn2 button-demo bold"
										title="Xem demo thực tế">&nbsp; XEM DEMO</a>
										<?php }?>
									
								</div>
							</div>
							<div class="line"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7 col-sm-push-5">
							<div class="dt-help">
								<b>Hướng dẫn: &nbsp;&nbsp;</b> <a
									href="https://sharecode.vn/cau-hoi/huong-dan-cach-tai-code-mien-phi-14.htm"
									target="_blank" class="dt-tag">Tải code miễn phí</a> <a
									href="https://sharecode.vn/cau-hoi/huong-dan-cach-tai-code-co-phi-15.htm"
									target="_blank" class="dt-tag">Tải code có phí</a> <a
									href="https://sharecode.vn/cau-hoi/huong-dan-ho-tro-ki-thuat-16.htm"
									target="_blank" class="dt-tag">Hỗ trợ kĩ thuật</a>
							</div>
							<div class="dt-chk red">
								<?php if($row["luachonphitai"] == "CodeOK" && $row["camkethotro"] != 0) { ?>
										<div id="chk-codeok" class="it-chk">Cam kết hỗ trợ</div>
								<?php } ?>
								
								<div class="it-chk">Không chứa mã độc</div>
								<?php if($row["linkdemo"] != ""){?>
									<div id="chk-demo" class="it-chk">Có demo thực tế</div>
								<?php } ?>
								<?php if($row["huongdancaidat"] != "") {?>
									<div id="chk-config" class="it-chk">Có hướng dẫn cài đặt</div>
								<?php } ?>
							</div>
						</div>
						<div class="col-sm-5 col-sm-pull-7">
						<?php
    if ($row["hinhanhcode"] != '') {
        $imagesDemo = $row["hinhanhcode"];
        $arrImg = explode(",", $imagesDemo);
        for ($i = 0; $i < count($arrImg); $i ++) {
            ?>
						    <div class="dt-img-small">
								<img
									src="<?php echo $servername ?>/mvc/public/member/code/<?php echo $arrImg[$i]?>"
									alt="code shop game,code opencart 3.x full,code shop php full"
									title="Download Share code shop công nghệ bằng Opencart 3.0 tiếng Việt ngay!">
							</div>
						<?php
        }
    }
    
    ?>
						</div>
					</div>
					<br>
					<div class="dt-sub" title="Mô tả ngắn">
						<h4 class="title1" itemprop="description"><?php echo $row["motangan"]?></h4>
					</div>
					<br> <span class="dt-box-title bold">MÔ TẢ CHI TIẾT</span>
					<div class="dt-box entry-detail">
						<div>
							<strong>THÔNG TIN CHUNG:</strong>
						</div>
						<div>&nbsp;</div>
						<?php echo html_entity_decode($row["motachitiet"]) ?>

						<p id="box-text-config">
							<br> XEM THÊM ==&gt; <a href="#huong-dan-cai-dat" class="aorange">Hướng
								dẫn cài đặt chi tiết</a>
						</p>
						<p id="anh-demo">&nbsp;</p>
						<div id="div-gallery-image" class="dt-img">
							<b>HÌNH ẢNH DEMO</b> <br> <br>			
								<?php
								for($i=0;$i<count($arrImg);$i++){
								?>
									<div class="text-center">
								<img
									src="<?php echo $servername ?>/mvc/public/member/code/<?php echo $arrImg[$i] ?>"
									alt="<?php  ?>"
									title="Download Source code website bán máy tính laptop Wordpress ngay!"
									class="dt-max-img">
									</div>
									<br>
									<?php } ?>
							
							<br>
						</div>
						<p class="alignright" id="huong-dan-cai-dat">Nguồn: Code4v.com</p>
						
					</div>
					<?php if($row["huongdancaidat"] != ""){ ?>
					<br> <br> <span class="dt-box-title bold">HƯỚNG DẪN CÀI ĐẶT</span>
					<div class="dt-box entry-detail">
						<?php echo html_entity_decode($row["huongdancaidat"]) ;?>
					</div>
					<?php } ?>
					<div class="clear" style="height: 40px;">&nbsp;</div>
					<div class="dt-down">
						<div class="dt-down2">
							<div class="col-sm-7 col-md-8">
								<div class="bold title3">LINK DOWNLOAD</div>
								<h2 id="file-name" class="dt-file">
									website.rar <span>[111 MB]</span>
								</h2>
								<div id="status" class="dt-true-ic bold">File đã kiểm duyệt</div>
								<a id="code-giong" class="aorange  text-nowrap dt-action"
									role="button" data-toggle="collapse" href="#collError"
									aria-expanded="false" aria-controls="collError"><i
									class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;Báo lỗi
									(or) Gửi hỗ trợ</a> &nbsp;&nbsp;&nbsp; <a
									href="bao-code-trung/<?php echo $row["id"] ?>" id="lnk-copyright"
									class="aorange text-nowrap dt-action"><i
									class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;Báo
									vi phạm bản quyền</a>

							</div>
							<div class="col-sm-5 col-md-4 text-center">
								<strong>Pass giải nén</strong> (Nếu có):<br> <span class="red">code4v.com</span>
								<a onclick="return false;" id="btn-link-main"
									title="Download Source code website bán máy tính laptop Wordpress ngay!"
									class="btn2 button-down2" data-target="#Message_modal"
									role="button" data-toggle="modal"><div class="btn-box">
										<div class="btn-ic"></div>
										<div class="btn-txt bold">
											DOWNLOAD<br>
											<?php if($row["phitai"] != 0) {?>
											<span id="div-price2">(<?php echo $row["phitai"] ?>
												Xu)</span>
											<?php } else { ?>
											<span id="div-price2">(Miễn phí)</span>
											<?php } ?>
										</div>
									</div></a>

							</div>
							<div class="col-xs-12">
								<div class="collapse" id="coll-error">
									<div class="well">
										<textarea name="txt-error" rows="3" cols="20" id="txt-error"
											class="form-control send-sp"
											placeholder="Nhập mô tả lỗi (or) nội dung yêu cầu hỗ trợ..."></textarea>
										<input type="submit"
											name="ctl00$ctl00$mainbody$contentbody$btnError"
											value="Gửi ngay" id="mainbody_contentbody_btnError"
											class="button-orange button-small dt-note SendSuccess">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Thông báo không đủ xu download -->
				<div class="modal fade" id="Message_modal" tabindex="-1"
					role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header popup_header">
								<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
								<p class="modal-title text-center" id="myModalLabel">DOWNLOAD
									SOURCE CODE</p>
							</div>
							<div class="modal-body">
								<div class="row bg-pop-info bg-colo2">
									<div class="col-xs-12">
										<span><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;<span
											id="mainbody_contentbody_messUser">Doan Cuong</span></span>&nbsp;&nbsp;&nbsp;
										<span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i>&nbsp;<span
											id="mainbody_contentbody_messEmail">kd3.gianhangvn@gmail.com</span></span>&nbsp;&nbsp;&nbsp;

										<span>Khả dụng:&nbsp;<b
											id="mainbody_contentbody_messMoneyAllow" class="agreen">30 Xu</b></span>
									</div>
								</div>
								<br>
								<div class="text-center orange">**Tài khoản của bạn không đủ để
									download source code này!</div>
								<br>
								<div class="form-horizontal  bold">
									<div class="form-group">
										<label class="col-xs-6 control-label dt-label">Khả dụng:</label>
										<div class="col-xs-6">
											<div id="mainbody_contentbody_messMoney2"
												class="green dt-lbl">&nbsp;30 Xu</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-6 control-label dt-label">Download code:</label>
										<div class="col-xs-6">
											<div id="mainbody_contentbody_messPrice"
												class="orange dt-lbl">-300 Xu</div>
										</div>
									</div>
									<div class="col-sm-offset-3 col-sm-6 line"></div>
									<div class="form-group">
										<label class="col-xs-6 control-label dt-label">Còn thiếu:</label>
										<div class="col-xs-6">
											<div id="mainbody_contentbody_messResult"
												class="orange dt-lbl">&nbsp;270 Xu</div>
										</div>
									</div>
								</div>
								<br>
								<div class="text-center">
									<a data-dismiss="modal" data-toggle="modal"
										data-target="#AddMoney" role="button" class="button-orange"
										onclick="createCaptcha();" title="Nạp tiền vào tài khoản"><i
										class="fa fa-money fa-lg" aria-hidden="true"></i>&nbsp; NẠP
										TIỀN VÀO TÀI KHOẢN</a>
								</div>
								<br>
							</div>
							<div class="line_orn"></div>
							<div class="modal-footer">
								<p class="text-center">
									Xem hướng dẫn nạp tiền <a
										href="https://sharecode.vn/cau-hoi/huong-dan-nap-tien-vao-tai-khoan-8.htm"
										class="aorange" target="_blank">tại đây</a>
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="column col-xs-12 col-sm-3" id="left_column">
				<div itemprop="offers" itemscope=""
					itemtype="http://schema.org/Offer">
					<div class="block left-module" id="boxSlogan">
						<div class="block_content">
							<div class="safe-img">
								<img src="https://sharecode.vn/assets/images/safe.png"
									style="border: none;"
									alt="Mua code qua sharecode.vn để được bảo vệ">
							</div>
							<div class="safe-txt bold">
								BẠN HÃY MUA CODE QUA <span class="red">CODE4V.COM</span> ĐỂ ĐƯỢC
								<span class="red">BẢO VỆ</span>
							</div>
						</div>
					</div>
					<div id="boxUserInfo" class="left-module box-border2 bg-colo"
						itemprop="seller" itemscope=""
						itemtype="http://schema.org/Organization">
						<div id="mainbody_contentbody_lblauthor" class="bold us-head">NGƯỜI
							BÁN</div>
						<div class="pro-left">
							<a href="/thanh-vien/luan-nguyen-151826.htm"
								id="mainbody_contentbody_AvantaLink" target="_blank"> <img
								src="https://sharecode.vn/FilesUpload/User/14655-tu-nguyen-entertainment.jpg"
								id="mainbody_contentbody_Avanta" class="prof_img" width="90"
								height="90" itemprop="image" title="Thành viên Nguyễn Minh Luân"
								alt="Nguyễn Minh Luân">
							</a>
						</div>
						<div class="pro-right">
							<a href="/thanh-vien/luan-nguyen-151826.htm" id="username"
								target="_blank" class="agreen bold title4 pro-title"
								itemprop="url" title="Thành viên Nguyễn Minh Luân"><span
								id="mainbody_contentbody_NameText" itemprop="name">Boombi</span></a>
							<div class="line"></div>
							<div class="pro-money us-bg-no">
								<span class="txt-colo">Miễn phí </span><b
									id="mainbody_contentbody_CodeFree">0 Code</b><br> <span
									class="txt-colo">Có phí </span><b
									id="mainbody_contentbody_CodePremium">47 Code</b><br>
							</div>

						</div>
						<div class="clear us-pad">&nbsp;</div>
						<?php if ($row["phitai"] != 0) {?>
						<div id="info-contact" class="us-contact">
							<div class="red item_lable">Thông tin liên hệ &amp; hỗ trợ</div>
							<div class="item">
								Email: <a href="../#" id="mainbody_contentbody_lblEmail"
									title="Click để gửi email!" class="item_detail">Đang ẩn...</a>
							</div>
							<div class="item">
								Số ĐT: <a href="../#" id="mainbody_contentbody_lblPhone"
									title="Click gọi ngay!" class="item_detail">Đang ẩn...</a>
							</div>
							<div class="text-center">
								<em id="lbl-info-contact-note"
									class="txt-colo">(Chỉ hiển thị khi đã mua code)</em>
							</div>
						</div>
						<?php } ?>
					</div>
					<div class="left-module box-border2 bg-colo" id="boxShareFast">
						<div id="mainbody_contentbody_Div1" class="us-head">
							<b>CHIA SẺ NHANH</b> (CODE <span
								id="lbl-idcode"><?php echo $row["id"] ?></span>)
						</div>
						<div id="update-panel1">

							<div class="share-box">
								<a role="button" data-toggle="collapse" href="#boxSendEmail"
									aria-expanded="false" aria-controls="boxSendEmail">
									<div class="share-email">
										<img src="https://topcode.vn/assets/images/share-email.png"
											style="margin-right: 5px"><br> Gửi code tới email bạn bè
									</div>
								</a>
							</div>
							<div class="collapse" id="boxSendEmail" style="margin: 0px 10px">
								<input name="ctl00$ctl00$mainbody$contentbody$txtSendEmail"
									type="text" id="mainbody_contentbody_txtSendEmail"
									class="form-control send-sp" placeholder="Nhập email"> <input
									type="submit"
									name="ctl00$ctl00$mainbody$contentbody$btnSendEmail"
									value="Gửi ngay" id="mainbody_contentbody_btnSendEmail"
									class="button-orange button-small dt-note SendSuccess">
							</div>

						</div>
						<div class="dt-social">

							<div id="fb-share" class="fb-like fb_iframe_widget"
								data-href="https://sharecode.vn/source-code/source-code-website-ban-may-tinh-laptop-19470.htm"
								data-layout="button" data-action="like" data-size="small"
								data-show-faces="true" data-share="true"
								fb-xfbml-state="rendered"
								fb-iframe-plugin-query="action=like&amp;app_id=1938824166400762&amp;container_width=215&amp;href=https%3A%2F%2Fsharecode.vn%2Fsource-code%2Fsource-code-website-ban-may-tinh-laptop-19470.htm&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small">
								<span
									style="vertical-align: bottom; width: 112px; height: 20px;"><iframe
										name="f2befbf9c27b9c8" width="1000px" height="1000px"
										title="fb:like Facebook Social Plugin" frameborder="0"
										allowtransparency="true" allowfullscreen="true" scrolling="no"
										allow="encrypted-media"
										src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=1938824166400762&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D45%23cb%3Df19cfc7561832dc%26domain%3Dsharecode.vn%26origin%3Dhttps%253A%252F%252Fsharecode.vn%252Ff1b23c902ca654c%26relation%3Dparent.parent&amp;container_width=215&amp;href=https%3A%2F%2Fsharecode.vn%2Fsource-code%2Fsource-code-website-ban-may-tinh-laptop-19470.htm&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small"
										style="border: none; visibility: visible; width: 112px; height: 20px;"
										class=""></iframe></span>
							</div>
						</div>

					</div>
					<div id="boxTopCode" style="width: 268px;">

						<div class="block left-module">
							<p class="title_block">CODE NỔI BẬT</p>
							<div class="block_content">
								<ul class="products-block best-sell">

									<li>
										<div class="products-block-left">
											<a
												href="/source-code/30-source-code-ma-nguon-wordpress-phong-phu-load-nhe-chuan-seo-24078.htm">
												<img
												src="http://sharecode.vn/FilesUpload/Code/[vui-long-kiem-tra-lai-link-download-khong-chinh-xac]-30-source-code-ma-nguon-wordpress-phong-phu-load-nhe-chuan-seo-112922.jpg"
												alt="trọn bộ 30 code web wordpress,code wordpress bán hàng,code wordpress thiết kế web,code web mỹ phẩm"
												title="Download 30 Source code mã nguồn WordPress phong phú load nhẹ chuẩn SEO">
											</a>
										</div>
										<div class="products-block-right">
											<p class="product-name">
												<a
													href="/source-code/30-source-code-ma-nguon-wordpress-phong-phu-load-nhe-chuan-seo-24078.htm">
												</a>
											</p>
											<h3 class="title2 bold"
												title="Download 30 Source code mã nguồn WordPress phong phú load nhẹ chuẩn SEO">
												<a
													href="/source-code/30-source-code-ma-nguon-wordpress-phong-phu-load-nhe-chuan-seo-24078.htm">30
													Source code mã nguồn WordPress phong phú load nhẹ chuẩn SEO</a>
											</h3>
											<a
												href="/source-code/30-source-code-ma-nguon-wordpress-phong-phu-load-nhe-chuan-seo-24078.htm">
											</a>
											<p></p>
											<div class="rateit rateit-bg" data-rateit-value="5"
												data-rateit-readonly="true">
												<button id="rateit-reset-18" type="button" data-role="none"
													class="rateit-reset" aria-label="reset rating"
													aria-controls="rateit-range-18" style="display: none;">
													<span></span>
												</button>
												<div id="rateit-range-18" class="rateit-range" tabindex="0"
													role="slider" aria-label="rating"
													aria-owns="rateit-reset-18" aria-valuemin="0"
													aria-valuemax="5" aria-valuenow="5" aria-readonly="true"
													style="width: 80px; height: 16px;">
													<div class="rateit-empty"></div>
													<div class="rateit-selected"
														style="height: 16px; width: 80px;"></div>
													<div class="rateit-hover" style="height: 16px;"></div>
												</div>
											</div>

										</div>
										<div class="products-block-bottom">
											<div>
												<a class="cate" href="/ngon-ngu-lap-trinh/wordpress-29.htm">WordPress</a>
												<span class="alignright view-count">988</span> <span
													class="alignright down-count">0</span>
											</div>
										</div>
									</li>

									<li>
										<div class="products-block-left">
											<a
												href="/source-code/full-code-thuong-mai-dien-tu-moi-24063.htm">
												<img
												src="http://sharecode.vn/FilesUpload/Code/ban-full-code-website-thuong-mai-dien-tu-moi-103256.jpg"
												alt="điện tử,thương mại,code thương mại  điện tử,Share code thương mại điện tử,full code thương mại điện tử,Code thương mại điện tử"
												title="Download Bán full code website thương mại điện tử mới">
											</a>
										</div>
										<div class="products-block-right">
											<p class="product-name">
												<a
													href="/source-code/full-code-thuong-mai-dien-tu-moi-24063.htm">
												</a>
											</p>
											<h3 class="title2 bold"
												title="Download Bán full code website thương mại điện tử mới">
												<a
													href="/source-code/full-code-thuong-mai-dien-tu-moi-24063.htm">Bán
													full code website thương mại điện tử mới</a>
											</h3>
											<a
												href="/source-code/full-code-thuong-mai-dien-tu-moi-24063.htm">
											</a>
											<p></p>
											<div class="rateit rateit-bg" data-rateit-value="5"
												data-rateit-readonly="true">
												<button id="rateit-reset-19" type="button" data-role="none"
													class="rateit-reset" aria-label="reset rating"
													aria-controls="rateit-range-19" style="display: none;">
													<span></span>
												</button>
												<div id="rateit-range-19" class="rateit-range" tabindex="0"
													role="slider" aria-label="rating"
													aria-owns="rateit-reset-19" aria-valuemin="0"
													aria-valuemax="5" aria-valuenow="5" aria-readonly="true"
													style="width: 80px; height: 16px;">
													<div class="rateit-empty"></div>
													<div class="rateit-selected"
														style="height: 16px; width: 80px;"></div>
													<div class="rateit-hover" style="height: 16px;"></div>
												</div>
											</div>

										</div>
										<div class="products-block-bottom">
											<div>
												<a class="cate" href="/ngon-ngu-lap-trinh/wordpress-29.htm">WordPress</a>
												<span class="alignright view-count">634</span> <span
													class="alignright down-count">2</span>
											</div>
										</div>
									</li>

									<li>
										<div class="products-block-left">
											<a
												href="/source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.htm">
												<img
												src="http://sharecode.vn/FilesUpload/Code/share-code-tin-tuc-wordpress-giong-quantrimang.com-152153.jpg"
												alt="code wordpress tin tức chuẩn SEO,code tin tức,code wordpress,code tin tức wordpress"
												title="Download Share code tin tức wordpress giống Quantrimang.com">
											</a>
										</div>
										<div class="products-block-right">
											<p class="product-name">
												<a
													href="/source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.htm">
												</a>
											</p>
											<h3 class="title2 bold"
												title="Download Share code tin tức wordpress giống Quantrimang.com">
												<a
													href="/source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.htm">Share
													code tin tức wordpress giống Quantrimang.com</a>
											</h3>
											<a
												href="/source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.htm">
											</a>
											<p></p>
											<div class="rateit rateit-bg" data-rateit-value="5"
												data-rateit-readonly="true">
												<button id="rateit-reset-20" type="button" data-role="none"
													class="rateit-reset" aria-label="reset rating"
													aria-controls="rateit-range-20" style="display: none;">
													<span></span>
												</button>
												<div id="rateit-range-20" class="rateit-range" tabindex="0"
													role="slider" aria-label="rating"
													aria-owns="rateit-reset-20" aria-valuemin="0"
													aria-valuemax="5" aria-valuenow="5" aria-readonly="true"
													style="width: 80px; height: 16px;">
													<div class="rateit-empty"></div>
													<div class="rateit-selected"
														style="height: 16px; width: 80px;"></div>
													<div class="rateit-hover" style="height: 16px;"></div>
												</div>
											</div>

										</div>
										<div class="products-block-bottom">
											<div>
												<a class="cate" href="/ngon-ngu-lap-trinh/wordpress-29.htm">WordPress</a>
												<span class="alignright view-count">507</span> <span
													class="alignright down-count">1</span>
											</div>
										</div>
									</li>

									<li>
										<div class="products-block-left">
											<a
												href="/source-code/source-code-website-ban-hoa-wordpress-chuan-seo-24128.htm">
												<img
												src="http://sharecode.vn/FilesUpload/Code/source-code-website-ban-hoa-wordpress-chuan-seo-11847.jpg"
												alt="code bán hàng wordpress,web bán hàng bằng wordpress,code web bán hoa,code web cửa hàng hoa,website bán hoa"
												title="Download Source code website bán hoa Wordpress chuẩn seo">
											</a>
										</div>
										<div class="products-block-right">
											<p class="product-name">
												<a
													href="/source-code/source-code-website-ban-hoa-wordpress-chuan-seo-24128.htm">
												</a>
											</p>
											<h3 class="title2 bold"
												title="Download Source code website bán hoa Wordpress chuẩn seo">
												<a
													href="/source-code/source-code-website-ban-hoa-wordpress-chuan-seo-24128.htm">Source
													code website bán hoa Wordpress chuẩn seo</a>
											</h3>
											<a
												href="/source-code/source-code-website-ban-hoa-wordpress-chuan-seo-24128.htm">
											</a>
											<p></p>
											<div class="rateit rateit-bg" data-rateit-value="5"
												data-rateit-readonly="true">
												<button id="rateit-reset-21" type="button" data-role="none"
													class="rateit-reset" aria-label="reset rating"
													aria-controls="rateit-range-21" style="display: none;">
													<span></span>
												</button>
												<div id="rateit-range-21" class="rateit-range" tabindex="0"
													role="slider" aria-label="rating"
													aria-owns="rateit-reset-21" aria-valuemin="0"
													aria-valuemax="5" aria-valuenow="5" aria-readonly="true"
													style="width: 80px; height: 16px;">
													<div class="rateit-empty"></div>
													<div class="rateit-selected"
														style="height: 16px; width: 80px;"></div>
													<div class="rateit-hover" style="height: 16px;"></div>
												</div>
											</div>

										</div>
										<div class="products-block-bottom">
											<div>
												<a class="cate" href="/ngon-ngu-lap-trinh/wordpress-29.htm">WordPress</a>
												<span class="alignright view-count">466</span> <span
													class="alignright down-count">1</span>
											</div>
										</div>
									</li>

									<li>
										<div class="products-block-left">
											<a
												href="/source-code/mau-website-thiet-ke-website-doanh-nghiep-cong-ty-chuyen-nghiep-25192.htm">
												<img
												src="http://sharecode.vn/FilesUpload/Code/mau-website-thiet-ke-website-doanh-nghiep-cong-ty-chuyen-nghiep-9204.jpg"
												alt="web công ty,thiết kế,website,website thiết kế,website doanh nghiệp,chuyên nghiệp"
												title="Download Mẫu website thiết kế website doanh nghiệp, công ty chuyên nghiệp">
											</a>
										</div>
										<div class="products-block-right">
											<p class="product-name">
												<a
													href="/source-code/mau-website-thiet-ke-website-doanh-nghiep-cong-ty-chuyen-nghiep-25192.htm">
												</a>
											</p>
											<h3 class="title2 bold"
												title="Download Mẫu website thiết kế website doanh nghiệp, công ty chuyên nghiệp">
												<a
													href="/source-code/mau-website-thiet-ke-website-doanh-nghiep-cong-ty-chuyen-nghiep-25192.htm">Mẫu
													website thiết kế website doanh nghiệp, công ty chuyên
													nghiệp</a>
											</h3>
											<a
												href="/source-code/mau-website-thiet-ke-website-doanh-nghiep-cong-ty-chuyen-nghiep-25192.htm">
											</a>
											<p></p>
											<div class="rateit rateit-bg" data-rateit-value="5"
												data-rateit-readonly="true">
												<button id="rateit-reset-22" type="button" data-role="none"
													class="rateit-reset" aria-label="reset rating"
													aria-controls="rateit-range-22" style="display: none;">
													<span></span>
												</button>
												<div id="rateit-range-22" class="rateit-range" tabindex="0"
													role="slider" aria-label="rating"
													aria-owns="rateit-reset-22" aria-valuemin="0"
													aria-valuemax="5" aria-valuenow="5" aria-readonly="true"
													style="width: 80px; height: 16px;">
													<div class="rateit-empty"></div>
													<div class="rateit-selected"
														style="height: 16px; width: 80px;"></div>
													<div class="rateit-hover" style="height: 16px;"></div>
												</div>
											</div>

										</div>
										<div class="products-block-bottom">
											<div>
												<a class="cate" href="/ngon-ngu-lap-trinh/wordpress-29.htm">WordPress</a>
												<span class="alignright view-count">446</span> <span
													class="alignright down-count">1</span>
											</div>
										</div>
									</li>

								</ul>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
		       <?php

}
?>      
	</div>
</div>
<div class="clearfix"></div>

