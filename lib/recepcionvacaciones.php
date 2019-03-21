<?php
include('vacaciones.php');
include('constantes.php');


$oVacaciones=new Vacaciones($_POST["rut"], $_POST["nombre"], $_POST["cargo"], "", "", "");
if(isset($_SESSION["aVacaciones"])){
    $arrVacaciones=$_SESSION["aVacaciones"];    
}
$arrVacaciones[]=$oVacaciones;

$_SESSION["aVacaciones"]=$arrVacaciones;   

echo "<pre>";
var_dump($_POST);
echo "</pre>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */