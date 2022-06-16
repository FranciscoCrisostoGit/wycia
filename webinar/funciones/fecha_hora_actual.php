<?php

date_default_timezone_set('America/Santiago');
setlocale(LC_TIME,"es_CL");

//$zona_horaria_actual = date_default_timezone_get();
//setlocale(LC_TIME,"es_ES");

$hoy = strftime("%A %d de %B de %Y");

echo $hoy;

?>