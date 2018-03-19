<?php
	include_once("soporte.php");
	require_once("clases/usuario.php");

	if ($auth->estaLogueado()) {
		header("Location:userprofile.php");exit;
	}

	$emailDefault = "";

	$errores = [];
	if ($_POST) {
		$errores = $validador->validarInformacion($_POST, $db);

		if (!isset($errores["email"])) {
			$emailDefault = $_POST["email"];
		}

		if (count($errores) == 0) {
			$usuario = new Usuario($_POST);
			$mail = $_POST["email"];

			$usuario = $db->guardarUsuario($usuario);

			header("Location:userprofile.php");exit;
		}
	}


?>

<!DOCTYPE html>
<html>
	<?php include("head.php");?>
	<body>

		<main class="container">

		<!-- NAVBAR PHP -->
			<?php include("navbar.php"); ?>


	<!-- HOME MAIN -->

			<div class="row">
				<a name="tophome"></a>
				<div class="col-md-7">
				<img class="img-responsive" src="./img/logo.png"><a href="index.php"></a>
				</div>

				<div class="col-md-5">
					<form class="col-md-12" name="usersignup" id="usersignup" action="index.php" method="post">
					<div class="spacer"></div>
					<div class="row">
						<div class="">
							<h3 class="text-center col-md-10">Registrate!</h3>
						</div>
						<div class="spacer"></div>

						<div class="spacer"></div>
						<div class="form-group col-md-10">
							<input name="email" id="email" type="text" class="form-control" placeholder="Direccion de E-mail">
				<br>

							<input name="password1" id="password1" type="password" class="form-control" placeholder="Contraseña">
				<br>
							<input name="password2" id="password2" type="password" class="form-control" placeholder="Repetir Contraseña">
				<br>
							<label class="text text-center">
								<input name="checkterms" type="checkbox" required>  Acepto los <a href="#">terminos y condiciones</a> del servicio</label>
				<br>
				<br>
							<button class="btn btn-default btn-block" type="submit"></span>Registrarme! <span class="glyphicon glyphicon-user"></span></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="spacer"></div>
		<div class="row">
			<a name="#whoare"></a>
					<article class="">
						<a name="whoare"></a><h4 class="text-center text-graphs">Somos emprendedores. Somos creadores. Somos soñadores.</h4>
						<h4 class="text-center text-graphs">Entendemos la sensación que deja hacer aparecer algo de la nada misma.</h4>
						<h4 class="text-center text-graphs">Conocemos las dificultades que aparecen cuando queres materializar tu idea, y traemos las herramientas para que ese proceso fluya sin interrupciones.</h4>
					</article>
		</div>
	<div class="spacer"></div>

		<div>
			<div class="row">
				<div class="col-md-4"></div>
				<article class="col-md-4">
					<p class="text-center"><img class="logo-resizer" src="./img/idea.png"></p>
					<h3 class="text-center text-graphs">Crea y mostralo.</h3>
				</article>
				<div class="col-md-4"></div>
			</div>
		<div class="spacer"></div>
			<div class="row">
				<div class="col-md-4"></div>
				<article class="col-md-4">
					<p class="text-center"><img class="logo-resizer" src="./img/money.png"></p>
					<h3 class="text-center text-graphs">Los demas invierten en tu idea.</h3>
				</article>
				<div class="col-md-4"></div>
			</div>
		<div class="spacer"></div>
			<div class="row">
				<div class="col-md-4"></div>
				<article class="col-md-4">
					<p class="text-center"><img class="logo-resizer img-center" src="./img/deliver.png"></p>
					<h3 class="text-center text-graphs">Envía a tus patrocinadores el producto terminado</h3>
				</article>
				<div class="col-md-4"></div>
			</div>
		<div class="spacer"></div>
			<div class="row">
				<div class="col-md-4"></div>
				<article class="col-md-4">
					<p class="text-center"><img class="logo-resizer" src="./img/repeat.png"></p>
					<h3 class="text-center text-graphs">Repeti!</h3>
				</article>
				<div class="col-md-4"></div>
			</div>

		<div class="spacer"></div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<article>
						<h2 class="text-center text-graphs">Asi de simple... Asi de rapido... Nuska.</h2>
					</article>
					<p class="text-center"><a href="#tophome">Volver arriba</a></p>
				</div>
				<div class="col-md-4"></div>
			</div>
	</div>

<!-- FOOTER -->
	<?php include("footer.php"); ?>

	</main>

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</body>
</html>