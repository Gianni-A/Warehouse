<?php


$usua = $_POST["nombre"];
$contrase�a = $_POST["password"];
$date = date("Y-m-d");


$conexion = mysql_connect("localhost","root","");

if (!$conexion){
die("No se ha podido conectar ala base de datos: ".mysql_error());
}

mysql_select_db("almacen",$conexion);


if($usua == NULL OR $contrase�a == NULL)

{
echo "Ingesa todos los campos";
echo "<a href='inicio.php'>Regresar al menu</a>";
}

else
{
  mysql_query("INSERT INTO registro(Usuario , Password , fecha) VALUES ('$usua','$contrase�a' , '$date')");
  header("Location: inicio.php");
}




mysql_close($conexion);

?>


