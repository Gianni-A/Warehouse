<?php

function timedia(){

 switch(date("l"))
 {
     case "Monday":
	 $dia = "Lunes";
	 break;
	 
	 case "Tuesday":
	 $dia = "Martes";
	 break;
	 
	 case "Wednesday":
	 $dia = "Miercoles";
	 break;
	 
	 case "Thursday":
	 $dia = "Jueves";
	 break;
	 
	 case "Friday":
	 $dia = "Viernes";
	 break;
	 
	 case "Saturday":
	 $dia = "Sabado";
	 break;
	 
	 case "Sunday":
	 $dia = "Domingo";
	 break;
    
 }
 
 switch(date("F"))
 {
     case "January":
	 $mes = "Enero";
	 break;
	 
	 case "February":
	 $mes = "Febrero";
	 break;
	 
	 case "March":
	 $mes = "Marzo";
	 break;
	 
	 case "April":
	 $mes = "Abril";
	 break;
	 
	 case "May":
	 $mes = "Mayo";
	 break;
	 
	 case "June":
	 $mes = "Junio";
	 break;
	 
	 case "July":
	 $mes = "Julio";
	 break;
	 
	 case "August":
	 $mes = "Agosto";
	 break;
	 
	 case "September":
	 $mes = "Septiembre";
	 break;
	 
	 case "October":
	 $mes = "Octubre";
	 break;
	 
	 case "November":
	 $mes = "Nobiembre";
	 break;
	 
	 case "December":
	 $mes = "Diciembre";
	 break;
	 
	 }
 
 
 echo "<h2>Fecha: ".$dia.", ".date("j")." de ".$mes." del ".date("Y")."</h2>";
 
 
}

timedia();

?>