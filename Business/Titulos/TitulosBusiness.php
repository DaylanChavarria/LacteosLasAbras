<?php 
include '../../Data/TitulosData.php';

/**
* Clase encargada de conectar la capa de presentacion con la capa de
* Datos, relacionada a Titulos.
 * @author Daylan Chavarria
*/
class TitulosBusiness {
    
        private $titulosData;
        
        public function TitulosBusiness() {
            $this->titulosData = new TitulosData();
        }

        //*******Obtener Titulos según su idioma******
        
	function obtenerTitulosEsBusiness()
	{
		return $this->titulosData->getTitulosEsData();
	}

	function obtenerTitulosInBusiness()
	{
		return $this->titulosData->getTitulosInData();
	}

}
