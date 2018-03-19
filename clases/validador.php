<?php
	require_once("db.php");

	class Validador {
		public function validarInformacion($informacion, DB $db) {
		$errores = [];

			foreach ($informacion as $clave => $valor) {
				$informacion[$clave] = trim($valor);
			}

			if ($informacion["email"] == "") {
				$errores["email"] = "La direccion de email es obligatoria";
			}
			else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
				$errores["email"] = "La direccion de email debe ser valida";
			} else if ($db->traerPorMail($informacion["email"]) != NULL) {
				$errores["email"] = "La direccion de email ya esta registrada";
			}
			if ($informacion["password1"] == "") {
				$errores["password1"] = "La contraseña debe tener mas de 6 caracteres";
			}
			if ($informacion["password2"] == "") {
				$errores["password2"] = "Ambos campos de contraseña deben coincidir";
			}
			if ($informacion["password1"] != "" && $informacion["password2"] != "" && $informacion["password1"] != $informacion["password2"]) {
				$errores["password"] = "Ambos campos de contraseña deben coincidir";
			}
			return $errores;
		}

		public function validarLogin($informacion, DB $db) {
			$errores = [];

			foreach ($informacion as $clave => $valor) {
				$informacion[$clave] = trim($valor);
			}

			if ($informacion["email"] == "") {
				$errores["email"] = "El campo de email esta vacio";
			}
			else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
				$errores["mymail"] = "El nombre de usuario o contraseña son incorrectos";
			} else if ($db->traerPorMail($informacion["email"]) == NULL) {
				$errores["mail"] = "El nombre de usuario o contraseña son incorrectos";
			}

			$usuario = $db->traerPorMail($informacion["email"]);

			if ($informacion["password1"] == "") {
				$errores["password"] = "El nombre de usuario o contraseña son incorrectos";
			} else if ($usuario != NULL) {

				if (password_verify($informacion["password1"], $usuario->getPassword()) == false) {
					$errores["password"] = "El nombre de usuario o contraseña son incorrectos";
				}
			}
			return $errores;
		}
	}

 ?>
