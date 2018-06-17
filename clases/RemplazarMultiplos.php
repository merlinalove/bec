<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

	class RemplazarMultiplos{
		
		public $elementos;
		public $condiciones;
		public $numeros;
		public $resultado;
				
		function __construct()
		{
			
		}		
		
		//Definir el numero de elementos $elementos = range(desde,hasta)
		//Definir las condiciones para la sustitucion
		//FORMATO $condiciones = array("PalabraParaRemplazar"=>(numero),"OtraPalabra"=>(otronumero,otronumero,...));
		
		function aplicarCondiciones($elementos,$condiciones)
		{			 

			$numero=0;
			foreach ($elementos as $numero) {
				
				@$resultado[$numero] .= $numero;

 			foreach ($condiciones as $etiqueta=>$multiplos) 
 			{
                
				$sobrantes = array_filter($multiplos, function($multiplo) use ($numero) 
				{
                    return $numero % $multiplo;
                });
                if (count($sobrantes) === 0 && $numero !== 0){
					$resultado[$numero] = sprintf("%s", $etiqueta);						
                	 }
 		 	
			}
 
		}
				    
		          $this->resultado=$resultado;			
			
 }
			
			function mostrarElementosLista(){
				
				foreach($this->resultado as $clave=>$valor)
				{
				echo '<li>',$valor,'</li>';
					
				}
				
				}
		
		
	}