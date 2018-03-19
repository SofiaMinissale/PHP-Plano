<?php

?>
<!DOCTYPE html>
<html>
	<?php include("head.php");?>
<body>
	<main class="container">
		<!-- NAVBAR PHP -->
			<?php include("navbar.php"); ?>
		<!--FORM USUARIO -->
		<div>
			<form class="well form-horizontal" action=" " method="post"  id="contact_form">

		<fieldset>
			<legend>Completa con tus datos</legend>
			<div class="form-group">
				<label class="col-md-4 control-label">Nombre/s</label>
				<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input  name="first_name" id="first_name" class="form-control"  type="text"value=<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : "" ?>>
					</div>
							<?php
					if(isset($errores) && isset($errores["first_name"])){
						?>
						<div class="alert alert-danger col-xs-12 text-center">
							<small><?= $errores['first_name']; ?></small>
						</div>
 					<?php } ?>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Apellido/s</label>
				<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input name="last_name" class="form-control"  type="text"value = <?php echo isset($_POST['last_name']) ? $_POST['last_name'] : "" ?>>
					</div>
				</div>
					<?php
						if(isset($errores) && isset($errores["last_name"])){

						?>

						<div class="alert alert-danger col-md-10 text-center">
							<strong><?= $value ?></strong>
						</div>
 					<?php
							}
						 ?>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Sexo</label>
				<div class="col-md-4">
					<div class="radio">
						<label>
						<input type="radio" name="sex" value="masc" /> Masculino
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="sex" value="fem" /> Femenino
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Telefono</label>
				<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
						<input name="phone" class="form-control" type="text"value = <?php echo isset($_POST['phone']) ? $_POST['phone'] : "" ?>>
					</div>
				</div>
					<?php
						if(isset($errores) && isset($errores["phone"])){
						?>

						<div class="alert alert-danger col-md-10 text-center">
							<strong><?= $errores["phone"] ?></strong>
						</div>
 					<?php
								}

						 ?>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Direccion</label>
				<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
						<input name="address" class="form-control" type="text"value = <?php echo isset($_POST['address']) ? $_POST['address'] : "" ?>>
					</div>
				</div>
					<?php
						if (isset($errores) && isset($errores["address"])){
						?>

						<div class="alert alert-danger col-md-10 text-center">
							<strong><?= $errores["address"] ?></strong>
						</div>
 					<?php
								}

						 ?>
			</div>


			<div class="form-group">
				<label class="col-md-4 control-label">Ciudad</label>
				<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
						<input name="city" class="form-control"  type="text"value = <?php echo isset($_POST['city']) ? $_POST['city'] : "" ?>>
					</div>
				</div>
					<?php
						if (isset($errores) &&isset($errores["city"])){
						?>

						<div class="alert alert-danger col-md-10 text-center">
							<strong><?= $errores["city"] ?></strong>
						</div>
 					<?php
								}

						 ?>
			</div>

			<!-- Select PROVINCIAS!-->

			<div class="form-group">
				<label class="col-md-4 control-label">Provincia</label>
				<div class="col-md-4 selectContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
						<select name="state" class="form-control selectpicker" >
							<option>Seleccione...</option>
							<option value="Buenos Aires">Bs. As.</option>
							<option value="Catamarca">Catamarca</option>
							<option value="Chaco">Chaco</option>
							<option value="Chubut">Chubut</option>
							<option value="Cordoba">Cordoba</option>
							<option value="Corrientes">Corrientes</option>
							<option value="Entre Rios">Entre Rios</option>
							<option value="Formosa">Formosa</option>
							<option value="Jujuy">Jujuy</option>
							<option value="La Pampa">La Pampa</option>
							<option value="La Rioja">La Rioja</option>
							<option value="Mendoza">Mendoza</option>
							<option value="Misiones">Misiones</option>
							<option value="Neuquen">Neuquen</option>
							<option value="Rio Negro">Rio Negro</option>
							<option value="Salta">Salta</option>
							<option value="San Juan">San Juan</option>
							<option value="San Luis">San Luis</option>
							<option value="Santa Cruz">Santa Cruz</option>
							<option value="Santa Fe">Santa Fe</option>
							<option value="Sgo. del Estero">Sgo. del Estero</option>
							<option value="Tierra del Fuego">Tierra del Fuego</option>
							<option value="Tucuman">Tucuman</option>
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Codigo Postal</label>
				<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
						<?php $postal=""; if ($_POST) { $postal = $_POST['postal']; }?>
						<input name="postal"  class="form-control"  type="text" value="<?php $postal ?>">
					</div>
				<?php
							if (isset($errores) && isset($errores["postal"])){
						?>
						<div class="alert alert-danger col-md-10 text-center">
							<strong><?= $errores['postal'];?></strong>
						</div>
 					<?php
							}
						 ?>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Foto de perfil</label>
				<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="file" name="profileimg">
					</div>
				</div>
			</div>

			<div class="spacer"></div>

			<div class="form-group">
				<label class="col-md-4 control-label"></label>
				<div class="col-md-4">
					<button type="submit" class="btn btn-warning">Registrarme!</button>
				</div>
			</div>
			</fieldset>
		</form>
		</div>

	</div>

	<!-- FOOTER -->
		<?php include("footer.php"); ?>
	</div>
</main>

<!-- Aca van los archivos .js  https://developers.google.com/speed/libraries/#jquery -->
	<!-- jQuery antes del js de bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
