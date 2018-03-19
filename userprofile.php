<?php
	include_once("soporte.php");


	if (!isset($_SESSION["email"])) {
		header("Location:index.php");exit;
	}
	$usuarioLogueado = $auth->usuarioLogueado($db);

	$nombre = $usuarioLogueado->getUsername();

?>

<!DOCTYPE html>
<html>
	<?php include("head.php");?>
	<body>
		<main class="container">
			<div class="main-wrapper">
			<!-- NAVBAR PHP -->
			<?php include("navbar.php"); ?>
				<div class="spacer"></div>
				<div class="spacer"></div>
			<!--Mensaje Bienvenida -->
				<div class='row'>
					<section class='col-xs-8 col-xs-offset-2 bg-warning'>
						<h3>Bienvenido <?=$nombre?> a tu perfil!</h3>
					</section>

				</div>
			<div class="row">
				<article class="col-xs-8 text-center">
					<h4><a href="#">Editar Datos Personales</a></h4>
				</article>
			</div>
			<div class="row">
				<article class="col-xs-8 text-center">
					<h4><a href="logout.php">Logout</a></h4>
				</article>
			</div>
		</div>

		</div>

			<!-- FOOTER -->
			<?php include("footer.php"); ?>

		</main>
	<!-- Aca van los archivos .js  https://developers.google.com/speed/libraries/#jquery -->
	<!-- jQuery antes del js de bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>

</html>
