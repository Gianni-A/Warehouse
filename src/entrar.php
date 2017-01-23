<?php

session_start();

$_SESSION["usuario"] = $_POST["nombre"];
$_SESSION["contraseña"] = $_POST["password"];

$conexion = mysql_connect("localhost","root","");

if (!$conexion){
die("No se ha podido conectar ala base de datos: ".mysql_error());
}

mysql_select_db("almacen",$conexion);



$peticion = mysql_query("SELECT Usuario,Password FROM registro WHERE Usuario = '".$_POST["nombre"]."'");


$row = mysql_fetch_array($peticion);


 if($row["Usuario"] == $_POST["nombre"]  AND $row["Password"] == $_POST["password"])
    {
      //echo "<h2><a href='menu.php'>Bievenido</h2></a>";
	 header("Location: menu.php");
	}

    else
    {
     echo 'usuario incorrecto';
    }

mysql_close($conexion);


?>

<?php
   
$usuari = $_POST["nombre"];
$date = date("Y-m-d H:i:s");
//$datet = date("g-i-s");

$conexion = mysql_connect("localhost","root","");

if (!$conexion){
die("No se ha podido conectar ala base de datos: ".mysql_error());
}

mysql_select_db("almacen",$conexion);

  mysql_query("INSERT INTO logeo(usuario , fecha) VALUES ('$usuari' , '$date')");
  

mysql_close($conexion);

?>
