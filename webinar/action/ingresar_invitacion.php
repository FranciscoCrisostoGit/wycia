<?php

require '../conexion.php';

//variables temporales
$webinar = "Controversias en construccion";
$nombre = $_POST['nombre'];
$correo_electronico = $_POST['correo'];
$fechas_webinar = "6 y 20 de Mayo";


//consulta sql para la base de datos
$consulta_sql = "INSERT INTO `invitados` 
                    (`nombre`, `correo_electronico`, `webinar`, `fechas_webinar`) 
                    VALUES 
                    ('$nombre', '$correo_electronico', '$webinar', '$fechas_webinar')";

//resultado de la consulta de la base de datos
$resultado = $mysqli->query($consulta_sql);

header("location: ../success.php");

?>