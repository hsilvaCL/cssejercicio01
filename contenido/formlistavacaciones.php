<?php
include('../lib/vacaciones.php');
include('../lib/constantes.php');

if(isset($_SESSION["aVacaciones"])){
    $arrVacaciones=$_SESSION["aVacaciones"];    
}
 else {
     $arrVacaciones="";
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$_SESSION["hm"];?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


        <link href="../css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php');?></div>
                    <div id="contenido">
                                               
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Rut</th>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                                <th>Días</th>
                                <th>Comentario</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($arrVacaciones as $key => $oVacacion) {
                                ?>
                                <tr>
                                <td>#<?=$key +1;?></td>
                                <td><?=$oVacacion->getRut();?></td>
                                <td><?=$oVacacion->getNombre();?></td>
                                <td>Cargo</td>
                                <td>Fecha Inicio</td>
                                <td>Fecha Fin</td>
                                <td>Días</td>
                                <td>Comentario</td>
                                <td><input type="button" value="Eliminar" onclick="javascript:feliminar(<?=$oVacacion->getRut();?>);"></td>
                              </tr>
                               <?php }?>
                            </tbody>
                </table>
                    </div>

        </div>
        <div id="resultado"></div>
        <form id="formelimina" action="../lib/eliminar.php" method="post">
            <input type="hidden" name="rut" id="rut">
        </form>
    </body>
    
    <script>
        function feliminar(id){
           $("#rut").val(id);
           $("#formelimina").submit();
        }
        $("#btneliminar").on( "click", function( event ) {
           $.post( "../lib/eliminar.php", { rut:  $("#eliminarut_jq").value() }, function( data ) {
                $( "#resultado" ).html( data );
              });
           
            });
            
        $("[id*=subsolicitud]").show();
        $("#subsolicitud-lista").addClass("active");
        $("[id*=subsolicitud]").css("display","block");
        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>
