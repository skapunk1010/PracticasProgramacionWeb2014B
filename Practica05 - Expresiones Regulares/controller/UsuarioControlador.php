<?php

class UsuarioControlador{

	private $modelo;

	function UsuarioControlador(){
		require('model/UsuarioModelo.php');
		$this->modelo = new UsuarioModelo();
	}


	function run(){
		switch ($_GET['action']) {
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
		$nombre 	= $validar->validarTexto($_GET['nombre']);
		$apellido 	= $validar->validarTexto($_GET['apellido']);
		$codigo 	= $validar->validarNumero($_GET['codigo']);
		$telefono 	= $validar->validarNumero($_GET['telefono']);
		$email		= $Valid

		$resultado = $this->modelo->insertar($nombre,$apellido,$codigo,$telefono);

		if ($resultado) {
			require('../views/usuarioInsertado.html');
		} else {
			require('../views/Error.html');
		}
	}
}

?>