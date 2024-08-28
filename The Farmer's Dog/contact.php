
<!DOCTYPE html>
<html>
<?php include_once('head.php'); ?>
<?php
include 'variable.php';
?>
<body>
	
	
	<section class="container my-5">
		<div class="row mb-2">
			<div class="col-12 px-0" style="line-height: 21px;">
				<h1 class="font-weight-bold mb-0" style="color:#9a9a9a">Contact Us </h1>
				<!-- <p class="font-weight-bold" style="color:#9a9a9a">support@<?php echo $dominio; ?></p> -->
				<!-- <p class="font-weight-bold" style="color:#9a9a9a"><?php echo $direccion; ?> </p> -->
			</div>
		</div>
		<form action="thank.php" method="POST" class="entendible-form">
			<div class="row card-body border br-5">
			<div class="col-12">
				<p style="line-height: 140%; text-align: center; font-size: 14px;">
				<?php echo $direccion; ?>

				</p>
			</div>
		<div class="col-12">
			<p style="line-height: 140%; text-align: center; font-size: 12px;">
			<spam>Phone: +1 401-393-1675</spam>

			</p>
		</div>
		<div class="col-12">
			<p style="line-height: 140%; text-align: center; font-size: 12px;">
				support@<?php echo $dominio; ?>.com
			</p>
		</div>
				<div class=" col-md-12 md-form mt-3">
						<!-- <center>
							<button type="submit" class="btn btn-warning text-dark font-weight-bolder" >
								Contact Us
							</button>
						</center> -->
					</div>
			</div>
		</form>
	</section>
</body>


</html>
<footer>
	<?php include_once('footer.php'); ?>
</footer>
