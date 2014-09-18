<?php
	
	if(isset($_GET['nTablas'])){
		$nTablas = $_GET['nTablas'];
	}else{
		$nTablas = 10;
	}
	
	if(isset($_GET['inicio'])){
		$inicio = $_GET['inicio'];
	}else{
		$inicio = 1;
	}
	
	if(isset($_GET['multiplicador'])){
		$multiplicador = $_GET['multiplicador'];
	}else{
		$multiplicador = 12;
	}
	
	hacerTablas($inicio,$nTablas,$multiplicador);
	
	
	function hacerTablas($inicio ,$fin  ,$multiplicador ){
		for($i = $inicio; $i < $inicio+$fin ; $i++){
			for($contador = 1; $contador <= $multiplicador; $contador++){
				echo $i.'*'.$contador.'='.$i*$contador.'<br>';
			}
			echo '<br>';
		}
	}
	
?>
