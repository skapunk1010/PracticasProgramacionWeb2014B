<?php

	require('model/Vehiculo.php'); 
	class vehiculoMdl
	{
		private $vehiculo;
		private $db_driver;
		
		function __construct(){
			require('database_config.inc');
			//$this->db_driver = new mysqli($host,$user,$password,$db);
			/*if( $this->db_driver->connect_error ){
				die('Fallo la base de datos');
			} */
		}

		public function insertar($marca,$modelo,$anho,$color,$cilindraje,$transmision,$combustible){
			
			$vehiculo 		= new Vehiculo($marca,$modelo,$anho,$color,$cilindraje,$transmision,$combustible);
			$marcaEscapada 	= $this->db_driver-> real_escape_string($vehiculo->getMarca());
			$modeloEscapado = $this->db_driver-> real_escape_string($vehiculo->getModelo());
			$anhoEscapado 	= $this->db_driver-> real_escape_string($vehiculo->getAnho());
			$colorEscapado	= $this->db_driver-> real_escape_string($vehiculo->getColor());
			$cilindrajeEscapado = $this->db_driver-> real_escape_string($vehiculo->getCilindraje());
			$transmisionEscapada = $this->db_driver-> real_escape_string($vehiculo->getTransmision());
			$combustibleEscapado = $this->db_driver-> real_escape_string($vehiculo->getCombustible());


			$query = "INSERT INTO Vehiculo(marca,modelo,anho,color,cilindraje,transmision,combustible) 
					  	VALUES ('".$marcaEscapada."',
					  			'".$modeloEscapado."',
					  			'".$anhoEscapado."',
					  			'".$colorEscapado."',
					  			'".$cilindrajeEscapado."',
					  			'".$transmisionEscapada."',
					  			'".$combustibleEscapado."')";
			echo $query;
			$result = $this->db_driver->query($query);
			if($this->db_driver->error){
				echo 'Error al insertar vehiculo bla bla bla <br>';
				echo $this->db_driver->error;
			}else{
				require('view/vehiculoInsertado.php');
			}
			//$this->db_driver->mysql_close();
			#simular conexion a la base de datos
			return TRUE;
		}

		public function listar()
		{
			#lista todlos los vehículos.
			return array("carro1","carro2","carro3","carro4");
		}

		public function modificar()
		{
			#hace un update de la BD.
			return TRUE;
		}

		public function eliminar($vin)
		{
			#cambiar status del vehículo.
			#vin.status = false;
			#update en BD.
			return TRUE;
		}

	}

?>