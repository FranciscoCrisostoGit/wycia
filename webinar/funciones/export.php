<?php
/*
* iTech Empires:  Export Data from MySQL to CSV Script
* Version: 1.0.0
* Page: Export
*/

// Database Connection
require("../conexion.php");


// get invitados
$query = "select correo_electronico,nombre from invitados order by id desc";
if (!$result = mysqli_query($mysqli, $query)) {
    exit(mysqli_error($mysqli));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=invitados.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('correo', 'nombre'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>