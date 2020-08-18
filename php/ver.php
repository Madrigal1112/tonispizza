<!DOCTYPE html>
<html>
     <head>
          <title>Info Formulario</title>
          <link rel="stylesheet" media="screen"  href="css/estilo_tonis.css">
     </head>
     <body>
     	  <h1 align=center>Informacion Formulario</h1>
     	  <table>
     	  	<tr>

     	  		<th>No.</th>
     	  		<th>Nombre</th>
     	  		<th>Correo</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
     	  		<th>Mensaje</th>
     	  		<th>Eliminar</th>
     	  	</tr>
     	  	
     	    <?php
     	  	   include "conexion.php";
     	  	   $sql = "SELECT * FROM informacion";
     	  	   $consulta = mysql_query($conexion,$sql);

     	  	   $i=1;
     	  	   while($r=mysql_fetch_assoc($consulta)){
     	  	     echo "<tr>

     	  	     	  <td>".$i."</td>
     	  	     	  <td>".$r['nombre']."</td>
     	  	     	  <td>".$r['correo']."</td>
                           <td>".$r['telefono']."</td>
                           <td>".$r['direccion']."</td>
     	  	     	  <td>".$r['mensaje']."</td>
     	  	     	  <td><a href=\"eliminar.php?id=".$r['id']."\"><img img src=\"../imagenes/eliminar.png\">
     	  	     	    </a></td>

     	  	     	  </tr>";  

     	  	     $i++;
     	  	     	    
 }
 ?>
</table>
</body>
</html>

