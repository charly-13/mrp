<?php
	class Cap_lineasdtrabajo extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			//session_regenerate_id(true);
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			} 
			getPermisos(MCLINEAS);
		}

		public function Cap_lineasdtrabajo()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_tag'] = "Líneas";
			$data['page_title'] = "Líneas <small>de trabajo</small>";
			$data['page_name'] = "bom";
			$data['page_functions_js'] = "functions_cap_lineasdtrabajo.js";
			$this->views->getView($this,"cap_lineasdtrabajo",$data);
		}

        



	}


 ?>