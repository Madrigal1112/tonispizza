<?php

//CONEXION A LA BASE DE DATOS

$hostname_db = "localhost";
$database_db = "mensajes";
$username_db = "root";
$password_db = "root";

   //CONECTAR A LA BASE DE DATOS

     $conexion = mysql_connect($hostname_db, $username_db, $password_db)
     or die ("No pudo realizar conexion");

   //SELECCIONAR LA BASE DE DATOS DONDE GUARDARA LA INFORMACION

     mysql_select_db($conexion, $database_db)
     or die ("Ninguna DB seleccionada");

?>

