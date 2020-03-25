<?php
/* Clase de RD para hacer login, registro y validacion de permisos */
	class rei_ingreso
	{
	  var $usuario;
	  var $clave;
	  
	  public function login($usuario,$clave)
	  {
	    	$rei 			= new rei();
			$c   			= $rei->conectar();
			$proyecto 		= $rei->proyecto(); // traigo el proyecto al que pertenece
			$dat['aviso'] 	= 0; // seteo el validador a falso por si falla la query

			$sql 		= 'SELECT * FROM '.$proyecto.' WHERE  (user = "'.$usuario.'" AND password = "'.$clave.'") LIMIT 0,1';
			$res 		= $rei->pedido($c, $sql);
			$cant  = $rei->cantidadDeDatos($res);
				if($cant > 0)
				{
					$dat 				= $rei->traeDatos($res);
					$dat['aviso'] 		= 1;
					$_SESSION['token'] 	= md5(date("Ymd")); // creacion del token valido por 1 dia para el logueo
					$_SESSION['usuario']= $dat;

					// verifico los permisos 
					$sql 		= 'SELECT * FROM '.$proyecto.' WHERE  (id_user = "'.$dat['identificador_user'].'") LIMIT 0,1';
					$res 		= $rei->pedido($c, $sql);
					$r['cant']  = $rei->cantidadDeDatos($res);
						if($r['cant'] > 0)
						{
							$dat['permisos'] = 	$rei->traeDatos($res);
							$_SESSION['usuario'] = $dat;
						}

				} // Fin de la verificacion del login del usuario
			return $dat;
	  }
	}
?>