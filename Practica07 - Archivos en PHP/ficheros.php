<?php
	
	if(($archivo = fopen("archivo2.csv", "r")) !== FALSE){
		var_dump(leerArchivo($archivo));
	}


	function leerArchivo($archivo){
			$arreglo;
			$fila = 1;
			while(( $datos = fgetcsv($archivo,1000,",")) !== FALSE){
				$columnas = count($datos);

				for($c = 0; $c < $columnas ; $c++){
					echo 'Fila '.$fila.' Columna: '.$c.' '.$datos[$c].'<br>';
					$arreglo[$fila][$c] = $datos[$c].'<br>';
				}
				$fila++;
			}
			fclose($archivo);
			return $arreglo;
		}
?>

//Diferencia entre 2 fechas

//Una fecha dada más 30 días, 1 año, etc

//Obtener fechas en un rango, sólo días hábiles.