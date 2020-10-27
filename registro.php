<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {font-size: 24px}
-->
</style>

<style type="text/css">
		[required]{
		border-color: Lightblue   ;
		box-shadow: 0px 0px 5px Red ;
		
        min-width: 70px;
        padding-bottom: 5px;
        padding-left: 7px;
        padding-right: 7px;
        padding-top: 5px;
		}
		
		.usuarios {
	font-size: 20px;
	}
	.bto {
	
	 background-color: #FD9A0F;
    background-image: -moz-linear-gradient(center top , #BFF5E9 0pt, #BFF5C1 100%);
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
}

</style>



</head>

<body>
<form id="form2" name="form2" method="post" action="insertar.php">
      <label><span class="Estilo1">Registro de usuario
        </span><br />
        <br />
        <br />
		</label>
		<label class="usuarios">
        Nombre
      <input type="text" name="nombre" placeholder="Nuevo usuario" required />
        </label> 
		<br />
		<br />
        <label class="usuarios">
        Contraseña 
        <input type="password" name="password" placeholder="Nueva contraseña" required />
        </label>
      
      <p>
        <label>
        <input type="submit" name="registrar" value="Registrar" class="bto" />
        </label>
      </p>
</form>
</body>
</html>
