<?php 
require_once 'class_paginai.php' ; 
require_once 'clases_base.php' ;
	//
	// Dibujar pagina
	//
$pagina = new Paginai('LABORATORIO','</td><td>') ;
$pagina->sinborde();

	//
	// Programas en desarrollo
	//
	//
	// Llamados
$texto = 		'<a href="resultados.php"> <button class="botonmenu"> Resultados </button>' ;
$pagina->insertarCuerpo($texto);
$texto = 		'<a href="backup.php"> <button class="botonmenu"> Generar Backup </button>' ;
$pagina->insertarCuerpo($texto);
$pagina->graficar();
?>
