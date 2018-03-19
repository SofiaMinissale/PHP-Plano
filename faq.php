<?php
		require_once("soporte.php");


	?>

<!DOCTYPE html>
<html>
	<?php include("head.php");?>
	<body>
		<div class="container">
			<?php include("./sources/navbar.php"); ?>

			<div class="spacer">

						<main class="container">
								<div class="alert alert-warning alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									Esta seccion contiene informacion sobre <strong>Nuestro sitio</strong>. Si no puede encontrar la respuesta a su pregunta,
									asegurese de contactarnos.
									<p>
							<br>
						<a href="nuestrositio@gmail.com" target="_blank">
						Enviar correo </a>
						</p>

								</div>

								<br />

								<div class="panel-group" id="accordion">
										<div class="faqHeader"><h1><strong>Preguntas frecuentes</strong></h1></div>
										<div class="spacer"></div>  
										<div class="panel panel-default">
												<div class="panel-heading">
														<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">¿Es necesario registrarse en la página?</a>
														</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in">
														<div class="panel-body">

						El registro de la cuenta en <strong>NuestroSitio</strong> sólo es necesario si va a vender o comprar.
						 Esto asegura un canal de comunicación válido para todas las partes involucradas en cualquier transacción.

														</div>
												</div>
										</div>

									<!-- SECCION 2-->

												<div class="panel panel-default">
														<div class="panel-heading">
																<h4 class="panel-title">
																		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">¿Cual es la moneda necesaria para las transacciones?</a>
																</h4>
														</div>
														<div id="collapseOne" class="panel-collapse collapse in">
																<div class="panel-body">
							Todos los precios de los temas, plantillas y otros elementos,
							 incluido el saldo de la cuenta de cada vendedor o comprador, se indican en USD

																</div>
														</div>
												</div>

						<!--seccion a!-->

						<div class="panel-group" id="accordion">
								<div class="faqHeader"><strong>VENDEDORES</strong></div>
								<div class="panel panel-default">
										<div class="panel-heading">
												<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">¿Quien vende articulos?</a>
												</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
												<div class="panel-body">
						Cualquier usuario registrado, que presenta un producto,
						que es genuino y atractivo, puede publicarlo en NuestroSitio .
												</div>
										</div>
								</div>

						<!--seccion b!-->

						<div class="panel panel-default">
								<div class="panel-heading">
										<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Quiero vender mi producto- ¿Cuales son los pasos?</a>
										</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
						Los pasos son realmente faciles:
						<ul>
								<li>Registrar una cuenta, crear tu perfil</li>
								<li>Activar la cuente</li>
								<li>Cargar tu producto</li>
								<li>El ultimo paso es esperar nuestra aprobación</li>
								<br>
								<li> UNA VEZ REALIZADOS ESTOS PASOS YA PODES VENDER TUS PRODUCTOS E IDEAS</li>
						</ul>
										</div>
								</div>
						</div>

						<!--seccion c!-->

						<div class="panel panel-default">
								<div class="panel-heading">
										<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">¿Por que vender mis productos aqui?</a>
										</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
						Tenemos excelentes razones:
						<ul>
								<li>PENSAR</li>
								<li>PENSAR</li>
								<li>PENSAR</li>
								<li>PENSAR</li>

						</ul>
										</div>
								</div>
						</div>


						<!--SECCION!-->

						<div class="panel panel-default">
								<div class="panel-heading">
										<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Formas de pago</a>
										</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
						La mejor manera de transferir fondos es a través de Paypal.
						Esta plataforma segura garantiza pagos puntuales y un entorno seguro.
							</div>
								</div>
						</div>

						<!--SECCION!-->


						<div class="panel panel-default">
								<div class="panel-heading">
										<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">¿Cuando me pagan?</a>
										</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
						Nuestro plan de pago estándar proporciona pagos mensuales.
						 Al final de cada mes, todos los fondos acumulados se transfieren a su cuenta.
							</div>
								</div>
						</div>


<!--seccion!-->


					<div class="panel-group" id="accordion">
							<div class="faqHeader"><strong>COMPRADORES</strong></div>
							<div class="panel panel-default">
									<div class="panel-heading">
											<h4 class="panel-title">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Quiero comprar un producto - ¿cuáles son los pasos?</a>
											</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
											<div class="panel-body">
												Comprar un tema en Nuestro sitio es realmente simple. Cada producto tiene una vista previa en vivo. Una vez que haya seleccionado uno, que es de su agrado, puede pagar de forma rápida y segura a través de Paypal.
												Una vez que la transacción se completa, usted obtiene acceso completo al producto comprado.
											</div>
									</div>
							</div>
							</div>
					</div>
					<!--FOOTER-->
					<?php include("./sources/footer.php"); ?>


		</main>
	</body>
</html>
