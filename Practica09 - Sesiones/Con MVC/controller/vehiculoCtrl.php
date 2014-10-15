<?php
require('CtrlEstandar.php');
class vehiculoCtrl extends CtrlEstandar{
	private $modelo;

	function __construct() {
		require("model/vehiculoMdl.php");
		$this -> modelo = new vehiculoMdl();
	}

	function run()
	{
		switch($_REQUEST['accion'])
		{
			case "insertar":
				if($this->isLogged() && $this->isUser()){
					$this -> insertar();
				}else{
					header("Location: ./view/errorLogin.php");
				}
				break;

			case "listar":
				if($this->isLogged() && ($this->isUser() || $this->isEmployee())) {
					$this -> listar();
				}else{
					header("Location: ./view/errorLogin.php");
				}
				break;

			case "modificar":
				if($this->isLogged() && $this->isAdmin()){
					$this -> modificar();
				}else{
					header("Location: ./view/errorLogin.php");
				}
				break;

			case "eliminar":
				if($this->isLogged() && $this->isAdmin()) {
					$this -> eliminar();
				}else{
					header("Location: ./view/errorLogin.php");
				}
				break;

			default: 
				#vista de error.
				break;

		}
	}

	function insertar()
	{
		require('controller/validadorCtrl.php');
		//$vin = validadorCtrl::validarVin($_REQUEST['vin']);
        $marca = validadorCtrl::validarTxt($_REQUEST['marca']);
        $modelo = validadorCtrl::validarTxt($_REQUEST['modelo']);
        $anho = validadorCtrl::validarAnho($_REQUEST['anho']);
        $color = validadorCtrl::validarTxt($_REQUEST['color']);
        $cilindraje = validadorCtrl::validarTxt($_REQUEST['cilindraje']);
        $transmision = validadorCtrl::validarTxt($_REQUEST['transmision']);
        $combustible = validadorCtrl::validarTxt($_REQUEST['combustible']);

        $resultado = $this -> modelo -> insertar($marca,$modelo,$anho,$color,$cilindraje,$transmision,$combustible);
            
            if($resultado){
                
                //require('view/vehiculoInsertado.php'); #cambiar a html
                echo 'If ctrl ';
            }
            
            else{
                
                require('view/error.php'); #cambiar a html
            }
            
	}

	function listar()
	{
		#imprimir lo que modelo regrese.
		$lista = $this -> modelo -> listar();
		var_dump($_SESSION);
	}

	function modificar()
	{
		#el/los datos a eliminar
		$resultado = $this -> modelo -> modificar();
            
        	if($resultado){
                require('view/vehiculoModificado.php'); #cambiar a html
            }
            
            else{
                require('view/error.php'); #cambiar a html
            }
	}

	function eliminar()
	{
		#vin del vehículo a cambiar status
		$resultado = $this -> modelo -> eliminar($vin);
            
        	if($resultado){    
                require('view/vehiculoEliminado.php'); #cambiar a html
            }
            
            else{     
                require('view/error.php'); #cambiar a html
            }
	}
}

?>