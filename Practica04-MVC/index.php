<?php
//get query args

$ctrl;
	switch ($_REQUEST['ctrl']) 
	{
		case 'usuarios':
			require('controllers/UsuarioControlador.php');
			$ctrl = new UsuarioControlador();
			break;
		default:
			echo "nada!!";
			break;
	} 

$ctrl->run();

?>