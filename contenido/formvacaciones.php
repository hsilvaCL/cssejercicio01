<?php
include('../lib/vacaciones.php');
include('../lib/constantes.php');

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
              <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="../css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php');?></div>
                    <div id="contenido">
                        <form id="formvalida" class="vacaciones form-horizontal needs-validation" action="../lib/recepcionvacaciones.php" method="post">
                                
                                <div class="form-group">
                                    <label>Rut:</label> 
                                    <input class="form-control" id="rut" name="rut" type="text">
                                </div>
                              <div class="form-group"> 
                                  <label>Nombre:</label>  <input  class="form-control" id="nombre" name="nombre" type="text" required placeholder="Escriba el nombre" >
                                   <div class="invalid-feedback">Escriba el nombre correcto</div>
                              </div>
                              <div class="form-group"> 
                            <label>Cargo:</label>  <input  class="form-control" id="cargo" name="cargo" type="text">
                              </div>
                              <div class="form-group"> 
                            <label>Fecha de inicio:</label> <input  class="form-control" id="fechaini" name="fechaini" type="date" >
                              </div>
                              <div class="form-group"> 
                                  <label>Días totales:</label> <input  class="form-control" id="diastotales" type="number">
                              </div>
                              <div class="form-group"> 
                                  <label>Comentario</label> <textarea  class="form-control" id="comentario" rows="7" cols=20 required>   </textarea>
                                  <div class="invalid-feedback">Escriba un comentario</div>
                              </div>
                            <input id="btnenviar" type="submit" value="Enviar"  >                     
                        </form>
                      
                    </div>

        </div>
        <div id="resultado"></div>
    </body>
    
    <script>
         $("#btnenviar").click(function(event){
                var form=$("#formvalida");
                
                if(form[0].checkValidity()===false){
                    event.preventDefault();
                    event.stopPropagation();   
                }       
               form.addClass("was-validated"); 
            });
            
        $("#btneliminar").on( "click", function( event ) {
           $.post( "../lib/eliminar.php", { rut:  $("#eliminarut_jq").value() }, function( data ) {
                $( "#resultado" ).html( data );
              });
           
            });
            
        $("[id*=subsolicitud]").show();
        $("#subsolicitud").addClass("active");
        $("[id*=subsolicitud]").css("display","block");
        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>
