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
	}


?>