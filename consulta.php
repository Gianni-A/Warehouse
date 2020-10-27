<?php

$conexion = mysql_connect("localhost","root","");

if(!$conexion)
{
  die("No se ha podido conectar ala base de datos: ".mysql_error());
}

mysql_select_db("almacen",$conexion);

$consulta = mysql_query('SELECT * FROM productos');


while ($fila = mysql_fetch_array($consulta))
{
  echo "<tr><td>".$fila['Serie']."</td><td>".$fila['Descripcion']."</td></tr>";
}

mysql_close($conexion);

?>