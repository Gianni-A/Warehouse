<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
.usuarios {
	font-size: 22px;
	font-weight: bold;
	
	
.dark {
	color: #FF0000; font-weight: bold;
	}

}
.usuarios table tr td .dark {
	color: #F00;
}

.logeo
	   {
	     text-align: right;
	   }
	   .oto
	   {
	     font-size: 36px;
	   }
	   
	   .centi
	   {
	      text-align: center;
	   }
</style>
</head>

<body class="usuarios">
<p class="oto">Usuarios registrados
</p>


<table width="100%" height="28" border="1" cellpadding="0" cellspacing="0" bordercolor="#339999">

  <tr>
    <td  class="centi"><span class="dark">Nombre</span></td>
    <td class="centi"><span class="dark">Fecha</span></td>
    <?php
     $conexion = mysql_connect("localhost","root","");

      if(!$conexion)
      {
        die("No se ha podido conectar ala base de datos: ".mysql_error());
      }

       mysql_select_db("almacen",$conexion);

       $consulta = mysql_query('SELECT * FROM registro');


       while ($fila = mysql_fetch_array($consulta))
       {
	     	 echo "<tr><td class='centi'>".$fila['Usuario']."</td><td class='centi'>".$fila['fecha']."</tr></td>";
       }
	   		  
					  
        mysql_close($conexion);


    ?>
  </tr>
</table>

<br />

<h2><a href='inicio.php'>Regresar al inicio</h2></a>

</body>
</html>