<?php
	include_once("soporte.php");

	$errores = [];
	if ($_POST) {
			$errores = $validador->validarLogin($_POST, $db);
			if (count($errores) == 0) {
				$auth->loguear($_POST["email"]);
				if (isset($_POST["recordame"])) {
					$auth->recordame($_POST["email"]);
				}
			}
		header("Location:userprofile.php");
	}
?>

<!DOCTYPE html>
<html>
	<?php include("head.php");?>
	<body>
		<main class="container">
			<div class="main-wrapper">
	<!-- NAVBAR PHP -->
			<?php include("navbar.php"); ?>
	<!-- FORMULARIO DE LOGIN -->
			<div class="row">
				<div class="text-center">
					<a href="./index.php"><img class="img-resizer" src="./img/logotipo.png"></a>
				</div>
			</div>
				<form class="col-md-offset-4" action="login.php" method="post" name="form1">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="username">Email</label>
							<input type="text" name="email" class="form-control">
						</div>
					</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label for="">Contraseña</label>
					<input type="password" name="password1" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label for="rememberme">Recordarme</label>
					 <input type="checkbox" name="rememberme" class="form-control">
				</div>
			</div>
			<div class="spacer"></div>
			<div class="row">
				<div class="col-md-6">
					<button class="btn btn-default btn-block" type="submit" id="submit" name="Submit"></span>Ingresar <span class="glyphicon glyphicon-user"></button>
				</div>
			</div>
			<div class="spacer"></div>
			<div class="row text-center">
				<div class="col-md-6">
					<p><a href="#">¿Olvidaste tu contraseña?</a></p>
				</div>
			</div>
			<div id="message"></div>
		</form>
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
