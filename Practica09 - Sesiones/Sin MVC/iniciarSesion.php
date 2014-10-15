<?php
	session_start();

	$_SESSION['usuario'] = $_GET['u'];

	header("Location: index.php");
?> 