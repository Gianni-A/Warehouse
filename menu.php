<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<?php

session_start();
echo "</br>";
echo '<p class="yea">Bienvenido '.$_SESSION["usuario"].'</p>';
echo "</br>";
 
echo "<h2 class='cierre'><a href='inicio.php'>Cerrar sesion</h2></a>";

include "fecha.php";



?>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu de almacen</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="jquery-ui-personalized-1.5.2.packed.js"></script>
<script type="text/javascript" src="sprinkle.js"></script>
<script type="text/javascript">
function cargar(pag,sender)//ajax 
{
var xmlhttp;
var query;
query=pag+"?clave="+sender.value;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
                alert(xmlhttp.responseText);
				
          }
  }
xmlhttp.open("GET",query,true);
xmlhttp.send();
}
</script>

<script language="javascript" type="text/javascript">
function muestraReloj()
{
if (!document.layers && !document.all && !document.getElementById) return;
var fechacompleta = new Date();
var horas = fechacompleta.getHours();
var minutos = fechacompleta.getMinutes();
var segundos = fechacompleta.getSeconds();
var mt = "AM";
if (horas> 12) {
mt = "PM";
horas = horas - 12;
}
if (horas == 0) horas = 12;
if (minutos <= 9) minutos = "0" + minutos;
if (segundos <= 9) segundos = "0" + segundos;
cadenareloj =horas + ":" + minutos + ":" + segundos + " " + mt;
if (document.layers) {
document.layers.spanreloj.document.write(cadenareloj);
document.layers.spanreloj.document.close();
}
else if (document.all) spanreloj.innerHTML = cadenareloj;
else if (document.getElementById) document.getElementById("spanreloj").innerHTML = cadenareloj;
setTimeout("muestraReloj()", 1000);
}

</script>
<h2> Hora... <span id="spanreloj" style="position:absolute;left:10;top:10;"></span></h2>
<br />
<style type="text/css">
.Estilo1 {color: #FF0000; font-weight: bold;}
</style>

<style type="text/css">
		[required]{
		border-color: Aquamarine   ;
		box-shadow: 0px 0px 5px LightGray ;
		
		}
		
		[lagot]{
		border-color: Lightsalmon;
		box-shadow: 0px 0px 5px LightGray ;
		}
		
		[titulo]{
		border-color: Lightsalmon;
		box-shadow: 0px 0px 25px LightGray ;
		}
		
		.label {
		
		font-size: 17px;
		
		}
		
		.yea {
	    font-size: 36px;
       }
	   
	   .cierre
	   {
	     text-align: center;
	   }
	   
	   .centi
	   {
	      text-align: center;
	   }
	   
	   
	   .btni{
	background-color: #019AD2;
    background-image: -moz-linear-gradient(#33BCEF, #019AD2);
    background-repeat: repeat-x;
    border-bottom-color: #057ED0;
    border-left-color-ltr-source: physical;
    border-left-color-rtl-source: physical;
    border-left-color-value: #057ED0;
    border-right-color-ltr-source: physical;
    border-right-color-rtl-source: physical;
    border-right-color-value: #057ED0;
    border-top-color: #057ED0;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1) inset;
    color: #FFFFFF;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	
	
	border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    font-size: 16px;
    line-height: 28px;
	
	cursor: pointer;
	}
	
	.bton{
	background-color: #FD9A0F;
    background-image: -moz-linear-gradient(center top , #73FBEB 0pt, #A8D7FB 100%);
    background-repeat: repeat-x;
    border-bottom-color: #FFAA22;
    border-left-color-ltr-source: physical;
    border-left-color-rtl-source: physical;
    border-left-color-value: #FFAA22;
    border-right-color-ltr-source: physical;
    border-right-color-rtl-source: physical;
    border-right-color-value: #FFAA22;
    border-top-color: #FFAA22;
	
	
	-moz-border-bottom-colors: none;
    -moz-border-image: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #CCCCCC;
    background-repeat: no-repeat;
    border-bottom-color: #CCCCCC;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    border-left-color-ltr-source: physical;
    border-left-color-rtl-source: physical;
    border-left-color-value: #CCCCCC;
    border-left-style-ltr-source: physical;
    border-left-style-rtl-source: physical;
    border-left-style-value: solid;
    border-left-width-ltr-source: physical;
    border-left-width-rtl-source: physical;
    border-left-width-value: 1px;
    border-right-color-ltr-source: physical;
    border-right-color-rtl-source: physical;
    border-right-color-value: #CCCCCC;
    border-right-style-ltr-source: physical;
    border-right-style-rtl-source: physical;
    border-right-style-value: solid;
    border-right-width-ltr-source: physical;
    border-right-width-rtl-source: physical;
    border-right-width-value: 1px;
    border-top-color: #CCCCCC;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-top-style: solid;
    border-top-width: 1px;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
    color: #333333;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    line-height: 18px;
    overflow-x: visible;
    overflow-y: visible;
    padding-bottom: 5px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 5px;
    position: relative;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	
	}
		
		</style>
</head>
<body onLoad="muestraReloj()">

         </br>
        <h1 titulo>Almacen</h1>
        

        <div id="tabvanilla" class="widget">

            <ul class="tabnav">
                <li><a href="#popular">Registro de producto</a></li>
                <li><a href="#recent">Entradas</a></li>
                <li><a href="#featured">Salidas</a></li>
				<li><a href="#Consulta">Consulta general</a></li>
				
            </ul>

			<!-- Formulario hecho en HTML = Registro de producto -->
			
            <div id="popular" class="tabdiv">
                <ul>
					<table width="19%" height="31" border="0" cellpadding="0" cellspacing="0">
					<form id="form1" name="form1" method="post" action="regprod.php">
					</br>
                    <p class="label">Numero de serie</p>
                    <label>
                    <input type="text" name="serie"  required />
                    </label>
                    <br></br>
                    <p class="label">Descripcion  </p>
                    <p>
                    <label>
                    <input type="text" name="des" required />
                    </label>
                    </p>
					</br>
                    <p class="label">Cantidad</p>
                    <label>
                    <input type="text" name="cant" size="3" maxlength="100" required />
                    </label>
                    <p>
					</br>
                    <label>
                    <input type="submit" name="producto" value="Registrar" class="btni"/>
                    </label>
               </p>
              </form>
  
            </table>
                </ul>
            </div>
            
			<!-- Formulario hecho en HTML = Entradas -->
			
            <div id="recent" class="tabdiv">
                <form id="form1" name="form1" method="post" action="">
                   <label class="label"> Quien lo entrega
                   <input type="text" name="person"  lagot />
                   <br />
                   <br />
                   </label> 
                   <label class="label"> Clave
                   <input type="text" name="desi" onchange="cargar('producto-dispo.php',this)" id="clavee" lagot />
                   <br />
                   </label> 
                   </p>
                   <br />
                   <label></label> 
                   <p class="label">cantidad  
                      <input type="text" name="canti"  size="3" lagot />
                   </p>
				   <br />
                   <label></label>
				   <input type="submit" value="Hecho" class="bton"/>
                  </form>
                  <br />
                  <br />
                  <br />
				
				<!--Codigo php en Entradas \\ Insertar -->
				
				<table width="100%" height="28" border="1" cellpadding="0" cellspacing="0" bordercolor="#339999">
				<?php
                
                   $person = $_POST['person'];
				   $pro = $_POST['desi'];   
				   $cantid = $_POST['canti'];
				   $autori = $_SESSION["usuario"];
				   $fecha = date("Y-m-d");
				  
                   $conexion = mysql_connect("localhost","root","");
				   
                   if (!$conexion){
                   die("No se ha podido conectar ala base de datos: ".mysql_error());
                   }

                   mysql_select_db("almacen",$conexion);
                     
			         if (!isset($_SESSION["usuario"])) {
                      header("Location: inicio.php");   
                      }
                   if($person == NULL)
                   {
                   //  echo "<p>inserta bien el campo</p>";
                   }
				   else
				   {
				   mysql_query("INSERT INTO entrada(autori , persona , producto , cantidad , fecha) VALUES ('$autori' , '$person' , '$pro' , '$cantid' , '$fecha')");
				   $chequeo = mysql_query("SELECT * FROM `productos` WHERE `Serie` = '".$_POST['desi']."'"); // Consulta a la tabla productos
                                         
				   $row = mysql_fetch_array($chequeo);
				
				    
					   $total =  $row['Cantidad']+$cantid ;
					
					
				 	mysql_query("update  `productos` set `Cantidad`=$total where `Serie`='".$_POST['desi']."'"); // actualizar
				   }
				   
				   
				    
                    mysql_close($conexion);

                   ?>
                 
                 
				<!-- Codigo php = Entradas \\ Mostrar -->
				
                <tr>
				   <td class='centi'><span class="Estilo1">Persona de quien lo autorizo</span></td>
                   <td class='centi'><span class="Estilo1">Quien es que lo entrega</span></td>
				   <td class='centi'><span class="Estilo1">Producto</span></td>
				   <td class='centi'><span class="Estilo1">Cantidad</span></td>
				   <td class='centi'><span class="Estilo1">Fecha</span></td>
               </tr>
			   
			   <?php
                    
					//session_start();
                     
                    $autori = $_SESSION["usuario"];   
					   
                    $conexion = mysql_connect("localhost","root","");

                    if(!$conexion)
                    {
                       die("No se ha podido conectar ala base de datos: ".mysql_error());
                    }

                     mysql_select_db("almacen",$conexion);

                     $consulta = mysql_query('SELECT en. `autori` as `autori`,en. `persona` as `persona`,pro.`Descripcion` as `producto`,en.`Cantidad` as `cantidad` ,en. `fecha` as `fecha` FROM `entrada`as en left outer join `productos` as pro on(en.`producto`=pro.`Serie`)');


                     while ($fila = mysql_fetch_array($consulta))
                      {
					    if (!isset($_SESSION["usuario"])) {
                        header("Location: inicio.php");   
                        }
                         //echo "<tr><td>".$fila['persona']."</td> <td>".$fila['cantidad']."</td><td>".$fila['producto']."</td></tr>";
						 echo "<tr><td class='centi'>".$fila['autori']."</td><td class='centi'>".$fila['persona']."</td> <td class='centi'>".$fila['producto']."</td><td class='centi'>".$fila['cantidad']."</td><td class='centi'>".$fila['fecha']."</td></tr>";
                      }
					  
					
					  
					  
					  
					  
                     mysql_close($conexion);
					 
					 

                     ?>
               </table>
			     
            </div>
			
			<!-- Fomulario HTML = Salidas -->
            
            <div id="featured" class="tabdiv">
                <ul>
				   <form id="form1" name="form1" method="post" action="">
                   <label class="label"> Quien lo requiere
                   <input type="text" name="persi" lagot />
                   <br />
                   <br />
                   </label> 
                   <label class="label"> Clave
                   <input type="text" name="desie" onchange="cargar('producto-dispo.php',this)" id="claves" lagot />
                   <br />
                   </label> 
                   </p>
                   <br />
                   <label></label> 
                   <p class="label">cantidad  
                      <input type="text" name="can" size="3" lagot />
                   </p>
                   <label></label>
				   <br />
				   <input type="submit" value="Hecho" class="bton"/>
                  </form>
                  <br />
                  <br />
                  <br />				
				  
                 <!--Codigo php = Salidas \\ Insertar -->				 
				 
                    <table width="100%" height="28" border="1" cellpadding="0" cellspacing="0" bordercolor="#339999">
					<?php
			      $perss = $_POST['persi'];
				  $cantida = $_POST['can'];
				  $auto = $_SESSION['usuario'];
				  $pra = $_POST['desie'];
				  $fecha = date("Y-m-d");
				  
                   $conexion = mysql_connect("localhost","root","");
				   
                   if (!$conexion){
                   die("No se ha podido conectar ala base de datos: ".mysql_error());
                   }

                   mysql_select_db("almacen",$conexion);

                   if($perss == NULL)
                   {
                     //echo "inserta bien el campo";
                   }
				   else{
				   $chequeo = mysql_query("SELECT * FROM `productos` WHERE `Serie` = '".$_POST['desie']."'"); // Consulta a la tabla productos
                                         
				   $row = mysql_fetch_array($chequeo);
				
				    
					   $total =  $row['Cantidad']-$cantida ;
				   {if($total<0)
					 echo "no hay sufucientes en el almacen";
					 else{
					
				   //mysql_query("INSERT INTO salida(`persona` , `cantidad`) VALUES ('$perss' , '$cantida')");
				   mysql_query("INSERT INTO salida(autori ,persona , producto , cantidad , fecha) VALUES ('$auto' ,'$perss' , '$pra' , '$cantida' , '$fecha')");
				   
					
				 	mysql_query("update  `productos` set `Cantidad`=$total where `Serie`='".$_POST['desie']."'"); // actualizar
					}
					}
				   }


                    mysql_close($conexion);

                   ?>
				   
				   <!-- Codigo php = Salidas \\ Mostrar -->
				   
                <tr>
				   <td class='centi'><span class="Estilo1">Persona de quien lo autorizo</span></td>
                   <td class='centi'><span class="Estilo1">Quien lo retiro</span></td>
				   <td class='centi'><span class="Estilo1">Producto</span></td>
				   <td class='centi'><span class="Estilo1">Cantidad</span></td>
				   <td class='centi'><span class="Estilo1">Fecha</span></td>
				   <?php

                    $conexion = mysql_connect("localhost","root","");

                    if(!$conexion)
                    {
                       die("No se ha podido conectar ala base de datos: ".mysql_error());
                    }

                     mysql_select_db("almacen",$conexion);

                     //$salida = mysql_query('SELECT * FROM salida');
					 $consulta = mysql_query('SELECT en. `autori` as `autori`,en. `persona` as `persona`,pro.`Descripcion` as `producto`,en.`Cantidad` as `cantidad`,en. `fecha` as `fecha` FROM `salida`as en left outer join `productos` as pro on(en.`producto`=pro.`Serie`)');
					 


                     while ($fila = mysql_fetch_array($consulta))
                      {
						 //echo "<tr><td>".$fila['persona']."</td> <td>".$fila['cantidad']."</td></tr>";
						 echo "<tr><td class='centi'>".$fila['autori']."</td><td class='centi'>".$fila['persona']."</td> <td class='centi'>".$fila['producto']."</td><td class='centi'>".$fila['cantidad']."</td><td class='centi'>".$fila['fecha']."</td></tr>";
                      }

                     mysql_close($conexion);

                     ?>
               </tr>
               </table>
                </ul>
            </div>
			
           <!-- Consulta del producto -->
		   
			<div id="Consulta" class="tabdiv">
                <ul>
                    <table width="100%" height="31" border="1" cellpadding="0" cellspacing="0" bordercolor="#3366FF" method="post" >
					<tr>
                      <td class='centi'><span class="Estilo1">Serie</span></td>
                      <td class='centi'><span class="Estilo1">Descripcion</span></td>
                      <td class='centi'><span class="Estilo1">Cantidad del producto</span></td>
					  <td class='centi'><span class="Estilo1">Fecha</span></td>
					<!--  <td><span class="Estilo1">Autorizo</span></td>
					  <td><span class="Estilo1">Persona requerida</span></td> -->
                    </tr>
					<?php

					 //session_star();
					 
                    $conexion = mysql_connect("localhost","root","");

                    if(!$conexion)
                    {
                       die("No se ha podido conectar ala base de datos: ".mysql_error());
                    }

                     mysql_select_db("almacen",$conexion);

                     $consulta = mysql_query('SELECT * FROM productos');


                     while ($fila = mysql_fetch_array($consulta))
                      {
                         echo "<tr><td class='centi'>".$fila['Serie']."</td> <td class='centi'>".$fila['Descripcion']."</td> <td class='centi'>".$fila['Cantidad']."</td> <td class='centi'>".$fila['Fecha']."</td></tr>";
                      }

                     mysql_close($conexion);

                     ?>
                 	
</table>
                </ul>
            </div>
			 
			
        </div>
<!--
<div id="featuredvid" class="widget">
            
        	<div class="fvid" id="vid-1">
<object width="270" height="152"><a>hola a todos</a></object>


</div>
        
        	
                 <input type="Button" onclick="cargar('producto-dispo.php',this)" value="ver">
   
-->

</body>
</html>