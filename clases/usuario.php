<?php

class Usuario {
	private $id;
	private $email;
	private $password;

	public function __construct($datos) {
		if (isset($datos["id"])) {
			$this->id = $datos["id"];
			$this->password = $datos["password1"];
		}
		else {
			$this->password = password_hash($datos["password1"], PASSWORD_DEFAULT);
		}

		$this->email = $datos["email"];

	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setPassword($password) {
		$this->password = $password;
	}

	public function getPassword() {
		return $this->password;
	}



}

?>
