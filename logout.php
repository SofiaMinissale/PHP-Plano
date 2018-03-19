<?php
	require("soporte.php");
	$auth->logout();
	header("Location:index.php");exit;

?>