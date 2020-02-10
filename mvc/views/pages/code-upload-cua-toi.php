<?php require_once "./mvc/core/String.php"?>
<?php require_once "./mvc/core/Config.php"?>
<div id="view-content-page" class="view-content-page">
	<div class="breadcrumb clearfix" itemscope=""
		itemtype="http://schema.org/BreadcrumbList">
		<span itemprop="itemListElement" itemscope=""
			itemtype="http://schema.org/ListItem"> <a itemprop="item"
			class="agreen" href="/" title="Trở lại trang chủ">Trang chủ
				<meta itemprop="name" content="sharecode.vn">
		</a>
			<meta itemprop="position" content="1">
		</span> <span class="navigation-pipe">&nbsp;</span> <a
			href="/thong-tin-ca-nhan" id="username" class="agreen">Doan</a> <span
			class="navigation-pipe">&nbsp;</span> <a class="agreen"
			href="/code-upload-cua-toi.htm">
			<h2 class="abread">Code tải lên</h2>
		</a>
	</div>
	<div class="row">
		<div class="center_column col-xs-12 col-sm-9" id="center_column">


			<div class="bg-title">
				<a href="/code-upload-cua-toi.htm" class="search_title alignleft">
					<h1 class="search_title">CODE TẢI LÊN</h1>
				</a>
				<div id="mainbody_contentbody_contentpage_regPanel"
					onkeypress="javascript:return WebForm_FireDefaultButton(event, 'mainbody_contentbody_contentpage_btnSearch')">

					<input
						name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$txtSearch"
						type="text" id="mainbody_contentbody_contentpage_txtSearch"
						class="search_textbox form-control" placeholder="Tìm code tải lên">
					<input type="submit"
						name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnSearch"
						value="" id="mainbody_contentbody_contentpage_btnSearch"
						class="btn_hide">

				</div>
			</div>
			<br>
			<br>
			<div class="row">
				<div class="col-sm-5 col-md-7"></div>
				<div class="col-sm-7 col-md-5">
					<div id="mainbody_contentbody_contentpage_Panel1"
						onkeypress="javascript:return WebForm_FireDefaultButton(event, 'mainbody_contentbody_contentpage_btnEdit')">

						<div class="input-group">
							<input
								name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$txtCode"
								type="text" id="mainbody_contentbody_contentpage_txtCode"
								class="form-control" placeholder="Mã code"> <span
								class="input-group-btn"> <input type="submit"
								name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnEdit"
								value="Sửa nhanh" id="mainbody_contentbody_contentpage_btnEdit"
								class="btn btn-inline-orange"> <input type="submit"
								name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnView"
								value="Xem nhanh" id="mainbody_contentbody_contentpage_btnView"
								class="btn btn-inline-orange">
							</span>
						</div>

					</div>
				</div>
			</div>
			<br>
			<ul id="contentpage_divOption" class="nav nav-tabs nav-tabs-lg bold">
				<li id="liAll"><a id="dashboard-btn-all">Tất
						cả <span id="bad-all" class="badge bagde-red"><?php echo $data["TatCaCode"] ?></span>
				</a></li>
				<li id="liShow"><a id="dashboard-btn-show">Đang
						hiển thị <span id="bad-show" class="badge bagde-green"><?php echo $data["CodeHienThi"] ?></span>
				</a></li>
				<li id="liHide"><a id="dashboard-btn-hide">Đang
						ẩn <span id="contentpage_badHide" class="badge bagde-green"><?php echo $data["CodeDangAn"] ?></span>
				</a></li>
				<li id="liWait"><a id="dashboard-btn-wait">Chờ
						duyệt <span id="bad-wait" class="badge bagde-green"><?php echo $data["CodeChoDuyet"] ?></span>
				</a></li>
				<li id="liPrice"><a id="dashboard-btn-wait-price">Chờ
						duyệt phí download <span id="bad-wait-price"
						class="badge bagde-green"><?php echo $data["CodeChoDuyetPhi"] ?></span>
				</a></li>

			</ul>
			<div class="clear"></div>
			<br>
			<div id="mainbody_contentbody_contentpage_upPannel">

				<div class="col-xs-12 bold pro-row-head pro-line14">
					<div class="col-md-6 pro-col2">
						<div class="pro-20">MÃ</div>
						<div class="pro-80">SOURCE CODE</div>
					</div>
					<div class="col-md-6 pro-col2">
						<div class="pro-20">PHÍ TẢI</div>

						<div class="pro-20">TẢI</div>
						<div class="pro-20">XEM</div>
						<div class="pro-15">DUYỆT</div>

						<div class="pro-25 text-center">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<?php while ($row = mysqli_fetch_array($data["AllCodeByUser"])) { ?>
					<div class="col-xs-12 pro-row">
                        <div class="col-md-6 pro-col">
                            <div class="pro-20" title="Mã code"><?php echo $row["id"] ?></div>
                            <div class="pro-80 bold">
                                <a class="agreen titlecode" href="<?php echo $servername ?>/source-code/<?php echo to_slug($row["tieudecode"]).'-'.$row["id"]?>">
                                    <h3 class="title1"><?php echo $row["tieudecode"] ?></h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 pro-col pro-line14">
                        <?php if($row["phitai"] != 0) {?>
                        <span title="Phí tải" class="pro-20 orange"><b><?php echo $row["phitai"] ?></b> Xu</span>
                        <?php } else {?>
                         <span title="Phí tải" class="pro-20 orange"><b>Miễn Phí</b></span>
                        <?php } ?>
                            
                             
                             <span title="Lượt tải" class="pro-20"><b><?php echo $row["luottai"] ?></b></span>
                            <span title="Lượt xem" class="pro-20"><b><?php echo $row["luotxem"] ?></b></span>
                            <?php if($row["duocduyet"] == 0) {?>
                            <span class="pro-15" title="Đang chờ BQT duyệt"><span class="label label-warning">Chờ</span></span>
                            <?php }else{ ?>
                            <span class="pro-15" title="Đã được BQT duyệt"><span class="label label-success">Được duyệt</span></span>
                            <?php } ?>
                            <span class="pro-25 text-center">
                            <?php if($row["hienthi"] !=0 ){ ?>
                                <a id="code-upload-display" data-toggle="tooltip" data-placement="top" title="Click để Hiển thị (or) Ẩn với mọi người" onclick="anCode(<?php echo $row["id"] ?>)" ><i class="fa fa-eye green" aria-hidden="true"></i></a>
                            <?php } else{ ?>
                              <a id="code-upload-display" data-toggle="tooltip" data-placement="top" title="Click để Hiển thị (or) Ẩn với mọi người" onclick="hienThiCode(<?php echo $row["id"] ?>)" ><i class="fa fa-eye gray" aria-hidden="true"></i></a>
                              <?php } ?>
                                &nbsp;
                        <a href="https://sharecode.vn/sua-code/full-code-giao-dien-android-studio-du-an-dat-hang-mon-an-25510.htm" data-toggle="tooltip" data-placement="top" title="Sửa thông tin của code"><i class="fa fa-pencil orange" aria-hidden="true"></i></a>
                                &nbsp;
                                
                            </span>
                        </div>
                    </div>
                    <?php } ?>
				<div class="col-xs-12 bold pro-row-foot"></div>
				<div class="clear"></div>
				<div class="sortPagiBar clearfix clear">
					<span class="page-noite"><b
						id="mainbody_contentbody_contentpage_lblTotalPage">0 - 0</b>&nbsp;/
						Tổng số <b id="lbl-total-code">0</b>&nbsp;CODE</span>
				</div>
				<br>

			</div>

		</div>
        <?php require_once 'mvc/views/partial/right-column.php'; ?>
    </div>
</div>


