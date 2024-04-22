
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		/*background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important*/
	}
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-tachometer-alt "></i></span> Dashboard</a>
				<a href="index.php?page=sales" class="nav-item nav-sales"><span class='icon-field'><i class="fa fa-clipboard-list "></i></span> Sales</a>
				<a href="pos/index.php" class="nav-item nav-pos"><span class='icon-field'><i class="fa fa-file-invoice "></i></span> POS</a>
				<?php if($_SESSION['login_type'] == 1): ?>
				
				<a href="index.php?page=receiving" class="nav-item nav-receiving"><span class='icon-field'><i class="fa fa-list-alt "></i></span> Receiving</a>
				
				<div class="mx-2 text-white">Master List</div>
				<a href="index.php?page=suppliers" class="nav-item nav-suppliers"><span class='icon-field'><i class="fa fa-list-alt "></i></span> Suppliers</a>
				<a href="index.php?page=products" class="nav-item nav-products"><span class='icon-field'><i class="fa fa-tshirt "></i></span> Products</a>
				<a href="index.php?page=employees" class="nav-item nav-employees"><span class='icon-field'><i class="fa fa-list-alt "></i></span> Employees</a>
				<a href="index.php?page=stock" class="nav-item nav-stock"><span class='icon-field'><i class="fa fa-tshirt "></i></span> Stock</a>
				<?php endif; ?>
				<div class="mx-2 text-white">Report</div>
				<a href="index.php?page=sales_report" class="nav-item nav-sales_report"><span class='icon-field'><i class="fa fa-th-list"></i></span> Sales Report</a>
				<?php if($_SESSION['login_type'] == 1): ?>
				<div class="mx-2 text-white">Systems</div>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users "></i></span> Users</a>
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> System Settings</a>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
