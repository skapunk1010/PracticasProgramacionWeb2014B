<?php

	require('model/Usuario.php'); 
	class usuarioMdl{
		private $db_driver;
		private $usuario;
		
		

		public function insertarUsuario($nombre, $apellido, $telefono, $email){
		
			$usuario = new Usuario($nombre, $apellido, $telefono, $email);
			#simular conexion a la base de datos
			return TRUE;
		}
	}
?>