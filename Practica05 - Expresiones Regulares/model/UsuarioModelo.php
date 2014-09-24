<?php

	class UsuarioModelo{
	  private $nombre;
	  private $apellido;
	  private $codigo;
	  private $telefono;

		function insertar($nombre,$apellido,$codigo,$telefono){
			$this->apellido = $apellido;
			$this->nombre = $nombre;
			$this->codigo = $codigo;
			$this->telefono = $telefono;

			return TRUE;

		}

		function consultar($codigo){
			$arrayName = array('codigo' => '207576498',
									  'nombre'=>'Erick',
									  'apellidoMaterno'=>'Martinez',
									  'apellidoPaterno'=>'Castillo',
									  'telefono'=>'3312199191');
			return $arrayName;

		}

		public function validarEmail($email){
			$expresion = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
			if(preg_match($expresion, $email)){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		public function validarNombreApellido($nombreOapellido){
			$expresion = "/^[a-zA-Z\s]+$/";
			if(preg_match($expresion, $nombreOapellido)){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		public function validarTelefono($telefono){
			$expresion = '/^[\d]{8,16}$/';
			if(preg_match($expresion , $telefono)){
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}


?>