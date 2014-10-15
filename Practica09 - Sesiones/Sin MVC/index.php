<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		echo 'Ya tienes sesion iniciada!';
		var_dump($_SESSION['usuario']);
		echo '<br><a href="cerrarSesion.php">Cerrar sesion</a>';
	}else{
		echo 'Tienes que iniciar sesion';
		echo '<br><a href="iniciarSesion.php?u=erick">Iniciar sesion</a>';
	}
?>