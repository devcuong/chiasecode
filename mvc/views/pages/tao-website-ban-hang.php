<?php require_once "./mvc/core/String.php" ?>
<?php require_once "./mvc/core/Config.php" ?>
<div id="view-content-page" class="view-content-page">
	<!-- CONTENT PAGE -->
	<form action="<?php echo $servername ?>/tao-web-site-ban-hang" method="post">
		<div class="form-group"  >
			<label>Tên shop</label> <input
				type="text" class="form-control" id="main-shop-name" name="main-shop-name" placeholder="Nhập tên shop">
		</div>
		<button type="submit" name="btn-tao-shop" class="btn btn-primary">Tạo shop</button>
	</form>
</div>
<div class="clearfix"></div>

