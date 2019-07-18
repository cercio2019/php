<?php

class MvController{

	public function plantilla(){

		include "VIEWS/template.php";
	}


// INTERACCION DEL USUARIO
#---------------------------------

public function enlacesPaginasController(){

    if(isset($_GET["action"])){
    
	$enlacesController = $_GET["action"];
	}

	else{

		$enlacesController= "index.php";
	}

	$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

	include $respuesta;
  }
}
?>