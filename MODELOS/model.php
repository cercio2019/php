<?php

class EnlacesPaginas{

	public function enlacesPaginasModel($enlacesModel){


		if($enlacesModel=="nosotros" || $enlacesModel=="servicios" || $enlacesModel=="contactenos"){

			$module = "VIEWS/modulos/".$enlacesModel.".php";
		}


		else if($enlacesModel== "index.php"){

			$module= "VIEWS/modulos/inicio.php";
		}

		else{

			$module= "VIEWS/modulos/inicio.php";
		}
        
        return $module;
	}
}




?>