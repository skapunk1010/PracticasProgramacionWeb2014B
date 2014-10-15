<?php

	class CtrlEstandar{
		function __construct(){

		}

		function isLogged(){
			if( isset($_SESSION['user']) )
				return true;
			return false;
		}

		function isAdmin(){
			if( isset($_SESSION['type']) && $_SESSION['type'] == 'administrador' )
				return true;
			return false;
		}

		function isUser(){
			if( isset($_SESSION['type']) && $_SESSION['type'] == 'user' )
				return true;
			return false;
		}

		function isEmployee(){
			if( isset($_SESSION['type']) && $_SESSION['type'] == 'employee' )
				return true;
			return false;
		}

		function logout(){
			session_unset();
			session_destroy();		
			setcookie(session_name(), '', time()-3600);
		}

		function login(){
			//ir a la base buscarlo validarlo
			//if ( no lo encontro )
				//return false;
			$_SESSION['user'] = 'erick';
			$_SESSION['type'] = 'user';
			$_SESSION['username'] = 'erickmartinez';

			return true;

		}
	}
?>