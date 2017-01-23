<?php
	 $conexion = mysql_connect("localhost","root","");
	  if(!$conexion)
                    {
                       die("No se ha podido conectar ala base de datos: ".mysql_error());
                    }
		mysql_select_db("almacen",$conexion);
		$consulta = mysql_query("SELECT * FROM `productos` where `Serie` like'%".$_GET['clave']."%' LIMIT 0,25");
		while ($fila = mysql_fetch_array($consulta))
                      {
                         echo  $fila['Serie'].'  '.$fila['Descripcion']."\n";
                      }
?>


