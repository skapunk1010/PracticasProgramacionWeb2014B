<?php

class UsuarioControlador{

	private $modelo;

	function UsuarioControlador(){
		require('../models/UsuarioModelo.php');
		$this->modelo = new UsuarioModelo();
	}


	function run(){
		switch ($_REQUEST['act']) {
			case 'insertar':
				$this->insertar();
				break;
			default:
				break;
			;
		} // switch

	}

	function insertar(){
		require('../controlador.php');
		$validar 	= new validar();
		$nombre 	= $validar->validarTexto($_POST['nombre']);
		$apellido 	= $validar->validarTexto($_POST['apellido']);
		$codigo 	= $validar->validarNumero($_POST['codigo']);
		$telefono 	= $validar->validarNumero($_POST['telefono']);

		$resultado = $this->modelo->insertar($nombre,$apellido,$codigo,$telefono);

		if ($resultado) {
			require('../views/usuarioInsertado.html');
		} else {
			require('../views/Error.html');
		}
	}
}

?>