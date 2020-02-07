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
		<?php require_once 'mvc/views/partial/login-form.php'; ?>
		<div class="columns-container">
			<div class="container" id="columns">
				<div class="row">
					<div class="center_column col-xs-12 col-sm-12" id="center_column">
							<div id="up-pannel">
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



