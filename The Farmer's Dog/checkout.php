<!DOCTYPE html>
<html>

<?php
include 'variable.php';
?>
<?php include_once('head.php'); ?>
<body>
</body>
<div class="container-fluid my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<!-- order now -->
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<h1 class="text-p-one mb-1"> <strong> Order Now </strong> </h1>
								<h4 class="text-p-one"> <strong> Thank You for purchasing </strong> </h4>
								<p class="mt-3">
									You've made a wise decision to get started with <?php echo $nombre;?>
								</p>
								<p class="mt-2">Confirm your delivery address and enter your payment information (in the form to the right) to get your order processed and underway to you immediately.</p>
								<center>
									<img class="br-5 mt-3 w-100" src="./images/Ecoserve-6.png">
									
								</center>
								<br>
							</div>
						</div>
					</div>
					<!-- promotion -->
					<div class="col-md-6 panel-sold">
						<div class="row my-3">
							<div class="col-md-4">
								<center>
									<img src="public/img/extras/50-off-4.png"  class="porcent-off-img w-100">
								</center>
							</div>
							<div class="col-md-8">
								<i>
									<p class="f-17">
										<strong> Free Shipping on all orders Today! </strong>
										Do not browse away from this page!
										<strong> Free delivery available today </strong>
									</p>
								</i>
							</div>
						</div>
						<div class="row">
							<!-- only US -->
							<div class="col-md-12 text-center">
								<p class="f-15 mb-1">
									<strong>
										Internet Exclusive Offer Available to U.S. Residents Only
									</strong>
								</p>
							</div>
							<!-- countador -->
							<div class="col-md-12">
								<div>
									<div class="table-responsive" onLoad="mostrar_hora()">
										<center>
											<table class="table">
												<tr>
													<td class="td-1">
														<center>
															<h2>
																<p class="data-text" >
																	00
																</p>
																<p class="data-text">Days</p>
															</h2>
														</center>
													</td>
													<td>
														<center>
															<h2>
																<p id="" class="data-text" >
																	00
																</p>
																<p id="hora" style="display: none;"></p>
																<p class="data-text">Hours</p>
															</h2>
														</center>
													</td>
													<td>
														<center>
															<h2>
																<p class="data-text" id="minuto" >
																</p>
																<p class="data-text">Minutes</p>
															</h2>
														</center>
													</td>
													<td>
														<center>
															<h2>
																<p class="data-text" id="segundo" >
																</p>
																<p class="data-text">Second</p>
															</h2>
														</center>
													</td>
												</tr>
											</table>
										</center>
									</div>
								</div>
							</div>
							<!-- discount -->
							<div class="col-md-12 font-italic f-600">
								<center>
									<h3 class="font-weight-bold" style="color:white"> DISCOUNTED OFFER </h3>
									<h2> LIMITED TIME ONLY </h2>
								</center>
							</div>
							<!-- items -->
							<div class="col-md-12 f-25">
								<!-- <p class="mb-3">
									<span style="color:#06983f">-</span>
									Fast Acting, long Lasting.
								</p>
								<p class="mb-3">
									<span style="color:#06983f">-</span>
									Natural bamboo charcoal.
								</p>
								<p class="mb-3">
									<span style="color:#06983f">-</span>
									Eco-friendly and environmentally.
								</p>
								<p class="mb-3">
									<span style="color:#06983f">-</span>
									Odor remover completely.
								</p>
								<p class="mb-3">
									<span style="color:#06983f">-</span>
									Reusable for 2 Years.
								</p> -->
								<center class="my-3 mt-4 font-weight-bold">
									100% SATISFACTION GUARANTEE
								</center>
								<center class="my-3">
									<div class="corazon d-middle-center text-warning text-dark" data-toggle="modal" data-target="#exampleModalCenter">
									<!-- <a href="thank.php" target="_blank"> -->
										<!-- <p class="into-text mb-0"> RUSH MY ORDER! </p></a> -->
										<img src="./public/img/call.png" alt="" class="pulse br-10 w-100 rounded">
									</div>
								</center>
								<center class="my-3">
									<h3 class="mt-4"> <i class="fa fa-lock"></i> Safe 256-Bit SSL encryption. </h3>
									<img src="public/img/extras/logos.png" class="mt-4">
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- INICIO DE FOOTER -->

<footer>
<?php include_once('footer.php'); ?>
</footer>
<?php include 'modales.php'; ?>
</html>
<style type="text/css">
.into-text{
	font-size: 30px;
	margin: 0 auto;
	text-align: center;
}
.data-text{
	/* color: white; */
	font-size: 20px;
}
.img-prom-1{
	width: 70%;
	height: 450px;
	border-radius: 15px;
}
@media only screen and (max-width: 600px){
	.img-prom-1{
		width: 70%;
		height: 290px;
		border-radius: 15px;
	}
}
</style>
<script type="text/javascript">
var tiempo = {};
var clack =  new Date(); // Obtener la fecha y almacenar en clack
var TemplateDate = "";
var year = clack.getFullYear();
var month = clack.getMonth();
if (month <= 9) {
	month = "0"+month;
}
var day = clack.getDate();
if (day <= 9) {
	day = "0"+day;
}
var hour = clack.getHours();
var minut = clack.getMinutes();
minut = parseInt(minut);
if ( minut < 45 ) {
	minut = minut+14;
}else{
	var tinut = 59 - minut ;
	minut = minut + tinut;
}
var seconds = 00;
var fechaProx = year+"-"+month+"-"+day+" "+hour+":"+minut+":00";
fechaProx = fechaProx;
if ( TemplateDate === "" ) {
	TemplateDate = fechaProx;
}
var clock = new Date(fechaProx);
var intervalo = window.setInterval(mostrar_hora, 1); // Frecuencia de actualización
var i = 0; // Esta variable me ayudará a definir los estados de intervalo
var minuto = 15;
var segundos = 60;
function mostrar_hora(){
	var now = new Date();
	// Inserta los minutos almacenados en clock en el span con id minuto
	tiempo.minuto = document.getElementById('minuto');
	//tiempo.minuto.innerHTML = clock.getMinutes() - now.getMinutes()+' - ';
	var minutos = clock.getMinutes() - now.getMinutes();
	$("#minuto").html(minutos);
	// Inserta los segundos almacenados en clock en el span con id segundo
	//tiempo.segundos.innerHTML =  clock.getSeconds()+60 - now.getSeconds();
	tiempo.segundos = document.getElementById('segundo');
	var segundos  =  clock.getSeconds()+60 - now.getSeconds();
	$("#segundo").html(segundos);
}
</script>
