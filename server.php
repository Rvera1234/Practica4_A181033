<?php
require_once "lib/nusoap.php";


function getAutos ($datos){

    if($datos =="Autos") {
return join(",",array(
"Mazda",
"Jetta",
"VMW X8",
"Jeep",
"Virtus",
"Vocho"));
    }
    
else{
    return "No se encuentran Autos";
}

    }

?>