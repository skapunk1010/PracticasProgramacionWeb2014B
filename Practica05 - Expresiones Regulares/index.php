<?php

	$ctrl;
	switch ($_GET['ctrl']) 
	{
		case 'usuario':
			require('controller/UsuarioControlador.php');
			$ctrl = new UsuarioControlador();
			break;
		default:
			echo "nada!!";
			break;
	} 

	$ctrl->run();

?>