<?php

//live
//$servername = "localhost";
//$username = "wyciacl_webinar";
//$password = "123456";
//$bd = "wyciacl_webinar";

//desarrollo
$servername = "localhost";
$username = "root";
$password = "";
$bd = "wycia";

$mysqli = new mysqli($servername, $username, $password, $bd);

if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>