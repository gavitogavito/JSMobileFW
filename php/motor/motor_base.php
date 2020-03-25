<?php
/* Clase de RD para hacer login, registro y validacion de permisos */
	class rei_motor
	{
	  
	  public function crea_menu($permisos,$identificador_medico)
	  {
	    	$rei 			= new rei();
			$c   			= $rei->conectar();
			$proyecto 		= $rei->proyecto(); // traigo el proyecto al que pertenece
			$dat['aviso'] 	= 0; // seteo el validador a falso por si falla la query

			$sql 		= 'SELECT * FROM '.$proyecto.' WHERE (permisos LIKE "%'.$permisos.'%") ORDER BY orden ASC';
			$res 		= $rei->pedido($c, $sql);
			$cant  		= $rei->cantidadDeDatos($res); 
				if($cant > 0)
				{
					$dat['aviso'] = 1;
					for ($i=0; $i < $cant; $i++) 
						$dat['menu'][$i] = $rei->traeDatos($res);
				} // Fin de la verificacion del login del usuario
			return $dat;
	  }
	}
?>