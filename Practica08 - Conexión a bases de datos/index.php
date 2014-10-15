<?php

    $ctrl;
    
    switch($_REQUEST['ctrl']){
        
		case 'vehiculo':
			require('controller/vehiculoCtrl.php');
			$ctrl = new vehiculoCtrl();
			break;		
        default:
                #no se encontro parametros
    }
    
    $ctrl -> run();

?>