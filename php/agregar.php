<?php

$nombre= $_POST['introducir_nombre'];
$correo= $_POST['introducir_correo'];
$telefono= $_POST['introducir_telefono'];
$direccion= $_POST['introducir_direccion'];
$mensaje= $_POST['introducir_mensaje'];

include "conexion.php"

//INSERTAR REGISTRO
$accion= "INSERT INTO informacion (introducir_nombre,introducir_correo,introducir_telefono,introducri_direccion,introducir_mensaje) 
VALUES ('$introducir_nombre','$introducir_correo', '$introducir_telefono','$introducir_direccion','$introducir_mensaje')";
$consulta= mysql_query($conexion,$accion);

//VENTANA CONFIRMA SI SE GUARDO LA INFORMACION Y REGRESA ALA PAGINA DE FORMULARIO

         if($consulta!=null){
               print "<script>alert(\"Agregado exitosamente.\"); 
         	   window.location='../contacto.html';</script>";
         }
         else{
               print "<script>alert(\"No se pudo agregar.\"); 
         	   window.location='../contacto.html';</script>";

         }
?>