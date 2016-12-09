<?php
//
// Backup
	require_once 'clases_base.php' ;
	require_once 'class_paginai.php' ;
	require_once 'clase_resultado.php' ;
	require_once 'db.php' ;
	//
	// Instancia clases
	//
	$Entidad = new resultado() ;
	//
	//
	$ts_archivo = 'backup.txt';
	$Entidad->exportar_a_archivo($ts_archivo);
	//
	$pagina = new Paginai('Backup','</td><td>') ;
	$pagina->sinborde();
	//
	// Descarga
	$texto = 		'</td><td align="right" width="80%" ><a href="backup_upd.php"> <button class="botonmenu"> Descargar </button>' ;
	$pagina->insertarCuerpo($texto);
	$texto = 		'</td><td align="right" width="80%" ><a href="index.php"> <button class="botonmenu"> Volver </button>' ;
	$pagina->insertarCuerpo($texto);
	$pagina->graficar();
?>
