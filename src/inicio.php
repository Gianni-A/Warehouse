<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo3 {font-size: 24px}
-->

.piso {
	color: #FF0000; font-weight: bold;
	}
</style>

<style type="text/css">
		[required]{
		border-color: Lightblue   ;
		box-shadow: 0px 0px 5px Limegreen ;
		
		
	min-width: 70px;
    padding-bottom: 5px;
    padding-left: 7px;
    padding-right: 7px;
    padding-top: 5px;
	
	
		
		
		}
		
		.usuarios {
	font-size: 20px;
	
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
	   
	   .btni {
    
    background-color: #FD9A0F;
    background-image: -moz-linear-gradient(center top , #FEE94F 0pt, #FD9A0F 100%);
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
<!-- Codigo de css para cambiar de colores los placeholder
<style> input[placeholder], [placeholder], *[placeholder] { color:darkturquoise !important; }	
</style>-->

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

</head>

<body onLoad="muestraReloj()">


<table width="19%" height="299" border="0" cellpadding="0" cellspacing="0">
  <tr>
  
  
    <td width="99%"><span class="Estilo3">Inicio de usuario</span>
      <br />
      <br />
      <form id="form1" name="form1" method="post" action="entrar.php">
        <label class="usuarios">
         Nombre
        <input type="text" name="nombre" placeholder="Escriba su usuario" required />
        </label>
        <p>
          <label class="usuarios">Contraseña
          <input type="password" name="password" placeholder="Escriba su contraseña" required />
          </label>
        </p>
		
		 
        <p>
          <label>
          <input  type="submit" name="entrar" value="Entrar" class="btni" />
          </label>
        </p>
        <p><a href="registro.php">Registrarse</a></p>
      </form>
      <p>
	  <p><a href="usuarios.php">Usuarios registrados</a></p>
        </p>
      
   </td>
    <td width="1%"><p class="Estilo3">&nbsp;</p>
    </td>
  </tr>
</table>

<h2><span id="spanreloj" style="position:absolute;left:10;top:10;"></span></h2>
<br />
<h2>Usuario logeados</h2>

<table width="100%" height="28" border="1" cellpadding="0" cellspacing="0" bordercolor="Gray">

  <tr>
    <td  class="centi"><span class="piso">Nombre</span></td>
    <td class="centi"><span class="piso">Fecha</span></td>
	
    <?php
     $conexion = mysql_connect("localhost","root","");

      if(!$conexion)
      {
        die("No se ha podido conectar ala base de datos: ".mysql_error());
      }

       mysql_select_db("almacen",$conexion);

       $consulta = mysql_query('SELECT * FROM logeo');


       while ($fila = mysql_fetch_array($consulta))
       {
	     	 echo "<tr><td class='centi'>".$fila['usuario']."</td><td class='centi'>".$fila['fecha']."</tr></td>";
       }
	   		  
					  
        mysql_close($conexion);


    ?>
  </tr>
</table>
</body>
</html>
