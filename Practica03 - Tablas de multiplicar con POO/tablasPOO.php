<?php
	
	class Tabla{
		private $nTablas;
		private $multiplicador;
		private $inicio;
		
		public function __construct(){
			if(isset($_GET['nTablas'])){
				$this->nTablas = $_GET['nTablas'];
			}else{
				$this->nTablas = 10;
			}
			
			if(isset($_GET['inicio'])){
				$this->inicio = $_GET['inicio'];
			}else{
				$this->inicio = 1;
			}
			
			if(isset($_GET['multiplicador'])){
				$this->multiplicador = $_GET['multiplicador'];
			}else{
				$this->multiplicador = 12;
			}
		}
		
		public function run(){
			for($i = $this->inicio; $i < $this->inicio+$this->nTablas ; $i++){
				for($contador = 1; $contador <= $this->multiplicador; $contador++){
					echo $i.'*'.$contador.'='.$i*$contador.'<br>';
				}
				echo '<br>';
			}
		}
	}
	
	$tabla = new Tabla();
	$tabla->run();
	
?>
