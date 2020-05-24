<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
		header("location: index.php");
		exit;
	}
?>

<a href="index.php.php"> Deseja acessar nosso programa ?  </a>