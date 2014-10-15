<?php

	class UsuarioModelo{
	  private $nombre;
	  private $apellido;
	  private $codigo;
	  private $telefono;

		function insertar($nombre,$apellido,$telefono){
			$this->apellido = $apellido;
			$this->nombre = $nombre;
			$this->telefono = $telefono;

			return TRUE;

		}

		function consultar($codigo){
			$arrayName = array('codigo' => $codigo,
									  'nombre'=>'Erick',
									  'apellidoMaterno'=>'Martinez',
									  'apellidoPaterno'=>'Castillo',
									  'telefono'=>'3312199191');
			return $arrayName;

		}
	}
?>