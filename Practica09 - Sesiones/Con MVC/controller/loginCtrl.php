<?php
    require('CtrlEstandar.php');
	class loginCtrl extends CtrlEstandar{
		private $modelo;

		function __construct(){
			require('model/loginMdl.php');
			$this->modelo = new loginMdl();
		}

		function run(){
            switch($_REQUEST['accion']){
                
                case 'signin':
                    if ($this->isLogged()){
                        $this -> signin();
                    }
                    break;

                case 'iniciarSesion':
                    if(! $this->isLogged()){
                        $this -> iniciarSesion();
                    }
                    break;

                case 'cerrarSesion':
                    if($this->isLogged()){
                	   $this->cerrarSesion();
                    }
                	break;

                default: #accion incorrecta
            }
        }

        function signin(){
        	require('controller/validadorCtrl.php');
                        
            $usuario = validadorCtrl::validarUsuario($_REQUEST['usuario']);
            $password = validadorCtrl::validarPassword($_REQUEST['password']);
            
            $resultado = $this -> modelo -> signin($usuario,$password);
            
            if($resultado){
                require('view/index.php'); #cambiar a html
            } 
            else{  
                require('view/error.php'); #cambiar a html
            }
        }

        function iniciarSesion(){
        	require('controller/validadorCtrl.php');
                        
            //$usuario 	= validadorCtrl::validarUsuario($_REQUEST['usuario']);
            //$password	= validadorCtrl::validarPassword($_REQUEST['password']);
            
            //$resultado = $this->modelo->iniciarSesion($usuario,$password);
            
            if(true){
                $this-> login();
                header('Location: index.php'); #cambiar a html
                //echo 'Login exitoso!';
            } 
            else{  
                require('view/error.php'); #cambiar a html
            }
        }

        function cerrarSesion(){
        	#Destruye la variable de sesión
            $this->logout();
        	echo 'Sesión terminada!';
            #CAMBIAR ECHO A VISTA 
        	#Redirecciona al view inicial
        }

	}
?>