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
        <div id="mainbody_contentbody_contentpage_regPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'mainbody_contentbody_contentpage_btnSearch')">
	
            <input name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$txtSearch" type="text" id="mainbody_contentbody_contentpage_txtSearch" class="search_textbox form-control" placeholder="Tìm code tải lên">
            <input type="submit" name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnSearch" value="" id="mainbody_contentbody_contentpage_btnSearch" class="btn_hide">
        
</div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-5 col-md-7">
        </div>
        <div class="col-sm-7 col-md-5">
            <div id="mainbody_contentbody_contentpage_Panel1" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'mainbody_contentbody_contentpage_btnEdit')">
	
                <div class="input-group">
                    <input name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$txtCode" type="text" id="mainbody_contentbody_contentpage_txtCode" class="form-control" placeholder="Mã code">
                    <span class="input-group-btn">
                        <input type="submit" name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnEdit" value="Sửa nhanh" id="mainbody_contentbody_contentpage_btnEdit" class="btn btn-inline-orange">
                        <input type="submit" name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnView" value="Xem nhanh" id="mainbody_contentbody_contentpage_btnView" class="btn btn-inline-orange">
                    </span>
                </div>
            
</div>
        </div>
    </div>
    <br>
    <div id="mainbody_contentbody_contentpage_divOption" class="btn-group alignright bold" role="group">
        <a id="mainbody_contentbody_contentpage_btnAll" class="btn btn-option bold select" href="javascript:__doPostBack('ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnAll','')">Tất cả <span id="mainbody_contentbody_contentpage_badAll" class="badge bagde-green">0</span></a>
        <a id="mainbody_contentbody_contentpage_btnPremium" class="btn btn-option bold" href="javascript:__doPostBack('ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnPremium','')">Có phí <span id="mainbody_contentbody_contentpage_badPremium" class="badge bagde-green">0</span></a>
        <a id="mainbody_contentbody_contentpage_btnFree" class="btn btn-option bold" href="javascript:__doPostBack('ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnFree','')">Miễn phí <span id="mainbody_contentbody_contentpage_badFree" class="badge bagde-green">0</span></a>
        <a id="mainbody_contentbody_contentpage_btnHide" class="btn btn-option bold" href="javascript:__doPostBack('ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnHide','')">Đang ẩn <span id="mainbody_contentbody_contentpage_badHide" class="badge bagde-green">0</span></a>
        <a id="mainbody_contentbody_contentpage_btnWait" class="btn btn-option bold" href="javascript:__doPostBack('ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnWait','')">Chờ duyệt <span id="mainbody_contentbody_contentpage_badWait" class="badge bagde-green">0</span></a>
        <a id="mainbody_contentbody_contentpage_btnWaitPrice" class="btn btn-option bold" href="javascript:__doPostBack('ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnWaitPrice','')">Chờ duyệt phí tải <span id="mainbody_contentbody_contentpage_badWaitPrice" class="badge bagde-green">0</span></a>
        <a id="mainbody_contentbody_contentpage_btnNotOk" class="btn btn-option bold" href="javascript:__doPostBack('ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$btnNotOk','')">Từ chối <span id="mainbody_contentbody_contentpage_badNotOk" class="badge bagde-green">0</span></a>
    </div>
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
                                    
                    <div class="pro-25 text-center"><i class="fa fa-cog" aria-hidden="true"></i></div>
                </div>
            </div>
            <div class="clear"></div>
            <div id="mainbody_contentbody_contentpage_noResult" class="noresult"></div>
            
            <div class="col-xs-12 bold pro-row-foot"></div>
            <div class="clear"></div>
            <div class="sortPagiBar clearfix clear">
                <span class="page-noite"><b id="mainbody_contentbody_contentpage_lblTotalPage">0 - 0</b>&nbsp;/ Tổng số <b id="mainbody_contentbody_contentpage_lblTotalCode">0</b>&nbsp;CODE</span>
                <div class="bottom-pagination">
                    <nav id="mainbody_contentbody_contentpage_PaggingBottom"></nav>
                </div>
                <div id="mainbody_contentbody_contentpage_divSort" class="sort-product">
                    <select name="ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$ddlSort" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$mainbody$contentbody$contentpage$ddlSort\',\'\')', 0)" id="mainbody_contentbody_contentpage_ddlSort">
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


