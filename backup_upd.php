<?php
//download.php
//content type
header('Content-type: text/plain');
//open/save dialog box
$ts_nombre_archivo = "Backup_resultados_".date("Y-m-d_h-i-sa").'.csv';
header('Content-Disposition: attachment; filename='.$ts_nombre_archivo);
//read from server and write to buffer
readfile('backup.txt');
?>
