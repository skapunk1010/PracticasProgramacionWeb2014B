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

	function insertar(){
		require('Validador.php');

		$nombre 	= $_GET['nombre'];
		$apellido 	= $_GET['apellido'];
		$telefono 	= $_GET['telefono'];
		$email		= $_GET['email'];

		$nombre 	= (Validador::validarNombreApellido($nombre))? $nombre : die('Nombre contiene mas que letras');
		$apellido 	= (Validador::validarNombreApellido($apellido))? $apellido : die('Apellido contiene mas que letras');
		$telefono 	= (Validador::validarTelefono($telefono)) ? $telefono : die('Telefono contiene mas que numeros');
		$email 		= (Validador::validarEmail($email)) ? $email : die('Formato de email erroneo');

		$resultado = $this->modelo->insertar($nombre,$apellido,$telefono);

		if ($resultado) {
			require('view/usuarioInsertado.html');

		} else {
			require('view/Error.html');
		}
	}

	function consultar(){
		$codigo		= $_GET['codigo'];
		require('Validador.php');
		if(Validador::validarCodigo($codigo)){
			$resultado = $this->modelo->consultar($codigo);
			var_dump($resultado);
		}else{
			require('view/Error.html');
		}
	}
}

?>