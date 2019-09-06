<?php 


	class DNI
 	{
 		//propiedades
 		public  $numero ;     //visibilidad
 		function __construct()
 		{
 			$this->numero="S/N";
 		}
 		//metodos
 		//set & get
 		//dar y obtenre datos de una propiedad

 		 public function setDNI($dni)
 		{
 			//solo numeros, solo 8 digitos
 			if (strlen($dni)==8){
 				if(is_numeric($dni)){
 					$this ->numero=$dni;
 				}else{
 					echo "Solo se permiten numeros";
 				}
 			}else{
 				echo"los digitos no coinciden con el formato";
 			}

 		}
 		 public function getDNI()
 		{
 			return $this ->numero;
 		}
	} 




 ?>