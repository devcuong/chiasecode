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
						cả <span id="contentpage_badAll" class="badge bagde-red">0</span>
				</a></li>
				<li id="liShow"><a id="dashboard-btn-show">Đang
						hiển thị <span id="contentpage_badShow" class="badge bagde-green">0</span>
				</a></li>
				<li id="liHide"><a id="dashboard-btn-hide">Đang
						ẩn <span id="contentpage_badHide" class="badge bagde-green">0</span>
				</a></li>
				<li id="liWait"><a id="dashboard-btn-wait">Chờ
						duyệt <span id="contentpage_badWait" class="badge bagde-green">0</span>
				</a></li>
				<li id="liPrice"><a id="dashboard-btn-wait-price">Chờ
						duyệt phí download <span id="contentpage_badWaitPrice"
						class="badge bagde-green">0</span>
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
				<div id="mainbody_contentbody_contentpage_noResult" class="noresult"></div>

				<div class="col-xs-12 bold pro-row-foot"></div>
				<div class="clear"></div>
				<div class="sortPagiBar clearfix clear">
					<span class="page-noite"><b
						id="mainbody_contentbody_contentpage_lblTotalPage">0 - 0</b>&nbsp;/
						Tổng số <b id="mainbody_contentbody_contentpage_lblTotalCode">0</b>&nbsp;CODE</span>
					<div class="bottom-pagination">
						<nav id="mainbody_contentbody_contentpage_PaggingBottom"></nav>
					</div>
					<div id="mainbody_contentbody_contentpage_divSort"
						class="sort-product">
						<select
							name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$ddlSort"
							onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$ddlSort\',\'\')', 0)"
							id="mainbody_contentbody_contentpage_ddlSort">
							<option selected="selected" value="New">Mới nhất</option>
							<option value="View">Xem nhiều</option>
							<option value="Down">Tải nhiều</option>

						</select>
						<div class="sort-product-icon">
							<i class="fa fa-sort-alpha-asc"></i>
						</div>
					</div>
				</div>
				<br>

			</div>

		</div>
        <?php require_once 'mvc/views/partial/right-column.php'; ?>
    </div>
</div>


