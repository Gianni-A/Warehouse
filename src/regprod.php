<?php

$serie = $_POST["serie"];
$descrip = $_POST["des"];
$canti = $_POST["cant"];
$date = date("Y-m-d");


$conexion = mysql_connect("localhost","root","");

if (!$conexion){
die("No se ha podido conectar ala base de datos: ".mysql_error());
}

mysql_select_db("almacen",$conexion);

if($serie == NULL OR $descrip == NULL)
{
echo "Ingesa todos los campos";
}

else
{
  mysql_query("INSERT INTO productos(Serie , Descripcion , Cantidad , Fecha) VALUES ('$serie','$descrip','$canti','$date')");
  echo "<h2>El producto: ".$descrip." se ha registrado correctamente</h2>";
  echo "<h2><a href='menu.php'>Regresar al menu</h2></a>";
}

mysql_close($conexion);


?>