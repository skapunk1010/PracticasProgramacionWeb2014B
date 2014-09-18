<?php

class validar{

	function validarNumero($numero){
		if (is_numeric($numero)) {
			return $numero;
		}
	}

	function validarTexto($texto){
		return $texto;
	}


}


?>