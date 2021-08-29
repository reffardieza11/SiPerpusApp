<?php
	session_start();
	$_SESSION["result"]='';

	unset($_SESSION['result']);
	session_unset();
	session_destroy();
	header('Location:login.php');