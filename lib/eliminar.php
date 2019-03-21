<?php

include('vacaciones.php');
include('constantes.php');
$ideliminar=$_POST["rut"];

 foreach ($_SESSION["aVacaciones"] as $key => $oVacacion) {
                if ($oVacacion->getRut()==$ideliminar){
                    unset($_SESSION["aVacaciones"][$key]);
                    echo "Eliminado";
                }
            }
            
       