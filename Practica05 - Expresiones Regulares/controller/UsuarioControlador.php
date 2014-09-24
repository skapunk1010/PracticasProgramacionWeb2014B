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
			case 'consultar':
				$this->consultar();
				break;
			case 'validar':
				$this->validar();
				break;
			default:
				break;
			;
		} // switch

	}

	function validar(){
		echo "Email: ".$this->modelo->validarEmail($_GET['email']).'<br>';
		echo "Nombre: ".$this->modelo->validarNombreApellido($_GET['nombre']).'<br>';
		echo "Telefono: ".$this->modelo->validarTelefono($_GET['telefono']).'<br>';
	}

	function insertar(){
		require('../controlador.php');
		$validar 	= new validar();
		$nombre 	= $validar->validarTexto($_GET['nombre']);
		$apellido 	= $validar->validarTexto($_GET['apellido']);
		$codigo 	= $validar->validarNumero($_GET['codigo']);
		$telefono 	= $validar->validarNumero($_GET['telefono']);
		//$email		= $Validar

		$resultado = $this->modelo->insertar($nombre,$apellido,$codigo,$telefono);

		if ($resultado) {
			require('../views/usuarioInsertado.html');
		} else {
			require('../views/Error.html');
		}
	}

	function consultar(){
		$codigo		= $_GET['codigo'];

		$resultado = $this->modelo->consultar($codigo);
		var_dump($resultado);
	}
}

?>