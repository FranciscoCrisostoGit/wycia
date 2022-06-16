<?php

  require("../conexion.php");
     
  $consulta_sql = "select * from invitados order by id desc"; 
  
  // Ejecuta la sentencia SQL 
   $resultado = $mysqli->query($consulta_sql);
  
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");
  
  
  while($fila = mysqli_fetch_assoc($resultado)) 
  { 
    echo '<tr>';
    
    ////////////////////////////////////////////////////////////////////////////////
    echo '<td>'; 
    echo $fila['id'];
    echo '</td>'; 
    ///////////////////////////////////////////////////////////////////////////////
    echo '<td>'; 
    echo $fila['webinar'];
    echo '</td>'; 
    ///////////////////////////////////////////////////////////////////////////////
    echo '<td>'; 
    echo $fila['fechas_webinar'];
    echo '</td>'; 
    ///////////////////////////////////////////////////////////////////////////////
    echo '<td>'; 
    echo $fila['creado'];
    echo '</td>'; 
    ///////////////////////////////////////////////////////////////////////////////
    echo '<td>'; 
    echo $fila['nombre'];
    echo '</td>'; 
    ///////////////////////////////////////////////////////////////////////////////
    echo '<td>'; 
    echo $fila['correo_electronico'];
    echo '</td>'; 
    
    echo '</tr>';
    
  } 

?>



