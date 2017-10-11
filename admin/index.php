<?php 
include 'header.php';
include 'left_sidebar.php';
if (!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
 ?>
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line"> Admin Paneline Hoşgeldiniz...</h1>
				<h1 style="font-weight: bold; font-size: 20px; color:#0086b3;" class="page-subhead-line">Sitenizi yönetmek için sol tarafta yer alan menüleri kullanabilirsiniz...</h1>
				<img style="width: 100%; height: 425px;" src="assets/img/ist2.gif">
			</div>
		</div>
	</div>
</div>
</div>
<?php   
include 'footer.php';
 ?>