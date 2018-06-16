<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

	class RemplazarMultiplos{
		
		private $elementos;
		private $condiciones;
		private $numeros;
		private $resultado;
				
		function __construct()
		{
			
		}		
		
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